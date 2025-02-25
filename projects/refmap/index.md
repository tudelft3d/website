---
layout: page
title: Reducing Environmental Footprint through transformative Multi-scale Aviation Planning
permalink: /projects/refmap/
---

<div class="row">
  <div class="col-sm-8 col-xs-8"><img class="img-responsive" src="{{ "img/refmap.png" }}"></div>
</div>

- - -

* Table of Content
{:toc}

- - -
## Summary

[RefMAP](https://www.refmap.eu) is an EU funded project that aims to develops a fuel-based air quality model that accounts for both conventional fossil fuels and sustainable aviation fuels. This model captures primary and secondary pollutants in both polluted and cleaner areas, combining climate impact and aircraft noise modules for trajectory optimisation. REFMAP develops the above solutions to achieve the following objectives:

- Trajectory Optimisation
- Flow Pattern Prediction
- Reduce Air Travel Environmental Impact
- Minimise the Noise Impact
- Develop New Aviation Business Models

- - -
## Our role in the project

Besides being the leaders of Working-Package 2 of the project, we are responsible for the development of:
- Low-Fidelity Simulations for a variety of urban areas (Delft University of Technology Campus & The city of Den Haag)
- Develop a multi-fidelity simulation framework

Additionally, our research aims to achieve the following:
- Quantify the effect of geometric level of detail (LoD) used in urban flow simulations
- Develop scalable, accurate, and fast tools for introducing complex objects within cartesian grid flow solvers

- - -
## Work in progress
### Low-Fidelity Simulation Results

<div class="row">
  <div class="col-sm-8 col-xs-8"><img class="img-responsive" src="{{ "img/campus_riskmap.jpg" }}"></div>
</div>
<br>

Using a low-fidelity simulation framework (i.e., OpenFOAM) we simulated the flow around two urban areas, namely, the Delft University of Technology Campus (seen above) and the city of Den Haag to better understand the risk associated with drone operations. As seen in the figure above, using a relatively simple modelling framework, we are able to quantify the impact of using two different geometric levels of details (LoD) i.e., LoD1.2 (industry standard) and LoD2.2, to illustrate the systematic under-performance of LoD1.2 when compared against LoD2.2. As part of this work, we developed a simple tool [riskMap](https://github.com/AkshayPatil1994/riskMap).

Pre-print: [Impact of Varying Geometric Levels of Detail in Multi-Direction Urban Rans Simulations Tailored for Urban Air-Mobility](https://papers.ssrn.com/sol3/papers.cfm?abstract_id=5122636) 
Software Citation: Patil, A., & Garcia-Sanchez, C. (2024). riskMap - An OpenFOAM utility to compute directionally averaged risk metrics for RANS simulations (Version 0.1.0) [Computer software]. https://doi.org/10.5281/zenodo.11207890

### Scalable Signed-Distance-Field (SDF) Generator

<div class="row">
  <div class="col-sm-8 col-xs-8"><img class="img-responsive" src="{{ "img/windAroundBuildings.png" }}"></div>
</div>
<br>

To enable highly accurate simulations using scale-resolving computational frameworks around complex objects, the object needs to be "immersed" within the solver. To efficiently do this we developed a highly scalable Message-Passing-Interface (MPI) Fortran based signed-distance-field (SDF) generator that scales for billions of grid points with minimal memory overheads. As seen in the figure above, the solver accurately calculates the distance from the object using an object-local distance calculation and parallelisation algorithm developed as part of the [GenSDF](https://github.com/AkshayPatil1994/GenSDF) software. This tool has been extensively used in many projects that are currently under review. 

Pre-print: [GenSDF: An MPI-Fortran Based Signed-Distance-Field Generator for Computational Fluid Dynamics Applications](https://papers.ssrn.com/sol3/papers.cfm?abstract_id=5042856)  
Software: [GenSDF-GitHub Repository](https://github.com/AkshayPatil1994/GenSDF)

### Fake it till you make it: Swift Method to acvhieve a transition to Turbulence

<div class="row">
  <div class="col-sm-8 col-xs-8"><img class="img-responsive" src="{{ "img/fakeit.png" }}"></div>
</div>
<br>

One of the important aspects of simulating scale-resolving turbulent flows is the need to reduce the spin-up time when using periodic pressure driven channel flows. To that end, we developed a rather simple computational method that generates the initial conditions for pressure-driven channel flows that speeds up the convergence to a statistically stationary flow state by a factor of 5-10 when compared with existing community practices. Our method is domain size agnostic and gives a relatively more consistent transition to a turbulent state when compared with other alternatives. This reduction in the spin-up time directly reduces the computational cost and environmental footprint for increasing flow Reynolds numbers. 

Pre-print: [Fake it Till You Make it: Synthetic Turbulence to Achieve Swift Converged Turbulence Statistics in a Pressure-Driven Channel Flow](https://papers.ssrn.com/sol3/papers.cfm?abstract_id=5101082)  
Software: [GenIC](https://github.com/AkshayPatil1994/Synthetic-Eddy-Method-KCX2013)

### High-Fidelity simulation around Delft University of Technology campus

<div class="row">
  <div class="col-sm-8 col-xs-8"><img class="img-responsive" src="{{ "img/TUDCampus.gif" }}"></div>
</div>
<br>

Urban air mobility (UAM) operations in complex urban environments are highly sensitive to wind fluctuations, requiring a detailed understanding of the anticipated risk due to high wind and turbulence levels. This study simulates turbulent flow around a scaled wind tunnel model of a dense urban landscape using a scale resolving simulation framework. By analysing exceedance probabilities across different forcing conditions, we quantify the risk associated with extreme wind events that could affect UAM operations. The findings provide insights into urban wind dynamics and inform risk-aware planning for safe and reliable urban flight corridors.


- - -
## Funding

<div class="row">
<div style="padding:5px" class="col-md-2 col-sm-2 col-xs-4"><img src="/img/partners/eu.jpg" alt="EU logo" ></div>
</div>

This project has received funding from the European Union’s Horizon Europe programme under Grant Agreement No.101096698

- - -
## Team

<div class="row">

  <div class="col-md-4 col-sm-4 col-xs-6">
      <a href="https://3d.bk.tudelft.nl/gsclara"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/clara.jpg" alt="Clara García-Sánchez photo" /></a>
    <h3>Clara García-Sánchez<br /><small>Asst. Professor (TUD)</small></h3>
    <p>
        <i class="fas fa-home"></i> <a href="https://3d.bk.tudelft.nl/gsclara">3d.bk.tudelft.nl/gsclara</a><br />
        <i class="fas fa-envelope"></i> <a href="mailto:c.garcia-sanchez@tudelft.nl">c.garcia-sanchez@tudelft.nl</a><br />
        <br />
        <br />
    </p>
  </div>

  <div class="col-md-4 col-sm-4 col-xs-6">
      <a href="https://3d.bk.tudelft.nl/apatil"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/akshay.jpg" alt="Akshay Patil photo" /></a>
    <h3>Akshay Patil<br /><small>Post-Doctoral Researcher (TUD)</small></h3>
    <p>
        <i class="fas fa-home"></i> <a href="https://3d.bk.tudelft.nl/apatil">3d.bk.tudelft.nl/apatil/</a><br />
        <i class="fas fa-envelope"></i> <a href="mailto:a.l.patil@tudelft.nl">a.l.patil@tudelft.nl</a><br />
        <br />
        <br />
    </p>
  </div>  
  
</div>
