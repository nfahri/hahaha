<?php
	include('conect_database.php');

	try{
		$pilih_karakter = $conn->query("call sp_pilih_karakter('$_POST[karakter]')");

		if($pilih_karakter[2] == "1")		
			// header("Location:main_page.php?status=berhasil");
			echo "berhasil";
		
		else
			// header("Location:pilih_karakter.php?status=gagal");
			echo "gagal";
	}
	catch(PDOEXception $e){
		echo $e->getMessage();

	}

?>