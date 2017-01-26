<?php settings_errors(); ?>
<h1>Configurações do Tema</h1>

<form action="options.php" method="POST">
	<?php  settings_fields ( 'nutrieduc-settings-group');?>
	<?php  do_settings_sections('nutrieduc');?>
	<?php  submit_button(); ?>
</form>
