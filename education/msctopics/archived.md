
## BIM/IFC and its integration with CityGML & 3D GIS

![](img/ifcitygml.png){:width="600px"}

An MSc Geomatics student recently completed his thesis work on the automatic conversion of IFC buildings to CityGML LOD3 models ([MSc thesis here](http://repository.tudelft.nl/view/ir/uuid%3A31380219-f8e8-4c66-a2dc-548c3680bb8d/); and also published as a [paper in Transactions in GIS](http://doi.org/10.1111/tgis.12162)). 
Several issues are still open, and an MSc project could investigate these. 
For instance: creation of interior rooms at different LODs (interior used to be LOD4, but CityGML v3.0 will have different interior LODs), integration with the terrain, and the conversion applied to other city objects (tunnels and bridges).

*Contact:* [Hugo Ledoux](http://tudelft.nl/hledoux) and [Jantien Stoter](http://3d.bk.tudelft.nl/jstoter)

- - -

## Automatic repair of 3D buildings

![](img/repair.png){:width="650px"}

To be used as input in most simulation and modelling software, 3D city models should be geometrically and topologically valid.
Unfortunately, the vast majority of 3D city models (eg in CityGML) available are of very poor quality: they contain geometric errors such part of roofs missing, a bridge not connected to the shore, self-intersections of surfaces, two buildings overlapping, wrong orientation of surfaces, etc.
The aim of this project is to build a workflow so that the new [generic CGAL repair operators](http://doc.cgal.org/latest/Polygon_mesh_processing/) can be used to repair automatically 3D buildings.
Other modules of CGAL could also be used, eg the [Nef Polyhedra](http://doc.cgal.org/latest/Nef_3/index.html).

I have already experience in repairing 3D buildings, but these new operators would make the software simpler, robuster, and easier to maintain.
Moreover, a Geomatics student graduated 2 years ago on a similar topic: [voxel-based methods were then investigated](http://repository.tudelft.nl/islandora/object/uuid:8ef4459d-b940-4007-bc3c-d87349015129/?collection=research).

CGAL is in C++, thus the knowledge of C++---or a strong desire to learn it---is necessary.
I am patient if you want to take this opportunity to learn, and many staff of my group could help.

*Contact:* [Hugo Ledoux](http://tudelft.nl/hledoux)


## Extraction of 3D roof segments from aerial imagery 

![](img/readaar.jpg){:width="350px"}

This project is done in cooperation with [Readaar](http://www.readaar.com).
Readaar already developed a method to efficiently determine 3D roof segments from LiDAR data. 
Their current method is extremely fast (less than 2 days to process the entire Netherlands on a normal workstation) and gives a coarse estimation (~1m planar accuracy) of all roof segments in the Netherlands. 
They want to upgrade their current method to combine LiDAR with aerial imagery to profit from the much higher resolution of imagery w.r.t. LiDAR. 
There are multiple ways to achieve this, which could be focused more on traditional point cloud processing methods or more on object detection/machine learning approaches.
Both stereo imagery and LiDAR data are available for the entire Netherlands. 

The student will be helped by a remote sensing specialist (ir. Sven Briels) and a machine learning expert (Jean-Michel Renders, PhD) from [Readaar](http://www.readaar.com), and supervisors from TU Delft.

For this position we ask for programming skills, preferably in Matlab. 
The student will have to develop and test a large number of algorithms and approaches to get information from the raw data.

[More information is found there.](http://jobs.readaar.com/blog/internship-remote-sensing-machine-learning)

*Contact:* [Hugo Ledoux](http://tudelft.nl/hledoux) 


## "Straightening" and improvements of meshes of 3D city models obtained from image matching

<iframe src="https://player.vimeo.com/video/146221307?color=ff9933" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<p><a href="https://vimeo.com/146221307">3D - Amsterdam</a> from <a href="https://vimeo.com/cyclomedia">CycloMedia</a> on <a href="https://vimeo.com">Vimeo</a>.</p>

![](img/cmt3dams.png){:width="500px"}

The video above of a part of Amsterdam was created automatically by [Cyclomedia](http://www.cyclomedia.com) from matching images taken from car driving around and of aerial photos.
From far away, the model looks admittedly great, but if you zoom in it is very "noisy", eg surfaces are not straight, and there are a lot of artefacts.
Different methods have been tried (eg [this one](https://hal.inria.fr/hal-00759261)), and here the goal is to see how methods you learned in the 3D modelling course (eg [RANSAC](https://en.wikipedia.org/wiki/RANSAC)) can be used.

We have a large area of Amsterdam already (in COLLADA format: textured triangles), so the project can start right away!

Notice that it's possible to do this project with a mix of software (FME, CloudCompare) and Python.

*Contact:* [Hugo Ledoux](http://tudelft.nl/hledoux) and [Abdoulaye Diakité](mailto:a.a.diakite@tudelft.nl)

- - -

## Automatic guesstimation of the level of detail of a 3D city model

![](img/CityGML-LOD.png){:width="800px"}

Every 3D city model has a level of detail, a measure that indicates its grade, usability and value. The LOD of a 3D city model is usually stored in the metadata, but it can also be evident from a quick inspection.

However, this is not always the case, and the number of non-homogeneous datasets with variable LOD is increasing. The goal of this project is to build and implement a method that is able to automatically deduce the level of detail of a 3D GIS dataset.


*Contact:* [Hugo Ledoux](http://tudelft.nl/hledoux) and [Filip Biljecki](http://tudelft.nl/biljecki)

- - -

## Generalisation of semantic 3D city models

Generalisation from a higher to a lower level of detail of a dataset is one of the key research topics in cartography (maps/scale) and computer graphics (3D models/simplification). 
In semantically enriched 3D city models, such as CityGML, the topic is not extensively researched because of some additional concepts, and due to differences such as selective generalisation (retaining the complexity of a part of a building such as the footprint while generalising only the roof). 
This research will investigate the generalisation of 3D city models, which will, beside the simplification of geometry, include generalisation of semantics and texture, and aggregation of city objects. Further, the student is expected to create a web interface which returns an generalised version of the uploaded CityGML dataset. 
The generalisation will be done according to the [new paradigm of levels of detail](http://3d.bk.tudelft.nl/biljecki/Random3Dcity.html) developed in our group.

*Contacts:* [Filip Biljecki](http://3d.bk.tudelft.nl/biljecki) and [Hugo Ledoux](http://tudelft.nl/hledoux)

- - - 

## Edge-matching with a constrained triangulation

![](img/em.png)

While the edge-matching problem is usually tackled by snapping geometries within a certain threshold, in our [previous work](http://homepage.tudelft.nl/23t4p/pdfs/_11ostrava.pdf) we have shown that this solution is often not satisfactory and can be "dangerous". 
We have developed a novel edge-matching algorithm for polygons where vertices are not moved, instead gaps and overlaps between polygons are corrected by using a constrained triangulation as a supporting structure and assigning values to triangles. 
The aim of this MSc project is to extend that work to polylines, ie how can polygons and lines be snapped together robustly by using a triangulation as a base structure. 
The project involves first a literature review of the specifications for the edge-matching of features across countries (INSPIRE document), a translation of these into specific rules in a triangulation and a prototype implementation. 
The existing prototype (called [pprepair](https://github.com/tudelft3d/pprepair) that needs to be extended has been developed in C++, thus the knowledge of C++ or a strong desire to learn is necessary.

*Contact:* [Hugo Ledoux](http://tudelft.nl/hledoux)


- - - 


## Automatic thematic and semantic labelling of 3D city models

![](img/semanticenrichment1.png)

Many 3D city models are available as a soup of triangles, i.e. their geometry is not structured as in CityGML. This means that they do not contain semantics, i.e. the geometry of a building is not differentiated from a geometry of a road (above example), and the geometry within the same object (e.g. roof, windows and walls) have the same problem (see the image below, left with the desired result on the right). While such models may still be valuable in visualisation, their use for GIS purposes is hindered by the lack of semantics.

![](img/semanticenrichment2.png)

The goal of this thesis is to develop a reasoning system that would automatically infer the theme (semantics) of each geometric primitive, on two levels:

* City level (is it a tree, a building, or a road?)
* City object level (is the geometry a roof, a window, or a wall)?

The solution might involve pattern recognition techniques to aid the classification, hence it can be conducted in collaboration with the [Pattern Recognition Laboratory](http://prlab.tudelft.nl) at TU Delft.

*Contact:* [Filip Biljecki](http://3d.bk.tudelft.nl/biljecki), [David Tax](http://prlab.tudelft.nl/users/david-tax),  and [Hugo Ledoux](http://tudelft.nl/hledoux)

- - -


## Automatic construction of the 3D BAG datasets

![](img/3dbag.png){:width="800px"}

The aim is to develop a methodology to automatically construct the 3D BAG, using the BAG ([*Basisregistraties Adressen en Gebouwen*](https://bagviewer.kadaster.nl)), the BGT ([*Basisregistratie Grootschalige Topografie*](https://www.pdok.nl/nl/producten/pdok-downloads/download-basisregistratie-grootschalige-topografie)), and the AHN2 ([*Actueel Hoogtebestand Nederland*](http://www.ahn.nl/index.html)).
This dataset would contain---as shown in the figure above---the units within buildings (these are inferred from the BAG and the height of the building).

The project would be made in collaboration with the City of Den Haag, who have developed a prototype.
The student will have to improve their methodology, ensure that it is robust, and scale it for the whole country, if possible (or at least other municipalities).

The project requires programming in Python, the use of FME, and a desire to fight with a great amount of data.


*Contact:* [Hugo Ledoux](http://tudelft.nl/hledoux) and [Jantien Stoter](http://3d.bk.tudelft.nl/jstoter)

- - -

## Automatic construction of the 3D map of Amsterdam

<div class="row">
  <div class="col-sm-4 hidden-xs nopadding"><img class="img-responsive" src="{{ "img/haf2.png" | prepend: site.baseurl }}"></div>
  <div class="col-sm-4 hidden-xs nopadding"><img class="img-responsive" src="{{ "img/haf.png" | prepend: site.baseurl }}"></div>
  <div class="col-sm-4 hidden-xs nopadding"><img class="img-responsive" src="{{ "img/haf1.png" | prepend: site.baseurl }}"></div>
</div>

The aim is to develop a methodology to automatically construct the 3D map of (parts of) Amsterdam so that it can be used by architects and others to "discover" hidden parts of the city.
The project would be in collaboration with people involved in the [Hidden Amsterdam Festival](http://stimuleringsfonds.nl/nl/actueel/toekenningen/hidden_amsterdam_festival/) and the [AMS institute](http://ams-amsterdam.com), and if successful would be used for the festival during the summer 2016.

Right now these 3D models are made manually, and the main objective of the project would be to investigate if these can be constructed automatically, and if yes with which datasets at what is the quality/accuracy of the 3D models?
The exterior of the buildings could be reconstructed with already available datasets (AHN, BAG, BGT, etc.), but the interior is also of interest.
Therefore, this topic is potentially suitable for 2-3 students working on different aspects.

*Contact:* [Hugo Ledoux](http://tudelft.nl/hledoux) or [Jantien Stoter](http://3d.bk.tudelft.nl/jstoter) or [Sisi Zlatanova](http://3d.bk.tudelft.nl/szlatanova)