---
layout: page
title: "Automatic reconstruction of simulation-ready 3D city models"
permalink: /projects/simwind/
---

<div class="row">
  <div class="col-md-12 col-xs-12"><img class="img-responsive" src="{{ "banner.jpg" }}"></div>
</div>

- - -

* Table of Content
{:toc}

- - -

## Summary

Computer simulation models are very important to assess the impact that environmental factors have in a city, and will have in the future.
Traditionally most environmental simulations have been performed by abstracting the 3D world to a 2D "flat" representation (thus on a macro-level, not taking urban 3D characteristic into account), and this while we know that most environment processes are better modelled in 3D because they behave and interact in 3D: noise, air pollution, and temperature are a few examples.

While 3D simulation models have a huge potential to increase the quality of life of citizens, they are in practice seldom used by practitioners because their mandatory input, a 3D city model, are not suitable.
Indeed, they often contain geometric errors, eg part of a roof missing, a bridge not connected to the shore, two houses slightly overlapping (known as slivers), houses "floating" a few centimetres above the ground, etc.
These prevent us from importing them in simulation software (which have strict requirements on the input), and implies that practitioners must spend hours *manually* repairing them.
It has been estimated that practitioners using 3D models spend as much as 70% of their time fixing the input models.

We demonstrate in this report our results for the automatic reconstruction of simulation-ready 3D city models.
Our main result is that we have improved TU Delft's algorithms (and their implementation into a software), to *automatically* reconstruct semantic 3D city models from publicly available datasets and ensure that these contain as little errors as possible. 
While the test area is Amsterdam, our methodology and its implementation allows us to reconstruct any area in the Netherlands (and in the world if 2D base data, eg cadastral maps, are available).
Also, we have performed experiments to ensure that these 3D models are ready to be used in a simulation software.
While the 3D models can be successfully imported, with the current capabilities of the software, many of the details of the 3D models had to be removed and/or simplified so that a simulation is performed.
We have performed what is called a *turbulent wind field analysis* for assessing the air quality and pollution effects in Amsterdam, as a proof of concept.

Our [implementation is open-source](https://github.com/tudelft3d/3dfier) and freely available, and so are the datasets that we have created. 


## Final report 

<i class="fa fa-file-pdf-o">
  <a href="simwind-final-report.pdf">simwind-final-report.pdf</a>
</i>



## Final presentation

<div class="row">
  <div class="col-xs-12 col-md-6">
<script async class="speakerdeck-embed" data-id="d46a020b8b75460ca6b8ed9cf7c53582" data-ratio="1.33333333333333" src="//speakerdeck.com/assets/embed.js"></script>
  </div>
</div>


## Partners

<div class="row">
  <div class="col-md-offset-1 col-md-2 col-xs-12"><a href="http://www.ams-institute.org"><img class="img-responsive" src="{{ "/img/partners/ams.png" | prepend: site.baseurl }}" alt="AMS logo"/></a></div>
  <div class="col-md-2 col-xs-12"><a href="https://www.virtualcitysystems.de"><img class="img-responsive" src="{{ "vcs.jpg"}}"/></a></div>
  <div class="col-md-2 col-xs-12"><a href="http://www.cadfem.de"><img class="img-responsive" src="{{ "cadfem.jpg" }}" /></a></div>
</div>

