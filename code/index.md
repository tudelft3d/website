---
layout: page
title: Open-source projects
permalink: /code/
---

Here you can find various software projects that were created by our group members and are available under open-source licenses. Before using the software, make sure that the license of a project suits your use case.

All of projects are available on our [GitHub group page](https://github.com/tudelft3d).

A publication is added where applicable. If you use our code for a scientific project, please cite the corresponding article.

- - -

<div class="row">
{% for i in site.data.code %}
  <div class="col-sm-4 col-md-3">
    <div class="thumbnail">
      <img src="{{ "/img/code/" | append: i.image | prepend: site.baseurl }}"/>
      <div class="caption">
        <h3>{{ i.name }}
        <br />
        <small>
        {% if i.github %}
          <a href="{{ i.github }}"><i class="fa fa-github"></i></a> 
        {% endif %}
        {% if i.thesis %}
          <a href="{{ i.thesis }}"><i class="fa fa-book"></i></a>
        {% endif %}
        {% if i.paper %}
          <a href="{{ i.paper }}"><i class="fa fa-file-pdf-o fa-fw"></i></a>
        {% endif %}
        {% if i.web %}
          <a href="{{ i.web }}"><i class="fa fa-external-link"></i></a>
        {% endif %}
        {% if i.video %}
          <a href="{{ i.video }}"><i class="fa fa-video-camera"></i> </a>
        {% endif %}
        {% if i.data %}
          <a href="{{ i.data }}"><i class="fa fa-database"></i> </a>
        {% endif %}
        </small>
        </h3>
        <p>{{ i.description }}</p>
      </div>
    </div>
  </div>
{% endfor %}
</div>

