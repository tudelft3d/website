---
layout: default_umnd
title: Data Management Plan
subtitle: Data Management Plan
permalink: /projects/umnd/dmp
---

- - -

## Table of Contents
{:.no_toc}

* Contents
{:toc}

- - -

## Data Collection

The project makes use of plenty of existing 3D data on cities, most of which are made available by governmental agencies as open data. The main standard used by the project is CityGML, which is an open standard for representing, modelling and exchanging 3D city and landscape models.

Also, 2D data of governmental agencies is used. It is combined with elevation data to generate 3D data, which is published as open data.

The 2D data is structured via open standards like GML (another open standard). The related height data (point cloud) is from airborne LIDAR or generated from aerial images that overlap. The format of the point clouds is LAS/LAZ, an open format for sensor data.

We also plan to collect our own data in these formats (via sensors on drones and other devices). 

The project also studies detailed models from the BIM domain (Building Information Model). Although the original source may be commercial (Autodesk, Bentley, 3D studio Max) our focus of study will be on the open standard IFC (Industry Foundation Classes).

The datasets provided by the government have an open licence, thus permitting us to freely use them in our research. 

The total quantity of data collected from third parties, taken from sensors and generated by the project, will be in the region of a 1-10 TB. This will become more precise during the course of the project. 

Tools and software that will be used will be as much as possible open source software (such as QGIS) or open source libraries (e.g. CGAL).  Some commercial software will be used for initial investigations, preprocessing or to investigate compatibility issues (FME, Virtual City Systems).

## Data Storage and Back-up

We use extensive version control of our external communications (eg website and blog posts), data and software. In most cases this is accomplished through GitHub. This is professionally managed and frequently backed up.

We also make use of a Linux server (godzilla.bk.tudelft.nl), which is hosted and managed by the TU Delft ICT services. Daily backups are performed. 

Software is installed on the server for processing and analysing the data. New datasets that are created are automatically stored on the server within TU Delft with the back-up process just mentioned.

Project reports will also be stored on the website (versioned on GitHub). They can also be backed up on the server of the TU Delft and/or Dropbox. SURFdrive is another possible option.

# Data Documentation

Metadata is added as both readme files (added to each folder) and as headers in generated data. This includes the following information: 
-	When it was created
-	How it was created, eg which software was used. Some input parameters that define the process of creating the 3D data from 2D data are also included if appropriate.  
-	Links to original source (where more metadata will be available)
It will be mentioned in the header, if data are created by the project. The use of open CityGML files implicitly includes metadata that defines the level of detail in the 3D data, among other metadata.

# Data Access

All data is on the TU Delft server, which is secure and accessed using an encrypted SSH connection. We have two administrators in the group who can create, change and share passwords with all team members. With each user’s password, it is currently possible to access all the data in the server. However, this can be changed if needed. With other login information, you can access the project data.

The developed software is open and shared on GitHub and other data is shared on the website (see https://3d.bk.tudelft.nl/opendata/; https://3d.bk.tudelft.nl/code/; https://github.com/tudelft3d). Anyone can submit improvements and bug fixes as pull requests. These need to be approved by the admin team before being made available to others.

Data from commercial services is mostly available without restrictions. The team does not work with data that comes with restrictive licences that inhibit reuse and publication.

## Data Sharing and Reuse

3D and 4D data can be openly and publicly shared and so can the software used to generate and process the data (these are under a GPL v3 licence mostly). Municipalities and other end users will use other types of software to analyse the data and they may also disseminate it via a viewer.

Potential users are domain experts (e.g. air quality, noise, mobility, flooding), Kadaster, municipalities, Ministry for Infrastructure and Environment, wider public.  

There is no legislation against the dissemination of data or data protection issues. There is broader discussion about the limits of this at the moment (eg whether building owners wish to withhold geographical information about their property in digital form), but there is no stated restriction on the research team sharing the data.

## Data Preservation and Archiving

Most of the data is generated for research purposes and underlies the research project, but as stated above third party uses will be possible as well.

Both the data and the tools are very dynamic, but it makes sense to store snapshots every so often (possibly every six or twelve months). These can be given a permanent DOI if necessary and will be made openly available.

Data will be stored such that 1 to 2 TB might need to be archived, but this will be explored on a yearly basis as data is created. 

5,000 Euros has been set aside to pay for the archiving and the open publication. Data will be archived at the 4TU Centre for Research Data (data.4tu.nl) 
