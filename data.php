<?php

	include_once("db.php");
	
	
?>

<?php	
		$name	=	$_POST['name'];
		$cid	=	$_POST['cid'];

		$email	=	$_POST['email'];
		$phone	=	$_POST['contact'];
		
		$sql = "INSERT into users value ('".$name."','".$cid."','".$email."','".$phone."')";
		$query = mysqli_query($conn,$sql);
		
		
		if(!$query)
		{
			echo "Failed ".mysql_error();
			
		}
		else
		{
			header( 'Location: msg.html' );
			
		}
			?>			
		
		