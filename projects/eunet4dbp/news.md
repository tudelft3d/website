---
layout: eunet4dbp
title: European Network for Digital Building Permits
permalink: /projects/eunet4dbp/news.html
---

<h1>News</h1>

{% assign sorted = site.data.eunet4dbp_news | sort: 'date' | reverse %}
{% for news in sorted %}
<p><small><span class="post-date">{{ news.date | date: "%b %d" }}</span></small> {{ news.news }}</p>
{% endfor %}
