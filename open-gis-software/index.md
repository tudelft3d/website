---
layout: page
title: A list of GIS software and libraries
permalink: /open-gis-software/
---

Various open source software libraries and utilities that can be useful for GIS applications. 

The ones that we use and recommend are marked with a <i class="fa fa-star"></i>.

- - -

{% assign software = site.data.software | better_sort: 'name' %}

## Databases
{% for i in software %}
{% if i.category == 'Databases' %}
<p><a href="{{ i.webpage }}">{{ i.name }}</a> {% if i.starred %} <i class="fa fa-star"></i> {% endif %}<br/> {{ i.description }} </p>
{% endif %}
{% endfor %}

## Geometry
{% for i in software %}
{% if i.category == 'Geometric libraries' or i.category == 'Computational geometry software' %}
<p><a href="{{ i.webpage }}">{{ i.name }}</a> {% if i.starred %} <i class="fa fa-star"></i> {% endif %}<br/> {{ i.description }} </p>
{% endif %}
{% endfor %}

## Graphs
{% for i in software %}
{% if i.category == 'Graphs' %}
<p><a href="{{ i.webpage }}">{{ i.name }}</a> {% if i.starred %} <i class="fa fa-star"></i> {% endif %}<br/> {{ i.description }} </p>
{% endif %}
{% endfor %}

## Input and Output
{% for i in software %}
{% if i.category == 'Input and Output' %}
<p><a href="{{ i.webpage }}">{{ i.name }}</a> {% if i.starred %} <i class="fa fa-star"></i> {% endif %}<br/> {{ i.description }} </p>
{% endif %}
{% endfor %}

## Spatial indexing
{% for i in software %}
{% if i.category == 'Spatial indexing' %}
<p><a href="{{ i.webpage }}">{{ i.name }}</a> {% if i.starred %} <i class="fa fa-star"></i> {% endif %}<br/> {{ i.description }} </p>
{% endif %}
{% endfor %}

## Visualisation
{% for i in software %}
{% if i.category == 'Visualisation' %}
<p><a href="{{ i.webpage }}">{{ i.name }}</a> {% if i.starred %} <i class="fa fa-star"></i> {% endif %}<br/> {{ i.description }} </p>
{% endif %}
{% endfor %}

