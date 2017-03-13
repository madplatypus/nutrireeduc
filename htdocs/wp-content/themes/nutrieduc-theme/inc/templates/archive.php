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
				if( have_posts() ){
					while ( have_posts() ){
						the_post();
						get_template_part( 'inc/templates/content', get_post_format() );
					}
				}
				?>
				<div class="comentarios">
					<h3>Comentários</h3><!-- ou qualquer outro nome -->
					<?php 
					if (comments_open() ) comments_template();
					?>
				</div>		
			</section>	

			<aside>
				<section>
					<input type="text" placeholder="Pesquisar..." />
				</section>
				<section>
					<h3>Arquivo</h3>
					<ul>
						<?php wp_get_archives('type=yearly'); ?>
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