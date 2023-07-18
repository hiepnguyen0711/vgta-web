<?php
	
/*	session_start();*/
	
	
	if(!isset($_SESSION["IsLogin"]))
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("Bạn Chưa Đăng Nhập");'; 
		echo 'window.location ="dangnhap.php";';
		echo '</script>';
		
		
	}
	else
	{
		require 'libra/dbconnect.php';
		$NguoiDang = $_SESSION['id'];
		$qrktcg = "select `FMember` from `accounts` where `id` = $NguoiDang ";
		$resultktcg = mysqli_query($connect,$qrktcg);
		$rowktcg = mysqli_fetch_array($resultktcg);
		$ktcg = $rowktcg['FMember'];
		if($ktcg != 255)
		{
				echo '<script type="text/javascript">'; 
				echo 'alert("Bạn đã có gangs");'; 
				echo 'window.location ="thongtintaikhoan-1";';
				echo '</script>';
		}
		else
		{
			if(isset($_POST['btnDang']))
		{
			$qrkt = "select * from `donxingang` where `idsql` = $NguoiDang and `trangthai` = 0";
			$resultkt = mysqli_query($connect,$qrkt);
			/*$row = mysqli_fetch_array($resultkt);*/
			$kt = mysqli_num_rows($resultkt);
			if($kt > 0)
			{
				echo '<script type="text/javascript">'; 
				echo 'alert("Bạn chỉ được nộp 1 đơn, đơn của bạn đang chờ duyệt");'; 
				echo 'window.location ="thongtintaikhoan-1";';
				echo '</script>';
			}
			else
			{
				$tengang = $_POST['tengang'];
				$anhgang = $_FILES['anhgang']['name'];	
				$anhgang_tmp = $_FILES['anhgang']['tmp_name'];
				if($_FILES['anhgang']['type'] == "image/jpeg"
				|| $_FILES['anhgang']['type'] == "image/png"
				|| $_FILES['anhgang']['type'] == "image/gif")
				{
				move_uploaded_file($anhgang_tmp, 'hinhgangs/'.$anhgang);
				
				
				$lydo = $_POST['lydo'];
				$NgayDang = date('y-m-d');
				
				$email = $_POST['email'];
				
				$qr = "INSERT INTO `donxingang` (`id`, `idsql`, `tengang`, `email`, `lydo`, `hinhgang`, `trangthai`, `ngaynopdon`) VALUES (NULL, '$NguoiDang', '$tengang', '$email', '$lydo', '$anhgang', '0', '$NgayDang')";
				
				mysqli_query($connect,$qr);
				
				echo '<script type="text/javascript">'; 
				echo 'alert("Bạn đã nộp đơn thành công, đợi admin duyệt nhé");'; 
				echo 'window.location ="thongtintaikhoan-1";';
				echo '</script>';
				}
				else{
					$message = "Ảnh không hợp lệ";
					echo "<script type='text/javascript'>alert('$message');</script>";
					
				}
			}
		}
		}

		
	}
	
	

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nhận quà xếp hạng thi đấu Mùa 1 VGTA SAMP</title>
	<base href="https://vanhiepjp.com/vgta/" />
	<link rel="stylesheet" type="text/css" href="css/stylenhanqua.css"/>
    <link rel="stylesheet" type="text/css" href="css/styletaogang.css">
</head>
<body>
	<!--<div class="header">
		<div class="container">
			<img src="images/logoTRON.png" alt="">
			<ul>
				<li><span style="color: #ffffff; font-weight: bold; margin-right: 10px;font-size:22px;">VGTA SAMP &nbsp;| </span></li>
				<li><a href="http://vgtasamp.com">Trang Chủ</a></li>
				<li><a href="#">Nhận Quà</a></li>
				<li><a href="#">Giải đấu</a></li>
				<li><a href="danhmuchuongdan.php">Hướng Dẫn</a></li>
				<li><a href="#" onclick="nhanqua()">Đăng Nhập</a></li>
			</ul>
		</div>
		
	</div>-->
	<div class="content">
		<div class="container">
			<form method="post" enctype="multipart/form-data">
            	<table width="85%" cellpadding="5" cellspacing="40">
                	<tbody>
                    	<tr>
                        	<td><span class="tieude">Tên Gang</span></td>
                            <td><input type="text" name="tengang"/></td>
                        </tr>
                        <tr>
                        	<td><span class="tieude">Lý do muốn tạo Gang</span></td>
                            <td><textarea name="lydo"></textarea></td>
                        </tr>
                        <tr>
                        	<td><span class="tieude">Facebook, Email</span></td>
                            <td><input placeholder=" Fb để admin có thể liên lạc với bạn " type="text" name="email"/></td>
                        </tr>
                        <tr>
                        	<td><span class="tieude">Logo Gang</span></td>
                            <td><input name="anhgang" type="file" name="btnChonFile" id="btnChonFile" value="Chọn Hình"/></td>
                        </tr>
                        <tr style="margin-top:10px">
                        	<td colspan="2" style="text-align:center"><button type="submit" name="btnDang" id="btnDang" class="btn btn-success">Nộp Đơn</button>
        					<button id="btnHuy" type="reset" class="btn btn-danger">Hủy Bỏ</button></td>
                        </tr>
                    </tbody>
                </table>
            </form>

		</div>
	</div>
	<div class="footer"></div>
<script>
	function nhanqua()
	{
		alert('Sắp ra mắt');
	}
</script>
</body>
</html>