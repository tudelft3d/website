---
layout: page
title: Open-source projects
permalink: /code/
---

Here you can find various software projects that were created by our group members and are available under open-source licenses. Before using the software, make sure that the license of a project suits your use case.

All of projects are available on our [GitHub group page](https://github.com/tudelft3d).

{% for i in site.data.code %}
<hr>
<div class="media">
  <a class="media-left">
    <img src="{{ "/img/code/" | append: i.image | prepend: site.baseurl }}">
  </a>
  <div class="media-body">
    <h3 class="media-heading">{{ i.name }}</h3>
    <p>{{ i.description }}</p>
    {% if i.web %}
      <p><i class="fa fa-external-link"></i> <a href="{{ i.web }}">{{ i.web }}</a></p>
    {% endif %}
    {% if i.github %}
      <p><i class="fa fa-github"></i> <a href="{{ i.github }}">{{ i.github }}</a></p>
    {% endif %}
  </div>
</div>
{% endfor %}



