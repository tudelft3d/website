---
layout: post
title: val3dity v2.2 is released
categories: news
date: 2020-05-18 14:51
---

![]({{ site.baseurl }}/img/2020/val3dity2.png){:width="200px"}

[val3dity](https://github.com/tudelft3d/val3dity) v2.2 has been released!
It allows us to verify whether a 3D primitive (solid, multi-surface, composite-solid, etc) respects the definition as given in [ISO 19107](http://www.iso.org/iso/catalogue_detail.htm?csnumber=26012).

v2.2 adds:

  1. support for [IndoorGML datasets](http://indoorgml.net/), not just the geometries but specific validation tests for the primal-dual consistency were added
  2. support for [GeometryTemplates in CityJSON](https://www.cityjson.org/specs/#geometry-templates)
  3. a completely revamped JSON error report and a [report browwer](http://geovalidation.bk.tudelft.nl/val3dity/browser/)
  4. code must now be compiled against CGAL5, easier to install and compile for everyone
  5. CityGML support is deprecated. This is the last version that will support CityGML, it will be removed it from v2.3+. Most errors/issues reported have to do with a faulty parser of CityGML, and not with val3dity itself. I (Hugo) cannot justify spending 100s of hours fixing the parser, I tried hard but this not possible anymore. If someone wants to do it then great I am willing to help them, but I will not invest time on this anymore. Just upgrade your files to CityJSON (https://www.cityjson.org/help/users/conversion/), I'll always maintain a full CityJSON parser!

To use it:

  1. [online with its webapp](http://geovalidation.bk.tudelft.nl/val3dity/)
  2. download the [Windows val3dity.exe](https://github.com/tudelft3d/val3dity/releases/tag/2.2.0)
  3. under macOS, just type `brew install tudelft3d/software/val3dity` and voilà it's installed on your system
  4. under linux, you need to compile yourself but it's super easy.



