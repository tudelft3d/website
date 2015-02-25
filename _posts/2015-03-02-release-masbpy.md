---
layout: post
title:  "Release of masbpy"
categories: news
date:  2015-03-02
author: Ravi Peters
---


Today we are officially releasing [masbpy](https://github.com/tudelft3d/masbpy), an open source python utility to approximate the 3D Medial Axis Transform (MAT) from oriented point clouds.

The MAT is an alternative representation of shape (as opposed to a boundary representation for instance) that makes the topology of a shape explicit as a skeletal structure. This can be used for example to detect features in a landscape such as ridges and valleys or (since we don't really have mountains in the Netherlands...) dykes and ditches. Other applications include point cloud simplification, surface reconstruction and feature decomposition. For more information checkout the [3DSM project page](http://3dgeoinfo.bk.tudelft.nl/projects/3dsm/).

The image below shows the MAT for a portion of this [public southern Califiornia dataset](http://dx.doi.org/10.5069/G97P8W9T). Notice how the network of ridges and valleys is translated to a collection of connected skeletal branches.

![]({{ site.baseurl }}/projects/3dsm/img/MAT_CA_ridge_before_after.jpg)