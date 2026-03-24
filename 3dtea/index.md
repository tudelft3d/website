---
layout: page
title: "Welcome at 3DTea@UDS: our series of seminars"
permalink: /3dtea/
---

<div class="row">
  <div class="col-xs-8 col-md-9">
    <p>
      Every Thursday at 16:00, we gather for our <em>3DTea</em> sessions - a relaxed weekly meeting where the whole group can connect, either in person or online. This series replaces our previous 3DTalks with a more informal format making it the perfect moment for sharing knowledge and catching up.
    </p>
    <div class="section-header">How it works:</div>
    <p>
    <ul class="website-list">
      <li><strong>Last Thursday of each month:</strong> Reserved for our monthly UDS catch-up meeting</li>
      <li><strong>All other Thursdays:</strong> pen for member presentations, new member introductions, or group discussions. We also occasionally host invited speakers. Topics can range from research breakthroughs to personal passions - share your latest work, discuss interesting projects, or dive into subjects that inspire you. Ready to present? Find a free date in the schedule below and put your name to it!</li>
    </ul>
    </p>
    <div class="section-header">Presentation expectations:</div>
    <ul class="website-list">
      <li><strong>Members:</strong> Present at least once per year - share your research, projects, or anything you're passionate about</li>
      <li><strong>New members:</strong> Reserve a slot soon after joining to introduce yourself, your background, and research interests</li>
      <li><strong>Visiting researchers:</strong> Two presentations during your stay:Once  in the beginning to introduce yourselves and once at the end to showcase what you worked on during your stay. </li>
    </ul>
    <div class="section-header">Snacks:</div>
    <p>
      All members contribute by bringing snacks for participants at least once per year. Homemade treats are welcome, and we aim to keep costs reasonable (under €5).
    </p>
    <div class="section-header">Rescheduling:</div>
    <p>
      Can't present during your scheduled slot? Try to swap with another presenter first. If that's not possible, contact Amy for assistance.
    </p>
    <div class="section-header">Calendar updates:</div>
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
    <td style="white-space: nowrap;">Room</td>
    <td>Snack bearer</td>
    <td>Slides</td>
  </tr>

  {% for i in talks %}
  {% assign a = i.date | date: "%Y%m%d" %}
  {% if a >= today %}
    {% if i.title == "" or i.title == nil %}
    <tr class="available-slot">
      <td style="white-space: nowrap;">{{ i.date  }}</td>
      <td>{{ i.name | markdownify | remove: '<p>' | remove: '</p>' }}</td>
      <td><em>Available slot - add your name!</em></td>
      <td>{{ i.room | markdownify | remove: '<p>' | remove: '</p>' }}</td>
      <td style="white-space: nowrap;">{{ i.snacks }}</td>
      <td></td>
    </tr>
    {% else %}
    <tr>
      <td style="white-space: nowrap;">{{ i.date  }}</td>
      <td>{{ i.name | markdownify | remove: '<p>' | remove: '</p>' }}</td>
      <td>{{ i.title | markdownify | remove: '<p>' | remove: '</p>' }}</td>
      <td>{{ i.room | markdownify | remove: '<p>' | remove: '</p>' }}</td>
      <td style="white-space: nowrap;">{{ i.snacks }}</td>
      {% if i.ppt %}
        <td><a href="https://3d.bk.tudelft.nl/pdfs/3dtalks/{{ i.ppt }}"><i class="fas fa-file-alt" aria-hidden="true"></i></a></td>
      {% else %}
        <td></td>
      {% endif %}
    </tr>
    {% endif %}
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
  {% if a < today and i.title != "" and i.title != "3D MEETING" and i.title != "UDS-catch-up" and i.title != "Public Holiday" %}
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