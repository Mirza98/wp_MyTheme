$(document).ready(function(){


          $( "#sidebar-btn").click(function() {
          $("#sidebar").toggleClass("visible");

          $(".spanf").toggleClass("visible");
          $(".spanmi").toggleClass("visible");
          $(".spanl").toggleClass("visible");
          });


          $( ".overflov").click(function() {
          $("   #sidebar").removeClass("visible");

          $(".spanf").removeClass("visible");
          $(".spanmi").removeClass("visible");
          $(".spanl").removeClass("visible");
          });

         $(window).scroll(function(){
               $("#sidebar").removeClass("visible");
            });
       







        $( "#sidebar-btn").click(function() {
          $(".overflov").fadeIn();

         });


        $( ".overflov").click(function() {
          $(".overflov").fadeOut();

         });

        $(window).scroll(function(){
            $(".overflov").fadeOut();   
            });


        

         $( "#btn").click(function() {
          $(".span1").toggleClass("visible");
          $(".span2").toggleClass("visible");
          $(".spanm").toggleClass("visible");
         });










        var sirina = $("#header").width();
      
      

        if(sirina > 1020){ 
            $("body").addClass("withborder");
            $("body").animate({"margin-top":"0px"});
            $("#sidebar-btn").animate({"top":"0px"});
            $("#sidebar-btn span").addClass("black");
         }

        


    
      
       console.log(sirina);




        $(".totop").click(function(event){ 
              event.preventDefault();

            $("html,body").animate({scrollTop:0 },500);

        });



     


   });
