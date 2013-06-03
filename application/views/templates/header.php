<html>
<head>
<?php echo link_tag('css/main_style.css'); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"> </script>

<title>
	BrainBattle
</title>

</head>
<body>
<?php 
	echo '<a href=' . site_url('main_page') . '>'.img(array(
		'id' => 'logo',
		'src' => 'logo.png'
	)) . '</a>';
?>