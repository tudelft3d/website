# website

Website for the 3D geoinformation group at [TU Delft](http://www.tudelft.nl). Uses [Jekyll](http://www.jekyllrb.com) to generate static pages.

If you change something, push it to the repository and in your browser go to `http://3dgeoinfo.bk.tudelft.nl/update/` to update the version on the server.


## References

The first author of a paper should put the paper in the `all.bib` file in the `pubs/` folder. 

The BibTeX key should be in the form AuthorYYa, e.g. `Ledoux14a` and `Ledoux14b`. 

For professional publications (such as GIM International) please use `@misc`. The following fields can be used:

  * DOI: put the full URL with http://dx.doi.org/…
  * PDF: give the link to a PDF with full URL (http://…). You can place the PDF in `/var/www/pfds/` (so the URL should be `http://3dgeoinfo.bk.tudelft.nl/pfds/Ledoux14a.pdf`), do *not* put the PDFs in the repository. 

## Code, projects, etc.

Add the details of a new project/code/staff in `_data/` in the YML file. Images go in the appropriate folder in `img/`. Pages will be generated automatically from these.
