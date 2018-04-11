---
layout: frontpage_umnd
title: Urban modelling in higher dimensions (UMnD)
permalink: /projects/umnd/
---

Urban modelling in higher dimensions, UMnD for short, is a project funded by the ERC Starting Grant [ERC-StG-2015](https://cordis.europa.eu/project/rcn/199506_en.html), which awarded 1.5 million euros to [Jantien Stoter]({{ "/jstoter" | prepend: site.baseurl }}) for a five-year research project.
It started in September 2016 and is scheduled to run until August 2021.

## Objective

3D geographic information about urban objects (buildings, roads) is needed to monitor and control processes within modern urban areas (noise, flooding, energy demand-supply).
However, each specific process requires 3D data with its own specific semantic and geometric Level of Detail (LoD), and current approaches require enormous manual efforts to collect general-purpose 3D data and to transform it to make it suitable for a specific application.

In this project, we will develop a fundamental solution for providing 3D data at application specific LoDs.
For this, we will use an innovative method that goes far beyond the state-of-the-art by introducing higher dimensional (nD) mathematical models, which will enable us to to enforce consistency by modelling the LoDs as an extra dimension to the 3D spatial dimensions in an integrated 3D+LoD (4D) model.

We have defined three key research lines for the project: (i) a groundbreaking extension of 2D cartographic generalisation solutions to 3D, enabling us to automatically derive application-specific coarse 3D data from fine 3D data; (ii) embedding multiple 3D city models at different levels of detail into a single 4D model; and (iii) “slicing” operations that extract custom 3D cross-sections of the 4D model.
By combining the results of these three lines of research, we aim to generate error-free 3D data at application specific LoDs.

If successful, the 4D approach opens a new horizon for modelling parametrisable aspects of urban environments, which may establish new modelling paradigms in the future.

- - - 

## Research Lines

<div class="row">
    <div class="col-xs-5 col-sm-4">
      <a href="{{ "/projects/umnd/rl1.html" | prepend: site.baseurl }}" class="rl-thumbnail">
        <img src="{{ "/projects/umnd/img/rl1.png" | prepend: site.baseurl }}" alt="">
      </a>
      <div class="caption hidden-xs">
        <h3>Generalisation of 3D City Models</h3>
      </div>
    </div>
    <div class="col-xs-7 caption visible-xs">
      <h3>Generalisation of 3D City Models</h3>
    </div>
    <div class="col-xs-5 col-sm-4">
      <a href="{{ "/projects/umnd/rl2.html" | prepend: site.baseurl }}" class="rl-thumbnail">
        <img src="{{ "/projects/umnd/img/rl2.png" | prepend: site.baseurl }}" alt="">
      </a>
      <div class="caption hidden-xs">
        <h3>Construction and Storage of 4D City Objects</h3>
      </div>
    </div>
    <div class="col-xs-7 caption visible-xs">
      <h3>Construction and Storage of 4D City Objects</h3>
    </div>
    <div class="col-xs-5 col-sm-4">
      <a href="{{ "/projects/umnd/rl3.html" | prepend: site.baseurl }}" class="rl-thumbnail">
        <img src="{{ "/projects/umnd/img/rl3.png" | prepend: site.baseurl }}" alt="">
      </a>
      <div class="caption hidden-xs">
        <h3>Extraction of 3D City Objects from a 4D Model</h3>
      </div>
    </div>
    <div class="col-xs-7 caption visible-xs">
      <h3>Extraction of 3D City Objects from a 4D Model</h3>
    </div>
  </div>

- - -

## Team

<div class="row">
    {% include project_team.html project_name='umnd' %} 
</div>

- - -

## Publications

{% imbiber projects/umnd/umnd.bib groupby:classthenyear idswithprefix:type_ %}

<!-- <div class="row">

  <div class="col-md-2 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
      <a href="http://3d.bk.tudelft.nl/alabetski"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/anna.png" alt="Anna  Labetski photo" /></a>
    <h3>Anna  Labetski<br /><small>PhD candidate</small></h3>
    <p>
        <a href="http://3d.bk.tudelft.nl/alabetski"><i class="fa fa-home"></i></a> | <a href="mailto:a.labetski@tudelft.nl"><i class="fa fa-envelope"></i></a> | <a href="https://twitter.com/BigLabetski"><i class="fa fa-twitter"></i></a><br />
        <br />
        <br />
    </p>
  </div>

  <div class="col-md-2 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
        <a href="http://tudelft.nl/hledoux"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/hugo.jpg" alt="Hugo  Ledoux photo" /></a>
      <h3>Hugo  Ledoux<br /><small>Associate-prof.</small></h3>
      <p>
          <a href="http://tudelft.nl/hledoux"><i class="fa fa-home"></i></a> | 
          <a href="mailto:h.ledoux@tudelft.nl"><i class="fa fa-envelope"></i></a> | 
          <a href="tel:+31 15 27 86114"><i class="fa fa-phone"></i></a> | 
          <a href="https://twitter.com/hugoledoux"><i class="fa fa-twitter"></i></a><br />
      </p>
  </div>

  <div class="col-md-2 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
        <a href="http://3d.bk.tudelft.nl/jstoter"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/jantien.jpg" alt="Jantien  Stoter photo" /></a>
      <h3>Jantien Stoter<br /><small>Professor</small></h3>
      <p>
          <i class="fa fa-home"></i> <a href="http://3d.bk.tudelft.nl/jstoter">3d.bk.tudelft.nl/jstoter</a><br />
          <i class="fa fa-envelope"></i> <a href="mailto:j.e.stoter@tudelft.nl">j.e.stoter@tudelft.nl</a><br />
          <i class="fa fa-phone"></i> <a href="tel:+31 15 27 81664">+31 15 27 81664</a><br />
          <i class="fa fa-twitter"></i> <a href="https://twitter.com/jantienstoter">@jantienstoter</a><br />
      </p>
  </div>

  <div class="col-md-2 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
        <a href="http://3d.bk.tudelft.nl/ken"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/ken.jpg" alt="Ken Arroyo Ohori photo" /></a>
      <h3>Ken Arroyo Ohori<br /><small>Postdoc</small></h3>
      <p>
          <i class="fa fa-home"></i> <a href="http://3d.bk.tudelft.nl/ken">3d.bk.tudelft.nl/ken</a><br />
          <i class="fa fa-envelope"></i> <a href="mailto:g.a.k.arroyoohori@tudelft.nl">g.a.k.arroyoohori@tudelft.nl</a><br />
      </p>
  </div>

  <div class="col-md-2 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
          <a href="http://3d.bk.tudelft.nl/svitalis"><img class="img-circle img-responsive" src="/img/staff/stelios.jpg" alt="Stelios Vitalis photo" /></a>
        <h3>Stelios  Vitalis<br /><small>PhD candidate</small></h3>
        <p>
            <i class="fa fa-home"></i> <a href="http://3d.bk.tudelft.nl/svitalis">3d.bk.tudelft.nl/svitalis</a><br />
            <i class="fa fa-envelope"></i> <a href="mailto:s.vitalis@tudelft.nl">s.vitalis@tudelft.nl</a><br />
            <br />
            <br />
        </p>
      </div>
</div> -->
