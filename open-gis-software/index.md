---
layout: page
title: A list of GIS software and libraries
permalink: /open-gis-software/
---

Various open source software libraries and utilities that can be useful for GIS applications. 

The ones that we use and recommend are marked with a <i class="fa fa-star"></i>.

- - -

{% assign software = site.data.software | sort: 'name' %}

## Input and Output
{% for i in software %}
{% if i.category == 'Input and Output' %}
<p><a href="{{ i.webpage }}">{{ i.name }}</a> {% if i.starred %} <i class="fa fa-star"></i> {% endif %}<br/> {{ i.description }} </p>
{% endif %}
{% endfor %}

## Geometric libraries
{% for i in software %}
{% if i.category == 'Geometric libraries' %}
<p><a href="{{ i.webpage }}">{{ i.name }}</a> {% if i.starred %} <i class="fa fa-star"></i> {% endif %}<br/> {{ i.description }} </p>
{% endif %}
{% endfor %}

## Computational geometry software
{% for i in software %}
{% if i.category == 'Computational geometry software' %}
<p><a href="{{ i.webpage }}">{{ i.name }}</a> {% if i.starred %} <i class="fa fa-star"></i> {% endif %}<br/> {{ i.description }} </p>
{% endif %}
{% endfor %}

## Databases
{% for i in software %}
{% if i.category == 'Databases' %}
<p><a href="{{ i.webpage }}">{{ i.name }}</a> {% if i.starred %} <i class="fa fa-star"></i> {% endif %}<br/> {{ i.description }} </p>
{% endif %}
{% endfor %}

## Visualisation and publishing
{% for i in software %}
{% if i.category == 'Visualisation and publishing' %}
<p><a href="{{ i.webpage }}">{{ i.name }}</a> {% if i.starred %} <i class="fa fa-star"></i> {% endif %}<br/> {{ i.description }} </p>
{% endif %}
{% endfor %}

