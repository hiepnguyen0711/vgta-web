<?php 
	require("dbconnect.php");
	session_start();
	
	$idmember = $_SESSION['id'];
	$id = $_GET['id'];

	
	$qrhangban = "SELECT * FROM `choden` WHERE `sqlId` = $idmember and `id` = $id AND `tinhtrang` = 0";
	$resulthangban = mysqli_query($connect, $qrhangban);
	$rowhangban = mysqli_fetch_array($resulthangban);
	$giaban = round($rowhangban['gia']*0.8,0);
	$model = $rowhangban['Model'];
	$loai = $rowhangban['loai'];
	
	
	$qrhuyhang = "INSERT INTO `khodo` (`sqlId`, `Model`, `loai`) VALUES ('$idmember', '$model', '$loai')";
	
	

		if(mysqli_num_rows($resulthangban) == 1)
		{
				$qrhuyhang = "INSERT INTO `khodo` (`sqlId`, `Model`, `loai`) VALUES ('$idmember', '$model', '$loai')";
			mysqli_query($connect, $qrhuyhang);
			$qrxoa = "delete from `choden` where `id` = $id";
			mysqli_query($connect, $qrxoa);
			echo '<script type="text/javascript">'; 
			echo 'alert("Hủy hàng thành công \nHàng sẽ được chuyển vào Kho tạm");'; 
			echo 'window.location.href = "../thongtintaikhoan-12";';
			echo '</script>';
		}
		else{
			echo '<script type="text/javascript">'; 
			echo 'alert("Hủy hàng thất bại");'; 
			echo 'window.location.href = "../thongtintaikhoan-12";';
			echo '</script>';
		}
	
?>