---
layout: benchmark
title: GeoBIM benchmark
permalink: /projects/geobim-benchmark/news.html
---

<h1>GeoBIM benchmark 2019 news</h1>

{% assign sorted = site.data.geobim_news | sort: 'date' | reverse %}
{% for news in sorted %}
	<p><small><span class="post-date">{{ news.date | date: "%b %d" }}</span></small> {{ news.news }}</p>
{% endfor %}
