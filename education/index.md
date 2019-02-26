---
layout: page
title: Education
permalink: /education/
---

<section id="courses"></section>

<h2><a href="http://www.geomatics.tudelft.nl">MSc Geomatics</a> courses we are teaching in (2018-2019)</h2>

  * [GEO1002](http://www.studiegids.tudelft.nl/a101_displayCourse.do?course_id=46513): Geographical information systems & cartography
  * [GEO1004](http://www.studiegids.tudelft.nl/a101_displayCourse.do?course_id=47848): 3D Modelling of the Built Environment
  * [GEO1008](http://www.studiegids.tudelft.nl/a101_displayCourse.do?course_id=47852): Geo Datasets and Quality
  * [GEO1015](https://studiegids.tudelft.nl/a101_displayCourse.do?course_id=48143): Digital terrain modelling <a href="https://3d.bk.tudelft.nl/courses/geo1015/"><i class="fas fa-home"></i></a>
  * [GEO1101](http://studiegids.tudelft.nl/a101_displayCourse.do?course_id=47854): Synthesis Project
  * [GEO2010](http://www.studiegids.tudelft.nl/a101_displayCourse.do?course_id=47856): Graduation thesis preparation
  * [GEO2020](http://www.studiegids.tudelft.nl/a101_displayCourse.do?course_id=47855): Graduation thesis <a href="https://3d.bk.tudelft.nl/courses/geo2020/"><i class="fas fa-home"></i></a>
  * [GEO5010](http://studiegids.tudelft.nl/a101_displayCourse.do?course_id=47857): Research Assignment <a href="https://3d.bk.tudelft.nl/courses/geo5010/"><i class="fas fa-home"></i></a>

- - -

<section id="theses"></section>
<h2>Looking for a MSc thesis topic?</h2>

We have a [list of potential topics](msctopics).


- - - 

## MSc thesis projects -- Ongoing

{% assign msc = site.data.mscnow | sort: 'surname' %}

<div class="row">
{% for i in msc %}
  <div class="col-xs-6 col-sm-4 col-md-3">
    <div class="thumbnail">
      <img src="{{ "/img/msc/" | append: i.image | prepend: site.baseurl }}"/>
      <div class="caption">
        <h3>{{ i.name }} {{ i.surname }}</h3>
        <p>{{ i.title }}</p>
      </div>
    </div>
  </div>
{% endfor %}
</div>

- - -

## MSc thesis projects -- Completed


{% assign years = site.data.mscfinished | group_by: "year" %}

{% assign sorted_years = years | sort: 'name' %}

{% for year in sorted_years reversed %}

<h3> {{ year.name }} </h3>

{% assign sorted_people = year.items | sort: 'surname' %}

<div class="row">
{% for i in sorted_people %}
  <div class="col-xs-6 col-sm-4 col-md-3">
    <div class="thumbnail">
      <a href="{{ i.link }}"><img src="{{ "/img/msc/" | append: i.image | prepend: site.baseurl }}"/></a>
      <div class="caption">
        <h3>
        {% if i.swapnames == False %}
          {{ i.name }} {{ i.van }} {{ i.surname }}
        {% else %}
          {{ i.surname }} {{ i.name }}
        {% endif %}
          <br />
          <small>({{ i.year }})</small>
        {% if i.link %}
          <small><a href="{{ i.link }}"><i class="fas fa-book" title="thesis"></i></a></small>
        {% endif %}
        {% if i.paper %}
          <small><a href="{{ i.paper }}"><i class="fas fa-file-alt" title="paper"></i></a></small>
        {% endif %}
        {% if i.github %}
          <small><a href="{{ i.github }}"><i class="fab fa-github" title="github"></i></a></small> 
        {% endif %}
        </h3>
        <p>{{ i.title }}</p>
      </div>
    </div>
  </div>
{% endfor %}
</div>

{% endfor %}



