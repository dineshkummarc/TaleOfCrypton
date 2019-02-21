<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>

<div class="container">
	<div class="row">
		<?php if($this->session->userdata('session_logged_in') == 0){?>
	<div class="login-form">
    <form method="POST">
        <h2 class="text-center">Log In</h2>       
        <div class="form-group">
            <input type="text" name = 'username' class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" name = 'password' class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" name='login' class="btn btn-primary btn-block">Log in</button>
        </div>       
    </form>
</div>
		<?php } ?>
	</div>  
	<div class="row">
		<?php if($this->session->userdata('session_logged_in') == 1){?>
			<h1 align="center">User Database: Tale of Crypton <?=$_SESSION['name']?></h1>
			<div class="login-form">
		<form method="POST">
            <h3>BAN User</h3>
            <div class="form-group">
            <input type="text" name = 'banUser' class="form-control" placeholder="email to ban" required="required">
            </div>
            <div class="form-group">
            <button type="submit" name='ban' class="btn btn-danger btn-block">BAN</button>
            </div>  
        </form>
        <form method="POST">
            <h3>UNBAN User</h3>
            <div class="form-group">
            <input type="text" name = 'unbanUser' class="form-control" placeholder="email to unban" required="required">
            </div>
            <div class="form-group">
            <button type="submit" name='unban' class="btn btn-success btn-block">UNBAN</button>
            </div>  
        </form>

        </div>





























	<?php } ?>
	</div>
	</div>
</body>
</html>                                		                            
