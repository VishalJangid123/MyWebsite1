<?php    

Include('connect.php')

If(isset($_REQUEST['submit'])!='')
{
If($_REQUEST['name']=='' || $_REQUEST['cid']=='' || $_REQUEST['dob']=='' || $_REQUEST['contact']=='' ||$_REQUEST['email']=='' )
{
Echo "please fill the empty field.";
}
Else
{
$sql="insert into member(name,cid,dob,contact,email) values('".$_REQUEST['name']."','".$_REQUEST['cid']."','".$_REQUEST['dob']."', '".$_REQUEST['contact']."','".$_REQUEST['email']."')";
$res=mysql_query($sql);
If($res)
{
Echo "Record successfully inserted";
}
Else
{
Echo "There is some problem in inserting record";
}

}
}

?>