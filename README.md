## Introduction

This project is a compilation of [Cornerstone](https://theme.co/cornerstone/) elements I have written for various purposes.

## Elements in this Set

### Icon Box

*Description*: A box that has an icon on the side.

* Need to make this more user-friendly!

### Image Box

*Description*: Aesthetically identical to the icon box, but takes images (ie SVGs) instead of the fontawesome library.

* This should be bundled in with the icon box, ideally.

### Header & Subheader

*Description*: An element that allows the display of a main header and subheader next to each other.

* I don't know why, but the CSS isn't sticking outside of my test environment. Something to look into later...

### Image Tabs

*Description*: Originally this was supposed to be more dynamic. However, due to work and time constraints, I had to use a more hacky and less flexible solution for now.

Files in original *Cornerstone* plugin that make up the tabs:

* `/includes/shortcodes/tabs.php`
* `/includes/elements/_alternate/tab.php`
* `/includes/classes/builder/class-shortcode-generator.php`

## To-Do List

* Provide instructions on how to make this set more modular.
* Write a basic tutorial on how to make your own elements
* Better descriptions for the elements included in this set
* SVG (Copy and paste or upload) elements

### (Loose) Changelog

`0.1.0` - Initial version. Included the *Iconbox* and *Header & Subheader* elements.

`0.2.0` - Added the *Imagebox* element.

`0.2.1` - Added the margin compensation to the *Imagebox* element.

`0.3.0` - Added Image Tabs element.

`0.3.1` - Fixed shortcode compatibility issue.

`0.3.2` - Added header and subheader to image tabs element, plus a `div` wrapper to elements.
