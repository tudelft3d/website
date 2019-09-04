---
layout: page
title: A list of relevant GIS journals
permalink: /journals/
---

We are curating a list of journals that we consider when submitting a GIS manuscript. Some of the journals listed below are not squarely GIS journals, but they have been known to publish relevant GIS papers in the past, and to provide a peer-review of high quality.

Many of the listed journals have been involved in a comprehensive scientometric study <a href="http://doi.org/10.1080/13658816.2015.1130831">published in IJGIS</a>.

We support <a href="https://scirev.sc">SciRev</a>, a website which allows you to share your experience with a journal's scientific review process. It aggregates journal review quality ratings and processing times, and helps to differentiate efficient journals with a committed peer-review. Therefore for each entry, where applicable, we also provide the link to its SciRev page.

The impact factor for each journal can be checked (inside the campus or using a VPN) [here](https://jcr.clarivate.com).

You might also be interested in related efforts:
<ul>
<li>List of <a href="http://cartography.oregonstate.edu/journals.html">Cartography and Geovisualisation, Oregon State University</a></li>
<li>List of <a href="http://www.aboutgis.com/gis-and-remote-sensing-journal-list-with-impact-factors/">Giorgos Mountrakis, State University of New York College of Environmental Science and Forestry</a></li>
<li>TGIS paper <i>GIScience Journals Ranking and Evaluation: An International Delphi Study</i> (<a href="http://doi.org/10.1111/j.1467-9671.2008.01106.x">doi:10.1111/j.1467-9671.2008.01106.x</a>)</li>
<li><a href="https://agile-online.org/agile-actions/archive/special-interest-groups/giscience-publication-rating">AGILE's initiative on GIScience Publication Rating</a></li>
</ul>

- - -

{% assign journals = site.data.journals | sort: 'name' %}

## ISI journals

{% for i in journals %}
{% if i.index == 'ISI' %}
<p><a href="{{ i.webpage }}">{{ i.name }}</a> <a href="#{{ forloop.index}}" data-toggle="collapse"><i class="fas fa-caret-square-down"></i></a></p>
<div id="{{ forloop.index }}" class="collapse"  tabindex="-1">{{ i.description }}<br>
	{% if i.scirev %}
		<a href="{{ i.scirev }}"><i class="fas fa-pencil-alt"></i> SciRev entry</a><br>
	{% endif %}
</div>
{% endif %}
{% endfor %}


## At least it's in Scopus

{% for i in journals %}
{% if i.index == 'Scopus' %}
<p><a href="{{ i.webpage }}">{{ i.name }}</a> <a href="#{{ forloop.index}}" data-toggle="collapse"><i class="fas fa-caret-square-down"></i></a></p>
<div id="{{ forloop.index }}" class="collapse"  tabindex="-1">{{ i.description }}<br>
	{% if i.scirev %}
		<a href="{{ i.scirev }}"><i class="fas fa-pencil-alt"></i> SciRev entry</a><br>
	{% endif %}
</div>
{% endif %}
{% endfor %}

## Non-indexed, but could be in future

{% for i in journals %}
{% if i.index == null %}
<p><a href="{{ i.webpage }}">{{ i.name }}</a> <a href="#{{ forloop.index}}" data-toggle="collapse"><i class="fas fa-caret-square-down"></i></a></p>
<div id="{{ forloop.index }}" class="collapse"  tabindex="-1">{{ i.description }}<br>
	{% if i.scirev %}
		<a href="{{ i.scirev }}"><i class="fas fa-pencil-alt"></i> SciRev entry</a><br>
	{% endif %}
</div>
{% endif %}
{% endfor %}
