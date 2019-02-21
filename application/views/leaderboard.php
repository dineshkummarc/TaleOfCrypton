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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">	
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/leaderboard.css');?>"/>
	</head>
	<body style="overflow: unset;" align="center">
		<h1 style="font-family: myFont; color:#71580f;">LEADERBOARD</h1>
		<?php 
		echo "<table id ='example' class='table table-striped table-bordered table-hover' style='font-family: myFont;'>
		            <tr>
					<th>RANK</th>
					<th>NAME<hr></th>
					<th>LEVEL<hr></th>
					</tr>";
				$count = 0; 
        foreach($rank as $row){
        	    $count++;
        	     echo "<tr><td>";
                 echo $count;
                 echo "</td>";
        	     echo "<td>";
        	     echo $row['name'];
        	     echo "</td><td>";
        	     echo $row['question_id'];
        	     echo "</td></tr>";
        }
        echo "</table><br/>";
        ?>
<script>
			
$(document).ready(function() {
    $('#example').DataTable();
} );
		</script>
	
	</body>
</html>
