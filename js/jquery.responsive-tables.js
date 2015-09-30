/*global jQuery */
/*jshint browser:true */
/*!
* Responsive Tables
*
* Peter Alvarez - Dynamically move table headers to be on the same row as the td.
* 
* Add this CSS

@media screen and (max-width: 768px) {
  tr:first-child {
  border-top: 2px solid rgba(0,0,0,0.075);
  }

  tr.even, tr.odd {
  border-bottom: 2px solid rgba(0,0,0,0.05);
  }

  th, td {
  display: block;
  padding-left: 40%;
  text-align: left;
  background-color: rgba(0,0,0,0.025);
  }

  table tr td:before {
  content: attr(data-content);
  font-weight: bold;
  width: 35%;
  position: absolute;
  left: 1em;
  }

  table tr th {
  display: none;
  }

  th.views-field-edit-node, td.views-field-edit-node {
  text-align: left;
  }
}

  Usage:

  // Target the tables, but not the calendar table, which has a class of .full
  $('table').not('.full').responsiveTables();

*/

(function( $ ){

  "use strict";

  $.fn.responsiveTables = function( options ) {
    var settings = {};
    $.extend( settings, options );

    return this.each(function(){
      
      var $self = $(this);
      var index = 0;

      $(this).find('th').each(function(){
        index++;
        $self.find('td:nth-of-type(' + index + ')').attr('data-content',$(this).text());
      });        
    
    });
  };
// Works with either jQuery or Zepto
})( window.jQuery );