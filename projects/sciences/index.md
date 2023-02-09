---
layout: page
title: Smart City Innovations and Experiments using New Climate and Energy Simulations
permalink: /projects/sciences/
---

<div class="row">
  <div class="col-sm-14 col-xs-14"><img class="img-responsive" src="{{ "/img/projects/sciences.jpg" }}"></div>
</div>

- - -

* Table of Content
{:toc}

- - -
## Summary

Since the industrial revolution, the world population has been concentrated in urban areas. To accommodate inhabitants, buildings and roads are 
constructed in large quantities. The heat emitted by built-up surfaces, traffic, and HVAC systems has considerably altered thermal comfort in cities.
Traffic and HVAC systems are not just important sources of anthropogenic heat, however; they also emit a significant amount of GHGs. Because of the 
threat posed by heat and GHG emissions in urban areas on the outdoor environment and public health, one mission of Horizon Europe is to support
advanced research on climate-neutral and smart cities; that is, cities in which modern technology is at the service of mitigating their impact 
on outdoor thermal comfort and GHG emissions.

SCIENCES is an EU funded project under the Marie Sklodowska Curie Actions that aims at providing solutions in the struggle to develop climate-neutral
and smart cities. The project will focus on different research objectives to facilitate the integration of physically-based urban microclimate models
in smart city digital twins. The objectives will be accomplished by a research team from TU Delft in collaboration with CMU. While TU Delft will contribute
to the SCIENCES project with its expertise in 3D city modelling and CFD, CMU will bring knowledge in IoT data platforms and machine learning.


- - -
## Objectives

To facilitate the integration of physically-based urban microclimate models in a smart city digital twin platform, the SCIENCES project will try to:
1. <b>Formulate a method to automatically configure a physically-based model from a 3D city model and an IoT platform</b>. By configuration, it is referred
to values assigned to each parameter of the physically-based model before performing simulations. One part of the objective is to assign the geometry
of buildings and streets in the physically-based model using a 3D city model. The other part is to prove that parameters with a high uncertainty,
often related to material properties and outdoor/indoor heat sources, can be adjusted to minimize discrepancies between estimates provided
by the physically-based model and data collected from an IoT platform. The IoT platform will be connected to meteorological stations and smart metres
to measure outdoor conditions and building energy consumption, respectively.
2. <b>Explore and create statistical models to simulate interactions between buildings and the outdoor environment in concurrence with the physically-based
model</b>. That is to say, it is planned to find statistical models that should quickly estimate the building energy consumption and outdoor conditions
with the best possible accuracy and resolution, while waiting for the physically-based model to perform simulations. The accuracy corresponds to the
agreement between estimates provided by statistical and physically-based models.
3. <b>Simulate GHGs in the outdoor air, in addition to temperature and air flow, using the physically-based model</b>. GHGs will be estimated using 
CFD, a technique to simulate conditions of the outdoor air with a high resolution. Estimates of GHGs should agree with measurements obtained 
from meteorological stations. 


- - -
## Roles in the project

The SCIENCES is a joint effort between Delft University of Technology and Carnegie Mellon University. 

On the one hand, TU Delft will work on:
- The use of 3D city model as an input of a physically-based urban microclimate model; and
- Simulations of GHGs using CFD.

On the other hand, CMU will contribute to:
- The calibration of a physically-based urban microclimate model using IoT data; and
- The development of statical models to be co-simulated with a physically-based urban microclimate model.

- - -
## Funding

<div class="row">
<div style="padding:5px" class="col-md-4 col-sm-4 col-xs-6"><img src="/img/partners/marie_curie.jpg" alt="EU logo" ></div>
</div>

This project has received funding from the European Union’s Marie Curie Actions under Grant Agreement No. 101059484

- - -
## Team

<div class="row">

  <div class="col-md-4 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
      <a href="https://3d.bk.tudelft.nl/ken"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/miguel.jpg" alt="Miguel Martin photo" /></a>
    <h3>Miguel Martin<br /><small>Postdoc (TUD)</small></h3>
    <p>
        <i class="fas fa-home"></i> <a href="https://3d.bk.tudelft.nl/ken">3d.bk.tudelft.nl/ken</a><br />
        <i class="fas fa-envelope"></i> <a href="mailto:M.Martin@tudelft.nl">M.Martin@tudelft.nl</a><br />
        <br />
        <br />
    </p>
  </div>

  <div class="col-md-4 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
        <a href="https://3d.bk.tudelft.nl/gsclara"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/clara.jpg" alt="Clara Garcia Sanchez photo" /></a>
      <h3>Clara Garcia Sanchez<br /><small>Assist. Professor (TUD)</small></h3>
      <p>
          <i class="fas fa-home"></i> <a href="http://3d.bk.tudelft.nl/gsclara">3d.bk.tudelft.nl/gsclara</a><br/>
          <i class="fas fa-envelope"></i> <a href="mailto:C.Garcia-Sanchez@tudelft.nl">C.Garcia-Sanchez@tudelft.nl</a><br/>
      </p>
  </div>

  <div class="col-md-4 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
        <a href="https://www.cmu.edu/cee/people/faculty/berges.html"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/mario.jpg" alt="Mario Berges photo" /></a>
      <h3>Mario Berges<br /><small>Professor (CMU)</small></h3>
      <p>
          <i class="fas fa-home"></i> <a href="https://www.cmu.edu/cee/people/faculty/berges.html">www.cmu.edu/cee/people/faculty/berges</a><br/>
          <i class="fas fa-envelope"></i> <a href="mailto:marioberges@cmu.edu">marioberges@cmu.edu</a><br/>
      </p>
  </div>

  <div class="col-md-4 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
        <a href="http://3d.bk.tudelft.nl/jstoter"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/jantien.jpg" alt="Jantien Stoter photo" /></a>
      <h3>Jantien Stoter<br /><small>Professor (TUD)</small></h3>
      <p>
          <i class="fas fa-home"></i> <a href="http://3d.bk.tudelft.nl/jstoter">3d.bk.tudelft.nl/jstoter</a><br />
          <i class="fas fa-envelope"></i> <a href="mailto:j.e.stoter@tudelft.nl">j.e.stoter@tudelft.nl</a><br />
          <i class="fas fa-phone"></i> <a href="tel:+31 15 27 81664">+31 15 27 81664</a><br />
          <i class="fab fa-twitter"></i> <a href="https://twitter.com/jantienstoter">@jantienstoter</a><br />
      </p>
  </div>

</div>
