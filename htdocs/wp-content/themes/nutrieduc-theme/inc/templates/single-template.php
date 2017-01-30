<div class="container-fluid" id="home">
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
		<div><div class="content" style="float:left;max-width: 750px;">
			<?php
			if( have_posts() ){
				while ( have_posts() ){
					the_post();
					get_template_part( 'inc/templates/content', get_post_format() );
				}
			}
			?>
		</div>
		<div style="margin-top: 100px;">
			<div>
				<p><input type="text" placeholder="Pesquisar..." /></p>
			</div>
			<div>
				<h3>Tópicos Recentes</h3>
				<?php nutrieduc_ultimos_posts();?>
			</div>
			<div>
<ul>
    <?php wp_list_categories( array(
        'orderby'    => 'name',
        'show_count' => false,
    ) ); ?> 
</ul>
			</div>
		</div></div>
		
<div>		