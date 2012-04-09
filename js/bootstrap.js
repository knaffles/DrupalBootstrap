/* Place your theme's javascript here! */

(function($) {
  // Use strict mode to avoid errors: https://developer.mozilla.org/en/JavaScript/Strict_mode
  "use strict";

  $('.btn-navbar').click(function() {
  	$('.region-top-navigation nav.bar ul.menu').slideToggle('fast');
  });

  // To learn more about Javascript in Drupal 7 check out: http://drupal.org/node/756722
  Drupal.behaviors.bootstrap = {
    attach: function(context, settings) {
      // Do something awesome...
    }
  };

})(jQuery);