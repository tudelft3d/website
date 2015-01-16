---
layout: page
title:  PhD position vacancy
permalink: /phdposition/
---

<div class="row">
	<div class="col-sm-4 hidden-xs nopadding"><img class="img-responsive" src="{{ "img/3.png" | prepend: site.baseurl }}"></div>
  <div class="col-sm-4 hidden-xs nopadding"><img class="img-responsive" src="{{ "img/4.png" | prepend: site.baseurl }}"></div>
  <div class="col-sm-4 hidden-xs nopadding"><img class="img-responsive" src="{{ "img/2.png" | prepend: site.baseurl }}"></div>
</div>

---

## Efficient storage, update and dissemination of massive 3D city models

The Netherlands has recently launched a [3D map](http://www.arcgis.com/home/item.html?id=c2e507c293af4abf9f3add320f537da5) covering the whole country in which all buildings, roads, trees, canals are 3D geometries.
It was created by adding the third dimension, obtained from airborne laser-scanners, to the objects in the 2D topographic map.
This leads to a massive amount of information: 15M+ objects, billions of elevation points, and billions of triangles.

The aim of the project is to investigate and develop methods to efficiently store and maintain the dataset in a database, and to disseminate it to practitioners.
The [existing database solutions](http://www.3dcitydb.org) for managing 3D volumetric objects will be tested with massive datasets and improved, if necessary.
The biggest challenge is the management of massive TINs (triangulated irregular networks) in a database.
The PhD student will have to design and develop new data structures (eg based on [this](http://www.cs.cmu.edu/~blelloch/papers/BBCK05.pdf) and [that](http://3dgeoinfo.bk.tudelft.nl/hledoux/pdfs/13_gsis_pgtet.pdf)), implement them, and compare different alternatives (in terms of storage space, query time, etc.).
Furthermore, a prototype download service that generates 3D datasets tailored to specific applications will be explored.

The project will take place in the 3D geoinformation group under the supervision of [Prof. Dr Jantien Stoter](http://3dgeoinfo.bk.tudelft.nl/jstoter) and [Dr Hugo Ledoux](http://www.tudelft.nl/hledoux).
It is fully funded by the Dutch Technology Foundation ([STW](http://www.stw.nl)), and it is part of a large project in the Netherlands in which 3 universities and 11 organisations are involved.
We expect the PhD student to collaborate with the other researchers and practitioners involved in the project.

## Research group

The 3D geoinformation research group focuses on the technologies underpinning geographical information systems (GIS), and aims at designing, developing and implementing better systems to model 3D cities, buildings and landscapes.
It is a multidisciplinary group of around [12 people](/about/), including computer scientists, geomatics engineers, and geographers.
It has a history of successful collaborations with the industry and the government: its research has led to [tools](https://github.com/tudelft3d), standards and patents for the management of 3D geographic information.


## Doing a PhD at TU Delft

At the Delft University of Technology, a PhD student is a full-time employee of the university who gets paid a salary, no extra funding is necessary.
The gross salary is €2,125 per month for the 1st year, going up to €2,717 during the 4th year.
TU Delft also offers an attractive benefits package, including a flexible work week and the option of assembling a customised compensation and benefits package.
More information about doing a PhD in the Netherlands can be found [here](http://www.studyinholland.nl/education-system/degrees/phd).


## Job requirements

Applicants should hold an MSc degree (or almost completed) in geoinformatics/geomatics, computer science, applied mathematics, or in a related discipline.
They are expected to have good programming skills, a good command of English (oral and written) and strong interest in 3D modelling and/or computational geometry.
Prior experience with GIS is highly desirable.

## How to apply

To apply, please submit: 

- a detailed CV and a letter of application,
- the name of two referees,
- copies of BSc/MSc diplomas and grades obtained,
- proof of English competencies (if applicable),
- MSc thesis or any publications you have authored (a URL to a PDF is fine).


<div class="alert alert-warning" role="alert">
The deadline to apply is March 2nd 2015 at 17:00 (Amsterdam time).
</div>

Please e-mail your application materials to  XXX
When applying for this position, please refer to vacancy number .

For more information about this position, please contact directly [Prof. Dr Jantien Stoter](http://3dgeoinfo.bk.tudelft.nl/jstoter) (j.e.stoter@tudelft.nl)or [Hugo Ledoux](http://tudelft.nl/hledoux) (h.ledoux@tudelft.nl).
