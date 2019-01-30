---
layout: post
title:  MSc thesis defence of Puck Flikweert
categories: news
date: 2019-01-30 15:25
---

On January 30th, Puck Flikweert obtained her [MSc Geomatics](http://geomatics.tudelft.nl) degree cum laude! Her thesis was titled <i>Automatic Extraction of an IndoorGML Navigation from an Indoor Point Cloud</i>. Well done Puck! 🎉

You can read all about her research in her graduation thesis that is linked below.


- - -

{% assign msc = site.data.mscfinished | sort: 'surname' %}

<div class="row">
{% for i in msc %}
{% if i.surname == 'Flikweert' %}
  <div class="col-sm-4 col-md-3">
    <div class="thumbnail">
      <a href="{{ i.link }}"><img src="{{ "/img/msc/" | append: i.image | prepend: site.baseurl }}"/></a>
      <div class="caption">
        <h3>
          {{ i.name }} {{ i.surname }} 
          <br />
          <small>({{ i.year }})</small>
        {% if i.link %}
          <small><a href="{{ i.link }}"><i class="fas fa-book" title="thesis"></i></a></small>
        {% endif %}
        {% if i.paper %}
          <small><a href="{{ i.paper }}"><i class="fas fa-file-text" title="paper"></i></a></small>
        {% endif %}
        {% if i.github %}
          <small><a href="{{ i.github }}"><i class="fab fa-github" title="github"></i></a></small> 
        {% endif %}
        </h3>
        <p>{{ i.title }}</p>
      </div>
    </div>
  </div>
{% endif %}
{% endfor %}
</div>

![]({{ site.baseurl }}/img/2019/puck-msc.jpeg)