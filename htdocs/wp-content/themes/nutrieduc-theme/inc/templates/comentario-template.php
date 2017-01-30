<div id="comments" class="comments-area">
	<?php

		if( have_comments() ):?>

			<ol >
			<?php	
				$args = array(
					'walker'				=> null,
					'max_depth'				=> 5,
					'style'					=> 'ol',
					'callback'				=> null,
					'end-callback'			=> null,
					'type'					=> 'all',
					'reply_text'			=> 'Responder',
					'page'					=> '',
					'per_page'				=> '',
					'avatar_size'			=> 50,
					'reverse_top_level'		=> null,
					'reverse_children'		=> '',
					'format'				=> '',
					'short_ping'			=> false,
					'echo'					=> true
				);
				wp_list_comments( $args );

			?></ol>

		<?php endif;

		comment_form();
	?>
</div>