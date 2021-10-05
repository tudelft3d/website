---
layout: page
title:  Potential research orientation (GEO5010) topics
permalink: /education/researchtopics/
---

- - -

* Table of Content
{:toc}

- - -

## Implement a cjio operator to de-triangulate CityJSON files 

![](img/cjtri.jpg){:width="400px"}

Files containing objects that are triangulated are often easier work with (the triangle is the primitive for visualisation, and the resulting geometries do not contain inner rings) but some use-cases are hindered by the amount of surfaces.

The aim of this project is simple: add an [cjio](https://github.com/cityjson/cjio) operator that will de-triangulate (or un-triangulate?) a given CityJSON files, and allows us to store a new file where the same information is stored coplanar triangles are merged into polygons (potentially with inner rings).

Textures and materials (if any) also need to be handled.

If successful, the new operator would be added to cjio. All coding is in Python.

**Contact:** [Hugo Ledoux](https://3d.bk.tudelft.nl/hledoux)

- - - 

## Add support for CityJSON in BlueSky

![](img/bluesky.jpg){:width="400px"}

[BlueSky](https://github.com/TUDelft-CNS-ATM/bluesky) is an open Air Traffic Simulator that is being actively used to perform research on Air Traffic Management and Air Traffic Flows. It would be extremely beneficial for such simulations to take advantage of 3D city models by adding support for [CityJSON](https://www.cityjson.org/) loading.

In this project you'll have to implement parsing of CityJSON for the needs of BlueSky. The tool is open source and is written in Python. There will be support from the developers of the tool in the process.

You'll improve your programming skills in the process and learn a lot about manipulating 3D geometry.

**Contact:** [Stelios Vitalis](https://3d.bk.tudelft.nl/svitalis)

