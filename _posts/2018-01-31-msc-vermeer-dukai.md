---
layout: post
title:  Two new Msc theses completed in our group
categories: news
date: 2018-01-31 15:17
---

![]({{ site.baseurl }}/img/2018/vermeerdukai.jpg)

Recently, both Martijn Vermeer (left) and Balázs Dukai (right) successfully defended their MSc thesis work (in the programme [MSc Geomatics at TU Delft](http://geomatics.tudelft.nl)). 
Congratulations to them!

Martijn did his thesis with the company [READAAR](http://www.readaar.com/), and he improved (greatly) their automatic detection of roof segments.
Also, he graduated *cum laude*, bravo!

Balázs investigated whether the LoD of buildings in 3D city models can be *inferred* automatically (and unfortunately that is not easy, see his thesis for the details...)
Balázs will be working in our group the coming year as a research-assistant and programmer.

Links to their final theses are available below.

- - -

{% assign msc = site.data.mscfinished | sort: 'surname' %}

<div class="row">
{% for i in msc %}
{% if i.surname == 'Dukai' or i.surname == 'Vermeer' %}
  <div class="col-sm-4 col-md-3">
    <div class="thumbnail">
      <a href="{{ i.link }}"><img src="{{ "/img/msc/" | append: i.image | prepend: site.baseurl }}"/></a>
      <div class="caption">
        <h3>
          {{ i.name }} {{ i.surname }} 
          <br />
          <small>({{ i.year }})</small>
        {% if i.link %}
          <small><a href="{{ i.link }}"><i class="fa fa-book" title="thesis"></i></a></small>
        {% endif %}
        {% if i.paper %}
          <small><a href="{{ i.paper }}"><i class="fa fa-file-text" title="paper"></i></a></small>
        {% endif %}
        {% if i.github %}
          <small><a href="{{ i.github }}"><i class="fa fa-github" title="github"></i></a></small> 
        {% endif %}
        </h3>
        <p>{{ i.title }}</p>
      </div>
    </div>
  </div>
{% endif %}
{% endfor %}
</div>
