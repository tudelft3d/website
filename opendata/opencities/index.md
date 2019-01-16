---
layout: page
title:  Cities around the world with open datasets
permalink: /opendata/opencities/
---

{% assign ds = site.data.opendatacities | sort: 'dataset' %}

<div class="table-responsive">

<table class="table table-striped">

  <tr class="info">
    <td>dataset</td>
    <td>country</td>
    <td>year</td>
    <td>building LoD</td>
    <td>other classes</td>
    <td>textures</td>
    <td>acquisition</td>
    <td>formats</td>
    <td>notes</td>
  </tr>

  {% for i in ds %}
    <tr>
      <td><a href="{{ i.link }}">{{ i.dataset }}</a></td>
      <td>{{ i.country }}</td>
      <td>{{ i.year }}</td>
      <td>{{ i.building_lod }}</td>
      <td>{{ i.classes | markdownify | remove: '<p>' | remove: '</p>' }}</td>
      <td>{{ i.texture | markdownify | remove: '<p>' | remove: '</p>'}}</td>
      <td>{{ i.acquisition | markdownify | remove: '<p>' | remove: '</p>' }}</td>
      <td>{{ i.formats | markdownify | remove: '<p>' | remove: '</p>' }}</td>
      <td>{{ i.notes | markdownify | remove: '<p>' | remove: '</p>' }}</td>
    </tr>
  {% endfor %}

</table>
</div>
