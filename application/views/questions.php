<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
 define('IMAGE_PATH', base_url($path));
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

		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<!--------STYLESHEET lINKS--------->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/question.css');?>"/>
	</head>
	<body>
	<div class="container">
    <!--<div class="row"><img src="<?php echo base_url($path); ?>" /></div><br/>-->
    <img src="<?php echo base_url('/assets/images/left-sign.svg');?>" id="left-arrow"/><span><a href="<?php echo site_url('Welcome/loggedIn'); ?>" style="font-size: 25px; color:black;">&nbsp Home</a></span>
    <a href="https://www.facebook.com/isteknit" class="hintbtn" aria-hidden="true"><img src="<?php echo base_url('/assets/images/hint.png');?>" alt="Hint" height="90px;"></a>
    <div align="center">
    <div class="questionbox">
    <div class="qtxt">Level: <?php echo $question_id; ?></div>
    <div class="qimgbox"><img class="qimg" src="<?php echo IMAGE_PATH; ?>" /></div>
      <form class="abox" method="POST">
        <input class ="ansbox" name="answer" type="text" placeholder="Answer">
        <input class="ansbtn" type="submit" value="Enter">
      </form>
  </div></div>
</div>
</body>
</html>
