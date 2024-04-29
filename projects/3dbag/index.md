---
layout: page
title: Detailed 3D Building models Automatically Generated for very large areas (3D BAG)
permalink: /projects/3dbag/
---

<div class="row">
  <div class="col-sm-12 col-xs-12"><img class="img-responsive" src="{{ "img/3dbag_wide.jpg" }}"></div>
</div>

- - -

* Table of Content
{:toc}

- - -

The 3D BAG is an up-to-date data set containing detailed 3D building models of the Netherlands. The 3D BAG is open data. It contains 3D models at multiple levels of detail, which are generated fully automatically by combining two open data sets: the building data from the BAG and the height data from the AHN. The 3D BAG is updated regularly, keeping it up-to-date with the latest openly available building stock and elevation information.

The 3D BAG is also a place for experiments. It is a medium for testing ideas as we do in the 3D geoinformation research group. Based on experiences with the data, we are constantly improving our methods, and by maintaining our own service we retain full control over the whole process from input data, pre-processing and reconstruction to querying and using the reconstructed 3D data in urban applications. This allows us to develop, test and release improvements, or even break things, as we see best.

<iframe width="560" height="315" src="https://www.youtube.com/embed/u84ZyD2ie48" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

## 3D BAG development

The current version of the 3D BAG data service has been developed in a EU-funded research project ‘Urban Modeling in Higher dimensions’. Recently a proof of concept project has been awarded by Horizon Europe to assure both the technical and economical sustainability of 3D BAG as up-to-date and open data service. The project is a collaboration between the research group and the spin off 3DGI (started by Ravi Peters and Balázs Dukai, two former team members and main developers of 3D BAG). To assure technical sustainability of 3D BAG, the project will address issues such as supporting more height data sources (other than only LiDAR), preparation for the maintainability and performance of our method in an operational setting and aiming at even higher adoption (e.g. in more domains). Economically, we will explore how to best ensure the sustainability of 3DBAG as an open data service by clarifying the IPR and licensing strategy and assessing the market potentials of value added services and possible international expansions. For the project a researcher will be hired in the research group to extend the reconstruction method for height data extracted from images acquired using photogrammetry (in addition to the currently supported LiDAR point clouds) and to fill in no-data gaps in the input elevation data caused by occlusion effects during acquisition using eg. deep learning.

## Data and 3D viewer

Visit the website of the data set: [3dbag.nl](https://3dbag.nl)

## Main features

- **Three levels of detail**.
    Available in LoD1.2, LoD1.3 and LoD2.2.
- **Both 2D and 3D**.
    Besides the 3D models, we also offer the 2D projections of their roof surfaces with associated height references.
- **Underground and overlapping buildings and building parts removed**.
    The completely underground and overlapping buildings (eg one building "floating" above another) are excluded from the reconstruction. Buildings with parts under the terrain have their underground parts cut off.
- **Fall back to a simple model for problematic input**.
    Buildings with glass roofs, especially greenhouses, have an extremely noisy point cloud in the AHN. For these buildings, that usually have a very simple shape, we fall back to a simplified 3D model in order to generate usable models.
- **Quality control integrated**.
    We run our 3D models through [val3dity](https://github.com/tudelft3d/val3dity), so that you don't need to validate the 3D data yourself.
- **Available in several formats**.
    CityJSON, GeoPackage, Wavefront OBJ, PostgreSQL, WMS, WFS.


## Common applications and 3DBAG in the media

Some of the use cases for this data set that we know about:

- Applications related to energy use in buildings, such as estimating energy demand, retrofitting costs, finding suitable roofs for solar panels.
- Simulating the wind flow and pollutant dispersion in urban areas (eg. [Simwind](https://3d.bk.tudelft.nl/projects/simwind/))
- Calculating noise pollution in urban areas (eg. [3D Noise](https://3d.bk.tudelft.nl/projects/noise3d/))
- Analysing the urban structure and evaluating new developments.

For a more information list see [3DBAG in the media](https://docs.3dbag.nl/en/overview/media/).


## Relation to similar data sets

### 3D Basisvoorziening

The [3D Basisvoorziening](https://www.pdok.nl/3d-basisvoorziening) is a collection of Dutch national 3D data sets created in a collaboration of the Kadaster and the 3D geoinformation research group. It was made available in the summer of 2020. While the 3D BAG only contains objects from the BAG, the 3D Basisvoorziening also contains object from the Large Scale Topographic Map (BGT) of the Netherlands. Thus, the 3D BAG only contains buildings, while the 3D Basisvoorziening is a watertight 3D model of the whole country, including terrain objects. Furthermore, the 3D BAG only uses the AHN as height source, while the 3D Basisvoorziening also uses a yearly updated point cloud created from stereo images ([Beeldmateriaal Nederland](https://www.beeldmateriaal.nl/)).

The tools and algorithms that are used for generating the 3D Basisvoorziening, are created by the 3D geoinformation group. In fact, the LoD1.3 models in the 3D Basisvoorziening were generated with a previous, more stable version of the same algorithms that we use in the 3D BAG. Since then, we have improved the reconstruction process specifically for a better LoD2.2 reconstruction.

### 3D Noise

The [3D Noise](https://3d.bk.tudelft.nl/projects/noise3d/) data set was created in collaboration with the National Institute for Public Health and the Environment (RIVM), Ministry of Infrastructure and Water Management (Rijkswaterstaat), Interprovinciaal Overleg, Kadaster and the 3D geoinformation research group.

Both the 3D Geluid and the 3D BAG use the BAG as a basis for the buildings. While the 3D BAG uses the AHN only, the 3D Geluid data has been extended with LoD1.2 models that were generated with the current point cloud of Kadaster where the buildings are newer than AHN.

Besides building models, the 3D Geluid data also contains two additional layers that model the height of the terrain, and the sound absorption values of the various terrain objects. The building models in 3D Geluid data are LoD1.3 and represented as 2D only, since the current common noise calculation software can only handle 2D buildings (+ height attribute).

Similarly to the 3D Basisvoorziening, the LoD1.3 models in the 3D Geluid data were generated with a previous, more stable version of the same algorithms that we use in the 3D BAG.

- - -

## Funding

<div class="row">
<div style="padding:5px" class="col-md-4 col-sm-4 col-xs-8"><img src="/img/partners/erc.svg" alt="ERC logo" ></div>
</div>

### 2016-2022
This project has received funding from the European Research Council (ERC) under the European Unions Horizon2020 Research & Innovation Programme (grant agreement no. 677312 UMnD: Urban modelling in higher dimensions).

### 2022-2024
This project has received funding from the European Research Council (ERC) under the Horizon Europe Research & Innovation Programme (grant agreement no. 101068452 3DBAG: detailed 3D Building models Automatically Generated for very large areas).
- - -

## Partners

<div class="row">
<div style="padding:5px" class="col-md-4 col-sm-4 col-xs-8"><a href="https://3dgi.xyz"><img src="/img/partners/3dgi.png" alt="3DGI logo" ></a></div>
</div>

<!-- - - - 

## Team

<div class="row">
    {% include project_team.html project_name='3dbag' %} 
</div> -->
