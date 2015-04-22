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
        <p><i class="fa fa-external-link"></i> <a href="{{ i.web | prepend: site.baseurl }}">{{ i.web | prepend: site.baseurl }}</a></p>
     {% endif %}
     {% if i.info %}
     	<div class="alert alert-info" role="alert">{{ i.info }}</div>
     {% endif %}
  </div>
</div>
{% endfor %}



