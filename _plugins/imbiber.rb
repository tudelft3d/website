#!/usr/bin/ruby

# Copyright (c) 2015 Ken Arroyo Ohori

# Permission is hereby granted, free of charge, to any person obtaining a copy
# of this software and associated documentation files (the "Software"), to deal
# in the Software without restriction, including without limitation the rights
# to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
# copies of the Software, and to permit persons to whom the Software is
# furnished to do so, subject to the following conditions:

# The above copyright notice and this permission notice shall be included in
# all copies or substantial portions of the Software.

# THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
# IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
# FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
# AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
# LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
# OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
# THE SOFTWARE.

require 'set'
require 'pp'
require 'parslet'
require 'parslet/convenience'
require 'htmlentities'

require_relative 'specialletters'
require_relative 'monthutils'
require_relative 'localisedtext'
require_relative 'groups'

class DocumentParser < Parslet::Parser

	def stri(str)
		key_chars = str.split(//)
	    key_chars.collect! { |char| match["#{char.upcase}#{char.downcase}"] }.
		reduce(:>>)
	end

	root(:document)

	rule(:whitespace) { match['\s\n\r'].repeat(1) }
	rule(:whitespace?) { whitespace.maybe }
	rule(:bracketedtext) { str('{') >> (match['^{}'] | bracketedtext).repeat >> str('}') }
	rule(:parenthesisedtext) { str('(') >> (str('\)') | match['^)']).repeat >> str(')') }
	rule(:newline) { str("\n") >> str("\r").maybe }

	rule(:document) { anyonething.repeat }
	rule(:anyonething) { nothing | something }
	rule(:nothing) { (str('@').absent? >> any).repeat(1) }
	rule(:something) { comment | string | preamble | entry.as(:entry) }

	rule(:comment) { str('@') >> stri('comment') >> (newline.absent? >> any).repeat >> newline }
	rule(:string) { str('@') >> stri('string') >> whitespace? >> (bracketedtext | parenthesisedtext) }
	rule(:preamble) { str('@') >> stri('preamble') >> whitespace? >> (bracketedtext | parenthesisedtext) }

	rule(:entry) { str('@') >> entryclass.as(:class) >> whitespace? >> entrycontents }
	rule(:entryclass) { match['^\s\n\r{},='].repeat(1) }
	rule(:entrycontents) { str('{') >> whitespace? >> entrykey.as(:key) >> whitespace? >> str(',') >> whitespace? >> entryfields.as(:fields) >> str(',').maybe >> whitespace? >> str('}') }
	rule(:entrykey) { match['^\s\n\r{},='].repeat(1) }
	rule(:entryfields) { entryfield.as(:field) >> whitespace? >> (str(',') >> whitespace? >> entryfield.as(:field) >> whitespace?).repeat }
	rule(:entryfield) { entryfieldname.as(:name) >> whitespace? >> str('=') >> whitespace? >> (bracketedvalue | quotedvalue | plainvalue.as(:value)).repeat }
	rule(:entryfieldname) { (match['^\s\n\r{},='] | bracketedtext).repeat(1) }

	rule(:bracketedvalue) { str('{') >> (match['^{}'] | bracketedtext).repeat.as(:value) >> str('}') }
	rule(:quotedvalue) { str('"') >> (match['^"{}'] | bracketedtext).repeat.as(:value) >> str('"') }
	rule(:plainvalue) { match['a-zA-Z0-9'].repeat(1) }
	
end

class AuthorsParser < Parslet::Parser

	root(:authorslist)

	rule(:whitespace) { match['\s\n\r'].repeat(1) }
	rule(:whitespace?) { whitespace.maybe }
	rule(:bracketedtext) { str('{') >> (match['^{}'] | bracketedtext).repeat >> str('}') }

	rule(:authorslist) { (whitespace | str('and ') | author.as(:author)).repeat }
	rule(:author) { (str(' and ').absent? >> (match['^{}'] | bracketedtext)).repeat(1) }

end

class NameParser < Parslet::Parser

	root(:name)

	rule(:whitespace) { match['\s\n\r'].repeat(1) }
	rule(:bracketedtext) { str('{') >> (pseudoletter | bracketedtext | whitespace.as(:space)).repeat.as(:bracketedtext) >> str('}') }

	rule(:name) { (word | whitespace | str(',').as(:comma)).repeat.as(:name) }
	rule(:word) { (pseudoletter | bracketedtext).repeat(1).as(:word) | str('.') }
	rule(:pseudoletter) { specialletter.as(:specialletter) | letter.as(:letter) | badletter.as(:badletter) }
	rule(:letter) { match['a-zA-Z\-'] }
	rule(:bracketedletter) { str("{") >> letter >> str("}") }
	rule(:badletter) { match['&;'] }
	rule(:specialletter) { speciallyencodedletter | escapedletter | letterwithmodifier }
	rule(:speciallyencodedletter) { str('---') | str('--') | str('``') | str('`') | str('\'\'') | str('\'') }
	rule(:escapedletter) { str('\\') >> str('&') }
	rule(:letterwithmodifier) { str('\\') >> modifier >> (bracketedletter | letter) }
	rule(:modifier) { str("\'") | str("\"") | str("\^") | str("\`") | str("c") | str("v") | str("~") }

end

class NameTransformer < Parslet::Transform

	def initialize(nameformat = :firstlast)
		super()
		@@nameformat = nameformat
		@@sl = SpecialLetters.new
	end

	rule(:letter => simple(:l)) { l.to_s }
	rule(:specialletter => simple(:l)) { @@sl.convert(l.to_s) }
	rule(:space => simple(:s)) { " " }
	rule(:comma => simple(:c)) { "," }
	rule(:bracketedtext => sequence(:s)) { s.join("") }
	rule(:word => sequence(:w)) {
		word = w.join("")
		if word.length == 1 and word[0].upcase == word[0] then
			word << "."
		end
		word
	}

	rule(:badletter => simple(:bl)) {
		puts "Bad letter inside name: " + bl.to_s
		bl.to_s
	}
	
	rule(:name => subtree(:s)) {
		commas = 0
		s.each do |token|
			if token == "," then
				commas += 1
			end
		end
		case commas
		when 0
			first = s[0..-2].join(" ")
			last = s[-1]
			case @@nameformat
			when :firstlast
				first + " " + last
			when :lastfirst
				last + ", " + first
			end
		when 1
			first = []
			last = []
			commassofar = 0
			s.each do |token|
				if token == "," then
					commassofar += 1
				elsif commassofar == 0
					last.push(token)
				else
					first.push(token)
				end
			end
			case @@nameformat
			when :firstlast
				first.join(" ") + " " + last.join(" ")
			when :lastfirst
				last.join(" ") + ", " + first.join(" ")
			end
		else
			puts "Bad name (too many commas): " + s.join(" ")
			s.join(" ")
		end
	}
end

class TextParser < Parslet::Parser

	root(:text)

	rule(:whitespace) { match['\s\n\r'].repeat(1) }
	rule(:bracketedtext) { str('{') >> (pseudoletterpreservecase | bracketedtext | whitespace.as(:space)).repeat.as(:bracketedtext) >> str('}') }

	rule(:text) { (whitespace | word).repeat.as(:text) }
	rule(:word) { (pseudoletter | bracketedtext).repeat(1).as(:word) }
	rule(:pseudoletter) { specialletter.as(:specialletter) | letter.as(:letter) }
	rule(:pseudoletterpreservecase) { specialletter.as(:specialletterpreservecase) | letter.as(:letterpreservecase) }
	rule(:letter) { match['a-zA-Z0-9\-_:;+=/.*,?~&()%#'] }
	rule(:bracketedletter) { str("{") >> letter >> str("}") }
	rule(:specialletter) { speciallyencodedletter | escapedletter | letterwithmodifier }
	rule(:speciallyencodedletter) { str('---') | str('--') | str('``') | str('`') | str('\'\'') | str('\'') }
	rule(:escapedletter) { str('\\') >> str('&') }
	rule(:letterwithmodifier) { str('\\') >> modifier >> (bracketedletter | letter) }
	rule(:modifier) { str("\'") | str("\"") | str("\^") | str("\`") | str("c") | str("v") | str("~") }

end

class TextTransformer < Parslet::Transform

	def initialize(casetouse = :unchanged)
		super()
		@@casetouse = casetouse
		@@sl = SpecialLetters.new
	end

	rule(:letter => simple(:l)) { 
		case @@casetouse
		when :sentence
			l.to_s.downcase
		when :title
			l.to_s.downcase
		when :unchanged
			l.to_s
		end

	}

	rule(:specialletter => simple(:l)) {
		case @@casetouse
		when :sentence
			@@sl.convert(l.to_s.downcase)
		when :title
			@@sl.convert(l.to_s.downcase)
		when :unchanged
			@@sl.convert(l.to_s)
		end
	}

	rule(:space => simple(:s)) {
		" "
	}

	rule(:bracketedtext => sequence(:s)) { s.join("") }
	rule(:letterpreservecase => simple(:l)) { l.to_s }
	rule(:specialletterpreservecase => simple(:l)) { @@sl.convert(l.to_s) }

	rule(:word => sequence(:w)) {
		case @@casetouse
		when :sentence
			w.join("")
		when :title
			word = w.join("")
			word = word[0].upcase + word[1..-1]
		when :unchanged
			w.join("")
		end
	}

	rule(:text => sequence(:t)) {
		case @@casetouse
		when :sentence
			text = t.join(" ")
			text = text[0].upcase + text[1..-1]
			text
		when :title
			t.join(" ")
		when :unchanged
			t.join(" ")
		end
	}

end

class MonthParser < Parslet::Parser

	def stri(str)
		key_chars = str.split(//)
	    key_chars.collect! { |char| match["#{char.upcase}#{char.downcase}"] }.
		reduce(:>>)
	end

	root(:number)

	rule(:number) { digit.repeat(1).as(:number) | monthname | any.repeat(1).as(:text) }
	rule(:digit) { match['0-9'] }
	rule(:monthname) { abbreviatedmonthname.as(:abbreviatedmonthname) | fullmonthname.as(:fullmonthname) }
	rule(:abbreviatedmonthname) { stri('jan') | stri('feb') | stri('mar') | stri('apr') | stri('may') | stri('jun') | stri('jul') | stri('aug') | stri('sep') | stri('oct') | stri('nov') | stri('dec') }
	rule(:fullmonthname) { stri('january') | 
	                       stri('february') |
	                       stri('march') |
	                       stri('april') |
	                       stri('may') |
	                       stri('june') |
	                       stri('july') |
	                       stri('august') |
	                       stri('september') |
	                       stri('october') |
	                       stri('november') |
	                       stri('december') }
end

class MonthTransformer < Parslet::Transform
	mu = MonthUtils.new

	rule(:fullmonthname => simple(:fmn)) { mu.full_month_to_abbreviated_month(fmn) }
	rule(:abbreviatedmonthname => simple(:amn)) { amn.to_s }
	rule(:number => simple(:n)) { mu.number_to_abbreviated_month(n) }
	rule(:text => simple(:t)) { t.to_s }
end

class Imbiber
	def initialize(options = Hash.new)
		puts "Imbiber initialize()"
		pp options

		@entries = {}
		@options = {
			:lang => :en,
			:nameformat => :firstlast,
			:titlecase => :sentence,
			:beforeentry => "<p>",
			:afterentry => "</p>",
			:beforegrouptitle => "<h3>",
			:aftergrouptitle => "</h3>",
			:beforesubgrouptitle => "<h4>",
			:aftersubgrouptitle => "</h4>"
		}
		options.each do |key, value|
			if !@options.has_key?(key) then
				@options[key] = value
			elsif @options[key].kind_of?(Symbol) then
				@options[key] = value.to_sym
			else
				@options[key] = value
			end
					
		end

		@bibfields = ["address", "author", "booktitle", "chapter", "edition", "editor", "howpublished", "institution", "journal", "month", "note", "number", "organization", "pages", "publisher", "school", "series", "title", "type", "year"].to_set

		@lt = LocalisedText.new(@options[:lang])
		@he = HTMLEntities.new
		@mu = MonthUtils.new
		@g = Groups.new
	end

	def to_s
		@entries.to_s
	end

	def entries
		@entries
	end

	def list_to_string(l)
		case l.length
		when 0
			return ""
		when 1
			return l[0]
		when 2
			return l[0] + ' ' + @lt.localise(:and) + ' ' + l[1]
		else
			return l[0..-2].join(', ') + ' ' + @lt.localise(:and) + ' ' + l[-1]
		end
	end

	def bibtex_of(entry)
		bib = '@' + entry[:class] + '{' + entry[:key] + ',' + "\n"
		entry.each do |field|
			if @bibfields.include?(field[0].to_s) then
				bib << "\t" + field[0].to_s + ' = {' + entry[:bibtex][field[0].to_s] + "},\n"
			end
		end
		bib = bib[0..-3] + "\n" + '}'
		bib
	end

	def read(path)
		puts "Reading " + path + "..."

		if !File.exist?(path) then
			puts "File does not exist"
			return
		end

		text = File.read(path)
		entriestree = DocumentParser.new.parse(text)
		entriestree.each do |entrybranch|
			key = entrybranch[:entry][:key].to_sym
			# puts key

			# Repeated key, skip
			if @entries.has_key?(key) then
				next
			end

			# Put in nicely formatted fields
			@entries[key] = {}
			@entries[key][:class] = entrybranch[:entry][:class]
			@entries[key][:key] = key.to_s
			@entries[key][:bibtex] = {}
			entrybranch[:entry][:fields].each do |field|
				# puts "\t" + field[:field][0][:name].to_s.downcase
				@entries[key][:bibtex][field[:field][0][:name].to_s.downcase] = field[:field][1][:value].to_s
				case field[:field][0][:name].to_s.downcase
				when "author"
					# puts field[:field][1][:value].to_s
					authorstree = AuthorsParser.new.parse(field[:field][1][:value].to_s)
					@entries[key][:author] = []
					authorstree.each do |author|
						nametree = NameTransformer.new(@options[:nameformat]).apply(NameParser.new.parse_with_debug(author[:author].to_s))
						@entries[key][:author].push(nametree)
					end
				when "editor"
					editorstree = AuthorsParser.new.parse(field[:field][1][:value].to_s)
					@entries[key][:editor] = []
					editorstree.each do |editor|
						nametree = NameTransformer.new(@options[:nameformat]).apply(NameParser.new.parse(editor[:author].to_s))
						@entries[key][:editor].push(nametree)
					end
				when "title"
					titletree = TextTransformer.new(@options[:titlecase]).apply(TextParser.new.parse_with_debug(field[:field][1][:value].to_s))
					@entries[key][:title] = titletree.to_s
				when "month"
					monthtree = MonthTransformer.new.apply(MonthParser.new.parse(field[:field][1][:value].to_s))
					@entries[key][:month] = monthtree.to_s
				else
					texttree = TextTransformer.new(:unchanged).apply(TextParser.new.parse_with_debug(field[:field][1][:value].to_s))
					@entries[key][field[:field][0][:name].to_s.downcase.to_sym] = texttree.to_s
				end
			end
		end

		puts "Read " + @entries.size.to_s + " entries"
	end

	def html_of(key)
		if !@entries.has_key?(key) then
			return ""
		end

		outwhat = ""
		outwho = ""
		outwhere = []
		outnote = ""

		case @entries[key][:class]
		when "article"
			outwhat = @entries[key][:title]
			outwho = list_to_string(@entries[key][:author])
			outwhere.push("<em>" + @entries[key][:journal] + "</em>")
			if @entries[key].has_key?(:volume) then
				outwhere[-1] << ' ' + @entries[key][:volume]
				if @entries[key].has_key?(:number) then
					outwhere[-1] << '(' + @entries[key][:number] + ')'
				end
			elsif @entries[key].has_key?(:number) then
				outwhere[-1] << ' ' + @entries[key][:number]
			end
			if @entries[key].has_key?(:month) then
				outwhere.push(@lt.localisedmonth(@entries[key][:month]) + ' ' + @entries[key][:year])
			else
				outwhere.push(@entries[key][:year])
			end
			if @entries[key].has_key?(:pages) then
				outwhere.push(@lt.localise(:pp) + ' ' + @entries[key][:pages])
			end
			if @entries[key].has_key?(:note) then
				outnote = @entries[key][:note]
			end

		when "book"
			outwhat = @entries[key][:title]
			if @entries[key].has_key?(:author) then
				outwho = list_to_string(@entries[key][:author])
			else
				outwho = list_to_string(@entries[key][:editor])
			end
			if @entries[key].has_key?(:series) then
				outwhere.push(@entries[key][:series])
				if @entries[key].has_key?(:volume) then
					outwhere[-1] << ' ' << @entries[key][:volume]
					if @entries[key].has_key?(:number) then
						outwhere[-1] << '(' + @entries[key][:number] + ')'
					end
				elsif @entries[key].has_key?(:number) then
					outwhere[-1] << ' ' + @entries[key][:number]
				end
			end
			if @entries[key].has_key?(:author) && @entries[key].has_key?(:editor) then
				outwhere.push(list_to_string(@entries[key][:editor]) + ' (' + @lt.localise(:eds) + ')')
			end
			outwhere.push(@entries[key][:publisher])
			if @entries[key].has_key?(:edition) then
				outwhere.push(@entries[key][:edition])
			end
			if @entries[key].has_key?(:address) then
				outwhere.push(@entries[key][:address])
			end
			if @entries[key].has_key?(:month) then
				outwhere.push(@lt.localisedmonth(@entries[key][:month]) + ' ' + @entries[key][:year])
			else
				outwhere.push(@entries[key][:year])
			end
			if @entries[key].has_key?(:pages) then
				outwhere.push(@lt.localise(:pp) + ' ' + @entries[key][:pages])
			end
			if @entries[key].has_key?(:note) then
				outnote = @entries[key][:note]
			end

		when "booklet"
			outwhat = @entries[key][:title]
			if @entries[key].has_key?(:author) then
				outwho = list_to_string(@entries[key][:author])
			end
			if @entries[key].has_key?(:howpublished) then
				outwhere.push("<em>" + list_to_string(@entries[key][:howpublished]) + "</em>")
			end
			if @entries[key].has_key?(:address) then
				outwhere.push(@entries[key][:address])
			end
			if @entries[key].has_key?(:month) then
				outwhere.push(@lt.localisedmonth(@entries[key][:month]) + ' ' + @entries[key][:year])
			else
				outwhere.push(@entries[key][:year])
			end
			if @entries[key].has_key?(:pages) then
				outwhere.push(@lt.localise(:pp) + ' ' + @entries[key][:pages])
			end
			if @entries[key].has_key?(:note) then
				outnote = @entries[key][:note]
			end

		when "inbook"
			outwhat = @entries[key][:title]
			if @entries[key].has_key?(:author) then
				outwho = list_to_string(@entries[key][:author])
			else
				outwho = list_to_string(@entries[key][:editor])
			end
			if @entries[key].has_key?(:author) && @entries[key].has_key?(:editor) then
				outwhere.push(list_to_string(@entries[key][:editor]) + ' (' + @lt.localise(:eds) + ')')
			end
			if @entries[key].has_key?(:type) then
				outwhere.push(@entries[key][:type])
			end
			if @entries[key].has_key?(:chapter) then
				outwhere.push(@lt.localise(:Chapter) + ' ' + @entries[key][:chapter])
			end
			if @entries[key].has_key?(:series) then
				outwhere.push(@entries[key][:series])
				if @entries[key].has_key?(:volume) then
					outwhere[-1] << ' ' << @entries[key][:volume]
					if @entries[key].has_key?(:number) then
						outwhere[-1] << '(' + @entries[key][:number] + ')'
					end
				elsif @entries[key].has_key?(:number) then
					outwhere[-1] << ' ' + @entries[key][:number]
				end
			end
			outwhere.push(@entries[key][:publisher])
			if @entries[key].has_key?(:edition) then
				outwhere.push(@entries[key][:edition])
			end
			if @entries[key].has_key?(:address) then
				outwhere.push(@entries[key][:address])
			end
			if @entries[key].has_key?(:month) then
				outwhere.push(@lt.localisedmonth(@entries[key][:month]) + ' ' + @entries[key][:year])
			else
				outwhere.push(@entries[key][:year])
			end
			if @entries[key].has_key?(:pages) then
				outwhere.push(@lt.localise(:pp) + ' ' + @entries[key][:pages])
			end
			if @entries[key].has_key?(:note) then
				outnote = @entries[key][:note]
			end

		when "incollection"
			outwhat = @entries[key][:title]
			outwho = list_to_string(@entries[key][:author])
			if @entries[key].has_key?(:editor) then
				outwhere.push(@lt.localise(:In) + ' ')
				outwhere[-1] << list_to_string(@entries[key][:editor]) + ' (' + @lt.localise(:eds) + ')'
			end
			outwhere.push("<em>" + @entries[key][:booktitle] + "</em>")
			if @entries[key].has_key?(:type) then
				outwhere.push(@entries[key][:type])
			end
			if @entries[key].has_key?(:chapter) then
				outwhere.push(@lt.localise(:Chapter) + ' ' + @entries[key][:chapter])
			end
			if @entries[key].has_key?(:series) then
				outwhere.push(@entries[key][:series])
				if @entries[key].has_key?(:volume) then
					outwhere[-1] << ' ' << @entries[key][:volume]
					if @entries[key].has_key?(:number) then
						outwhere[-1] << '(' + @entries[key][:number] + ')'
					end
				elsif @entries[key].has_key?(:number) then
					outwhere[-1] << ' ' + @entries[key][:number]
				end
			end
			outwhere.push(@entries[key][:publisher])
			if @entries[key].has_key?(:edition) then
				outwhere.push(@entries[key][:edition])
			end
			if @entries[key].has_key?(:address) then
				outwhere.push(@entries[key][:address])
			end
			if @entries[key].has_key?(:month) then
				outwhere.push(@lt.localisedmonth(@entries[key][:month]) + ' ' + @entries[key][:year])
			else
				outwhere.push(@entries[key][:year])
			end
			if @entries[key].has_key?(:pages) then
				outwhere.push(@lt.localise(:pp) + ' ' + @entries[key][:pages])
			end
			if @entries[key].has_key?(:note) then
				outnote = @entries[key][:note]
			end

		when "conference","inproceedings"
			outwhat = @entries[key][:title]
			outwho = list_to_string(@entries[key][:author])
			if @entries[key].has_key?(:editor) then
				outwhere.push(@lt.localise(:In) + ' ')
				outwhere[-1] << list_to_string(@entries[key][:editor]) + ' (' + @lt.localise(:eds) + ')'
			end
			outwhere.push("<em>" + @entries[key][:booktitle] + "</em>")
			if @entries[key].has_key?(:chapter) then
				outwhere.push(@lt.localise(:Chapter) + ' ' + @entries[key][:chapter])
			end
			if @entries[key].has_key?(:series) then
				outwhere.push(@entries[key][:series])
				if @entries[key].has_key?(:volume) then
					outwhere[-1] << ' ' << @entries[key][:volume]
					if @entries[key].has_key?(:number) then
						outwhere[-1] << '(' + @entries[key][:number] + ')'
					end
				elsif @entries[key].has_key?(:number) then
					outwhere[-1] << ' ' + @entries[key][:number]
				end
			end
			if @entries[key].has_key?(:organization) then
				outwhere.push(@entries[key][:organization])
			end
			if @entries[key].has_key?(:publisher) then
				outwhere.push(@entries[key][:publisher])
			end
			if @entries[key].has_key?(:address) then
				outwhere.push(@entries[key][:address])
			end
			if @entries[key].has_key?(:month) then
				outwhere.push(@lt.localisedmonth(@entries[key][:month]) + ' ' + @entries[key][:year])
			else
				outwhere.push(@entries[key][:year])
			end
			if @entries[key].has_key?(:pages) then
				outwhere.push(@lt.localise(:pp) + ' ' + @entries[key][:pages])
			end
			if @entries[key].has_key?(:note) then
				outnote = @entries[key][:note]
			end

		when "manual"
			outwhat = @entries[key][:title]
			if @entries[key].has_key?(:author) then
				outwho = list_to_string(@entries[key][:author])
			elsif @entries.has_key?(:organization) then
				outwho = @entries[key][:organization]
			end
			if @entries[key].has_key?(:author) && @entries.has_key?(:organization) then
				outwhere.push(@entries[key][:organization])
			end
			if @entries[key].has_key?(:edition) then
				outwhere.push(@entries[key][:edition])
			end
			if @entries[key].has_key?(:address) then
				outwhere.push(@entries[key][:address])
			end
			if @entries[key].has_key?(:month) then
				outwhere.push(@lt.localisedmonth(@entries[key][:month]) + ' ' + @entries[key][:year])
			else
				outwhere.push(@entries[key][:year])
			end
			if @entries[key].has_key?(:note) then
				outnote = @entries[key][:note]
			end

		when "mastersthesis"
			outwhat = @entries[key][:title]
			outwho = list_to_string(@entries[key][:author])
			if @entries[key].has_key?(:type) then
				outwhere.push(@entries[key][:type])
			else
				outwhere.push(@lt.localise(:mscthesis))
			end
			outwhere.push(@entries[key][:school])
			if @entries[key].has_key?(:month) then
				outwhere.push(@lt.localisedmonth(@entries[key][:month]) + ' ' + @entries[key][:year])
			else
				outwhere.push(@entries[key][:year])
			end
			if @entries[key].has_key?(:note) then
				outnote = @entries[key][:note]
			end

		when "misc"
			if @entries[key].has_key?(:title) then
				outwhat = @entries[key][:title]
			end
			if @entries[key].has_key?(:author) then
				outwho = list_to_string(@entries[key][:author])
			end
			if @entries[key].has_key?(:journal) then
				outwhere.push("<em>" + @entries[key][:journal] + "</em>")
			end
			if @entries[key].has_key?(:volume) then
				outwhere[-1] << ' ' + @entries[key][:volume]
				if @entries[key].has_key?(:number) then
					outwhere[-1] << '(' + @entries[key][:number] + ')'
				end
			elsif @entries[key].has_key?(:number) then
				outwhere[-1] << ' ' + @entries[key][:number]
			end
			if @entries[key].has_key?(:howpublished) then
				outwhere.push(@entries[key][:howpublished])
			end
			if @entries[key].has_key?(:month) && @entries[key].has_key?(:year) then
				outwhere.push(@lt.localisedmonth(@entries[key][:month]) + ' ' + @entries[key][:year])
			elsif @entries[key].has_key?(:year) then
				outwhere.push(@entries[key][:year])
			end
			if @entries[key].has_key?(:pages) then
				outwhere.push(@lt.localise(:pp) + ' ' + @entries[key][:pages])
			end
			if @entries[key].has_key?(:note) then
				outnote = @entries[key][:note]
			end

		when "phdthesis"
			outwhat = @entries[key][:title]
			outwho = list_to_string(@entries[key][:author])
			if @entries[key].has_key?(:type) then
				outwhere.push(@entries[key][:type])
			else
				outwhere.push(@lt.localise(:phdthesis))
			end
			outwhere.push(@entries[key][:school])
			if @entries[key].has_key?(:month) then
				outwhere.push(@lt.localisedmonth(@entries[key][:month]) + ' ' + @entries[key][:year])
			else
				outwhere.push(@entries[key][:year])
			end
			if @entries[key].has_key?(:note) then
				outnote = @entries[key][:note]
			end

		when "proceedings"
			outwhat = @entries[key][:title]
			if @entries[key].has_key?(:editor) then
				outwho = list_to_string(@entries[key][:editor])
			end
			if @entries[key].has_key?(:series) then
				outwhere.push(@entries[key][:series])
				if @entries[key].has_key?(:volume) then
					outwhere[-1] << ' ' << @entries[key][:volume]
					if @entries[key].has_key?(:number) then
						outwhere[-1] << '(' + @entries[key][:number] + ')'
					end
				elsif @entries[key].has_key?(:number) then
					outwhere[-1] << ' ' + @entries[key][:number]
				end
			end
			if @entries[key].has_key?(:organization) then
				outwhere.push(@entries[key][:organization])
			end
			if @entries[key].has_key?(:publisher) then
				outwhere.push(@entries[key][:publisher])
			end
			if @entries[key].has_key?(:address) then
				outwhere.push(@entries[key][:address])
			end
			if @entries[key].has_key?(:month) then
				outwhere.push(@lt.localisedmonth(@entries[key][:month]) + ' ' + @entries[key][:year])
			else
				outwhere.push(@entries[key][:year])
			end
			if @entries[key].has_key?(:note) then
				outnote = @entries[key][:note]
			end

		when "techreport"
			outwhat = @entries[key][:title]
			outwho = list_to_string(@entries[key][:author])
			if @entries[key].has_key?(:type) then
				outwhere.push(@entries[key][:type])
			else
				outwhere.push(@lt.localise(:techreport))
			end
			if @entries[key].has_key?(:number) then
				outwhere[-1] << ' ' + @entries[key][:number]
			end
			outwhere.push(@entries[key][:institution])
			if @entries[key].has_key?(:month) then
				outwhere.push(@lt.localisedmonth(@entries[key][:month]) + ' ' + @entries[key][:year])
			else
				outwhere.push(@entries[key][:year])
			end
			if @entries[key].has_key?(:note) then
				outnote = @entries[key][:note]
			end

		when "unpublished"
			outwhat = @entries[key][:title]
			outwho = list_to_string(@entries[key][:author])
			outwhere.push("<em>" + @entries[key][:note] + "</em>")
			if @entries[key].has_key?(:month) then
				outwhere.push(@lt.localisedmonth(@entries[key][:month]) + ' ' + @entries[key][:year])
			else
				outwhere.push(@entries[key][:year])
			end

		else
			outwho = '<span class="label label-important">Unrecognised entry type: ' + @entries[key][:class] + '</span>'
		end

		if outwho.nil? then
			outwho = ""
		end

		if outwhat.length > 0 then
			outwhat = "<strong>" + @he.encode(outwhat, :named) + "</strong>. "
		end
		if outwho.length > 0 then
			outwho = @he.encode(outwho, :named) + ". "
		end
		if outwhere.length > 0 then
			outwhere = @he.encode(outwhere.join(', '), :named) + '. '
			outwhere = outwhere.gsub('&lt;em&gt;', '<em>').gsub('&lt;/em&gt;', '</em>')
		else
			outwhere = ""
		end
		if outnote.length > 0 then
			outnote << ". "
		end
		out = outwhat + outwho + outwhere + outnote

		if @entries[key].has_key?(:info) then
			out << '<span class="text-danger"> ' + @entries[key][:info] + '</span>.'
		end
		out << "<br />"
		if @entries[key].has_key?(:pdf) then
			out << ' <a href="' + @entries[key][:pdf] + '"><i class="fa fa-file-pdf-o"></i> PDF</a>'
		end
		if @entries[key].has_key?(:paper) then
			out << ' <a href="' + @entries[key][:paper] + '"><i class="fa fa-file-pdf-o"></i> ' + @lt.localise(:Paper) + '</a>'
		end
		if @entries[key].has_key?(:poster) then
			out << ' <a href="' + @entries[key][:poster] + '"><i class="fa-file-pdf-o"></i> ' + @lt.localise(:Poster) + '</a>'
		end
		if @entries[key].has_key?(:presentation) then
			out << ' <a href="' + @entries[key][:presentation] + '"><i class="fa-file-pdf-o"></i> ' + @lt.localise(:Slides) + '</a>'
		end
		if @entries[key].has_key?(:doi) then
			if !@entries[key][:doi].start_with?("http://", "https://", "ftp://", "//") then
				@entries[key][:doi] = "http://dx.doi.org/" + @entries[key][:doi]
			end
			out << ' <a href="' + @entries[key][:doi] + '"><i class="fa fa-external-link"></i> DOI</a>'
		end
		if @entries[key].has_key?(:url) then
			out << ' <a href="' + @entries[key][:url] + '"><i class="fa fa-external-link"></i> ' + @lt.localise(:www) + '</a>'
		end
		out << ' <a href="#bib' + key.to_s + '" data-toggle="collapse"><i class="fa fa-caret-square-o-down"></i> BibTeX</a>'
		out << '<div id="bib' + key.to_s + '" class="collapse"  tabindex="-1"><pre>' + bibtex_of(@entries[key]) + '</pre></div>'
		
		@options[:beforeentry] + out + @options[:afterentry]
	end

	def html_of_all(groupby = :year, sortby = :date, order = :desc, idswithprefix = false)
		puts "HTML of " + @entries.size.to_s + " entries..."

		# Make groups
		groups = {}
		@entries.each do |entry|
			entry[1][:sortingvalue] = ""

			case sortby
			when :date
				if entry[1].has_key?(:year) then
					entry[1][:sortingvalue] << entry[1][:year].to_s
				else
					entry[1][:sortingvalue] << "0000"
				end
				if entry[1].has_key?(:month) then
					entry[1][:sortingvalue] << @mu.abbreviated_month_to_sorting_number(entry[1][:month])
				else
					entry[1][:sortingvalue] << "00"
				end
			end
			entry[1][:sortingvalue] << entry[1][:key]

			case groupby
			when :year
				if entry[1].has_key?(:year) then
					if !groups.has_key?(entry[1][:year]) then
						groups[entry[1][:year]] = {:sortingvalue => entry[1][:year], :entries => []}
					end
					groups[entry[1][:year]][:entries].push({:sortingvalue => entry[1][:sortingvalue], :entry => html_of(entry[0])})
				else
					if !groups.has_key?(@lt.localise(:Unknown)) then
						groups[@lt.localise(:Unknown)] = {:sortingvalue => "0000", :entries => []}
					end
					groups[@lt.localise(:Unknown)][:entries].push({:sortingvalue => entry[1][:sortingvalue], :entry => html_of(entry[0])})
				end
			when :class
				# puts entry[1][:class].to_s
				if !groups.has_key?(entry[1][:class].to_s) then
					groups[entry[1][:class].to_s] = {:sortingvalue => @g.groupof(entry[1][:class].to_s), :entries => [], :nicename => @lt.classname(entry[1][:class].to_s)}
				end
				groups[entry[1][:class].to_s][:entries].push({:sortingvalue => entry[1][:sortingvalue], :entry => html_of(entry[0])})
			end
		end
		
		# Sort groups
		# pp groups
		sorted_groups = groups.sort_by { |k, v| v[:sortingvalue] }
		if order == :desc then
			sorted_groups = sorted_groups.reverse
		end

		# Make HTML
		html = ""
		sorted_groups.each do |group|
			# pp group[1][:entries]
			if idswithprefix != false then
				html << "<section id=\"" << idswithprefix << group[0] << "\">\n"
			end
			html << @options[:beforegrouptitle]
			if group[1].has_key?(:nicename) then
				html << group[1][:nicename]
			else
			 	html << group[0]
			end
			html << @options[:aftergrouptitle] << "\n"
			sorted_group = group[1][:entries].sort_by { |v| v[:sortingvalue] }
			if order == :desc then
				sorted_group = sorted_group.reverse
			end
			sorted_group.each do |entry|
				html << entry[:entry] << "\n"
			end
			if @idswithprefix != false then
				html << "</section>\n"
			end
		end

		# sorted_groups
		html

		puts "HTML done."
	end
end

# i = Imbiber.new
# i.read("/Users/ken/Versioned/my-website/pubs/publications.bib")
# i.read("/Users/ken/Versioned/website/jstoter/jantien.bib")

# pp i.entries
# pp i.html_of_all(:class)
# pp i.entries
# pp i.html_of(:"Jantien-Stoter14")

# t = TextTransformer.new(:unchanged).apply(TextParser.new.parse_with_debug("Presentation at the {3D BGT} dag (June 19th in Amersfoort, the Netherlands)"))
# pp t
# puts "Fr{\\'e}d{\\'e}ric Hubert"
# puts NameTransformer.new.apply(NameParser.new.parse_with_debug("Fr{\\'e}d{\\'e}ric Hubert"))

# text = File.read("/Users/ken/Versioned/websites/work/publications.bib")
# entries = DocumentParser.new.parse_with_debug(text)
# puts entries[:document][1]
