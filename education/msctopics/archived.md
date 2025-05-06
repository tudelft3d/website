
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

## The effect of different LoDs of indoor geometry from IFC models for ventilation applications
![](img/roomextractions-01.jpg){:width="530px"}
To conduct Computational Fluid Dynamics (CFD) simulations for indoor ventilation, a 3D model of the room is essential.
Automating the reconstruction of room geometries for these simulations can significantly enhance efficiency for architects and engineers, allowing them to focus on optimising ventilation solutions.
The level of detail in the reconstructed room model is a critical factor, yet there is no standard definition of LoD for indoor ventilation simulations.

This MSc thesis aims to explore the relevant levels of detail for indoor ventilation applications.
You can expect to work with IFC models, voxelisation techniques, and indoor CFD simulations.
We recommend you look at the [current work](https://github.com/jaspervdv/IFC_BuildingEnvExtractor) for exterior LoD abstraction of IFC models.

**Contact:** [Nadine Hobeika](https://3d.bk.tudelft.nl/nhobeika), [Jasper van der Vaart](https://3d.bk.tudelft.nl/jvdvaart/), [Clara Garcia-Sanchez](https://3d.bk.tudelft.nl/gsclara)

- - -

## Influential geometric parameters for indoor ventilation

![](img/parametric_room.gif){:width="700px"}

Different geometrical design parameters impact the ventilation airflow in a room differently.
Researchers have typically studied the room's height, the dimension and position of the inlet and outlet of mechanical ventilation, and the ratio of window-to-volume-of-room.
However, most studies evaluate the ventilation efficiency of the room from the volumetric perspective of the room rather than from the perspective of breathing individuals.
Optimising the design of a room based on the most sensitive parameters for an individual is still an important step in enhancing the design of rooms for better ventilation at the breathing level.

In this thesis, you can expect to work with parametric generation of 3D geometry, CFD simulations, OpenFoam, and optimisation algorithms.

**Contact:** [Nadine Hobeika](https://3d.bk.tudelft.nl/nhobeika), [Clara Garcia-Sanchez](https://3d.bk.tudelft.nl/gsclara)

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

## Adding trees to City4CFD

![](img/automaticTree_city4CFD.jpg){:width="800px"}

[City4CFD](https://github.com/tudelft3d/City4CFD) is an open-source tool that automatically reconstructs 3D city geometries tailored for microscale urban flow simulations. Its capabilities include reconstruction at multiple levels of detail, as well as including semantic surfaces, best practice guidelines set-up, and even multi-level geometry based on distance from point of interest.

This MSc thesis aims to add to City4CFD the automatic reconstruction of trees, this would facilitate their use within microclimate urban flow simulations with OpenFOAM. To start this topic, you would need to delve into the work from [De Groot (2020)](https://repository.tudelft.nl/islandora/object/uuid%3A3e169fc7-5336-4742-ab9b-18c158637cfe) ([with code](https://github.com/RobbieG91/TreeConstruction)), and explore how his approach to reconstruct trees at a different level of detail could be improved and implemented within City4CFD.

If you choose this topic, you can expect to learn about automatic geometry reconstruction and GIS data handling. To run CFD for testing can be optional. Programming experience and interest is an advantage for this topic. Your work will require the implementation of source code (in C++ preferably, but Python or others could be used).


**Contact:** [Clara Garcia-Sanchez](https://3d.bk.tudelft.nl/gsclara), [Hugo Ledoux](https://3d.bk.tudelft.nl/hledoux)
- - -

## 3D reconstruction for urban objects

![](img/3drecons_urban_objs.png){:width="800px"}

The objective of this research is to develop 3D model reconstruction methods tailored for urban infrastructure. 
We will provide datasets, relevant algorithms, and a clear research guidelines to ensure the successful completion of this project by students. 
Your task is to enhance existing 3D reconstruction algorithms to accommodate various types of urban objects. 
You will learn about state-of-the-art 3D reconstruction techniques and their applications in urban environments. 
The outcomes of this research may be published in high-quality journals or presented at conferences. 
Additionally, students have the freedom to choose a secondary supervisor. 
Participants in this project can select from the following two research directions:
1. Develop a method to reconstruct linear urban objects such as electric pole, wind turbine or wires.
2. Develop a method to reconstruct or generalize road surface from urban meshes.

**Requirements:** 1) Experiences in 3D reconstruction. 2) Proficient in C++ programming.

**Contact:** [WeixiaoGao](https://3d.bk.tudelft.nl/weixiao), [Hugo Ledoux](https://3d.bk.tudelft.nl/hledoux/).

- - -

## Building point cloud completion

![](img/buildingpcc.png){:width="800px"}

The goal of this research is to develop a building point cloud completion method based on deep learning. 
We will provide datasets, backbone networks, and ready-made ideas to facilitate students' successful completion of this project. 
Your task is to improve and enhance existing methods to meet the requirements of building point cloud completion. 
You will learn about cutting-edge deep learning methods for point cloud completion and their applications in the field of geoinformation. 
The results of this research can be published in high-quality journals or conference papers. 
Students are free to choose an additional co-supervisor. 
Participants in this project can choose from the following three research directions:
1. Develop a structure-aware method.
2. Develop a multi-modality method.
3. Develop a learning-based up-sampling method.

**Requirements:** 1) Experiences in point cloud processing. 
2) Proficiency in Python or C++ programming. 3) Knowledge of machine learning or deep learning.

**Contact:** [WeixiaoGao](https://3d.bk.tudelft.nl/weixiao), [Hugo Ledoux](https://3d.bk.tudelft.nl/hledoux/).

- - -

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


- - -

## Heating energy demand of the Dutch building stock with the help of the 3D BAG 2.0

The [3D BAG 2.0](https://3dbag.nl/en/viewer), a dataset containing LoD2 geometries of buildings of the whole Netherlands, has been recently released by the 3D Geoinformation group. The scope of this thesis is to test the suitability of the 3D BAG to estimate the energy demand of residential buildings. In this thesis, the energy demand computation will be based on the quasi-static energy-balance method and will implemement a Python-based subset of the specifications defined by the recently introduced Dutch norm [NTA8800](https://www.gebouwenergieprestatie.nl/).

![](img/3dbag_nta8800_mini.jpg){:width="800px"}

The thesis is a collaboration between the 3DGeoinformation group and the [Building Energy Epidemiology](https://www.tudelft.nl/bk/over-faculteit/afdelingen/management-in-the-built-environment/organisatie/leerstoelen/building-energy-epidemiology) group at TU Delft. Attendance of elective course [GEO5014](https://studiegids.tudelft.nl/a101_displayCourse.do?course_id=60400) in Q5 (September 2022) is highly recommended, as many relevant topics needed for this thesis will be covered.

You will programm in Python and (a bit) in PL/pgSQL.
Before picking the topic, please contact us!

**Contact:** [Giorgio Agugiaro](https://3d.bk.tudelft.nl/gagugiaro/) (3D Geoinformation Group)

- - - 

## Integrated modelling of utility networks in the urban environment

<img src="img/ga_xander_network.jpg" style="width: 500px;"/>

In the framework of Smart Cities, the MSc thesis will focus on interoperability issues when it comes the heterogeneous utility networks (e.g. gas, water, electricity, sewage, district heating, telecommunications, etc.) that are found in the urban environment.
Starting from a CityGML-based 3D city model, the Msc. thesis will focus on testing the Utility Network ADE (Application Domain Extension) and compare it to existing or newly proposed standards (IMKL or MUDDI), based on a concrete case study which will be agreed upon with the student. 
The image shown here is taken from a previous [thesis](https://repository.tudelft.nl/islandora/object/uuid:fed24b16-cf95-4fa0-a109-ece6e91b61e9?collection=education) and serves as example - and starting point - of the overall topic of the thesis proposed here.

**Contacts**: [Giorgio Agugiaro](https://3d.bk.tudelft.nl/gagugiaro/) and [Jantien Stoter](https://3d.bk.tudelft.nl/jstoter/)

- - - 

## Filling the gaps in aerial point clouds with deep learning

![](img/church-deepsdf.png){:width="500px"}

Because of the way they are collected, aerial point cloud datasets acquired with lidar often contain areas with no measurements due to occlusion effects.
This occurs for building façades and other vertical surfaces (e.g., in dormers), but also other surfaces next to tall structures such as a church tower (see right part image above).
The gaps in the datasets are problematic for the processing of point cloud, for instance automatic reconstruction algorithms can fail or output 3D models with several artefacts (see left part image above).

The aim of this research project is to design and implement methods to complete aerial point clouds datasets such as the AHN3 dataset (that is fill those gaps).
The idea is to investigate how new developments in deep learning (specifically [DeepSDF](https://github.com/facebookresearch/DeepSDF), and [ShapeInversion](https://junzhezhang.github.io/projects/ShapeInversion/)) and to adapt it to aerial point clouds.
The focus would be in the first place on buildings, so that their regularity and verticality could be exploited.

The student would be expected to take a machine learning and/or deep learning course as elective.

*Contact:* [Hugo Ledoux](https://3d.bk.tudelft.nl/hledoux) + [Ravi Peters](http://tudelft.nl/rypeters) + [Weixiao Gao](https://3d.bk.tudelft.nl/weixiao/)

- - -

## Coral Reef Complexity

Corals [cnidarians] provide a safe and nutrient-rich environment for various aquatic organisms to coexist, significantly enhancing local biodiversity. However, global coral reef health has been in decline over the past few decades due to increased ocean acidification. Consequently, there is a growing scientific interest in understanding the life cycle of corals. One aspect of coral reefs is the connection between coral reef complexity and coral health. From a hydrodynamic perspective, there is growing evidence that the coral complexity [i.e., fractal dimension] acts to increase the mass transfer rate that enables the growth of coral communities; both isolated coral reefs, and collective communities (Monismith, 2006).

In this MSc thesis you will work on spatially characterising the coral reef communities using  urban geoinformation tools to provide conventional metrics such as clustering, dimension, roughness, etc. These metrics can be used to understand any correlations between the health of the coral reef and the spatial characteristics. Additionally, characterising the spatial features of coral reefs can enable flow simulations to better understand the hydrodynamics as shown in the figure below. The thesis will broadly consist of the following three steps:

- Literature review: A thorough literature survey to understand the state of the art for characterising coral reef complexity and its connection to coral health.
- Data curation: Database search for coral reef point clouds (yes, we scan corals!) that are freely available. A good starting point would be USGS [https://cmgds.marine.usgs.gov/data-releases/datarelease/10.5066-P93RIIG9/], The Smithsonians digitisation collection [https://3d.si.edu/corals].
- Algorithm development: Develop independent morphology algorithms to characterise individual coral and coral reefs similar to urban planning metrics. A good starting point would be the metrics you implemented for GEO1004, Homework 02.  e.g., EUBUCCO [https://github.com/ai4up/eubucco], 3D-Building metrics [https://github.com/tudelft3d/3d-building-metrics] 

Skills required: Python programming and GEO1004

![](img/coral.png){:width="800px"}

**Contact:** [Akshay Patil](https://3d.bk.tudelft.nl/apatil/), [Hugo Ledoux](https://3d.bk.tudelft.nl/hledoux/)

- - - 

## Enrich the 3DBAG with the "material type" for each surface

![](img/surface_type.jpg){:width="500px"}

The [3D BAG](https://3dbag.nl) contains the geometry of all buildings in the Netherlands, and some attributes are attached to these.

To increase the usefulness of the datasets, it would be useful if the *material* of each surface was known. 
For instance: (1) architects and spatial planners would like to know if a roof/surface is made of bricks, tar, green/vegetation, solar panels; (2) engineers working with CFD simulations have similar needs, the type can help better simulation the wind in a city.

The aim of this project is to enrich the surfaces of the 3D BAG with certain material types (what these are will need to be determined) by using [aerial photos openly available on PDOK](https://www.pdok.nl/introductie/-/article/luchtfoto-pdok), [street-view photos (of Amsterdam, which are openly available)](https://amsterdam.github.io/projects/open-panorama/), and/or the AHN3 properties (eg # of returns, intensity, etc.) to obtain the results. 
One issue is that the aerial photos are nadir photos, and the façades are often not visible; the project will try to solve this with perhaps other datasets or by using solely AHN3.

I assume that since it's a classification problem, machine learning will be used.

*Contact:* [Hugo Ledoux](https://3d.bk.tudelft.nl/hledoux) & [Lukas Beuster](https://3d.bk.tudelft.nl/lbeuster)


--- 

## Random City Engine 

The ability to generate a stochastic [random] urban landscape can enable a wide range of engineering activities: testing processing code, prototyping building characterisation codes, parameter dimensionality reduction for Computational Fluid Dynamics [CFD] studies, and animation/gaming sectors. 

In this MSc thesis, you will work on procedural modelling of 3D cities using a three-fold approach: 

- Literature Review: Explore the existing literature to determine the parameters of interest necessary to characterise the urban landscapes using limited number of parametric inputs.  Here the central focus is to capture the essential “ingredients” required to generate a synthetic cityscape that is similar to real cities (similar heights of buildings and distribution) 

- Stochastic Characterisation: In this step, you will develop a code to study the 3DBAG dataset and stochastically characterise various cities. Using the parameters of interest found in the literature review, a probabilistic characterisation should be developed. 

- Procedural Modelling: Using the probabilistic characterisations formulated in the second step, you will implement a model to procedurally create new cities that are stochastically similar to the cities analysed in the second step. Here you will validate the method extensively by testing input parameters such as sampling size, clustering, canopy density,  etc. 

Skills required: Python programming + GEO1004.

![](img/randomCityEngine.png){:width="800px"}

**Contact:** [Hugo Ledoux](https://3d.bk.tudelft.nl/hledoux/), [Akshay Patil](https://3d.bk.tudelft.nl/apatil/)

---

## Extension of a GIS-supported design tool for new urban development areas

The thesis builds upon work carried out in previous MSc theses (e.g. [this](http://resolver.tudelft.nl/uuid:844b92d4-aa22-4ae7-b6c3-3b563dd3318e), check out the [video](https://www.youtube.com/watch?v=cPYT5_cFIgw) ) in which a first prototype of a geodata-supported design tool for new urban development areas was created. The tool is coupled with semantic 3D city models as a source of integrated spatial and non-spatial information.
The thesis will focus first on testing the existing tool and will then implement new functionalities. Possible examples are the computation of KPIs for urban analyses, 3D web-based visualisation and interaction interfaces, as well as scenarios management. The precise development focus of the thesis will be agreed upon with the student.

![](img/ga_giscity_2020.jpg){:width="600px"}

The research will be carried out on a selected case study and in cooperation with the Cross Domain-City of the Future graduation [studio](https://www.tudelft.nl/en/education/programmes/masters/architecture-urbanism-and-building-sciences/msc-architecture-urbanism-and-building-sciences/master-tracks/architecture/programme/studios/city-of-the-future/), which focuses on how to design and develop in an integrated way a transformation area into an attractive future urban environment.

**Contacts:** [Giorgio Agugiaro](https://3d.bk.tudelft.nl/gagugiaro/), [Roberto Cavallo](https://www.tudelft.nl/en/staff/r.cavallo)

- - -

## Coupling 3D city models with Ladybug tools for environmental analyses

<img src="img/ga_ladybug.jpg" style="width: 600px;"/>

The MSc thesis will focus on interoperability between the Ladybug tools and semantic 3D city models encoded in CityJSON and extended with the Energy ADE. The [Ladybug Tools](https://www.ladybug.tools/) are a collection of free applications that support environmental design and education. They are among the most comprehensive, connecting 3D Computer-Aided Design (CAD) interfaces to a host of validated simulation engines. The thesis builds upon a previous [MSc thesis](https://repository.tudelft.nl/islandora/object/uuid:fb35db7c-9af8-488c-8d0b-263b138d8fd3) completed in 2020.

Particular attention will be paid to energy-related topics in order verify how and to which extent the CityGML [Energy ADE](http://www.citygmlwiki.org/index.php/CityGML_Energy_ADE) (Application Domain Extension) can be used to deliver and store additional energy-related data needed by the Ladybug tools.

The students’ task will consist in choosing (together with the supervisors) a specific application covered by a Ladybug tool, to analyse the software and data requirements of the selected Ladybug tool(s) and to perform a mapping to underlying CityGML/Energy ADE data models. In addition, proper interfaces will have to be developed and tested by means of a concrete case study. This topic is available for up to *two students* (each one choosing a different application area).

**Contact**: [Giorgio Agugiaro](https://3d.bk.tudelft.nl/gagugiaro/) and [Hugo Ledoux](https://3d.bk.tudelft.nl/hledoux/)

- - -

## (Further) Development of a QGIS plugin for the CityGML 3D City Database

The goal of the thesis is to extend and further improve a plugin for QGIS 3 to interact with the open-source [3D City Database](https://www.3dcitydb.org/3dcitydb/) (3DCityDB, PostgreSQL/PostGIS version), which is the reference database implementation of the CityGML data model. A first version of the plugin has been developed during a MSc thesis which is scheduled to finish in June 2022.

The plugin is meant to facilitate interaction with the 3D City Database from within QGIS, enabling the user to visualise 2D/3D geometries and to edit attributes of all features (e.g. buildings, bridges, roads, etc.) contained in the database.

![](img/3dcdb_qgis_mini.jpg){:width="800px"}

The thesis is a collaboration between the 3DGeoinformation group and [Virtual City Systems](https://vc.systems/en/) in Germany, one of the companies developing the 3D City Database. 
Attendance of elective course [GEO5014](https://studiegids.tudelft.nl/a101_displayCourse.do?course_id=60400) in Q5 (September 2022) is recommended (but not obligatory), as a deep insight in the CityGML standard and the 3D City Database will be provided. 

You will program in Python and (a bit) in PL/pgSQL.
Before picking the topic, please contact us!

Contact: [Giorgio Agugiaro](https://3d.bk.tudelft.nl/gagugiaro/)

- - -

## Infer the building type from the 3DBAG 

The 3DBAG contains the geometries of buildings for the whole Netherlands. The scope of this thesis is to infer the building type using as main sources the 3DBAG and the BAG datasets using feature engineering as well as machine learning.

Recent studies such as [3D Building Metrics](https://github.com/tudelft3d/3d-building-metrics) or [Global Building Morphology Indicators](https://www.sciencedirect.com/science/article/pii/S0198971522000539) calculate some metrics from buildings that could potentially be used as features for a ML algorithm. This type of metrics can classify correctly the building type? In this thesis, the student is expected to use the open data available in the Netherlands to extract features that can lead to infer the building type of a construction based on the TABULA project specification for the NL.

The building type information plays a relevant role for energy simulation tools since they can be used to overcome the lack of data of the 3DBAG regarding building physics such as construction materials.

![](img/BuildingTypeInfer.png){:width="300px"}

As an open question, what type of building is the one from the above image?, stand alone, semi-detached, terraced, porch, gallery, none, etc. Each of them have diferent characteristics but some of them share several.

Programming skills in python and SQL are required. Before picking the topic, please contact us!

**Contact:** [Camilo León-Sánchez](https://3d.bk.tudelft.nl/cleon/)

- - -

## Correcting global elevation models for canopy and infrastructure using Machine Learning
![](img/dsm2dtm.png){:width="400px"}

Most current Global Elevation Models (GDEM) are Digital Surface Models (DSM) and not Digital Terrain Models (DTM). There have been multiple publications correcting DSMs to (pseudo)DTMs, such as MERIT for the SRTM dataset. Lately such efforts apply Machine Learning (ML) to do these corrections, like CoastalDEM and FABDEM. However, these examples are vague about the exact methods used and their results contains artefacts. The aim of this MSc is to find a way (preferably using Deep Learning (DL)) to recognise surface features, starting with the AHN4 DSM and DTM as training data. The student would be expected to take a machine learning and/or deep learning course as elective and should be fluent in either Python or Julia.

**Contacts:** [Hugo Ledoux](https://3d.bk.tudelft.nl/hledoux/) + [Maarten Pronk](https://evetion.nl)

- - -

## Building floor count determination by Convolutional Neural Network

![](https://3d.bk.tudelft.nl/ken/temp/floors-counting.jpg){:width="300px"}

Accurately knowing the number of floors of a building is an important factor when assessing the built environment. However, there is no accurate global dataset that contains this information. Simple techniques like diving the total building height by an average height per floor are sometimes used, but this obtains merely an approximation.

In collaboration with the company [Superworld](https://www.superworld.nl), the idea is to develop a method that uses images (eg Google Street View) and a base map (eg BAG in the Netherlands) to automatically derive the number of floors in a building using Convolutional Neural Networks (CNN). 

**Contact:** [Ken Arroyo Ohori](https://3d.bk.tudelft.nl/ken)

- - -

## Creation of a sample dataset of construction of additional floors on top of existing building

![](https://3d.bk.tudelft.nl/ken/temp/floors-addition.jpg){:width="300px"}

Additional floors are sometimes added to buildings for various reasons, such as redensification. However, this is a complex process subject to technical and legal issues.

In collaboration with the company [Superworld](https://www.superworld.nl), the idea is to develop a method that uses publicly available datasets (eg BAG) and building permit applications in order to create a reference dataset containing all buildings where a vertical extension or a construction on top of an existing building have been conducted. Such a dataset can then be used to give a confidence factor for the feasibility of an extension to an existing building.

**Contact:** [Ken Arroyo Ohori](https://3d.bk.tudelft.nl/ken)

- - -

## Extracting building/storey/dwelling/room shapes from a BIM models

![](img/UpTown5.gif){:width="400px"}

Given a Building Information Model in Industry Foundation Classes (IFC) format, it is necessary to extract useful information for automatic processes, such as the building envelope, number of dwellings, storeys or rooms in the building and the respective volumes and dimensions, for example to support compliancy check with the urban regulations.

Prior algorithmic knowlegde, recursion, graph concepts could be beneficial.

In collaboration with Municipality of Rotterdam.

**Contact:** [Ken Arroyo Ohori](https://3d.bk.tudelft.nl/ken) and [Francesca Noardo](https://3d.bk.tudelft.nl/fnoardo/)

- - -

## Towards true 3D noise calculations

![](img/3d_noise_software.png){:width="400px"}

The current implementations of noise calculation software simplify the environment into cross sections and 2D calculations. Such simplifications were necessary at the times when these software were created in order to make the calculations computationally feasible. Since then both hardware and algorithms evolved, potentially opening the door toward true 3D noise calculations.

The aim is to investigate how could we create a modern, efficient, true 3D noise calculation software, and if the added complexity is justified by the improved accuracy. Special attention needs to be given to make sure that noise experts are able to verify the correctness of the software.

This is a software focused project, in which you can expect to explore the geometry of sound propagation, 3D computations, data structures, learn the details of the European noise assessment method (CNOSSOS-EU) and/or the Dutch method.

This topic continues the work of the synthesis project *3D noise simulation based on advanced input data using automatically generated TINs* and is closely related to our research on [Automated reconstruction of 3D input data for noise studies](https://3d.bk.tudelft.nl/projects/noise3d/).

Potentially in collaboration with [RIVM](https://www.rivm.nl/) and/or [RWS](https://www.rijkswaterstaat.nl/).

**Contact:** [Balázs Dukai](http://balazsdukai.com/) and someone

- - - 

## How much detail is too much for 3D noise calculations?

![](img/3d_noise_data.png){:width="400px"}

People generally assume that more detail leads to higher accuracy, also in noise calculations. However, there is no clear consensus on what is sufficient or superfluous when it comes to the geometric detail of input data. This makes it difficult to create a standardized input data set for noise calculations. 

The aim is to find out to what extent does the inclusion of more data detail improve the 3D noise calculations while staying computationally feasible. We are particularly interested in the geometric detail in terrain, buildings, ground types, bridges, noise barriers and any other object prescribed by the noise calculation method.

This is a data driven project in which you can expect to run many noise calculations, explore and investigate data sets, create your own data sets, learn the details of the European noise assessment method (CNOSSOS-EU) and/or the Dutch method.

This topic continues the work of the synthesis project *3D noise simulation based on advanced input data using automatically generated TINs* and is closely related to our research on [Automated reconstruction of 3D input data for noise studies](https://3d.bk.tudelft.nl/projects/noise3d/).

Potentially in collaboration with [RIVM](https://www.rivm.nl/) and/or [RWS](https://www.rijkswaterstaat.nl/).

**Contact:** [Balázs Dukai](http://balazsdukai.com/) and someone

- - -

## Dynamic energy simulations based on the 3D BAG 2.0 

The 3DGeoinformation has recently released the [3D BAG 2.0](https://3dbag.nl/en/viewer), a dataset containing LoD2 buildings of the whole Netherlands. [CitySim](http://www.kaemco.ch/download.php) is an open-source simulation software to perform different energy simulations for buildings/districts (e.g. space heating energy demand, solar irradiation, urban heat islands). The [3D City Database](https://www.3dcitydb.org/3dcitydb/) (3DCityDB) is the reference database for CityGML data (and its Energy ADE extension) where input AND output data will be stored.
The scope of this thesis is to link these three elements in order to allow for a seamless flow of information and perform energy simulations in CitySim. More specifically, the thesis will focus on (further) developing a Python-based bidirectional interface to feed/retrieve data between the 3DCityDB and CitySim.

![](img/3dcdb_citysim_mini.jpg){:width="800px"}

The thesis is a collaboration between the 3DGeoinformation group and the [Idiap Research Institute](https://www.idiap.ch/en/scientific-research/energy-informatics/index_html) in Switzerland. Attendance of elective course [GEO5014](https://studiegids.tudelft.nl/a101_displayCourse.do?course_id=52747) in Q5 (September 2021) is highly recommended , as many relevant topics needed for this thesis will be covered.

**Contact:** [Giorgio Agugiaro](https://3d.bk.tudelft.nl/gagugiaro/) (3DGeoinformation Group) and [Jérôme Kämpf](https://www.idiap.ch/en/people/directory/750) (Idiap).

- - -

## Development of a QGIS plugin for the CityGML 3D City Database

The goal of the thesis is to develop a plugin for QGIS 3 to interact with the open-source [3D City Database](https://www.3dcitydb.org/3dcitydb/) (3DCityDB, PostgreSQL/PostGIS version), which is the reference database implementation of the CityGML data model. The plugin will facilitate interaction with the 3D City Database from within QGIS, enabling the user to visualise 3D geometries and to edit attributes of all features (e.g. buildings, bridges, roads, etc.) contained in the database.

![](img/3dcdb_qgis_mini.jpg){:width="800px"}

The thesis is a collaboration between the 3DGeoinformation group and [Virtual City Systems](https://vc.systems/en/) in Germany, one of the companies developing the 3D City Database. 
Attendance of elective course [GEO5014](https://studiegids.tudelft.nl/a101_displayCourse.do?course_id=52747) in Q5 (September 2021) is highly recommended, as many relevant topics needed for this thesis will be covered.

Contact: [Camilo León-Sánchez](https://3d.bk.tudelft.nl/cleon/) & Giorgio Agugiaro (3D Geoinformation Group), [Claus Nagel](https://github.com/clausnagel) (Virtual City Systems)

- - -

## Development and Testing of the Energy Extension for CityJSON (v1.x)

In the current time, there are some freeware simulation software tools to perform different energy simulation of buildings (SimStadt, CitySim), which support 3D City Models as input data and will produce results and exported following the [CityGML Energy ADE](https://opengeospatialdata.springeropen.com/track/pdf/10.1186/s40965-018-0042-y.pdf). The purpose of this master thesis is to design the Energy Extension to the main core of CityJSON v.1.x so it supports the storage of energy data of cases such as space heating energy demand or solar irradiation values to mention some. It has been documented that CityJSON Extensions and less flexible than CityGML ADEs so it is expected to identify and evaluate the existing limitations and if thay would mean critical losses. 

![](img/CityJSON+Energy.png){:width="800px"}

It is desirable in this thesis to work in the consumption of this new datasets for visualization or analysis in existing software such as [Azul](https://github.com/tudelft3d/azul).

Attendance of elective course [GEO5014](https://studiegids.tudelft.nl/a101_displayCourse.do?course_id=52747) in Q5 (September 2021) is highly recommended, as many relevant topics needed for this thesis will be covered.

**Contact:** [Camilo León Sánchez](https://3d.bk.tudelft.nl/cleon/), [Ken Arroyo Ohori](https://3d.bk.tudelft.nl/ken) 

- - -

## Space lidar to estimate the height of all buildings in the world?

![](img/icesat2_buildings.png){:width="300px"}

By using the recent LiDAR [satellite ICESat-2](https://icesat-2.gsfc.nasa.gov/) data, one can potentially measure the height of buildings, see [those very recent results](https://iopscience.iop.org/article/10.1088/2634-4505/abf820).

The problem is that the data is very sparse (kilometres with no data) and thus a global coverage is difficult.

The projects aims at reimplementing, and perhaps improve, the methodology above (eg filtering and classification of the points) and build a training dataset that could be used to train a machine learning network (similar to [this MSc thesis last year of Imke Lánský](https://repository.tudelft.nl/islandora/object/uuid:ddcae7d1-6cc8-42a7-8c1d-a922ec7551f0?collection=education)).

The idea is to use the [3DBAG dataset](https://3dbag.nl) as a start, and see how this can be applied to other areas.

This topic would be in collaboration with [Deltares](https://www.deltares.nl) (Maarten Pronk, who gave the guest lecture in GEO1015), and thus the [Julia programming language](https://julialang.org/) is preferred (since they already have some code to help you start). 

**Contact**: [Hugo Ledoux](https://3d.bk.tudelft.nl/hledoux/)


- - -

## Automatic repair of 3D city models

![](img/repairorientation.gif){:width="400px"}

Most 3D city models that are publicly available contain so many geometric errors (self-intersections, missing faces, duplicate vertices, etc.) that [they are more or less unusable in practice](https://speakerdeck.com/hugoledoux/how-useful-are-current-3d-city-models).

The aim of this project is to __automatically__ repair 3D city models, we can focus on the [publicly available models](https://3d.bk.tudelft.nl/opendata/opencities/) so there is plenty of data to play with.
While repair is a very-complex issue (if all cases are to be handled), this project will target the most common errors, and fix them. 
The [val3dity server](http://geovalidation.bk.tudelft.nl/val3dity/) has been logging all the validation reports for the last 4 years, so a starting point will be to analyse those and focus on what is most easy and has an impact.
Duplicate points and non-planar surfaces are pretty easy to solve; and for single polygons we [already have working code (prepair)](https://github.com/tudelft3d/prepair).
After that, more complex operators (eg [those from CGAL](https://doc.cgal.org/latest/Polygon_mesh_processing/index.html)) could be used.

The project is difficult to be done in Python, C++ is necessary (but it's a great way to improve!).
CityJSON files will be used, you will not have to deal with (the pain of parsing) CityGML files, I promise.

*Contact:* [Hugo Ledoux](https://3d.bk.tudelft.nl/hledoux)

- - -

## 3D digital urban regulations to use GeoBIM for building permission checks

The automation of urban regulation checks for the planning use case requires the urban regulations to be archived in a digital and spatial (3D) format.
This project aims at the definition of an effective way to store those regulations digitally and spatially, for their use in checking urban regulations compliancy of new buildings through GeoBIM integrated information. The studied solution could start from extending [CityGML](https://www.citygmlwiki.org), employing [INSPIRE](https://inspire.ec.europa.eu/data-model/approved/r4618-ir/html/) data model, or other available standards.
In collaboration with [EuroSDR](http://www.eurosdr.net) and [Kadaster](https://www.kadaster.nl)

**Contact:** [Francesca Noardo](https://3d.bk.tudelft.nl/fnoardo/), [Ken Arroyo Ohori](https://3d.bk.tudelft.nl/ken) and [Jantien Stoter](http://3d.bk.tudelft.nl/jstoter)

- - -
## Reconstructing indoor 3D models from floor plans and LiDAR point clouds 

![](img/3Dfloor.png){:width="700px"}

Some cities have acquired floor plans of individual living units in buildings. These floor plans are desribed with their 2D geometries and a floor number.
In this research you will develop and implement an algorithm that combines the floor plans with LiDAR point clouds (AHN) to reconstruct 3D building models including their indoor living untis.

*Contact:* [Jantien](http://3d.bk.tudelft.nl/jstoter) and ..........)

--------

## Investigate the use of CityJSON in (serious) games

![](https://media.indiedb.com/images/groups/1/23/22129/UE4Interface_5.jpg){:width="300px"}

Modern game engines, such as Unity and Unreal Engine, allow to create eye-appealing visualisations and provide tools to conduct basic analysis, such as solar potential estimation or rough flood analysis. By importing CityJSON in such an application users could explore the urban environment in a more emerging and easy way.

The aim of this project is to implement an import process for CityJSON in Unity or Unreal Engine. Then, you would have to explore the possibilities that such a technology offer when utilised with 3D city model data.

Programming knowledge in C# (for Unity) or C++ (for Unreal Engine) is required, although scripting and scene manipulation could be done with Python or the engine's graphical tools.

*Contact:* [Hugo Ledoux](https://3d.bk.tudelft.nl/hledoux) & [Stelios Vitalis](https://3d.bk.tudelft.nl/svitalis/)

---


## Computation of spatial extent for massive point cloud datasets

![](img/alphashape.png)

Given a raw LAS pointcloud datasets, how to generate its [spatial extent (a polygon)](https://3d.bk.tudelft.nl/courses/backup/geo1015/2019/les/13/)?

Finding the bounding-box (or the convex hull, or with a raster solution) is in most cases not sufficient, as the image above shows.
A better solution is to use the alpha-shape of the set of points, or similar complex structures.
The problem we would be tackling here is: how to do this for a dataset of say 800M points? It doesn't fit in memory, so what can we do?

Done in collaboration with [Deltares](https://www.deltares.nl).

*Contact:* [Hugo Ledoux](https://3d.bk.tudelft.nl/hledoux) 

---

## Infer the number of floors for all buildings in NL

<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/T2Y7oo3iB40" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

The [Basisregistraties Adressen en Gebouwen (BAG)](https://www.kadaster.nl/bag) is the most detailed, openly available data set on buildings and addresses in the Netherlands. 
It contains information about each address in a building, such as its current use, construction date or registration status. 
The 2D polygons in the BAG represent the footprint of the building as the projection of the roof’s outline.

What it lacks, and that is wanted by several practitioners, is the __number of floors__ in a given building.
While this sounds easy (if *h* is the [height of the building](http://3dbag.bk.tudelft.nl/), then *#floors = math.floor(h/3)*, right?), in practice it is a lot more messy.

The aim of this project is to dive into that topic and solve it once and for all.
You could use the real shape of the roof (to be extracted from AHN3), year-of-construction, and other attributes that are available.
Furthermore, several municipalities have collected the number of floors for buildings, and those datasets could be used as ground truth, or as training for machine learning.

We would like to run this for the whole country and integrate this new attribute in our [3D BAG service](http://3dbag.bk.tudelft.nl/).

Potentially in collaboration with [Deltares](https://www.deltares.nl/en/).

Programming in Python and SQL is sufficient. 

*Contact:* [Hugo Ledoux](https://3d.bk.tudelft.nl/hledoux) and [Balázs Dukai](http://balazsdukai.com)

---


## How to construct one __seamless__ TIN from all the AHN3 points in NL?

![](img/bigtin.jpg){:width="300px"}

The AHN3 dataset contains a lot of points (should be close to 1 trillion when completed), and while these are useful, some applications would benefit from having a TIN.
You learned how to create a Delaunay TIN in GEO1015, but what you did was for small datasets that fit in memory.

The aim of this project is to construct __one seamless TIN__ of all the (ground) points in AHN3.
Tiling is possible, but perhaps more interesting would be to use the [streaming ideas of Isenburg and friends](https://www.cs.unc.edu/~isenburg/papers/ilss-scdt-06.pdf); see also the [GEO1015 lesson 12](https://3d.bk.tudelft.nl/courses/backup/geo1015/2019/les/12/).
Their code is working but not open-source, only works with float (Dutch EPSG:28992 gets truncated...) and is not working.
The idea is to modify their code and implement own, and release this as open-source.

Ideally, at the end it would be nice to press "enter", and in one shoot a gigantic TIN is created.

While Python is theoretically possible (the problem is not speed, but managing the size of the dataset so that at one point only a fraction of it is in memory), it's better if C++ was used.

Potentially in collaboration with the [RIVM](https://www.rivm.nl/).

*Contact:* [Hugo Ledoux](https://3d.bk.tudelft.nl/hledoux) and [Balázs Dukai](http://balazsdukai.com)



## CityRest: RESTful access + streaming of 3D city models

![](img/draco.gif){:width="300px"}

[CityJSON](https://cityjson.org) was developed to improve on the weaknesses of the XML-encoding of [CityGML](http://www.citygml.org/).
One of the major one is that CityGML files cannot be used on the web, they are often too big and too complex.

CityJSON fixed this (6X more compact and [ninja](https://ninja.cityjson.org/) shows a proof-of-concept), and this MSc topic will explore solutions and architectures to offer a [RESTful](https://en.wikipedia.org/wiki/Representational_state_transfer) web access to datasets, and also the possibility to *stream* them to a viewer (eg ninja; image above is from [Draco](https://cesium.com/blog/2018/04/09/draco-compression/)).

There is a newly developed standard that promises to do this: [OGC API--Features](http://docs.opengeospatial.org/is/17-069r3/17-069r3.html) (this is "WFS3" but with a new name).
Most of the demos are for simple 2D geometries, complex features of a 3D city model are not clearly supported (eg textures, 2+ geometries, several LoDs, etc.).

I have built a quick [proof-of-concept and a proposal](https://github.com/hugoledoux/cityjson_ogcapi) (see also the [demo](http://hugoledoux.pythonanywhere.com/)), and this project would bring this further by investigating how to support streaming, how to setup the server (right now it is simple and "cheap").
The aim would be to host most [publicly available 3D city models](https://3d.bk.tudelft.nl/opendata/opencities/) on such a server, and benchmark what would be the "optimal" solution.
A bit ambitious, I know.

Potentially in collaboration with [Geonovum](https://www.geonovum.nl/).

*Contact:* [Hugo Ledoux](https://3d.bk.tudelft.nl/hledoux) & [Stelios Vitalis](https://3d.bk.tudelft.nl/svitalis/)

- - -

## Automatic reconstruction of historical 3D city models

![](img/delft_1600.jpg){:width="500px"}


Several cities are currently attempting to reconstruct historial 3D models of their cities, see for instance [Rotterdam before/during/after WWII](https://www.stadsarchief.rotterdam.nl/rotterdam3d).
As far I know, all the efforts have been made manually, by hiring several students to draw buildings from historical photos.

The aim of the project is to investigate how historical 3D models of cities can be *automatically* reconstructed.
The idea is to use [2D topographic maps](https://www.topotijdreis.nl) and other sources (eg cadastre) and infer the height of buidings, [maybe with machine learning](https://3d.bk.tudelft.nl/hledoux/pdfs/17_ceus_3dnoelevation.pdf).

Potentially in collaboration with [Gemeente Rotterdam](https://www.stadsarchief.rotterdam.nl).

**Contact:** [Hugo Ledoux](http://tudelft.nl/hledoux)

---


## Automatic generalisation of depth contours

![](img/bathycontours.png){:width="500px"}

For some years, we have been working on a novel method to automatically generate "good" depth-contours for hydrographic charts.
Our latest results, based on the [MSc thesis of Ravi Peters](http://repository.tudelft.nl/view/ir/uuid%3A5977a99b-0875-44b4-abe1-09288bf2aed1/) and published in that [paper](https://3d.bk.tudelft.nl/hledoux/pdfs/14_marinegeo.pdf), have been picked up by major companies who are implementing it.

The aim of the proposed project is to improve the results.
That is, we can at this moment generate smooth contours for most seabed types, but the generation is applied for the whole dataset and a human must decide when the results are okay.
The student would have to focus on automatically applying the algorithms only where they are needed and design methods to assess when sufficiently good results have been achieved.

The [code of the project](https://github.com/Ylannl/Surfonoi) is in C++, but probably possible to make do with Python.

**Contact:** [Hugo Ledoux](http://tudelft.nl/hledoux) and [Ravi Peters](http://tudelft.nl/rypeters)


## DTM Filtering for Photogrammetric DSM’s

![](img/tnodtm.png){:width="500px"}

Although laser point clouds have become a common data resource for world modelling, photogrammetrically derived digital surface models are still widely used as the basis for a terrain modelling work flow. With current high resolution camera systems, highly detailed Digital Surface Models (DSM) can be obtained. Digital Terrain Model (DTM) filtering is used to remove features from the DSM and obtain a ground level elevation model. Although DTM filtering is a very basic step in terrain modelling, it is still a challenging task. One of the difficulties is the filtering of forested areas in hilly terrain, but also rough terrain is often not a trivial case.

This research will aim at finding improved filtering and interpolation techniques to resolve the difficulties in DTM filtering for photogrammetrically derived DSM’s. The project is carried out in co-operation with [TNO in The Hague](https://www.tno.nl/nl/), where these techniques are applied in the field of gaming and simulation.

*Contact:* [Jantien Stoter](http://3d.bk.tudelft.nl/jstoter)

## Semantic Feature Matching

![](img/tnosemantic.png){:width="500px"}

For large parts of the world, the available 3D geoinformation is limited, outdated or inaccurate. To cost-effectively obtain an up to date and high-resolution 3D (urban) environment model, automated 3D reconstruction techniques need to be applied on raw elevation and imagery sensor data, in order to find which features (vegetation, buildings, etc.) are present in the terrain and the representation of the relevant feature properties (tree species, roof type). Semantic model based feature matching is a reconstruction approach where a priori knowledge on the environment is used to represent and constrain a search space of possible feature models that can be found in the terrain. 

The key in this research is to devise semantic model representations and search algorithms that explore the search space and find instances of the semantic feature model that best match the available sensor data. The project will focus on encoding and using object relations (e.g. between a building and adjacent street) in semantic feature models to improve the correctness of the matches. The project is carried out in co-operation with [TNO in The Hague](https://www.tno.nl/nl/), where these techniques are applied in the field of gaming and simulation.

*Contact:* [Jantien Stoter](http://3d.bk.tudelft.nl/jstoter)


## Linked data: Extend CityJSON with machine-readable semantics

![](img/ld.jpg)

[CityJSON](http://www.cityjson.org) is based on JavaScript Object Notation, a lightweight data-interchange format primarily used on the Web. 
However, JSON is just syntax, without any machine-readable knowledge about the meaning (semantics) of the data. Currently, the only way to figure out what the data in a CityJSON file means (e.g. what is a building?) is to read the [CityGML](https://www.citygml.org) specification (assuming you know where to find it), something only humans can do. 

The aim of this MSc project is to find out how to encode the meaning of CityJSON files in a machine-readable way, directly embedded or linked in the JSON document, and to discover what benefits (or disadvantages) this would bring. This could be done by creating a vocabulary which describes the keys that can be used in CityJSON, basically a CityGML vocabulary or (simple) ontology; and using [JSON-LD](https://json-ld.org/) to map the keys in CityJSON to this vocabulary. 

The "LD" in JSON-LD stands for "[linked data](https://www.w3.org/wiki/LinkedData)". 
Once CityJSON-LD is created, we effectively have a lightweight linked data format for CityGML. 
But this is not a benefit in itself. 
The project would go on to explore the advantages and disadvantages of working with CityJSON-LD, as opposed to just CityJSON.

This project is done in cooperation with [Geonovum](https://www.geonovum.nl/), the govermental organisation responsible for developing geo-standards.

**Contact:** [Linda van den Brink](l.vandenbrink@geonovum.nl) and [Jantien Stoter](http://3d.bk.tudelft.nl/jstoter)


## Develop a framework for sharing sensor data

![](img/slimmestad-alg.png)

The ISO/OGC standard [Observations and Measurements](http://www.opengeospatial.org/standards/om) (O&M) provides a model for the exchange of information about sensor observations. 
It’s a rather concise and abstract model and it has always raised questions about how to create a profile in order to use it in practice. 
A framework for this is needed.

Creating a profile involves the definition of an information model that extends the [abstract O&M model](http://portal.opengeospatial.org/files/?artifact_id=41579). 
O&M is defined in UML. 
In addition, there is an XML-based exchange format, the [O&M GML encoding](http://portal.opengeospatial.org/files/?artifact_id=41510), a [JSON implementation](https://portal.opengeospatial.org/files/64910), and a linked data based ontology called [Semantic Sensor Network ontology](https://www.w3.org/TR/vocab-ssn/). 
All of these may play a role in the framework, but the central question of this MSc topic is how to create a working O&M profile.

A practical case for the study could be the [Base Registry Underground](https://www.basisregistratieondergrond.nl), which will contain a lot of sensor data such as groundwater measurements and soil quality observations. 

This project is done in cooperation with [Geonovum](https://www.geonovum.nl/), the govermental organisation responsible for developing geo-standards.

**Contact:** [Linda van den Brink](l.vandenbrink@geonovum.nl) and [Jantien Stoter](http://3d.bk.tudelft.nl/jstoter)

## Moving objects on the Web

Describing trajectories and paths of moving objects requires a different approach to describing static ones. Research how best to support Web applications that generate or use data concerning moving objects. Use cases include transportation, tourism, migration, location-based services, travel blogs and wildlife tracking. There is an OGC standard for [Moving features](http://www.opengeospatial.org/standards/movingfeatures), but the XML encoding is too complex and verbose - not lightweight enough to conduct, for example, enhanced (near) real-time operations involving moving objects, via the Web.

This project is done in cooperation with [Geonovum](https://www.geonovum.nl/), the govermental organisation responsible for developing geo-standards.

**Contact:** [Linda van den Brink](l.vandenbrink@geonovum.nl) and [Jantien Stoter](http://3d.bk.tudelft.nl/jstoter)


## Sensor standards overview

Create an overview of the standards landscape related to sensors and observations that explains the scope of each of these standards, their application to practical use cases, impact on Spatial Data Infrastructures and mechanisms by which they may be combined. 
Are these standards, for example, overlapping in their application domain, or are they complementary? 
Are there gaps that need to be addressed? 

Different standards organizations are working on standards related to sensors and the measurements they produce: [ISO](https://www.iso.org/), the [OGC](http://www.opengeospatial.org), the [W3C](https://www.w3.org), the [IETF](https://www.ietf.org), and countless non-standardized community or platform-specific protocols and formats. These standards range from mature to early development stage, and from low level communication IoT protocols to ontologies describing sensor semantics.

This project is done in cooperation with [Geonovum](https://www.geonovum.nl/), the govermental organisation responsible for developing geo-standards.

**Contact:** [Linda van den Brink](l.vandenbrink@geonovum.nl) and [Jantien Stoter](http://3d.bk.tudelft.nl/jstoter)


## Improvements (trees, bridges, viaducs) to 3dfier

![](img/3dfier.png){:width="600px"}

We have developed a software, [3dfier](https://github.com/tudelft3d/3dfier), to automatically construct 3D city models from 2D GIS datasets (e.g. topographical datasets) and LiDAR/pointcloud datasets.
The software creates a 3D model by lifting every polygon to 3D, and the semantics of every polygon is used to perform the lifting.
That is, water polygons are extruded to horizontal polygons, buildings to LOD1 blocks, roads as smooth surfaces, etc. Every polygon is triangulated (constrained Delaunay triangulation) and the lifted polygons are "stitched" together so that one digital surface model (DSM) is constructed.
Our aim is to obtain one DSM that is error-free, i.e. no intersecting triangles, no holes (the surface is watertight), where buildings are integrated in the surface, etc.

The aim of this MSc project is to further develop some lacking features of 3dfier, it could be one of the following:

  1. adding 3D representation of trees by *iconisation*, ie by inserting a parametric template that has the general shape/dimension of a tree. This implies automatically finding this, and a good start is the methodology described in [this paper (Section 4.2)](https://infoscience.epfl.ch/record/206788/files/paper.pdf)
  2. adding bridges and other man-made structures (such as viaducs) by first modelling them with [Esri CityEngine](http://www.esri.com/software/cityengine) and then "stitching" them to the 3D model.

These topics can be done with Python as a post-processing of 3dfier.

**Contact:** [Hugo Ledoux](http://tudelft.nl/hledoux) and [Tom Commandeur](mailto:t.j.f.commandeur@tudelft.nl)

- - -

## Extraction of characteristics of buildings from aerial imagery

![](img/readaar.jpg){:width="350px"}

This project is done in cooperation with [Readar](http://www.readar.com).
Readaar was founded in 2016 and extracts all kind of information from aerial imagery.
To do this they combine remote sensing with machine learning.

Readaar has already developed a method to generate point clouds and 3D building models from stereo imagery.
The next step is to translate this into useful insights like:

  - how many solar panels can we fit on the roof,
  - what is the roof type,
  - how many floors does the building have.

The focus of the student within this project will be on using the datasets to develop methods that extract (data mining) the insights that Readaar's customers want to have.

[More information is found there.](https://readar.com/jobs/internship-deep-learning-on-aerial-imagery/)

*Contact:* [Hugo Ledoux](http://tudelft.nl/hledoux) + [Sven Briels](mailto:svenbriels@readar.com)

- - -


## Develop a framework to handle massive CityJSON files

![](img/cityjson.jpg){:width="200px"}

As an alternative format for the [CityGML](https://www.citygml.org) data model, we have recently developed [CityJSON](http://www.cityjson.org), it uses [JavaScript Object Notation](http://json.org).
The aim of CityJSON is to offer an alternative to the GML encoding of CityGML, which can be verbose and complex (and thus rather frustrating to work with).
CityJSON aims at being easy-to-use, both for reading datasets, and for creating them.
It was designed with programmers in mind, so that tools and APIs supporting it can be quickly built.

While a CityJSON file is [about 6X compacter](https://github.com/tudelft3d/cityjson/wiki/Compression-factor-for-a-few-open-CityGML-datasets) than the equivalent CityGML file, very large areas (like the [whole of city of Berlin](https://www.businesslocationcenter.de/en/downloadportal)) are still problematic.

The aim of this MSc project is to design a framework to deal with such massive CityJSON files.
The potential solution is to design a tiling scheme, and find a way to make it work with a web-based viewer, eg [Cesium](https://cesiumjs.org/) or [three.js](https://threejs.org/).
There is an emerging standard about the tiling of 3D GIS datasets ([3D Tiles](https://github.com/AnalyticalGraphicsInc/3d-tiles)), which should probably be reused/modified.

Knowledge of Python and of web technologies (javascript; although that can be learned with the project) is enough.

**Contact:** [Hugo Ledoux](http://tudelft.nl/hledoux) and [Stelios Vitalis](mailto:s.vitalis@tudelft.nl)

---

## Guesstimation of the height of all USA buildings

![](img/zurich.png){:width="600px"}

The project [Open City Model](https://github.com/opencitymodel/opencitymodel) by [BuildZero.Org](http://buildzero.org) provides a height for each of the 125,192,184 buildings in the USA.
They took the [footprints from Microsoft](https://github.com/Microsoft/USBuildingFootprints) and estimated their heights.
It can be seen that several buildings are at the same height, and the methodology they used is not documented.

The aim of this project is to develop a methodology to improve their results, in particular using machine learning and the [results we obtained for the Netherlands](https://3d.bk.tudelft.nl/hledoux/pdfs/17_ceus_3dnoelevation.pdf).

**Contact:** [Hugo Ledoux](http://tudelft.nl/hledoux)

- - -

## Compression of 3D city models on the web for visualisation

![](img/3dcmview.jpg){:width="600px"}

Three-dimensional city models are notoriously complex to visualise in a web-browser because they are usually rather large and the users would like to be able to explore the attributes (attached to different elements at different levels, eg to a building, to a window, etc.).

[Cesium](https://cesiumjs.org/) partly solves the issue of having complex 3D city models in a browser, but the files are still rather large and attaching complex semantics/attributes is still not fully satisfactory.

This thesis would explore new ways to solve these issues, and would especially explore the new [Draco library](https://google.github.io/draco/), which allows us to compress 3D meshes; [preliminary results](https://cesium.com/blog/2018/04/09/draco-compression/) are promising.

The work would involve testing this with more 3D city models, writing converter from CityJSON, and exploring how complex geometric primitives can be preserved (Draco assumes a simple mesh; buildings are often formed of solids) and how to attach semantics to the model (using .b3dm or others). We have implemented a *glTF* and *b3dm* conversion in [cjio](https://github.com/tudelft3d/cjio), but need thorough testing and improvements. However, it could serve as the starting point for the thesis.

If you work on this topic, you can expect to learn how binary file formats work exactly (even write your own), about rendering 3D objects, how to use Cesium, certainly the ins and outs of CityJSON, and more.  

**Contact:** [Hugo Ledoux](http://tudelft.nl/hledoux) and [Balázs Dukai](https://www.balazsdukai.com/)



- - -

## Storing CityJSON to NoSQL databases (e.g. MongoDB)

![](img/NOSQL.jpg){:width="400px"}

CityJSON has been proven to be an efficient way of storing 3D city models by using, on average, about 6x less space than CityGML files.
Nevertheless, permanent storage and robust access of such big amount of data can better be managed through the use of databases, which ensure [ACID](https://en.wikipedia.org/wiki/ACID) reliability.
While 3DcityDB is already a way of mapping the CityGML data model to traditional SQL databases (e.g. PostGIS and ORACLE), modern web applications require more flexibility and use extensively NoSQL database to store data.
In particular, MongoDB seems to work very well with JSON data.

The focus of this thesis is to develop a way to store CityJSON in MongoDB (or other NoSQL databases) and evaluate the efficiency of such an approach.
A prototype application might be required to be developed and/or support in [cjio](https://github.com/tudelft3d/cjio) might be added as a result of this project.

Knowledge of Python programming language is recommended.

**Contact:** [Hugo Ledoux](https://3d.bk.tudelft.nl/hledoux) and [Stelios Vitalis](http://3d.bk.tudelft.nl/svitalis).

- - -

## Line of sight (visibility) and raytracing analyses on a point cloud dataset

![](img/matvisibility.png){:width="600px"}

Calculating the visibility between two points using 3D city models provides valuable input to many application domains, such as solar analyses (shadowing) and finding the optimal place to install a surveillance camera or a billboard. This list is growing, e.g. a potential application could be to estimate the visibility of an urban canyon from a satellite.

We have developed a 3D skeleton-based approach (part of that [research project](https://3d.bk.tudelft.nl/projects/3dsm/)) ([PDF here](https://3d.bk.tudelft.nl/hledoux/pdfs/15_udmv_visibility.pdf)) that would be the start of the project.

Knowledge of Python and FME is sufficient.

**Contact:** [Ravi Peters](http://tudelft.nl/rypeters) and [Hugo Ledoux](http://tudelft.nl/hledoux)


- - -

## 3D breakline extraction from point clouds

![](img/MAT_CA_ridge_overlay.jpg){:width="400px"}

Point clouds, unstructured collections of 3D points in space, are nowadays collected with different acquisition methods, eg photogrammetry and LiDAR, and contain a wealth of information on both natural and man-made structures.

The aim of this project is to extract 3D breaklines directly from a point cloud such as the national AHN3.
Breaklines indicate discontinuities in a terrain (such as the ridges in a mountain) and are needed for applications such as flood simulations and noise simulations.

As a starting point the [3D medial-axis transform (MAT)](https://3d.bk.tudelft.nl/projects/3dsm/) can be used (used to generate the image above).

Prior knowledge of programming in Python or C++ is required.

**Contact:** [Ravi Peters](http://tudelft.nl/rypeters) and [Hugo Ledoux](http://tudelft.nl/hledoux)


- - -

## Automatic Derivation and Storage of Metadata for 3D City Models

![](img/metadata.png){:width="350px"}

The size of 3D City Models makes it temporally and computationally expensive to quickly parse a dataset to understand if it is suitable for a specific application. Furthermore, datasets are created and modified by different users, this makes it difficult to know what level of processing it has experienced and to track its lineage to understand changes over time. Metadata is crucial for establishing data confidence, estimating fitness-for-purpose, maintaining dataset lineage and credit recognition amongst many other benefits. The problem is that it sounds boring and can be laborious to produce and maintain.

The aim of this project is to: 

* Develop a methodology that parses a 3D City Model and automatically derives metadata, e.g. spatial extent, the presence of semantic information, level of detail, etc. 

* Discover a method of storing metadata that a) ensures it is still coupled with its parent dataset and b) is easily queried. 

* Examine the limitations of 2D metadata standards and make recommendations about how to extend standards to include 3D data.

If there is interest the student may wish to examine a Resource Description Framework as the metadata data model. 

For this position we ask for programming skills, preferably in Python. SQL is an asset but you can easily learn it over the course of the project. 

*Contact:* [Anna Labetski](http://3d.bk.tudelft.nl/alabetski) and [Hugo Ledoux](http://tudelft.nl/hledoux)


- - -

## Compression of CityJSON files

![](img/cityjson.jpg)

As an alternative format for the [CityGML](https://www.citygml.org) data model, we have recently developed [CityJSON](http://www.cityjson.org), it uses [JavaScript Object Notation](http://json.org).
The aim of CityJSON is to offer an alternative to the GML encoding of CityGML, which can be verbose and complex (and thus rather frustrating to work with). 
CityJSON aims at being easy-to-use, both for reading datasets, and for creating them.
It was designed with programmers in mind, so that tools and APIs supporting it can be quickly built.

Based on some preliminary and limited tests, we concluded that it can compress many datasets with a factor of at least 4X, often 10X+.
The aim of this MSc project is to verify (or disprove!) this claim by:

  1. developing a conversion tool from CityGML datasets, using either [citygml4j](https://github.com/citygml4j) or the [new GDAL driver](http://www.gdal.org/drv_gmlas.html).
  2. identifying how files could be further compressed. At this moment, only a [simpler compression method is implemented](http://www.cityjson.org/en/0.1/specs/#id21) ([code here](https://github.com/tudelft3d/cityjson/tree/master/software/cityjson-compress/c%2B%2B11)).
  3. testing with very large files, eg a whole German region with 10M+ buildings.

Knowledge of Python is enough.

*Contacts:* [Hugo Ledoux](http://tudelft.nl/hledoux) and [Stelios Vitalis](mailto:s.vitalis@tudelft.nl)

- - - 


## GeoOBJ: developing a spatial extension to OBJ

3D formats found in 3D computer graphics are in many ways superior to GIS formats such as CityGML: they have wide software support and great visualisation capabilities. However, they fall short with spatial analyses, because of various limitations, such as lack of geo-referencing, and lack of semantic structuring. The goal of this project is to bridge the two worlds, by developing a spatial extension to a computer graphics format such as OBJ. This thesis is suitable for MSc Geomatics students, and it may be adapted to any other format.

*Contacts:* [Filip Biljecki](https://3d.bk.tudelft.nl/biljecki) and [Hugo Ledoux](http://tudelft.nl/hledoux)

- - - 

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


- - -

## Shape grammar to subdivide spaces

![](img/shape_grammar.png)

Indoor environment in public buildings consist of very large spaces and usually it is difficult to give instructions how to get to a specific part of the such space. Therefore for indoor localisation and navigation, spaces are subdivided into functional areas. There several approaches to subdivide spaces. 

This research will concentrate on space subdivision using shape grammar. A shape grammar consists of number of shape rules and a generation process that selects and processes rules. In general, shape rule specifies the transformations on  existing (part of a) shape. This research is part of [SIMs3D](www.sims3d.net) project.

*Contact:* [Abdoulaye Diakité](http://3d.bk.tudelft.nl/adiakite)

- - -

## Octree – Indoor/Outdoor navigation

![](img/octree_nav.png)

3D raster representation is increasingly gaining the interest of the researchers. They are simple structures but usually result in large data sets. Therefore in previous research we have investigated Octree data structure and its use for indoor path computation.

This research topic will continue and extend previous work by considering rasterization of outdoor space. The goal is to investigate what kind of Octree would be needed for seamless indoor/outdoor navigation. 

*Contact*: [Sisi Zlatanova](http://3d.bk.tudelft.nl/szlatanova) 

- - -

## Indoor modelling with the Google Tango tablet

![](img/tango.png)

The Google Tango tablet is a very intuitive, interactive and interesting tool for indoor scanning. The device contains suitable sensors to rapidly produce 3D models. But the few apps available for this task are very limited, and only provides either an already processed mesh or point cloud samples. 

The goal of this research is to evaluate to which extent the tablet can be used for indoor modelling. It is about fully exploiting the skills of the tablet to extract proper point clouds and perform semantically rich surface reconstruction, by relying on other information such as the scanning trajectories, the coloured pictures of the environment, etc. 

*Contact:* [Abdoulaye Diakité](http://3d.bk.tudelft.nl/adiakite)

- - -

## Dynamic changes of the 3D indoor spaces

In order to perform fine-grained indoor navigation, one needs to consider the entire 3D free and non-free space. The non-free space is often characterized by furniture elements and people activities (crowd, queue, etc).  The free space that is available for navigation cannot be evaluated without considering the obstacles. This problem is even more complex because the obstacles can move in the indoor space.

![](img/dynamic_indoor.png)

The goal of this research is to investigate the best way to consider the moving objects in an indoor environment to optimally evaluate the real free space available for navigation. This research is part of [SIMs3D](www.sims3d.net) project.
 
*Contact:* [Abdoulaye Diakité](http://3d.bk.tudelft.nl/adiakite)

- - -

## FaciliDat: 3D Indoor model and a database schema for facility management  

Most building managers have little to no information about the indoor status of their buildings: the number of buildings, their structure, rooms, size of windows, doors, area of room floors, etc. Many maintenance daily and yearly tasks such as cleaning, renovation, painting, refurnishing, safety are performed in an ad-hoc manner, which cost extra effort and money. There is great interest in a 3D indoor model, which geometry, topology and semantic information will serve the tasks of the building managers. 

![](img/facilidat.png)

Currently two international standards for 3D indoor modelling are available IFC and CityGML LOD4. Both standards have their advantages and disadvantages for such purposes. IFC has too many details and it is difficult to integrate with GIS. CityGML LOD4 is relatively simple, but hardly supported by major vendors.
* First option: Is it possible to establish a 3D indoor model that can serve facility management purposes? This research will evaluate the suitability of the two standards (and available database implementations such as 3DCityDB) and propose a solution: extend/adapt one of them or design a new model combining best characteristics of the two. The proposed approach should be realised as a data model in DBMS and validated against a predefined set of user requirements. A simple web application allowing access and view to the database would be recommendable.  (Required skills: UML, SQL, basic programming)
* Second option: What kind of algorithms are needed to convert automatically IFC to CityGML LOD4 taking care of valid geometry and semantics. It is expected that recommendations for design of a building model will be derived, which will facilitate a fully automatic conversion. This might also result in more strict rules for representing indoor objects in CityGML. (Required skills: computational geometry, programming)

*Contact*: [Sisi Zlatanova](http://3d.bk.tudelft.nl/szlatanova) (in cooperation with More For You, Charim) 


- - - 

## Flexible 3D Indoor model for navigation of different types of users  

Many indoor navigation apps are currently available but they are focussed on specific application (i.e. shopping, tourism) and have no flexibility. They cannot be adapted to the profile of the user or the task he/she is completing. They do not take into consideration temporal or permanent changes of the environment such as renovation, reorganisation of spaces or in case of emergency. User profiles and changed environment reflect the 3D Indoor model (geometry and network) that is used to compute the navigation paths. 

![](img/flexible_indoor.png)

This research will investigate what kind of 3D indoor model which can provide sufficient information to navigate different users through changing indoor environments. Are different LOD/layers needed? How to maintain connectivity of spaces? Can the network be derived on the fly or should be stored with the geometry model? Fundamental concepts of IndoorGML such as dual graph and Multi-Layered Space Model will be the starting point of the research. Generic user profiles and parameters reflecting changing indoor environmental need to be identified. A final app should demonstrate the flexibility of the model and the proposed strategy for path navigation (Required skills: UML, SQL, programming)

*Contact*: [Sisi Zlatanova](http://3d.bk.tudelft.nl/szlatanova) (in cooperation with CGI) 


- - - 

## 3D Indoor navigation: what kind of path?  

Current navigation outdoor and indoor system are relatively simple and offer limited choices. Car navigation systems offer a choice between the shorter path or faster path, or avoiding tolls, highways. Indoor navigation apps can compute optimal path to visit a sequence of targets (e.g. in shopping). Various other options have been reported in the literature such as the least turn’s path, the most interesting paths, the least traversing path or the least obstruction path. Furthermore, the current navigation systems mostly consider that one person is navigated to one static target point. But are these options sufficient for indoor navigation? How the people want to move indoors? What kind of algorithms should be used, or developed. What kind of network is needed? 

<div class="row">
	<div style="display:inline-block"><img src="img/3d_indoor_1.png" class="img-responsive" /></div>
	<div style="display:inline-block"><img src="img/3d_indoor_2.png" class="img-responsive" /></div>
	<div style="display:inline-block"><img src="img/3d_indoor_3.png" class="img-responsive" /></div>
</div>

This research should investigate conditions for indoor navigation, corresponding algorithms and networks. Starting point of the research will be the taxonomy for navigation of emergency responders developed at the 3D geoinformation group. The research should identify, implement and validate new ways for indoor navigation (Required skills: graph theory, programming) 

*Contact*: [Sisi Zlatanova](http://3d.bk.tudelft.nl/szlatanova), Liu Liu

- - - 

## Indoor scanning for 3D modelling

3D indoor models are still very rare and difficult to obtain. 3D BIM models hardly contain recent modifications, 2D floor plans are not accurate and lack 3D. Range or optical images are some of the relatively easy and cheap way to collect 3D data to be provided for 3D modelling algorithms. There several interesting technologies currently at the market, which seem suited for indoor modelling, but they have never been thoroughly investigated and compared.

<div class="row">
	<div style="display:inline-block"><img src="img/scanning_1.png" class="img-responsive" /></div>
	<div style="display:inline-block"><img src="img/scanning_2.png" class="img-responsive" /></div>
	<div style="display:inline-block"><img src="img/scanning_3.png" class="img-responsive" /></div>
	<div style="display:inline-block"><img src="img/scanning_4.png" class="img-responsive" /></div>
</div>

This research will concentrated on several technologies for collection point clouds ZEB1, Tango, terrestrial scanner, and optical video/images. A comparative study will be completed on the basis of a set of parameters, including time for collecting and processing data to a uniform point cloud. The 4 technologies will be tested on the same building under the same conditions. The most prominent technology should be identified for quick update of parts of 3D models. A test bed for testing and evaluation should be set up.  (Required skills interest on scanning technology, processing of point clouds).      

*Contact*: [Sisi Zlatanova](http://3d.bk.tudelft.nl/szlatanova) (related to M4C project SIMs3D)

- - - 

## 3D reconstruction of rooms (floors, ceilings and walls) from point clouds

3D reconstruction of indoor environments is complex task: rooms contain many objects in rooms or attached to walls and ceilings; many of the indoor spaces are half open and there are intermediate floors, balconies and strains. Manual reconstruction is tedious and time consuming; no automatic or semi-automatic approaches currently exist. This research will investigate and design/adapt approaches for **identifying** the walls, ceilings and floors belonging to an indoor space and construct solids (where possible). The research should also suggest a data structure for integrated management of vector geometry and corresponding point clouds. Several approaches can be addressed that can lead to different Master topics: shape grammar, voxels, segmentation/classification, etc.  (Required skills: interest in processing point clouds, programming alternatively using existing software)

*Contact*: [Sisi Zlatanova](http://3d.bk.tudelft.nl/szlatanova), Ben Gorte (related to M4C project SIMs3D)

- - - 

## 3D reconstruction of doors and windows from point clouds

Doors and windows are of critical importance for indoor navigation and localisation, but very difficult to identify from point clouds: doors and windows can be closed or open during the scanning, windows can be covered with curtains or sun shutters.  This research will concentrate investigated which outdoor approach could be appropriate for indoor environments. Recently completed research of [Kaixuan Zhou](http://repository.tudelft.nl/view/ir/uuid%3A8f548788-1e42-475b-adbf-93f9dbcd04a1/) could be used as starting point. Different approaches can lead to different MSc topics: use of floor plans, semi-automatics, feature detection, etc. (Required skills: interest in processing point clouds, programming or alternatively using existing software)

*Contact*: [Sisi Zlatanova](http://3d.bk.tudelft.nl/szlatanova), Ben Gorte (related to M4C project SIMs3D)

- - - 

## System architecture for flexible indoor path computation making use of IndoorGML

IndoorGML is recently accepted standard for exchange of indoor information needed mostly for navigation. The standard suggests three options for encoding geometry and network information that is needed for navigation:  1) the geometry is provided by IFC, KML or CityGML file and the IndoorGML contains only the path/network for navigation, 2) simple geometry&semantics is stored in the IndoorGML file, and finally 3) no geometry is provided

![](img/indoorgml.png)

The three different options have their pros and cons for different types of server-client applications. Sever-based or client-based computations? How much information to be sent to the client: only the navigation path or the navigation path and the building model? Provide the whole path or wait for requests from the user? An android application should be developed that demonstrates the different approaches 
(Required skills: web technology, app development)

*Contact*: [Sisi Zlatanova](http://3d.bk.tudelft.nl/szlatanova) (related to OGC pilot project)

- - - 

## Colouring point clouds obtained from ZEB1

Scanning indoor environments with ZEB1 is quick and accurate method for obtaining indoor point clouds. However,  the point clouds don’t have colour. This research will investigate an approach for integrating images with the ZEB1 point clouds to obtain coloured points. The research will be in collaboration with CSIRO, GeoSlam and university of Picardie. (Required skills: interest in processing point clouds, programming)

*Contact*: [Sisi Zlatanova](http://3d.bk.tudelft.nl/szlatanova) (in cooperation with LEAP3D)

- - - 

## Smart City 

Connecting and visualizing real-time sensors with point cloud. Used for analysis of data and influencing the environment (smart city concept). Details to be provided later. 

*Contact*: [Sisi Zlatanova](http://3d.bk.tudelft.nl/szlatanova) and Ester de Bruin (LEAP3D) 

- - - 

## Augmented Reality applications for City Models (Hololens)

![](img/HololensVisualiser.png)

Augmented Reality is an emerging technology in visualisation and perseption of digital worlds. City models could be benefited from such a technology, as users could better explore and understand the data that are integrated in such a virtual model of a city. This project is about the development of a visualization application on Microsoft Hololens platform, exploring potential benefits and issues of such an application and the potential use cases for future use. The application should focus on the visualisation of geometry and attributes of a city model. The implementation will be done through the use of the Unity 3D engine and the C# programming language.

*Contact:* [Stelios Vitalis](http://3d.bk.tudelft.nl/svitalis)

- - -

## Visualizing tiled 3D data on the web

Vector-based maps, like the open-source [MapLibre](https://maplibre.org), have been established as the de-facto standard in the industry for world-wide map data visualization.
There is a robust toolchain for creating, styling and visualizing 2D data (through vector tiles) but no standardized way to do so in 3D.

In this MSc thesis you will investigate the possibility of integrating (true) 3D data in MapLibre, by potentially integrating an existing open standard like 3D Tiles to MapLibre GL JS.
The topic can be focused to either the data processing and management part (evaluating different standards, developing a solution to create tiled sources of 3D data) or the visualization part (extending MapLibre GL JS to incorporate some existing format, like 3D tiles).

Knowledge of programming in either Python (for data processing) or JavaScript/TypeScript (preferably with WebGL or three.js) is required for this thesis.

**Contact:** [Stelios Vitalis](https://3d.bk.tudelft.nl/svitalis), [Ken Arroyo Ohori](https://ken.mx)

This thesis is in collaboration with TomTom.

![](img/landmarks-3d.png){:width="800px"}
