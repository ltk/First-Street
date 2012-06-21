<?php get_header(); ?>
  <ul id="tab-nav" class="nav tabbed-nav inner group">
    <li class="uppercase white teal-bg"><a href="#">Lobbyists</a></li>
    <li class="uppercase white purple-bg"><a href="#">Media</a></li>
    <li class="uppercase white orange-bg"><a href="#">Associations</a></li>
    <li class="uppercase white green-bg"><a href="#">Government</a></li>
    <li class="uppercase white red-bg"><a href="#">Corporations</a></li>
    <li class="uppercase white yellow-bg"><a href="#">Education</a></li>
    <li class="uppercase white dark-gray-bg"><a href="#">Research</a></li>
  </ul>
  <div class="inner group" id="banner">

  </div>
  <div class="inner group" id="content">
    <div id="page-content" class="font-size-22">
      <?php get_template_part("loop", "home"); ?>
    </div>
    <div class="widget-area large pull-left group" id="widget-area-1">
      <div class="widget">
        <h3 class="dark-gray uppercase main-font">First Street Research Group</h3>
        <div>
          <h4 class="dark-gray main-font">Three Former Lobyists Join Romney Education Policy Team</h4>
          <p>
            <span class="published orange strong">May 22, 2012 -</span>
            <a class="read-more orange strong">More</a>
          </p>
        </div>
      </div>
      <div class="widget">
        <h3 class="dark-gray uppercase main-font">What's New at First Street</h3>
        <div>
          <h4 class="dark-gray main-font">First Street Partners with ALL</h4>
          <p>First Street and the American League of Lobbyists (ALL) have formed a partnership that makes it cheaper for ALL members to access <a class="read-more orange strong">More</a></p>
        </div>
      </div>
    </div>
    <div class="widget-area small pull-left group" id="widget-area-2">
      <div class="widget">
    		<a href="#" title="#">
    			<img title="Placeholder" alt="Placeholder" src="http://placekitten.com/g/350/225">
    		</a>
          </div>
          <div class="widget">
    		<a href="#" title="#">
    			<img title="Placeholder" alt="Placeholder" src="http://placekitten.com/g/350/95">
    		</a>
      </div>
    </div>
    <div class="widget-area full group" id="widget-area-3">
      <div class="widget">
        <div>
          <h4 class="main-font">Pioneers in Political Intelligence</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <a class="uppercase" href="#" title="Learn More">Learn More ></a>
        </div>
        <div>
          <h4 class="main-font">Influence Public-Policy</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <a class="uppercase" href="#" title="Learn More">Learn More ></a>
        </div>
        <div>
          <h4 class="main-font">Build Coalitions</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <a class="uppercase" href="#" title="Learn More">Learn More ></a>
        </div>
      </div>
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