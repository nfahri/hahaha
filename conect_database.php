<?php
	$servername = "10.151.36.70";
	$username = "fp_mbd";
	$password = "fp_mbd";

try {
    $conn = new PDO("mysql:host=$servername;dbname=kuliahga_hahaha", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection database failed: " . $e->getMessage()."!!";
    }
?>
