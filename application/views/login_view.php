<button id='login_button'> <a href="<?php echo site_url('register_page') ?>"> Register </a> </button>
<div id = 'center_form'>
<?php echo form_open('login_page/login');
	echo form_input('email','E-mail');
	echo br();
	echo form_password('pass','Password');
	echo br();
	echo form_submit('submit','Login Me!');
 ?>
 </div>


