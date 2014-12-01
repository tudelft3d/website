<?php

/*
Copyright (c) 2013-2014, Ken Arroyo Ohori
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:
    * Redistributions of source code must retain the above copyright
      notice, this list of conditions and the following disclaimer.
    * Redistributions in binary form must reproduce the above copyright
      notice, this list of conditions and the following disclaimer in the
      documentation and/or other materials provided with the distribution.
    * Neither the name of the author nor the
      names of its contributors may be used to endorse or promote products
      derived from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL <COPYRIGHT HOLDER> BE LIABLE FOR ANY
DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/

class bibhtmler {

	private $months = array(
		'january' => 1,
		'february' => 2,
		'march' => 3,
		'april' => 4,
		'may' => 5,
		'june' => 6,
		'july' => 7,
		'august' => 8,
		'september' => 9,
		'october' => 10,
		'november' => 11,
		'december' => 12,
		'jan' => 1,
		'feb' => 2,
		'mar' => 3,
		'apr' => 4,
		'may' => 5,
		'jun' => 6,
		'jul' => 7,
		'aug' => 8,
		'sep' => 9,
		'oct' => 10,
		'nov' => 11,
		'dec' => 12
	);

	private $monthssortingorder = array(
		'january' => '01',
		'february' => '02',
		'march' => '03',
		'april' => '04',
		'may' => '05',
		'june' => '06',
		'july' => '07',
		'august' => '08',
		'september' => '09',
		'october' => '10',
		'november' => '11',
		'december' => '12',
		'' => '00',
		'jan' => '01',
		'feb' => '02',
		'mar' => '03',
		'apr' => '04',
		'may' => '05',
		'jun' => '06',
		'jul' => '07',
		'aug' => '08',
		'sep' => '09',
		'oct' => '10',
		'nov' => '11',
		'dec' => '12'
	);

	private $monthtotext = array(
		'en' => array(
			1 => 'January',
			2 => 'February',
			3 => 'March',
			4 => 'April',
			5 => 'May',
			6 => 'June',
			7 => 'July',
			8 => 'August',
			9 => 'September',
			10 => 'October',
			11 => 'November',
			12 => 'December'
		),
		'es' => array(
			1 => 'Enero',
			2 => 'Febrero',
			3 => 'Marzo',
			4 => 'Abril',
			5 => 'Mayo',
			6 => 'Junio',
			7 => 'Julio',
			8 => 'Agosto',
			9 => 'Septiembre',
			10 => 'Octubre',
			11 => 'Noviembre',
			12 => 'Diciembre'
		)
	);

	private $localisedtext = array(
		'en' => array(
			'pp.' => 'pp.',
			'Volume' => 'Volume',
			'In' => 'In',
			'eds.' => 'eds.',
			'of' => 'of',
			'Chapter' => 'Chapter',
			'Master\'s thesis' => 'Master\'s thesis',
			'Technical report' => 'Technical report',
			'Edition' => 'Edition',
			'and' => 'and',
			'Slides' => 'Slides',
			'PhD thesis' => 'PhD thesis',
			'Paper' => 'Paper',
			'Poster' => 'Poster'
		),
		'es' => array(
			'pp.' => 'pp.',
			'Volume' => 'Volumen',
			'In' => 'En',
			'eds.' => 'eds.',
			'of' => 'de',
			'Chapter' => 'Cap&iacute;tulo',
			'Master\'s thesis' => 'Tesis de maestr&iacute;a',
			'Technical report' => 'Reporte t&eacute;cnico',
			'Edition' => 'edición',
			'and' => 'y',
			'Slides' => 'Presentaci&oacute;n',
			'PhD thesis' => 'Tesis doctoral',
			'Paper' => 'Art&iacute;culo',
			'Poster' => 'P&oacute;ster'
		)
	);

	private $localisedclasses = array(
		'en' => array(
			'article' => 'Journal articles',
			'book' => 'Books',
			'booklet' => 'Booklets',
			'inbook' => 'Book chapters',
			'incollection' => 'Conference articles',
			'inproceedings' => 'Conference articles',
			'manual' => 'Manuals',
			'mastersthesis' => 'Master\'s theses',
			'misc' => 'Others',
			'phdthesis' => 'PhD theses',
			'proceedings' => 'Conference proceedings',
			'techreport' => 'Technical reports',
			'unpublished' => 'Unpublished'
		),
		'es' => array(
			'article' => 'Art&iacute;culos de revista',
			'book' => 'Libros',
			'booklet' => 'Folletos',
			'inbook' => 'Cap&iacute;tulos de libro',
			'incollection' => 'Art&iacute;culos de conferencia',
			'inproceedings' => 'Art&iacute;culos de conferencia',
			'manual' => 'Manuales',
			'mastersthesis' => 'Tesis de maestr&iacute;a',
			'misc' => 'Otros',
			'phdthesis' => 'Tesis doctorales',
			'proceedings' => 'Actas de conferencias',
			'techreport' => 'Reportes t&eacute;cnico',
			'unpublished' => 'Sin publicar'
		)
	);

	private $classesbygrouping = array(
		'article' => '10',
		'book' => '5',
		'booklet' => '8',
		'inbook' => '20',
		'incollection' => '30',
		'inproceedings' => '30',
		'manual' => '70',
		'mastersthesis' => '50',
		'misc' => '80',
		'phdthesis' => '40',
		'proceedings' => '25',
		'techreport' => '60',
		'unpublished' => '90'
	);

	private $bibtextypes = array(
		'article' => array('author','title','journal','year','volume', 'number', 'pages', 'month', 'note'),
		'book' => array('author', 'editor', 'title', 'publisher', 'year', 'volume', 'number', 'series', 'address', 'edition', 'month', 'note'),
		'booklet' => array('title', 'author', 'howpublished', 'address', 'month', 'year', 'note'),
		'inbook' => array('author', 'editor', 'title', 'chapter', 'pages', 'publisher', 'year', 'volume', 'number', 'series', 'type', 'address', 'edition', 'month', 'note'),
		'incollection' => array('author', 'title', 'booktitle', 'publisher', 'year', 'editor', 'volume', 'number', 'series', 'type', 'chapter', 'pages', 'address', 'edition', 'month', 'note'),
		'inproceedings' => array('author','title','booktitle','year', 'editor', 'volume', 'number', 'series', 'pages', 'address', 'month', 'organization', 'publisher', 'note'),
		'manual' => array('title', 'author', 'organization', 'address', 'edition', 'month', 'year', 'note'),
		'mastersthesis' => array('author','title','school','year', 'type', 'address', 'month', 'note'),
		'misc' => array('author', 'title', 'howpublished', 'month', 'year', 'note'),
		'phdthesis' => array('author', 'title', 'school', 'year', 'type', 'address', 'month', 'note'),
		'proceedings' => array('title', 'year', 'editor', 'volume', 'number', 'series', 'address', 'month', 'publisher', 'organization', 'note'),
		'techreport' => array('author','title','institution','year', 'type', 'number', 'address', 'month', 'note'),
		'unpublished' => array('author', 'title', 'note', 'month', 'year')
	);
	
	public $options = array(
		'lang' => 'en',
		'beforeentry' => '<p>',
		'afterentry' => '</p>',
		'tabs' => 5,
		'groupby' => '',
		'order' => 'inversechronological',
		'beforegroup' => '',
		'aftergroup' => '',
		'beforegrouptitle' => '<h3>',
		'aftergrouptitle' => '</h3>',
		'beforesubgroup' => '',
		'aftersubgroup' => '',
		'beforesubgrouptitle' => '<h4>',
		'aftersubgrouptitle' => '</h4>',
		'beforeall' => '',
		'afterall' => '',
		'capitalisation' => 'firstonly'
	);
	
	public $wordsnottocapitalise = array(
		'headline' => array(
			'a', 'abaft', 'aboard', 'about', 'above', 'absent', 'across', 'afore', 'after', 'against', 'along', 'alongside', 'amid', 'amidst', 'among', 'amongst', 'an', 'anenst', 'apropos', 'apud', 'around', 'as', 'aside', 'astride', 'at', 'athwart', 'atop',
			'barring', 'before', 'behind', 'below', 'beneath', 'beside', 'besides', 'between', 'beyond', 'but', 'by', 
			'c.', 'ca.', 'circa', 'concerning', 
			'despite', 'down', 'during', 
			'except', 'excluding', 
			'failing', 'following', 'for', 'forenenst', 'from', 
			'given', 
			'in', 'including', 'inside', 'into', 
			'lest', 'like', 
			'mid', 'midst', 'minus', 'modulo',
			'near', 'next', 'nigh', 'next', 'notwithstading',
			'o\'', 'of', 'off', 'on', 'onto', 'opposite', 'out', 'outside', 'over',
			'pace', 'past', 'per', 'plus', 'pro', 
			'qua', 
			'regarding', 'round',
			'sans', 'save',
			'since', 
			'than', 'the', 'through', 'thru', 'throughout', 'till', 'times', 'to', 'toward', 'towards',
			'under', 'underneath', 'unlike', 'until', 'unto', 'up', 'upon',
			'versus', 'v.', 'vs.', 'via', 
			'vice', 'with', 'within', 'without', 'worth'
		)
	);
	
	function __construct($useroptions = array()) {
		foreach ($useroptions as $key => $value) {
			$this->options[$key] = $value;
		}
		
		// Some good default options
		if ($this->options['groupby'] != '' and !isset($useroptions['beforeall']) and !isset($useroptions['afterall'])) {
			$this->options['beforeall'] = '';
			$this->options['afterall'] = '';
			$this->options['beforegroup'] = '';
			$this->options['aftergroup'] = '';
		}

		// Good options for grouping
		if ($useroptions['groupby'] == 'class' and !isset($useroptions['order'])) {
			$this->options['order'] = 'classtheninversechronological';
		} if ($useroptions['groupby'] == 'classbyyear' and !isset($useroptions['order'])) {
			$this->options['order'] = 'inverseyearthenclass';
		}
	}

	function splitusing($file, $separator) {
		$entries = array();
		$thisentry = "";
		$filelength = strlen($file);
		$level = 0;
		for ($i = 0; $i < $filelength; $i++) {
			if ($level == 0 and $file[$i] == $separator) {
				if (strlen($thisentry) > 0) $entries[] = trim($thisentry);
				$thisentry = "";
			} else {
				$thisentry .= $file[$i];
				if ($file[$i] == '{') $level++;
				else if ($file[$i] == '}') $level--;
			}
		} $entries[] = trim($thisentry);
		return $entries;
	}

	function processtitle($in) {
		$words = $this->splitusing(substr($in, strpos($in, '{')+1, -1), ' ');
		$out = '';
		foreach ($words as $word) {
			$word = $this->processtext($word);
			if (strpos($word, '{') === FALSE) {
				$word = strtolower($word);
				if ($this->options['capitalisation'] == 'headline' and !in_array($word, $this->wordsnottocapitalise)) {
					$word = ucfirst($word);
				}
			} $out .= $word.' ';
		} if ($this->options['capitalisation'] == 'headline' or $this->options['capitalisation'] == 'firstonly') $out = ucfirst($out);
		$out = substr($out, 0, -1);
		return $out;
	}

	function processauthors($in) {
		$authors = $this->processtext($in);
		$authors = explode(' and ', preg_replace('/[{}]/', '', $authors));
		$formattedauthors = array();
		foreach ($authors as $author) {
			$author = trim($author);
			if (strpos($author, ',') !== FALSE) {
				$last = trim(substr($author, 0, strpos($author, ',')));
				$first = trim(substr($author, strpos($author, ',')+1));
				$author = $first." ".$last;
			} $formattedauthors[] = $author;
		} if (sizeof($authors) == 1) return $formattedauthors[0];
		$out = '';
		for ($i = 0; $i < sizeof($formattedauthors)-2; ++$i) $out .= $formattedauthors[$i].', ';
		$out .= $formattedauthors[$i].' '.$this->localisedtext[$this->options['lang']]['and'].' '.$formattedauthors[$i+1];
		return $out;
	}

	function processmonth($in) {
		$month = $this->months[strtolower(preg_replace('/[{} ]/', '', $in))];
		return $this->monthtotext[$this->options['lang']][$month];
	}

	function getbibtex($in) {
		$out = "@".$in['class']."{".$in['key'].",\n";
		$fields = array();
		foreach ($this->bibtextypes[$in['class']] as $field) {
			if (array_key_exists($field, $in)) {
				$fields[] = "\t".$field." = ".$in[$field];
			}
		} $out .= implode(",\n", $fields);
		$out .= "\n}";
		return $out;
	}

	function processentry($in) {
		$out = "";
		$outwhat = "";
		$outwho = "";
		$outwhere = array();
		$outnote = "";
		switch ($in['class']) {
	
			case 'article':
				$outwhat .= $this->processtitle($in['title']);
				$outwho .= $this->processauthors($in['author']);
				$outwhere[] = "<em>".$this->processtext($in['journal'])."</em>";
				if (array_key_exists('volume', $in)) {
					$outwhere[count($outwhere)-1] .= ' '.$this->processtext($in['volume']);
					if (array_key_exists('number', $in)) $outwhere[count($outwhere)-1] .= ' ('.$this->processtext($in['number']).')';
				} else if (array_key_exists('number', $in)) $outwhere[count($outwhere)-1] .= ' '.$this->processtext($in['number']);
				if (array_key_exists('month', $in)) $outwhere[] = $this->processmonth($in['month'])." ".$this->processtext($in['year']);
				else $outwhere[] = $this->processtext($in['year']);
				if (array_key_exists('pages', $in)) $outwhere[] = $this->localisedtext[$this->options['lang']]['pp.'].' '.$this->processtext($in['pages']);
				if (array_key_exists('note', $in)) $outnote .= $this->processtext($in['note']);
				break;
			
			case 'book':
				$outwhat .= $this->processtitle($in['title']);
				if (array_key_exists('author', $in)) $outwho .= $this->processauthors($in['author']);
				else $outwho .= $this->processauthors($in['editor']);
				if (array_key_exists('series', $in)) {
					if (array_key_exists('volume', $in)) $outwhere[] = $this->localisedtext[$this->options['lang']]['Volume'].' '.$this->processtext($in['volume']).' '.$this->localisedtext[$this->options['lang']]['of'].' '.$this->processtext($in['series']);
					else $outwhere[] = $this->processtext($in['series']);
					if (array_key_exists('number', $in)) $outwhere[count($outwhere)-1] .= $this->processtext($in['number']);
				} if (array_key_exists('author', $in) and array_key_exists('editor', $in)) $outwhere[] = $this->processauthors($in['editor'])." (".$this->localisedtext[$this->options['lang']]['eds.'].")";
				$outwhere[] = $this->processtext($in['publisher']);
				if (array_key_exists('edition', $in)) $outwhere[] = $this->processtest($in['edition']).' '.$this->localisedtext[$this->options['lang']]['Edition'];
				if (array_key_exists('address', $in)) $outwhere[] = $this->processtext($in['address']);
				if (array_key_exists('month', $in)) $outwhere[] = $this->processmonth($in['month'])." ".$this->processtext($in['year']);
				else $outwhere[] = $this->processtext($in['year']);
				if (array_key_exists('note', $in)) $outnote .= $this->processtext($in['note']);
				break;
			
			case 'booklet':
				$outwhat .= $this->processtitle($in['title']);
				if (array_key_exists('author', $in)) $outwho .= $this->processauthors($in['author']);
				if (array_key_exists('howpublished', $in)) $outwhere[] .= '<em>'.processtext($in['howpublished']).'</em>';
				if (array_key_exists('address', $in)) $outwhere[] = $this->processtext($in['address']);
				if (array_key_exists('month', $in) and array_key_exists('year', $in)) $outwhere[] = processmonth($in['month'])." ".processtext($in['year']);
				else if (array_key_exists('year', $in)) $outwhere[] = processtext($in['year']);
				if (array_key_exists('note', $in)) $outnote .= processtext($in['note']);
				break;
			
			case 'inbook':
				$outwhat .= $this->processtitle($in['title']);
				if (array_key_exists('author', $in)) $outwho .= $this->processauthors($in['author']);
				else $outwho .= processauthors($in['editor']);
				if (array_key_exists('author', $in) and array_key_exists('editor', $in)) $outwhere[] = $this->processauthors($in['editor'])." (".$this->localisedtext[$this->options['lang']]['eds.'].")";
				if (array_key_exists('type', $in)) $outwhere[] = $this->processtext($in['type']);
				if (array_key_exists('chapter', $in)) $outwhere[] = $this->localisedtext[$this->options['lang']]['Chapter'].' '.$this->processtext($in['chapter']);
				if (array_key_exists('series', $in)) {
					if (array_key_exists('volume', $in)) $outwhere[] = $this->localisedtext[$this->options['lang']]['Volume'].' '.$this->processtext($in['volume']).' '.$this->localisedtext[$this->options['lang']]['of'].' '.$this->processtext($in['series']);
					else $outwhere[] = $this->processtext($in['series']);
					if (array_key_exists('number', $in)) $outwhere[count($outwhere)-1] .= $this->processtext($in['number']);
				} $outwhere[] = $this->processtext($in['publisher']);
				if (array_key_exists('edition', $in)) $outwhere[] = $this->processtest($in['edition']).' '.$this->localisedtext[$this->options['lang']]['Edition'];
				if (array_key_exists('address', $in)) $outwhere[] = $this->processtext($in['address']);
				if (array_key_exists('month', $in)) $outwhere[] = $this->processmonth($in['month'])." ".$this->processtext($in['year']);
				else $outwhere[] = $this->processtext($in['year']);
				if (array_key_exists('pages', $in)) $outwhere[] = $this->localisedtext[$this->options['lang']]['pp.'].' '.$this->processtext($in['pages']);
				if (array_key_exists('note', $in)) $outnote .= $this->processtext($in['note']);
				break;
			
			case 'incollection':
				$outwhat .= $this->processtitle($in['title']);
				$outwho .= $this->processauthors($in['author']);
				$outwhere[] = $this->localisedtext[$this->options['lang']]['In']." ";
				if (array_key_exists('editor', $in)) $outwhere[count($outwhere)-1] .= $this->processauthors($in['editor'])." (".$this->localisedtext[$this->options['lang']]['eds.']."), ";
				$outwhere[count($outwhere)-1] .= "<em>".$this->processtext($in['booktitle'])."</em>";
				if (array_key_exists('type', $in)) $outwhere[] = processtext($in['type']);
				if (array_key_exists('chapter', $in)) $outwhere[] = $this->localisedtext[$this->options['lang']]['Chapter'].' '.$this->processtext($in['chapter']);
				if (array_key_exists('series', $in)) {
					if (array_key_exists('volume', $in)) $outwhere[] = $this->localisedtext[$this->options['lang']]['Volume'].' '.$this->processtext($in['volume']).' '.$this->localisedtext[$this->options['lang']]['of'].' '.$this->processtext($in['series']);
					else $outwhere[] = $this->processtext($in['series']);
					if (array_key_exists('number', $in)) $outwhere[count($outwhere)-1] .= $this->processtext($in['number']);
				} $outwhere[] = $this->processtext($in['publisher']);
				if (array_key_exists('edition', $in)) $outwhere[] = $this->processtest($in['edition']).' '.$this->localisedtext[$this->options['lang']]['Edition'];
				if (array_key_exists('address', $in)) $outwhere[] = $this->processtext($in['address']);
				if (array_key_exists('month', $in)) $outwhere[] = $this->processmonth($in['month'])." ".$this->processtext($in['year']);
				else $outwhere[] = $this->processtext($in['year']);
				if (array_key_exists('pages', $in)) $outwhere[] = $this->localisedtext[$this->options['lang']]['pp.'].' '.$this->processtext($in['pages']);
				if (array_key_exists('note', $in)) $outnote .= $this->processtext($in['note']);
				break;
			
			case 'inproceedings':
			case 'conference':
				$outwhat .= $this->processtitle($in['title']);
				$outwho .= $this->processauthors($in['author']);
				$outwhere[] = $this->localisedtext[$this->options['lang']]['In']." ";
				if (array_key_exists('editor', $in)) $outwhere[count($outwhere)-1] .= $this->processauthors($in['editor'])." (".$this->localisedtext[$this->options['lang']]['eds.']."), ";
				$outwhere[count($outwhere)-1] .= "<em>".$this->processtext($in['booktitle'])."</em>";
				if (array_key_exists('chapter', $in)) $outwhere[] = $this->localisedtext[$this->options['lang']]['Chapter'].' '.$this->processtext($in['chapter']);
				if (array_key_exists('series', $in)) {
					if (array_key_exists('volume', $in)) $outwhere[] = $this->localisedtext[$this->options['lang']]['Volume'].' '.$this->processtext($in['volume']).' '.$this->localisedtext[$this->options['lang']]['of'].' '.$this->processtext($in['series']);
					else $outwhere[] = $this->processtext($in['series']);
					if (array_key_exists('number', $in)) $outwhere[] = $this->processtext($in['number']);
				} if (array_key_exists('organization', $in)) $outwhere[] = $this->processtext($in['organization']);
				if (array_key_exists('publisher', $in)) $outwhere[] = $this->processtext($in['publisher']);
				if (array_key_exists('address', $in)) $outwhere[] = $this->processtext($in['address']);
				if (array_key_exists('month', $in)) $outwhere[] = $this->processmonth($in['month'])." ".$this->processtext($in['year']);
				else $outwhere[] = $this->processtext($in['year']);
				if (array_key_exists('pages', $in)) $outwhere[] = $this->localisedtext[$this->options['lang']]['pp.'].' '.$this->processtext($in['pages']);
				if (array_key_exists('note', $in)) $outnote .= $this->processtext($in['note']);
				break;
			
			case 'manual':
				$outwhat .= $this->processtitle($in['title']);
				if (array_key_exists('author', $in)) $outwho .= processauthors($in['author']);
				if (array_key_exists('organization', $in)) $outwhere[] = $this->processtext($in['organization']);
				if (array_key_exists('edition', $in)) $outwhere[] = $this->processtest($in['edition']).' '.$this->localisedtext[$this->options['lang']]['Edition'];
				if (array_key_exists('address', $in)) $outwhere[] = $this->processtext($in['address']);
				if (array_key_exists('month', $in) and array_key_exists('year', $in)) $outwhere[] = processmonth($in['month'])." ".processtext($in['year']);
				else if (array_key_exists('year', $in)) $outwhere[] = processtext($in['year']);
				if (array_key_exists('note', $in)) $outnote .= $this->processtext($in['note']);
				break;
			
			case 'mastersthesis':
				$outwhat .= $this->processtitle($in['title']);
				$outwho .= $this->processauthors($in['author']);
				if (array_key_exists('type', $in)) $outwhere[] = $this->processtext($in['type']);
				else $outwhere[] .= $this->localisedtext[$this->options['lang']]['Master\'s thesis'];
				$outwhere[] = $this->processtext($in['school']);
				if (array_key_exists('month', $in)) $outwhere[] = $this->processmonth($in['month'])." ".$this->processtext($in['year']);
				else $outwhere[] = $this->processtext($in['year']);
				if (array_key_exists('note', $in)) $outnote .= $this->processtext($in['note']);
				break;
			
			case 'misc':
				if (array_key_exists('title', $in)) $outwhat .= $this->processtitle($in['title']);
				if (array_key_exists('author', $in)) $outwho .= $this->processauthors($in['author']);
				if (array_key_exists('journal', $in)) "<em>".$this->processtext($in['journal'])."</em>";
				if (array_key_exists('volume', $in)) {
					$outwhere[count($outwhere)-1] .= ' '.$this->processtext($in['volume']);
					if (array_key_exists('number', $in)) $outwhere[count($outwhere)-1] .= ' ('.$this->processtext($in['number']).')';
				} else if (array_key_exists('number', $in)) $outwhere[count($outwhere)-1] .= ' '.$this->processtext($in['number']);
				if (array_key_exists('howpublished', $in)) $outwhere[] .= '<em>'.$this->processtext($in['howpublished']).'</em>';
				if (array_key_exists('month', $in) and array_key_exists('year', $in)) $outwhere[] = $this->processmonth($in['month'])." ".$this->processtext($in['year']);
				else if (array_key_exists('year', $in)) $outwhere[] = $this->processtext($in['year']);
				if (array_key_exists('pages', $in)) $outwhere[] = $this->localisedtext[$this->options['lang']]['pp.'].' '.$this->processtext($in['pages']);
				if (array_key_exists('note', $in)) $outnote .= $this->processtext($in['note']);
				break;
			
			case 'phdthesis':
				$outwhat .= $this->processtitle($in['title']);
				$outwho .= $this->processauthors($in['author']);
				if (array_key_exists('type', $in)) $outwhere[] = $this->processtext($in['type']);
				else $outwhere[] .= $this->localisedtext[$this->options['lang']]['PhD thesis'];
				$outwhere[] = $this->processtext($in['school']);
				if (array_key_exists('month', $in)) $outwhere[] = $this->processmonth($in['month'])." ".$this->processtext($in['year']);
				else $outwhere[] = $this->processtext($in['year']);
				if (array_key_exists('note', $in)) $outnote .= $this->processtext($in['note']);
				break;
			
			case 'proceedings':
				$outwhat .= $this->processtitle($in['title']);
				if (array_key_exists('editor', $in)) $outwho .= $this->processauthors($in['editor']);
				if (array_key_exists('series', $in)) {
					if (array_key_exists('volume', $in)) $outwhere[] = $this->localisedtext[$this->options['lang']]['Volume'].' '.$this->processtext($in['volume']).' '.$this->localisedtext[$this->options['lang']]['of'].' '.$this->processtext($in['series']);
					else $outwhere[] = $this->processtext($in['series']);
					if (array_key_exists('number', $in)) $outwhere[] = $this->processtext($in['number']);
				} if (array_key_exists('organization', $in)) $outwhere[] = $this->processtext($in['organization']);
				if (array_key_exists('publisher', $in)) $outwhere[] = $this->processtext($in['publisher']);
				if (array_key_exists('address', $in)) $outwhere[] = $this->processtext($in['address']);
				if (array_key_exists('month', $in)) $outwhere[] = $this->processmonth($in['month'])." ".$this->processtext($in['year']);
				else $outwhere[] = $this->processtext($in['year']);
				if (array_key_exists('note', $in)) $outnote .= $this->processtext($in['note']);
				break;
			
			case 'techreport':
				$outwhat .= $this->processtitle($in['title']);
				$outwho .= $this->processauthors($in['author']);
				if (array_key_exists('type', $in)) $outwhere[] = $this->processtext($in['type']);
				else $outwhere[] = $this->localisedtext[$this->options['lang']]['Technical report'];
				if (array_key_exists('number', $in)) $outwhere[count($outwhere)-1] .= ' '.$this->processtext($in['number']);
				$outwhere[] = $this->processtext($in['institution']);
				if (array_key_exists('month', $in)) $outwhere[] = $this->processmonth($in['month'])." ".$this->processtext($in['year']);
				else $outwhere[] = $this->processtext($in['year']);
				if (array_key_exists('note', $in)) $outnote .= $this->processtext($in['note']);
				break;
			
			case 'unpublished':
				$outwhat .= $this->processtitle($in['title']);
				$outwho .= $this->processauthors($in['author']);
				$outwhere[] = '<em>'.$this->processtext($in['note'])."</em>";
				if (array_key_exists('month', $in)) $outwhere[] = $this->processmonth($in['month'])." ".$this->processtext($in['year']);
				else $outwhere[] = $this->processtext($in['year']);
				break;
			
			default:
				$out .= '<span class="label label-important">Unrecognised entry type: '.$in['class'].'</span>';
				break;
		}
		
		if (strlen($outwhat) > 0) $out .= "<strong>".$outwhat."</strong>. ";
		if (strlen($outwho) > 0) $out .= $outwho.". ";
		if (count($outwhere) > 0) $out .= implode(", ", $outwhere).". ";
		if (strlen($outnote) > 0) $out .= $outnote.". ";
		
		if (array_key_exists('info', $in)) $out .= '<span class="text-danger"> '.$this->processtext($in['info']).'</span>.';
		$out .= '<br>';
		if (array_key_exists('pdf', $in)) $out .= ' <a href="'.$this->processtext($in['pdf']).'"><i class="fa fa-file-pdf-o"></i> PDF</a>';
		if (array_key_exists('paper', $in)) $out .= ' <a href="'.$this->processtext($in['paper']).'"><i class="fa fa-file-pdf-o"></i> '.$this->localisedtext[$this->options['lang']]['Paper'].'</a>';
		if (array_key_exists('poster', $in)) $out .= ' <a href="'.$this->processtext($in['poster']).'"><i class="fa fa-file-image-o"></i> '.$this->localisedtext[$this->options['lang']]['Poster'].'</a>';
		if (array_key_exists('presentation', $in)) $out .= ' <a href="'.$this->processtext($in['presentation']).'"><i class="fa fa-file-image-o"></i> '.$this->localisedtext[$this->options['lang']]['Slides'].'</a>';
		if (array_key_exists('doi', $in)) $out .= ' <a href="'.$this->processtext($in['doi']).'"><i class="fa fa-external-link"></i> DOI</a>';
		if (array_key_exists('url', $in)) $out .= ' <a href="'.$this->processtext($in['url']).'"><i class="fa fa-external-link"></i> WWW</a>';
		$out .= ' <a href="#bib'.$in['key'].'" data-toggle="collapse"><i class="fa fa-caret-square-o-down"></i> BibTeX</a>';
		$out .= '<div id="bib'.$in['key'].'" class="collapse"  tabindex="-1"><pre>'.$this->getbibtex($in)."</pre></div>";
	
		return $out;
	}

	function processtext($in) {
		$patterns = array(
			'/---/',
			'/--/',
			'/\\\\\'a/',
			'/\\\\\'e/',
			'/\\\\\'i/',
			'/\\\\\'o/',
			'/\\\\\'u/',
			'/\\\\\^a/',
			'/\\\\\^e/',
			'/\\\\\^i/',
			'/\\\\\^o/',
			'/\\\\\^u/',
			'/\\\\\`a/',
			'/\\\\\`e/',
			'/\\\\\`i/',
			'/\\\\\`o/',
			'/\\\\\`u/',
			'/\\\\\'A/',
			'/\\\\\'E/',
			'/\\\\\'I/',
			'/\\\\\'O/',
			'/\\\\\'U/',
			'/\\\\\^A/',
			'/\\\\\^E/',
			'/\\\\\^I/',
			'/\\\\\^O/',
			'/\\\\\^U/',
			'/\\\\\`A/',
			'/\\\\\`E/',
			'/\\\\\`I/',
			'/\\\\\`O/',
			'/\\\\\`U/',
			'/\\\\~n/',
			'/\\\\~N/',
			'/\\\\"a/',
			'/\\\\"e/',
			'/\\\\"i/',
			'/\\\\"o/',
			'/\\\\"u/',
			'/\\\\"A/',
			'/\\\\"E/',
			'/\\\\"I/',
			'/\\\\"O/',
			'/\\\\"U/',
			'/\\\\&/',
			'/\\\\vc/',
			'/\\\\vC/',
			'/\\\\vD/',
			'/\\\\ve/',
			'/\\\\vE/',
			'/\\\\vn/',
			'/\\\\vN/',
			'/\\\\vr/',
			'/\\\\vR/',
			'/\\\\vs/',
			'/\\\\vS/',
			'/\\\\vT/',
			'/\\\\vz/',
			'/\\\\vZ/',
			'/\\\\cc/',
			'/\\\\cC/',
			'/``/',
			'/`/',
			'/\'\'/',
			'/\'/'
		);
		$replacements = array(
			'—',
			'–',
			'á',
			'é',
			'í',
			'ó',
			'ú',
			'â',
			'ê',
			'î',
			'ô',
			'û',
			'à',
			'è',
			'ì',
			'ò',
			'ù',
			'Á',
			'É',
			'Í',
			'Ó',
			'Ú',
			'Â',
			'Ê',
			'Î',
			'Ô',
			'Û',
			'À',
			'È',
			'Ì',
			'Ò',
			'Ù',
			'ñ',
			'Ñ',
			'ä',
			'ë',
			'ï',
			'ö',
			'ü',
			'Ä',
			'Ë',
			'Ï',
			'Ö',
			'Ü',
			'&',
			'č',
			'Č',
			'Ď',
			'ě',
			'Ě',
			'ň',
			'Ň',
			'ř',
			'Ř',
			'š',
			'Š',
			'Ť',
			'ž',
			'Ž',
			'ç',
			'Ç',
			'“',
			'‘',
			'”',
			'’'
		);
		$out = trim(preg_replace('/[{}]/', '', $in), ' ');
		$out = htmlentities(preg_replace($patterns, $replacements, $out), ENT_COMPAT, 'UTF-8');
		return $out;
	}
	
	function gettabs($numtabs) {
		$indentation = "";
		for ($i = 0; $i < $numtabs; $i++) {
			$indentation .= "\t";
		} return $indentation;
	}

	function process($filename, $select = false) {
		$result = "";
		$file = fopen($filename, 'r');
		$contents = fread($file, filesize($filename));
		fclose($file);
		$contents = trim(preg_replace('/\s+/', ' ', $contents));
		$contents = substr($contents, strpos($contents, '@'));
		$entries = $this->splitusing($contents, '@');
		$docs = array();
		foreach($entries as $entry) {
			$newdoc = array();
			$newdoc['class'] = substr($entry, 0, strpos($entry, '{'));
			$newdoc['class'] = strtolower(str_replace(' ', '', $newdoc['class']));
			$fields = $this->splitusing(substr($entry, strpos($entry, '{')+1, -1), ',');
			$newdoc['key'] = $fields[0];
			$newdoc['key'] = trim($newdoc['key'], ' ');
			if ($select !== false and $select != $newdoc['key']) continue;
			foreach(array_slice($fields, 1) as $field) {
				$fieldkey = substr($field, 0, strpos($field, '='));
				$fieldkey = strtolower(str_replace(' ', '', $fieldkey));
				$fieldvalue = substr($field, strpos($field, '=')+1);
				$fieldvalue = trim($fieldvalue, ' ');
				$newdoc[$fieldkey] = $fieldvalue;
			} 
			
			// Use keys for sorting
			if ($this->options['order'] == 'chronological') {
				if (isset($newdoc['month'])) $docs[preg_replace('/[{} ]/', '', $newdoc['year']).".".$this->monthssortingorder[strtolower(preg_replace('/[{} ]/', '', $newdoc['month']))].".".$newdoc['key']] = $newdoc;
				else $docs[preg_replace('/[{} ]/', '', $newdoc['year'])."."."00".".".$newdoc['key']] = $newdoc;
			} else if ($this->options['order'] == 'inversechronological') {
				if (isset($newdoc['month'])) $docs[strval(9999-intval(preg_replace('/[{} ]/', '', $newdoc['year']))).".".strval(99-intval($this->monthssortingorder[strtolower(preg_replace('/[{} ]/', '', $newdoc['month']))])).".".$newdoc['key']] = $newdoc;
				else $docs[strval(9999-intval(preg_replace('/[{} ]/', '', $newdoc['year'])))."."."99".".".$newdoc['key']] = $newdoc;
			} else if ($this->options['order'] == 'classtheninversechronological') {
				if (isset($newdoc['month'])) $docs[$this->classesbygrouping[$newdoc['class']].".".strval(9999-intval(preg_replace('/[{} ]/', '', $newdoc['year']))).".".strval(99-intval($this->monthssortingorder[strtolower(preg_replace('/[{} ]/', '', $newdoc['month']))])).".".$newdoc['key']] = $newdoc;
				else $docs[$this->classesbygrouping[$newdoc['class']].".".strval(9999-intval(preg_replace('/[{} ]/', '', $newdoc['year'])))."."."99".".".$newdoc['key']] = $newdoc;
			} else if ($this->options['order'] == 'inverseyearthenclass') {
				$docs[strval(9999-intval(preg_replace('/[{} ]/', '', $newdoc['year']))).".".$this->classesbygrouping[$newdoc['class']].".".$newdoc['key']] = $newdoc;
			}
		}
	
		// Sort
		ksort($docs);
	
		// Preparations
		$thisgroup = '';
		$thissubgroup = '';
		$grouptabs = $this->options['tabs'];
		if ($this->options['beforeall'] != '' or $this->options['afterall'] != '') $grouptabs++;
		$entrytabs = $grouptabs;
		if ($this->options['beforegroup'] != '' or $this->options['aftergroup'] != '') $entrytabs++;
	
		// Print things
		if ($this->options['beforeall'] != '') $result .= $this->gettabs($this->options['tabs']).$this->options['beforeall']."\n";
		foreach($docs as $dockey => $doc) {
		
			// Group stuff
			if ($this->options['groupby'] == 'year') {
				if ($this->processtext($doc['year']) != $thisgroup) {
					if ($thisgroup != '' and $this->options['aftergroup'] != '') $result .= $this->gettabs($grouptabs).$this->options['aftergroup']."\n";
					$result .= $this->gettabs($this->options['tabs']).$this->options['beforegrouptitle'].$this->processtext($doc['year']).$this->options['aftergrouptitle']."\n";
					$thisgroup = $this->processtext($doc['year']);
					if ($this->options['beforegroup'] != '') $result .= $this->gettabs($grouptabs).$this->options['beforegroup']."\n";
				}
			}
			
			else if ($this->options['groupby'] == 'class') {
				if ($this->localisedclasses[$this->options['lang']][$this->processtext($doc['class'])] != $thisgroup) {
					if ($thisgroup != '' and $this->options['aftergroup'] != '') $result .= $this->gettabs($grouptabs).$this->options['aftergroup']."\n";
					$result .= $this->gettabs($this->options['tabs']).$this->options['beforegrouptitle'].$this->localisedclasses[$this->options['lang']][$this->processtext($doc['class'])].$this->options['aftergrouptitle']."\n";
					$thisgroup = $this->localisedclasses[$this->options['lang']][$this->processtext($doc['class'])];
					if ($this->options['beforegroup'] != '') $result .= $this->gettabs($grouptabs).$this->options['beforegroup']."\n";
				}
			}

			else if ($this->options['groupby'] == 'classbyyear') {
				if ($this->localisedclasses[$this->options['lang']][$this->processtext($doc['class'])] != $thisgroup) {
					if ($thisgroup != '' and $this->options['aftergroup'] != '') $result .= $this->gettabs($grouptabs).$this->options['aftergroup']."\n";
					$result .= $this->gettabs($this->options['tabs']).$this->options['beforegrouptitle'].$this->localisedclasses[$this->options['lang']][$this->processtext($doc['class'])].$this->options['aftergrouptitle']."\n";
					$thisgroup = $this->localisedclasses[$this->options['lang']][$this->processtext($doc['class'])];
					if ($this->options['beforegroup'] != '') $result .= $this->gettabs($grouptabs).$this->options['beforegroup']."\n";
					$thissubgroup = '';
				} 

				if ($this->processtext($doc['year']) != $thissubgroup) {
					if ($thissubgroup != '' and $this->options['aftersubgroup'] != '') $result .= $this->gettabs($grouptabs).$this->options['aftersubgroup']."\n";
					$result .= $this->gettabs($this->options['tabs']).$this->options['beforesubgrouptitle'].$this->processtext($doc['year']).$this->options['aftersubgrouptitle']."\n";
					$thissubgroup = $this->processtext($doc['year']);
					if ($this->options['beforesubgroup'] != '') $result .= $this->gettabs($grouptabs).$this->options['beforesubgroup']."\n";
				}
			}
			
			// Actual entry
			// $result .= $dockey." = ";
			$result .= $this->gettabs($entrytabs).$this->options['beforeentry'].$this->processentry($doc).$this->options['afterentry']."\n";
		
		} if ($this->options['groupby'] != '' and $this->options['aftergroup'] != '')
			$result .= $this->gettabs($grouptabs).$this->options['aftergroup']."\n";
		if ($this->options['afterall'] != '') $result .= $this->gettabs($this->options['tabs']).$this->options['afterall']."\n";
		return $result;
	}
}

?>
