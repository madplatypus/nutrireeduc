		<div class="content-image">
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
						<textarea class="form-control" name="Mensagem" id="Mensagem" rows="7" required></textarea>
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

