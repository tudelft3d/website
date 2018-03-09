---
layout: page
title:  Our logo, in different forms
permalink: /logo/
---

- - -

{% for file in site.static_files %}
  {% if file.path contains "/logo/" %}
  	{% if file.path contains "black" %}
<div class="col-sm-6">
  <div class="thumbnail">
    <a href="{{ file.path | prepend: site.baseurl }}"><img src="{{ file.path | prepend: site.baseurl}}"/></a>
    <div class="caption">
      <small>{{ file.path }}</small>
    </div>
  </div>
</div>
		{% else %}
<div class="col-sm-6">
  <div class="thumbnail" style="background-color: #2c3e50;">
    <a href="{{ file.path | prepend: site.baseurl }}"><img src="{{ file.path | prepend: site.baseurl}}"/></a>
    <div class="caption" style="color: white;">
      <small>{{ file.path }}</small>
    </div>
  </div>
</div>
		{% endif %}
  {% endif %}
{% endfor %}