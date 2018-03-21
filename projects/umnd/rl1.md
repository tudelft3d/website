---
layout: default_umnd
title: Research Line 1
subtitle: Generalisation of 3D City Models
permalink: /projects/umnd/rl1
---

<div class="row">
    <img class="img-responsive" src="{{ "img/GeneralisingMontrealLoD2toLoD1.png" | prepend: site.baseurl }}"/>
</div>

- - -

## Overview

3D city models are necessary for monitoring and forecasting processes in urban areas (e.g. noise and flooding modelling).
Each application requires its own semantic and geometric LoD of the 3D data, and currently a tremendous amount of effort is exerted in the collection and transformation of 3D datasets.
This research will focus on determining the most efficient generalisation methodology for deriving different LoDs from the same 3D dataset.
The methodology will be applicable to generalising individual city objects as well as city models as a collective unit.

*Research Objective:* Develop a harmonious generalisation framework in 3D to derive buildings and roads at different error-free LoDs from the same 3D base data in order to serve various applications.

More specifically this research is guided by the following questions:
* What are the application specifications that guide generalisation decision-making? What is this relationship vice versa?
* What are the best generalisation statistics for summarising, quantifying and evaluating the generalisation results? How are they balanced for different applications?
* How is generalisation different between different LoD groups, e.g. LoD3 to LoD2 vs. LoD2 to LoD1?
* How do generalisation approaches differ between buildings and roads?
* How can buildings and roads be generalised to ensure they still fit with an underlying terrain?
* What 3D city model specific attributes are currently missing in metadata standards that are crucial for maintaining generalisation lineage?
* How can metadata generation be automated, stored and updated as a result of generalisation processes?

- - -

## Current Work

### Vertical Reference
<div class="row">
    <img class="img-responsive" src="{{ "img/VerticalReference.png" | prepend: site.baseurl }}"/>
</div>

### Floor Plan
<div class="row">
    <img class="img-responsive" src="{{ "img/RDPvKada.png" | prepend: site.baseurl }}"/>
</div>

### Harmonised Generalisation
<div class="row">
    <img class="img-responsive" src="{{ "img/HarmonisedGeneralisationCrop.png" | prepend: site.baseurl }}"/>
</div>