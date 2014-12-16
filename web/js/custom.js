 function my_kwicks(){
    $('.kwicks').kwicks({
		duration: 300,   
        max: 133,  
        spacing:  0  
    });
}  

 $(document).ready(function(){					
	my_kwicks();

});

 $(document).ready(function(){

    $(".jj a").hover(function() {
	  $(this).next("em").animate({opacity: "show", top: "-75"}, "slow");
	}, function() {
	  $(this).next("em").animate({opacity: "hide", top: "-85"}, "fast");
	});
});