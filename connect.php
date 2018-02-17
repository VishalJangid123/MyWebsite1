<?php
$host = "localhost";
$user = "root";
$pass = "";
$database="member";  
$con=mysql_connect($host,$user,$pass);
if(! $con)
{
die('Connection Failed'.mysql_error());
}

mysql_select_db($database,$con);
?>