<?php get_header(); ?>
  <div class="inner unpadded" id="banner">
    <ul id="tab-nav">
      <li class="uppercase white teal-bg">Lobbyists</li>
      <li class="uppercase white purple-bg">Media</li>
      <li class="uppercase white orange-bg">Associations</li>
      <li class="uppercase white green-bg">Government</li>
      <li class="uppercase white red-bg">Corporations</li>
      <li class="uppercase white yellow-bg">Education</li>
      <li class="uppercase white dark-gray-bg">Research</li>
    </ul>
    <div id="featured-content"></div>
  </div>
  <div class="inner group" id="content">
    <div id="page-content">
      <?php get_template_part("loop", "home"); ?>
    </div>
    <div class="widget-area large" id="widget-area-1">
      <div class="widget">
        <h3>First Street Research Group</h3>
        <div>
          <h4>Three Former Lobyists Join Romney Education Policy Team</h4>
          <p>
            <span class="published">May 22, 2012 -</span>
            <a class="read-more">More</a>
          </p>
        </div>
      </div>
      <div class="widget">
        <h3>What's New at First Street</h3>
        <div>
          <h4>First Street Partners with ALL</h4>
          <p>First Street and the American League of Lobbyists (ALL) have formed a partnership that makes it cheaper for ALL members to access <a class="read-more">More</a></p>
        </div>
      </div>
    </div>
    <div class="widget-area small" id="widget-area-2">
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
    <div class="widget-area full" id="widget-area-3">
      <div class="widget">
        <div>
          <h4>Pioneers in Political Intelligence</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <a class="uppercase" href="#" title="Learn More">Learn More ></a>
        </div>
        <div>
          <h4>Influence Public-Policy</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <a class="uppercase" href="#" title="Learn More">Learn More ></a>
        </div>
        <div>
          <h4>Build Coalitions</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <a class="uppercase" href="#" title="Learn More">Learn More ></a>
        </div>
      </div>
    </div>
    <div class="widget-area full" id="widget-area-4">
      <div class="widget large">
      	<!-- Twitter widget goes here. -->
      </div>
      <div class="widget small">
      	<!-- Social buttons widget goes here. -->
      </div>
    </div>
  </div>
<?php get_footer(); ?>