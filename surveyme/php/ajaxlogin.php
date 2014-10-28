<?php
include("connection.php");
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
	$username=mysqli_real_escape_string($db,$_POST['username']); 
	$password=mysqli_real_escape_string($db,$_POST['password']);

	$result=mysqli_query($db,"SELECT Email FROM login_info WHERE Email='$username' and Password='$password'");
	$count=mysqli_num_rows($result);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	if($count==1)
	{
		$_SESSION['login_user']=$row['Email'];
		echo $row['Email'];
	}
}
?>