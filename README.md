# website

![jekyll build](https://github.com/tudelft3d/website/workflows/jekyll%20build/badge.svg)


Website for the [3D geoinformation group](http://3dgeoinfo.bk.tudelft.nl) at [TU Delft](http://www.tudelft.nl). Uses [Jekyll](http://www.jekyllrb.com) to generate static pages.

If you change something, push it to the repository. The website will be updated after ~5 minutes. If you need to update the website manually, ask around for the *secret* update script.


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

To add images, you must put them in the folder `/img/2015/myimg.jpg` and then add them with 

```
Bla bla bla 

![]({{ site.baseurl }}/img/2015/myimg.jpg)
```

## Testing locally
It can be handy to test the website locally before you commit and push any changes to github. For this you need to have a working Ruby installation. You can then install jekyll and the required dependencies with:
```
gem install jekyll parslet htmlentities webrick
```

Then, clone this repository and run `jekyll serve`:
```
git clone https://github.com/tudelft3d/website.git
cd website
jekyll serve
```
Then follow the instruction printed in the terminal for you to open the website locally.

**Note**: if you have an M1 mac there may be some difficulties with running jekyll. To fix this you can install a separate ruby environment as described here: http://www.earthinversion.com/blogging/how-to-install-jekyll-on-appple-m1-macbook/.

## Contributing to repository

This is a research group website. So, in general we're not looking for external contributions. However, if you spot something serious, please contact us or post an issue.

Clearly spammy pull requests (e.g., changing formatting on this README) will be closed, marked as invalid/spam (no T-shirt for you!) and users reported for abuse.
