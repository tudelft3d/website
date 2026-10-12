---
layout: post
title: "Best Paper Award at 3D GeoInfo 2026"
categories: news
date: 2026-10-12 10:00
---

<img class="img-responsive" src="{{ "/img/2026/hide_3dgeoinfo2026.png" | prepend: site.baseurl }}">
<br>

We are happy to announce that the paper [*A STAC Extension for discovering and cataloguing 3D city models*](https://doi.org/10.5194/isprs-annals-XII-4-W1-2026-25-2026) by [Hidemichi Baba](https://3d.bk.tudelft.nl/hbaba/) and [Hugo Ledoux](https://3d.bk.tudelft.nl/hledoux/) won the **Best Paper Award** at the **21st International 3D GeoInfo Conference** in Sofia (Bulgaria). 🎉

More and more countries and cities are publishing 3D city models, but the key properties of these datasets (CRS, levels of detail, city object types, etc.) are hidden inside the CityGML, CityJSON, and FlatCityBuf files themselves, which makes them hard to find with current search tools.
The paper addresses this by:

- defining a [STAC extension for 3D city models](https://github.com/cityjson/stac-city3d) that describes these properties;
- developing [**city3dstac**](https://github.com/cityjson/city3d-stac-tool/tree/main), an open-source command-line tool written in Rust that extracts the metadata from the files and generates STAC catalogues;
- building a prototype registry of 53 collections, including the [3DBAG](https://3dbag.nl) and [PLATEAU](https://www.mlit.go.jp/plateau/).

The resulting catalogue can be browsed with existing STAC clients, and clients that support the extension can also filter on the 3D-specific properties.
The paper is open access and can be read [here](https://doi.org/10.5194/isprs-annals-XII-4-W1-2026-25-2026).

Congratulations, Hidemichi and Hugo!
