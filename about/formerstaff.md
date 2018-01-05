---
layout: page
title: Former Staff
permalink: /about/formerstaff/
---

{% assign members = site.data.staff_former %}

<table class="table table-striped">

  <tr class="info">
    <td>name</td>
    <td>position</td>
    <td>period</td>
    <td>last known position</td>
  </tr>

  {% for i in members %}
    <tr>
      <td>{{ i.name }} {{ i.van }} {{ i.surname }}</td>
      <td>{{ i.title | markdownify | remove: '<p>' | remove: '</p>' }}</td>
      <td>{{ i.period }}</td>
      <td>{{ i.current | markdownify | remove: '<p>' | remove: '</p>' }}</td>
    </tr>
  {% endfor %}

</table>

