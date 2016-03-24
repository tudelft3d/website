---
layout: post
title: Robust approximation of the Medial Axis Transform of LiDAR point clouds as a tool for visualisation
categories: news
date: 2016-03-24 17:00
---

We have published a new article in the [Computers & Geosciences](http://www.journals.elsevier.com/computers-and-geosciences/) journal.

*Robust approximation of the Medial Axis Transform of LiDAR point clouds as a tool for visualisation*. Ravi Peters and Hugo Ledoux. _Computers & Geosciences 90(A)_, March 2016, pp. 123–133. 

The freely available author's version PDF is available [here](https://3d.bk.tudelft.nl/rypeters/pdfs/16candg.pdf). Please use the [publisher's version](http://dx.doi.org/10.1016/j.cageo.2016.02.019) if available to you.

----
<iframe src="https://player.vimeo.com/video/160251174" width="780" height="445" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
----

_Abstract:_ Governments and companies around the world collect point clouds (datasets containing elevation points) because these are useful for many applications, e.g. to reconstruct 3D city models, to understand and predict the impact of floods, and to monitor dikes. We address in this paper the visualisation of point clouds, which is perhaps the most essential instrument a practitioner or a scientist has to analyse and understand such datasets. We argue that it is currently hampered by two main problems: (1) point clouds are often massive (several billion points); (2) the viewer's perception of depth and structure is often lost (because of the sparse and unstructured points). We propose solving both problems by using the Medial Axis Transform (MAT) and its properties. This allows us to (1) smartly simplify a point cloud in a geometry-dependent way (to preserve only significant features), and (2) to render splats whose radii are adaptive to the distribution of points (and thus obtain less “holes” in the surface). Our main contribution is a series of heuristics that allows us to compute the MAT robustly for noisy real-world LiDAR point clouds, and to compute the MAT for point clouds that do not fit into the main memory. We have implemented our algorithms, we report on experiments made with point clouds (of more than one billion points), and we demonstrate that we are able to render scenes with much less points than in the original point cloud (we preserve around 10%) while retaining good depth-perception and a sense of structure at close viewing distances.