<?php
	require("dbconnect.php");
	session_start();
	
	
	$id = $_GET['id'];
	$idkho = $_GET['idkho'];
	
	/*echo "id = $id <br/>";
	echo "idkho = $idkho ";*/
	$idmember = $_SESSION['id'];
	$qrmember = "select `Online` from `accounts` where `id` = $idmember";
	$resultmember = mysqli_query($connect, $qrmember);
	$rowmember = mysqli_fetch_array($resultmember);
	
	if($rowmember['Online'] == 1)
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("Vui lòng thoát Game để thực hiện chức năng này");'; 
		echo 'window.location.href = "../thongtintaikhoan-3";';
		echo '</script>';
	}
	else if($rowmember['Online'] == 0)
	{
	
		$qrlaythongtinkhotam = "select * from `khodo` where `id` = $id";
		$resultthongtinkhotam = mysqli_query($connect,$qrlaythongtinkhotam);
		$rowlaythongtinkhotam = mysqli_fetch_array($resultthongtinkhotam);
		$modelid = $rowlaythongtinkhotam['Model'];
		
		if(mysqli_num_rows($resultthongtinkhotam) == 1)
		{
		
			$qrupdatevaogame = "UPDATE `toys` SET `modelid` = '$modelid', `bone` = '2' WHERE `toys`.`id` = $idkho";
			$qrxoakhotam = "delete from `khodo` where `id` = $id and `sqlId` = $idmember";
			
			mysqli_query($connect,$qrupdatevaogame);
			mysqli_query($connect,$qrxoakhotam);
			
			echo '<script type="text/javascript">'; 
			echo 'alert("Chuyển vào game thành công\nVào Game /toys để xài nhé ^_^");'; 
			echo 'window.location.href = "../thongtintaikhoan-5";';
			echo '</script>'; 
		}
		else{
			echo '<script type="text/javascript">'; 
			echo 'alert("Chuyển vào game thất bại\n Hãy kiểm tra lại hàng");'; 
			echo 'window.location.href = "../thongtintaikhoan-4";';
			echo '</script>'; 
		}
		//header("location:../thongtintaikhoan-3");
	}

?>