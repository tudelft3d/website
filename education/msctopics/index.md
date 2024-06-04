---
layout: page
title:  Potential MSc topics
permalink: /education/msctopics/
---

<div class="alert alert-success text-center" role="alert">
  <b>Heads up!</b> Theses done in our group should follow the <a href="https://3d.bk.tudelft.nl/courses/geo2020/openscience/">requirements for open science</a>.
</div>

- - -

* Table of Contents
{:toc}

- - -

## (Further) Developing a polyhedral mesher for CFD geometries

![](img/rovo.jpg){:width="700px"}

[snappyHexMesh](https://www.openfoam.com/documentation/guides/latest/doc/guide-meshing-snappyhexmesh.html) is the mesher that is usually used with OpenFOAM.
It creates hexahedral meshes, and works fine in practice.

However, polyhedral meshes, and in particular those based on the 3D Voronoi diagram, are gathering attention because they have better properties for certain applications. 

Some research groups and companies are working on this ([VoroCrust](https://vorocrust.sandia.gov/) + [Cadence.com](https://community.cadence.com/cadence_blogs_8/b/cfd/posts/voronoi-diagrams-in-cfd-mesh-generation)) but the code is not open-source.

Last summer we have started---using CGAL---a Voronoi mesher tailored for the output of [City4CFD](https://github.com/tudelft3d/City4CFD), our in-house tool for the automatic reconstruction of 3D city geometries.
The images above are from some buildings around BK-City.

The project would involve the further development of the mesher (and its potential integration with City4CFD), and its testing in a CFD context.

**Contact:** [Hugo Ledoux](https://3d.bk.tudelft.nl/hledoux/) + [Clara Garcia-Sanchez](https://3d.bk.tudelft.nl/gsclara)



- - -

## Urban microclimate simulations using vegetation

The aim of this project is to use the OpenFoam solver created by the ETH Zurich to perform simulations of urban microclimates at the neighbourhood scale to test several vegetation models ([here](https://gitlab.ethz.ch/openfoam-cbp/solvers/urbanmicroclimatefoam)). Simulations should be performed over the university campus of TU Delft using the City4CFD as an input for building geometry.
From the outcomes of this MSc thesis, it will be expected to:
1. Generate the simulation domain and meshing from a set of buildings that can be selected in the 3DBAG;
2. Specify boundary conditions from weather data;
3. Perform simulations on a test case located in the university campus of TU Delft;
4. Study the outdoor air temperature resulting from various vegetation models that are specified in the urbanMicroclimateFoam solver.

![](img/urbanMicroclimateFoam_vegetation.png){:width="500px"}

The prerequisites for this project are basic knowledge in CFD simulations, programming skills in C/C++, and experience in using Unix operating system.

*Contact:* [Miguel Martin](https://miguelmartin.org/) & [Clara Garcia-Sanchez](https://3d.bk.tudelft.nl/gsclara)


## Urban microclimate simulations @ TU Delft


The aim of this project is to use the OpenFoam solver created by the ETH Zurich to perform simulations of urban microclimates at the neighbourhood scale ([here](https://gitlab.ethz.ch/openfoam-cbp/solvers/urbanmicroclimatefoam)). Simulations should be performed over the university campus of TU Delft using the City4CFD as an input for building geometry.
From the outcomes of this MSc thesis, it will be expected to:
1. Generate the simulation domain and meshing from a set of buildings that can be selected in the 3DBAG
2. Specify boundary conditions from weather data;
3. Perform simulations on a test case located in the university campus of TU Delft; and
4. Study the various output variables that can be obtained from the urbanMicroclimateFoam solver.

![](img/urbanMicroclimateFoam_TUDelft.png){:width="500px"}

The prerequisites for this project are basic knowledge in CFD simulations, programming skills in C/C++, and experience in using Unix operating system.

*Contact:* [Miguel Martin](https://miguelmartin.org/) & [Clara Garcia-Sanchez](https://3d.bk.tudelft.nl/gsclara)

## Synthetic population distributions of housing units for modeling economic segregation 



The aim of this thesis project is to investigate economic segregation in cities by creating synthetic distributions of housing units across the Netherlands. 

You would join a EU research project team [SEGUE](https://www.erc-segue.nl/) at BK and the theories/skills you have learned during your MSc Geomatics would be used to help them. 

You would have to produce realistic distributions of housing units in small areas (therefore creating synthetic data), which would then be used as input for a simulation model of economic segregation that is being developed in the project.

The research will explore the feasibility of accessing and integrating the [BAG](https://www.pdok.nl/introductie/-/article/basisregistratie-adressen-en-gebouwen-ba-1) and [WOZ-waarde](https://www.rijksoverheid.nl/onderwerpen/waardering-onroerende-zaken-woz/vraag-en-antwoord/hoe-weet-ik-wat-de-woz-waarde-van-mijn-huis-is) (estimation of the values of houses) datasets, and then proceed to develop realistic distributions that resemble the existing distribution of apartment sizes and values in Dutch cities, within different spatial grids. The thesis will also examine the potential for modifying these distributions to create scenarios with varying levels of economic inequality. 

Some references that are relevant: 

  1. [Generation of Synthetic Populations in Social Simulations: A Review of Methods and Practices](http://doi.org/10.18564/jasss.4762)
  2. [Space Matters: Extending Sensitivity Analysis to Initial Spatial Conditions in Geosimulation Models](http://doi.org/10.18564/jasss.4136)
  3. [Parcel Manager: A parcel reshaping model incorporating design rules of residential development](http://doi.org/10.1111/tgis.12970)

This thesis would allow you to learn about urban planning, policy-making, and economic segregation. 

Programming in Python is sufficient.

*Contact:* [Clémentine Cottineau](https://clementinecttn.github.io/) (assistant-prof Urbanism) & [Hugo Ledoux](https://3d.bk.tudelft.nl/hledoux) 

- - -

## Automatic creation of detailed building energy models from 3DBAG

The aim of this project is to develop a procedure from which a sequence of detailed building energy models can be automatically created from the 3DBAG. From the models, it should be possible to estimate the energy consumed by buildings at the neighbourhood scale using the EnergyPlus simulation program (<a href="https://energyplus.net/">here</a>). The procedure should be implemented in Python.
This project is a continuity of another MSc thesis on inferring the residential building type from 3DBAG (<a href="https://3d.bk.tudelft.nl/education/#theses">here</a>). From the outcomes of this MSc thesis, it will be expected to:
1. Identify material properties, internal heat gains, and HVAC systems for each type of buildings;
2. Include these information in EnergyPlus template files;
3. Automatically create a sequence of detailed building energy models from EnergyPlus template files and 3DBAG;
4. Perform simulations (in sequence or in parallel) to assess the energy consume by buildings at the neighbourhood scale and evaluate retrofitting strategies.

![](img/eplus_3DBAG.png)

The prerequisites for this project are basic knowledge in building physics and programming skills in Python.

**Contact:** [Dr. Miguel Martin](https://3d.bk.tudelft.nl/mmartin/); [Camilo Leon-Sanchez](https://3d.bk.tudelft.nl/cleon/)

- - -


## The Utrecht – BARCODE  - Between Planning, Modelling, and Participation: modelling and communicating the effects of urban densification

Michael Batty (2022) recently stated, “Despite a wide array of new tools embodying different theories, the gulf between planning theory and practice remains. … for this, the challenge is for model-builders and users to work in practice and for practitioners to work with theory”.
In this spirit, the proposed graduation projects focus on further developing the Utrecht BARCODE. The Utrecht BARCODE is a planning tool developed by the city planning department, and part of the is the Ruimtelijke Strategie Utrecht (RSU 2040, which quantifies and communicates the spatial needs of a growing city to develop a sustainable, just and healthy way using the 10-minute city concept. Policymakers acclaim the BARCODE for its clear and quantitative communication and practitioners for the simple way of visualising the complexity of future urban development needs.

This graduation project focuses on two aspects of the Barcode:
-	The first concerns i) streamlining and increasing the automation of calculating and visualisation of the Barcode for existing Areas; and ii) calculating the project’s effect on the Barcode of an area and its 10-minute catchment area.
-	The second involves i) developing a four-by-four block-wide 3D model of the city that allows illustrating potential changes according to the 10-minute city project and ii) developing and implementing a switchboard that allows different users to choose their priorities, which are then displayed in the 3D model.

The Department of Urbanism collaborates with the City of Utrecht in the [New European Bauhaus](https://new-european-bauhaus.europa.eu/index_en) project. Therefore, the graduation student may be able to interact with researchers and creatives across Europe.

![](img/barcode_img.jpg){:height="400"}

   
Prerequisites: QGIS, Proficiency in programming languages such as R.

**Contact:** [Daniele Cannatella](https://3d.bk.tudelft.nl/dcannatella/); [Alex Wandl](https://www.tudelft.nl/en/staff/a.wandl/?cHash=842e397ae7c998ecc880d440e2a0ccf0)


- - -

## Investigating Predictive Modeling for Land Use Planning and Management 

This graduation project focuses on predictive modelling and its role in land use planning and management. This project aims to provide valuable insights into future land use planning by exploring various factors that influence land use change and evaluating the effectiveness of different modelling approaches. In this MSc thesis, you will delve into the physical, environmental, and socio-economic factors that shape land use patterns. By analysing the impacts of land use policies, you will contribute to the foundation of effective decision-making processes in sustainable land management.

Key objectives of this project include, among others:

1.	Identifying the factors that significantly influence land use change: You will investigate a range of physical, environmental, and socio-economic factors and their relationship with land use dynamics making as much as possible use of open data. This analysis will contribute to understanding the underlying drivers of land use change.
2.	Evaluating different modelling approaches: Considering the varying scale and resolution of land use and other spatial data, you will explore and compare different modelling techniques. This analysis will help identify the most suitable algorithms for specific land use tasks.
3.	Assessing the performance of predictive algorithms: By comparing the performance of different algorithms, you will assess their accuracy, efficiency, and applicability to land use prediction. This evaluation will provide insights into the strengths and limitations of each approach.
   
Prerequisites: QGIS, Proficiency in programming languages such as R or Python and knowledge of machine learning concepts.

**Contact:** [Daniele Cannatella](https://3d.bk.tudelft.nl/dcannatella/)


- - -

## Designing a Nature-Based Solutions Planning Support System

This project aims to develop an innovative tool that facilitates the integration and implementation of nature-based solutions in urban planning processes. In this MSc thesis, you will delve into the field of nature-based solutions, which involve using nature-inspired approaches to address various environmental challenges while providing social and economic benefits. Your objective will be to design a planning support system that enables decision-makers and stakeholders to identify, evaluate, and prioritize nature-based solutions for different contexts.

Key objectives of this project include, among others:

1.	Literature review and best practices analysis: You will conduct an in-depth review of existing literature and case studies related to nature-based solutions. By analysing successful examples, you will identify key design principles and considerations for the planning support system.
2.	System architecture and interface design: Based on the identified design principles, you will develop a conceptual architecture and user-friendly interface for the planning support system. This system should facilitate data integration, analysis, visualization, and decision-making related to nature-based solutions.
3.	Integration of spatial and non-spatial data: You will explore methods for integrating diverse data types, including spatial data (e.g., land cover, ecosystem services) and non-spatial data (e.g., socio-economic indicators, climate data). The system should enable data-driven analysis and decision-making processes.
Prototype development and evaluation: Using appropriate software tools, you will develop a functional prototype of the planning support system. You will then evaluate its usability, functionality, and effectiveness through user feedback and case study applications.

Prerequisites: Proficiency in GIS and software development (e.g., QGIS, R, Python) and understanding of nature-based solutions and urban/landscape planning.

**Contact:** [Daniele Cannatella](https://3d.bk.tudelft.nl/dcannatella/)


- - -


## Adding support for CityGML 3.0 to the 3DCityDB-Tools plugin for QGIS

The [3DCityDB-Tools](https://github.com/tudelft3d/3DCityDB-Tools-for-QGIS) plugin for QGIS allows to conveniently use CityGML/CitySON data stored in the free and open-source [3D City Database](https://www.3dcitydb.org/3dcitydb/) (3DCityDB). It currently supports the 3DCityDB 4.x. The next 3DCityDB v. 5.0 will introduce support CityGML 3.0. 
The scope of this thesis is to extend to QGIS plugin in order to add support for the new version of the 3DCityDB, thus facilitating user's interaction with geodata adhering to the CityGML 3.0 standard. 

![](img/3dcdb5_qgis_mini.jpg){:width="800px"}

The thesis is a collaboration between the 3DGeoinformation group and [virtualcitysystem GmbH](https://vc.systems/en/) in Germany. Attendance of elective course [GEO5014](https://studiegids.tudelft.nl/a101_displayCourse.do?course_id=60400) in Q5 (September 2023) is suggesged, as relevant topics needed for this thesis will be covered.

You will programm in Python and in PL/pgSQL.
Before picking the topic, please contact us!

**Contact:** [Giorgio Agugiaro](https://3d.bk.tudelft.nl/gagugiaro/)

- - -

## Adding support for CitySim to the 3DCityDB-Tools plugin for QGIS

[CitySim](http://www.kaemco.ch/download.php) is an open-source simulation software to perform different energy simulations for buildings/districts (e.g. space heating energy demand, solar irradiation, urban heat islands). The [3DCityDB-Tools](https://github.com/tudelft3d/3DCityDB-Tools-for-QGIS) plugin for QGIS allows to conveniently use CityGML/CityJSON data stored in the free and open-source [3D City Database](https://www.3dcitydb.org/3dcitydb/) (3DCityDB).
The scope of this thesis is to extend to QGIS plugin in order to allow for data preparation, run CitySim's energy simulations, collect and analyse of the simulation results from within QGIS by developing a GUI dialog and extending a bidirectional interface between the two software packages. A python-based first prototype of the interface was already partially developed in a [thesis completed in June 2022](http://resolver.tudelft.nl/uuid:3ae123bd-cae4-45b2-be48-27ffe5cab980). The ultimate goal is to allow for a seamless flow of information and to perform energy simulations in CitySim exploting the added value of a semantic 3D city model encoded using the CityGML data model.

![](img/3dcdb-tools_citysim_mini.jpg){:width="800px"}

The thesis is a collaboration between the 3DGeoinformation group and the [Idiap Research Institute](https://www.idiap.ch/en/scientific-research/energy-informatics/index_html) in Switzerland. Attendance of elective course [GEO5014](https://studiegids.tudelft.nl/a101_displayCourse.do?course_id=60400) in Q5 (September 2023) is highly recommended, as many relevant topics needed for this thesis will be covered.

You will programm in Python and in PL/pgSQL.
Before picking the topic, please contact us!

**Contact:** [Giorgio Agugiaro](https://3d.bk.tudelft.nl/gagugiaro/)

- - -
## (Further) Development and Testing of the Energy Extension for CityJSON (v1.x)

The goal of the thesis is to extend and further improve the current development of the CityJSON Energy Extension. The existing implementation is the result of a MSc Thesis finished in June 2022. The CityJSON extension is expected to support several energy applications as its counterpart the [CityGML Energy ADE](https://opengeospatialdata.springeropen.com/track/pdf/10.1186/s40965-018-0042-y.pdf) does.

![](img/CityJSON+Energy.png){:width="800px"}

It is expected that this implementation will include the development of a software tool to translate the data from the CityJSON and CityGML encoding formats.

Attendance of elective course [GEO5014](https://studiegids.tudelft.nl/a101_displayCourse.do?course_id=52747) in Q5 is highly recommended, as many relevant topics needed for this thesis will be covered.

**Contact:** [Camilo León Sánchez](https://3d.bk.tudelft.nl/cleon/)

- - -


## The effects of building model automatic reconstruction methods for CFD simulations

The digitalization of the architecture and the build environment means that there is a new wealth of digital data that can help generate city scale models. However, not all these sources allow for models to be created of the same quality. The effects of different quality or alternatively abstracted models on CFD has been sparsely evaluated. Even more rare is the evaluation of models that fall outside of the established LoD frameworks e.g., voxelated and marching cubed models.
 
In this thesis these different models and their effects on CFD simulations will be evaluated. Based on these results it might be possible to do suggestions or set up rules to describe viable models that can be used for CFD processing. Extensions to other parts of City analysis could be made as well if desired.

If you choose this topic you can expect to work with building models, voxelization and computational fluid dynamic simulations performed with OpenFOAM. 

![](img/BIM_CFD.gif){:width="800px"}

**Contact:** [Clara Garcia-Sanchez](https://3d.bk.tudelft.nl/gsclara), [Jasper van der Vaart](https://3d.bk.tudelft.nl/jvdvaart/)

- - -

## Linking Urban Heat Island effects with 3D urban morphology

With the increase in urbanization and gentifrication the Urban Heat Island (UHI) effect is becoming a priority concern for many cities and municipalities. As such several studies have been recently published linking urban morphology and plausible UHI remedies such as green roofs, for example. 

In this MSc thesis we will combine for the first time three sources of data: landsat imagery, city measurements for air temperature and the results from a brand new open-source tool that automatically computes Global Building Morphology Indicators (GBMI). The first goal of the project is to link temperature data and GBMI results and analyse the sensitivity of the different indicators to UHI scenarios in Amsterdam city. The second goal would be to generalize the tool application to other cities with diverse morphology to further analyze its predictability capabilities in relation to UHI effects and potential solutions.

If you choose this topic, you can expect to learn about UHI and urban morphology analysis. Programming experience and interest is an advantage for this topic. Your work might require to implement source code for the analysis of the set-ups (in C++ or Python or any other language you prefer).

![](img/UHI_UM.jpg){:width="800px"}

**Contact:** [Clara Garcia-Sanchez](https://3d.bk.tudelft.nl/gsclara), [Lukas Beuster](https://3d.bk.tudelft.nl/lbeuster/)

- - -

## Development on quality assessment of point cloud datasets
Rijkswaterstaat is transitioning into a data-driven organization, with 3D point cloud data playing a crucial role in the work processes and digital twin vision.The effectiveness of the current research project, which focuses on merging different 3D point clouds into the Integrated Heightdataset of the Netherlands (IHN), relies on the validation process as a key component. Therefore the focus of this MSc thesis is to research the possibilities for validating the quality of point clouds received from large infrastructure projects like the Moerdijkbridge zone or tunnels in the area of Rotterdam. If you choose this topic, you will have the opportunity to work for the Department of Advice and Validation of Geodata at Rijkswaterstaat, with access to numerous amount of elevation data products and the opportunity to contribute to the digital twin & IHN research projects.

Programming experience and interest is an advantages for this topic. Your work might require to implement source code for the analysis on different large point clouds (in C++, Python or any other language you prefer).

![](img/IHN_mscthesis.PNG){:width="800px"}

**Contact:** [Daan van der Heide](https://3d.bk.tudelft.nl/dvdheide/),  [Jantien Stoter](https://3d.bk.tudelft.nl/jstoter/)

- - -

## Coupled and decoupled simulations of urban wind flow for indoor natural ventilation modelling

Urban wind flow is an important factor in the efficiency of the indoor natural ventilation, which is becoming a really essential ventilation strategy under the current pandemic life environment.
To model natural ventilation in buildings, running Computational Fluid Dynamics (CFD) simulations is not so straightforward because two levels of wind flow are present in the computational domain.
Researchers usually rely on decoupled simulations of urban wind flow and indoor ventilation.
This means that the urban wind flow is modelled first and then relevant values near the openings of the studied building are used to later model the indoor ventilation.
However, recently with the increase of computational power, there is a rise in the use of coupled simulations where outdoor and indoor air are modelled together.

![](img/Outdoor-Indoor_ventilation.jpg){:width="800px"}

In this MSc thesis, we will try to compare the results of the two approaches and try to validate them with an existing case study. The results could show us if there is a need for a more computationally expensive coupled simulation, or if there are available approaches that allow us to represent accurately outdoor conditions by just imposing appropriate boundary conditions. If you choose this topic, you can expect to learn about indoor ventilation, the level of detail needed in the urban area surrounding the building of interest, and validation CFD simulations. Programming experience and interest is an advantage for this topic. Your work will require to implement source code for the analysis of the set-ups (in C++ or Python or any other language you prefer).

**Contact:** [Clara Garcia-Sanchez](https://3d.bk.tudelft.nl/gsclara), [Nadine Hobeika](https://3d.bk.tudelft.nl/nhobeika/)

- - -

## Using urban morphology to optimize biking and running routes in cities?

RIVM monitoring tool [NSL tool](https://www.nsl-monitoring.nl/), provides information regarding air pollution in streets for the most areas in the Netherlands. The tool uses urban morphology along other parameters to estimate local air quality. 

![](img/De_Jongh.png){:width="400px"}

Within this MSc thesis we will exploit urban morphologies and NSL monitoring to optimize running and biking paths within Netherlands urban areas. For that open source tools such as [momepy](http://docs.momepy.org/en/stable/), and previously developed approaches such as [de Jongh thesis](http://resolver.tudelft.nl/uuid:fdbff288-fede-4796-9972-54627af0db77) (see image attached) will be explored. 

**Contact:** [Clara Garcia-Sanchez](https://3d.bk.tudelft.nl/gsclara), [Hugo Ledoux](https://3d.bk.tudelft.nl/hledoux/)

- - -

## Predicting pedestrian wind comfort and thermal comfort with Large-Eddy Simulations in uDALES

Pedestrian wind and thermal comfort still remain an important topic in the development of future urban scenarios. Considering the current climate change conditions, with increased frequency in heat waves and extreme weather events, the way we design our cities can further impact their resilience and comfort. Computational fluid dynamics (CFD) approaches can help us improving and adapting future and current urban designs to maximize sustainability and comfort. To maximize the predictability capabilities approaches such as Large-Eddy Simulations [LES](https://en.wikipedia.org/wiki/Large_eddy_simulation) can be used to resolve most of the urban scales and model uniquely the small scales. 

![](img/Opsomer.png){:width="400px"}

Within this MSc thesis we will exploit the capabilities of open-source tools such as [uDALES](https://github.com/uDALES/u-dales) to predict wind and thermal comfort in real urban scenarios. The initial set-up focuses on using part of the Clementi neighbourhood in Singapore, which was already set-up by previous MSc thesis to run RANS simulations in [Opsomer](https://repository.tudelft.nl/islandora/object/uuid%3A97304da6-8938-48eb-8117-ca53321b1e34?collection=education). Considering the demanding computational capabilities required by LES, this area can be potentially reduced, or other test cases can be also explored. Attendance of elective course [GEO5015](https://studiegids.tudelft.nl/a101_displayCourse.do?course_id=57094) in Q4 or similar CFD knowledge is required. 

**Contact:** [Clara Garcia-Sanchez](http://3d.bk.tudelft.nl/gsclara), [Ivan Pađen](http://3d.bk.tudelft.nl/ipaden)

- - -

## Heating energy demand of the Dutch building stock with the help of the 3D BAG 2.0

The [3D BAG 2.0](https://3dbag.nl/en/viewer), a dataset containing LoD2 geometries of buildings of the whole Netherlands, has been recently released by the 3D Geoinformation group. The scope of this thesis is to test the suitability of the 3D BAG to estimate the energy demand of residential buildings. In this thesis, the energy demand computation will be based on the quasi-static energy-balance method and will implemement a Python-based subset of the specifications defined by the recently introduced Dutch norm [NTA8800](https://www.gebouwenergieprestatie.nl/).

![](img/3dbag_nta8800_mini.jpg){:width="800px"}

The thesis is a collaboration between the 3DGeoinformation group and the [Building Energy Epidemiology](https://www.tudelft.nl/bk/over-faculteit/afdelingen/management-in-the-built-environment/organisatie/leerstoelen/building-energy-epidemiology) group at TU Delft. Attendance of elective course [GEO5014](https://studiegids.tudelft.nl/a101_displayCourse.do?course_id=60400) in Q5 (September 2022) is highly recommended, as many relevant topics needed for this thesis will be covered.

You will programm in Python and (a bit) in PL/pgSQL.
Before picking the topic, please contact us!

**Contact:** [Giorgio Agugiaro](https://3d.bk.tudelft.nl/gagugiaro/) (3D Geoinformation Group)

- - -

## Optimizing building mesh designs for computational fluid dynamics using machine learning 

Since one of the major burdens when performing computational fluid dynamic simulations (CFD) is to set up a good mesh, improving the current capabilities to mesh automatically complex geometries would have a large impact for the computational fluid dynamics community. This task becomes really essential when geometries are complex, such as high resolution level of detail buildings, and severals hundreds of simulations need to be run to quantify uncertainties.  

In this MSc thesis we will apply the automatic meshers available in OpenFOAM (SnappyHexMesh and cfMesh) and combined them with machine learning techniques to improve current mesh set-ups. We will start by simplified geometries with low level of detail, and increase progressively details. The results can potentially help us reducing the amount of time spent designing our city mesh, and thus allow us to perform faster analysis.   

If you work on this topic, you can expect to learn about mesh generation aligned with CFD best practice guidelines, set-ups and flow simulations. Programming experience and interest is an advantage for this topic. Your work will require to implement source code for the analysis of the set-ups (in C++ or Python). 

![](img/MeshEWI.jpg){:width="400px"}

**Contact:** [Clara García-Sánchez](http://3d.bk.tudelft.nl/gsclara) and [Ivan Pađen](http://3d.bk.tudelft.nl/ipaden)

- - -

## To mesh or not to mesh: immersed boundary methods and porosity in OpenFOAM

One of the major burdens when performing computational fluid dynamic simulations (CFD) is to set up a good mesh. This task becomes really time consuming when geometries are complex, such as high resolution buildings. There are a few strategies to avoid the usage of an explicit mesh, but using immersed boundary methods or porosity definitions which in a very general description allow to construct regular meshes and represent the buildings through forces. 

In this MSc thesis we will apply the already developed immersed boundary method in OpenFOAM-extended and compare it with a porosity approach through several standarzied CFD study cases. The results can potentially help us reducing the number of buildings to be mesh explicitely, and therefore the amount of time spent designing our city mesh.  

If you work on this topic, you can expect to learn about CFD best practice guidelines, set-ups and flow simulations. You will also work with real experimental wind and turbulence data recorded in wind tunnels. Programming experience and interest is an advantage for this topic. Your work will require to implement source code for the analysis of the set-ups (in C++ or Python). 

![](img/ToMeshOrNotToMesh.jpg){:width="800px"}

**Contact:** [Clara García-Sánchez](http://3d.bk.tudelft.nl/gsclara) and [Ivan Pađen](http://3d.bk.tudelft.nl/ipaden).

- - -

## Semantically enriching the 3D BAG

![](img/ahn3Dbag.png){:width="400px"}

With the 3D BAG we have LoD2.2 building models for the whole of the Netherlands. Unfortunately the semantics of these models is still very simplistic (only a very basic classification of wall/roof/floor surfaces is present). The goal of this project would be to develop an automatic method to semantically enrich these models by labeling rooftop structures such as chimneys, A/C units and dormers and/or detecting facade elements such as doors and and windows. This is to be achieved by analysing the geometry of the existing 3D BAG models, the source point cloud and/or (oblique) aerial photographs.

Programming required in python/C++.

**Contact:** [Ravi Peters](http://tudelft.nl/rypeters)

- - -

## 3D Cadastre

![](img/3DCadastre.png){:width="700px"}

Since more than 15 years, lots of studies have been done on 3D Cadastre to register multilevel ownership in a transparent and proper way.
In 2016, we realised the first 3D cadastral situation [3D cadastral registration]( https://3d.bk.tudelft.nl/news/2016/03/21/3DKadaster.html) in the Netherlands.
However, there is still a gap between research and practice. In this research you will analyse how a Level of Detail Framework, that defines specifc solutions for specific 3d cadatsre problems may help to close the 3D cadastre research-to-practice gap.
The idea is explained in [this](https://www.fig.net/resources/proceedings/fig_proceedings/fig2020/papers/ts04e/TS04E_stoter_ho_et_al_10503.pdf) short paper

*Contact:* [Jantien](http://3d.bk.tudelft.nl/jstoter) 

- - -

## Integrated modelling of utility networks in the urban environment

<img src="img/ga_xander_network.jpg" style="width: 500px;"/>

In the framework of Smart Cities, the MSc thesis will focus on interoperability issues when it comes the heterogeneous utility networks (e.g. gas, water, electricity, sewage, district heating, telecommunications, etc.) that are found in the urban environment.
Starting from a CityGML-based 3D city model, the Msc. thesis will focus on testing the Utility Network ADE (Application Domain Extension) and compare it to existing or newly proposed standards (IMKL or MUDDI), based on a concrete case study which will be agreed upon with the student. 
The image shown here is taken from a previous [thesis](https://repository.tudelft.nl/islandora/object/uuid:fed24b16-cf95-4fa0-a109-ece6e91b61e9?collection=education) and serves as example - and starting point - of the overall topic of the thesis proposed here.

**Contacts**: [Giorgio Agugiaro](https://3d.bk.tudelft.nl/gagugiaro/) and [Jantien Stoter](https://3d.bk.tudelft.nl/jstoter/)

- - -

## Performance and robustness of software libraries for computational geometry

![](img/sweep_geometry.png){:width="500px"}

Software libraries for computational geometry underpin a lot of our research, but an in-depth comparison of how these different software libraries behave in terms of performance and robustness is not available. For example, the feasability of multi-disciplinary use of geometry in BIM/GIS integration and automated thermal analysis of IFC building models is largely shaped by the characteristics of the algorithmns offered in open source libraries such as CGAL and Open CASCADE. This research project is an opportunity to publish something novel, useful and relevant to many disciplines.

*Contact:* [Thomas Krijnen](mail@thomaskrijnen.com)

- - - 

## Something with streaming TINs for massive datasets

![](https://raw.githubusercontent.com/mdjong1/sstvis/main/figures/anim.gif){:width="300px"}

The AHN3 dataset contains a lot of points (600+ billions), and while these are useful on their own, some applications would benefit from having a TIN, isocontours, objects extracted from them, etc.

You learned in GEO1015 how to create a Delaunay TIN, and for massive ones the theory about [streaming geometries](https://www.cs.unc.edu/~isenburg/papers/ilss-scdt-06.pdf) was explained.

The aim of this project is to extend the work already done ([sst](https://github.com/hugoledoux/sst/) + one [MSc thesis about simplification](http://resolver.tudelft.nl/uuid:e7df1d5a-8819-40aa-a3d1-1f6d50b8a39e)) and to add new operators useful for practitioners.
Exactly what I am not sure yet, but if you like the challenge of dealing with several billions of points, then we can find a good topic. The main ones are creating grids with interpolation and isolines extraction.

*Contact:* [Hugo Ledoux](https://3d.bk.tudelft.nl/hledoux)



- - - 

## Developing methods for edge-matching with customisable heuristics (geometric, topological and semantic)

![](img/BBG.png){:width="300px"}

The methodology will be studied from a use case of Statistics Netherlands (CBS).

CBS is responsible for the bi-annual publication of the land use register (in Dutch: Bestand Bodem Gebruik or BBG).
In this dataset, ground level land use for areas of 1 ha or larger is classified into 20+ land use categories. The area demarcation and classification have, up till now, been done manually. In the manual process CBS uses a combination of aerial imagery and a selection of cadastral topographical maps. 
CBS is developing a new methodology to automatically combine topographical information and other administrative (register-based) datasets (with a manual fine-tuning post-process, if needed).
By overlaying and prioritizing polyline-based planes from a set of different topographical data sources, adding attributes to these areas from administrative data sources, and applying a number of geo-processes, a new set of planar partitions is created. 
These automatically generated planar partitions will inevitably have some differences with the reference (manually coded) BBG year 2017, either in shape or in category. 
The challenge is on developing a method for describing and detecting important categorization and delineation issues, based on deviations from earlier versions of the BBG and developing (semi) automated solutions to solve these issues, in order to minimize the required manual post-processing. This also includes solving gaps, overlaps and disconnections, in the context of the neighboring areas.
There are different heuristics feasible, an important one being the combination size and the nature of the deviating area. In such a heuristic, small differences in size combined with a less important categorization difference (e.g. street and living area) are of less importance than a big difference in size and an important difference (e.g. forest vs living area). 
 
**Contacts:** [Jantien Stoter](https://3d.bk.tudelft.nl/jstoter/) + [Ken Arroyo Ohori](https://3d.bk.tudelft.nl/ken/en/) + someone at [CBS](https://www.cbs.nl/en-gb)


- - - 

## Modern metadata for CityJSON
![](img/metadata_balou.jpg){:width="400px"}

The standard [CityJSON](https://cityjson.org)--developed by us!--has some support for metadata. First [its core has a few useful properties](https://www.cityjson.org/specs/1.1.1/#metadata), and second there is an Extension (the [MetadataExtended Extension](https://github.com/cityjson/metadata-extended)) where most of the ISO19115 properties can be used.
The issue is that ISO19115 is being replaced in practice by [The SpatioTemporal Asset Catalog (STAC) specification](https://stacspec.org/) and by the [OGC API -- Records](https://github.com/opengeospatial/ogcapi-records/).
Those are targeted at imagery and (mostly) other 2D datasets.
The aim of the project is to create a [STAC extension](https://stac-extensions.github.io/) so that 3D city models in CityJSON be indexed/searched, and to (potentially) modify CityJSON.
The project is quite exploratory, and will necessitate to build a prototype on the web where the ideas are demonstrated; see [this page for some relevant links](https://www.cityjson.org/experimental/restful/) and work done by other MSc Geomatics students.
This projects fits in the new vision of the OGC to be "cloud-native", see that [interesting blog post](https://www.ogc.org/blog/4609).
Why the photo of the dog? Because I thought everyone would skip reading this if they see "metadata" in the title...

**Contact:** [Hugo Ledoux](https://3d.bk.tudelft.nl/hledoux/)

---

## Supporting earthquake risk assessment by 3D city models
![](img/earthquake.png)

Earthquake risk assessment models predict the probability of buildings being damaged due to earthquakes. These models make use of building typologies that describe the cluster of buildings with similar seismic vulnerabilities. The recent advances in digital transformation of the built environment presented new opportunities to conduct earthquake risk studies at individual building level instead of clustering similar buildings. Such a change in the risk modeling would have a tremendous effect on the studies related to finding collapse vulnerable buildings before a destructive earthquake.
In this thesis, the MSc student will investigate how the required parameters defining the building typology can be automatically derived from 3D city models and if more parameters can be derived to refine the typology for improving the earthquake risk assessment models. Examples are: geometry-complexity of the roof (single or dual pitch), the height of the vertical walls and surface of roofs (to estimate the mass), height of the free standing veneer walls, storey-heights etc. For the research, a validation data set is available consisting of 400 buildings in Groningen for which the parameters were collected in a field survey.

**Contact:** [Jantien Stoter](https://3d.bk.tudelft.nl/jstoter/), in collaboration with Ihsan Bal, Professor in Earthquake Resistant Structures, Hanze University of Applied Sciences Groningen & Research Centre for Built Environment NoorderRuimte.

---

## Reconstructing 3D apartment units from legal apartment drawings 
![](img/apartment.png)

Ownership rights concerning apartments are registered by The Netherland’s Cadastre (Kadaster) in deeds that divide complete apartment complexes into individual units, the so called ‘splitsingsaktes’.  These (originally analague) deeds contain floor plans that show how the units are divided per floor. Kadaster would like to converting these scanned 2D floor plans into 3D geometries positioned in geographical space to obtain a subdivision of 3D building models into apartment units.
Up till now, a pipeline was developed to vectorize the information from the 2D floor plans. The end results are 2D polygons describing the separate floors. To obtain the 3D geometry, the original building geometry needs to be reconstructed. This includes scaling and georeferencing the 2D polygon results, as well as finding ways to properly position the different floors of an apartment complex in 3D. The main research focus will be on the 3D reconstruction of the apartment units. Questions to address are: What (additional) information would be needed to georeference and scale the floor plans? Can information be obtained from the textual part of the deed for this? What would be proper ways to position building floor plans in 3D? Could the story heights be estimated?

**Contact:** [Jantien Stoter](https://3d.bk.tudelft.nl/jstoter/), in collaboration with Kadaster

- - - 
## 3D delineation of urban river spaces
![](img/3ddelineation.png)

A wide range of applications in riverside urban areas, including flood mitigation, transport planning, ecological restoration, and public space design, rely on an accurate spatial description of riverside urban spaces. While methods of spatial delineation based on 2D geospatial data exist [Forgaci, 2018](https://books.bk.tudelft.nl/press/catalog/book/isbn.9789463661096), a method for automated spatial delineation based on 3D data is missing. A 3D delineation method would enable to better capture the spatial qualities of urban river spaces. 

This thesis will develop a 3D delineation method for urban river spaces adapting an existing 2D delineation method. The method will be based on 3D data [3D BAG](www.3dbag.nl), point cloud and other elevation data) for use in any riverside urban area where such data is available. The thesis will make as much as possible use of open data and will address challenges and opportunities regarding the scalability of the method within the Netherlands and globally.

**Contact:**  [Jantien Stoter](https://3d.bk.tudelft.nl/jstoter/) and [Claudiu Forgaci](https://www.tudelft.nl/staff/c.forgaci/)

- - - 

## Estimating noise pollution with machine learning?
![](img/noise.png){:width="300px"}

The government needs to produce so-called "noise maps", that is maps showing where the noise levels are higher than a certain threshold that is considered for the well-being and health of citizens ([site of RIVM on the topic](https://www.rivm.nl/geluid)).
These maps are created by using models of the noise, and not by measuring the values everywhere.
These models are rather complex, and preparing and collecting the (3D) data necessary are time-consuming and intensive tasks (see [a recent project by the 3d geoinformation group](https://doi.org/10.1016/j.compenvurbsys.2019.101424), and [a Synthesis project in 2020](https://github.com/Constantijn-Dinklo/3D_Noise_Modelling/blob/master/documentation/Final_report_Synthesis_project.pdf)). 

The aim of this MSc thesis is to learn from those models (and/or samples collected on the ground) and to build a model with machine learning that will predict the noise pollution in an area.

I think that features related to the urban morphology (density of buildings, height of buildings, wideness of streets, etc), the distance to noise sources (roads, factories, etc), and vegetation could be good predictors.
But I don't know, this would be for you to tell me if this is indeed the case.

The project can be done with Python, scikit-learn, and crunching of many (3D) data about cities.

**Contact:** [Hugo Ledoux](https://3d.bk.tudelft.nl/hledoux/)

- - - 

## How can 3D alpha wrapping be best used to repair buildings?
![](img/cgal_3d_alpha_wrapping.png){:width="600px"}

The CGAL project has just released, in beta version, a new package: [3D alpha wrapping](https://cgal.geometryfactory.com/CGAL/doc/master/Alpha_wrap_3/index.html#Chapter_3D_Alpha_wrapping), which can be used to repair pretty much any 3D input.
It guarantees that you'll obtain a 2-manifold that is "watertight" and free of intersections.

As can be seen in the figure above (taken from their website), it works by *refining* the surface (and uses the alpha-shape concept) and thus to recover sharp edges (very frequent in 3D buildings) many Steiner points are added and we obtain a lot of triangles (which takes a lot of time to run, and those are unwanted).

The project would be to explore how we can either modify this algorithm so that it performs good for 3D buildings, or how can we post-process the output and remove points and/or simplify the mesh.
One application of those repaired 3D models is that we can use them for CFD simulations, so we could focus on that application. Or be generic, this can be discussed.

Also, how the semantics of surfaces could be preserved from the input, or inferred for the output, is another aspect of the research.

The project must be done in C++ using CGAL.

**Contact:** [Hugo Ledoux](https://3d.bk.tudelft.nl/hledoux/)

- - -


## Automatic generation of digital twins for heritage buildings 

![](img/digital_twin.jpg){:width="600px"}

**Background and aim**:
The geometrical model is an essential part of daylight simulation in existing buildings. These models are commonly constructed with point-by-point field measurement and manual modeling in CAD environments, such as Rhinoceros and Sketchup. This workflow is costly for many buildings and projects and is a practical barrier to accurate daylight simulations and informed refurbishment decisions. Results from the novel techniques in point-cloud semantic segmentation (e.g., with convolutional neural networks) and light-weight polygonal reconstruction of various objects from scanned indoor point clouds have been promising and are expected to automate reconstruction tasks in relevant domains in the future, such as daylight. The goal of this project is to (semi-) automatically reconstruct the digital twin of a historic building and to evaluate the received daylight based on the requirements of heritage preservation.

**Research question**:
How to build digital twins for heritage buildings automatically with minimum onsite cost?

**Methods**:
Literature search to find potential pipelines and techniques for surface reconstruction. Numerical ray-tracing simulation.
(potentially) a few site visits for data acquisition.

**Final results**: (a) Pipelines, algorithms, and workflows for automatic modeling of building interior for daylight simulation. (b) Software prototype for practitioners (optional).

**Contact:** [Eleonora Brembilla](https://www.tudelft.nl/staff/e.brembilla/?cHash=b81b85bf6c08dfd998139488a3a3f3dd), [Nima Forouzandeh](https://www.tudelft.nl/staff/n.forouzandeh/?cHash=0eff827e919ebe7ba656d3542c3dcc42), [Uta Pottgiesser](https://www.tudelft.nl/bk/over-faculteit/hoogleraren/prof-dr-ing-uta-pottgiesser), and [Jantien Stoter](https://3d.bk.tudelft.nl/jstoter/)

- - -

## Urban building daylight modeling – improving city models 

![](img/daylight.jpg){:width="600px"}

**Background and aim**:
Decarbonization and improvement of the building stock cannot be realistically planned without considering the existing buildings. Decision-makers need accurate models on different levels of granularity for different types of decision-making. A crucial aspect of building performance is the availability of natural light in indoor spaces which has a direct impact on users' well-being and comfort, as well as its influence on reducing electric lighting consumption.
The aim of this project is an urban-level assessment of buildings in terms of their daylight performance.
LOD2 geometry and typical material properties will be used as the key inputs and Radiance as the simulation engine.

**Research question**:
To what extent do the existing building stock meet the requirements for daylight availability?
How to efficiently model the existing building stock in urban level?

**Methods**:
General literature search to find potential pipelines and techniques, and to understand city-level geometry data models (CityGML). Numerical simulation of daylight.

**Final results**: (a) Urban-level assessments of buildings daylight availability, or visual comfort. (b) Suggestions for policy-makers to improve daylight availability in existing buildings. (c) Suggestions (and implementation) for improving CityGML data model and its Application Domain Extension (ADE).

**Contact:** [Eleonora Brembilla](https://www.tudelft.nl/staff/e.brembilla/?cHash=b81b85bf6c08dfd998139488a3a3f3dd), [Nima Forouzandeh](https://www.tudelft.nl/staff/n.forouzandeh/?cHash=0eff827e919ebe7ba656d3542c3dcc42), [Camilo León-Sánchez](https://3d.bk.tudelft.nl/cleon/), and [Giorgio Agugiaro](https://3d.bk.tudelft.nl/gagugiaro/).

- - -

## Automatic reconstruction of window boundaries for efficient daylight simulation.
![](img/window.png){:width="600px"}
Sufficient daylight is an essential aspect of building performance and is a key factor in users' satisfaction and well-being. Although there are studies on optimizing the performance of newly designed buildings, few studies are conducted on the methods to improve the performance of the existing buildings. The geometrical model is an essential part of daylight simulation. These models are commonly constructed with point-by-point field measurement and manual modeling in CAD environments, such as Rhinoceros and SketchUp. This workflow is costly for many buildings and projects and is a practical barrier to accurate daylight simulations and informed refurbishment decisions. Results from the novel techniques in light-weight polygonal reconstruction of various objects from dense scanned indoor point clouds have been promising and are expected to automate reconstruction tasks in relevant domains in the future, such as daylight. However, reconstruction of the window boundaries is still a challenge.

***Goal***: develop a method for automatic detection of window boundaries from laser scans, to further enrich an existing LoD2 model capturing the permanent structure of an indoor scene. The resulted models will be applied for daylight simulation using existing techniques.
For more information about this project, please refer to [this document](https://www.dropbox.com/s/iii4bcf33zxvcvh/MSc_Topic_Window_Reconstruction.pdf?dl=1).

**Contact:** [Nima Forouzandeh](https://www.tudelft.nl/staff/n.forouzandeh/?cHash=0eff827e919ebe7ba656d3542c3dcc42), [Liangliang Nan](https://3d.bk.tudelft.nl/liangliang/), [Eleonora Brembilla](https://www.tudelft.nl/staff/e.brembilla/?cHash=b81b85bf6c08dfd998139488a3a3f3dd).

---

## Reconstructing permanent indoor structures from multi-view images

![](img/textureless_indoor.png){:width="600px"}

Reconstructing 3D models of permanent structures of indoor scenes has many applications, e.g., renovation, navigation, and room layout design and planning. Traditionally methods require dedicated devices (e.g., laser scanners) to capture the indoor environments, which is only affordable to very limited users.  They also require carefully positioning a scanner and registering the point clouds obtained at different locations. Recently developed image-based methods (i.e., MVS and its variants) are successful in the reconstruction of large-scale outdoor environments, but the major obstacle to applying such methods to indoor scenes is the lack of rich textures in indoor scenes, and thus insufficient image correspondences can be established to derive 3D geometry. This project focuses on exploring piece-wise planar prior knowledge about indoor scenes to achieve patch (i.e., planar region) correspondences between images. The core is to extend the existing multi-view theoretical framework to incorporate piecewise planar constraints in the reconstruction pipeline. The developed technique will enable the 3D surface reconstruction of not only texture-less indoor scenes but also low-texture piecewise planar objects in general.

**Required skills**:
(1) Proficient in programming. (2) Enthusiastic about 3DV modeling and geometry processing.

**Contact**: [Liangliang Nan](https://3d.bk.tudelft.nl/liangliang/)

---

## BuildingBlocks: Enhancing 3D urban understanding and reconstruction with a comprehensive multi-modal dataset

![](img/building_blocks.jpg){:width="600px"}

Deep learning research has facilitated significant advancements in large-scale urban scene understanding and reconstruction. However, current methods are limited to coarse levels of scene perception and 3D reconstruction. To bridge this gap and propel research and applications to the next level, fine-grained understanding and 3D reconstruction of urban buildings are necessary. Unfortunately, the lack of suitable datasets for training powerful neural networks hinders progress in this area.

This research aims to bridge this gap by introducing BuildingBlocks, a multi-modal, feature-rich, large-scale, and detailed 3D building dataset. BuildingBlocks encompasses 3D building models at LoD3+ levels, corresponding point clouds, multi-view images, camera parameters, and wireframe models for several expansive urban scenes, with fine-grained annotations at the semantic, instance, and part levels for all modalities.
With these multi-modal data sources and rich correspondences between different modalities, this project will benchmark state-of-the-art methods and develop novel techniques for highly automated and detailed 3D building reconstruction.

In short, BuildingBlocks will provide a valuable resource for advancing research in deep learning-based urban understanding and 3D reconstruction, enabling fine-grained analysis and detailed modeling of urban buildings for various applications.

**Required skills**:
(1) Proficient in programming. (2) Enthusiastic about 3D modeling and deep learning.

**Contact**: [Liangliang Nan](https://3d.bk.tudelft.nl/liangliang/)

---

## Semi-Supervised Semantic Segmentation of 3D Point Clouds

![](img/pc_segmentation.png)

Point cloud-based semantic segmentation has received much attention, which aims to assign each point in the urban scene a semantic label (e.g., building, vegetation, street, window). A number of learning-based works have made fruitful attempts in fully supervised point cloud semantic segmentation tasks. However, acquiring ground truth semantic labels of 3D point for such tasks usually requires massive human annotation and thus is very expensive in practice. The goal of this project is to answer the question: Can we learn a point cloud semantic segmentation model from only partially annotated points, and still achieve good performance compared to fully supervised models? The student will explore and adapt various models for semi-supervised/un-supervised point cloud semantic segmentation. The student will also get hands-on experience with real world datasets such as AHN3 and AHN4.

**Required Skills**:
(1) Proficient in Python programming. (2) Familiar with the theories of machine learning and deep learning. (3) Having prior experiences in deep learning for image / point cloud processing is recommended but not mandatory.
<span style="color:red"> <strong> 

[//]: # (Attention</strong>:)
[//]: # (You must discuss your ideas with the supervisor before this topic can be offered to you.</span>)

**Contact**: [Shenglan Du](https://3d.bk.tudelft.nl/shenglandu/)

- - -

## Using 3D BAG to create a national subsidence vulnerability map

![](img/vulnerability.png)

Land subsidence is causing damage to buildings and infrastructure all over the world. This is a serious problem in the Netherlands too, where a large proportion of the country is subjected to ground settlements. Satellite-based maps can nowadays provide information on ground displacements at regional and national scale. For an accurate assessment of building vulnerability to settlements, data on ground displacements need to be integrated with information on building location and geometry.

This MSc thesis aims to integrate current maps of ground displacements at national scale with the 3D BAG, which contains the geometries of buildings for the whole Netherlands. The main objective is to assess the suitability of the 3D BAG to support the estimation of building vulnerability to large scale subsidence. A background/interest in remote sensing and coding is required.

**Contact:** [Giorgia Giardina ](https://www.tudelft.nl/en/ceg/about-faculty/departments/geoscience-engineering/sections/geo-engineering/staff/academic-staff/giardina-g) + [Jantien Stoter](https://3d.bk.tudelft.nl/jstoter/)

- - -

## Using 3D BAG to develop finite element models of buildings at regional scale
![](img/finite_element.png)

Assessing the building response to external actions is a crucial component of improving urban resilience to hazards like earthquakes, subsidence, landslides. Due to the complexity of the interaction between structures, ground and external loading, advanced computational models are needed to simulate the behaviour of buildings. However, the creation of individual models for this computation, especially when analysing large areas simultaneously, is a very time-consuming task.

This MSc these aims to evaluate the suitability of the 3D BAG to support the automated creation of building Finite Element models on regional scale. The 3D BAG is based on LoD2.2 buildings models and contains basic information on building geometries that are currently being enriched with additional features on structural typologies and construction material. The main objective of this project is to develop an algorithm that can use the information included in the 3D BAG to guide the geometry definition and mesh creation of a large number of different buildings. A background/interest in computational modelling and coding is required.

**Contact:** [Giorgia Giardina ](https://www.tudelft.nl/en/ceg/about-faculty/departments/geoscience-engineering/sections/geo-engineering/staff/academic-staff/giardina-g) + [Jantien Stoter](https://3d.bk.tudelft.nl/jstoter/)


