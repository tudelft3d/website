---
layout: page
title:  Big Data Analytics in the Geospatial Domain
permalink: /projects/bigvoxels/
---

<div class="row">
	<div class="col-sm-4 hidden-xs nopadding"><img class="img-responsive" src="{{ "/projects/bigvoxels/img/8.png" | prepend: site.baseurl }}"></div>
	<div class="col-sm-4 hidden-xs nopadding"><img class="img-responsive" src="{{ "/projects/bigvoxels/img/1.png" | prepend: site.baseurl }}"></div>
	<div class="col-sm-4 hidden-xs nopadding"><img class="img-responsive" src="{{ "/projects/bigvoxels/img/3.png" | prepend: site.baseurl }}"></div>
	<div class="col-sm-4 hidden-xs nopadding"><img class="img-responsive" src="{{ "/projects/bigvoxels/img/11.jpg" | prepend: site.baseurl }}"></div>
	<div class="col-sm-4 hidden-xs nopadding"><img class="img-responsive" src="{{ "/projects/bigvoxels/img/9.jpg" | prepend: site.baseurl }}"></div>
	<div class="col-sm-4 hidden-xs nopadding"><img class="img-responsive" src="{{ "/projects/bigvoxels/img/2.jpg" | prepend: site.baseurl }}"></div>
</div>

---

## Introduction

3D urban environments consist of large collections of complex objects, which have rich semantic properties and attributes such as materials, colors, etc. Modeling and storing these properties indicating the relationships between them is best handled in a relational database. A single spatial DBMS that offers functionality for geo-spatial modelling and management of geometric, semantic and appearance properties in one place, thus avoiding the need for multiple software tools associated with high volume data transfer and format transformations. Such an infrastructure can facilitate big data analytics in urban modeling. Urban 3D models can be used in visual, thermal or acoustic simulations to various kinds of navigation models for humans, ground vehicles and drones.

## Goal

The aim of this project is to develop voxel and point cloud data types and further mature the existing spatial features of the column-store open-source [MonetDB relational database](https://www.monetdb.org/). The expected project outcome is as follows:

  1. database extension for storage and indexing of 3D point clouds with properties, that are suitable for and take advantage of column-oriented internal data organization;
  2. database extension for storage and indexing of voxels with properties, that are suitable for and take advantage of column-storage;
  3. the extensions will be evaluated with data and processing requirements of the use case of port of Rotterdam;

The project is carried out in cooperation with the [netherlands eScience Center](https://www.esciencecenter.nl), the [VU Amsterdam](http://www.vu.nl) and [Geodan IT B.V.](http://www.geodan.nl).

## Voxels

The role of our research group is investigating and implementing algorithms for voxelisation of point clouds and vector models (GIS and BIM) and spatial operations on voxels. Voxels are the volumetric pixels or volume elements, often shown as cubes in 3D space. Collecting a number of voxels together creates a 3D raster. Representing 3D urban scenes as voxels brings a number of advantages. Voxel models facilitate a number of operations due to their discrete nature while having an easily adjustable resolution. For example calculating volumes is a matter of counting the number of voxels that constitute an object given an arbitrarily fine quantum of volume, 3D bisections become simple selection operations, and storing volumetric spaces such as air, water and underground is possible. Operations that are almost always done using voxel models include extraction of iso-surfaces (3D layers in fields) and 3D morphological operations.  An additional benefit of voxel storage is the atomicity of the of the data type: every object is represented by only one primitive (3D cube) instead of e.g. set of multiple geometric primitives currently used in other spatial RDBMS.

---

<div class="row">
  <div class="col-lg-offset-3 col-lg-3">
      <img class="img-circle img-responsive" src="{{ "/img/staff/pirouz.png" | prepend: site.baseurl }}">
      <h3>Pirouz Nourian <br><small>PhD candidate</small></h3>
  </div>
  <div class=" col-lg-3">
      <a href="http://3dgeoinfo.bk.tudelft.nl/szlatanova/"><img class="img-circle img-responsive" src="{{ "/img/staff/sisi.jpg" | prepend: site.baseurl }}"></a>
      <h3>Sisi Zlatanova <br><small>Project leader</small></h3>
  </div>
</div>