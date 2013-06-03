<button id='login_button'> <a href="<?php echo site_url('login_page') ?>"> Login </a> </button>
<div id='center_form'>
<?php echo form_open('register_page/register');
	echo form_input('email','E-mail');
	echo br();
	echo form_input('username','Username');
	echo br();
	echo form_password('pass','Password');
	echo br();
	echo form_password('confirm_pass','Confirm Password');
	echo br();
	echo form_submit('register','Register');
 ?>
</div>