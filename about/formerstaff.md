---
layout: page
title: Former Staff
permalink: /about/formerstaff/
---


{% assign members = site.data.staff_former | sort: 'surname' %}

<div class="row">
    {% for member in members %}
    <div class="col-lg-4 col-sm-6">
      <img class="img-circle img-responsive" src="{{ "/img/staff/" | append: member.photo | prepend: site.baseurl }}">
      <h3>{{ member.name }} {{ member.surname }}</h3>
      <p>
        {{ member.title }} ({{ member.period }})<br>
        {% if member.email %}
          <i class="fa fa-envelope"></i> <a href="mailto:{{ member.email }}">{{ member.email }}</a><br>
        {% endif %}
        {% if member.homepage %}
          <i class="fa fa-home"></i> <a href="http://{{ member.homepage }}">{{ member.homepage }}</a><br>
        {% endif %}
        {% if member.twitter %}
          <i class="fa fa-twitter"></i> <a href="https://twitter.com/{{ member.twitter }}">@{{ member.twitter }}</a><br>
        {% endif %}

      </p>
    </div>
    {% endfor %}
</div>

