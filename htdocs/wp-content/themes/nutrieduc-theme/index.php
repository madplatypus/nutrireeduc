<?php get_header(); ?>
	
	

	<?php

	$resumo_autor = esc_attr( get_option( 'resumo' ) );
	$nome_completo = esc_attr( get_option( 'nome_completo' ) );
	$facebook = esc_attr( get_option( 'facebook' ) );
	$linkedin = esc_attr( get_option( 'linkedin' ) );
	
		require get_template_directory() . '/inc/templates/template-home.php';
	?>


<?php get_footer(); ?>