<?php
	session_start();
	$connect = mysqli_connect("localhost","root","","vgta_lvrp");
	mysqli_query($connect,"SET NAMES 'utf8'");
	
	if(isset($_SESSION["IsLogin"]))
	{
		header('location:http://vgtasamp.com/event/event.php/');
		
	}
	$thongbao = "";
	
		$taikhoan = trim($_POST['taikhoan']);
		$matkhau = trim($_POST['matkhau']);
		$matkhaumh = strtoupper(hash('whirlpool',$matkhau));
		
		$qr = "select * from `accounts` where `Username` = '$taikhoan' and `Key` = '$matkhaumh' ";
		$ketqua = mysqli_query($connect, $qr);
		$sodong = mysqli_num_rows($ketqua);
		if($sodong == 1)
		{
			$dong = mysqli_fetch_array($ketqua);
			$_SESSION['taikhoan'] = $dong['Username'];
			$_SESSION['matkhau'] = $dong['Key'];
			$_SESSION['songay'] = $dong['songay'];
			$_SESSION['id'] = $dong['id'];
			$_SESSION["IsLogin"] = 1;
			echo ' <button type="button" onclick="tatdangnhap2()" class="nen_nut_event">ĐÓNG LẠI</button>
                </form>
                	<h3 >
                		<span style="color:#28c813">Đăng nhập THÀNH CÔNG</span>
                	</h3>';
			//header('location:');
		}
		else{
			echo ' <button type="button" onclick="xldangnhap()" class="nen_nut_event">Đăng nhập ngay</button>
                </form>
                	<h3 >
                		Tài khoản hoặc mật khẩu không đúng
                	</h3>';
		}


?>
