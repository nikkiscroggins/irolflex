(function ($) {

  $(document).ready(function() {
  $('.popup-youtube').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
});

   var g = "#6fc831";
   var gray = '#222222';
   var bl = '#00aeef';
//popup for the slider videos
$('#slide-10-layer-2').magnificPopup({
    items: {
        src: 'https://www.youtube-nocookie.com/embed/AKUB5FHMab4?rel=0&amp;&modestbranding=1&autoplay=1'
    },
    type: 'iframe'
});
 $('#slide-12-layer-1').magnificPopup({
    items: {
        src: 'https://www.youtube-nocookie.com/embed/l_GxzmmaZxg?rel=0&amp;&modestbranding=1&autoplay=1'
    },
    type: 'iframe'
});

//popup video for the human model clicks
  $('g#Quadricepts_front').magnificPopup({
    items: {
        src: 'https://www.youtube-nocookie.com/embed/dNjsac-HALU?rel=0&modestbranding=1&autoplay=1'
    },
    type: 'iframe'
});
            $('g#Quadricepts_front,#quadriceps').on('mouseenter', function () {
                $('[class*="figure-buttons"] div#quadriceps ').css({'transform': 'scale(1.2)'});
                $("g#Quadricepts_front [class*='st']").css("fill",g).fadeIn();
                $('[class*="figure-buttons"] div#quadriceps a').css({'color':bl});
            });

            $('g#Quadricepts_front,#quadriceps').on('mouseleave', function () {
                $('[class*="figure-buttons"] div#quadriceps ').css( 'transform', 'scale(1)');
                $("g#Quadricepts_front [class*='st']").css("fill", "url(#quads_10_)");
                $('[class*="figure-buttons"] div#quadriceps a').css({'color':gray});
            });

  $('g#hips_back_1_').magnificPopup({
    items: {
        src: 'https://www.youtube-nocookie.com/embed/dNjsac-HALU?rel=0&modestbranding=1&autoplay=1'
    },
    type: 'iframe'
});
            $('g#hips_back_1_,#hip-back').on('mouseenter', function () {
                $('[class*="figure-buttons"] div#hip-back ').css({'transform': 'scale(1.2)'});
                $("g#hips_back_1_ [class*='st']").css("fill",g).fadeIn();
                $('[class*="figure-buttons"] div#hip-back a').css({'color':bl});
            });

            $('g#hips_back_1_,#hip-back').on('mouseleave', function () {
                $('[class*="figure-buttons"] div#hip-back ').css( 'transform', 'scale(1)');
                $("g#hips_back_1_ [class*='st']").css("fill", "url(#quads_10_)");
                $('[class*="figure-buttons"] div#hip-back a').css({'color':gray});
            });

  $('g#Glutes_12_').magnificPopup({
    items: {
        src: 'https://www.youtube-nocookie.com/embed/rPEQAywVp40?rel=0&modestbranding=1&autoplay=1'
    },
    type: 'iframe'
});


$('g#Glutes_12_,#booty').on('mouseenter', function () {
                $('[class*="figure-buttons"] div#booty ').css({'transform': 'scale(1.2)'});
                $("g#Glutes_12_ [class*='st']").css("fill",g).fadeIn();
                $('[class*="figure-buttons"] div#booty a').css({'color':bl});
            });

            $('g#Glutes_12_,#booty').on('mouseleave', function () {
                $('[class*="figure-buttons"] div#booty ').css( 'transform', 'scale(1)');
                $("g#Glutes_12_ [class*='st']").css("fill", "url(#quads_10_)");
                $('[class*="figure-buttons"] div#booty a').css({'color':gray});
            });


 $('g#Lats_12_').magnificPopup({
    items: {
        src: 'https://www.youtube-nocookie.com/embed/KqNg97GPA9s?rel=0&modestbranding=1&autoplay=1'
    },
    type: 'iframe'
});


$('g#Lats_12_,#lats').on('mouseenter', function () {
                $('[class*="figure-buttons"] div#lats ').css({'transform': 'scale(1.2)'});
                $("g#Lats_12_ [class*='st']").css("fill",g).fadeIn();
                $('[class*="figure-buttons"] div#lats a').css({'color':bl});
            });

            $('g#Lats_12_,#lats').on('mouseleave', function () {
                $('[class*="figure-buttons"] div#lats ').css( 'transform', 'scale(1)');
                $("g#Lats_12_ [class*='st']").css("fill", "url(#quads_10_)");
                $('[class*="figure-buttons"] div#lats a').css({'color':gray});
            });

  $('g#Lumbo_12_').magnificPopup({
    items: {
        src: 'https://www.youtube-nocookie.com/embed/QJxAwPcVS2c?rel=0&modestbranding=1&autoplay=1'
    },
    type: 'iframe'
});

$('g#Lumbo_12_,#lumb').on('mouseenter', function () {
                $('[class*="figure-buttons"] div#lumb ').css({'transform': 'scale(1.2)'});
                $("g#Lumbo_12_ [class*='st']").css("fill",g).fadeIn();
                $('[class*="figure-buttons"] div#lumb a').css({'color':bl});
            });

            $('g#Lumbo_12_ ,#lumb').on('mouseleave', function () {
                $('[class*="figure-buttons"] div#lumb ').css( 'transform', 'scale(1)');
                $("g#Lumbo_12_ [class*='st']").css("fill", "url(#quads_10_)");
                $('[class*="figure-buttons"] div#lumb a').css({'color':gray});
            });

$('g#Delts_12_').magnificPopup({
    items: {
        src: 'https://www.youtube-nocookie.com/embed/1ucGjy2lW_0?rel=0&modestbranding=1&autoplay=1'
    },
    type: 'iframe'
});

        $('g#Delts_12_,#delt').on('mouseenter', function () {
                $('[class*="figure-buttons"] div#delt ').css({'transform': 'scale(1.2)'});
                $("g#Delts_12_ [class*='st']").css("fill",g).fadeIn();
                $('[class*="figure-buttons"] div#delt a').css({'color':bl});
            });

            $('g#Delts_12_ ,#delt').on('mouseleave', function () {
                $('[class*="figure-buttons"] div#delt ').css( 'transform', 'scale(1)');
                $("g#Delts_12_ [class*='st']").css("fill", "url(#quads_10_)");
                $('[class*="figure-buttons"] div#delt a').css({'color':gray});
            });

$('g#Hip_flexors_12_').magnificPopup({
    items: {
        src: 'https://www.youtube-nocookie.com/embed/Nwha0Zj50Ls?rel=0&modestbranding=1&autoplay=1'
    },
    type: 'iframe'
});

        $('g#Hip_flexors_12_,#flexors').on('mouseenter', function () {
                $('[class*="figure-buttons"] div#flexors ').css({'transform': 'scale(1.2)'});
                $("g#Hip_flexors_12_ [class*='st']").css("fill",g).fadeIn();
                $('[class*="figure-buttons"] div#flexors a').css({'color':bl});
            });

            $('g#Hip_flexors_12_,#flexors').on('mouseleave', function () {
                $('[class*="figure-buttons"] div#flexors ').css( 'transform', 'scale(1)');
                $("g#Hip_flexors_12_ [class*='st']").css("fill", "url(#quads_10_)");
                $('[class*="figure-buttons"] div#flexors a').css({'color':gray});
            });

$('g#abdominals').magnificPopup({
    items: {
        src: 'https://www.youtube-nocookie.com/embed/XziWxUcvgIQ?rel=0&modestbranding=1&autoplay=1'
    },
    type: 'iframe'
});

        $('g#abdominals,#abs').on('mouseenter', function () {
                $('[class*="figure-buttons"] div#abs ').css({'transform': 'scale(1.2)'});
                $("g#abdominals [class*='st']").css("fill",g).fadeIn();
                $('[class*="figure-buttons"] div#abs a').css({'color':bl});
            });

            $('g#abdominals,#abs').on('mouseleave', function () {
                $('[class*="figure-buttons"] div#abs ').css( 'transform', 'scale(1)');
                $("g#abdominals [class*='st']").css("fill", "url(#quads_10_)");
                $('[class*="figure-buttons"] div#abs a').css({'color':gray});
            });

 $('g#front_unused').magnificPopup({
    items: {
        src: 'https://www.youtube-nocookie.com/embed/UOuXMfLODCI?rel=0&modestbranding=1&autoplay=1'
    },
    type: 'iframe'
});

$('g#front_unused,#pex').on('mouseenter', function () {
                $('[class*="figure-buttons"] div#pex ').css({'transform': 'scale(1.2)'});
                $("g#front_unused [class*='st']").css("fill",g).fadeIn();
                $('[class*="figure-buttons"] div#pex a').css({'color':bl});
            });

            $('g#front_unused,#pex').on('mouseleave', function () {
                $('[class*="figure-buttons"] div#pex ').css( 'transform', 'scale(1)');
                $("g#front_unused [class*='st']").css("fill", "url(#quads_10_)");
                $('[class*="figure-buttons"] div#pex a').css({'color':gray});
            });


$('g#inner_thigh_unused_12_').magnificPopup({
    items: {
        src: 'https://www.youtube-nocookie.com/embed/0GBgJw8a4v8?rel=0&modestbranding=1&autoplay=1'
    },
    type: 'iframe'
});

$('g#inner_thigh_unused_12_,#inner-thigh').on('mouseenter', function () {
                $('[class*="figure-buttons"] div#inner-thigh ').css({'transform': 'scale(1.2)'});
                $("g#inner_thigh_unused_12_ [class*='st']").css("fill",g).fadeIn();
                $('[class*="figure-buttons"] div#inner-thigh a').css({'color':bl});
            });

            $('g#inner_thigh_unused_12_,#inner-thigh').on('mouseleave', function () {
                $('[class*="figure-buttons"] div#inner-thigh ').css( 'transform', 'scale(1)');
                $("g#inner_thigh_unused_12_ [class*='st']").css("fill", "url(#quads_10_)");
                $('[class*="figure-buttons"] div#inner-thigh a').css({'color':gray});
            });


$('g#tibialis_Anterior').magnificPopup({
    items: {
        src: 'https://www.youtube-nocookie.com/embed/iCGOqpqCZFA?rel=0&modestbranding=1&autoplay=1'
    },
    type: 'iframe'
});
            $('g#tibialis_Anterior,#tibialis').on('mouseenter', function () {
                $('[class*="figure-buttons"] div#tibialis ').css({'transform': 'scale(1.2)'});
                $("g#tibialis_Anterior [class*='st']").css("fill",g).fadeIn();
                $('[class*="figure-buttons"] div#tibialis a').css('color',bl);

            });

            $('g#tibialis_Anterior,#tibialis').on('mouseleave', function () {
                $('[class*="figure-buttons"] div#tibialis ').css({'transform': 'scale(1)'});
                $("g#tibialis_Anterior [class*='st']").css("fill", "url(#quads_10_)");
                $('[class*="figure-buttons"] div#tibialis a').css('color',gray);
            });

$('g#upper_arm_front_12_').magnificPopup({
    items: {
        src: 'https://www.youtube-nocookie.com/embed/b6mTEGiH2R0?rel=0&modestbranding=1&autoplay=1'
    },
    type: 'iframe'
});

 $('g#upper_arm_front_12_, #upper-front').on('mouseenter', function () {
                $('[class*="figure-buttons"] div#upper-front ').css({'transform': 'scale(1.2)'});
                $("g#upper_arm_front_12_ [class*='st']").css("fill",g).fadeIn();
                $('[class*="figure-buttons"] div#upper-front a').css('color',bl);

            });

            $('g#upper_arm_front_12_, #upper-front').on('mouseleave', function () {
                $('[class*="figure-buttons"] div#upper-front ').css({'transform': 'scale(1)'});
                $("g#upper_arm_front_12_ [class*='st']").css("fill", "url(#quads_10_)");
                $('[class*="figure-buttons"] div#upper-front a').css('color',gray);
            });


$('g#forearm_front').magnificPopup({
    items: {
        src: 'https://www.youtube-nocookie.com/embed/rd1IsLEp2Pk?rel=0&modestbranding=1&autoplay=1'
    },
    type: 'iframe'
});
            $('g#forearm_front, #extension-handle-arm').on('mouseenter', function () {
                $('[class*="figure-buttons"] div#extension-handle-arm ').css({'transform': 'scale(1.2)'});
                $("g#forearm_front [class*='st']").css("fill",g).fadeIn();
                $('[class*="figure-buttons"] div#extension-handle-arm a').css('color',bl);

            });

            $('g#forearm_front, #extension-handle-arm').on('mouseleave', function () {
                $('[class*="figure-buttons"] div#extension-handle-arm ').css({'transform': 'scale(1)'});
                $("g#forearm_front [class*='st']").css("fill", "url(#quads_10_)");
                $('[class*="figure-buttons"] div#extension-handle-arm a').css('color',gray);
            });



$('g#Feet_Front').magnificPopup({
    items: {
        src: 'https://www.youtube-nocookie.com/embed/4g4wK3RJYQE?rel=0&modestbranding=1&autoplay=1'
    },
    type: 'iframe'
});
            $('g#Feet_Front,#foot-muscles').on('mouseenter', function () {
                $('[class*="figure-buttons"] div#foot-muscles ').css({'transform': 'scale(1.2)'});
                $("g#Feet_Front [class*='st']").css("fill",g).fadeIn();
                $('[class*="figure-buttons"] div#foot-muscles a').css('color',bl);

            });

            $('g#Feet_Front,#foot-muscles').on('mouseleave', function () {
                $('[class*="figure-buttons"] div#foot-muscles ').css({'transform': 'scale(1)'});
                $("g#Feet_Front [class*='st']").css("fill", "url(#quads_10_)");
                $('[class*="figure-buttons"] div#foot-muscles a').css('color',gray);
            });

    $('g#hands_front').magnificPopup({
    items: {
        src: 'https://www.youtube-nocookie.com/embed/shK6zRiaJtM?rel=0&modestbranding=1&autoplay=1'
    },
    type: 'iframe'
    });
            $('g#hands_front,#wrist').on('mouseenter', function () {
                $('[class*="figure-buttons"] div#wrist ').css({'transform': 'scale(1.2)'});
                $("g#hands_front [class*='st']").css("fill",g).fadeIn();
                $('[class*="figure-buttons"] div#wrist a').css('color',bl);

            });

            $('g#hands_front,#wrist').on('mouseleave', function () {
                $('[class*="figure-buttons"] div#wrist ').css({'transform': 'scale(1)'});
                $("g#hands_front [class*='st']").css("fill", "url(#quads_10_)");
                $('[class*="figure-buttons"] div#wrist a').css('color',gray);
            });


$('g#Biceps_Triceps_Back').magnificPopup({
    items: {
        src: 'https://www.youtube-nocookie.com/embed/aKAUo30fk44?rel=0&modestbranding=1&autoplay=1'
    },
    type: 'iframe'
});
            $('g#Biceps_Triceps_Back,#biceps-triceps').on('mouseenter', function () {
                $('[class*="figure-buttons"] div#biceps-triceps ').css({'transform': 'scale(1.2)'});
                $("g#Biceps_Triceps_Back [class*='st']").css("fill",g).fadeIn();
                $('[class*="figure-buttons"] div#biceps-triceps a').css('color',bl);

            });

            $('g#Biceps_Triceps_Back,#biceps-triceps').on('mouseleave', function () {
                $('[class*="figure-buttons"] div#biceps-triceps ').css({'transform': 'scale(1)'});
                $("g#Biceps_Triceps_Back [class*='st']").css("fill", "url(#quads_10_)");
                $('[class*="figure-buttons"] div#biceps-triceps a').css('color',gray);
            });



$('g#Upper_arm_biceps').magnificPopup({
    items: {
        src: 'https://www.youtube-nocookie.com/embed/mc13xBGUOzc?rel=0&modestbranding=1&autoplay=1'
    },
    type: 'iframe'
});
            $('g#Upper_arm_biceps,#biceps').on('mouseenter', function () {
                $('[class*="figure-buttons"] div#biceps ').css({'transform': 'scale(1.2)'});
                $("g#Upper_arm_biceps [class*='st']").css("fill",g).fadeIn();
                $('[class*="figure-buttons"] div#biceps a').css('color',bl);

            });

            $('g#Upper_arm_biceps,#biceps').on('mouseleave', function () {
                $('[class*="figure-buttons"] div#biceps ').css({'transform': 'scale(1)'});
                $("g#Upper_arm_biceps [class*='st']").css("fill", "url(#quads_10_)");
                $('[class*="figure-buttons"] div#biceps a').css('color',gray);
            });




$('g#Calves_Back').magnificPopup({
    items: {
        src: 'https://www.youtube-nocookie.com/embed/SGSY3UzVGtI?rel=0&modestbranding=1&autoplay=1'
    },
    type: 'iframe'
});
             $('g#Calves_Back,#soleus').on('mouseenter', function () {
                    $('[class*="figure-buttons"] div#soleus ').css({'transform': 'scale(1.2)'});
                    $("g#Calves_Back [class*='st']").css("fill",g).fadeIn();
                    $('[class*="figure-buttons"] div#soleus a').css('color',bl);
            });

            $('g#Calves_Back,#soleus').on('mouseleave', function () {
                $('[class*="figure-buttons"] div#soleus ').css({'transform': 'scale(1)'});
                $("g#Calves_Back [class*='st']").css("fill", "url(#quads_10_)");
                $('[class*="figure-buttons"] div#soleus a').css('color',gray);
            });



$('g#hamstrings_back').magnificPopup({
    items: {
        src: 'https://www.youtube-nocookie.com/embed/P88rEWC2trE?rel=0&modestbranding=1&autoplay=1'
    },
    type: 'iframe'
});
            $('g#hamstrings_back,#hamstring').on('mouseenter', function () {
                $('[class*="figure-buttons"] div#hamstring ').css({'transform': 'scale(1.2)'});
                $("g#hamstrings_back [class*='st']").css("fill",g).fadeIn();
                $('[class*="figure-buttons"] div#hamstring a').css('color',bl);

            });

            $('g#hamstrings_back,#hamstring').on('mouseleave', function () {
                $('[class*="figure-buttons"] div#hamstring ').css({'transform': 'scale(1)'});
                $("g#hamstrings_back [class*='st']").css("fill", "url(#quads_10_)");
                $('[class*="figure-buttons"] div#hamstring a').css('color',gray);
            });


$('g#Elbows_and_Tendonitis').magnificPopup({
    items: {
        src: 'https://www.youtube-nocookie.com/embed/XCjiqqyOlt4?rel=0&modestbranding=1&autoplay=1'
    },
    type: 'iframe'
});
            $('g#Elbows_and_Tendonitis,#elbow-tendonitis').on('mouseenter', function () {
                $('[class*="figure-buttons"] div#elbow-tendonitis ').css({'transform': 'scale(1.2)'});
                $("g#Elbows_and_Tendonitis [class*='st']").css("fill",g).fadeIn();
                $('[class*="figure-buttons"] div#elbow-tendonitis a').css('color',bl);

            });

            $('g#Elbows_and_Tendonitis,#elbow-tendonitis').on('mouseleave', function () {
            $('[class*="figure-buttons"] div#elbow-tendonitis ').css({'transform': 'scale(1)'});
                $("g#Elbows_and_Tendonitis [class*='st']").css("fill", "url(#quads_10_)");
                $('[class*="figure-buttons"] div#elbow-tendonitis a').css('color',gray);
            });


$('g#Glutes_Outward').magnificPopup({
    items: {
        src: 'https://www.youtube-nocookie.com/embed/XCjiqqyOlt4?rel=0&modestbranding=1&autoplay=1'
    },
    type: 'iframe'
});
            $('g#Glutes_Outward,#out-glute').on('mouseenter', function () {
                $('[class*="figure-buttons"] div#out-glute').css({'transform': 'scale(1.2)'});
                $("g#Glutes_Outward [class*='st']").css("fill",g).fadeIn();
                $('[class*="figure-buttons"] div#out-glute a').css('color',bl);

            });

            $('g#Glutes_Outward,#out-glute').on('mouseleave', function () {
            $('[class*="figure-buttons"] div#out-glute ').css({'transform': 'scale(1)'});
                $("g#Glutes_Outward [class*='st']").css("fill", "url(#quads_10_)");
                $('[class*="figure-buttons"] div#out-glute a').css('color',gray);
            });

$('g#Neck_Muscles_Back').magnificPopup({
    items: {
        src: 'https://www.youtube-nocookie.com/embed/pPIew5yPD4I?rel=0&modestbranding=1&autoplay=1'
    },
    type: 'iframe'
});
            $('g#Neck_Muscles_Back,#multi-strap').on('mouseenter', function () {
                $('[class*="figure-buttons"] div#multi-strap ').css({'transform': 'scale(1.2)'});
                $("g#Neck_Muscles_Back [class*='st']").css("fill",g).fadeIn();
                $('[class*="figure-buttons"] div#multi-strap a').css('color',bl);

            });

            $('g#Neck_Muscles_Back,#multi-strap').on('mouseleave', function () {
            $('[class*="figure-buttons"] div#multi-strap ').css({'transform': 'scale(1)'});
                $("g#Neck_Muscles_Back [class*='st']").css("fill", "url(#quads_10_)");
                $('[class*="figure-buttons"] div#multi-strap a').css('color',gray);
            });
$('g#hands_back').magnificPopup({
    items: {
        src: 'https://www.youtube-nocookie.com/embed/shK6zRiaJtM?rel=0&modestbranding=1&autoplay=1'
    },
    type: 'iframe'
});
            $('g#hands_back,#carpal-tunnel').on('mouseenter', function () {
            $('[class*="figure-buttons"] div#carpal-tunnel ').css({'transform': 'scale(1.2)'});
                $("g#hands_back [class*='st']").css("fill",g).fadeIn();
                $('[class*="figure-buttons"] div#carpal-tunnel a').css('color',bl);

            });

            $('g#hands_back,#carpal-tunnel').on('mouseleave', function () {
            $('[class*="figure-buttons"] div#carpal-tunnel ').css({'transform': 'scale(1)'});
                $("g#hands_back [class*='st']").css("fill", "url(#quads_10_)");
                $('[class*="figure-buttons"] div#carpal-tunnel a').css('color',gray);
            });
})(jQuery);
