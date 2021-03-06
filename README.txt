Some notes about this theme:

1) You must add a menu block to either the top-navigation region or a sidebar for any navigation to appear. This theme does not automatically render navigation as most Drupal themes do.

If you want hover-over dropdowns to work, you will need to edit the top level links and set them to "Always show as expanded."

2) This theme is a subthem of the Zentropy theme. You have to install the Zentropy theme on your site in order for this theme to work. Zentropy is here:

http://drupal.org/project/zentropy

3) This theme does not assume that you always want items "promoted to the front page" to actually appear in the front page content region. This if statement in page.tpl.php prevents that:

	<?php if (!$is_front): ?>
	  <?php print render($page['content']); ?>
	<?php endif; ?>

4) To override any templates, start by taking a copy of the appropriate template from the Zentropy theme templates and create a copy in this theme's template folder.

5) Because this theme relies on respond.js to enable media queries in IE, and because respond.js does not parse @imported stylesheets, you have to "Aggregate and compress CSS stylesheets" (Configuration -> Performance) in order for IE to render properly. Once stylesheets are aggregated, Drupal then references them with link tags instead of @importing them (not sure why).