---
layout: page
title: About
permalink: /about/
---

The 3D geoinformation research group is part of the [Department of Urbanism](http://www.bk.tudelft.nl/en/about-faculty/departments/urbanism/), [Faculty of Architecture and the Built Environment](http://www.bk.tudelft.nl) of the [Delft University of Technology](http://www.tudelft.nl). 
It focuses on the technologies underpinning geographical information systems (GIS), and aims at designing, developing and implementing better systems to model 3D cities, buildings and landscapes.
These systems help in environmental modelling, crisis management, automated cartographic generalization, information modelling, modelling of the interior of buildings, etc.

It is a multidisciplinary group (computer scientists, geomatics engineers, and geographers) composed of 3 permanent research staff and several PhD students, postdocs and visitors.


It has a history of successful collaborations with the industry and the government: its research has led to [software]({{ "/code/" |  prepend: site.baseurl }}), standards and patents for the management of 3D geographic information.

- - - 

## Staff

<div class="row">
    {% for member in site.data.staff %}
    <div class="col-lg-4 col-sm-6">
    {% if member.homepage %}
      <a href="http://{{ member.homepage }}"><img class="img-circle img-responsive" src="{{ "/img/staff/" | append: member.photo | prepend: site.baseurl }}"></a>
    {% else %}
      <img class="img-circle img-responsive" src="{{ "/img/staff/" | append: member.photo | prepend: site.baseurl }}">
    {% endif %}
      <h3>{{ member.name }} <small>{{ member.title }}</small></h3>
      <p>
        {% if member.homepage %}
          <i class="fa fa-home"></i> <a href="http://{{ member.homepage }}">{{ member.homepage }}</a><br>
        {% endif %}
        {% if member.email %}
          <i class="fa fa-envelope"></i> <a href="mailto:{{ member.email }}">{{ member.email }}</a><br>
        {% endif %}
        {% if member.phone %}
          <i class="fa fa-phone"></i> <a href="tel:{{ member.phone }}">{{ member.phone }}</a><br>
        {% endif %}
        {% if member.twitter %}
          <i class="fa fa-twitter"></i> <a href="https://twitter.com/{{ member.twitter }}">@{{ member.twitter }}</a><br>
        {% endif %}
        {% unless member.homepage %}
          <br>
        {% endunless %}
        {% unless member.email %}
          <br>
        {% endunless %}
        {% unless member.phone %}
          <br>
        {% endunless %}
        {% unless member.twitter %}
          <br>
        {% endunless %}
      </p>
    </div>
    {% endfor %}
</div>

- - -

<h2 id="where">Our offices</h2>

<div class="col-md-4">
  <i class="fa fa-map-marker fa-fw">     </i> Room 01.WEST.280 (building #8) <br>
  <i class="fa fa-map-marker fa-fw fade"></i> Faculty of Architecture <br>
  <i class="fa fa-map-marker fa-fw fade"></i> and the Built Environment<br>
  <i class="fa fa-map-marker fa-fw fade"></i> Delft University of Technology <br>
  <i class="fa fa-map-marker fa-fw fade"></i> Julianalaan 134 <br>
  <i class="fa fa-map-marker fa-fw fade"></i> Delft 2628BL<br>
  <i class="fa fa-map-marker fa-fw fade"></i> the Netherlands <br>
  <i class="fa fa-map-marker fa-fw fade"></i> <a href="http://www.tudelft.nl/en/about-tu-delft/contact-and-accessibility/housing-tu-delft/accessibility/building-8/">How to get here</a>
</div>
<div class="col-md-8">
  <div id="map"></div>
</div>

<script src="//cdn.leafletjs.com/leaflet-0.4/leaflet.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/proj4js/1.1.0/proj4js-compressed.js"></script>
<script src="{{ "/assets/js/mymap.js" | prepend: site.baseurl }}"></script>