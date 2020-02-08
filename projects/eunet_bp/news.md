---
layout: benchmark
title: GeoBIM benchmark
permalink: /projects/eunet_bp/news.html
---

<h1>News</h1>

{% assign sorted = site.data.eunet_bp_news | sort: 'date' | reverse %}
{% for news in sorted %}
<p><small><span class="post-date">{{ news.date | date: "%b %d" }}</span></small> {{ news.news }}</p>
{% endfor %}
