#Imagine#

Image manipulation library for PHP 5.3 inspired by Python's PIL and other image
libraries.

##Requirements##

The Imagine library has the following requirements:

 - PHP 5.3+

Depending on the chosen Image implementation, you may need one of the following:

 - GD2
 - Imagick
 - Gmagick

##Basic Principles##

The main purpose of Imagine is to provide all the necessary functionality to bring all native low level image processing libraries in PHP to the same simple and intuitive OO API.

Several things are necessary to accomplish that:

* Image manipulation tools, such as resize, crop, etc.
* Drawing API - to create basic shapes and advanced charts, write text on the image
* Masking functionality - ability to apply black&white or grayscale images as masks, leading to semi-transparency or absolute transparency of the image the mask is being applied to

The above tools should be the basic foundation for a more powerful set of tools that are called ``Filters`` in Imagine.

Some of the ideas for upcoming filters:

* Charting and graphing filters - pie and bar charts, linear graphs with annotations
* Reflection - apple style
* Rounded corners - web 2.0

## Documentation ##

 - [Introduction](/avalanche123/Imagine/blob/master/docs/en/introduction.rst "Introduction")
 - [Coordinate System](/avalanche123/Imagine/blob/master/docs/en/coordinates.rst "Coordinate System")
 - [Filters](/avalanche123/Imagine/blob/master/docs/en/filters.rst "Filters and Transformations")
 - [Image](/avalanche123/Imagine/blob/master/docs/en/image.rst "Image")
 - [Drawing](/avalanche123/Imagine/blob/master/docs/en/drawing.rst "Drawing")
 - [Exceptions](/avalanche123/Imagine/blob/master/docs/en/exceptions.rst "Exceptions")

## Presentations ##

 - [Introduction to Imagine](http://www.slideshare.net/avalanche123/introduction-toimagine)