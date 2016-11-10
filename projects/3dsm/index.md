---
layout: page
title:  Simplification of digital terrain models using feature-based three-dimensional methods
permalink: /projects/3dsm/
---

<div class="row">
  <div class="col-sm-3 hidden-xs nopadding"><img class="img-responsive" src="{{ "/projects/3dsm/img/2dskeleton.png" | prepend: site.baseurl }}"/></div>
  <div class="col-sm-4 hidden-xs nopadding"><img class="img-responsive" src="{{ "/projects/3dsm/img/bg2.png" | prepend: site.baseurl }}"/></div>
  <div class="col-sm-5 hidden-xs nopadding"><img class="img-responsive" src="{{ "/projects/3dsm/img/bg.jpg" | prepend: site.baseurl }}"/></div>
</div>



- - -

* Table of Content
{:toc}

- - -

## About

3DSM is a research project funded by the [Dutch Technology Foundation STW](http://www.stw.nl), under the [Open Technology programme](http://www.stw.nl/nl/content/open-technologieprogramma). We aim at investigating algorithms to simplify digital surface models (DSMs), which represent the Earth's surface and man-made objects. In recent years, these have considerably grown in size because of advances in acquisition technologies such as airborne laser-scanning. A vivid example is the [AHN2 datasets](http://www.ahn.nl) in the Netherlands: it contains at least 4 points per square meter, and its total is around 640 billion points (639,477,709,621 to be exact). What is ironic is that while datasets like AHN2 are being collected in several countries (because of their many possible applications such as flood modelling, monitoring of dikes, forest mapping, the generation of 3D city models, etc.), in practice they are seldom used to their full potential since the tools that practitioners have, and are used to, cannot handle such massive datasets.

In this project, we tackle this problem by *simplifying* DSMs, i.e. we reduce their size while keeping their main characteristics. While current methods often portray DSMs as 2D objects (and thus valuable information is lost), we investigate new simplification algorithms that: 

  1. use 3D tools and 3D data structures, specifically the 3D medial axis transform (MAT); 
  2. permit us to define 3D features---buildings, dikes, etc---and consider these while simplifying. The knowledge of the features will permit us to remove unimportant points and focus only on those of interest for a given application. 

- - - 

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">Medial Axis Transform (MAT)</h2>
    <p>The MAT represents the shape of an object, in 2D or 3D, with balls contained inside it, and should be seen as the <em>skeleton</em> of an object. Given an object, it is an alternative representation that captures both the shape of the object and its topology (how its different parts are connected), and has therefore been used in numerous shape-related problems.</p>
  </div>
  <div class="col-md-5">
    <iframe src="https://player.vimeo.com/video/84859998" width="500" height="496" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  </div>
</div>

 - - - 

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">MAT-based simplification of DSMs</h2>
    <p>The general idea of the project is to simplify a DSM not by manipulating the surface, but rather by working on its MAT. The MAT is a complete shape descriptor (which means that it encodes the original shape), and thus if we manipulate or simplify it (eg by removing large noisy spikes, which are easier to identify than small bumps on the surface) we can reconstruct a simplified version of the original DSM.</p>
  </div>
  <div class="col-md-5">
    <img class="featurette-image img-responsive" src="{{ "/projects/3dsm/img/idea.gif" | prepend: site.baseurl }}" alt="Generic placeholder image">
  </div>
</div>


- - -

## Publications

{% imbiber /var/www/people/ravi/ravi.bib groupby:year idswithprefix:year_ %}
- - -

## Open-source software

Our implementations of the shrinking ball algorithm to approximate the Medial Axis Transform (MAT) of an oriented point cloud---modified so that noisy point clouds can be processed---are available there:

  - [C++ implementation](https://github.com/tudelft3d/masbcpp)
  - [Python implementation](https://github.com/tudelft3d/masbpy)


- - -

## STW Users' committee

### Meeting 2016-11-09

  - Overview of the results in 2016<a href="http://3dgeoinfo.bk.tudelft.nl/pdfs/3dsm/3dsm_gc_2016-11-09_hl.pdf"><i class="fa fa-file-image-o"></i>
  <!-- - Progress last 9 months <a href="http://3dgeoinfo.bk.tudelft.nl/pdfs/3dsm/3dsm_gc_20150519_rp.pdf"><i class="fa fa-file-image-o"></i> -->

### Meeting 2016-01-19

  - Overview of the results last 7 months <a href="http://3dgeoinfo.bk.tudelft.nl/pdfs/3dsm/3dsm_gc_2016-01-19_hl.pdf"><i class="fa fa-file-image-o"></i>
  - Details about latest work <a href="http://3dgeoinfo.bk.tudelft.nl/pdfs/3dsm/3dsm_gc_2016-01-19_rp.pdf"><i class="fa fa-file-image-o"></i>

### Meeting 2015/05/19

  - Overview of the project <a href="http://3dgeoinfo.bk.tudelft.nl/pdfs/3dsm/3dsm_gc_20150519_hl.pdf"><i class="fa fa-file-image-o"></i>
  - Progress last 9 months <a href="http://3dgeoinfo.bk.tudelft.nl/pdfs/3dsm/3dsm_gc_20150519_rp.pdf"><i class="fa fa-file-image-o"></i>

### Meeting 2014/09/11

  - Both presentations <a href="http://3dgeoinfo.bk.tudelft.nl/pdfs/3dsm/3dsm_gc_20140911.pdf"><i class="fa fa-file-image-o"></i>

### Meeting 2014/01/23

  - Overview of the project <a href="http://3dgeoinfo.bk.tudelft.nl/pdfs/3dsm/3dsm_gc_201401_hugo.pdf"><i class="fa fa-file-image-o"></i>
  - Progress after 9 months <a href="http://3dgeoinfo.bk.tudelft.nl/pdfs/3dsm/3dsm_gc_201401_ravi.pdf"><i class="fa fa-file-image-o"></i>



### Members

<div class="container">
  <table class="table table-hover table-condensed">
<thead>
<tr>
<th style="text-align:left;"> Company </th>
<th style="text-align:left;"> Name </th>
<th>     </th>
</tr>
</thead>
<tbody>
<tr>
<td style="text-align:left;"> Bentley </td>
<td style="text-align:left;"> Benoit </td>
<td> Frédéricque </td>
</tr>
<tr>
<td style="text-align:left;"> Gemeente Rotterdam </td>
<td style="text-align:left;"> Joris </td>
<td> Goos </td>
</tr>
<tr>
<td style="text-align:left;"> Sweco </td>
<td style="text-align:left;"> Marco </td>
<td> Grimaudo </td>
</tr>
<tr>
<td style="text-align:left;"> Kadaster </td>
<td style="text-align:left;"> Marc </td>
<td> Post </td>
</tr>
<tr>
<td style="text-align:left;"> Het Waterschaphuis </td>
<td style="text-align:left;"> Niels </td>
<td> van der Zon </td>
</tr>
<tr>
<td style="text-align:left;"> Rijkswaterstaat DVS </td>
<td style="text-align:left;"> René </td>
<td> Visser </td>
</tr>
<tr>
<td style="text-align:left;"> Safe Sotware </td>
<td style="text-align:left;"> Kevin </td>
<td> Wiebe </td>
</tr>
<tr>
<td style="text-align:left;"> Waterschap Scheldestromen </td>
<td style="text-align:left;"> Sicco </td>
<td> van Mullem </td>
</tr>
</tbody>
</table>
</div>

- - -

## Team

<div class="row">

    <div class="col-lg-4 col-sm-6">
      <a href="http://3dgeoinfo.bk.tudelft.nl/rypeters"><img class="img-circle img-responsive" src="{{ "/img/staff/ravi.jpg"  | prepend: site.baseurl }}" /></a>
    
      <h3>Ravi Peters <small>PhD candidate</small></h3>
      <p>
          <i class="fa fa-home"></i> <a href="http://3dgeoinfo.bk.tudelft.nl/rypeters">3dgeoinfo.bk.tudelft.nl/rypeters</a><br />
          <i class="fa fa-envelope"></i> <a href="mailto:r.y.peters@tudelft.nl">r.y.peters@tudelft.nl</a><br />
          <br />
          <br />
      </p>
    </div>
    
    <div class="col-lg-4 col-sm-6">
      <a href="http://tudelft.nl/hledoux"><img class="img-circle img-responsive" src="{{ "/img/staff/hugo.jpg"  | prepend: site.baseurl }}" /></a>
      <h3>Hugo Ledoux <small>Project leader</small></h3>
      <p>
          <i class="fa fa-home"></i> <a href="http://tudelft.nl/hledoux">tudelft.nl/hledoux</a><br />
          <i class="fa fa-envelope"></i> <a href="mailto:h.ledoux@tudelft.nl">h.ledoux@tudelft.nl</a><br />
          <i class="fa fa-phone"></i> <a href="tel:+31 15 27 86114">+31 15 27 86114</a><br />
          <i class="fa fa-twitter"></i> <a href="https://twitter.com/hugoledoux">@hugoledoux</a><br />
      </p>
    </div>

    
    <div class="col-lg-4 col-sm-6">
      <a href="http://3dgeoinfo.bk.tudelft.nl/jstoter"><img class="img-circle img-responsive" src="{{ "/img/staff/jantien.jpg"  | prepend: site.baseurl }}" /></a>
      <h3>Jantien Stoter <small>Graduation Professor</small></h3>
      <p>
          <i class="fa fa-home"></i> <a href="http://3dgeoinfo.bk.tudelft.nl/jstoter">3dgeoinfo.bk.tudelft.nl/jstoter</a><br />
          <i class="fa fa-envelope"></i> <a href="mailto:j.e.stoter@tudelft.nl">j.e.stoter@tudelft.nl</a><br />
          <i class="fa fa-phone"></i> <a href="tel:+31 15 27 81664">+31 15 27 81664</a><br />
          <i class="fa fa-twitter"></i> <a href="https://twitter.com/jantienstoter">@jantienstoter</a><br />
      </p>
    </div>
</div>