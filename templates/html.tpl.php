<?php
/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE tag.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 */
$html_attributes = "lang=\"{$language->language}\" dir=\"{$language->dir}\" {$rdf->version}{$rdf->namespaces}";
?>
<?php print $doctype; ?>
<!--[if lt IE 7]><html <?php print $html_attributes; ?> class="no-js ie lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7 ]><html <?php print $html_attributes; ?> class="no-js ie ie7 lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8 ]><html <?php print $html_attributes; ?> class="no-js ie ie8 lt-ie9"><![endif]-->
<!--[if IE 9 ]><html <?php print $html_attributes; ?> class="no-js ie ie9"><![endif]-->
<!--[if IEMobile 7 ]><html <?php print $html_attributes; ?> class="no-js ie iem7"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php print $html_attributes; ?> class="no-js"><!--<![endif]-->
  <head<?php print $rdf->profile; ?>>

    <?php print $head; ?>

    <!-- Mobile viewport optimization h5bp.com/ad -->
    <!-- http://t.co/dKP3o1e -->
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0" />

    <!-- iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

    <!-- Mobile IE allows us to activate ClearType technology for smoothing fonts for easy reading -->
    <meta http-equiv="cleartype" content="on" />

    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  </head>
  <body class="<?php print $classes; ?>" <?php print $attributes; ?>>

    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>

    <?php // Prompt IE users to install Chrome Frame ?>
    <?php print $prompt_cf; ?>

    <?php print $scripts; ?>
  </body>
</html>