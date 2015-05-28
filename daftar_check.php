<?php
	include('conect_database.php');
try{
	// echo $_POST['nama']."<br/>";
	// echo $_POST['username']."<br/>";
	// echo $_POST['email']."<br/>";
	// echo $_POST['password']."<br/>";
	// echo $_POST['jenis_kelamin']."<br/>";
	// echo $_POST['tgl_lahir'];
	if(isset($_POST)){
		$hasil = $conn->query("call sp_daftar('$_POST[nama]','$_POST[username]','$_POST[email]','$_POST[password]','$_POST[jenis_kelamin]','$_POST[tgl_lahir]')")->fetch();
		if($hasil[2]==1){
			header("Location:index.php?status=berhasil_daftar");		
		}
		else
			header("Location:index.php?status=gagal_daftar");
	}

}
	
catch(PDOexception $e)
{
	echo $e->getMessage();
}
?>