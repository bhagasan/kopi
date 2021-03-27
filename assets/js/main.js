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

    $("#action_sobek").on("mousedown touchstart", function(){
      var container = $(".img-sobek-container");
      var containerX = container.offset().left;
      var maxMovement = container.width();
      var movement = 0;
      // var zip1 = $("#sachet_a_1");
      $("body").on("mousemove touchmove", function(e){
        movement = e.pageX - containerX;
        if(movement >= 0 && movement <= maxMovement){
          $("#action_sobek").css({
            transform: 'translateX('+movement+'px)',
            transitionDuration: '0s'
          });
          ////////////////// #OPSI 1
          // zip1.css({
          //   transform: 'rotate('+movement/50+'deg)',
          //   transitionDuration: '0s'
          // })
          ////////////////// !OPSI 1
        }

        ////////////////// #OPSI 2
        // $('html, body').animate({
        //     scrollTop: movement
        // }, 1);
        ////////////////// !OPSI 2
      });
      
      $("body").on("mouseup touchend", function(){
        var devider = maxMovement*1/4;
        $("body").off("mousemove touchmove");
        if(movement <= devider ){
          $("#action_sobek").css({
            transform: 'translateX(0)',
            transitionDuration: '.3s'
          });
          ////////////////// #OPSI 1
          // zip1.css({
          //   transform: 'rotate(0deg)',
          //   transitionDuration: '.3s'
          // })
          ////////////////// !OPSI 1
        }else{
          $("#action_sobek").css({
            transform: 'translateX('+maxMovement+'px) scale(1.5)',
            transitionDuration: '.3s',
            opacity: 0
          });
          ////////////////// #OPSI 1
          // $(".img-sobek-container").addClass("img-sobek-container-rotate");
          ////////////////// !OPSI 1

          ////////////////// #OPSI 2
          $('html, body').animate({
              scrollTop: $("#trigger5").offset().top
          }, 2000);
          ////////////////// !OPSI 2
        }
      })
    });

    $(".link-thumb").on("mouseover", function(){
      var target = $(this).attr("data-target");
      $(".main-menu-thumb").removeClass("main-menu-thumb--active");
      $(target).addClass("main-menu-thumb--active");
    })

    ////////////////// #OPSI 2
    $(window).scroll(function (event) {
      var scroll = $(window).scrollTop();
      if(scroll > 150){
        $("#action_sobek").css({
            transitionDuration: '.3s',
            opacity: 0
          });
      }
    });
    ////////////////// !OPSTI 2

})(jQuery);

// $("#action_sobek").on("mousedown", function(){
//       var container = $(".img-sobek-container").offset().left;
//       $("body").on("mousemove", function(e){
//         var movement = e.pageX - container;
//         // console.log(movement);
//         $("#action_sobek").css('transform', 'translateX('+ e.pageX +'px) scale(1.1) !important')
//       })
//     });