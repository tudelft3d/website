---
layout: post
title: The variants of an LOD of a 3D building model and their influence on spatial analyses
categories: news
date: 2016-03-23 21:03
---

The level of detail (LOD) concept conveys the grade of 3D city models, however, it still allows flexibility for different modelling choices. For instance, consider the following four (valid) variants of LOD1:

<img src="{{ site.baseurl }}/img/2016/ISPRS-GR-2.png"/><br>

These variants, which we term <i>geometric references</i>, are a topic of our new paper which has been published in the ISPRS Journal of Photogrammetry and Remote Sensing:

Biljecki, F., Ledoux, H., Stoter, J., & Vosselman, G. (2016). The variants of an LOD of a 3D building model and their influence on spatial analyses. ISPRS Journal of Photogrammetry and Remote Sensing, 116, 42–54. [doi:10.1016/j.isprsjprs.2016.03.003](http://doi.org/10.1016/j.isprsjprs.2016.03.003)

The freely available author's version PDF is available [here](http://filipbiljecki.com/publications/Biljecki2016wt.pdf). Please use the [publisher's version](http://doi.org/10.1016/j.isprsjprs.2016.03.003) if available to you.


<img src="{{ site.baseurl }}/img/2016/ISPRS-GR-1.png"/><br>

Abstract: The level of detail (LOD) of a 3D city model indicates the model's grade and usability. However, there exist multiple valid variants of each LOD. As a consequence, the LOD concept is inconclusive as an instruction for the acquisition of 3D city models. For instance, the top surface of an LOD1 block model may be modelled at the eaves of a building or at its ridge height. Such variants, which we term geometric references, are often overlooked and are usually not documented in the metadata. Furthermore, the influence of a particular geometric reference on the performance of a spatial analysis is not known.

In response to this research gap, we investigate a variety of LOD1 and LOD2 geometric references that are commonly employed, and perform numerical experiments to investigate their relative difference when used as input for different spatial analyses. We consider three use cases (estimation of the area of the building envelope, building volume, and shadows cast by buildings), and compute the deviations in a Monte Carlo simulation.

The experiments, carried out with procedurally generated models, indicate that two 3D models representing the same building at the same LOD, but modelled according to different geometric references, may yield substantially different results when used in a spatial analysis. The outcome of our experiments also suggests that the geometric reference may have a bigger influence than the LOD, since an LOD1 with a specific geometric reference may yield a more accurate result than when using LOD2 models.