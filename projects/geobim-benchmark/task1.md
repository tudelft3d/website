---
layout: benchmark
title: IFC support
permalink: /projects/geobim-benchmark/task1.html
---

<h1>Task 1 - The <strong>support for IFC</strong> within BIM (and other) software</h1>

<div class="row">
  <div class="col-sm-12 col-xs-12"><img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/logoTask1.jpg" }}" style="max-height: 300px"></div>
</div>

*This task is intended mainly for BIM software, but **it is also open to GIS solutions, or other kinds of software** supporting interoperability with IFC.*


- - -

* Table of Content
{:toc}

- - -

## What is tested

The *Task 1 - Support for IFC* will test the support for the **actual interoperability of software and tools with IFC files**.

### Software performances
Participants **can choose the software they are more confident with**.

All kinds of software and tools are admitted (off-the shelf software, self-programmed tools, analysis software, and so on).

A list of suggested software is published, together with the already tested ones, in the [software section](https://3d.bk.tudelft.nl/projects/geobim-benchmark/software.html) of this website.

A long list of available software for managing IFC files exists, and can be searched [in the buildingSMART website](http://www.buildingsmart-tech.org/implementation/implementations).

[Some of these](http://www.buildingsmart-tech.org/certification/ifc-certification-2.0/ifc2x3-cv-v2.0-certification/participants) are participating in the buildingSMART process for IFC certification (or being awarded with), and [others](https://www.buildingsmart.org/compliance/certified-software/) already obtained the certification. In the initial part of the task participants will be asked about the certification status of the tested software.

### Software + Hardware performances
A part of the investigation regards also the performances of the software in the used computer. Therefore, as important part of the results, participants are also asked to **check the (approximated) required processing time for each step.**
For these results were not affected by third factors, participants are asked to **close all the unnecessary processes, software and tools in the computer during the test.**

Moreover, in 'Section 3' of the Results template, participants are asked to report the characteristics of the **used computer.**

In the case they need to change computer for different parts of the Task, they are asked to communicate this through e-mail (f.noardo@tudelft.nl). Otherwise, it will be assumed that the computer described at the beginning is used for the whole Task.


## Summary of the Task
1. The participants should <strong>import the IFC model</strong> in their software and fill the results template about:

  * How is the <strong>georeferencing</strong> managed? Is it fully kept (unit of measure, scale, coordinate reference system, orientation)? How does it change (where is the origin of the new system, how is it oriented, what is the coordinate reference system and projection and what the unit of measure for the representation? Does the model maintain its correct dimensions and proportions and it is not distorted or scaled?).
  
  * How are the <strong>semantics</strong> translated into the software internal library/vocabulary? Is the IFC classification kept? Is the translation consistent with the IFC definitions? Are the relations among the objects kept and consistent? What changes / inconsistencies / errors were noted?
  
  * How is the <strong>geometry</strong> managed? Is it read in the correct way (solids are solids, normals do not change, nothing is interpreted in an inconsistent way)? Otherwise, how does it change?
  
  * How can the file be managed? Is it possible to <strong>edit</strong> some attributes? Is it possible to edit the geometry? Is it possible to <strong>analyse</strong> it? In this case, what analysis are possible in the software? Are they reliable?
  
2. The participants should <strong>export</strong> the BIM in <strong>IFC</strong> again (if the software is also able to export) and deliver the exported file. If some specific passages were performed in the software for fostering a compliant export, they will deliver also a detailed tutorial about them, including screenshots and description.

Participants will answer these questions and add screenshots to document these features in the **results template provided for task 1** (see following parts of this webpage).
The participants should deliver also the file in the specific (native) format of the used software and exported IFC files.

## What data must be used

For performing this task, the following data will be used, in this order:

* [Myran IFC model](https://3d.bk.tudelft.nl/projects/geobim-benchmark/ifcmyran.html)
* [Up:Town IFC model](https://3d.bk.tudelft.nl/projects/geobim-benchmark/uptown.html)
* [Specific IFC geometries](https://3d.bk.tudelft.nl/projects/geobim-benchmark/ifcgeometries.html)

In the case the tested software is not able to manage some of the data, participants can anyway deliver the results concerning the others.

You will be able to download the data after you fill the [registration form](https://francescanoardo.typeform.com/to/IbdpZD).

And you can find their description, useful to the task, in the [data section](https://3d.bk.tudelft.nl/projects/geobim-benchmark/data.html) of this website.

The *Myran* and *Up:Town* IFC models are not open data. Therefore, we ask participants not to use them without permissions outside the project, please.


## How is the task organised <!--and how long does it take to perform the task -->
<!--
**The task will require, approximately, <mark>TIME</mark>, to be performed and deliver the required results.** -->

The task can be performed by filling a provided **results template** as web forms (using typeform.com). You can access it and begin your answer in a following section in this webpage.

The results template is organised in 5 sections:

*Please, note that it is not necessary to fill all the questions if the software doesn't have the needed functionalities.*

  *If **processes, settings and any useful further detail is carefully described** while using the Myran.ifc data, it is possible to avoid repeating them, if nothing different has to be reported.*

* **Section 1** - *Participant information* (This information has already been captured in the [registration form](https://francescanoardo.typeform.com/to/IbdpZD), here we only ask name and e-mail as reference. If something has changed, please communicate it at f.noardo@tudelft.nl).

* **Section 2** - *Tested software/tool* (asking details about the tested software)

* **Section 3** - *Computer hardware* used (asking details about the used computer for correctly comparing the performances of the different tools)

* **Section 4** - *The Task* (guiding the participant through the task). This, in turn, includes:

  * Test with ***Myran.ifc*** data (this will allow the main test of the software functionalities):


    * Import functionality
	* Georeferencing information
	* Semantics
	* Geometry
	* Model management (visualisation, editing, analysis, query)
	* export functionality
	
	.	
  * Test with ***UpTown.ifc*** data (this will add an evaluation of the software performances with bigger data):
    
    * Import functionality
	* Georeferencing information
	* Semantics
	* Geometry
	* Model management (visualisation, editing, analysis, query)
	* export functionality
	
	.	
  * Test with ***IFCgeometries.ifc*** data (this will allow an analytical test about the management of specific kinds of IFC geometries):
  
    * Import functionality
	* Geometry
	* export functionality
	
	.	
* **Section 5** - *Finalisation* (participants can deliver eventual further information or comments, agree with the use of data and deliver the processed models, both in native formats and IFC, before submitting their results).

Participants can have the overall in-sight into the task through the <mark>[word-format results template](DOWNLOAD)</mark>.

It is **really recommended to have a look at the whole task before starting.**

### Structure of the online results template

To allow the participants to fill the results template in different times without loosing the previous work, the results template for this task is splitted in 12 parts.

At the end of each part, the link towards the following one will be provided, both in the last slide of the online form, and in an e-mail sent to the indicated e-mail address.

**REMEMBER TO SUBMIT EACH PART**, by pushing "Submit" in the online form, before moving to the following part (an e-mail will notify you).

In particular, the 12 parts include:

* 1/12) 'Section 1 - Participants information' to 'Section 3 - Computer hardware used'
* 2/12) 'Section 4 - the Task': test with *Myran.ifc* - 'Import functionality'
* 3/12) 'Section 4 - the Task': test with *Myran.ifc* - 'Georeferencing information'
* 4/12) 'Section 4 - the Task': test with *Myran.ifc* - 'Semantics'
* 5/12) 'Section 4 - the Task': test with *Myran.ifc* - 'Geometry' to 'Model management'
* 6/12) 'Section 4 - the Task': test with *Myran.ifc* - 'Export functionality'
* 7/12) 'Section 4 - the Task': test with *UpTown.ifc* - 'Import functionality'
* 8/12) 'Section 4 - the Task': test with *UpTown.ifc* - 'Georeferencing information'
* 9/12) 'Section 4 - the Task': test with *UpTown.ifc* - 'Semantics'
* 10/12) 'Section 4 - the Task': test with *UpTown.ifc* - 'Geometry' to 'Model management'
* 11/12) 'Section 4 - the Task': test with *UpTown.ifc* - 'Export functionality'
* 12/12) 'Section 4 - the Task': test with *IFCgeometries.ifc* - 'Import functionality' to 'Section 5 - Finalisation'


## The materials participants need
Information and descriptions are all published in this website.

### Registration form
Contact us and register your participation to the benchmark, giving **your personal details** and declaring **which tool** you intend to test, for **which Task** through this [registration form](https://francescanoardo.typeform.com/to/IbdpZD).

### Data
You are able to download the IFC data after you fill the [registration form](https://francescanoardo.typeform.com/to/IbdpZD).

The ***Myran*** and ***Up:Town*** IFC models are *not open data*. Therefore, we ask participants not to use them without permissions outside the project, please.

The ***IFCgeometries.ifc*** file can also be downloaded from the [description page](https://3d.bk.tudelft.nl/projects/geobim-benchmark/ifcgeometries.html)

### Results template
Begin to perform the Task and deliver results through the online [Results template for Task 1](https://francescanoardo.typeform.com/to/c35MpI)

<div class="typeform-widget" data-url="https://francescanoardo.typeform.com/to/c35MpI" style="width: 100%; height: 500px;"></div> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/"; if(!gi.call(d,id)) { js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script> <div style="font-family: Sans-Serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px;"> powered by <a href="https://admin.typeform.com/signup?utm_campaign=c35MpI&utm_source=typeform.com-13384974-Pro&utm_medium=typeform&utm_content=typeform-embedded-poweredbytypeform&utm_term=EN" style="color: #999" target="_blank">Typeform</a> </div>

 
 <mark>[word-format results template](DOWNLOAD)</mark>.
## Deliverables for Task 1

**REMEMBER TO DELIVER**, through the last online form:

1. All the files (3) in the project or **native format** employed by the tested software, as imported (if the software allows to save in its native format);

2. All the exported **IFC models** (3) (if the software has export functionality);

3. The answered **results template for task 1** by submitting the filled online form (the word version of the template, completed with the open answers, descriptions and screenshots could also be attached, if necessary)

In the case that some materials were not correctly delivered or some of your answers are not clear, you could be contacted by organisers for integrating your results or giving more explanations.