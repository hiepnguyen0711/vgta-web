<?php 
	session_start();
	require("dbconnect.php");
	
	$id = $_SESSION['id'];
	$idchoden = $_GET['id'];
	
	$qrmember = "select `Money`, `Coin`, `Online` from `accounts` where `id` = $id";
	$qrchoden = "select * from `choden` where `id` = $idchoden and `tinhtrang` = 0";
	
	$resultmember = mysqli_query($connect, $qrmember);
	$resultchoden = mysqli_query($connect, $qrchoden);

	$rowmember = mysqli_fetch_array($resultmember);
	$rowchoden = mysqli_fetch_array($resultchoden);
	$kiemtra = mysqli_num_rows($resultchoden);
	// Kiểm Tra Online
	
	if($rowmember['Online'] == 1)
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("Vui lòng thoát Game để thực hiện chức năng này");'; 
		echo 'window.location.href = "../thongtintaikhoan-7";';
		echo '</script>';
	}
	else if($rowmember['Online'] == 0)
	{
		if($kiemtra == 0)
		{
			echo '<script type="text/javascript">'; 
			echo 'alert("Hàng đã được bán");'; 
			echo 'window.location.href = "../thongtintaikhoan-7";';
			echo '</script>';
		}
		else if($kiemtra == 1)
		{
			$model = $rowchoden['Model'];
			if($model >= 400 && $model <= 600)
			{
				$loai = 1;
			}
			else if($model >= 80000 and $model <= 90000)
			{
				$loai = 3;
			}
			else{
				$loai = 2;
			}
			
			if($rowchoden['loaigia'] == 1)
			{
				if($rowmember['Money'] < $rowchoden['gia'])
				{
					echo '<script type="text/javascript">'; 
					echo 'alert("Bạn không đủ tiền");'; 
					echo 'window.location.href = "../thongtintaikhoan-7";';
					echo '</script>';
				}
				else
				{
					$qrupdatedaban = "update `choden` set `tinhtrang` = 1 where `id` = $idchoden"; 
					$qrtrutien = "update `accounts` set `Money` = `Money` - ".$rowchoden['gia']." where `id` = $id";
					$qrchuyenvaokho = "INSERT INTO `khodo` (`sqlId`, `Model`, `loai`) VALUES ('$id', '$model', '$loai')"; 
					
					mysqli_query($connect,$qrupdatedaban);
					mysqli_query($connect,$qrtrutien);
					mysqli_query($connect,$qrchuyenvaokho);
					
					echo '<script type="text/javascript">'; 
					echo 'alert("Mua thành công");'; 
					echo 'window.location.href = "../thongtintaikhoan-4";';
					echo '</script>'; 
				}
			}
			else if($rowchoden['loaigia'] == 2)
			{
				if($rowmember['Coin'] < $rowchoden['gia'])
				{
					echo '<script type="text/javascript">'; 
					echo 'alert("Bạn không đủ tiền");'; 
					echo 'window.location.href = "../thongtintaikhoan-7";';
					echo '</script>';
				}
				else
				{
					$qrupdatedaban = "update `choden` set `tinhtrang` = 1 where `id` = $idchoden"; 
					$qrtrutien = "update `accounts` set `Coin` = `Coin` - ".$rowchoden['gia']." where `id` = $id";
					$qrchuyenvaokho = "INSERT INTO `khodo` (`sqlId`, `Model`, `loai`) VALUES ('$id', '$model', '$loai')"; 
					
					mysqli_query($connect,$qrupdatedaban);
					mysqli_query($connect,$qrtrutien);
					mysqli_query($connect,$qrchuyenvaokho);
					
					echo '<script type="text/javascript">'; 
					echo 'alert("Mua thành công");'; 
					echo 'window.location.href = "../thongtintaikhoan-4";';
					echo '</script>'; 
				}	
			}
		}
	}
?>