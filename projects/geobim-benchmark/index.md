---
layout: benchmark
title: GeoBIM benchmark
permalink: /projects/geobim-benchmark/
---
<!--
<div class="row">
	<div class="col-md-4 col-md-offset-1 col-xs-6">
		<img class="img-responsive" src="img/benchmark.png" />
	</div>
	<div class="col-md-6 col-md-offset-1 col-xs-6">
		<h1>GeoBIM benchmark 2019</h1>
	</div>
</div>
-->
<h1>GeoBIM benchmark 2019</h1>

<div class="row">
  <div class="col-sm-12 col-xs-12"><img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/logohome.gif" }}" style="max-height: 300px"></div>
  
  
</div>



<div class="well"><b>Recent news</b><br/><br/>
	{% assign sorted = site.data.geobim_news | sort: 'date' | reverse %}
  {% for news in sorted limit:3 %}
  	<p><small><span class="post-date">{{ news.date | date: "%b %d" }}</span></small> {{ news.news }}</p>
  {% endfor %}
  <a href="news.html">All news</a>
</div>

<h3>Reference study on software support for open standards of city and building models</h3>

This benchmark will investigate the available **technical solutions** to support research and activities related to GeoBIM, through the use of the **open standards IFC** (by buildingSMART) and **CityGML** (by OGC):

.

<h4>1. What is the <strong>support for IFC</strong> within BIM (and other) software?</h4>

<h4>2. What options for <strong>geo-referencing BIM</strong> data are available?</h4>

<h4>3. What is the <strong>support for CityGML</strong> within GIS (and other) tools?</h4>

<h4>4. What options for <strong>conversion (IFC↔CityGML)</strong> are available?</h4>
.

### We want you

**You can be part** of this scientific initiative!

Take part in this benchmark activity by performing one or more tasks.

<div class="row">
	<div class="col-md-3 col-xs-4">
		<img class="img-responsive" src="img/puzzle.jpg" />
	</div>
	<div class="col-md-9 col-xs-8">
		<p>Volunteers will be welcome to perform one or more tasks using the tools they are familiar with, <strong>contributing to build a common reference list of tools</strong> to be used for GeoBIM-related activities.</p>
		<p>At least one <strong>scientific publication co-authored by both the benchmark proponents and volunteers</strong> will be written, and final results will be published on the website.</p>
	</div>
</div>

### How to participate

<div class="row">
	<div class="col-xs-12">
		<img class="img-responsive" src="img/howto.gif" />
	</div>
</div>

#### [Register here](https://francescanoardo.typeform.com/to/IbdpZD) to participate!

And browse the website to know all the details.

Download the [call for participation](https://www.dropbox.com/s/2f6q7ckla9wm9e6/callGeoBIMbenchmark.pdf?dl=0)

<!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://tudelft.us20.list-manage.com/subscribe/post?u=66a8cb733c926f8b1f6d7948f&amp;id=671ef6a5b1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h3>Subscribe to GeoBIM benchmark mailing list</h3>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
	<label for="mce-FNAME">First Name </label>
	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
	<label for="mce-LNAME">Last Name </label>
	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_66a8cb733c926f8b1f6d7948f_671ef6a5b1" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->