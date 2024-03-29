var slider = {
	self : this,

	// Our slides
	slides : new Array(),
	container : null,
	nav_container : null,
	message_container : null,

	// Some Options
	interval: 5000, // in ms
	delay: 3000, // in ms

	// Internal Properties
	current_slide : null,
	total_slides : null,
	last_slide : null,
	first_slide : null,
	animating : false,
	int : null,

	// Internal Methods
	add_slide : function (slide) {
		this.slides.push(slide);

		if(this.current_slide == null) { slider.set_current_slide(); }

		slider.total_slides = slider.slides.length;
		slider.last_slide = slider.slides[slider.total_slides-1];
		slider.first_slide = slider.slides[0];
	},

	set_current_slide : function(slide){
		if (slide == undefined) {
			this.current_slide = this.slides[0]
		} else {
			this.current_slide =  slide
		}
	},

	next_slide : function() {
		if (this.current_slide == this.last_slide) {
			return this.first_slide;
		} else {
			return this.slides[this.slides.indexOf(this.current_slide) + 1]
		}
	},

	prev_slide : function() {
		if (this.current_slide == this.first_slide) {
			return this.last_slide;
		} else {
			return this.slides[this.slides.indexOf(this.current_slide) - 1] 
		}
	},

	go_to : function(animation, slide) {
		this.animating = true;
		
		window["slider"][animation](slide);
		
		this.set_current_slide(slide);
		
		this.remove_indicator();
		this.set_indicator(slide);

		this.remove_message();
		this.set_message(slide);
		
		this.animating = false;
		return slide;
	}, 

	animate_slide_left : function(slide){
		var distance = this.container.outerWidth();

		slide.dom_el.css({
			left : distance,
			display : 'block'
		})
		.stop().animate({
			left:0
		}, 'slow');

		this.current_slide.dom_el.stop().animate({
			left: distance*-1
		}, 'slow', function() {
			$(this).css('left', distance);
		});
	},

	animate_slide_right : function(slide){
		var distance = this.container.outerWidth();
		slide.dom_el.css({
			left : distance*-1,
			display : 'block'
		})
		.stop().animate({
			left:0
		}, 'slow');
		this.current_slide.dom_el.stop().animate({
			left: distance
		}, 'slow', function() {
			$(this).css('left', distance*-1);
		});
	},

	animate_split_vertical : function(){
		this.next_slide().dom_el.wrap('<div class="holder top">');
		this.next_slide().dom_el.clone().insertAfter(".holder").wrap('<div class="holder bottom">');
		this.current_slide.dom_el.addClass("current");
		var i = 0;
		$(".holder").animate({
			height : "50%",
			opacity: 1
		}, 1200, function() {
			i++;
			if (i == 2) {
				slider.current_slide.dom_el.unwrap().addClass("current");
				$(".holder.bottom").remove()
				slider.prev_slide().dom_el.removeClass("current");
			}
		});
	},

	set_indicator : function(slide) {
		 slide.nav_tab.addClass("current-nav");
	},

	remove_indicator : function() {
		for(slide in this.slides) {
			if(this.slides[slide] != this.current_slide){
				this.slides[slide].nav_tab.removeClass("current-nav");
			}
		}
	},

	set_message : function(slide) {
		 //slide.message_el.addClass("current-message");
	},

	remove_message : function() {
		for(slide in this.slides) {
			if(this.slides[slide] != this.current_slide){
				//this.slides[slide].message_el.removeClass("current-message");
			}
		}
	},	

	scrape_slides_from : function(containing_id) {

	},

	run : function(params){
		this.current_slide.dom_el.fadeIn();
		this.nav_container = params.nav_container;
		this.message_container = params.message_container;

		$.each(this.slides, function(index, value) {
			slider.nav_container.append('<li id="jake-nav-slide-' + index + '" ' + (index == 0 ? 'class="current-nav"' : '') + '><a href="'+this.link+'">'+this.title+'</a></li>');
			slider.slides[index].nav_tab = $("#jake-nav-slide-" + index);
			$("#jake-nav-slide-" + index).on('click', function(){
				
				if(!slider.animating && slider.current_slide.index != index){
					slider.stop_interval();
					var animation = "animate_slide_left";
					if(slider.current_slide.index > index){
						animation = "animate_slide_right";
					}
					slider.go_to(animation, slider.slides[index]);
					setTimeout(slider.start_interval(), slider.interval);
				}
			});
			//slider.message_container.append('<a id="jake-message-' + index + '" ' + (index == 0 ? 'class="current-message"' : '') + ' href="'+this.link+'">'+this.message+'</a>');
			//slider.slides[index].message_el = $("#jake-message-" + index);
		});

		this.container.hover(
			function(){
				slider.stop_interval();
			},
			function(){
				slider.start_interval();
			}
		);

		this.start_interval();
	},

	start_interval : function() {
		this.int=self.setInterval(function() { slider.go_to("animate_slide_left", slider.next_slide()) }, this.interval);
	},

	stop_interval : function() {
		window.clearInterval(this.int);
	}


}

$(function() {
	//	Add our slides to the slider
	slider.container = $('#slide-holder');
	slider.add_slide({ 
		dom_el : $('#slide-1'),
		title : "First Slide",
		index : 0,
		link : "http://www.elginbutler.com/products.php?page=brick",
		message : "Rice University"
	});
	slider.add_slide({
		dom_el : $('#slide-2'),
		title : "2nd Slide",
		index : 1,
		link : "http://www.elginbutler.com/products.php?page=sgt",
		message : "Peaster High School"
	});
	slider.add_slide({
		dom_el : $('#slide-3'),
		title : "3rd Slide",
		index : 2,
		link : "http://www.elginbutler.com/products.php?page=trim",
		message : "Chicago Transit Authority"
	});

	params = {
		nav_container : $('#slider-nav'),
		//message_container : $('#logo-holder')
	};

	slider.run(params);

});
