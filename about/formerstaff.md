---
layout: page
title: Former Staff
permalink: /about/formerstaff/
---


{% assign members = site.data.staff_former | sort: 'period' %}

<div class="row">
    {% for member in members %}
    <div class="col-lg-4 col-sm-6">
      <img class="img-circle img-responsive" src="{{ "/img/staff/" | append: member.photo | prepend: site.baseurl }}">
      <h3>{{ member.name }} {{ member.surname }} <small>{{ member.period }}</small></h3>
      <p>
        {% if member.email %}
          <i class="fa fa-envelope"></i> <a href="mailto:{{ member.email }}">{{ member.email }}</a><br>
        {% endif %}
      </p>
    </div>
    {% endfor %}
</div>

