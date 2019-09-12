jQuery(document).ready(function(jQuery) {

   jQuery('#customers-testimonials').owlCarousel({
       loop: true,
       center: true,
       autoplay: true,
       nav:true,
       navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
       autoplayTimeout: 5000,
       responsiveClass:true,
       responsive:{
           0:{
               items:1,
               nav:true
           },
           768:{
               items:2,
               nav:true
           },
           1200:{
               items:3,
               nav:true,
           }
       }
   });
});
jQuery(window).scroll(function(){
   if(jQuery(window).scrollTop()>550){
       jQuery(".header") .addClass("menu");
   }
   else{
       jQuery(".header").removeClass("menu");
   }
})