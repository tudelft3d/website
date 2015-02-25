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

---

## MSc thesis projects -- Ongoing

{% for i in site.data.mscnow %}
<div class="row">
  <div class="col-md-3">
    <img class="image img-responsive" src="{{ "/img/msc/" | append: i.image | prepend: site.baseurl }}"/>
  </div>
  <div class="col-md-9">
     <h3>{{ i.name }}</h3>
     <p>{{ i.title }}</p>
  </div>
</div>
{% if forloop.rindex > 1 %}
<hr>
{% endif %}
{% endfor %}


## MSc thesis projects -- Completed

{% for i in site.data.mscfinished %}
<div class="row">
  <div class="col-md-3">
    <img class="image img-responsive" src="{{ "/img/msc/" | append: i.image | prepend: site.baseurl }}"/>
  </div>
  <div class="col-md-9">
     <h3>{{ i.name }} <small>({{ i.year }})</small></h3>
     <p>{{ i.title }}</p>
    {% if i.link %}
      <p><i class="fa fa-external-link"></i> <a href="{{ i.link }}">thesis</a></p>
    {% endif %}
     {% if i.paper %}
      <p><i class="fa fa-external-link"></i> <a href="{{ i.paper }}">paper</a></p>
    {% endif %}
  </div>
</div>
{% if forloop.rindex > 1 %}
<hr>
{% endif %}
{% endfor %}
