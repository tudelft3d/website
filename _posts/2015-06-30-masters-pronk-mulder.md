---
layout: post
title:  Two new Msc theses completed in our group
categories: news
date: 2015-06-30
---

![]({{ site.baseurl }}/img/2015/pronkmulder.jpg)

On June 22, both Damien Mulder (left) and Maarten Pronk (right) successfully defended their MSc thesis work (in the programme [MSc Geomatics at TU Delft](http://geomatics.tudelft.nl)). 
Congratulations to them!

Damien worked on the automatic repair of 3D buildings with voxel-based method, and Maarten worked on the efficient storage of massive TINs in a DBMS (and moreover graduated *cum laude*, bravo!).
A link to their final thesis and code is available below.

- - -

{% assign msc = site.data.mscfinished | sort: 'surname' %}

<div class="row">
{% for i in msc %}
{% if i.surname == 'Mulder' or i.surname == 'Pronk' %}
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
