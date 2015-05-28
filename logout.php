<?php
include ('connection/connect.php');
try
{
	session_start();
	session_unset();
	setcookie("cookie_user_id","",time()-3600,"/");
	//setcookie("cookie_anggota_id",$_SESSION["anggota_id"],time()+(86400),"/");
	header("Location:index.php");
}
catch(PDOexception $e)
{
	echo $e->getMessage();
}
?>