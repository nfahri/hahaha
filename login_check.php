<?php 
	include('conect_database.php');
	session_start();
try{
	if($_POST['username'] && $_POST['password']){
		$login = $conn->query("call sp_login('$_POST[username]','$_POST[password]')")->fetch();
		if($login[2]==1){
			$_SESSION['user_id'] = $_POST['username'];
			setcookie("cookie_user_id",$_SESSION["user_id"],time()+(86400),"/");
			header("Location:index.php");
		}
		else
			header("Location:index.php?status=gagal_login");
	}
}
	
catch(PDOexception $e)
{
	echo $e->getMessage();
}
?>