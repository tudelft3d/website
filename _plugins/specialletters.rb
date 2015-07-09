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

class SpecialLetters
	
	@@letters = {
		"---" => "—",
		"--" => "–",
		"``" => "“",
		"`" => "`",
		"\'\'" => "”",
		"\'" => "’",

		"\\&" => "&",

		"\\\"a" => "ä",
		"\\\"e" => "ë",
		"\\\"i" => "ï",
		"\\\"o" => "ö",
		"\\\"u" => "ü",
		"\\\"A" => "Ä",
		"\\\"E" => "Ë",
		"\\\"I" => "Ï",
		"\\\"O" => "Ö",
		"\\\"U" => "Ü",

		"\\\'a" => "á",
		"\\\'e" => "é",
		"\\\'i" => "í",
		"\\\'o" => "ó",
		"\\\'u" => "ú",
		"\\\'z" => "ź",
		"\\\'A" => "Á",
		"\\\'E" => "É",
		"\\\'I" => "Í",
		"\\\'O" => "Ó",
		"\\\'U" => "Ú",
		"\\\'Z" => "Ź",

		"\\\`a" => "à",
		"\\\`e" => "è",
		"\\\`i" => "ì",
		"\\\`o" => "ò",
		"\\\`u" => "ù",
		"\\\`A" => "À",
		"\\\`E" => "È",
		"\\\`I" => "Ì",
		"\\\`O" => "Ò",
		"\\\`U" => "Ù",

		"\\\^a" => "â",
		"\\\^e" => "ê",
		"\\\^i" => "î",
		"\\\^o" => "ô",
		"\\\^u" => "û",
		"\\\^A" => "Â",
		"\\\^E" => "Ê",
		"\\\^I" => "Î",
		"\\\^O" => "Ô",
		"\\\^U" => "Û",

		"\\~n" => "ñ",
		"\\~N" => "Ñ",

		"\\cc" => "ç",
		"\\cC" => "Ç",

		"\\vc" => "č",
		"\\ve" => "ě",
		"\\vn" => "ň",
		"\\vr" => "ř",
		"\\vs" => "š",
		"\\vz" => "ž",
		"\\vC" => "Č",
		"\\vD" => "Ď",
		"\\vE" => "Ě",
		"\\vN" => "Ň",
		"\\vR" => "Ř",
		"\\vS" => "Š",
		"\\vT" => "Ť",
		"\\vZ" => "Ž",

		"\\=a" => "ā",
		"\\=e" => "ē",
		"\\=i" => "ī",
		"\\=g" => "ḡ",
		"\\=o" => "ō",
		"\\=u" => "ū",
		"\\=y" => "ȳ",
		"\\=A" => "Ā",
		"\\=E" => "Ē",
		"\\=I" => "Ī",
		"\\=G" => "Ḡ",
		"\\=O" => "Ō",
		"\\=U" => "Ū",
		"\\=Y" => "Ȳ",

		"\\.e" => "ė",
		"\\.E" => "Ė",
	}

	def convert(letter)
		processed_letter = letter.tr("\{\}", "")
		if @@letters.has_key?(processed_letter) then
			@@letters[processed_letter]
		elsif processed_letter.length == 2 and processed_letter[0] == "\\" then
			processed_letter[1]
		else
			puts "Warning: not supported letter " + letter
			letter
		end
	end

end