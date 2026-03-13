# website

[![jekyll build](https://github.com/tudelft3d/website/actions/workflows/jekyll-build.yml/badge.svg)](https://github.com/tudelft3d/website/actions/workflows/jekyll-build.yml)


Website for the [3D geoinformation group](http://3dgeoinfo.bk.tudelft.nl) at [TU Delft](http://www.tudelft.nl). Uses [Jekyll](http://www.jekyllrb.com) to generate static pages.

If you change something, push it to the repository. The website will be updated after ~5 minutes. If afterwards you still do not see the changes on the website try cleaning your cache. You can also confirm if the update was successful by checking [the actions under the website repo](https://github.com/tudelft3d/website/actions).

 If you need to update the website manually, ask around for the *secret* update script.


## Code, projects, homepage images, etc.

Add the details of a new project/code/staff in `_data/` in the corresponding YAML (.yml) file. Pages will be generated automatically from these. The related images should go in the appropriate folder in `img/`. The images of the staff members should be *200x200px*. The images for projects should be *square*. 


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

## Add a talk to 3DTea list

To add a new talk to the 3DTea schedule, edit the [`_data/talks.yml`](./_data/talks.yml) file. Each talk entry should follow this format:

```yaml
- title: "Your talk title here"
  name: "Presenter Name"
  room: "BG West 670"
  date: 2026-03-20
  time: 16:00-17:00
  ppt: "2026-03-20.pdf"  # optional, only if slides are available
```

**Adding your presentation:**
- **Existing slot:** If you want to add your name to an existing date in the schedule, find the right entry and add your details accordingly.
- **New talk:** Otherwise, add new talks at the top of the file - they will be automatically sorted by date.

The talks will automatically appear in the "Upcoming talks" or "Past talks" sections on the website based on the current date. Internal meetings, holidays, and empty slots are filtered out from the past talks list.

**Important notes:**
- **Date format**: Use YYYY-MM-DD format (e.g., 2026-03-20)
- **Meetings**: For monthly UDS meetings, use `title: "UDS-catch-up"`
- **Holidays**: Use `title: "Public Holiday"`

**Slides:** 
To make the slides available you need to upload the ppt file to our 3d server, under `/var/www/pdfs/3dtalks/`. This will make them accessible and downloadable under [this page](https://3d.bk.tudelft.nl/pdfs/3dtalks/). Please make sure to name the file based on the date of the presentation. When this is done, add the `ppt:` field to the respective entry in the [`_data/talks.yml`](./_data/talks.yml) file.


## Testing locally
It can be handy to test the website locally before you commit and push any changes to github. For this you need to install Jekyll which requires a working Ruby installation. 

Instructions to install jekyll on Windows can be found [here](https://jekyllrb.com/docs/installation/windows).

Instructions to install jekyll on Mac can be found [here](https://jekyllrb.com/docs/installation/macos/).

**Note**: if you have an M1 mac there may be some difficulties with running jekyll. To fix this you can install a separate ruby environment as described [here]( http://www.earthinversion.com/blogging/how-to-install-jekyll-on-appple-m1-macbook/).

Then you can then install the required dependencies with:

```bash
gem install parslet htmlentities webrick
```

Then, clone this repository and run `jekyll serve`:

```bash 
git clone https://github.com/tudelft3d/website.git
cd website
jekyll serve
```

Then follow the instructions printed in the terminal for you to open the website locally.


## Contributing to repository

This is a research group website. So, in general we're not looking for external contributions. However, if you spot something serious, please contact us or post an issue.

Clearly spammy pull requests (e.g., changing formatting on this README) will be closed, marked as invalid/spam (no T-shirt for you!) and users reported for abuse.
