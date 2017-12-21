---
layout: page
title: Events that we organise or have organised in the past.
permalink: /events/
---



<div class="row">
{% for i in site.data.events %}
  <div class="col-sm-4 col-md-3">
    <div class="thumbnail">
      <a href="{{ i.web | prepend: site.baseurl }}">
        <img src="{{ "/img/events/" | append: i.image | prepend: site.baseurl }}"/>
      </a>  
      <div class="caption">
        <h3>{{ i.name }}</h3>
        <p>{{ i.description }}<br>
        <i class="fa fa-calendar"></i> {{ i.date }}</p>
      </div>
    </div>
  </div>
{% endfor %}
</div>


