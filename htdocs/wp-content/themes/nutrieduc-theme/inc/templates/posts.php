<section class="blog">
	<div class="content">
		<div class="articles">
			<h2>Mais sobre nutrição</h2>					

				<?php while ( have_posts() ) : the_post(); ?>
					<div class="article-info">
						<figure onclick="location.href='<?php the_permalink() ?>';">
							<h3><?php the_title_attribute(); ?></h3>
							<?php if (has_post_thumbnail()) the_post_thumbnail();
							else echo '<img class="img-responsive" src="' . get_template_directory_uri(). '/img/img-articles.jpg" alt="">';?>
							
						
							<figcaption><p>Quero saber mais</p></figcaption>
						</figure>
					</div>	
					



				<?php endwhile; ?>

<!--			<div class="article-info">
				<figure onclick="location.href='http://www.google.com';">
					<h3>Algum título interessante</h3>
					<?php //echo '<img class="img-responsive" src="' . get_template_directory_uri(). '/img/img-articles.jpg" alt="">';?>
						
					<figcaption><p>Quero saber mais</p></figcaption>
				</figure>
			</div>	
			<div class="article-info">
				<figure onclick="location.href='http://www.google.com';">
					<h3>Algum título interessante</h3>
					<?php //echo '<img class="img-responsive" src="' . get_template_directory_uri(). '/img/img-articles.jpg" alt="">';?>
					<figcaption><p>Quero saber mais</p></figcaption>
				</figure>
			</div>
			<div class="article-info">
				<figure onclick="location.href='http://www.google.com';">
					<h3>Algum título interessante</h3>		
					<?php //echo '<img class="img-responsive" src="' . get_template_directory_uri(). '/img/img-articles.jpg" alt="">';?>
					<figcaption><p>Quero saber mais</p></figcaption>
				</figure>
			</div>
		</div>
	</div>
	<div class="content">	
		<div class="articles">
			<div class="article-info">
				<figure onclick="location.href='http://www.google.com';">
					<h3>Algum título interessante</h3>	
					<?php //echo '<img class="img-responsive" src="' . get_template_directory_uri(). '/img/img-articles.jpg" alt="">';?>
					<figcaption><p>Quero saber mais</p></figcaption>
				</figure>
			</div>	
			<div class="article-info">
				<figure onclick="location.href='http://www.google.com';">
					<h3>Algum título muito muito muito muito muito muito muito muito interessante</h3>	
					<?php //echo '<img class="img-responsive" src="' . get_template_directory_uri(). '/img/img-articles.jpg" alt="">';?>
					<figcaption><p>Quero saber mais</p></figcaption>
				</figure>
			</div>-->
			<div class="article-info">
				<figure onclick="location.href='http://www.google.com';">
					<?php echo '<img class="img-responsive" src="' . get_template_directory_uri(). '/img/img-articles.jpg" alt="">';?>
					<figcaption><p>Ver todos os artigos</p></figcaption>
				</figure>
			</div>
		</div>
	</div>
</section>