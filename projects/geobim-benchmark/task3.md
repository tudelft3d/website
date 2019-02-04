---
layout: benchmark
title: CityGML support
permalink: /projects/geobim-benchmark/task3.html
---

<h1>Task 3</h1>
<h3><strong>Support for CityGML</strong> within GIS (and other) tools</h3>

This task is intended mainly to GIS software, but it is also open to BIM tools supporting interoperability with CityGML.

**The task will require, approximately, <mark>TIME</mark>, to be performed and deliver the required results.**

You can choose the software you are more confident with.
A list of suggested software is published in the software section of this website (link).
A more complete list of available software for managing IFC files can be searched in [here](http://www.citygmlwiki.org/index.php/Commercial_Software) for commercial software; [here](http://www.citygmlwiki.org/index.php/Freeware) for free ones; and [here](http://www.citygmlwiki.org/index.php?title=Open_Source) for open source ones.

You can test a software having both **import and export** possibilities, in this case the template can be filled in all its parts.

If the software has only import ability, only the first part of the template can be answered.

If the software has only export ability, <mark>???????????????</mark>

A part of the investigation regards also the performances of the software in the used computer. Therefore, as important part of the results, participants are also asked to declare the details of the used computer for the tests, and to **check the (approximated) required processing time for each step.**

For these data were not affected by third factors, participants are asked to **close all the unnecessary processes, software and tools in the computer during the test**.

<ol>
	<li>
		The participants should import the CityGML model in their software and fill the results template about:
		<ol type="a">
			<li>Is the CityGML /GML format read and <strong>imported</strong> directly into the software? Or is some specific translation through specific tool/plugin necessary? In this last case, please document the passages through description and screenshots. Is the CityGML file read through one of its different implementation possibilities described by OGC (GML file, 3DcityDB, CityJSON...)?</li>
			<li>How is the <strong>georeferencing</strong> managed? Is it fully kept (unit of measure and dimensions, coordinate reference system, orientation)? How does it change (where is the origin of the new system, how is it oriented, what is the coordinate reference system and projection and what the unit of measure for the representation? Does the model maintain its correct dimensions and proportions (and it is not distorted or scaled)? Is it necessary to set the correct coordinate reference system (CRS) manually?</li>
			<li>How are the <strong>semantics</strong> translated into the software internal library? Are the CityGML hierarchy and attributes kept? Is the depth of the hierarchy sufficient? Are the relations among the objects kept and consistent? What changes / inconsistencies / errors were noted?</li>
			<li>How is the <strong>geometry</strong> managed? Is it read correctly (surfaces, composite surfaces, normals do not change, nothing is interpreted in an inconsistent way, each object keep its unity)? Otherwise, how it changes? Is it possible to read/manage the different LoDs separately?</li>
			<li>How can the file be managed? Is it possible to <strong>edit</strong> some attributes? Is it possible to edit the geometry? Is it possible to <strong>analyse</strong> it? In this case, what analysis are possible in the software? Are they reliable?</li>
			Please answer these questions in the results template for task 3 and add screenshots to document these features.
			The participants should deliver also the file (model/project/database…) in the specific (native) format of the used software.
		</ol>
		<li>
			The participants should <strong>export</strong> the GIS in <strong>CityGML</strong> (if the software is also able to export) and deliver the exported file. If some specific passages are performed in the software for fostering a compliant export, or a specific tool or plugin is employed, please deliver also a detailed tutorial about them, including screenshots and description (included in the result template for task 3).
		</li>
	</li>
</ol>

<div style="border: 1px solid black; padding: 10px;">
	<strong style="text-decoration: underline;">Deliverables for Task 3</strong>
	<ol>
		<li>File in the project or native format employed by the tested software, as imported</li>
		<li>Exported CityGML model (in case of import and export tools being tested)</li>
		<li>The answered results template for task 3 (by submitting the <strong>filled online form</strong>; the <strong>word version</strong> of the template, completed with the open answers, descriptions and screenshots can also be attached)</li>
	</ol>
</div>

In the case that some materials were not correctly delivered or some of your answers are not clear, you could be contacted by organisers for integrating your results or giving more explanations.