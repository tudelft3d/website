---
layout: page
title: Automated reconstruction of 3D input data for noise studies
permalink: /projects/noise3d/
---

<div class="row">
  <div class="col-sm-12 col-xs-12"><img class="img-responsive" src="{{ "img/noise3d.jpg" }}"></div>
</div>

- - -

* Table of Content
{:toc}

- - -

## Summary

In a collaboration of Rijkswaterstaat, RIVM, Kadaster and the 3D geoinformation research group, TU Delft, we are investigating how 3D data on noise sources and the environment, as required in legally prescribed noise studies, can be automatically generated for the whole of the Netherlands from existing data such as the Key Register Addresses and Buildings (BAG), the Basic Register for Large-Scale Topography (BGT) and the airborne LiDAR point cloud covering the whole of The Netherlands  (AHN).

The aim of this development is on the one hand improving efficiency (once acquired 3D information for noise studies, does not have to be re-acquired for new studies). But equally important is the availability of standardised input data for noise studies. At present, 3D input data for noise studies are being created by various parties (RWS, ProRail, municipalities, provinces) and by different methods (by different companies). This gives undesirable differences in the results of individual noise studies. As a result, different noise studies over the same areas and based on the same calculation rules cannot always be unambiguously compared. This causes problems for the reliability of noise studies.

## Results

We have now developed a first version of the workflow which automatically generates necessary 3D data about buildings, the noise reduction of the land use and the height of the terrain from the BAG, BGT and point clouds.
The noise consultancy company DGMR has tested these files in their GeoMilieu noise simulation software. For this test, DGMR replaced the input files from a recently performed noise study with our files.
This showed that the automated generated data achieve the same quality of the (partly) interactively generated input data.

## Further Development

At this moment we are working on further developments. Here we look at different aspects.
Firstly, we improve the current workflow by thinning out unnecessary detail in order not to unnecessarily burden the simulation, and adding more details where it is desirable.
We also investigate the modelling and generation of bridges, a concept within noise studies for which different alternatives are currently being used and for which there is no standardised approach yet. We also examine with stakeholders and experts how the software (or prescribed calculation method) can be adjusted, so that optimisation can be obtained from a combination of 3D data on the one hand and improvement of the simulation software on the other hand.
In addition, we will investigate whether we can also standardise a number of other variables within the noise domain such as minimum vertical jumps to be modelled, generalisation of the data on land use (for noise attenuation) and generalisation of the front façade line of buildings.
In addition to improving the workflow and standardising concepts, we look at how we can roll out the workflow for the whole of the Netherlands. For this, the method is implemented in the 3D production line of the Kadaster. This production line generates 3D topography from point clouds and 2D topographic datasets. The open software [3dfier](https://github.com/tudelft3d/3dfier) is part of this production line. To generate noise-specific 3D data, the functionality can be re-used.
An important aspect is also keeping the generated 3D data up-to-date. The BAG and BGT represent changes in reality at most a few months later. The current version of AHN (version 3) was collected between 2014 and 2019. For more up-to-date point clouds, we can use points generated from aerial photographs, which are collected every year. The 3D production line of the Kadaster also includes the generation of point clouds from dense image matching for 3D modelling.

<!-- ## Reports

  1. The final report of the first phase of the project is found [here](https://3d.bk.tudelft.nl/pdfs/xxx). -->


<!-- ## Open-source software -->


## Presentations

### Kickoff meeting on 2018-05-18 in Delft

<div class="row">
  <div class="col-xs-12 col-md-6">
    <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vQIBHL1kPQuQXAcPC0KpTeLNJCeSpvk2GC0jVs5-9M9dvmQ3ZYSfKLohd9yZdmWmR_iwZYZWjpJNNfu/embed?start=false&loop=true&delayms=3000" frameborder="0" width="480" height="299" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
  </div>
</div>

### Progress meeting on 2018-07-11 in Delft

<div class="row">
  <div class="col-xs-12 col-md-6">
    <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vSoc6X22aCw8VRb2_hSW0z84RFdBZH2958mL_T893bfg9vcgHtM_D-68kOMso7_slRJDilujDgExZTa/embed?start=false&loop=true&delayms=3000" frameborder="0" width="480" height="299" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
  </div>
</div>


- - -

## Sponsors

<div class="hidden-xs" style="display:table-cell; padding: 20px;"><a href="http://www.rws.nl" title="RWS website"><img src="/img/partners/rws.png" alt="RWS logo" style="max-height: 200px;"></a></div>
<div class="hidden-xs" style="display:table-cell; padding: 20px;"><a href="https://www.rivm.nl" title="RIVM website"><img src="/img/partners/rivm.png" alt="RIVM logo" style="max-height: 200px;"></a></div>
<div class="hidden-xs" style="display:table-cell; padding: 20px;"><a href="http://www.kadaster.nl" title="Kadaster website"><img src="/img/partners/kadaster.png" alt="Kadaster logo" style="max-height: 200px;"></a></div>

<div class="row">
  <div class="visible-xs thumbnail"><a href="http://www.rws.nl" title="RWS website"><img src="/img/partners/rws.png" alt="RWS logo" style="max-height: 200px;"></a></div>
  <div class="visible-xs thumbnail"><a href="https://www.rivm.nl" title="RIVM website"><img src="/img/partners/rivm.png" alt="RIVM logo" style="max-height: 200px;"></a></div>
  <div class="visible-xs thumbnail"><a href="http://www.kadaster.nl" title="Kadaster website"><img src="/img/partners/kadaster.png" alt="Kadaster logo" style="max-height: 200px;"></a></div>
</div>

- - - 

## Team

<div class="row">
    {% include project_team.html project_name='noise3d' %} 
</div>
