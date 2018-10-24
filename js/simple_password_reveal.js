/**
 * @file
 * Attaches behaviors for the custom Google Maps.
 */

(function ($, Drupal) {
  'use strict';

  jQuery('#edit-simple-password-reveal-checkbox').prop( "checked", false );

  var selector = jQuery('input[data-drupal-selector^="edit-pass"]');

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
