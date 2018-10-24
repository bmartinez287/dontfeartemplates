(function ($, Drupal, drupalSettings) {

  'use strict';

  Drupal.behaviors.dftLandingPage = {
    attach: function(context, settings) {
      $('.slider__items').slick({
        slidesToShow: 2
      });
    }
  };

})(jQuery, Drupal, drupalSettings);