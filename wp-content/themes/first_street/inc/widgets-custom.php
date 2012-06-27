<?php

function jake_widgets_init() {
	register_sidebar(array(
		'name' => __('Home Page: Left', 'roots'),
		'id' => 'homepage-1',
		'description' => 'This is the area on the left side of the homepage.',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	));
	register_sidebar(array(
		'name' => __('Home Page: Right', 'roots'),
		'id' => 'homepage-2',
		'description' => 'This is the area on the right side of the homepage.',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	));
	register_sidebar(array(
		'name' => __('Home Page: 3', 'roots'),
		'id' => 'homepage-3',
		'description' => 'This is the area on the bottom half of the home page, in the gray box.',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	));

	register_widget('Jake_Graphic_Widget');
	register_widget('Jake_News_Widget');
}
add_action('widgets_init', 'jake_widgets_init');




/**
	Graphic Widget
*/
class Jake_Graphic_Widget extends WP_Widget {
	function Jake_Graphic_Widget() {
		$widget_ops = array('classname' => 'Jake_Graphic_Widget', 'description' => __('Use this widget to add a featured link with a graphic and description.', 'roots'));
		$this->WP_Widget('Jake_Graphic_Widget', __('Graphic Widget', 'roots'), $widget_ops);
		$this->alt_option_name = 'Jake_Graphic_Widget';

		add_action('save_post', array(&$this, 'flush_widget_cache'));
		add_action('deleted_post', array(&$this, 'flush_widget_cache'));
		add_action('switch_theme', array(&$this, 'flush_widget_cache'));
	}

	function widget($args, $instance) {
	?>
		<div class="widget graphic-widget">      
			<i class="graphic-<?php echo $instance['graphic']; ?>"></i>
			<h4 class="main-font"><?php echo $instance['title']; ?></h4>
			<p><?php echo $instance['description']; ?></p>
			<a class="uppercase purple strong" href="<?php echo $instance['link']; ?>" title="Learn More">Learn More ></a>
		</div>
<?php
	}

	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['description'] = strip_tags($new_instance['description']);
		$instance['link'] = strip_tags($new_instance['link']);
		$instance['graphic'] = strip_tags($new_instance['graphic']);

		$this->flush_widget_cache();

		$alloptions = wp_cache_get('alloptions', 'options');
		if (isset($alloptions['Jake_Graphic_Widget'])) {
			delete_option('Jake_Graphic_Widget');
		}

		return $instance;
	}

	function flush_widget_cache() {
		wp_cache_delete('Jake_Graphic_Widget', 'widget');
	}

	function tjg_input_check( $var, $value, $type ) {
		if ( $var === $value && $type == 'check' ) { return 'checked="checked"'; }
		if ( $var === $value && $type == 'select' ) { return 'selected="selected""'; }
	}

	function form($instance) {
		$title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		$description = isset($instance['description']) ? esc_attr($instance['description']) : '';
		$link = isset($instance['link']) ? esc_attr($instance['link']) : '';
		$graphic = isset($instance['graphic']) ? esc_attr($instance['graphic']) : '';

	?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Title:', 'roots'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
		</p>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id('description')); ?>"><?php _e('Description:', 'roots'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('description')); ?>" name="<?php echo esc_attr($this->get_field_name('description')); ?>" type="text" value="<?php echo esc_attr($description); ?>" />
		</p>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id('link')); ?>"><?php _e('Link:', 'roots'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('link')); ?>" name="<?php echo esc_attr($this->get_field_name('link')); ?>" type="text" value="<?php echo esc_attr($link); ?>" />
		</p>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id('graphic')); ?>"><?php _e('Graphic:', 'roots'); ?></label>
			<select name="<?php echo esc_attr($this->get_field_name('graphic')); ?>" id="<?php echo esc_attr($this->get_field_id('graphic')); ?>">
				<option value="capitol" <?php echo $this->tjg_input_check($graphic, 'capitol', 'select'); ?>>Capitol</option>
				<option value="bullhorn" <?php echo $this->tjg_input_check($graphic, 'bullhorn', 'select'); ?>>Bullhorn</option>
				<option value="nodes" <?php echo $this->tjg_input_check($graphic, 'nodes', 'select'); ?>>Nodes</option>
			</select>
		</p>

	<?php
	}
}

/** 
	End Graphic Widget

	Begin News Widget
*/
	class Jake_News_Widget extends WP_Widget {
		function Jake_News_Widget() {
			$widget_ops = array('classname' => 'Jake_News_Widget', 'description' => __('Use this widget to display the most recent blog post.', 'roots'));
			$this->WP_Widget('Jake_News_Widget', __('News Widget', 'roots'), $widget_ops);
			$this->alt_option_name = 'Jake_News_Widget';

			add_action('save_post', array(&$this, 'flush_widget_cache'));
			add_action('deleted_post', array(&$this, 'flush_widget_cache'));
			add_action('switch_theme', array(&$this, 'flush_widget_cache'));
		}

		function widget($args, $instance) {
			// Gonna have to actually get the post from here.
		?>
		<div class="widget news-widget">
			<h3 class="dark-gray uppercase main-font">What's New at First Street</h3>
			<div>
				<h4 class="dark-gray main-font">First Street Partners with ALL</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam velit felis, gravida sed bibendum vel, commodo ac elit. Nam quis risus enim, ut convallis diam. Aliquam lacinia lectus ut est laoreet sit amet porttitor metus commodo. Aliquam erat volutpat. Donec nisl nisl, hendrerit a egestas ac, adipiscing dignissim dolor. Nulla nulla tellus, aliquam eu malesuada in, pellentesque tincidunt est. <a class="read-more orange strong right-arrow">More</a></p>
			</div>
		</div>
	<?php
		}

		function update($new_instance, $old_instance) {
			$instance = $old_instance;
			$instance['title'] = strip_tags($new_instance['title']);
			$instance['blog'] = strip_tags($new_instance['blog']);
			$instance['rss'] = strip_tags($new_instance['rss']);
			$instance['date'] = strip_tags($new_instance['link']);

			$this->flush_widget_cache();

			$alloptions = wp_cache_get('alloptions', 'options');
			if (isset($alloptions['Jake_News_Widget'])) {
				delete_option('Jake_News_Widget');
			}

			return $instance;
		}

		function flush_widget_cache() {
			wp_cache_delete('Jake_News_Widget', 'widget');
		}

		function tjg_input_check( $var, $value, $type ) {
			if ( $var === $value && $type == 'select' ) { return 'selected="selected""'; }
			if ( $var === $value && $type == 'check' ) { return 'checked="checked"'; }
		}

		function form($instance) {
			$title = isset($instance['title']) ? esc_attr($instance['title']) : '';
			$blog = isset($instance['blog']) ? esc_attr($instance['blog']) : '';
			$rss = isset($instance['rss']) ? esc_attr($instance['rss']) : '';
			$date = isset($instance['date']) ? esc_attr($instance['date']) : '';

			if ( false === ( $site_list = get_transient( 'multisite_site_list' ) ) ) { 
				global $wpdb;
				$expires = 60*60*2;
				$query = 'SELECT * FROM wp_blogs ORDER BY blog_id';
				$site_list = $wpdb->get_results( $wpdb->prepare($query) );
				set_site_transient( 'multisite_site_list', $site_list, $expires ); 
				print_r($site_list);
			}
		?>
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Title:', 'roots'); ?></label>
				<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
			</p>

			<p>
				<label for="<?php echo esc_attr($this->get_field_id('blog')); ?>"><?php _e('Graphic:', 'roots'); ?></label>
				<select name="<?php echo esc_attr($this->get_field_name('blog')); ?>" id="<?php echo esc_attr($this->get_field_id('blog')); ?>">
		<?php 

		?>
				</select>
			</p>

			<table>
				<tr>
					<td>
						<label for="<?php echo esc_attr($this->get_field_id('rss')); ?>"><?php _e('Show RSS Link:', 'roots'); ?></label>
						<input type="checkbox" id="<?php echo esc_attr($this->get_field_id('rss')); ?>" name="<?php echo esc_attr($this->get_field_name('rss')); ?>" <?php echo $this->tjg_input_check($date, 'true', 'check'); ?> value="true" />
					</td>
					<td>
						<label for="<?php echo esc_attr($this->get_field_id('date')); ?>"><?php _e('Show Date:', 'roots'); ?></label>
						<input type="checkbox" id="<?php echo esc_attr($this->get_field_id('date')); ?>" name="<?php echo esc_attr($this->get_field_name('date')); ?>" <?php echo $this->tjg_input_check($date, 'true', 'check'); ?> value="true" />
					</td>
				</tr>
			</table>

		<?php
		}
	}
