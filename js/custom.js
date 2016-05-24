// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - http://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth

(function ($, Drupal) {

  // /* Responsive videos */
  // Drupal.behaviors.fitVids = {
  //   attach: function(context) {
  //     $(document).ready(function(){
  //       // Target your .container, .wrapper, .post, etc.
  //       $("#page-wrapper").fitVids();
  //     });
  //   }
  // };


  // Performs a smooth page scroll to an anchor on the same page. 
  // Source: https://css-tricks.com/snippets/jquery/smooth-scrolling
  $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });


  /* Responsive tables, per jquery.responsive-tables.js in the /js directory of this theme */
  // Drupal.behaviors.responsiveTables = {
  //   attach: function(context) {
  //     $(document).ready(function(){
  //       // Target the tables, but not the calendar table, which has a class of .full
  //       $('table').not('.full').responsiveTables();
  //     });
  //   }
  // };


  // Your JavaScript code goes here:


})(jQuery, Drupal);