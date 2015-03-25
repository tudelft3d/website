---
layout: page
title: Education
permalink: /education/
---

## [MSc Geomatics](http://www.geomatics.tudelft.nl) courses we're involved in

  * [GEO1002](http://www.studiegids.tudelft.nl/a101_displayCourse.do?course_id=28151): Geographical information systems & cartography
  * [GEO1004](http://www.studiegids.tudelft.nl/a101_displayCourse.do?course_id=28153): 3D Modelling of the Built Environment
  * [GEO1005](http://www.studiegids.tudelft.nl/a101_displayCourse.do?course_id=28154): Spatial Decision Support for Planning and Crisis Management
  * [GEO1008](http://www.studiegids.tudelft.nl/a101_displayCourse.do?course_id=28157): Geo Datasets and Quality
  * [GEO2001](http://www.studiegids.tudelft.nl/a101_displayCourse.do?course_id=30706): Synthesis Project

- - -

## Looking for a MSc thesis topic?

We have a [list of potential topics](msctopics).


- - - 

## MSc thesis projects -- Ongoing

<div class="row">
{% for i in site.data.mscnow %}
  <div class="col-sm-4 col-md-3">
    <div class="thumbnail">
      <img src="{{ "/img/msc/" | append: i.image | prepend: site.baseurl }}"/>
      <div class="caption">
        <h3>{{ i.name }}</h3>
        <p>{{ i.title }}</p>
      </div>
    </div>
  </div>
{% endfor %}
</div>

- - -

## MSc thesis projects -- Completed

<div class="row">
{% for i in site.data.mscfinished %}
  <div class="col-sm-4 col-md-3">
    <div class="thumbnail">
      <a href="{{ i.link }}"><img src="{{ "/img/msc/" | append: i.image | prepend: site.baseurl }}"/></a>
      <div class="caption">
        <h3>
          {{ i.name }} 
          <small>({{ i.year }})</small>
        {% if i.link %}
          <small><a href="{{ i.link }}"><i class="fa fa-file-pdf-o"></i></a></small>
        {% endif %}
        {% if i.paper %}
          <small><a href="{{ i.paper }}"><i class="fa fa-file-pdf-o"></i></a></small>
        {% endif %}
        </h3>
        <p>{{ i.title }}</p>
      </div>
    </div>
  </div>
{% endfor %}
</div>


