---
layout: page
title: Research projects
permalink: /projects/
---

<div class="row">
{% for i in site.data.projects %}
{% capture beginchar %}{{ i.webpage | truncate: 4 }}{% endcapture %}
  {% if beginchar == "/..." %}
    {% assign link = i.webpage | prepend: site.baseurl %}
  {% else %}
    {% assign link = i.webpage %}
  {% endif %}
  <div class="col-sm-4 col-md-3">
    <div class="thumbnail">
      <a href="{{ link }}"><img src="{{ "/img/projects/" | append: i.image | prepend: site.baseurl }}"/></a>
      <div class="caption">
        <h3><a href="{{ link }}">{{ i.name }}</a>
        <br />
        {% if i.funding %}
          <small>[funded by <a href="{{ i.fundingurl }}">{{ i.funding }}</a>]</small>
        {% endif %}
        </h3>
        <p>{{ i.description }}</p>
      </div>
    </div>
  </div>
{% endfor %}
</div>
