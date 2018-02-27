---
layout: post
title:  "New paper about the validation of 3D GIS primitives"
categories: news
date: 2018-02-23 09:45
excerpt: The article describes the latest version of val3dity (v2), our open-source software to validate 3D primitives according to the international standard ISO19107.
---

A new paper has been published:

{% imbiber pubs/all.bib one:Ledoux18_ogdss %}

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
