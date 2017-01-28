<?php get_header(); ?>

	<div>
		<?php
		if( have_posts() ){
			while ( have_posts() ){
				the_post();
				get_template_part( 'inc/templates/content', get_post_format() );
			}
		}
		?>
	</div>
<?php get_footer(); ?>