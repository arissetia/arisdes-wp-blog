<?php
add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);
function clear_nav_menu_item_id($id, $item, $args) {
    return "";
}

add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);
function clear_nav_menu_item_class($classes, $item, $args) {
	return array();
}


class special_theme{
	function featured_index(){
		
		$output = '';
		$args = array('tag'=>'featured',
				'posts_per_page'=>3
				);
		query_posts($args);
		if( have_posts() ){
			while ( have_posts() ) : the_post();
			$the_img = $this->get_img_src( get_the_ID() );
			if($the_img == 'zero'):
			endif;
			$output .= '<div class=" mdl-cell mdl-cell--4-col mdl-card mdl-shadow--2dp">';
				$output .= ' <div class="mdl-card__title mdl-card--expand" style="background-image: url( \' '.$the_img.'  \' )">
							  </div>
							  <div class="mdl-card__supporting-text">
								'.get_the_title().'
							  </div>
							  <div class="mdl-card__actions mdl-card--border">
								<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
								  View Updates
								</a>
							  </div>';
			$output .= '</div>';
			endwhile;
		}else{
			$output = 'gagal';
		}
		wp_reset_query();
		return $output;
	}
	
		function get_img_src($id){
		$thumb_id = get_post_thumbnail_id($id);
		$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
				if($thumb_url[0] ){
					return  $thumb_url[0];
				}else{
					return 'zero';
				}
		}
	
}