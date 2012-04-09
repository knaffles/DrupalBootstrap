Some notes about this theme:

1) You must add a menu block to either the top-navigation region or a sidebar for any navigation to appear. This theme does not automatically render navigation as most Drupal themes do.

2) This theme is a subthem of the Zentropy theme. You have to install the Zentropy theme on your site in order for this theme to work. Zentropy is here:

http://drupal.org/project/zentropy

3) This theme does not assume that you always want items "promoted to the front page" to actually appear in the front page content region. This if statement in page.tpl.php prevents that:

	<?php if (!$is_front): ?>
	  <?php print render($page['content']); ?>
	<?php endif; ?>

4) To override any templates, start by taking a copy of the appropriate template from the Zentropy theme templates and create a copy in this theme's template folder.