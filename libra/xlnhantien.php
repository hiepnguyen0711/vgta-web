<?php 
	require("dbconnect.php");
	session_start();
	
	$idmember = $_SESSION['id'];
	$id = $_GET['id'];

	$qrhangban = "SELECT * FROM `choden` WHERE `sqlId` = $idmember and `id` = $id";
	$resulthangban = mysqli_query($connect, $qrhangban);
	$rowhangban = mysqli_fetch_array($resulthangban);
	$giaban = round($rowhangban['gia']*0.8,0);
	
	$qrmember = "select `Online` from `accounts` where `id` = $idmember";
	$resultmember = mysqli_query($connect, $qrmember);
	$rowmember = mysqli_fetch_array($resultmember);
	
	if($rowmember['Online'] == 1)
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("Vui lòng thoát Game để thực hiện chức năng này");'; 
		echo 'window.location.href = "../thongtintaikhoan-12";';
		echo '</script>';
	}
	else if($rowmember['Online'] == 0)
	{
		if(mysqli_num_rows($resulthangban) == 1)
		{
			if($rowhangban['loaigia'] == 1)
			{		
				$qrnhantien = "Update `accounts` Set `Money` = `Money` + $giaban Where `id` = $idmember";
				
			}
			else if($rowhangban['loaigia'] == 2)
			{
				$qrnhantien = "Update `accounts` Set `Coin` = `Coin` + $giaban Where `id` = $idmember";
			}
			mysqli_query($connect, $qrnhantien);
			$qrxoa = "delete from `choden` where `id` = $id";
			mysqli_query($connect, $qrxoa);
			echo '<script type="text/javascript">'; 
			echo 'alert("Nhận tiền thành công");'; 
			echo 'window.location.href = "../thongtintaikhoan-12";';
			echo '</script>';
		}
		else{
			echo '<script type="text/javascript">'; 
			echo 'alert("Nhận tiền thất bại");'; 
			echo 'window.location.href = "../thongtintaikhoan-12";';
			echo '</script>';
		}
	}
?>