---
layout: post
title:  Two new Msc theses related to the processing of massive point clouds
categories: news
date: 2016-02-05
---

On January 27 2016, both Kees Jonker and Marco Lam successfully defended their MSc thesis work (in the programme [MSc Geomatics at TU Delft](http://geomatics.tudelft.nl)). 
Congratulations to them!

Both of them had topics related to the [AHN datasets](http://www.ahn.nl/index.html).
Kees improved the [raster version of AHN2](http://www.nationaalgeoregister.nl/geonetwork/srv/dut/search?#%7C51e0930e-e999-42d5-af70-6eebac30b8b1) (which contains a lot of errors, inconsistencies, holes, etc.), and Marco scaled [Ravi Peters' algorithm to construct the skeleton of point clouds](https://3d.bk.tudelft.nl/projects/3dsm/) so that billion of points can be processed.

- - -

{% assign msc = site.data.mscfinished | sort: 'surname' %}

<div class="row">
{% for i in msc %}
{% if i.surname == 'Jonker' or i.surname == 'Lam' %}
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

- - -

![]({{ site.baseurl }}/img/2016/p5_jonker_lam.jpg)
