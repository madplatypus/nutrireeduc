	<div class="container-fluid" id="home">
		<div class="content-image">
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
							<li><a class="active" href="#home">Home</a></li>
							<li><a href="#blog">Blog</a></li>
							<li><a href="#about">Sobre</a></li>
							<li><a href="#contact">Contato</a></li>
						</ul>
					</div>
				</div>
			</nav>

			<header>
				<div>
					<p>Dietas começam na segunda...</p>
					<p>Alimentação saudável começa a cada refeição</p>
				</div>				
			</header>
		</div>

		<section class="blog-index" id="blog">
			<div class="content">
				<h2>Mais sobre nutrição</h2>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="article-info">
						<figure onclick="location.href='<?php the_permalink() ?>';">
							<h3><?php the_title_attribute(); ?></h3>
							<?php if (has_post_thumbnail()) the_post_thumbnail('thumbnail');
							else echo '<img class="img-responsive" src="' . get_template_directory_uri(). '/img/img-articles.jpg" alt="">';?>
													
							<figcaption><p>Quero saber mais</p></figcaption>
						</figure>
					</div>	
					
				<?php endwhile; ?>
				<div class="article-info">
					<figure class="all-posts" onclick="location.href='blog.html';">
						<?php echo '<img class="img-responsive" src="' . get_template_directory_uri(). '/img/img-articles.jpg" alt="">';?> ?>
						<figcaption><p>Ver todos os posts</p></figcaption>
					</figure>
				</div>
			</div>
			</div>

		</section>

		<section class="about" id="about">
			<div class="content">
				<div class="about-info">
					<h2>Sobre mim</h2>
					<article>
						<p><?=$nome_completo?></p>
						<p><?=$resumo_autor?></p>
					</article>						
					<!-- <img src="" alt=""> -->
					<div class="photo"></div><!-- delete -->
				</div>
			</div>
		</section>

		<div class="content-image" id="contact">
			<footer>
				<h2>Entre em Contato</h2>
				<form>
					<div class="form-group form1">
						<label for="nome">Nome:</label>
						<input type="text" class="form-control" name="nome" id="nome" required>
					</div>
					<div class="form-group form2">	
						<label for="email">Email:</label>
    					<input type="email" class="form-control" name="email" id="email" required>
					</div>
					<div class="form-group form3">
						<label for="mensagem">Mensagem:</label>
						<textarea class="form-control" name="mensagem" id="mensagem" rows="7" required></textarea>
					</div>
					<div class="form-group form3">						
						<button type="submit" class="btn btn-success">Enviar</button>
					</div>				
				</form>
				<div class="bottom">
					<div class="media">
						<?php
							echo '<a href="'.$facebook.'"><img src="'.get_template_directory_uri().'/img/fb.png" class="img-responsive" alt="Facebook"></a>' 
								.'<a href="'.$linkedin.'"><img src="'.get_template_directory_uri().'/img/li.png" class="img-responsive" alt="LinkedIn"></a>';
						?>
					</div>
					<div class="dev">Desenvolvido por <a href="http://yanni.pe.hu">Yanni</a> e <a href="#">André</a></div>
				</div>
			</footer>
		</div>		
	</div>
	
	<!-- <a href='http://br.freepik.com/fotos-gratis/mesa-cheia-de-frutas-e-legumes_889647.htm'>Designed by Freepik</a> -->
	<!-- <a href='http://br.freepik.com/fotos-gratis/vista-de-cima-de-carne-com-legumes-frescos_910053.htm'>Designed by Freepik</a> -->