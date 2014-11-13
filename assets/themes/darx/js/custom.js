/*browserfix*/

jQuery(document).ready(function(){
if(jQuery.browser.opera)
	jQuery('.homeRacent .category a, .blogpostcategory .meta .category a, .item4 h4 a,.blogpost .author a,#portitems2 .category a,.blogpost .posted-date a,.blogpost .tags a,.portcategories a').css('line-height','1px');

	if(/chrom(e|ium)/.test(navigator.userAgent.toLowerCase()) || jQuery.browser.safari){
		jQuery('.moreButton').css('line-height','20px');
	}
	
});
	
jQuery(document).ready(function(){

  
		var $container = jQuery('#portitems4')

		var number;
		// initialize Isotope
			if($container.width() > 1680){
				number=6;
				numbervar = 5;
				numbertemp = 4;
			}
			
			if($container.width() > 1280 && $container.width() < 1680){
				number=6;
				numbervar = 5;
				numbertemp = 4;				
			}	
			

			if($container.width() < 1280 && $container.width()>900){
				number=4;
				numbervar = 3;
				numbertemp = 3;
			}	
			if($container.width() > 460 && $container.width() < 900){
				number=2;
				numbervar = 2;
				
			}				
			if($container.width() < 460){
				number=1;
				numbervar = 2;
			}			
			
	
		var temp = '';
		var widthImage = $container.width() / number -1;	
		var counter = 0;
		var image = '';
		var count = 0;
		var numberTempNew = 0;
		jQuery('.portfolio.full .image').each(function(index){
			
			if((counter % 2) == 0 ){
				image = 'small';
			}
			else{
				image = 'big';
			}
			

			if(numbervar != 2){
				if(((counter % numbervar) == 0) && (counter > 0) && (temp == '')){
					counter = 1;
					temp = 'secund';
				}
			}
			if((temp == '')){
				counter++;
		
				if(numbervar == 2 && counter == 5)
					counter = 0;
				if(numbervar == 2 && counter == 2)
					counter++;
			}	
			if(numbervar != 2){								
				if((temp == 'secund')){
					counter = 1;
					count++;
					if(count == numbertemp){
						count = 0;
						temp = 'third';
						counter = 2;
					}
				}	
				if((temp == 'third')){
					counter = 2;
					count++;
					if(numbertemp == 3){
						numberTempNew = 3;
					}	
					else{
						numberTempNew = numbertemp;
					}

					if(count == numberTempNew){
						count = 0;
						temp = '';
						counter = 0;
					}								
				}
			}	
		

		var url = jQuery(this).find('.newimage').attr('src');
		if(image == 'big'){
			var sort = jQuery(this).parent('.item4').attr('data-category');		
			jQuery(this).parent('.item4').attr('class','item4 big isotope-item '+sort);
			var heightImage = widthImage / 0.5975;
			if(number == 2 || number == 1)
				var top = heightImage -130;	
			else
				var top = heightImage  -128;	
			jQuery(this).find('.newimage').attr('src',url+'h='+heightImage+'&w='+widthImage);
			jQuery('.portfolio.full .item4.big,.portfolio.full .item4.big .overdefult').css('height',heightImage);
			jQuery(this).parent('.item4').find('.detailsoverdefault').css('margin-top',top);							
			}
		else {
			var sort = jQuery(this).parent('.item4').attr('data-category');
			jQuery(this).parent('.item4').attr('class','item4 small isotope-item '+sort);
			var heightImage = widthImage / 1.195;
			if(number == 2 || number == 1)
				var top = heightImage -130;	
			else
				var top = heightImage -128;				
			jQuery(this).find('.newimage').attr('src',url+'h='+heightImage+'&w='+widthImage)	
			jQuery('.portfolio.full .item4.small,.portfolio.full .item4.small .overdefult').css('height',heightImage);
			jQuery(this).parent('.item4').find('.detailsoverdefault').css('margin-top',top);				
		}

		});


});


jQuery(document).ready(function(){
	jQuery('ul.menu > li').hover(function(){
		jQuery(this).find('ul').stop(true,true).fadeIn(300);

	},
	  function () {
		jQuery(this).find('ul').stop(true,true).fadeOut(300);
	  });
	
});

jQuery(document).ready(function(){
jQuery(".gallery a").attr("rel", "lightbox[gallery]");

});

/*to top*/

jQuery(document).ready(function($){
	$(".totop ").hide();

});

jQuery(window).bind('scroll', function(){
if(jQuery(this).scrollTop() > 200) 
 jQuery(".totop ").fadeIn(200);
else
 jQuery(".totop ").fadeOut(200);
 
if(jQuery(this).scrollTop() > 5) 
 jQuery("#headerwrap").addClass('headerwrapdown');
else
 jQuery("#headerwrap").removeClass('headerwrapdown');

});


jQuery(document).ready(function(){
	jQuery(function() {
		jQuery( ".accordion" ).accordion({
			autoHeight: false,
			navigation: true
		});
	});
	jQuery(function() {
		jQuery( ".progressbar" ).progressbar();
	});

});
function loadprety(){

jQuery(".gallery a").attr("rel", "lightbox[gallery]").prettyPhoto({theme:'light_rounded',overlay_gallery: false,show_title: false});

}
				


jQuery(document).ready(function(){	
	
jQuery('.image').each(function(index,el){
          
       //find this link's child image element
      var img = jQuery(this).find('img');
	  var loading = jQuery(this).children('div');
      //hide the image and attach the load event handler
	  jQuery('.overlink').hide();
	  jQuery('.overgallery').hide();
	  jQuery('.overvideo').hide();
	  jQuery('.overdefult').hide();	  
	  jQuery('.overport').hide();  

	  
      jQuery(img).hide();
	  jQuery(window).load(function () {
            //remove the link's "loading" classname
            //loading.removeClass('loading');
			jQuery('.one_half').find('.loading').attr('class', '');
			jQuery('.one_third').find('.loading').attr('class', '');			
			jQuery('.portfolio').find('.loading').attr('class', '');
			jQuery('.image').css('background', 'none');
			jQuery('.recentimage').css('background', 'none');	
            //show the loaded image
           jQuery(img).fadeIn();
		   var height = img.parents('.one_fifth').height() ;
		   height = height + 10;
		   img.parents('.one_fifth').css("height", height)
		   var $container = jQuery('.full #portitems4');
		   if ( jQuery.browser.msie ) {
				var number;
				// initialize Isotope
					if($container.width() > 1680){
						number=6;
					}
					
					if($container.width() > 1280 && $container.width() < 1680){
						number=6;
					}	
					

					if($container.width() < 1280 && $container.width()>900){
						number=4;
					}	
					if($container.width() > 460 && $container.width() < 900){
						number=2;
					}				
					if($container.width() < 460){
						number=1;
					}		
				$container.isotope({
				  // options...
				  resizable: false, // disable normal resizing
				  // set columnWidth to a percentage of container width
				  masonry: { columnWidth: $container.width() / number }
				});
			}
		   $container.isotope('reLayout')
		   jQuery('.overlink').show();
		  jQuery('.overgallery').show();
		  jQuery('.overvideo').show();
		  jQuery('.overdefult').fadeIn();	  
		  jQuery('.overport').show();	
		
      })
	
	});

});



jQuery(document).ready(function(){	
	jQuery('.blogpostcategory').each(function(index,el){
			  
		   //find this link's child image element
		  var iframe = jQuery(this).find('iframe');
		  var loading = jQuery(this).children('div');
		  //hide the image and attach the load event handler
		  jQuery(iframe).hide();
		  jQuery(window).load(function () {
			   
				//remove the link's "loading" classname
				loading.removeClass('loading');
				
				//show the loaded image
			   jQuery(iframe).fadeIn();
		  })
	});
});



			
jQuery(document).ready(function() {	

	jQuery(".toggle_container").hide(); 

	jQuery("h2.trigger").click(function(){
		jQuery(this).toggleClass("active").next().slideToggle("slow");
	});
});	

jQuery(document).ready(function(){	
	jQuery(function() {
	jQuery(".tabs").tabs(".panes > div");
	});
	
	
});



jQuery(document).ready(function(){	
	jQuery('.gototop').click(function() {
		jQuery('html, body').animate({scrollTop:0}, 'medium');
	});
});

jQuery(document).ready(function(){	
	jQuery('#searchsubmit').val('');
	var screenWidth = screen.availWidth;
	document.cookie="pmcwidth="+screenWidth+";path=/";
});

jQuery(document).ready(function(){	
	jQuery('#remove h2 a:first-child').attr('class','catlink catlinkhover');
	jQuery('.catlink').click(function() {
		jQuery('#remove h2 a').attr('class','catlink');
		jQuery(this).attr('class','catlink catlinkhover');
	});	
});







	
