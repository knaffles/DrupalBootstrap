Important notes about this theme:

* This theme assumes that you will assign a menu block to either the navigation region (for top nav), or either the first or second sidebar (for left/right nav). Navigation does not appear by default



ORIGINAL README

================

### Zentropy - The ultimate non-grid based responsive HTML5 base theme ###

This is the directory for all your CSS files.

if you add a new stylesheet here, you must call it from the theme .info file.

The stylesheets are organized as follows:

  * Base styles in root folder
  * Internet Explorer-specific styles in "ie" folder
  * Responsive layout styles in "layout" folder

Feel free to reorganize as you see fit, just remember to adjust the paths in the .info and template.php files!


The default stylesheets included are:
-------------------------------------

 * bootstrap.css - Base styles for your theme, these should be device-agnostic.
 * bootstrap-maintenance.css - Specific styles for Drupal's maintenance page.

 * ie/bootstrap-ielt9.css - Styles for Internet Explorer 8 and below
 * ie/bootstrap-ielt8.css - Styles for Internet Explorer 7 and below
 
 * layout/bootstrap-320.css - Styles for screens between 320px and 480px
 * layout/bootstrap-480.css - Styles for screens between 480px and 768px
 * layout/bootstrap-768.css - Styles for screens between 768px and 992px
 * layout/bootstrap-992.css - Styles for screens between 992px and 1382px
 * layout/bootstrap-1382.css - Styles for screens 1382px and larger
 * layout/bootstrap-retina.css - Styles for retina display devices (used to include higher resolution images)


Creating your own responsive styles:
------------------------------------

If for whatever reason you aren't happy with the default media queries provided by Zentropy it is EASY to create your own!

  * Define what screen size (or device) you are targetting
  * Determine the media query (Tip: the current ones in bootstrap.info should get you started fast)
  * Create the stylesheet (suggestion, pick a name using the same standard as the others, for organization)
  * Add the media query to bootstrap.info
  * Profit! :)