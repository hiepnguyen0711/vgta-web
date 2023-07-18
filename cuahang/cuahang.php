<?php 
	session_start();
	require("library/dbconnect.php");
	if(isset($_SESSION["IsLogin"]))
	{
		$taikhoan = $_SESSION["taikhoan"];
		$sql = "select `cash`, `Online` from `accounts` where `Username` = '$taikhoan'";
		$result = mysqli_query($connect,$sql);
		$row = mysqli_fetch_array($result);
		$cash = $row["cash"];
		$online = $row['Online'];
	}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/sytlecuahangtienloi.css"/>
<link rel="shortcut icon" type="image/x-icon" href="../images2/LOGOTRON.png" />
<title>Cửa hàng OOC VGTA SAMP</title>
<base href="https://vanhiepjp.com/vgta/cuahang/" />
</head>

<body>
<div class="xoaymanhinh"></div>
<div class="header">
	<div class="container">
        <div class="logo"><img src="images2/LOGOTRON.png" alt="VGTA SAMP" title="VGTASAMP" /></div>
        <div class="dangnhap">
        	<?php 
				if(isset($_SESSION["IsLogin"]))
				{
					echo '<a href="../thongtintaikhoan-1" target="_blank"><span class="textdangnhap">ĐANG CÓ: '. $cash.' <span style="color:#0aec1f">CASH</span></span></a>';
				}
				else
				{
					echo '<a href="../dangnhap.php" target="_blank"><span class="textdangnhap">ĐĂNG NHẬP</span></a>';
				}
			?>
            
            
        </div>
    </div>
</div>

    <div class="container">
        <div class="content">
            <div class="cuahang">
            	<div class="cuahang2">
                	<img src="images2/logocuahang.png" alt="cua hang vgta samp" />
                </div>	
            </div>
            
            
            <div class="vatpham">
                <div class="containervp2">
                
                        <div class="vatpham2">
                            <div class="sanpham1">
                                <span class="giamgia">-50%</span>
                                <span class="tensanpham"><span style="color:#fe1232">XE HIẾM (?)</span><br />
                                <?php 
									//xe hiếm
									$qr1 = "select * from `cuahang` where id = 1";
									$result1 = mysqli_query($connect,$qr1);
									$row1 = mysqli_fetch_array($result1);
								?>
                                Số lượng còn: <?php echo $row1['so_luong'];?>
                                </span>
                                <span class="coin">
                                <?php 
									if(isset($_SESSION["IsLogin"]))
									{
								?>
                                	<a onclick="xlmua1(<?php echo $cash ?>,<?php echo $online?>,700,1,<?php echo $row1['so_luong']?>)">700 <br />
                                    <span class="mua">CASH</span></a>
                                <?php 
									}
									else
									{
								?>
									<a onclick="alert('Bạn chưa đăng nhập')">700 <br />
                                    <span class="mua">CASH</span></a>
                                    <?php 	
									}
								?>
                                    
                                </span>
                                <img src="images2/default.png" />
                            </div>
                        </div>
                    
                        <div class="vatpham1">
                            <div class="sanpham1">
                                <span class="giamgia">-50%</span>
                                <span class="tensanpham"><span style="color:#fe1232">TOY VIP (?)</span><br />
                                <?php 
									//TOY hiếm
									$qr1 = "select * from `cuahang` where id = 2";
									$result1 = mysqli_query($connect,$qr1);
									$row1 = mysqli_fetch_array($result1);
								?>
                                Số lượng còn: <?php echo $row1['so_luong'];?>
                                </span>
                                <span class="coin">
                                   <?php 
									if(isset($_SESSION["IsLogin"]))
									{
								?>
                                	<a onclick="xlmua1(<?php echo $cash ?>,<?php echo $online?>,300,2,<?php echo $row1['so_luong']?>)">300 <br />
                                    <span class="mua">CASH</span></a>
                                <?php 
									}
									else
									{
								?>
									<a onclick="alert('Bạn chưa đăng nhập')">300 <br />
                                    <span class="mua">CASH</span></a>
                                    <?php 	
									}
								?>
                                </span>
                                <img src="images2/default.png" />
                            </div>
                        </div>
    
                   </div>
                
                <!-- Dòng 2-->
                <div class="containervp3">
                	 <div class="vatpham5">
                            <div class="sanpham1">
                                <span class="giamgia">-20%</span>
                                <span class="tensanpham"><span style="color:#fe1232">SNIPER DRAGON</span><br />
                               <?php 
									//sniper dragon
									$qr1 = "select * from `cuahang` where id = 3";
									$result1 = mysqli_query($connect,$qr1);
									$row1 = mysqli_fetch_array($result1);
								?>
                                Số lượng còn: <?php echo $row1['so_luong'];?>
                                </span>
                                <span class="coin">
                                    <?php 
									if(isset($_SESSION["IsLogin"]))
									{
								?>
                                	<a onclick="xlmua1(<?php echo $cash ?>,<?php echo $online?>,500,3,<?php echo $row1['so_luong']?>)">500 <br />
                                    <span class="mua">CASH</span></a>
                                <?php 
									}
									else
									{
								?>
									<a onclick="alert('Bạn chưa đăng nhập')">500 <br />
                                    <span class="mua">CASH</span></a>
                                    <?php 	
									}
								?>
                                </span>
                                <img src="images2/sa-mp-080.png" />
                            </div>
                        </div>
                        
                         <div class="vatpham4">
                            <div class="sanpham1">
                                <span class="giamgia">-0%</span>
                                <span class="tensanpham"><span style="color:#fe1232">CÁNH ÁC QUỶ</span><br />
                                <?php 
									//sniper dragon
									$qr1 = "select * from `cuahang` where id = 4";
									$result1 = mysqli_query($connect,$qr1);
									$row1 = mysqli_fetch_array($result1);
								?>
                                Số lượng còn: <?php echo $row1['so_luong'];?>
                                </span>
                                <span class="coin">
                                    <?php 
									if(isset($_SESSION["IsLogin"]))
									{
								?>
                                	<a onclick="xlmua1(<?php echo $cash ?>,<?php echo $online?>,2000,4,<?php echo $row1['so_luong']?>)">2.000 <br />
                                    <span class="mua">CASH</span></a>
                                <?php 
									}
									else
									{
								?>
									<a onclick="alert('Bạn chưa đăng nhập')">2.000 <br />
                                    <span class="mua">CASH</span></a>
                                    <?php 	
									}
								?>
                                </span>
                                <img src="images2/canhrong.png" />
                            </div>
                        </div>
                        
                         <div class="vatpham3">
                            <div class="sanpham1">
                                <span class="giamgia">-20%</span>
                                <span class="tensanpham"><span style="color:#fe1232">KHIÊN CAPTION</span><br />
                                 <?php 
									//sniper dragon
									$qr1 = "select * from `cuahang` where id = 5";
									$result1 = mysqli_query($connect,$qr1);
									$row1 = mysqli_fetch_array($result1);
								?>
                                Số lượng còn: <?php echo $row1['so_luong'];?>
                                </span>
                                <span class="coin">
                                       <?php 
									if(isset($_SESSION["IsLogin"]))
									{
								?>
                                	<a onclick="xlmua1(<?php echo $cash ?>,<?php echo $online?>,700,5,<?php echo $row1['so_luong']?>)">700 <br />
                                    <span class="mua">CASH</span></a>
                                <?php 
									}
									else
									{
								?>
									<a onclick="alert('Bạn chưa đăng nhập')">700 <br />
                                    <span class="mua">CASH</span></a>
                                    <?php 	
									}
								?>
                                </span>
                                <img src="images2/KHIENCAPTION.png" />
                            </div>
                        </div>
                        
                </div>
                
                <!--End Dòng 2-->
                <!-- Dòng 3-->
                	<div class="containervp4">
                    	<div class="vatpham10">
                            <div class="sanpham1">
                                <span class="giamgia">-30%</span>
                                <span class="tensanpham"><span style="color:#fe1232">SNIPER GOLD</span><br />
                               <?php 
									//sniper dragon
									$qr1 = "select * from `cuahang` where id = 6";
									$result1 = mysqli_query($connect,$qr1);
									$row1 = mysqli_fetch_array($result1);
								?>
                                Số lượng còn: <?php echo $row1['so_luong'];?>
                                </span>
                                <span class="coin">
                                       <?php 
									if(isset($_SESSION["IsLogin"]))
									{
								?>
                                	<a onclick="xlmua1(<?php echo $cash ?>,<?php echo $online?>,400,6,<?php echo $row1['so_luong']?>)">400 <br />
                                    <span class="mua">CASH</span></a>
                                <?php 
									}
									else
									{
								?>
									<a onclick="alert('Bạn chưa đăng nhập')">400 <br />
                                    <span class="mua">CASH</span></a>
                                    <?php 	
									}
								?>
                                </span>
                                <img src="images2/sa-mp-075.png" />
                            </div>
                        </div>
                        
                        <div class="vatpham9">
                            <div class="sanpham1">
                                <span class="giamgia">-0%</span>
                                <span class="tensanpham"><span style="color:#fe1232">ĐẦU RỒNG</span><br />
                               <?php 
									//sniper dragon
									$qr1 = "select * from `cuahang` where id = 7";
									$result1 = mysqli_query($connect,$qr1);
									$row1 = mysqli_fetch_array($result1);
								?>
                                Số lượng còn: <?php echo $row1['so_luong'];?>
                                </span>
                                <span class="coin">
                                        <?php 
									if(isset($_SESSION["IsLogin"]))
									{
								?>
                                	<a onclick="xlmua1(<?php echo $cash ?>,<?php echo $online?>,1000,7,<?php echo $row1['so_luong']?>)">1.000 <br />
                                    <span class="mua">CASH</span></a>
                                <?php 
									}
									else
									{
								?>
									<a onclick="alert('Bạn chưa đăng nhập')">1.000 <br />
                                    <span class="mua">CASH</span></a>
                                    <?php 	
									}
								?>
                                </span>
                                <img src="images2/daurong.png" />
                            </div>
                        </div>
                        
                        <div class="vatpham8">
                            <div class="sanpham1">
                                <span class="giamgia">-80%</span>
                                <span class="tensanpham"><span style="color:#fe1232">BÁNH XE VÀNG</span><br />
                               <?php 
									//sniper dragon
									$qr1 = "select * from `cuahang` where id = 8";
									$result1 = mysqli_query($connect,$qr1);
									$row1 = mysqli_fetch_array($result1);
								?>
                                Số lượng còn: <?php echo $row1['so_luong'];?>
                                </span>
                                <span class="coin">
                                        <?php 
									if(isset($_SESSION["IsLogin"]))
									{
								?>
                                	<a onclick="xlmua1(<?php echo $cash ?>,<?php echo $online?>,200,8,<?php echo $row1['so_luong']?>)">200 <br />
                                    <span class="mua">CASH</span></a>
                                <?php 
									}
									else
									{
								?>
									<a onclick="alert('Bạn chưa đăng nhập')">200 <br />
                                    <span class="mua">CASH</span></a>
                                    <?php 	
									}
								?>
                                </span>
                                <img src="images2/sa-mp-098.png" />
                            </div>
                        </div>
                        
                        <div class="vatpham7">
                            <div class="sanpham1">
                                <span class="giamgia">-50%</span>
                                <span class="tensanpham"><span style="color:#fe1232">BALO TÍM</span><br />
                               <?php 
									//sniper dragon
									$qr1 = "select * from `cuahang` where id = 9";
									$result1 = mysqli_query($connect,$qr1);
									$row1 = mysqli_fetch_array($result1);
								?>
                                Số lượng còn: <?php echo $row1['so_luong'];?>
                                </span>
                                <span class="coin">
                                       <?php 
									if(isset($_SESSION["IsLogin"]))
									{
								?>
                                	<a onclick="xlmua1(<?php echo $cash ?>,<?php echo $online?>,200,9,<?php echo $row1['so_luong']?>)">200 <br />
                                    <span class="mua">CASH</span></a>
                                <?php 
									}
									else
									{
								?>
									<a onclick="alert('Bạn chưa đăng nhập')">200 <br />
                                    <span class="mua">CASH</span></a>
                                    <?php 	
									}
								?>
                                </span>
                                <img src="images2/balotim.png" />
                            </div>
                        </div>
                        
                        <div class="vatpham6">
                            <div class="sanpham1">
                                <span class="giamgia">-0%</span>
                                <span class="tensanpham"><span style="color:#fe1232">XE DUMPER</span><br />
                                <?php 
									//sniper dragon
									$qr1 = "select * from `cuahang` where id = 10";
									$result1 = mysqli_query($connect,$qr1);
									$row1 = mysqli_fetch_array($result1);
								?>
                                Số lượng còn: <?php echo $row1['so_luong'];?>
                                </span>
                                <span class="coin">
                                        <?php 
									if(isset($_SESSION["IsLogin"]))
									{
								?>
                                	<a onclick="xlmua1(<?php echo $cash ?>,<?php echo $online?>,5000,10,<?php echo $row1['so_luong']?>)">5.000 <br />
                                    <span class="mua">CASH</span></a>
                                <?php 
									}
									else
									{
								?>
									<a onclick="alert('Bạn chưa đăng nhập')">5.000 <br />
                                    <span class="mua">CASH</span></a>
                                    <?php 	
									}
								?>
                                </span>
                                <img src="images2/dumper.png" />
                            </div>
                        </div>
                        
                        
                        
                    </div>
                <!--End Dòng 3-->
                
            </div>
        </div>
    </div>

<div class="footer">
	<div class="container">
    	<div class="logo"><img src="images2/LOGOTRON.png" /></div>
        <div class="textfooter">GAME GTA ONLINE | VGTA SAMP
CÔNG TY TNHH MTV CÔNG NGHỆ VÀ NỘI DUNG
SA-MP 0.3.8<br />


THÔNG TIN LIÊN HỆ<br />

  SĐT: 0772 655 181<br />

  FB: facebook.com/vgtasamp<br />

  FB: facebook.com/hiepxike<br />

TRỤ SỞ HÀ NỘI: 
Đang xây dựng<br />

CHI NHÁNH TP. HỒ CHÍ MINH: 
125 Nguyễn Chí Thanh, phường 16, Quận 11, Hồ Chí Minh
</div>
    	
    </div>

</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
	function xlmua1(cash, online,giatien,sanpham, soluong)
	{
		if(soluong == 0)
		{
			alert('Sản phẩm đã hết hàng.');
			return false;
		}
		if(online == 1)
		{
			alert('Bạn đang Online, hãy thoát game để MUA');
			return false;
		}
		
		if(cash < giatien)
		{
			alert('Bạn không đủ CASH để mua');
		}
		else
		{
			window.location = "library/xlmua.php?id="+sanpham;
		}
	}
</script>
</html>
