---
layout: page
title: a list of relevant GIS journals
permalink: /journals/
---

Some of the journals below are not fundamentally GIS journals, but they have been known to publish relevant GIS papers and to provide a peer-review of high quality.

The impact factor can be checked (inside the campus or using a VPN) [here](http://admin-apps.webofknowledge.com/JCR/JCR). 
The search system is *very* picky. It's probably easier to search by ISSN or to first find the exact name [here](http://admin-apps.webofknowledge.com/JCR/JCR?RQ=TITLES_FULL) using the search function of your browser.

- - -

{% assign journals = site.data.journals | sort: 'name' %}

## ISI journals

{% for i in journals %}
{% if i.index == 'ISI' %}
<p><a href="{{ i.webpage }}">{{ i.name }}</a> <a href="#{{ forloop.index}}" data-toggle="collapse"><i class="fa fa-caret-square-o-down"></i></a></p>
<div id="{{ forloop.index }}" class="collapse"  tabindex="-1">{{ i.description }}</div>
{% endif %}
{% endfor %}

## at least it's in Scopus

{% for i in journals %}
{% if i.index == 'Scopus' %}
<p><a href="{{ i.webpage }}">{{ i.name }}</a> <a href="#{{ forloop.index}}" data-toggle="collapse"><i class="fa fa-caret-square-o-down"></i></a></p>
<div id="{{ forloop.index }}" class="collapse"  tabindex="-1">{{ i.description }}</div>
{% endif %}
{% endfor %}

## not-indexed, but surely coming soon?

{% for i in journals %}
{% if i.index == null %}
<p><a href="{{ i.webpage }}">{{ i.name }}</a> <a href="#{{ forloop.index}}" data-toggle="collapse"><i class="fa fa-caret-square-o-down"></i></a></p>
<div id="{{ forloop.index }}" class="collapse"  tabindex="-1">{{ i.description }}</div>
{% endif %}
{% endfor %}
