<?php get_header(); ?>
	
	

	<?php

	$resumo_autor = esc_attr( get_option( 'resumo' ) );
	$nome_completo = esc_attr( get_option( 'nome_completo' ) );
	$facebook = esc_attr( get_option( 'facebook' ) );
	$linkedin = esc_attr( get_option( 'linkedin' ) );
	
		require get_template_directory() . '/inc/templates/titulo.php';
		require get_template_directory() . '/inc/templates/posts.php';
		require get_template_directory() . '/inc/templates/sobre.php';
		require get_template_directory() . '/inc/templates/contato.php';
	?>


<?php get_footer(); ?>