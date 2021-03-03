---
layout: page
title: "SUM: A Benchmark Dataset of Semantic Urban Meshes"
permalink: /projects/meshannotation/
---

<!---<div class="row">
  <div class="col-sm-12 col-xs-12"><img class="img-responsive" src="{{ "img/meshannotation.jpg" }}"></div>
</div>--->

<div class="col-sm-12 col-xs-12"><img class="img-responsive" src="{{ "img/mesh_overview.jpg" }}"></div>
<p style="text-align: center;">Figure 1: Overview of the semantic urban mesh benchmark. Left: the textured meshes. Right: the ground truth meshes.</p>

- - -

* Table of Content
{:toc}

- - -

## Summary
<div class="row featurette">
  <div class="col-md-7">
    <p>We introduce a new benchmark dataset of semantic urban meshes which covers about 4 km<sup>2</sup> in Helsinki (Finland), with six classes: <span style="color: #CD853F"><b>Ground</b></span>, <span style="color: #00FF00"><b>Vegetation</b></span>, <span style="color: #FFE600"><b>Building</b></span>, <span style="color: #00FFFF"><b>Water</b></span>, <span style="color: #FF00FF"><b>Vehicle</b></span>, and <span style="color: #000099"><b>Boat</b></span>.</p>
    <p>We have used <a href="https://www.hel.fi/helsinki/en/administration/information/general/3d/3d">Helsinki 3D</a> textured meshes as input and annotated them as a benchmark dataset of semantic urban meshes. The Helsinki's raw dataset covers about 12 km<sup>2</sup> and was generated in 2017 from oblique aerial images that have about a 7.5 cm ground sampling distance (GSD) using an off-the-shelf commercial software namely <a href="https://www.bentley.com/en/products/brands/contextcapture">ContextCapture</a>. The entire region of Helsinki is split into tiles, and each of them covers about 250 m<sup>2</sup>. As shown in the figures below, we have selected the central region of Helsinki as the study area, which includes 64 tiles. </p>
  </div>
  <div class="col-md-5">
    <div align="center" class="embed-responsive">
    <img class="featurette-image img-responsive" src="{{ "img/hel_map.jpg" | prepend: site.baseurl }}" alt="helsinki_map">
    <p style="text-align: right;">Figure 2: Selected area of Helsinki </p>
    </div>
  </div>
</div>

