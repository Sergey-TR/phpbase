$(document).ready (function() {

    $(".product__img").click(function(){
        let img = $(this);
        let src = img.attr('src');
        $("body").append("<div class='popup'>"+
                            "<div class='popup_bg'></div>"+                           
                            "<img src="+src+" class='popup_img' />"+
                            "</div>");
                            $(".popup").fadeIn(800); 
                            $(".popup").click(function(){	  
                                $(".popup").fadeOut(800);	
                                setTimeout(function() {	
                                  $(".popup").remove(); 
                                }, 800);
                            });

    }) 

});