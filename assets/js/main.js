(function ($) {
    'use strict';
    

    $("#btnMenu").on("click", function(){
      $("#mainMenu").addClass("main-menu--active");
    });

    $("#btnMenuClose").on("click", function(){
      $("#mainMenu").removeClass("main-menu--active");
    });

})(jQuery);