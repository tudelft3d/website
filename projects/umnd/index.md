---
layout: frontpage_umnd
title: Urban modelling in higher dimensions (UMnD)
permalink: /projects/umnd/
---

Urban modelling in higher dimensions, UMnD for short, is a project funded by the [ERC Starting Grant](http://erc.europa.eu/starting-grants) to [Jantien Stoter]({{ "/jstoter" | prepend: site.baseurl }}); 1.5 million euros for a five-year research project. 
It started in September 2016.

Geographic data about urban objects (buildings, roads) is needed to monitor and control the processes within modern urban areas (noise, flooding, energy demand-supply). As these processes occur in 3D, urban applications require 3D data and each application requires its own
specific semantic and geometric level of detail (LoD) of the 3D data. The scientific challenge of Jantien's project is that it requires
enormous efforts to collect and transform 3D data to make it suitable for a specific application. The project will develop a 4D data model
that captures application specific LoDs of urban objects as additional dimension to the three spatial ones (i.e. 3D+LoD). This will result in
a fundamental solution for providing 3D data at application specific LoDs and it will solve the current problem of independently acquired
and stored LoDs of a 3D urban model.

- - - 

## Research Lines

<div class="row">
    <div class="col-sm-6 col-md-4">
      <a href="/projects/umnd/rl1.html" class="rl-thumbnail">
        <img src="{{ "/projects/umnd/img/rl1.png" | prepend: site.baseurl }}" alt="">
      </a>  
      <div class="caption">
        <h3>Generalisation of 3D City Models</h3>
        <!-- <p>Bacon ipsum dolour sit amet porchetta beef turkey, bacon turducken boudin hamburger venison ball tip. </p> -->
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <a href="/projects/umnd/rl2.html" class="rl-thumbnail">
        <img src="{{ "/projects/umnd/img/rl2.png" | prepend: site.baseurl }}" alt="">
      </a>  
      <div class="caption">
        <h3>Construction and Storage of 4D City Objects</h3>
        <!-- <p>Bacon ipsum dolour sit amet porchetta beef turkey, bacon turducken boudin hamburger venison ball tip. </p> -->
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <a href="/projects/umnd/rl3.html" class="rl-thumbnail">
        <img src="{{ "/projects/umnd/img/rl3.png" | prepend: site.baseurl }}" alt="">
      </a>
      <div class="caption">
        <h3>Extraction of 3D City Objects from 4D</h3>
        <!-- <p>Bacon ipsum dolour sit amet porchetta beef turkey, bacon turducken boudin hamburger venison ball tip. </p> -->
      </div>
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
