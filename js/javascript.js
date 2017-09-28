jQuery(document).ready(function($){


    //header name
   $(".headername").append("THE VERGE");
   $(".headersname").append("");


    //footer name
   $(".footername").append("VERGE");

   
   




   $(".sidebar1").append("HOME");
   $(".sidebar2").append("ALL STORYS");
   

         $(".totop").click(function(event){ 
              event.preventDefault();

            $("html,body").animate({scrollTop:0 },500);

        });











// function rendertime(){ 
//      var myDate = new Date();
//      var year = myDate.getYear();
//          if(year < 1000){ 
//          year += 1900
//          }
//      var day = myDate.getDay();
//      var month = myDate.getMonth();
//      var daym = myDate.getDate();
//      var dayarray = new Array("Nedenja","Ponedeljak","Utorak","Srijeda","Četvrtak","Petak","Subota");
//      var montharrey = new Array("January","February","March","April","May","June","July","August","September","October","November","December");
     
//      var myClock = document.getElementById("clockDispley");
//      myClock.textContent = "" +dayarray[day]+ " " +daym+ " " +montharrey[month]+ " " +year;
//      myClock.innerText = "" +dayarray[day]+ " " +daym+ " " +montharrey[month]+ " " +year;

// }
// rendertime();

  });

