---
layout: post
title:  Sneak peek of our ongoing work to reconstruct the Netherlands in 3D
categories: news
date: 2016-09-08 08:57
---

<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="..."></iframe>
  <iframe src="https://player.vimeo.com/video/181421237?byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div>

<br>

In the last few months, we have been working hard on [3dfier](https://github.com/tudelft3d/3dfier), our open-source software that takes 2D GIS datasets and "3dfies" them by lifting each polygon to 3D.
The elevation is obtained from a point cloud (we support LAS/LAZ at this moment), and the semantics of every polygon is used to perform the lifting. 
That is, water polygons are extruded to horizontal polygons, buildings to LOD1 blocks, roads as smooth surfaces, etc. 
Every polygon is triangulated (constrained Delaunay triangulation) and the lifted polygons are "stitched" together so that one digital surface model (DSM) is constructed. 

The video above is from Delft, and was created with the open datasets [BGT (large-scale topography, thus ~1:1k)](https://www.pdok.nl/nl/producten/pdok-downloads/download-basisregistratie-grootschalige-topografie) and [AHN3 (aerial LiDAR)](https://www.pdok.nl/nl/ahn3-downloads).

Our aim is to obtain one DSM that is error-free, ie no intersecting triangles, no holes (the surface is watertight), where buildings are integrated in the surface, etc. 
This surface will then be used as input in simulation software for instance.

The code is in beta, although it is in our opinion usable. 
If you use it, feedback is very much appreciated.