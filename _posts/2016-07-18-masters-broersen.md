---
layout: post
title:  A new Msc thesis completed in our group
categories: news
date: 2016-07-18 12:16
---



On June 22, Tom Broersen successfully defended his MSc thesis work (in the programme [MSc Geomatics at TU Delft](http://geomatics.tudelft.nl)). 
Congratulations!

He worked on the automatic identification of water courses by using only the AHN3 dataset.
His work will significantly improve the current semi-manual process that uses different 2D datasets and aerial imagery.

{% assign msc = site.data.mscfinished | sort: 'surname' %}

<div class="row">
{% for i in msc %}
{% if i.surname == 'Broersen' %}
  <div class="col-sm-6 col-md-2">
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

- - -

![]({{ site.baseurl }}/img/2016/tom.jpg)
![]({{ site.baseurl }}/img/2016/tom2.jpg)
