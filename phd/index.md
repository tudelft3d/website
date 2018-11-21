---
layout: page
title: PhD theses completed
permalink: /phd/
---



{% assign phd = site.data.phdfinished | sort: 'year' %}


<div class="row">
{% for i in phd reversed %}
  <div style="display: inline-block; vertical-align: top;">
    <div class="thumbnail" style="padding: 15px;">
      <a href="{{ i.doi }}"><img src="{{ "/phd/" | append: i.image | prepend: site.baseurl }}" style="height: 300px; border: 1px solid #ccc" /></a>
      <div class="caption">
        <h3>
        {% if i.swapnames == False %}
          {{ i.name }} {{ i.van }} {{ i.surname }}
        {% else %}
          {{ i.surname }} {{ i.name }}
        {% endif %}
          <br />
          <small>({{ i.year }})</small>
        {% if i.link %}
          <small><a href="{{ i.link }}"><i class="fas fa-book" title="thesis"></i></a></small>
        {% endif %}
        {% if i.doi %}
          <small><a href="{{ i.doi }}"><i class="fa fa-bookmark" title="thesis"></i></a></small>
        {% endif %}
        {% if i.website %}
          <small><a href="{{ i.website }}"><i class="fa fa-file-text" title="website"></i></a></small>
        {% endif %}
        {% if i.github %}
          <small><a href="{{ i.github }}"><i class="fas fa-github" title="github"></i></a></small> 
        {% endif %}
        </h3>
        <p style="max-width: 200px;">{{ i.title }}</p>
      </div>
    </div>
  </div>
{% endfor %}
</div>



