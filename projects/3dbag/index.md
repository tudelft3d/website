---
layout: page
title: 3D Registration of Buildings and Addresses
permalink: /projects/3dbag/
---

<div class="row">
  <div class="col-sm-12 col-xs-12"><img class="img-responsive" src="{{ "img/3dbag.jpg" }}"></div>
</div>

- - -

* Table of Content
{:toc}

- - -

## Summary

The Dutch national register of addresses and buildings ([Basisregistraties Adressen en Gebouwen (BAG)](https://www.kadaster.nl/bag)) models the current state of all buildings and living units in the Netherlands. It is an openly accessible data set in which buildings are represented by their footprints, and it is widely used both by the government and the private sector. An accurate, open and country-wide 3D representation of the BAG benefits applications such as census estimation, property tax determination or noise simulations.

We are developing a work flow and software for the automated generation of the 3D BAG, with the height information derived from the [Dutch national elevation model (AHN)](http://www.ahn.nl/). The resulting data set contains an unparalleled amount of information on the quality and reliability of each building, allowing practitioners to use the highest quality input for their work. The 3D BAG regenerated every month, keeping up-to-date with the BAG.

## Data set

The data set along with its documentation is found on the project website [3dbag.bk.tudelft.nl](http://3dbag.bk.tudelft.nl).

## Open-source software

For creating the 3D BAG we wrote **bag3d**, which is an application that uses [3dfier](https://github.com/tudelft3d/3dfier) for extruding the building footprints to LoD1 models. It is designed to run regularly as an automated process (eg. with a cron job), hence keeping the 3D BAG in line with the BAG updates. It is a multithreaded application, and it can process the whole Netherlands in a reasonable amount of time. Although bag3d was made for the Dutch BAG data set (as its name implies), we wrote an [extensive documentation](https://tudelft3d.github.io/bag3d/) for making it easier to adapt to other data sets.

The source code of the software is open and it is located [here](https://github.com/tudelft3d/bag3d).


- - - 

## Team

<div class="row">
    {% include project_team.html project_name='3dbag' %} 
</div>
