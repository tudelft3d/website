---
layout: page
title: Synthesis projects
permalink: /synthesis/
---

{% assign years = site.data.synthesis | group_by: "year" | sort: 'name' %}

{% for year in years reversed %}
<h3> {{ year.name }} </h3>

{% assign projects = year.items %}
<div class="row">
{% for i in projects %}
	<div class="col-md-4 col-xs-6">
		<div class="thumbnail">
      <a href="{{ i.report }}"><img src="img/{{ i.img }}"/></a>
      <div class="caption">
        <h3><a href="{{ i.report }}">{{ i.title }}</a></h3>
        {% if i.report %}
          <small><a href="{{ i.report }}"><i class="fas fa-book" title="report"></i></a></small>
        {% endif %}
        <h4>
        {% for j in i.students %}
        {{ j.name }}<br />
        {% endfor %}
        </h4>
      </div>
    </div>
	</div>
{% endfor %}
</div>
{% endfor %}