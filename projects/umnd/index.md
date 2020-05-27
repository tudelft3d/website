---
layout: frontpage_umnd
title: Urban modelling in higher dimensions (UMnD)
permalink: /projects/umnd/
---

Urban modelling in higher dimensions, UMnD for short, is a project funded by the ERC Starting Grant [ERC-StG-2015](https://cordis.europa.eu/project/rcn/199506_en.html), which awarded 1.5 million euros to [Jantien Stoter]({{ "/jstoter" | prepend: site.baseurl }}) for a five-year research project.
It started in September 2016 and is scheduled to run until May 2022. The [Amsterdam Institute of Advanced Metropolitan Solutions](https://www.ams-institute.org) funds the implementation of the UMnD research results for urban applications in Amsterdam.

{% include umnd/activities.html %}

- - -

## Table of Contents
{:.no_toc}

* Contents
{:toc}

- - -

## Objective

3D geographic information about urban objects (buildings, roads) is needed to monitor and control processes within modern urban areas (noise, flooding, energy demand-supply).
However, each specific process requires 3D data with its own specific semantic and geometric Level of Detail (LoD), and current approaches require enormous manual efforts to collect general-purpose 3D data and to transform it to make it suitable for a specific application.

In this project, we will develop a fundamental solution for providing 3D data at application specific LoDs.
For this, we will use an innovative method that goes far beyond the state-of-the-art by introducing higher dimensional (nD) mathematical models, which will enable us to to enforce consistency by modelling the LoDs as an extra dimension to the 3D spatial dimensions in an integrated 3D+LoD (4D) model.

We have defined three key research lines for the project: (i) a groundbreaking extension of 2D cartographic generalisation solutions to 3D, enabling us to automatically derive application-specific coarse 3D data from fine 3D data; (ii) embedding multiple 3D city models at different levels of detail into a single 4D model; and (iii) “slicing” operations that extract custom 3D cross-sections of the 4D model.
By combining the results of these three lines of research, we aim to generate error-free 3D data at application specific LoDs.

If successful, the 4D approach opens a new horizon for modelling parametrisable aspects of urban environments, which may establish new modelling paradigms in the future.

- - - 

## Research Lines

<div class="row">
    <div class="col-xs-5 col-sm-4">
      <a href="{{ "/projects/umnd/rl1.html" | prepend: site.baseurl }}" class="rl-thumbnail">
        <img src="{{ "/projects/umnd/img/rl1.png" | prepend: site.baseurl }}" alt="">
      </a>
      <div class="caption hidden-xs">
        <h3>Generalisation of 3D City Models</h3>
      </div>
    </div>
    <div class="col-xs-7 caption visible-xs">
      <h3>Generalisation of 3D City Models</h3>
    </div>
    <div class="col-xs-5 col-sm-4">
      <a href="{{ "/projects/umnd/rl2.html" | prepend: site.baseurl }}" class="rl-thumbnail">
        <img src="{{ "/projects/umnd/img/rl2.png" | prepend: site.baseurl }}" alt="">
      </a>
      <div class="caption hidden-xs">
        <h3>Construction and Storage of 4D City Objects</h3>
      </div>
    </div>
    <div class="col-xs-7 caption visible-xs">
      <h3>Construction and Storage of 4D City Objects</h3>
    </div>
    <div class="col-xs-5 col-sm-4">
      <a href="{{ "/projects/umnd/rl3.html" | prepend: site.baseurl }}" class="rl-thumbnail">
        <img src="{{ "/projects/umnd/img/rl3.png" | prepend: site.baseurl }}" alt="">
      </a>
      <div class="caption hidden-xs">
        <h3>Extraction of 3D City Objects from a 4D Model</h3>
      </div>
    </div>
    <div class="col-xs-7 caption visible-xs">
      <h3>Extraction of 3D City Objects from a 4D Model</h3>
    </div>
  </div>

- - -

## Events

The following is the list of events that we participated in or organised related to the UMnD project:

### 2019
- [EuroSDR - AMS GeoBIM benchmark workshop, Amsterdam, 2 and 3 December](https://3d.bk.tudelft.nl/projects/geobim-benchmark/events.html)
- [3D GeoInfo 2019 Conference, Singapore, 26 and 27 September](https://www.3dgeoinfo2019.com/)
- [2nd International IAG Workshop on BIM and GIS Integration, Singapore, 25 September](https://www.3dgeoinfo2019.com/bim-gis-workshop/)

### 2018

- [3D GeoInfo 2018 Conference, TU Delft, 1 and 2 October](https://3d.bk.tudelft.nl/events/3dgeoinfo2018/)
- [3D GeoInfo 2018 pre-conference workshop, TU Delft, 30 September](https://3d.bk.tudelft.nl/events/3dgeoinfo2018/workshop.html)
- [Urbanism PhD Day 2018, TU Delft, 15 June](https://www.urbanism.nl)
- [International Symposium on Point Cloud Processing, TU Delft, 13 March](https://3d.bk.tudelft.nl/events/pcp2018/)

### 2017

- [Urbanism PhD Day 2017, TU Delft, 10 May](https://www.urbanism.nl)
- [EuroSDR workshop on economic value of 3D Geoinformation, ICGC Barcelona, 30-31 March](http://www.eurosdr.net/workshops/identifying-economic-value-3d-geoinformation)
- [PhD Symposium with TU München, TU Delft, 23-24 March](https://3d.bk.tudelft.nl/news/2017/04/10/TU-Munchen-PhD-symposium.html)
- [Open Geospatial Consortium TC Meeting, TU Delft, 20-24 March](http://www.opengeospatial.org/event/1703tc)
- [Symposium 3D urban modelling, AMS Amsterdam, 15 March](http://www.ams-institute.org/events/event/workshop-3d-geo-information-for-smart-urban-applications/)
- [National 3D symposium, Provinciehuis  Utrecht, 15 November](http://www.geonovum.nl/nieuws/nationaal-3d-symposium-15-november)

- - -

## Activities

{% assign activities = site.data.umnd.activities | sort: 'date' | reverse %}
<ul class="posts">
{% for activity in activities %}
    <li class="activity"><span>{{ activity.date | date_to_string }}</span> {{ activity.description }}
      <i>Related to research line(s)
      {% for rl in activity.research_line %}
        <a href="{{ "/projects/umnd/rl" | append: rl | append: ".html" | prepend: site.baseurl }}">{{ rl }}</a>{% if forloop.last == false %}, {% endif %}{% endfor %}.</i>
    </li>
{% endfor %}
</ul>

- - -

## Team

<div class="row">
    {% include project_team.html project_name='umnd' %} 
</div>

- - -

## Data Management Plan

The project's data management plan is available [here](/projects/umnd/dmp.html)

- - -

## Publications

{% imbiber projects/umnd/umnd.bib groupby:classthenyear idswithprefix:type_ %}
