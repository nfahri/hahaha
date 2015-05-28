<?php
	include('conect_database.php');

	try{
		if($_REQUEST)
		{			
			$id_karakter =  intval($_REQUEST["id_karakter"]);
			
			$deskripsi_karakter = $conn->query("select * from karakter where karakter_id = $id_karakter;")->fetch();
			if($deskripsi_karakter)
			{
				
				// echo "<div><h3>";
				// echo "Karakter&nbsp: ".$deskripsi_karakter["karakter_nama"]."<br/>";
				echo "
				<div class=\"row kotak-status\">
					<!-- nama -->
					<div class=\"col-sm-4\"></div>
					<div class=\"col-sm-1\">
						<img src=\"images/char.png\" class=\"gambar\">
					</div>
					<div class=\"col-sm-3 status text-center\">
						".$deskripsi_karakter["karakter_nama"]."
					</div>
					<div class=\"col-sm-4 status\"></div>

					<!-- HP -->
					<div class=\"col-sm-4\"></div>
					<div class=\"col-sm-1\">
						<img src=\"images/HP.png\" class=\"gambar\">
					</div>
					<div class=\"col-sm-1 status\">
						".$deskripsi_karakter["karakter_hp"]."
					</div>

					<!-- ATK -->
					<div class=\"col-sm-1\">
						<img src=\"images/attack.png\" class=\"gambar\">
					</div>
					<div class=\"col-sm-4 status\">
						".$deskripsi_karakter["karakter_atk"]."
					</div>
					<div class=\"col-sm-1\"></div>

					<!-- DEF -->
					<div class=\"col-sm-4\"></div>
					<div class=\"col-sm-1\">
						<img src=\"images/defense.png\" class=\"gambar\">
					</div>
					<div class=\"col-sm-1 status\">
						".$deskripsi_karakter["karakter_def"]."
					</div>

					<!-- EVA -->
					<div class=\"col-sm-1\">
						<img src=\"images/evasion.png\" class=\"gambar\">
					</div>
					<div class=\"col-sm-4 status\">
						".$deskripsi_karakter["karakter_eva"]."
					</div>
					<div class=\"col-sm-1\"></div>
				</div>
				<div class=\"row\">
					<div class=\"col-sm-4 status\"></div>
					<div class=\"col-sm-4 status\">
						<form action='pilih_karakter_check.php' method='POST'>
							<button type='submit' class=\"btn btn-primary btn-block\" name='karakter' value='".$id_karakter."'>Pilih</button>
						</form>
					</div>
					<div class=\"col-sm-4 status\"></div>
				</div>
				<br>
				
				";

				// echo "</h3></div>";
				// echo "<br/><table>";
				// echo "<tr><td><strong><img src=\"images/char.png\" class=\"gambar\"></strong></td><td>".$deskripsi_karakter["karakter_nama"]."</td></tr>";
				// echo "<tr><td><strong><img src=\"images/HP.png\" class=\"gambar\"></strong></td><td>".$deskripsi_karakter["karakter_hp"]."</td></tr>";
				// echo "<tr><td><strong><img src=\"images/attack.png\" class=\"gambar\"></strong></td><td>".$deskripsi_karakter["karakter_atk"]."</td></tr>";
				// echo "<tr><td><strong><img src=\"images/defense.png\" class=\"gambar\"></strong></td><td>".$deskripsi_karakter["karakter_def"]."</td></tr>";
				// echo "<tr><td><strong><img src=\"images/evasion.png\" class=\"gambar\"></strong></td><td>".$deskripsi_karakter["karakter_eva"]."</td></tr>";			
				// echo "</table>";
				// echo "<br/><br/><form action='pilih_karakter_check.php' method='POST'><button type='submit' name='karakter' value='".$id_karakter."'>Pilih</button></form>";
				
			}
			else
			{
				
				echo "kosong";
			}
		}

		
	}
	catch(PDOEXception $e){
		echo $e->getMessage();
	}
	
?>