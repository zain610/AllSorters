/*------------------------------------
	Theme Name: Maxclean
	Start Date : Sep 09 2016
	End Date : 
	Last change: 
	Version: 1.0
	Assigned to:
	Primary use:
---------------------------------------*/
/*	
	- Google Map
	
	* Document Scroll		
		
	* Document Ready
		- Scrolling Navigation
		- Responsive Caret
		- Rev Slider
		- Counter Section
		- Testimonial Section
		- Client Carousel
		- Lightbox Video
		- Gallery Section
		- Testimonial Section 1
		- Contact Map
		- Quick Contact Form

	* Window Load
		- Site Loader
*/

(function($) {

	"use strict"
	
	/* - Testimonial Section 1 */
	function chkActiveSlider(){
	   var slideId = $( ".mis-slide.mis-current" ).attr("id");
	   var slideNum = slideId.split("-");
	   $( "[id*='mis_slide_content-']" ).css( "display", "none" );
	   $( "[id='mis_slide_content-"+slideNum[1]+"']" ).css( "display", "block" );
	   $( "[id='mis_slide_content-"+slideNum[1]+"']" ).addClass("animated fadeIn");
	}
	
	/* - Google Map */
	function initialize(obj) {
		var lat = $("#"+obj).attr("data-lat");
        var lng = $("#"+obj).attr("data-lng");
		var contentString = $("#"+obj).attr("data-string");
		var myLatlng = new google.maps.LatLng(lat,lng);
		var map, marker, infowindow;
		var image = "images/marker.png";
		var zoomLevel = parseInt($("#"+obj).attr("data-zoom") ,10);		
		var styles = [{"featureType":"landscape","stylers":[{"saturation":" "},{"lightness":" "},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":" "},{"lightness":" "},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":" "},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":" "},{"lightness":" "},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":" "},{"lightness":" "},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":" "},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":" "},{"saturation":" "}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":" "},{"saturation":" "}]}]
		var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});	
		
		var mapOptions = {
			zoom: zoomLevel,
			disableDefaultUI: true,
			center: myLatlng,
            scrollwheel: false,
			mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, "map_style"]
			}
		}
		
		map = new google.maps.Map(document.getElementById(obj), mapOptions);	
		
		map.mapTypes.set("map_style", styledMap);
		map.setMapTypeId("map_style");
		
		infowindow = new google.maps.InfoWindow({
			content: contentString
		});      
	    
        marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			icon: image
		});

		google.maps.event.addListener(marker, "click", function() {
			infowindow.open(map,marker);
		});	
	}

	
	/* ## Document Scroll - Window Scroll */
	$( document ).scroll(function()
	{
		var scroll	=	$(window).scrollTop();
		var height	=	$(window).height();

		/*** set sticky menu ***/
		if( scroll >= height )
		{
			$(".header-section").addClass("navbar-fixed-top animated fadeInDown").delay( 2000 ).fadeIn();
		}
		else if ( scroll <= height )
		{
			$(".header-section").removeClass("navbar-fixed-top animated fadeInDown");
		}
		else
		{
			$(".header-section").removeClass("navbar-fixed-top animated fadeInDown");
		} // set sticky menu - end		

	});
		
	/* ## Document Ready - Handler for .ready() called */
	$(document).ready(function($) {

		/* - Scrolling Navigation */
		var scroll	=	$(window).scrollTop();
		var width	=	$(window).width();
		var height	=	$(window).height();
		
		/* ** set sticky menu ** */
		if( scroll >= height -500 )
		{
			$(".header-section").addClass("navbar-fixed-top").delay( 2000 ).fadeIn();
		}
		else if ( scroll <= height )
		{
			$(".header-section").removeClass("navbar-fixed-top");
		}
		else
		{
			$(".header-section").removeClass("navbar-fixed-top");
		} /* set sticky menu - end */
		
		
		$('.navbar-nav li a[href*="#"]:not([href="#"]), .site-logo a[href*="#"]:not([href="#"])').on("click", function(e) {
	
			var $anchor = $(this);
			
			$("html, body").stop().animate({ scrollTop: $($anchor.attr("href")).offset().top - 49 }, 1500, "easeInOutExpo");
			
			e.preventDefault();
		});

		/* - Responsive Caret */
		$(".ddl-switch").on("click", function() {
			var li = $(this).parent();
			if ( li.hasClass("ddl-active") || li.find(".ddl-active").length !== 0 || li.find(".dropdown-menu").is(":visible") ) {
				li.removeClass("ddl-active");
				li.children().find(".ddl-active").removeClass("ddl-active");
				li.children(".dropdown-menu").slideUp();
			}
			else {
				li.addClass("ddl-active");
				li.children(".dropdown-menu").slideDown();
			}
		});
		
		/* - Rev Slider */
		if($(".slider-section").length){
			$("#home-slider1").revolution({
				sliderType:"standard",
				sliderLayout:"auto",
				delay:6000,
				navigation: {
					arrows:{
						enable:true,
						style:"uranus"
					},
					bullets: {
						enable:true,
						hide_onmobile:true,
						hide_under:480,
						style:"zeus",
						hide_onleave:false,
						direction:"horizontal",
						h_align:"center",
						v_align:"bottom",
						h_offset:0,
						v_offset:40,
						space:15,
						tmp:''
					}
				},
				responsiveLevels:[1920,1024,768,480],
				gridwidth:[1920,1024,768,480],
				gridheight:[851,675,580,480],
			});
			
			$("#home-slider2").revolution({
				sliderType:"standard",
				sliderLayout:"auto",
				delay:6000,
				navigation: {
					arrows:{
						enable:true,
						style:"uranus"
					},
					bullets: {
						enable:true,
						hide_onmobile:true,
						hide_under:480,
						style:"zeus",
						hide_onleave:false,
						direction:"horizontal",
						h_align:"center",
						v_align:"bottom",
						h_offset:0,
						v_offset:40,
						space:15,
						tmp:''
					}
				},
				responsiveLevels:[1920,1024,768,480],
				gridwidth:[1920,1024,768,480],
				gridheight:[850,675,580,480],
			});
		}
		
		/* - Counter Section */
		if($(".counter-section").length) {
			$(".counter-section").each(function ()
			{
				var $this = $(this);
				var myVal = $(this).data("value");

				$this.appear(function()
				{		
					var statistics_item_count = 0;
					var statistics_count = 0;					
					statistics_item_count = $( "[id*='statistics_count-']" ).length;
					
					for(var i=1; i<=statistics_item_count; i++)
					{
						statistics_count = $( "[id*='statistics_count-"+i+"']" ).attr( "data-statistics_percent" );
						$("[id*='statistics_count-"+i+"']").animateNumber({ number: statistics_count }, 4000);
					}				
				});
			});
		}
		
		/* - Testimonial Section */
		if($(".testimonial-carousel").length){
			$(".testimonial-carousel").owlCarousel({
				loop: true,				
				margin: 10,
				dots: false,
				nav:true,				
				autoplay:false,				
				autoplayHoverPause:true,
				responsive:{
					0:{
						items:1
					},
					640:{
						items:2
					},
					992:{
						items:2
					},
					1200:{
						items:2
					}
				}
			})
		}
		
		/* - Client Carousel */
		if( $(".clients-carousel").length ) {
			$(".clients-carousel").owlCarousel({
				loop: true,
				margin: 0,
				nav: true,
				dots: true,
				autoplay: false,
				responsive:{
					0:{
						items: 1
					},
					500:{
						items: 2
					},
					600:{
						items: 3
					},
					1000:{
						items: 5
					}
				}
			});
		}
		
		/* - Lightbox Video */
		$(".video-section a").magnificPopup({
			disableOn: 700,
			type: "iframe",
			mainClass: "mfp-fade",
			removalDelay: 160,
			preloader: false,

			fixedContentPos: false
		});
		
		/* - Gallery Section */
		setTimeout(function() {
			var $container = $(".portfolio-list");
			$container.isotope({
			  itemSelector: ".portfolio-list > li",
			  gutter: 0,
			  transitionDuration: "0.5s"
			});

			$("#filters a").on("click",function(){
				$("#filters a").removeClass("active");
				$(this).addClass("active");
				var selector = $(this).attr("data-filter");
				$container.isotope({ filter: selector });		
				return false;
			});
		}, 4000);
		
		if( $(".content-image-block").length ){
			$(".content-block-hover").magnificPopup({
				delegate: "a.zoom",
				type: "image",
				tLoading: "Loading image #%curr%...",
				mainClass: "mfp-img-mobile",
				gallery: {
					enabled: true,
					navigateByImgClick: false,
					preload: [0,1] // Will preload 0 - before current, and 1 after the current image
				},
				image: {
					tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',				
				}
			});
		}
		
		/* - Testimonial Section 1 */			
		if( $( ".testimonial-slider" ).length ) {
			setInterval( chkActiveSlider, 1000 );
		}
		
		var slider = $(".mis-stage").miSlider({
			speed: 1000,
			stageHeight: false,
			slidesLoaded: true,
			slidesOnStage: false,
			slidePosition: "center",
			slideStart: "mid",
			slideWidth: 125,
			slideScaling: 100,
			offsetV: 0,
			centerV: true,
			navButtonsOpacity: 1
		});
		
		/* - Contact Map */
		if($("#map-canvas-contact").length==1){
			initialize("map-canvas-contact");
		}
		
		if($("#map-canvas-contact-1").length==1){
			initialize("map-canvas-contact-1");			
		}
		
		if($("#map-canvas-contact-2").length==1){
			initialize("map-canvas-contact-2");			
		}
		/* - Quick Contact Form */
		$( "#btn_submit" ).on( "click", function(event) {
		  event.preventDefault();
		  var mydata = $("form").serialize();
			$.ajax({
				type: "POST",
				dataType: "json",
				url: "contact.php",
				data: mydata,
				success: function(data) {
					if( data["type"] == "error" ){
						$("#alert-msg").html(data["msg"]);
						$("#alert-msg").removeClass("alert-msg-success");
						$("#alert-msg").addClass("alert-msg-failure");
						$("#alert-msg").show();
					} else {
						$("#alert-msg").html(data["msg"]);
						$("#alert-msg").addClass("alert-msg-success");
						$("#alert-msg").removeClass("alert-msg-failure");					
						$("#input_name").val("");						
						$("#input_email").val("");						
						$("#input_phone").val("");						
						$("#textarea_message").val("");
						$("#alert-msg").show();				
					}			
				},
				error: function(xhr, textStatus, errorThrown) {
					alert(textStatus);
				}
			});
		});
		
	});	/* - Document Ready /- */
	
	/* ## Window Load - Handler for .load() called */
	$(window).load(function() {
		/* - Site Loader */
		if ( !$("html").is(".ie6, .ie7, .ie8") ) {
			$("#site-loader").delay(1000).fadeOut("slow");
		}
		else {
			$("#site-loader").css("display","none");
		}
	});

})(jQuery);