---
layout: page
title: Our events
permalink: /events/
---

Events that we organise or have organised in the past.

{% for i in site.data.events %}
<hr>
<div class="row">
  <div class="col-md-3">
  {% if i.web %}
    <a href="{{ i.web | prepend: site.baseurl }}"><img class="image img-responsive" src="{{ "/img/events/" | append: i.image | prepend: site.baseurl }}"/></a>
  {% else %}
    <img class="image img-responsive" src="{{ "/img/events/" | append: i.image | prepend: site.baseurl }}"/>
  {% endif %}
  </div>
  <div class="col-md-9">
  {% if i.web %}
    <h3><a href="{{ i.web | prepend: site.baseurl }}">{{ i.name }}</a></h3>
  {% else %}
     <h3>{{ i.name }}</h3>
  {% endif %}
  {% if i.date %}
    <p><i class="fa fa-calendar"></i> {{ i.date }}</p>
  {% endif %}
  {% if i.description %}
     <p>{{ i.description }}</p>
   {% endif %}
   {% if i.info %}
     	<div class="alert alert-info" role="alert">{{ i.info }}</div>
   {% endif %}
  </div>
</div>
{% endfor %}



