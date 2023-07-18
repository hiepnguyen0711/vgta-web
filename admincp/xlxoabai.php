<?php 

	$id_tin = $_GET["id"];
	include("../libra/dbconnect.php");
	
	$sql = "delete from tin where id = $id_tin";
	mysqli_query($connect,$sql);
	header("location:../index.php");
?>