<?php 
	$id = $_GET['xxx'];
	$loai = $_GET['xx'];
	
	require("dbconnect.php");
	
	$qr = "select `XepHang`, `rankdong`, `rankbac`, `rankvang`, `rankbachkim`, `rankkimcuong` from `accounts` where `id` = $id";
	$result = mysqli_query($connect,$qr);
	$row = mysqli_fetch_array($result);
	
	$diemrank = $row['XepHang'];
	$rdong = $row['rankdong'];
	$rbac = $row['rankbac'];
	$rvang = $row['rankvang'];
	$rbachkim = $row['rankbachkim'];
	$rkimcuong = $row['rankkimcuong'];
	
	if($loai == 1)
	{
		if($diemrank >= 200)
		{
			if($rdong == 0)
			{
				$qrquadong = "UPDATE `accounts` SET `Money` = `Money` + 1000000, `Materials` = `Materials` + 5000, `rankdong` = 1 WHERE `id` = $id";
				mysqli_query($connect,$qrquadong);
				echo'<script>
				alert("Bạn đã nhận quà THÀNH CÔNG !");
				window.location = "../nhanquarank.php";
				</script>';
				
			}
			else
			{
				echo'<script>
				alert("Bạn đã nhận quà rồi");
				window.location = "../nhanquarank.php";
				</script>';
			}
		}
		else
		{
			echo'<script>
				alert("Bạn không đủ điểm rank");
				window.location = "nhanquarank.php";
			</script>';
		}
	}
	else if($loai == 2 )
	{
		if($diemrank >= 600)
		{
			if($rbac == 0)
			{
				$qrquadong = "UPDATE `accounts` SET `Money` = `Money` + 2000000, `SVIPVoucher` = `SVIPVoucher` + 1, `rankbac` = 1 WHERE `id` = $id";
				mysqli_query($connect,$qrquadong);
				echo'<script>
				alert("Bạn đã nhận quà THÀNH CÔNG !");
				window.location = "../nhanquarank.php";
				</script>';
				
			}
			else
			{
				echo'<script>
				alert("Bạn đã nhận quà rồi");
				window.location = "../nhanquarank.php";
				</script>';
			}
		}
		else
		{
			echo'<script>
				alert("Bạn không đủ điểm rank");
				window.location = "nhanquarank.php";
			</script>';
		}
	}
	else if ($loai == 3)
	{
		if($diemrank >= 1000)
		{
			if($rvang == 0)
			{
				$qrquadong = "UPDATE `accounts` SET `Money` = `Money` + 3000000, `GVIPVoucher` = `GVIPVoucher` + 1, `rankvang` = 1 WHERE `id` = $id";
				mysqli_query($connect,$qrquadong);
				echo'<script>
				alert("Bạn đã nhận quà THÀNH CÔNG !");
				window.location = "../nhanquarank.php";
				</script>';
				
			}
			else
			{
				echo'<script>
				alert("Bạn đã nhận quà rồi");
				window.location = "../nhanquarank.php";
				</script>';
			}
		}
		else
		{
			echo'<script>
				alert("Bạn không đủ điểm rank");
				window.location = "nhanquarank.php";
			</script>';
		}
	}
	else if ($loai == 4)
	{
		if($diemrank >= 1600)
		{
			if($rbachkim == 0)
			{
				$qrquadong = "UPDATE `accounts` SET `Money` = `Money` + 4000000, `VehVoucher` = `VehVoucher` + 1, `rankbachkim` = 1 WHERE `id` = $id";
				mysqli_query($connect,$qrquadong);
				echo'<script>
				alert("Bạn đã nhận quà THÀNH CÔNG !");
				window.location = "../nhanquarank.php";
				</script>';
				
			}
			else
			{
				echo'<script>
				alert("Bạn đã nhận quà rồi");
				window.location = "../nhanquarank.php";
				</script>';
			}
		}
		else
		{
			echo'<script>
				alert("Bạn không đủ điểm rank");
				window.location = "nhanquarank.php";
			</script>';
		}
	}
	else if ($loai == 5)
	{
		if($diemrank >= 2500)
		{
			if($rkimcuong == 0)
			{
				$qrquadong = "UPDATE `accounts` SET `Money` = `Money` + 5000000, `Coin` = `Coin` + 500 , `Materials` = `Materials` + 20000, `rankkimcuong` = 1 WHERE `id` = $id";
				mysqli_query($connect,$qrquadong);
				echo'<script>
				alert("Bạn đã nhận quà THÀNH CÔNG !");
				window.location = "../nhanquarank.php";
				</script>';
				
			}
			else
			{
				echo'<script>
				alert("Bạn đã nhận quà rồi");
				window.location = "../nhanquarank.php";
				</script>';
			}
		}
		else
		{
			echo'<script>
				alert("Bạn không đủ điểm rank");
				window.location = "nhanquarank.php";
			</script>';
		}
	}
?>