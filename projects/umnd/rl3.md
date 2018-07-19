---
layout: default_umnd
title: Research Line 3
subtitle: Extraction of 3D City Objects from a 4D Model
permalink: /projects/umnd/rl3
---

<img class="img-responsive" src="{{ "/projects/umnd/img/4dprojections.png" | prepend: site.baseurl }}"/>

- - -

## Overview

Objects of more than three dimensions can be used to model geographic phenomena that occur in space, time and scale.
For instance, a single 4D object can be used to represent the changes in a 3D object's shape across time or all its optimal representations at various levels of detail.

Higher-dimensional objects can be however unintuitive, and extracting meaningful information from them is a challenge.
This research line aims to solve this problem by developing techniques to extract particular 3D city objects from a 4D model.

- - -

## Activities

{% assign activities = site.data.umnd.activities | sort: 'date' | reverse %}
<ul class="posts">
{% for activity in activities %}
    {% if activity.research_line contains 3 %}
    <li class="activity"><span>{{ activity.date | date_to_string }}</span> {{ activity.description }}</li>
    {% endif %}
{% endfor %}
</ul>