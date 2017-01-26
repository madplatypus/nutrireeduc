<?php settings_errors(); ?>
<h1>Configurações do Tema</h1>

<form action="options.php" method="POST">
	<?php  settings_fields ( 'nutrieduc-redessociais');?>
	<?php  do_settings_sections('nutrieduc_redesociais');?>
	<?php  submit_button();?>
</form>
