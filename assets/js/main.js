(function ($) {
    'use strict';
    

    $("#btnMenu").on("click", function(){
      $("#mainMenu").toggleClass("main-menu--active");
      if($("#mainMenu").hasClass("main-menu--active")){
        $("body").css({
          "height":"100vh",
          "overflow":"hidden"
        });
      }else{
        $("body").css({
          "height":"auto",
          "overflow":"auto"
        });
      }
    });

    $("#btnMenuClose").on("click", function(){
      $("#mainMenu").removeClass("main-menu--active");
    });

    $("#action_sobek").on("mousedown", function(){
      var container = $(".img-sobek-container");
      var containerX = container.offset().left;
      var maxMovement = container.width();
      var movement = 0;
      var zip1 = $("#sachet_a_1");
      $("body").on("mousemove", function(e){
        movement = e.pageX - containerX;
        if(movement >= 0 && movement <= maxMovement){
          $("#action_sobek").css({
            transform: 'translateX('+movement+'px)',
            transitionDuration: '0s'
          });
          zip1.css({
            transform: 'rotate('+movement/50+'deg)',
            transitionDuration: '0s'
          })
        }
      });
      $("body").on("mouseup", function(){
        var devider = maxMovement*2/3;
        $("body").off("mousemove");
        if(movement <= devider ){
          $("#action_sobek").css({
            transform: 'translateX(0)',
            transitionDuration: '.3s'
          });
          zip1.css({
            transform: 'rotate(0deg)',
            transitionDuration: '.3s'
          })
        }else{
          $("#action_sobek").css({
            transform: 'translateX('+maxMovement+'px) scale(1.5)',
            transitionDuration: '.3s',
            opacity: 0
          });
          $(".zip-container").css({
            transform: 'rotate(12deg) translate(50px, -50px)',
            opacity: 0
          });
          $(".img-sobek-container").addClass("img-sobek-container-rotate");
        }
      })
    });

    $(".link-thumb").on("mouseover", function(){
      var target = $(this).attr("data-target");
      $(".main-menu-thumb").removeClass("main-menu-thumb--active");
      $(target).addClass("main-menu-thumb--active");
    })

})(jQuery);

// $("#action_sobek").on("mousedown", function(){
//       var container = $(".img-sobek-container").offset().left;
//       $("body").on("mousemove", function(e){
//         var movement = e.pageX - container;
//         // console.log(movement);
//         $("#action_sobek").css('transform', 'translateX('+ e.pageX +'px) scale(1.1) !important')
//       })
//     });