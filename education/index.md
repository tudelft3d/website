---
layout: page
title: Education
permalink: /education/
---

<section id="courses"></section>

<h2><a href="http://www.geomatics.tudelft.nl">MSc Geomatics</a> courses we are teaching</h2>

  * GEO1002: Geographical information systems (GIS) and cartography
  * GEO1004: 3D modelling of the built environment <a href="https://3d.bk.tudelft.nl/courses/geo1004/"><i class="fas fa-home"></i> (open course)</a>
  * GEO1015: Digital terrain modelling <a href="https://3d.bk.tudelft.nl/courses/geo1015/"><i class="fas fa-home"></i> (open course)</a>
  * GEO1016: Photogrammetry and 3D computer vision <a href="https://3d.bk.tudelft.nl/courses/geo1016/"><i class="fas fa-home"></i> (open course)</a>
  * GEO1101: Synthesis project
  * GEO2011: Thesis preparation
  * GEO2021: Thesis <a href="https://geomatics.bk.tudelft.nl/geo2021/"><i class="fas fa-home"></i></a>
  * GEO5010: Research assignment <a href="https://3d.bk.tudelft.nl/courses/geo5010/"><i class="fas fa-home"></i></a>
  * GEO5014: Geomatics as support for energy applications
  * GEO5015: Modelling wind and dispersion in urban environments
  * GEO5017: Machine Learning for the Built Environment <a href="https://3d.bk.tudelft.nl/courses/geo5017/"><i class="fas fa-home"></i> (open course)</a>

<!-- <h2>Other courses we are teaching</h2>

  * [BK6ON5](https://studiegids.tudelft.nl/a101_displayCourse.do?course_id=48823): Ontwerpen 5 Gebieds(her)ontwikkeling in het Metropolitane Landschap
  * [BK4AC2](https://studiegids.tudelft.nl/a101_displayCourse.do?course_id=48774): AC2 – Empirische Onderzoekstechnieken voor Bouwkunde -->

- - -

<section id="theses"></section>
<h2>Looking for a MSc thesis topic?</h2>

We have a [list of potential topics](msctopics).


- - - 

## MSc thesis projects -- Ongoing

{% assign msc = site.data.mscnow | sort: 'surname' %}

<div class="row">
{% for i in msc %}
  <div class="col-xs-12 col-md-6">
  <div class="media">
    <br/>
    <div class="media-left pull-left">
      <img class="media-object" style="width:80px;height:80px;" src="{{ '/img/msc/' | append: i.image | prepend: site.baseurl }}"/>
    </div>
    <div class="media-body">
      <h4 class="media-heading">{{ i.name }} {{ i.surname }}</h4>
      {{ i.title }}
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
  <div class="col-xs-12 col-md-6">
  <div class="media">
    <br/>
    <div class="media-left pull-left">
      <a href="{{ i.link }}">
      <img class="media-object" style="width:80px;height:80px;" src="{{ '/img/msc/' | append: i.image | prepend: site.baseurl }}"/>
      <!-- <img class="media-object" data-holder-rendered="true" style="width:64px;height:64px;" src="https://placeimg.com/64/64/any" alt="64x64"> -->
    </a>
    </div>
    <div class="media-body">
      <h4 class="media-heading">
        {% if i.swapnames == False %}
          {{ i.name }} {{ i.van }} {{ i.surname }}
        {% else %}
          {{ i.surname }} {{ i.name }}
        {% endif %}
      </h4>
      {{ i.title }}
      <br/>
        <!-- <small>({{ i.year }})</small> -->
        {% if i.link %}
          <small><a href="{{ i.link }}"><i class="fas fa-book" title="thesis"></i></a></small>
        {% endif %}
        {% if i.paper %}
          <small><a href="{{ i.paper }}"><i class="fas fa-file-alt" title="paper"></i></a></small>
        {% endif %}
        {% if i.github %}
          <small><a href="{{ i.github }}"><i class="fab fa-github" title="github"></i></a></small> 
        {% endif %}
    </div>
  </div>
</div>
{% endfor %}
</div>

{% endfor %}



