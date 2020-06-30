---
layout: post
title:  X MSc theses defences!
categories: news
date: 2020-06-24 14:37
---

We've recently had busy weeks with X students finishing their [MSc Geomatics](http://geomatics.tudelft.nl) theses with our group! 🎉🥳

Research titles and links to the final results can be explored below, followed by photos of some very happy and relieved students.

Have a great summer all, you deserve it! 🤩😎

- - -

{% assign msc = site.data.mscfinished | sort: 'surname' %}

<div class="row">
{% for i in msc %}
{% if i.surname == 'Lánský' or i.surname == 'Mulder' %}
{% if i.year == 2020 %}
  <div class="col-sm-4 col-xs-6">
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
{% endif %}
{% endfor %}
</div>

![]({{ site.baseurl }}/img/2020/defense_lansky.jpg)
<!-- ![]({{ site.baseurl }}/img/2020/defense_lansky) -->
