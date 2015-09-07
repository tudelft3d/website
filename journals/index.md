---
layout: page
title: A list of relevant GIS journals
permalink: /journals/
---

We are maintaining a list of journals that we consider when submitting a GIS manuscript. Some of the journals listed below are not fundamentally GIS journals, but they have been known to publish relevant GIS papers in the past, and to provide a peer-review of high quality.

We support <a href="https://scirev.sc">SciRev</a>, a website which allows you to share your experience with a journal's scientific review process. It aggregates journal review quality ratings and processing times, and helps to differentiate efficient journals. Therefore for each entry, where applicable, we also provide the link to its SciRev page.

The impact factor for each journal can be checked (inside the campus or using a VPN) [here](http://admin-apps.webofknowledge.com/JCR/JCR). 
The search system is *very* picky. It's probably easier to search by ISSN or to first find the exact name [here](http://admin-apps.webofknowledge.com/JCR/JCR?RQ=TITLES_FULL) using the search function of your browser.

For some of the listed journals <a href="http://filipbiljecki.com/blog/index.php/2015/09/06/publication-delay-in-gis/">a research has been conducted to compute their publication speed</a>, to get a general idea what are the average waiting times from submission to acceptance and publication.

- - -

{% assign journals = site.data.journals | sort: 'name' %}

## ISI journals

{% for i in journals %}
{% if i.index == 'ISI' %}
<p><a href="{{ i.webpage }}">{{ i.name }}</a> <a href="#{{ forloop.index}}" data-toggle="collapse"><i class="fa fa-caret-square-o-down"></i></a></p>
<div id="{{ forloop.index }}" class="collapse"  tabindex="-1">{{ i.description }}<br>
	{% if i.scirev %}
		<a href="{{ i.scirev }}"><i class="fa fa-pencil"></i> SciRev entry</a><br>
	{% endif %}
</div>
{% endif %}
{% endfor %}


## At least it's in Scopus

{% for i in journals %}
{% if i.index == 'Scopus' %}
<p><a href="{{ i.webpage }}">{{ i.name }}</a> <a href="#{{ forloop.index}}" data-toggle="collapse"><i class="fa fa-caret-square-o-down"></i></a></p>
<div id="{{ forloop.index }}" class="collapse"  tabindex="-1">{{ i.description }}<br>
	{% if i.scirev %}
		<a href="{{ i.scirev }}"><i class="fa fa-pencil"></i> SciRev entry</a><br>
	{% endif %}
</div>
{% endif %}
{% endfor %}

## Non-indexed, but could be in future

{% for i in journals %}
{% if i.index == null %}
<p><a href="{{ i.webpage }}">{{ i.name }}</a> <a href="#{{ forloop.index}}" data-toggle="collapse"><i class="fa fa-caret-square-o-down"></i></a></p>
<div id="{{ forloop.index }}" class="collapse"  tabindex="-1">{{ i.description }}<br>
	{% if i.scirev %}
		<a href="{{ i.scirev }}"><i class="fa fa-pencil"></i> SciRev entry</a><br>
	{% endif %}
</div>
{% endif %}
{% endfor %}
