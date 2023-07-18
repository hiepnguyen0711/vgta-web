<?php 
	session_start();
	$connect = mysqli_connect("localhost","root","","vgta_lvrp");
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$homnay = date('d');
	/*$qr = "select * from `accounts` where `Username` = '$taikhoan' and `Key` = '$matkhaumh' ";
		$ketqua = mysqli_query($connect, $qr);

			$dong = mysqli_fetch_array($ketqua);*/
			$taikhoan = $_SESSION['taikhoan'];
			$matkhau = $_SESSION['matkhau'];
			$songay = $_SESSION['songay'];
			$id = $_SESSION['id'];
			$tinhtrang = $_SESSION["IsLogin"];
			
			
			$qrmember = "select `Online` from `accounts` where `id` = $idmember";
			$resultmember = mysqli_query($connect, $qrmember);
			$rowmember = mysqli_fetch_array($resultmember);
			
			if($rowmember['Online'] == 1)
			{
				echo '<script type="text/javascript">'; 
				echo 'alert("Vui lòng thoát Game để thực hiện chức năng này");'; 
				echo 'window.location.href = "../event.php";';
				echo '</script>';
			}
			
			$qr = "select `songay`, `ngaynhan` from `accounts` where `Username` = '$taikhoan'";
			$result = mysqli_query($connect,$qr);
			$row = mysqli_fetch_array($result);
			$songay = $row['songay'];
			if($homnay == $row['ngaynhan'])
			{
				echo '<script>alert("Hôm nay bạn đã nhận quà rồi");
						window.location = "../event.php";
					</script>';
				
			}
			else
			{
				if($songay >= 7 )
				{
					echo '<script>alert("Bạn đã nhận MAX quà rồi");
						window.location = "../event.php";
					</script>';
				}
				else
				{
					if($songay == 0)
					{
						$qr = "update `accounts` set `Money` = `Money` + 100000, `XepHang` = `XepHang` + 20 where `Username` = '$taikhoan'";
						mysqli_query($connect,$qr);
					}
					else if($songay == 2)
					{
						$qr = "update `accounts` set `GVIPExVoucher` = `GVIPExVoucher` + 1, `XepHang` = `XepHang` + 20 where `Username` = '$taikhoan'";
						mysqli_query($connect,$qr);
					}
					else if($songay == 4)
					{
						$qr = "update `accounts` set `Money` = `Money` + 300000, `XepHang` = `XepHang` + 20 where `Username` = '$taikhoan'";
						mysqli_query($connect,$qr);
					}
					else if($songay == 6)
					{
						$qr = "update `accounts` set `XepHang` = `XepHang` + 40, `ToySlot` = `ToySlot` + 1 where `Username` = '$taikhoan'";
						$qr2 = "INSERT INTO `toys` (`player`, `modelid`, `bone`, `posx`, `posy`, `posz`, `rotx`, `roty`, `rotz`, `scalex`, `scaley`, `scalez`, `tradable`, `special`) VALUES ('$id', '-2007', '2', '-0.727998', '-0.02', '-0.005', '95.1', '90.6', '-5.59999', '1.258', '1.16', '1.295', '1', '0')";
						mysqli_query($connect,$qr);
						mysqli_query($connect,$qr2);
					}
					
					
					$qr = "update `accounts` set `songay` = `songay` + 1, `ngaynhan` = '$homnay'  where `Username` = '$taikhoan'";
					mysqli_query($connect,$qr);
					
					echo '<script>alert("Chúc mừng bạn đã nhận quà thành công");
						window.location = "../event.php";
					</script>';
					
				}
				
			}
			
?>