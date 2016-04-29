---
layout: page
title:  Our logo, in different forms
permalink: /logo/
---

- - -

{% for file in site.static_files %}
  {% if file.path contains "/logo/" %}

<div class="col-sm-12 col-md-6">
    <div class="thumbnail">
      <a href="{{ file.path }}"><img src="{{ file.path }}"/></a>
      <div class="caption">
        <small>{{ file.path }}</small>
      </div>
    </div>
  </div>
  {% endif %}
{% endfor %}