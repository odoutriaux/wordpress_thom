// ThomasBlondel Theme JavaScript

$( document ).ready(function() { 
    
    $('#backtotop').click(function() {
        $('html,body').animate({scrollTop: 0}, 'slow');
    });

    $(window).scroll(function(){
        if($(window).scrollTop()==0){
            $('#backtotop').fadeOut();
        }
        if($(window).scrollTop()>100) {
            $('#backtotop').fadeIn();
        }
    });
	
});