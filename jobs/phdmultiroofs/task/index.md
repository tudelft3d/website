---
layout: page
permalink: /jobs/phdmultiroofs/task/
---


# Multiroofs 2nd-round interview task

<!-- ![](../../../lod/lodtud.png) -->

<div class="row">
  <div class="col-md-6 col-sm-12 col-xs-12"><img class="img-responsive" src="{{ "../../../lod/lodtud.png" | prepend: site.baseurl }}"></div>
</div>


## Aim

The aim of this task is to create a small software program that converts one building in a 3D city model from LoD2.2 to LoD1.2 (*level-of-detail*, as shown in the figure above).

However, since the full process is rather long and complex, we will consider a simpler version of the problem with the following simplifications:

- The input and output will be in the format [OBJ files (Wavefront)](https://en.wikipedia.org/wiki/Wavefront_.obj_file), rather than the common [CityJSON](https://cityjson.org).
- The input will consist of a single building in LoD2.2, and all faces have been triangulated. 
- Semantics will not be taken into account, so this task is purely about geometry.

In 3D city modelling, the LoD1.2 is a "block-shaped" representation: roofs will be horizontal planes without additional structures (such as dormers or chimneys), and walls will be vertical planes ([see our LoD page for more details](https://3d.bk.tudelft.nl/lod/)).
It's used by many, eg Google Maps.


## The buildings to use as input

We sampled from the [3DBAG](https://3dbag.nl) four buildings on the TUDelft campus, and we converted them to OBJ files:

1. [simple.obj](simple.obj)
1. [beeb.obj](beeb.obj)
1. [otb.obj](otb.obj)
1. [bk.obj](bk.obj)


## Dos and don'ts

- Don't spend more than 4-5 hours on this task. We are looking for a simple solution, and we are aware that some of you have more experience with geo-datasets than others.
- Don't use libraries that solve the entire task for you.
- Don't read or implement the entire specifications for the Wavefront OBJ files (eg for the textures or normals). It is not necessary, stick to the files given.
- Do choose the language you prefer, and please document your code.
- Do use libraries for the geometric operations or to handle input/output, if you want. 
However, you should be able to explain how these operations work at a low level.
- Do feel free to take shortcuts and to simplify the problem further, if necessary.

## What to submit

- the source code 
- instructions to compile and run it

Ideally create a GitHub repository, add us ([@hugoledoux](https://github.com/hugoledoux/) + [@GinaStavropoulou](https://github.com/GinaStavropoulou/)) as collaborators, and email us the URL.
You can alternatively email us a ZIP of the code.

<div class="alert alert-info" role="alert">
Submit this before Tuesday 1 April 2025 13:00.
</div>

Then, at the second interview, you should give a quick technical presentation of up to 10 minutes explaining how your program works (you can prepare slides and share your screen if you want), the engineering choices you made while programming, and how it could be improved (given more time). 
We will ask you a few questions about it. 
Bear in mind that while we do care about the quality of your code, we are more interested in discussing the details of your technical solution and its advantages/disadvantages.

