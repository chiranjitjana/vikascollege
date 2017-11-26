		$(document).ready(function() {
		    $('.button-collapse').sideNav({
		        menuWidth: 300, // Default is 300
		        edge: 'left', // Choose the horizontal origin
		        closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
		        draggable: true // Choose whether you can drag to open on touch screens
		    });
		    $('.slider').slider({
		        indicators: false,
		        height: 520
		    });
            //$(".brand-logo").addClass("hide-on-med-and-up");
		    //$(".brand-logo").hide("fast");
		    $(".dropdown-button").dropdown();
		    $('.materialboxed').materialbox();
		    $('.modal').modal();
		});

		$(window).resize(function() {
		    /* if ($(window).width() < 992) {
			       //alert('Less than 960');
				  	   console.log("inside if"+$(window).width());
					$(".brand-logo").removeClass("hide-on-med-and-up");
					$(".brand-logo").removeClass("show-on-small");
					$(".brand-logo").removeClass("show-on-medium");
		        }
		       else {
			       //alert('More than 960');
				   console.log("outer if"+$(window).width());
				   $(".brand-logo").addClass("hide-on-med-and-up");
					$(".brand-logo").addClass("show-on-small");
					$(".brand-logo").addClass("show-on-medium");
		         }*/
		});

		$(window).scroll(function() {
            //alert('Less than 960 '+ $(window).width());
            console.log("inside if" + $(window).width());
		    if ($(document).scrollTop() > 50) {
		        $('#nav').fadeIn().css({ "position": "fixed", "top": "0" });
		        $('#nav').addClass('navbar-fixed');
		        $('.simple-marquee-container').hide();
		        //$("#logo").attr("src","abc.jpg");

		        /*if ($(window).width() >= 992) {
		            //alert('Less than 960 '+ $(window).width());
		            console.log("inside if" + $(window).width());

		            $(".brand-logo").addClass("hide-on-med-and-up");
		            $(".brand-logo").addClass("hide-on-large-only");
		            //$(".brand-logo").addClass("show-on-small");
		            //$(".brand-logo").addClass("show-on-medium");
		        }
		        else /!*if($(window).width() >992 && $(window).width() <=1300)*!/{

				   console.log("outer if"+$(window).width());
					$(".brand-logo").removeClass("hide-on-med-and-up");
					$(".brand-logo").removeClass("show-on-small");
					$(".brand-logo").removeClass("show-on-medium");
					$(".brand-logo").removeClass("show-on-large");
					
		         }*//*else{
					 $(".brand-logo").addClass("hide-on-med-and-up");
					$(".brand-logo").addClass("show-on-small");
					$(".brand-logo").addClass("show-on-medium");
					 $(".brand-logo").addClass("show-on-large");
				 }*/

		    } else {
		        $('#nav').fadeIn().css({ "position": "relative" });
		        $('#nav').removeClass('navbar-fixed');
		        $('.simple-marquee-container').show();
		        //$(".brand-logo").removeClass("hide-on-med-and-up");
		        /*$(".brand-logo").removeClass("show-on-small");
		        $(".brand-logo").removeClass("show-on-medium");
		        $(".brand-logo").removeClass("show-on-large");*/

		    }


		});


		$('.dropdown-button2').dropdown({
		    inDuration: 300,
		    outDuration: 225,
		    constrain_width: false, // Does not change width of dropdown to that of the activator
		    hover: true, // Activate on hover
		    gutter: ($('.dropdown-content').width() * 1.8) / 2.5 + 5, // Spacing from edge
		    belowOrigin: false, // Displays dropdown below the button
		    alignment: 'left' // Displays dropdown with edge aligned to the left of button
		});