<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!isset($_SESSION['name'])) {
    redirect(base_url());
}
?>

<html>
	<head>
		<meta charset = "UTF-8">
		<meta name = "viewport" content = "width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
		<meta http-equiv= "X-UA-Compatible" content="ie=edge">
		<title>Tale Of Crypton</title>
		<!--------STYLESHEET lINKS--------->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/home.css');?>"/>
		
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top opaque-navbar">
			<h1 class="welcome-user" align="center">Welcome <?=$_SESSION['name']?></h1>
		</div>
		<div class="container" align="center">
			<div class="row"><a href="<?php echo site_url('Welcome/startGame'); ?>">START GAME</a></div>
			<div class="row"><a href="<?php echo site_url('Welcome/leaderboard'); ?>">LEADERBOARD</a></div>
			<div class="row"><a href="<?php echo site_url('Welcome/rules'); ?>">RULES</a></div>
			<div class="row"><a href="<?=base_url()?>Auth/logout">LOGOUT</a></div>
		</div>
	</body>
</html>
