<?php 
	require("dbconnect.php");
	$iddon = $_GET['idd'];
	$sql = "UPDATE `donxingang` SET `trangthai` = 2 WHERE `donxingang`.`id` = $iddon";
	mysqli_query($connect,$sql);
	header('location:../thongtintaikhoan-9');
?>