---
layout: page
title: Research projects
permalink: /projects/
---

{% for i in site.data.projects %}
  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">{{ i.name }}<span class="text-muted"></span></h2>
      <p class="lead">{{ i.description}}</p>
    </div>
    <div class="col-md-5">
      <a href="{{ i.webpage }}"><img class="featurette-image img-responsive" src="{{ "/img/projects/" | append: i.image | prepend: site.baseurl }}" alt="Generic placeholder image"></a>
    </div>
  </div>
  {% if forloop.rindex > 1 %}
  <hr class="featurette-divider">
  {% endif %}
{% endfor %}

