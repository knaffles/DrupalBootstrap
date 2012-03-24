/* JavaScript for textfield Input Hints */
/* Uses the jQuery CoolInput plugin */
/* This will only work if the CoolInput Zentropy component is enabled or the jQuery CoolInput plugin is included manually */
/* In order to hide or remove the labels, please see the code comments below */

(function ($) {
  "use strict";
  
  Drupal.behaviors.zentropy_coolinput = {
    attach: function (context, settings) {
      $('input.form-text', context).each(function () {
        // If you want to keep the required asterisks, remove the last replace() call.
        var $t = $(this), $label = $t.prev('label'), text = $label.text().replace(' *', '');
        $t.coolinput(text);

        // Uncomment this line if you want to hide the element's labels.
//        $label.addClass('element-invisible element-focusable');

        // If you want to remove the labels from the DOM altogether you could uncomment the next line instead.
//        $label.remove();
      });
    }   
  };
  
  /* TO manually add input hints to other form elements using the jQuery CoolInput plugin: */
  /* Call $('selector', context).coolinput(); */
  /* For more information on the coolinput plugin's options check out: https://github.com/alexweber/jquery.coolinput */
}(jQuery));