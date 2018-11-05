---
layout: page
title: Research projects
permalink: /projects/
---

<div class="row">
{% assign projects = site.data.projects | sort: 'start' | reverse %}

{% for i in projects %}
{% unless i.finished == true %}
{% capture beginchar %}{{ i.webpage | truncate: 4 }}{% endcapture %}
  {% if beginchar == "/..." %}
    {% assign link = i.webpage | prepend: site.baseurl %}
  {% else %}
    {% assign link = i.webpage %}
  {% endif %}
  <div class="col-md-3 col-sm-4 col-xs-6">
    <div class="thumbnail">
      <a href="{{ link }}"><img src="{{ "/img/projects/" | append: i.image | prepend: site.baseurl }}"/></a>
      <div class="caption">
        <h3><a href="{{ link }}">{{ i.name }}</a>
        <br />
        {% if i.start %}
          {% if i.end %}
            {% if i.start == i.end %}
              <small>({{ i.start }})</small><br />
            {% else %}
              <small>({{ i.start }}-{{ i.end }})</small><br />
            {% endif %}
          {% else %}
            <small>Started {{ i.start }}</small><br />
          {% endif %}
        {% else %}
          {% if i.end %}
            <small>Ended {{ i.end }}</small><br />
          {% endif %}
        {% endif %}
        {% if i.funding %}
          <small>Funded by <a href="{{ i.fundingurl }}">{{ i.funding }}</a></small><br />
        {% endif %}
        </h3>
        <p>{{ i.description }}</p>
      </div>
    </div>
  </div>
{% endunless %}
{% endfor %}
</div>

- - - 

# Completed reseach projects

<div class="row">
{% assign projects = site.data.projects | sort: 'end' | reverse %}

{% for i in projects %}
{% if i.finished == true %}
{% capture beginchar %}{{ i.webpage | truncate: 4 }}{% endcapture %}
  {% if beginchar == "/..." %}
    {% assign link = i.webpage | prepend: site.baseurl %}
  {% else %}
    {% assign link = i.webpage %}
  {% endif %}
  <div class="col-md-3 col-sm-4 col-xs-6">
    <div class="thumbnail">
      <a href="{{ link }}"><img src="{{ "/img/projects/" | append: i.image | prepend: site.baseurl }}"/></a>
      <div class="caption">
        <h3><a href="{{ link }}">{{ i.name }}</a>
        <br />
        {% if i.start %}
          {% if i.end %}
            {% if i.start == i.end %}
              <small>({{ i.start }})</small><br />
            {% else %}
              <small>({{ i.start }}-{{ i.end }})</small><br />
            {% endif %}
          {% else %}
            <small>Started {{ i.start }}</small><br />
          {% endif %}
        {% else %}
          {% if i.end %}
            <small>Ended {{ i.end }}</small><br />
          {% endif %}
        {% endif %}
        {% if i.funding %}
          <small>Funded by <a href="{{ i.fundingurl }}">{{ i.funding }}</a></small><br />
        {% endif %}
        </h3>
        <p>{{ i.description }}</p>
      </div>
    </div>
  </div>
{% endif %}
{% endfor %}
</div>