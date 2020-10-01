# website

![jekyll build](https://github.com/tudelft3d/website/workflows/jekyll%20build/badge.svg)


Website for the [3D geoinformation group](http://3dgeoinfo.bk.tudelft.nl) at [TU Delft](http://www.tudelft.nl). Uses [Jekyll](http://www.jekyllrb.com) to generate static pages.

If you change something, push it to the repository. The website will be updated after ~5 minutes. If you need to update the website manually, ask around for the *secret* update script.


## References

The first author of a paper should put the paper in the `all.bib` file in the `pubs/` folder. 

The BibTeX key should be in the form AuthorYYa, e.g. `Ledoux14a` and `Ledoux14b`. 

The following fields can be used:

  * DOI: put the full URL with http://dx.doi.org/…
  * PDF: give the link to a PDF with full URL (http://…). You can place the PDF in `/var/www/pdfs/` (so the URL should be `http://3d.bk.tudelft.nl/pfds/Ledoux14a.pdf`). Do *not* put the PDFs in the repository.
  * URL: an external link to related info, e.g. website for the paper, code, etc.
  * Presentation: slides for an accompanying presentation

For professional publications (such as GIM International) please use `@misc`. 


## Code, projects, homepage images, etc.

Add the details of a new project/code/staff in `_data/` in the YAML (.yml) file. The related images should go in the appropriate folder in `img/`. Pages will be generated automatically from these.


## Adding blog/news posts

Each blog/news post is a [Markdown](http://daringfireball.net/projects/markdown/syntax) file in `_posts`. When creating one, just copy the structure of the other ones, the naming convention for the files must be followed and each file should have a header of this form:

```
---
layout: post
title:  "Testing..1..2..testing"
categories: news
date:   2015-09-29 08:29
author: John Smith
---
```

To write markdown and see right-away the result, use that very handy [website](http://dillinger.io). 

To add images, you must them in the folder `/img/2015/myimg.jpg` and then add them with 

```
Bla bla bla 

![]({{ site.baseurl }}/img/2015/myimg.jpg)
```

## Contributing to repository

This is a research group website. So, in general we're not looking for external contributions. However, if you spot something serious, please contact us or post an issue. Spammy pull requests (eg changing formatting on this README) will be closed, marked as invalid/spam and users reported for abuse.
