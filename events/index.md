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
    <img class="image img-responsive" src="{{ "/img/events/" | append: i.image | prepend: site.baseurl }}"/>
  </div>
  <div class="col-md-9">
     <h3>{{ i.name }}</h3>
     <p>{{ i.description }}</p>
     {% if i.web %}
        <p><i class="fa fa-external-link"></i> <a href="{{ i.web }}">{{ i.web }}</a></p>
     {% endif %}
  </div>
</div>
{% endfor %}



