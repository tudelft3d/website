---
layout: default_umnd
title: Research Line 2
subtitle: Construction and Storage of 4D City Objects
permalink: /projects/umnd/rl2
---

<div class="row">
    <img class="img-responsive" src="{{ "img/rl2.png" | prepend: site.baseurl }}"/>
</div>

- - -

* Table of Content
{:toc}

- - -

## Overview

The aim of this research line is to investigate the methods to construct and store multiple 3D objects in 4D space. This aims to be an alternative to the existing solution on multi-LoD objects storage, in a way that correspondences are not only kept in the city object level but also between geometric features of the objects. In addition, a continuous representation of scale or time as the 4th dimension allows for distinct LoD objects to represent different states of the 3D objects, while intermediate objects are implied by such a structure.

More specifically, this research aims to answer the following questions:

* What kind of representation can we use in order to store and manipulate efficiently objects in 4D space?
* What is the best way to encode city objects and semantics in such a data structure?
* How can we identify common features between objects of different LoDs and how can they be represented in a continuous way in 4D?
* How can we construct a complete 4D city model containing all the geo- metric and semantic information of its LoDs?
* What is the most efficient way for permanent storage and exchange of 3D and 4D city models?

- - - 

## Topological reconstruction of 3D City Models

<div class="row">
    <div class="col-md-6">
        <img class="img-responsive" src="{{ "img/topological_reconstruction_1.png" | prepend: site.baseurl }}"/>
    </div>
    <div class="col-md-6">
        <img class="img-responsive" src="{{ "img/topological_reconstruction_2.png" | prepend: site.baseurl }}"/>
    </div>
</div>

As part of this research line, we have worked on the topological reconstruction of 3D City Models from CityGML. This has been implemented in a computer software which is available as open-source in [GitHub](https://github.com/liberostelios/citygml2cmap).