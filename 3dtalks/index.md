---
layout: page
title:  "3D talks: our series of seminars"
permalink: /3dtalks/
---


<div class="row">
  <div class="col-xs-4 col-md-2">
    <img src="{{ "/img/logos/3dtalks2.png" | prepend: site.baseurl }}"/>
  </div>
  <div class="col-xs-8 col-md-10">
    <p>Every 2 weeks, we hold talks about one aspect of 3D geoinformation.
    Either one staff of the group presents their latest results, or we invite someone from another university or from a company to present their results and/or latest developments.</p>
    <p>These are usually Fridays at 11:00--12:00, and everyone is welcome to join.</p>
  </div>
</div>

- - -

## Upcoming talks

{% assign today = 'now' | date: "%s" %}
{% assign talks = site.data.3dtalks | sort: 'date' %}

<table class="table table-striped">

  <tr class="info">
    <td>Date</td>
    <td>Presentor</td>
    <td>Title</td>
    <td>Room (at <a href="http://www.tudelft.nl/en/about-tu-delft/contact-and-accessibility/housing-tu-delft/accessibility/building-8/">BK-City</a>)</td>
    <td>Time</td>
  </tr>

  {% for i in talks %}
  {% assign a = i.date | date: "%s" %}
  {% if a >= today %}
    <tr>
      <td>{{ i.date  }}</td>
      <td>{{ i.name }}</td>
      <td>{{ i.title }}</td>
      <td>{{ i.room }}</td>
      <td>{{ i.time }}</td>
    </tr>
  {% endif %}  
  {% endfor %}

</table>    

- - -

## Past talks

{% assign today = 'now' | date: "%s" %}
{% assign talks = site.data.3dtalks | sort: 'date' %}

<table class="table table-striped">

  <tr class="info">
    <td>Date</td>
    <td>Presentor</td>
    <td>Title</td>
    <td>Slides</td>
  </tr>

  {% for i in talks reversed %}
  {% assign a = i.date | date: "%s" %}
  {% if a < today %}
    <tr>
      <td>{{ i.date  }}</td>
      <td>{{ i.name }}</td>
      <td>{{ i.title }}</td>
      <td>{{ i.ppt }}</td>
    </tr>
  {% endif %}  
  {% endfor %}

</table>    