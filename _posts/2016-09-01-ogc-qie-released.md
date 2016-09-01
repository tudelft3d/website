---
layout: post
title:  Release of the OGC CityGML Quality Interoperability Experiment Engineering Report
categories: news
date: 2016-09-01 08:38
---

The [Open Geospatial Consortium (OGC)](http://opengeospatial.org) has recently released the results of the CityGML Quality Interoperability Experiment (QIE) as a public Engineering Report ([the PDF](https://portal.opengeospatial.org/files/?artifact_id=68821)).

The report is the result of several universities, organisations and companies working together in 2014 and 2015 to define data quality requirements for a general CityGML data specification, to create recommended implementation guidance for CityGML data, and to provide a suite of tools to carry out quality assurance on CityGML data. 
The CityGML QIE improves the interoperability of CityGML data by removing some ambiguities from the current standard, and formally defining data quality requirements for a general CityGML data standard.

A few from our group (Hugo Ledoux, Jantien Stoter, and Filip Biljecki) contributed to the experiment.
We were in charge of the part concerned with the validation of the geometry.
We have among others developed different unit tests that help software developers test if their implementation of the geometry is ISO1910-compliant (thus CityGML-compliant); these can be downloaded on [this GitHub page](https://github.com/tudelft3d/CityGML-QIE-3Dvalidation).

![]({{ site.baseurl }}/img/2016/3dtests.jpg)

Our own implementation of a geometry validator, called val3dity, is freely available and can be used by everyone (its [source code](https://github.com/tudelft3d/val3dity), its [easy-to-use web interface](http://geovalidation.bk.tudelft.nl/val3dity/)), and its [Windows EXE](https://github.com/tudelft3d/val3dity/releases)).
The 3D primitives of GML (`<gml:Solid>`, `<gml:CompositeSurface>`, or `<gml:MultiSurface>`) are what it was built for, but it can be used to validate any 3D primitive, also in other formats. 
It accepts as input any GML files (or one of the formats built upon it, such as CityGML), [OBJ](https://en.wikipedia.org/wiki/Wavefront_.obj_file), and [POLY](http://wias-berlin.de/software/tetgen/1.5/doc/manual/manual006.html#ff_poly).
It simply scans the file looking for the 3D primitives and validates these according to the rules in ISO19107 (all the rest is ignored). 
In a OBJ file, each primitive will be validated according to the ISO 19107 rules. 

We plan to extend it with other (City)GML classes in the future, eg `<gml:CompositeSolid>` and `<Building>`, and to also validate the interactions between different classes, so that for instance two buildings do not overlap, that they touch the ground (and do not 'float' 10cm above it), and that the semantics attached to features is complete and structured.




