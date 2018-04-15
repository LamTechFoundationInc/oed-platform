jQuery(document).ready(function($) {
  if ($(".in-page-navigation").length>0) {
    var target = $(".in-page-navigation").closest(".content").addClass("in-page-navigation-container");
    $('body').addClass("in-page-navigation-active");
    $(window).load(function() {
      if ($(".toolbar-bar").length>0) {
        var toolbarHeight = parseInt($('body').css('paddingTop'));
      } else {
        var toolbarHeight = 0;
      }
      $('body').scrollspy({
        target: ".in-page-navigation-container",
        offset: drupalSettings.openelections.inPageNavigation.inPageNavigationOffset + toolbarHeight + 1
      });
    });
  }
});
