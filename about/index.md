---
layout: page
title: About
permalink: /about/
---

The 3D geoinformation research group is part of the [Department of Urbanism](http://www.bk.tudelft.nl/en/about-faculty/departments/urbanism/), [Faculty of Architecture and the Built Environment](http://www.bk.tudelft.nl) of the [Delft University of Technology](http://www.tudelft.nl). 
It focuses on the technologies underpinning geographical information systems (GIS), and aims at designing, developing and implementing better systems to model 3D cities, buildings and landscapes.
These systems help in environmental modelling, crisis management, automated cartographic generalisation, information modelling, modelling of the interior of buildings, etc.

It is a multidisciplinary group (computer scientists, geomatics engineers, and geographers) composed of 3 permanent research staff and several PhD students, postdocs and visitors.

It has a history of successful collaborations with the industry and the government: its research has led to [software]({{ "/code/" |  prepend: site.baseurl }}), standards and patents for the management of 3D geographic information.

The staff of the group is active in several international organisations such as the [Open Geospatial Consortium](http://www.opengeospatial.org), [EuroSDR](http://www.eurosdr.net), and the [International Society for Photogrammetry and Remote Sensing](http://www.isprs.org).

- - - 

## <a name="people"></a> Staff

{% assign members = site.data.staff | sort: 'surname' %}

<div class="row">
    {% for member in members %}
    <div class="col-lg-4 col-sm-6">
    {% if member.homepage %}
      <a href="http://{{ member.homepage }}"><img class="img-circle img-responsive" src="{{ "/img/staff/" | append: member.photo | prepend: site.baseurl }}"></a>
    {% else %}
      <img class="img-circle img-responsive" src="{{ "/img/staff/" | append: member.photo | prepend: site.baseurl }}">
    {% endif %}
      <h3>{{ member.name }} {{ member.van }} {{ member.surname }} <small>{{ member.title }}</small></h3>
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

## <a name="people"></a> Former Staff

[List of former staff]({{ "/about/formerstaff" | prepend: site.baseurl }})

- - -

<h2 id="where">Our offices</h2>

<div class="col-md-4">
  <i class="fa fa-map-marker fa-fw">     </i> Room BG.WEST.010 (building #8) <br>
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

<script src="//cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.js"></script>
<script type="text/javascript" src="https://stamen-maps.a.ssl.fastly.net/js/tile.stamen.js"></script>
<script src="{{ "/assets/js/mymap.js" | prepend: site.baseurl }}"></script>
