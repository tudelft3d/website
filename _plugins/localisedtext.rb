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

class LocalisedText
	@@words = {
		:en => {
			:and => 'and',
			:In => 'In',
			:eds => 'eds.',
			:Chapter => 'Chapter',
			:pp => 'pp.',
			:mscthesis => 'Master\'s thesis',
			:phdthesis => 'PhD thesis',
			:techreport => 'Technical report',
			:Paper => 'Paper',
			:Poster => 'Poster',
			:Slides => 'Slides',
			:www => 'External link',
			:Unknown => 'Unknown'
		},
		:es => {
			:and => 'y',
			:In => 'En',
			:eds => 'eds.',
			:Chapter => 'capítulo',
			:pp => 'pp.',
			:mscthesis => 'Tesis de maestría',
			:phdthesis => 'Tesis doctoral',
			:techreport => 'Reporte técnico',
			:Paper => 'Artículo',
			:Poster => 'Póster',
			:Slides => 'Presentación',
			:www => 'Enlace externo',
			:Unknown => 'Desconocido'
		}
	}

	@@months = {
		:en => {
			"jan" => "January",
			"feb" => "February",
			"mar" => "March",
			"apr" => "April",
			"may" => "May",
			"jun" => "June",
			"jul" => "July",
			"aug" => "August",
			"sep" => "September",
			"oct" => "October",
			"nov" => "November",
			"dec" => "December"
		},
		:es => {
			"jan" => "enero",
			"feb" => "febrero",
			"mar" => "marzo",
			"apr" => "abril",
			"may" => "mayo",
			"jun" => "junio",
			"jul" => "julio",
			"aug" => "agosto",
			"sep" => "septiembre",
			"oct" => "octubre",
			"nov" => "noviembre",
			"dec" => "diciembre"
		}
	}

	def initialize(locale = :en)
		@locale = locale
	end

	def localise(word)
		@@words[@locale][word]
	end

	def localisedmonth(month)
		if @@months[@locale].has_key?(month) then
			@@months[@locale][month]
		else
			month
		end
	end
end