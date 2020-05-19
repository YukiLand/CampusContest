$(function(){
    $("#home-button").on({
     mouseenter: function(){
      $(this).attr('src','../image/Memory.gif');
    },
    mouseleave: function(){
      $(this).attr('src','../image/Memory.png');
    }
    });
    
  });