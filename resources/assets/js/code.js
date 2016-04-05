var main =function(){
    $(".icon-menu").click(function(){
    $('.menu').animate({
        left:'0px'},200);
        
    });
    
   
         $('.icon-close').click(function(){
    $('.menu').animate({
        left:'-300px'},200);
        

        
        }); 
       
};
  
     $("#title").on("mouseenter",function(){
      $("#title").css({"color":"brown","background-color":"white"});
        $(".css").slideUp(2000);
       
        });
     $("#title").on("mouseleave",function(){
      $("#title").css({"background-color":"white","color":"black"});
        $(".css").slideDown(2000);
       
        });
      $(".come_out_trigger").on("mouseenter",function(){
     
        $(".come_out").slideDown(3000);
        });
  $(".picture").hover(function(){
    $(".see").fadeIn(5000);
  });
  $(".see").on("mouseenter",function(){

 $(this).fadeToggle();
  });
  
 $(".come_out").on("mouseenter",function(){
     
        $(this).slideUp(3000);
        });
     

$(document).ready(main);