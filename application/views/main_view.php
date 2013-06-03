<button id='login_button'> 
<?php 
if($this->session->userdata('logged_in') == TRUE) {
	echo '<a href= ' . site_url('login_page/logout') . '> Logout  </a> ';
}
else {
	echo '<a href= ' . site_url('login_page') . '> Login  </a> ';
}
?>
</button>