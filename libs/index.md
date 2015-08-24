---
layout: page
title: A list of GIS software
permalink: /libs/
---

We are maintaining a list of software libraries and utilities that can be useful in developing GIS-related software applications.

- - -

{% assign software = site.data.software | sort: 'name' %}

## GIS-related software libraries

{% for i in software %}

<p><a href="{{ i.webpage }}">{{ i.name }}</a> <a href="#{{ forloop.index}}" data-toggle="collapse"><i class="fa fa-caret-square-o-down"></i></a></p>
<div id="{{ forloop.index }}" class="collapse"  tabindex="-1">{{ i.description }}<br>
</div>

{% endfor %}
