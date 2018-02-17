<?php

	include_once("db.php");
	
	
?>

<?php	
		$name	=	$_POST['name'];
		$cid	=	$_POST['cid'];
		$dob    =   $_POST['dob'];

		$email	=	$_POST['email'];
		$phone	=	$_POST['contact'];
		
		$sql = "INSERT into members value ('".$name."','".$cid."','".$dob."','".$email."',".$phone.")";
		$query = mysqli_query($conn,$sql);
		
		
		if(!$query)
		{
			echo "Failed ".mysql_error();
			
		}
		else
		{
			echo "Successful";
			
		}
			?>			
		
		