<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!isset($_SESSION['name'])) {
    redirect(base_url());
    }
?>
<html>
	<head><title>Tale of Crypton</title>
    <link rel="icon" href="<?php echo base_url('/assets/images/favicon.ico');?>" type="image/gif">
    <meta name = "viewport" content = "width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/rules.css');?>"/>
    <script src="<?php echo base_url('/assets/js/main.js');?>"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
           body{
              background-image: url(<?php echo base_url('/assets/images/home_background.jpg');?>);
              background-size: cover;
              height:95vh;
              background-repeat:no-repeat;
                 background-position: center;
           }
           #left-arrow {
        width:25px;
        height:25px;
        vertical-align: text-bottom;
      }
        </style>
	</head>
	<body>
    <header>
    <img src="<?php echo base_url('/assets/images/left-sign.svg');?>" id="left-arrow"/><span><a href="<?php echo site_url('Welcome/loggedIn'); ?>" style="font-size: 25px; color:white;">&nbsp HOME</a></span>
    <nav id="navbar" class="">
      <ul>
        <li><a href="https://isteknit.org">About Us</a></li>
        <li><a href="<?php echo site_url('Welcome/contact'); ?>">Contact Us</a></li>
      </ul>
    </nav>
    <div onclick="navbar()">
      <i id="navbtn" class="fa fa-bars fa-2x" aria-hidden="true"></i>
      <i id="navcls" style="display:none;" class="fa fa-times fa-2x" aria-hidden="true"></i>
    </div>
  </header>
       <div class="rulebox">
          <img src="<?php echo base_url('/assets/images/rules/0.jpg');?>" alt="">
          <img src="<?php echo base_url('/assets/images/rules/1.jpg');?>" alt="">
          <img src="<?php echo base_url('/assets/images/rules/2.jpg');?>" alt="">
          <img src="<?php echo base_url('/assets/images/rules/3.jpg');?>" alt="">
          <img src="<?php echo base_url('/assets/images/rules/4.jpg');?>" alt="">
          <img src="<?php echo base_url('/assets/images/rules/5.jpg');?>" alt="">
          <img src="<?php echo base_url('/assets/images/rules/6.jpg');?>" alt="">
       </div>
  <footer>
    <a href="https://www.facebook.com/isteknit">
        <img src="<?php echo base_url('/assets/images/fb.png');?>" alt="">
        <span>facebook.com/isteknit</span>
    </a>
    <a href="https://isteknit.org">
        <span>isteknit.org</span>
        <img src="<?php echo base_url('/assets/images/web.png');?>" alt="">
    </a>
  </footer>
	</body>
</html>
