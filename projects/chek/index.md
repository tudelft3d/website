---
layout: page
title: Change Toolkit For Digital Building Permit
permalink: /projects/chek/
---

<div class="row">
  <div class="col-sm-8 col-xs-8"><img class="img-responsive" src="{{ "img/chek_logo.jpg" }}"></div>
</div>

- - -

* Table of Content
{:toc}

- - -
## Summary

Building permits are mainly issued today through a manual, document-based process. This results in low accuracy, low transparency, and low efficiency which leads to delays and errors in planning, design and construction. In order to accelerate the digitalization of building permit procedures, several initiatives have been developed. However, none of these have led to a complete transition to digital building permit processes in municipalities.

[CHEK](https://chekdbp.eu) is an EU funded project that aims to remove barriers to municipalities adopting digital building permit processes through the development, connection, and alignment of scalable solutions that address regulatory and policy contexts, ensure open standards and interoperability (geospatial and BIM), eliminate knowledge gaps through education, improve municipal processes, and implement technology.

In order to accomplish this, CHEK will provide both methodological and technical tools for digitalizing building permits and automating compliance checks on building designs and renovations across Europe. Having modular and standard solutions will enable replicability in different countries and contexts.

- - -
## Objectives

CHEK will enable the development and uptake of digital methods and tools for building permits, based on mature and integrated city and building digital data. Urbanistic and building regulations will be addressed, including objective parameters (e.g. max. height, setbacks) plus shadows and qualitative criteria gaining support from (objective) 3D city models analysis (i.e. “the CHEK regulations”).  They cover 70% of the permits and represent the major bottlenecks of the process. New constructions and building renovations will be taken into account.

The toolkit of methods and technology provided by CHEK will support municipalities in the transformation towards DBP. The toolkit will consist of (1) a digitally-enabled building permitting process (2) standardised interoperable solutions for data exchange, processing and analysis; (3) training; (4) adapted technology. These will be ready to scale up for application across Europe (5).

- - -

## Our role in the project
Besides being the coordinator, the 3D Geoinformation research group is responsible for the development of:
- validators for BIM (IFC) and 3D GIS data (CityJSON/CityGML).
- a georeferencer for BIM data.
- a BIM to Geo converter.
- a technical-scientific course on digital building permit checking.

We are also involved in the following tasks:

- Interpretation and formalisation of regulations and encoding them into a machine-readable format.
- Definition of the level of information need for rule checking and model preparation.
- Representation of required design information according to OpenBIM and open geospatial standards.
- Development of a Geo to BIM converter.

- - -
## Deliverables

### BIM2Geo converter (IfcEnvelopeExtractor)

<div class="row">
  <div class="col-sm-8 col-xs-8"><img class="img-responsive" src="{{ "img/EnvExtractor.gif" }}"></div>
</div>
<br>

The IfcEnvelopeExtractor enables users to automatically convert an IFC model to a CityJSON model. This allows designs to be easily analyzed on a city scale without the need for manual conversion. This is one of the steps required to close the gap between architecture/BIM and city scale models.

The software is able to extract multiple different LoDs (Levels of Detail) from an IFC model. The actual LoDs it is able to extract is dependent on the accuracy and validity of the input model. The tool utilizes five different extraction methods that can be used on progressively more accurate models. Lower detail envelopes (LoD 0.0 and 1.0 exteriors) can be extracted only based on the vertices present in a model. Middle level detail envelopes (LoD 0.2, 0.3 and 0.4* roof structures, as well as LoD 1.2, 1.3 and 2.2 exteriors) can be extracted based on the model’s roofing geometry. High LoD models (LoD 0.2 and 3.2 storeys) can be obtained from selected parts of the outer shell geometry, very high LoD models (LoD 3.2 exteriors) can be extracted based on the model’s complete outer shell geometry, and interior geometries can be obtained from the IfcSpaces in the model.

The included image shows a demo model of AutoDesk Revit that was used as input, and the resulting constructed envelopes.

The software tool and an in-depth explanation of its workings can be found [here](https://github.com/jaspervdv/IFC_BuildingEnvExtractor) and the final report is available [here](https://3d.bk.tudelft.nl/pdfs/BIM2GEO_Converter.pdf).

### CityJSON Importer plugin for Revit

<div class="row">
  <div class="col-sm-8 col-xs-8"><img class="img-responsive" src="{{ "img/RevitCityJSON.png" }}"></div>
</div>
<br>
This app supports [CityJSON](https://www.cityjson.org/), the JSON-based encoding for 3D city models, which is an official standard of [The Open Geospatial Consortium (OGC)](https://www.ogc.org/) and a subset of the OGC #CityGML data model.

Based on a CityJSON file coordination referencing system (CRS) and metadata, this app reprojects and translates imported data for implementation within Autodesk® Revit® environment.

It allows users to choose whether to update or keep the Revit site location based on the CityJSON file location. The app generates CityJSON geometries as generic models, and sets attributes on elements at the child and parent levels as shared parameters. If a CityJSON file contains multiple LODs (such as 3D BAG), the plugin generates on the user defined level. Materials assigned to elements based on their CityJSON object types are customizable in Revit's "Material Editor" panel.

The plugin can be downloaded free of charge at the [Autodesk App Store](https://apps.autodesk.com/RVT/en/Detail/Index?id=7787623024858844510&appLang=en&os=Win64), and its [source code](https://github.com/tudelft3d/cityjsonToRevit) is openly available for users who wish to access it.

### Rhino CityJSON plugin

<div class="row">
  <div class="col-sm-8 col-xs-8"><img class="img-responsive" src="{{ "img/RhinoCityJSON.JPG" }}"></div>
</div>
<br>
The Rhino CityJSON plugin enables the user to import CityJSON data into grasshopper. It converses the data stored in the CityJSON file to data that can be read, written and manipulated by native grasshopper components. This allows users to bring data from models at a city scale into software environments with which they are familiar. The plugin also allows the data to be baked into Rhino 3D without losing any of its semantic data. This is one of the steps required to close the gap between architecture/BIM and city scale models. It reinforces this together with the new Revit plugin and the already established Blender plugin.

The included image shows a close-up of an imported 3D-BAG tile baked to Rhino 3D. In the window on the right the semantic data can be seen that is related to the highlighted building.

The next steps that are planned for the development of the plugin are:

-	Improve accuracy of vertex placement
-	Improve filtering by reducing the number of components and connections needed to filter data
-	Add texture support
-	Add export to CityJSON functionality 

### IFC georeferencing tool (IfcGref)

<div class="row">
  <div class="col-sm-8 col-xs-8"><img class="img-responsive" src="{{ "img/ifcgref.png" }}"></div>
</div>
<br>

IfcGref is a Flask-based tool, accessible at provides a comprehensive solution for designers, engineers, and software developers for georeferencing. IfcGref supports georeferencing operations starting from IFC 4, ensuring backward compatibility with earlier versions. The tool utilizes IfcMapConversion, incorporating attributes like SourceCRS, TargetCRS, and other key parameters to enable accurate coordinate transformations.

The tool can be accessed [here](https://ifcgref.bk.tudelft.nl) and its source code is available [here](https://github.com/tudelft3d/ifcgref).

### CHEK DBP Workshop Digital Transformation in Building Permits

As part of the technical-scientific course on digital building permit checking, we taught two modules at the CHEK DBP Workshop Digital Transformation in Building Permits in Guimarães, Portugal.

The two modules were:

- Module 5 - 3D city modelling: background and standards [(slides)](https://3d.bk.tudelft.nl/ken/files/25_chek_workshop1.pdf)
- Module 6 - Creation of {3D} city models and {GeoBIM} integration [(slides)](https://3d.bk.tudelft.nl/ken/files/25_chek_workshop2.pdf)

- - -
## Activities

The group is participating in the [IFC 4.x Implementers Forum (IFC 4.x-IF)](https://www.buildingsmart.org/resources/ifc-4x-if/). 
IFC 4.x-IF is a joint testing effort between software developers, end-users and IFC experts. Its objective is to accelerate and support the implementation of the IFC standard, and inform the community about its overall implementation progress and results. It is coordinated by [buildingSMART](https://www.buildingsmart.org/) and is part of the larger General Assembly of Implementers, which oversees implementation activities for all buildingSMART solutions & standards (BCF, IDS, IFC5, bSDD, openCDE API, and more).

In specific, a project in which we collaborate on standardizing reference information for the IFC georeferencing is currently in progress.

- - -
# Presentations

### digiGO 3DGeoBIM meeting on 2022-11-17 in Delft

<div class="row">
  <div class="col-xs-12 col-md-6">
    <iframe src="https://docs.google.com/presentation/d/1LxoNsvDk0VNdPWflmD6rlmi9GGJzhER-/embed?start=false&loop=false&delayms=3000" frameborder="0" width="480" height="299" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
  </div>
</div>


- - -
## Funding

<div class="row">
<div style="padding:5px" class="col-md-2 col-sm-2 col-xs-4"><img src="/img/partners/eu.jpg" alt="EU logo" ></div>
</div>

This project has received funding from the European Union’s Horizon Europe programme under Grant Agreement No.101058559

- - -
## Team

<div class="row">

  <div class="col-md-3 col-sm-3 col-xs-6">
      <a href="https://3d.bk.tudelft.nl/ahakim"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/amir.jpg" alt="Amir Hakim photo" /></a>
    <h3>Amir Hakim<br /><small>Scientific Software Developer and Researcher (TUD)</small></h3>
    <p>
        <i class="fas fa-home"></i> <a href="https://3d.bk.tudelft.nl/ahakim">3d.bk.tudelft.nl/ahakim</a><br />
        <i class="fas fa-envelope"></i> <a href="mailto:S.Hakim@tudelft.nl">S.Hakim@tudelft.nl</a><br />
        <br />
        <br />
    </p>
  </div>

  <div class="col-md-3 col-sm-3 col-xs-6">
      <a href="https://3d.bk.tudelft.nl/ken"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/jasper.jpg" alt="Jasper van der Vaart photo" /></a>
    <h3>Jasper van der Vaart<br /><small>Scientific Software Developer and Researcher (TUD)</small></h3>
    <p>
        <i class="fas fa-home"></i> <a href="https://3d.bk.tudelft.nl/jvdvaart/">3d.bk.tudelft.nl/jvdvaart/</a><br />
        <i class="fas fa-envelope"></i> <a href="mailto:J.A.J.vanderVaart@tudelft.nl">J.A.J.vanderVaart@tudelft.nl</a><br />
        <br />
        <br />
    </p>
  </div>

  <div class="col-md-3 col-sm-3 col-xs-6">
      <a href="https://3d.bk.tudelft.nl/ken"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/ken.jpg" alt="Ken Arroyo Ohori photo" /></a>
    <h3>Ken Arroyo Ohori<br /><small>Postdoc (TUD)</small></h3>
    <p>
        <i class="fas fa-home"></i> <a href="https://3d.bk.tudelft.nl/ken">3d.bk.tudelft.nl/ken</a><br />
        <i class="fas fa-envelope"></i> <a href="mailto:mail@ken.mx">mail@ken.mx</a><br />
        <br />
        <br />
    </p>
  </div>

  <div class="col-md-3 col-sm-3 col-xs-6">
        <a href="http://3d.bk.tudelft.nl/jstoter"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/jantien.jpg" alt="Jantien Stoter photo" /></a>
      <h3>Jantien Stoter<br /><small>Professor (TUD)</small></h3>
      <p>
          <i class="fas fa-home"></i> <a href="http://3d.bk.tudelft.nl/jstoter">3d.bk.tudelft.nl/jstoter</a><br />
          <i class="fas fa-envelope"></i> <a href="mailto:j.e.stoter@tudelft.nl">j.e.stoter@tudelft.nl</a><br />
          <i class="fas fa-phone"></i> <a href="tel:+31 15 27 81664">+31 15 27 81664</a><br />
          <i class="fab fa-twitter"></i> <a href="https://twitter.com/jantienstoter">@jantienstoter</a><br />
      </p>
  </div>
 
  <div class="col-md-3 col-sm-3 col-xs-6">
        <a href="http://3d.bk.tudelft.nl/selyamani"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/siham.jpg" alt="Siham photo" /></a>
      <h3>Siham EL Yamani<br /><small>Postdoctoral Researcher</small></h3>
      <p>
          <i class="fas fa-home"></i> <a href="http://3d.bk.tudelft.nl/selyamani">3d.bk.tudelft.nl/selyamani</a><br />
          <i class="fas fa-envelope"></i> <a href="mailto:S.E.ElYamani@tudelft.nl">S.E.ElYamani@tudelft.nl</a><br />
          <i class="fab fa-linkedin"></i> <a href="https://www.linkedin.com/in/selyamani">linkedin.com/in/selyamani</a><br />
      </p>
  </div>

  <div class="col-md-3 col-sm-3 col-xs-6">
        <a href="http://3d.bk.tudelft.nl/selyamani"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/alper.jpg" alt="Alper photo" /></a>
      <h3>Alper Tunga Akın<br /><small>Guest Researcher</small></h3>
      <p>
          <i class="fas fa-envelope"></i> <a href="mailto:A.T.Akin@tudelft.nl">A.T.Akin@tudelft.nl</a><br />
          <i class="fab fa-linkedin"></i> <a href="https://www.linkedin.com/in/alper-tunga-akin-54928b147/">linkedin.com/in/alper-tunga-akin-54928b147</a><br />
      </p>
  </div>

  <div class="col-md-3 col-sm-3 col-xs-6">
        <a href="http://3d.bk.tudelft.nl/selyamani"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/ziya.jpg" alt="Ziya photo" /></a>
      <h3>Ziya Usta<br /><small>Guest Researcher</small></h3>
      <p>
          <i class="fas fa-home"></i> <a href="http://ziyausta.github.io/">ziyausta.github.io</a><br />
          <i class="fas fa-envelope"></i> <a href="mailto:ziyausta@artvin.edu.tr">ziyausta@artvin.edu.tr</a><br />
          <i class="fab fa-linkedin"></i> <a href="https://www.linkedin.com/in/ziya-usta-704706191/">https://www.linkedin.com/in/ziya-usta-704706191</a><br />
      </p>
  </div>
  
</div>
