<?php
	require("dbconnect.php");
	session_start();
	$idmember = $_SESSION['id'];
	$qrmember = "select `Online` from `accounts` where `id` = $idmember";
	$resultmember = mysqli_query($connect, $qrmember);
	$rowmember = mysqli_fetch_array($resultmember);
			
	if($rowmember['Online'] == 1)
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("Vui lòng thoát Game để thực hiện chức năng này");'; 
		echo '</script>';
	}
	else if($rowmember['Online'] == 0)
	{	
		$dbidkhotoy = $_POST['dbidkhotoy'];
		$dbtentoyban = $_POST['dbtentoyban'];
		$dbloaisanpham = $_POST['dbloaisanpham'];
		$dbmodelsanpham = $_POST['dbmodelsanpham'];
		$giaban = $_POST['giaban'];
		settype($giaban,'int');
				if($giaban <= 0)
				{
					echo '<script type="text/javascript">'; 
					echo 'alert("Giá bán phải lớn hơn 0");'; 
					echo '</script>';
				}
				else{
					$qrkiemtra = "Select * from `toys` Where `modelid` != '0' and `toys`.`id` = $dbidkhotoy and `player` = $idmember";
					$resultkiemtra = mysqli_query($connect, $qrkiemtra);
					if(mysqli_num_rows($resultkiemtra) == 1)
					{
						$loaitien = $_POST['loaitien'];
						
						$qrdangban = "INSERT INTO `choden` (`sqlId`, `Model`, `loai`, `gia`, `loaigia`, `tensanpham`, `tinhtrang`) VALUES ('$idmember', '$dbmodelsanpham', '$dbloaisanpham', '$giaban', '$loaitien', '$dbtentoyban', '0')";
						mysqli_query($connect, $qrdangban);
						
						$qrcapnhatkhotoy = "UPDATE `toys` SET `modelid` = '0' WHERE `toys`.`id` = $dbidkhotoy and `player` = $idmember";
						mysqli_query($connect, $qrcapnhatkhotoy);
						
						echo '<script type="text/javascript">'; 
						echo 'alert("Đăng Bán Thành Công");'; 
						echo 'window.location.href = "../thongtintaikhoan-7";';
						echo '</script>';
					}
					else{
						echo '<script type="text/javascript">'; 
						echo 'alert("Bán thất bại \nHãy kiểm tra hàng lại");'; 
						echo 'window.location.href = "../thongtintaikhoan-5";';
						echo '</script>';
					}
				}
			}
?>