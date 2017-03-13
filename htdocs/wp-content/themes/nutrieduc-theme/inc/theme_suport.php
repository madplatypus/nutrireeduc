<?php

function nutrieduc_posted_meta(){
	$posted_on = human_time_diff( get_the_time('U') , current_time('timestamp') );

	$categories = get_the_category();
	$separator = ', ';
	$output = '';
	$i = 1;

	if( !empty($categories) ):
		foreach( $categories as $category ):
			if( $i !=1 ): $output .=$separator; endif;
			$output .= '<a hreaf="'. esc_url( get_category_link( $category->term_id ) ) . '"alt"' . esc_attr( 'View all post in%s', $category->name ) . '">' . esc_html( $category->name ) . '</a>';
			$i++;
		endforeach;
	endif;

	return '<span>Postado a '. $posted_on .' atrás</span> / <span>'. $output.'</span>';

}

function nutrieduc_posted_footer(){

	$comments_num = get_comments_number();
	if (comments_open() ){
		if($comments_num==0){
			$comments = __('0 Comentarios');
		} elseif($comments_num>1){
			$comments=$comments_num.__(' Comentarios');
		} else{
			$comments = __('1 Comentario');
		}

	}else{
		$comments = __('Comentarios fechados');
	}


	return '<div class="post-footer-container"><div class="row"><div class="col-xs-12 col-sm-6">'. get_the_tag_list('<div class="tags-list">',' ','</div>').'<div class="post-footer-container"><div class="row"><div class="col-xs-12 col-sm-6">'. $comments .'</div></div></div>';
}

function nutrieduc_ultimos_posts(){

	$args = array( 'numberposts' => '5' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		echo '<p><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a></p>';
	}
	wp_reset_query();

}
//================
//Comentarios
//================

add_theme_support('html5', array('comment-list','comment-form','search-form', 'gallery','caption'));


?>