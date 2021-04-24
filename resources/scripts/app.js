/**
 * External Dependencies
 */
import 'jquery';
import 'owl.carousel';

$(document).ready(() => {
  /**
   * Collapse plugin
   *
   * @param JQuery
   */
  (($) => {
    const trigger = $('[data-toggle="collapse"]');

    const createCollapseFor = (trigger) => {
      trigger.on('click', event => {
        event.preventDefault();
        $(trigger.data('target')).slideToggle('fast');
      });
    };

    if (trigger.length) {
      createCollapseFor(trigger);
    }
  })($);

  /**
   * OWL plugin
   *
   * @param JQuery
   */
  (($) => {
    const owl = $('.owl-carousel');

    const createOwlInstance = el => $(el).owlCarousel($(el).data());

    if (owl.length) {
      owl.each((index, el) => createOwlInstance(el));
    }
  })($);
});
