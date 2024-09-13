---
layout: page
title:  "3D talks: our series of seminars"
permalink: /3dtalks/
---


<div class="row">
  <div class="col-xs-4 col-md-3">
    <img src="{{ "/img/logos/3dtalks2.png" | prepend: site.baseurl }}"/>
  </div>
  <div class="col-xs-8 col-md-9">
    <p>Every week, we hold talks about one aspect of 3D geoinformation.
    Either one staff of the group presents their latest results, or we invite someone from another university or from a company to present their results and/or latest developments.</p>
    <p>These are usually Thursdays at 16:00&ndash;17:00, and everyone is welcome to join.</p>
    <p>
    Add this <a href="http://3d.bk.tudelft.nl/3dtalks/3dtalks.ics">ICS file</a> to your calendar application, it will be automatically updated.
    </p>
  </div>
</div>


- - -

## Upcoming talks

{% assign today = 'now' | date: "%Y%m%d" %}
{% assign talks = site.data.talks | sort: 'date' %}

<div class="table-responsive">

<table class="table table-striped">

  <tr class="info">
    <td>Date</td>
    <td>Presenter</td>
    <td>Title</td>
    <td style="white-space: nowrap;">Room (at <a href="http://www.tudelft.nl/en/about-tu-delft/contact-and-accessibility/housing-tu-delft/accessibility/building-8/">BK-City</a>)</td>
    <td>Time</td>
    <td>Slides</td>
  </tr>

  {% for i in talks %}
  {% assign a = i.date | date: "%Y%m%d" %}
  {% if a >= today %}
    <tr>
      <td style="white-space: nowrap;">{{ i.date  }}</td>
      <td>{{ i.name | markdownify | remove: '<p>' | remove: '</p>' }}</td>
      <td>{{ i.title | markdownify | remove: '<p>' | remove: '</p>' }}</td>
      <td>{{ i.room | markdownify | remove: '<p>' | remove: '</p>' }}</td>
      <td style="white-space: nowrap;">{{ i.time }}</td>
      {% if i.ppt %}
        <td><a href="https://3d.bk.tudelft.nl/pdfs/3dtalks/{{ i.ppt }}"><i class="fas fa-file-alt" aria-hidden="true"></i></a></td>
      {% endif %}
    </tr>
  {% endif %}  
  {% endfor %}

</table> 
</div>   

- - -

## Past talks

<div class="table-responsive">
<table class="table table-striped">

  <tr class="info">
    <td>Date</td>
    <td>Presenter</td>
    <td>Title</td>
    <td>Slides</td>
  </tr>

  {% for i in talks reversed %}
  {% assign a = i.date | date: "%Y%m%d" %}
  {% if a < today %}
    <tr>
      <td style="white-space: nowrap;">{{ i.date  }}</td>
      <td>{{ i.name | markdownify | remove: '<p>' | remove: '</p>' }}</td>
      <td>{{ i.title | markdownify | remove: '<p>' | remove: '</p>' }}</td>
      {% if i.ppt %}
      <td><a href="https://3d.bk.tudelft.nl/pdfs/3dtalks/{{ i.ppt }}"><i class="fas fa-file-alt" aria-hidden="true"></i></a></td>
      {% endif %}
    </tr>
  {% endif %}  
  {% endfor %}

</table>    
</div>