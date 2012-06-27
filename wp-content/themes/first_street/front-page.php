<?php get_header(); ?>

<!-- This is to be moved to the CSS file when we get a sense of what our real styles are going to look like. -->
<style type="text/css">
#banner img{
	display:block;
}

#banner{
	overflow:hidden;
	padding:0;
}

#slide-holder {
	width:100%;
	height:100%;
	position: relative;
	overflow:hidden;

/* Non essential */
	float: left;
	padding: 0;
	margin: 0;
}
#slider-nav {
	position:absolute;
	right:10px;
	bottom:0;
	z-index:500;

}
#slider-nav li {
	width:12px;
	height:12px;
	background:#fff;
	display:block;
	float:left;
	margin-left:6px;
	text-indent:-10000px;
	border-radius:6px;
	border:1px solid #666;
	box-shadow:0px 0px 3px #666;
}
#slider-nav li.current-nav {
	background:#aaa;
}

#slide-holder .slide {
	box-sizing:border-box;
	padding:25px;
	width:100%;
	height:100%;
	background:none;
	position: absolute;
	display:none;
	z-index:10;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	background-color: 
	#F9F9F9;
	background-image: -moz-linear-gradient(top, 
	#FEFEFE, 
	#F2F2F2);
	background-image: -ms-linear-gradient(top, 
	#FEFEFE, 
	#F2F2F2);
	background-image: -webkit-gradient(linear, 0 0, 0 100%, from(
	#FEFEFE), to(
	#F2F2F2));
	background-image: -webkit-linear-gradient(top, 
	#FEFEFE, 
	#F2F2F2);
	background-image: -o-linear-gradient(top, 
	#FEFEFE, 
	#F2F2F2);
	background-image: linear-gradient(top, 
	#FEFEFE, 
	#F2F2F2);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fefefe', endColorstr='#f2f2f2', GradientType=0);
	
	
}
#slide-holder .slide.current { z-index: 20; display:block;	}

	.holder {
		overflow:hidden;
		height:0;
		opacity:0;
		position: absolute;
		width:100%;
		z-index: 30;
	}

	

	#slide-holder .holder img { position: absolute; display:block;}

	.holder.top {bottom:153px;}
	.holder.bottom {top:154px;}

	.holder.top img {bottom: -153px;}
	.holder.bottom img {top: -154px;}

</style>
  <ul id="tab-nav" class="nav tabbed-nav inner group">
    <li class="uppercase white teal-bg"><a href="#">Lobbyists</a></li>
    <li class="uppercase white purple-bg"><a href="#">Media</a></li>
    <li class="uppercase white orange-bg"><a href="#">Associations</a></li>
    <li class="uppercase white green-bg"><a href="#">Government</a></li>
    <li class="uppercase white red-bg"><a href="#">Corporations</a></li>
    <li class="uppercase white yellow-bg"><a href="#">Education</a></li>
    <li class="uppercase white dark-gray-bg"><a href="#">Research</a></li>
  </ul>
  <div id="banner"  class="inner group feature-panel">
	  <ul id="slide-holder">
	  	<li class="slide" id="slide-1">
	  		<!-- <h1>First Slide Title</h1>
			<h2>First Slide Subtitle</h2> -->
			<img src="http://lorempixel.com/1087/358/" title="#" />
<!-- 			<a href="#" title="#">This is a link.</a>
 -->	  	</li>
		<li class="slide" id="slide-2">
	  		<!-- <h1>Second Slide Title</h1> -->
			<img src="http://lorempixel.com/g/1087/358/" title="#" />
<!-- 			<a href="#" title="#">This is a link.</a>
 -->		</li>
		<li class="slide" id="slide-3">
	  		<img src="http://lorempixel.com/1087/358/sports/" title="#" />
		</li>
	  </ul>
	  <ul id="slider-nav">
	  </ul>
  </div>
  <div id="content" class="inner group">
    <div id="page-content" class="font-size-22">
      <?php get_template_part("loop", "home"); ?>
    </div>
    <div class="widget-area large pull-left group left-column" id="widget-area-1">
      <div class="widget news-widget">
<!--         <h3 class="dark-gray uppercase main-font">First Street Research Group
          <a href="#" class="rss-link"><img src="<?php echo get_template_directory_uri(); ?>/img/rss-icon.jpg" alt="subscribe"/></a>
        </h3>
        <div>
          <h4 class="dark-gray main-font">Three Former Lobyists Join Romney Education Policy Team</h4>
          <p>
            <span class="published orange strong">May 22, 2012 -</span>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam velit felis, gravida sed bibendum vel, commodo ac elit. Nam quis risus enim, ut convallis diam. Aliquam lacinia lectus ut est laoreet sit amet porttitor metus commodo. Aliquam erat volutpat. Donec nisl nisl, hendrerit a egestas ac, adipiscing dignissim dolor. Nulla nulla tellus, aliquam eu malesuada in, pellentesque tincidunt est.
            <a class="read-more orange strong right-arrow">More</a>
          </p>
        </div>
      </div>
      <div class="widget news-widget">
        <h3 class="dark-gray uppercase main-font">What's New at First Street</h3>
        <div>
          <h4 class="dark-gray main-font">First Street Partners with ALL</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam velit felis, gravida sed bibendum vel, commodo ac elit. Nam quis risus enim, ut convallis diam. Aliquam lacinia lectus ut est laoreet sit amet porttitor metus commodo. Aliquam erat volutpat. Donec nisl nisl, hendrerit a egestas ac, adipiscing dignissim dolor. Nulla nulla tellus, aliquam eu malesuada in, pellentesque tincidunt est. <a class="read-more orange strong right-arrow">More</a></p>
        </div>
      </div> -->
      <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Page 3')) : ?>
        <!-- Default if No Widgets -->
      <?php endif; ?>

      
    </div>
    <div class="widget-area small pull-left group" id="widget-area-2">
      <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Page: Right')) : ?>
        <!-- Default if No Widgets -->
      <?php endif; ?>
<!--       <div class="widget feature-panel image-widget">
    		<a href="#" title="#">
    			<img title="Placeholder" alt="Placeholder" src="<?php echo get_template_directory_uri(); ?>/img/signup.jpg">
    		</a>
          </div>
      <div class="widget feature-panel image-widget">
    		<a href="#" title="#">
    			<img title="Placeholder" alt="Placeholder" src="<?php echo get_template_directory_uri(); ?>/img/newsletter.jpg">
    		</a>
      </div> -->
    </div>
    <div class="widget-area full group feature-panel clear-left horizontal-list" id="widget-area-3">
      <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Page 3')) : ?>
        <!-- Default if No Widgets -->
      <?php endif; ?>
    </div>
    <div class="widget-area full group" id="widget-area-4">
      <div class="widget large">
      	<!-- Twitter widget goes here. -->
      </div>
      <div class="widget small">
      	<!-- Social buttons widget goes here. -->
      </div>
    </div>
  </div>
<?php get_footer(); ?>