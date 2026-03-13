---
layout: page
title:  "3DTea@UDS: our series of seminars"
permalink: /3dtea/
---

<div class="row">
  <div class="col-xs-8 col-md-9">
    <p><strong>Welcome to 3DTea!</strong></p>
    
    <p>
    Every Thursday at 16:00, we gather for our <em>3DTea</em> sessions - a relaxed weekly meeting where the whole group can connect, either in person or online. This series replaces our previous 3DTalks with a more informal format making it the perfect moment for sharing knowledge and catching up. 
    </p>
    
    <p>
    <strong>How it works:</strong><br>
    <em>Last Thursday of each month:</em> Reserved for our monthly UDS catch-up meeting<br>
    <em>All other Thursdays:</em> Open for member presentations, new member introductions, or group discussions. We also occasionally host invited speakers. Topics can range from research breakthroughs to personal passions - share your latest work, discuss interesting projects, or dive into subjects that inspire you. Ready to present? Find a free date in the schedule below and put your name to it! 
    </p>
    
    <p><strong>Presentation expectations:</strong><br>
    • Members are asked to present at least once per year<br>
    • New members present twice: once for introducing yourself and your background and once on a topic of your choosing<br>
     </p>
    
    <p><strong>Snacks:</strong><br>
    All members contribute by bringing snacks for participants at least once per year. Homemade treats are welcome, and we aim to keep costs reasonable (under €5).</p>
    
    <p><strong>Rescheduling:</strong><br>
    Can't present during your scheduled slot? Try to swap with another presenter first. If that's not possible, contact Amy for assistance.</p>

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