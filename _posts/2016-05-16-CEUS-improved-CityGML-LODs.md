---
layout: post
title: An improved LOD specification for 3D building models
categories: news
date: 2016-05-16 15:20
---

The CityGML 2.0 LODs are an industry standard for conveying the grade of 3D city models. However, the 5 LODs are not defined precisely, and they are not sufficient for this purpose. In our new paper

Biljecki, F., Ledoux, H., & Stoter, J. (2016). An improved LOD specification for 3D building models. <i>Computers, Environment and Urban Systems</i>, 59, 25–37. [doi:10.1016/j.compenvurbsys.2016.04.005](http://doi.org/10.1016/j.compenvurbsys.2016.04.005)

we present a refined series of 16 LODs that overcomes these issues:

<img src="{{ site.baseurl }}/img/2016/CEUS-LOD-1.png"/><br>
 

The freely available author's version PDF is available [here](http://filipbiljecki.com/publications/Biljecki2016to.pdf). Please use the [publisher's version](http://doi.org/10.1016/j.compenvurbsys.2016.04.005) if available to you.

<img src="{{ site.baseurl }}/img/2016/CEUS-LOD-2.png"/><br>


Abstract: The level of detail (LOD) concept of the OGC standard CityGML 2.0 is intended to differentiate multi-scale representations of semantic 3D city models. The concept is in practice principally used to indicate the geometric detail of a model, primarily of buildings. Despite the popularity and the general acceptance of this categorisation, we argue in this paper that from a geometric point of view the five LODs are insufficient and that their specification is ambiguous.

We solve these shortcomings with a better definition of LODs and their refinement. Hereby we present a refined set of 16 LODs focused on the grade of the exterior geometry of buildings, which provide a stricter specification and allow less modelling freedom. This series is a result of an exhaustive research into currently available 3D city models, production workflows, and capabilities of acquisition techniques. Our specification also includes two hybrid models that reflect common acquisition practices. The new LODs are in line with the LODs of CityGML 2.0, and are intended to supplement, rather than replace the geometric part of the current specification. While in our paper we focus on the geometric aspect of the models, our specification is compatible with different levels of semantic granularity. Furthermore, the improved LODs can be considered format-agnostic.

Among other benefits, the refined specification could be useful for companies for a better definition of their product portfolios, and for researchers to specify data requirements when presenting use cases of 3D city models. We support our refined LODs with experiments, proving their uniqueness by showing that each yields a different result in a 3D spatial operation.