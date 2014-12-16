 // When the document loads do everything inside here ...  
   $(document).ready(function(){  


         // switch all tabs off
         $("div.div_contenido:not(.active)").css("display", "none");

     // When a link is clicked  
     $("a.tab").click(function () {  
           
         // switch all tabs off  
         $("a.active").removeClass("active");
           
         // switch this tab on  
         $(this).addClass("active"); 

          
         // slide all elements with the class 'content' up  
         $("div.div_contenido").hide();
           
         // Now figure out what the 'title' attribute value is and find the element with that id.  Then slide that down.  
          var content_show = $(this).attr("title");  
         $("#"+content_show).slideDown("normal");
          
     });  
   
   });   
