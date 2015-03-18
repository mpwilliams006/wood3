jQuery(document).ready(function ($) {


    $(window).stellar();

    var links = $('.navigation').find('li');
    slide = $('.slide');
    button = $('.button');
    mywindow = $(window);
    htmlbody = $('html,body');
	
	/**/	
	if (mywindow.scrollTop() < 1) {
		$('.navigation li[data-slide="1"]').addClass('active');
	}
	/**/


    slide.waypoint(function (event, direction) {

        dataslide = $(this).attr('data-slide');

        if (direction === 'down') {
            $('.navigation li[data-slide="' + dataslide + '"]').addClass('active').prev().removeClass('active');
			
			$('.navigation li[data-slide="1"]').removeClass('active');
			
        }
        else {
            $('.navigation li[data-slide="' + dataslide + '"]').addClass('active').next().removeClass('active');
        }

    });
 
    mywindow.scroll(function () {
        if (mywindow.scrollTop() == 0) {
            $('.navigation li[data-slide="1"]').addClass('active');
            $('.navigation li[data-slide="2"]').removeClass('active');
        }
    });

    /*function goToByScroll(dataslide) {
        htmlbody.animate({
            scrollTop: $('.slide[data-slide="' + dataslide + '"]').offset().top
        }, 2000, 'easeInOutQuint');
    }*/
	
	function goToByScroll(dataslide) {
		var goal = $('.slide[data-slide="' + dataslide + '"]').offset().top;
		if (mywindow.scrollTop()<goal) {
			var goalPx = goal + 5;
		} else {
			var goalPx = goal - 50;
		}
        htmlbody.animate({
            scrollTop: goalPx
        }, 2000, 'easeInOutQuint');
    }


    links.click(function (e) {
    	if($(this).attr('data-slide') != 12){
    		e.preventDefault();
        	dataslide = $(this).attr('data-slide');
        	goToByScroll(dataslide);
    	}
        
    });

    button.click(function (e) {
        e.preventDefault();
        dataslide = $(this).attr('data-slide');
        goToByScroll(dataslide);

    });
	
	//prettyPhoto
			$("a[rel^='prettyPhoto']").prettyPhoto();

			
	$("#slide1, #slide3, #slide5, #slide7").each(function () {
        var slide_h = $(this).height();
		
		$(this).css('background-size', '100% '+slide_h+'px');
		
    });
    
    $("#map_block").html("<iframe id='map1' height='500' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=2314+Crescent+Ave%E2%80%8E+Charlotte,+NC+28207&amp;aq=&amp;sll=33.624497,-80.926614&amp;sspn=5.240634,17.226563&amp;ie=UTF8&amp;hq=&amp;hnear=2314+Crescent+Ave,+Charlotte,+Mecklenburg,+North+Carolina+28207&amp;t=m&amp;z=14&amp;ll=35.204085,-80.823804&amp;output=embed'></iframe><iframe id='map2' src='https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3249.1806886696195!2d-80.85320500000002!3d35.475073!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8856a9821ee4dbdd%3A0x8541aa8a32c07a33!2s19428+Zion+Ave%2C+Cornelius%2C+NC+28031!5e0!3m2!1sen!2sus!4v1425336235082' height='500' frameborder='0' style='border:0'></iframe><div class='invisible wall not_desktop'></div>");


	
});







