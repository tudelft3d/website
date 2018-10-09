---
layout: page
title: PhD theses completed
permalink: /phd/
---



{% assign phd = site.data.phdfinished | sort: 'year' %}


<div class="row">
{% for i in phd reversed %}
  <div class="col-xs-6 col-sm-4 col-md-3">
    <div class="thumbnail">
      <a href="{{ i.link }}"><img src="{{ "/phd/" | append: i.image | prepend: site.baseurl }}"/></a>
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
          <small><a href="{{ i.link }}"><i class="fa fa-book" title="thesis"></i></a></small>
        {% endif %}
        {% if i.doi %}
          <small><a href="{{ i.doi }}"><i class="fa fa-bookmark" title="thesis"></i></a></small>
        {% endif %}
        {% if i.website %}
          <small><a href="{{ i.website }}"><i class="fa fa-file-text" title="website"></i></a></small>
        {% endif %}
        {% if i.github %}
          <small><a href="{{ i.github }}"><i class="fa fa-github" title="github"></i></a></small> 
        {% endif %}
        </h3>
        <p>{{ i.title }}</p>
      </div>
    </div>
  </div>
{% endfor %}
</div>



