---
layout: page
title: Point cloud modelling with the 3D Medial Axis Transform
permalink: /projects/3dsm/
---

<div class="row">
  <div class="col-sm-3 hidden-xs nopadding"><img class="img-responsive" src="{{ "/projects/3dsm/img/2dskeleton.png" | prepend: site.baseurl }}"/></div>
  <div class="col-sm-4 hidden-xs nopadding"><img class="img-responsive" src="{{ "/projects/3dsm/img/bg2.png" | prepend: site.baseurl }}"/></div>
  <div class="col-sm-5 hidden-xs nopadding"><img class="img-responsive" src="{{ "/projects/3dsm/img/bg.jpg" | prepend: site.baseurl }}"/></div>
</div>



- - -

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading" style="margin-top:0px;">Point cloud modelling</h2>
    <p>Through point clouds we can obtain dense and accurate representations of real-world objects and landscapes. If we merely look at a visualisation of this point cloud, already a great deal of information is conveyed to us. We can easily recognise different objects and measure distances, areas, and volumes.</p>
    <p>Yet to a computer a point cloud is nothing more than a bunch of 3D coordinates, without any structure or semantics. If we want a computer do the same things, we need to first structure the point cloud in a way also a computer can efficiently make use of it.</p>
    <p>In the 3DSM project we aim to find 3D methods and datastructes that make it easier to work with pointclouds. By achieving this we enable a number of key applications of point clouds such as point cloud visualisation, visibility analysis, automatic object detection and surface reconstruction.</p>
  </div>
  <div class="col-md-5">
    <div align="center" class="embed-responsive embed-responsive-16by9">
    <video autoplay loop class="embed-responsive-item">
        <source src="{{ "/projects/3dsm/img/ze.mp4" | prepend: site.baseurl }}" type="video/mp4">
    </video>
    </div>
  </div>
</div>

- - - 

<div class="row featurette">
  <div class="col-md-5">
    <div align="center" class="embed-responsive embed-responsive-16by9">
    <video autoplay loop class="embed-responsive-item">
        <source src="{{ "/projects/3dsm/img/sb.mp4" | prepend: site.baseurl }}" type="video/mp4">
    </video>
    </div>
  </div>
  <div class="col-md-7">
    <h2 class="featurette-heading" style="margin-top:0px;">3D Medial Axis Transform (MAT)</h2>
    <p>The MAT represents the shape of an object, in 2D or 3D, with balls contained inside it, and should be seen as the <em>skeleton</em> of an object. Given an object, it is an alternative representation that captures both the shape of the object and its topology (how its different parts are connected), and has therefore been used in numerous shape-related problems.</p>
  </div>
</div>

 - - - 

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading" style="margin-top:0px;">MAT for point cloud modelling</h2>
    <p>The general idea of the project is to process point clouds not by manipulating the surface points, but rather by working on its MAT. While the MAT contains the same information as the conventional 'surface points' (i.e. the input point cloud), it models key properties of a shape in a much more explicit way. The key benefit of the MAT here is its skeleton-like and explicitly topological representation. Using this skeleton we can easily isolate distinct object from the point cloud and remove them for instance. This is possible because we always keep the link to the surface points while we work with the MAT.</p>
  </div>
  <div class="col-md-5">
    <img class="featurette-image img-responsive" src="{{ "/projects/3dsm/img/idea.gif" | prepend: site.baseurl }}" alt="Generic placeholder image">
  </div>
</div>

- - -

<div class="row featurette">
  <div class="col-md-5">
    <img class="featurette-image img-responsive" src="{{ "/projects/3dsm/img/usecases.jpeg" | prepend: site.baseurl }}" alt="Generic placeholder image">
  </div>
  <div class="col-md-7">
    <h2 class="featurette-heading" style="margin-top:0px;">Case studies</h2>
    <p>An important part of this project is to demonstrate the viablity of the MAT for a number of real-world applications and by using real-world datasets. We have identified the following case studies:</p>
    <ul>
    <li>Point cloud visualisation and simplification</li>
    <li>Building detection</li>
    <li>Watercourse detection</li>
    <li>Visibility analysis</li>
    <li>Surface reconstruction</li>
    </ul>
  </div>
</div>

- - -

## Open-source software

We will release all the code that is developed for this project as open source software. As of today not everthing is published yet. However, the core algorithm that we use to robustly compute the 3D MAT of point clouds is already available:

  - [C++ implementation](https://github.com/tudelft3d/masbcpp)
  - [Python implementation](https://github.com/tudelft3d/masbpy)

<iframe src="https://player.vimeo.com/video/127577620" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

- - - 

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading" style="margin-top:0px;">Funding</h2>
    <p>3DSM is a research project funded by the <a href="http://www.stw.nl/en/">Netherlands Organisation for Scientific Research (NWO)</a> under the <a href="http://www.stw.nl/en/content/open-technology-programme">Open Technology programme</a>.</p>
  </div>
  <div class="col-md-5">
    <img style="margin-top:25px" class="featurette-image img-responsive" src="{{ "/projects/3dsm/img/nwo_logo.jpg" | prepend: site.baseurl }}" alt="NWO logo">
  </div>
</div>

- - -

## Publications

{% imbiber projects/3dsm/3dsm.bib groupby:year idswithprefix:year_ %}

- - -

## STW Users' committee

### Meeting 2017-07-04

  - Overview of all results of the project <a href="http://3d.bk.tudelft.nl/pdfs/3dsm/3dsm_gc_2017-07-04_hl.pdf"><i class="fa fa-file-image-o"></i>
   - Overview of scientific breakthroughs <a href="http://3d.bk.tudelft.nl/pdfs/3dsm/3dsm_gc_2017-07-04_rp.pdf"><i class="fa fa-file-image-o"></i>  

### Meeting 2016-11-09

  - Overview of the results in 2016<a href="http://3d.bk.tudelft.nl/pdfs/3dsm/3dsm_gc_2016-11-09_hl.pdf"><i class="fa fa-file-image-o"></i>
  - Details about latest work <a href="http://3d.bk.tudelft.nl/pdfs/3dsm/3dsm_gc_2016-11-09_rp.pdf"><i class="fa fa-file-image-o"></i> 

### Meeting 2016-01-19

  - Overview of the results last 7 months <a href="http://3d.bk.tudelft.nl/pdfs/3dsm/3dsm_gc_2016-01-19_hl.pdf"><i class="fa fa-file-image-o"></i>
  - Details about latest work <a href="http://3d.bk.tudelft.nl/pdfs/3dsm/3dsm_gc_2016-01-19_rp.pdf"><i class="fa fa-file-image-o"></i>

### Meeting 2015/05/19

  - Overview of the project <a href="http://3d.bk.tudelft.nl/pdfs/3dsm/3dsm_gc_20150519_hl.pdf"><i class="fa fa-file-image-o"></i>
  - Progress last 9 months <a href="http://3d.bk.tudelft.nl/pdfs/3dsm/3dsm_gc_20150519_rp.pdf"><i class="fa fa-file-image-o"></i>

### Meeting 2014/09/11

  - Both presentations <a href="http://3d.bk.tudelft.nl/pdfs/3dsm/3dsm_gc_20140911.pdf"><i class="fa fa-file-image-o"></i>

### Meeting 2014/01/23

  - Overview of the project <a href="http://3d.bk.tudelft.nl/pdfs/3dsm/3dsm_gc_201401_hugo.pdf"><i class="fa fa-file-image-o"></i>
  - Progress after 9 months <a href="http://3d.bk.tudelft.nl/pdfs/3dsm/3dsm_gc_201401_ravi.pdf"><i class="fa fa-file-image-o"></i>



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
          <i class="fa fa-home"></i> <a href="http://tudelft.nl/rypeters">tudelft.nl/rypeters</a><br />
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