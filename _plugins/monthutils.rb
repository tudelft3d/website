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

class MonthUtils

	@@number_to_abbreviated_month = {
		"1" => "jan",
		"2" => "feb",
		"3" => "mar",
		"4" => "apr",
		"5" => "may",
		"6" => "jun",
		"7" => "jul",
		"8" => "aug",
		"9" => "sep",
		"10" => "oct",
		"11" => "nov",
		"12" => "dec"
	}

	@@full_month_to_abbreviated_month = {
		"january" => "jan",
		"february" => "feb",
		"march" => "mar",
		"april" => "apr",
		"may" => "may",
		"june" => "jun",
		"july" => "jul",
		"august" => "aug",
		"september" => "sep",
		"october" => "oct",
		"november" => "nov",
		"december" => "dec"
	}

	@@abbreviated_month_to_sorting_number = {
		"jan" => "01",
		"feb" => "02",
		"mar" => "03",
		"apr" => "04",
		"may" => "05",
		"jun" => "06",
		"jul" => "07",
		"aug" => "08",
		"sep" => "09",
		"oct" => "10",
		"nov" => "11",
		"dec" => "12"
	}

	def number_to_abbreviated_month(number)
		if @@number_to_abbreviated_month.has_key?(number) then
			@@number_to_abbreviated_month[number]
		else
			number
		end
	end

	def full_month_to_abbreviated_month(fullmonth)
		if @@full_month_to_abbreviated_month.has_key?(fullmonth) then
			@@full_month_to_abbreviated_month[fullmonth]
		else
			fullmonth
		end
	end

	def abbreviated_month_to_sorting_number(month)
		if @@abbreviated_month_to_sorting_number.has_key?(month) then
			@@abbreviated_month_to_sorting_number[month]
		else
			"00"
		end
	end
end