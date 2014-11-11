---
layout: page
title: Open-source projects
permalink: /code/
---

Here you can find various software projects that were created by our group members and are available under open-source licenses. Before using the software, make sure that the license of a project suits your use case.

All of projects are available on our [GitHub group page](https://github.com/tudelft3d).

{% for i in site.data.code %}
<hr>
<div class="row">
  <div class="col-md-3">
    <img class="image" src="{{ "/img/code/" | append: i.image | prepend: site.baseurl }}"/>
  </div>
  <div class="col-md-9">
     <h3>{{ i.title }}</h3>
     <p>{{ i.description }}</p>
     {% if i.github %}
        <p><i class="fa fa-github"></i> <a href="{{ i.github }}">{{ i.github }}</a></p>
     {% endif %}
     {% if i.web %}
        <p><i class="fa fa-external-link"></i> <a href="{{ i.web }}">{{ i.web }}</a></p>
     {% endif %}
  </div>
</div>
{% endfor %}


