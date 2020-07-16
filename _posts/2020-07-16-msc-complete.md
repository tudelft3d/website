---
layout: post
title:  10 new MSc theses defences!
categories: news
date: 2020-07-16 14:19
---

We've recently had busy weeks with 10 students finishing their [MSc Geomatics](http://geomatics.tudelft.nl) theses with our group! 🎉🥳

Some were done at the university (we had to get dressed and go out the door, bizarre...) and some were done online.

Research titles and links to the final results can be explored below, followed by photos of some very happy and relieved students.

Have a great summer all, you deserve it! 🤩😎

- - -

{% assign msc = site.data.mscfinished | sort: 'surname' %}

<div class="row">
{% for i in msc %}
{% if i.surname == 'Lánský' 
   or i.surname == 'Mulder' 
   or i.surname == 'van Liempt' 
   or i.surname == 'Wiersma' 
   or i.surname == 'Zhao' 
   or i.surname == 'Dahle' 
   or i.surname == 'Oostwegel' 
   or i.surname == 'Garg' 
   or i.surname == 'Opsomer' 
   or i.surname == 'Kaniouras' %}
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
![]({{ site.baseurl }}/img/2020/defense_vanliempt.jpg)
![]({{ site.baseurl }}/img/2020/defense_yifang.jpg)
<!-- ![]({{ site.baseurl }}/img/2020/defense_lansky) -->
