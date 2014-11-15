---
layout: page
title: About
permalink: /about/
---


The 3D geoinformation research group is part of the [Department of Urbanism](http://www.bk.tudelft.nl/en/about-faculty/departments/urbanism/), [Faculty of Architecture and the Built Environment](http://www.bk.tudelft.nl) of the [Delft University of Technology](http://www.tudelft.nl). The core research of the group is geographical information (geoinformation) with a special focus on 3D modelling of cities, buildings and landscapes. Research areas are automated cartographic generalization, information modelling, modelling of interior of buildings and crisis management.

--- 

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
      </p>
    </div>
    {% endfor %}
</div>

---

<div class="col-md-4">
  <i class="fa fa-map-marker fa-fw">     </i> Room 01.Oost.350 (building #8) <br>
  <i class="fa fa-map-marker fa-fw fade"></i> Faculty of Architecture <br>
  <i class="fa fa-map-marker fa-fw fade"></i> and the Built Environment<br>
  <i class="fa fa-map-marker fa-fw fade"></i> Delft University of Technology <br>
  <i class="fa fa-map-marker fa-fw fade"></i> Julianalaan 134 <br>
  <i class="fa fa-map-marker fa-fw fade"></i> Delft 2628BL<br>
  <i class="fa fa-map-marker fa-fw fade"></i> the Netherlands <br>
  <i class="fa fa-map-marker fa-fw fade"></i> <a href="http://www.tudelft.nl/en/about-tu-delft/contact-and-accessibility/housing-tu-delft/accessibility/building-8/">How to get here</a>
</div>
<div class="col-md-8">
<iframe width='100%' height='400px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/hugoledoux.k7nfjfl9/attribution,zoompan.html?access_token=pk.eyJ1IjoiaHVnb2xlZG91eCIsImEiOiIyUEdGTTFZIn0.d1jmfpIZI_fD9rl8-bax9w'></iframe>
</div>