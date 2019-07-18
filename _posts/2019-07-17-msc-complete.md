---
layout: post
title:  9 MSc theses defences!
categories: news
date: 2019-07-17 14:30
---

We've had a busy several weeks with 9 students finishing their [MSc Geomatics](http://geomatics.tudelft.nl) theses with our group! 🎉🥳

Research titles and links to the final results can be explored below, followed by photos of some very happy and relieved students.

Have a great summer all, you deserve it! 🤩😎

- - -

{% assign msc = site.data.mscfinished | sort: 'surname' %}

<div class="row">
{% for i in msc %}
{% if i.surname == 'Du' or i.surname == 'Ruben' or i.surname == 'Garcia Gonzalez' or i.surname == 'Oldenburg' or i.surname == 'Boersma' or i.image == 'quwang.png' or i.surname == 'Tzounakos' or i.surname == 'Bouzas' or i.image == 'yixin.png' %}
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

![]({{ site.baseurl }}/img/2019/BoersmaDefense.jpg)
![]({{ site.baseurl }}/img/2019/BouzasDefense.jpg)
![]({{ site.baseurl }}/img/2019/OldenburgDefense.jpg)
![]({{ site.baseurl }}/img/2019/TzounakosDefense.jpg)
![]({{ site.baseurl }}/img/2019/QuWangDefense.jpg)
![]({{ site.baseurl }}/img/2019/YixinXuDefense.jpeg)