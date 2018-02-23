---
layout: post
title:  "New paper about the validation of 3D GIS primitives"
categories: news
date: 2018-02-23 09:45
---

A new paper has been published:

<div class="filteredelement"><strong> val3dity: validation of 3D GIS primitives according to the international standards</strong>. Hugo Ledoux. <em>Open Geospatial Data, Software and Standards</em>, 3:1, 2018. <br /> <a href="https://opengeospatialdata.springeropen.com/track/pdf/10.1186/s40965-018-0043-x?site=opengeospatialdata.springeropen.com"><i class="fa fa-file-pdf-o"></i> PDF</a> <a href="https://doi.org/10.1186/s40965-018-0043-x"><i class="fa fa-external-link"></i> DOI</a> <a href="#bibSouthall17" data-toggle="collapse"><i class="fa fa-caret-square-o-down"></i> BibTeX</a> <a href="https://github.com/tudelft3d/val3dity"><i class="fa fa-github"></i> Code</a> <div id="bibSouthall17" class="collapse" tabindex="-1"><pre class="bibtex">@article{Ledoux18,
  Author = {Ledoux, Hugo},
  Doi = {http://dx.doi.org/10.1186/s40965-018-0043-x},
  Journal = {Open Geospatial Data, Software and Standards},
  Number = {1},
  Title = {val3dity: validation of {3D GIS} primitives according to the international standards},
  Volume = {3},
  Year = {2018}}
</pre></div></div>

<br>

The article describes the latest version of [val3dity](http://github.com/tudelft3d/val3dity) (v2), our open-source software to validate 3D primitives according to the international standard ISO19107.
Compared to previous version, it now supports all the 3D primitives of GML:

  - `<gml:MultiSurface>`
  - `<gml:CompositeSurface>`
  - `<gml:Solid>`
  - `<gml:MultiSolid>`
  - `<gml:CompositeSolid>`

and the reporting of the errors has been greatly improved.

<a href="https://doi.org/10.1186/s40965-018-0043-x"><img src="{{ site.baseurl }}/img/2018/ogdss-val3dity.png"/></a><br/>
