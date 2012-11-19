$(function() {
  var Slide = $('#slide').switchable({
    putTriggers: 'appendTo',
    panels: 'li',
    initIndex: 0, // display the first panel
    effect: 'scrollRight', // taking effect when autoplay == true
    easing: 'cubic-bezier(.455, .03, .515, .955)', // equal to 'easeInOutQuad'
    end2end: true, // if set to true, loop == true
    loop: false, // not taking effect, because end2end == true
    autoplay: true,
    interval: 5,
    api: true // if set to true, Switchable returns API
  });
   
  $(".tabs").each(function(index, item){
       var $item = $(item);
      
       $item.find(".tabbtn").each(function(index, btn){
           $(btn).mouseover(function(){
               $item.find(".tabcur").removeClass("tabcur");
               $(this).addClass("tabcur");
               $item.find(".tabcont").hide().eq(index).show();
           });
       });
   });

   $("#site-nav .menu-item").each(function(index, item){
        $(item).mouseenter(function(){
            $(item).addClass("hover");
        }).mouseleave(function(){
            $(item).removeClass("hover");
        });
   });

 
});