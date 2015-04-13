---
layout: page
title: List of relevant GIS journals
permalink: /journals/
---

Some of the journals below are not fundamentally GIS journals, but they have been known to publish relevant GIS papers and to provide a peer-review of high quality.

The impact factor can be checked (inside the campus or using a VPN) [here](http://admin-apps.webofknowledge.com/JCR/JCR). 
The search system is *very* picky. It's probably easier to search by ISSN or to first find the exact name [here](http://admin-apps.webofknowledge.com/JCR/JCR?RQ=TITLES_FULL) using the search function of your browser.

- - -

{% assign journals = site.data.journals | sort: 'name' %}
{% for i in journals %}

<h4><a href="{{ i.website }}">{{ i.name }}</a></h4>
<blockquote>
<p>indexed: {{ i.index }}</p>
<p>{{ i.description }}</p>
</blockquote>
<br>

{% endfor %}
