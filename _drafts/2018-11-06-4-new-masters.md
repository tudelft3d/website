---
layout: post
title:  Four new MSc theses in our group
categories: news
date: 2018-11-06 15:46
---

In the last 2 weeks, 4 students from the [MSc Geomatics programme at TU Delft](http://geomatics.tudelft.nl) graduated with theses by staff from our group.
Congratulations to them 🎉

You can download their thesis in the links below, they are all---surprise, surprise---related to 3D geoinformation!

- - -

{% assign msc = site.data.mscfinished | sort: 'surname' %}

<div class="row">
{% for i in msc %}
{% if i.surname == 'Griffioen' or i.surname == 'Christodoulou' or i.surname == 'Karydakis' or i.surname == 'Wang'  %}
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

- - -

![]({{ site.baseurl }}/img/2018/griffioen.jpg)
![]({{ site.baseurl }}/img/2018/wang.jpg)