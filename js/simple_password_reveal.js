/**
 * @file
 * Attaches behaviors for the custom Google Maps.
 */

(function ($, Drupal) {
  'use strict';

  var selector = jQuery('#edit-pass, #edit-current-pass, #edit-pass-pass1, #edit-pass-pass2');

  selector.attr('type', 'text');

  jQuery('#edit-simple-password-reveal-checkbox').change(function () {
    if (jQuery(this).is(':checked')) {
      selector.attr('type', 'password');
    }
    else {
      selector.attr('type', 'text');
    }
  });
})(jQuery, Drupal);
