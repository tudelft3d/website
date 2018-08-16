---
layout: post
title:  MSc thesis defence of Lessie Ortega-Córdova
categories: news
date: 2018-08-16 12:38
---

![]({{ site.baseurl }}/img/2018/LessieOC.jpg)

On August 9th, Lessie Ortega-Córdova successfully defended her MSc thesis <i>Framework for Urban Vegetation 3D Modelling</i> (in the programme [MSc Geomatics at TU Delft](http://geomatics.tudelft.nl)).  Congratulations Lessie! 🎉

Lessie completed her thesis in our group as well as working with the municipality of [Rotterdam](https://www.rotterdam.nl/), where her work was a part of the study for the second version of their 3D city model. Link to the final thesis is available below.

- - -

{% assign msc = site.data.mscfinished | sort: 'surname' %}

<div class="row">
{% for i in msc %}
{% if i.surname == 'Ortega-Córdova' %}
  <div class="col-sm-4 col-md-3">
    <div class="thumbnail">
      <a href="{{ i.link }}"><img src="{{ "/img/msc/" | append: i.image | prepend: site.baseurl }}"/></a>
      <div class="caption">
        <h3>
          {{ i.name }} {{ i.surname }} 
          <br />
          <small>({{ i.year }})</small>
        {% if i.link %}
          <small><a href="{{ i.link }}"><i class="fa fa-book" title="thesis"></i></a></small>
        {% endif %}
        {% if i.paper %}
          <small><a href="{{ i.paper }}"><i class="fa fa-file-text" title="paper"></i></a></small>
        {% endif %}
        {% if i.github %}
          <small><a href="{{ i.github }}"><i class="fa fa-github" title="github"></i></a></small> 
        {% endif %}
        </h3>
        <p>{{ i.title }}</p>
      </div>
    </div>
  </div>
{% endif %}
{% endfor %}
</div>