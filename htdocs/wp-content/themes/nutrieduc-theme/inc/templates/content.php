<?php
 
?>

<article id="post-<?php the_ID();?>" <?php post_class();?>>
	

	<?php the_title( '<h1 class="entry-title">', '</h1>');?>
	<div class="entry-meta"><?php echo nutrieduc_posted_meta(); ?></div>
		<div class="entry-content">
		<?php if (has_post_thumbnail() ): ?>

			<div>
				<?php the_post_thumbnail(array(750,750)); ?>
			</div> <!-- Coloquei 750px temporariamente, pode colocar um valor que vc achar melhor pro designe que vc escolher -->
		<?php endif; ?>
		
		<div class="entry-excerpt">
			<?php the_content(); ?>
		</div>

		<div>
			<?php echo nutrieduc_posted_footer();?>
		</div>		
	</div>
</article>