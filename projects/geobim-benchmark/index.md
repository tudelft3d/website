---
layout: benchmark
title: GeoBIM benchmark
permalink: /projects/geobim-benchmark/
---

<div class="row">
	<div class="col-md-4 col-md-offset-1 col-xs-6">
		<img class="img-responsive" src="img/benchmark.png" />
	</div>
	<div class="col-md-6 col-md-offset-1 col-xs-6">
		<h1>GeoBIM benchmark 2019</h1>
	</div>
</div>

<div class="well"><b>Recent news</b><br/><br/>
	{% assign sorted = site.data.geobim_news | sort: 'date' | reverse %}
  {% for news in sorted limit:3 %}
  	<p><small><span class="post-date">{{ news.date | date: "%b %d" }}</span></small> {{ news.news }}</p>
  {% endfor %}
  <a href="news.html">All news</a>
</div>

<h3>Reference study on software support for open standards of city and building models</h3>

This benchmark will investigate the available **technical solutions** to support research and activities related to GeoBIM, through the use of the **open standards IFC** (by buildingSMART) and **CityGML** (by OGC).  We will address the following questions:

1. What is the **support for IFC** within BIM (and other) software?
2. What options for **geo-referencing BIM** data are available?
3. What is the **support for CityGML** within GIS (and other) tools?
4. What options for **conversion (IFC↔CityGML)** are available?
5. What is the support of different types of **IFC geometries**?

You are invited to take part in this benchmark activity by performing one or more tasks.

<div class="row">
	<div class="col-md-3 col-xs-2">
		<img class="img-responsive" src="img/puzzle.jpg" />
	</div>
	<div class="col-md-9 col-xs-10">
		<p>Volunteers will be required to perform one or more tasks using  the tools they are familiar with, and deliver their results using the results template.</p>
		<p>At least one scientific publication co-authored by both the benchmark proponents and volunteers will be written, and final results will be published on the website.</p>
	</div>
</div>

<h4>How to participate</h4>

<div class="row">
	<div class="col-xs-12">
		<img class="img-responsive" src="img/howto.jpeg" />
	</div>
</div>
