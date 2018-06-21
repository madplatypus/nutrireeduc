<div class="container-fluid blog" id="home">
	<div class="content">
		<nav class="navbar">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">Nutri Reeduc</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.html#home">Home</a></li>
						<li><a class="active" href="index.html#blog">Blog</a></li>
						<li><a href="index.html#about">Sobre</a></li>
						<li><a href="index.html#contact">Contato</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>

	<div class="conteudo-blog">
		<div class="content">
			<section class="post-content">
<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>




<?php

// The Loop

while ( have_posts() ) : the_post(); ?>
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>

<div class="entry">

<?php the_excerpt(); ?>

 <p class="postmetadata"><?php
  comments_popup_link( 'Sem comentários', '1 comentário', '% comentários', 'comments-link', 'Comentários Desligados');
?></p>
</div>

<?php endwhile; 

else: ?>
<p>Sorry, no posts matched your criteria.</p>


<?php endif; ?>
			</section>	

			<aside>
				<section>
					<?php get_search_form(); ?>
				</section>
				<section>
					<h3>Arquivo</h3>
					<ul>
						<?php
						$my_archives=wp_get_archives(array(
	'type'=>'monthly', 
	'show_post_count'=>true, 
	'limit'=>20, 
	'post_type'=>'post', 
	'format'=>'html' 
));
	
print_r($my_archives); 
						?>
					</ul>
				</section>
				<section>
					<h3>Tópicos Recentes</h3>

					<?php nutrieduc_ultimos_posts();?>
					
				</section>
				<section>
					<h3>Categorias</h3>
					<ul>
						<?php wp_list_categories( array(
		    			'orderby'    => 'name',
		    			'show_count' => false,
						) ); ?> 
					</ul>
				</section>
			</aside>		
		</div>
	</div>
<div>		