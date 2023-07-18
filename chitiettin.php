<?php 
	session_start();
	require("libra/getdatabase.php");
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		settype($id,"int");
	}
	else{
		$id = 1;
	}
	$result = LayChiTietTin($id);
	$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/index1.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<base href="https://vanhiepjp.com/vgta/" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="css/style1.css"/>
<!-- InstanceBeginEditable name="doctitle" -->
<title><?php echo $row['tieudetin'] ?></title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<link rel="stylesheet" type="text/css" href="css/stylechitiet.css"/>
<!-- InstanceEndEditable -->
</head>

<body>
<!--Start Menu-->
<div class="container-fluid navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <div class="collapse navbar-collapse" id="menu">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <ul class="nav navbar-nav" >
          <li><a href="trangchu">TRANG CHỦ</a></li>
          <li id="tintuc"><a href="#menu_2">TIN TỨC <i class="fa fa-angle-down"></i></a>
            <ul class="menucon">
              <li><a href="danhmuc/1-tin-tuc"><i class="fa fa-snowflake-o"></i> Thông Báo</a></li>
              <li><a href="danhmuc/2-su-kien"><i class="fa fa-snowflake-o"></i> Sự Kiện</a></li>
              <li><a href="danhmuc/3-bao-chi"><i class="fa fa-snowflake-o"></i> Báo Chí</a></li>
            </ul>
          </li>
          <li>
          <a href="huongdan/">HƯỚNG DẪN <i class="fa fa-angle-down"></i></a> 
            <ul class="menucon">
              <li><a href="danhmuchuongdan.php"><i class="fa fa-snowflake-o"></i> Người chơi mới</a></li>
               <li><a href="danhmuchuongdan.php"><i class="fa fa-snowflake-o"></i> Công Việc</a></li>
              <li><a href="danhmuchuongdan.php"><i class="fa fa-snowflake-o"></i> Tải Game</a></li>
              <li><a href="danhmuchuongdan.php"><i class="fa fa-snowflake-o"></i> Luật RolePlay</a></li>
              <li><a href="danhmuchuongdan.php"><i class="fa fa-snowflake-o"></i> CODE 911</a></li>
              <li><a href="danhmuchuongdan.php"><i class="fa fa-snowflake-o"></i> Lệnh Admin</a></li>
              
            </ul>
          </li>
          
          <li id="logo"><img src="images/logo.png" /></li>
          <li><a href="#menu_4">THƯ VIỆN <i class="fa fa-angle-down"></i></a>
          		<ul class="menucon">
              <li><a href="#"><i class="fa fa-snowflake-o"></i> Ảnh Game</a></li>
              <li><a href="#"><i class="fa fa-snowflake-o"></i> Ảnh Thành Viên</a></li>
              <li><a href="#"><i class="fa fa-snowflake-o"></i> Video Game</a></li>
              <li><a href="#"><i class="fa fa-snowflake-o"></i> Video Giải Trí</a></li>
            </ul>
          </li>
          <li><a href="dangnhap/">ĐĂNG NHẬP <i class="fa "></i></a></li>
          <li><a href="https://vanhiepjp.com/vgta/forum/">DIỄN ĐÀN</a></li>
        </ul>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
</div>

<!--End Menu--> 

<!--Start Slider-->
<div class="container-fluid slider">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    </ol>
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active"><img src="images/hinhnen1.png" alt="..."> </div>
      <div class="item"> <img src="images/hinhnen2.png" alt="..."> </div>
      <div class="item"> <img src="images/hinhnen3.png" alt="..."> </div>
      <div class="item"> <img src="images/hinhnen4.png" alt="..."> </div>
    </div>
  </div>
</div>
<!--End Slider--> 
<!-- Start Content-->
<div class="clearfix"></div>
<div class="container content">
  <!--Left Here-->
  <!-- InstanceBeginEditable name="nd" -->
  <div class="col-md-8 left">
  	<div class="breadcum">
    	<img src="images/icon-title-tintuc.png" id="logotitle" /> <p><a href="trangchu">TRANG CHỦ </a> <i class="fa fa-angle-double-right"></i> <a href="danhmuchuongdan.php"><?php echo $row['ten_loaitin'] ?> </a> </p>
    
    </div>
    <div class="noidung">
    <p>&nbsp;</p>

<div class="date-mainsite-2">
<h3><span style="font-size:22px"><span style="color:#c0392b"><strong><?php echo $row['tieudetin'] ?></strong></span></span></h3>

<h4><span style="color:#999999"><?php echo $row['ngay'].'-'.$row['thang'].'-'.$row['nam']?></span></h4>
<hr />
<div class="clear">&nbsp;</div>
</div>

<div class="text-2-mainsite-2 text-mainsite-2">
<p><strong></strong></p>

<div style="text-align:justify"><span style="font-family:tahoma,geneva,sans-serif"><span style="font-size:14px"><em><?php echo $row['tomtat']?></em><br />
</span></span></div>


<div style="text-align:justify" class="noidungbaiviet"><br />
<span style="font-family:tahoma,geneva,sans-serif"><span style="font-size:14px">
	<?php echo $row['noidung']?>
</span></span><br />
&nbsp;</div>

<p style="text-align:center"><a href="#" target="_blank"><img alt="" src="images/1tc.png" style="height:48px; width:130px" /></a>&nbsp;<a href="#" target="_blank"><img alt="" src="images/2fp.png" style="height:48px; width:130px" /></a>&nbsp;<a href="#" target="_blank"><img alt="" src="images/3yt.png" style="height:48px; width:130px" /></a>&nbsp;</p>


</div>

	<br />

	<div class="cactinlienquan">
    	<div id="tieudecactin">
    		<p id="cactin">CÁC TIN LIÊN QUAN</p>
    	</div>
        <div class="tinlienquan">
        	<ul>
            <?php 
				$loai = $row['id_loaitin'];
				settype($loai,"int");
				$tinlienquan = LayLoaiTin($loai);
 				while ($rowt = mysqli_fetch_array($tinlienquan))
				{
			?>
 
             	<li><a href="tin/<?php echo $rowt['id'] ?>-<?php echo $rowt['tieudetin_khongdau'] ?>"><i class="fa fa-square"></i> <?php echo gioihantieudegon($rowt['tieudetin'],80) ?></a></li>
                <?php } ?>
                
            </ul>
        </div>
    </div>

		<!--START CÁC TIN KHÁC--><br />

        
        <div class="cactinlienquan">
    	<div id="tieudecactin">
    		<p id="cactin">CÁC TIN KHÁC</p>
    	</div>
        <div class="tinlienquan">
        	<ul>
            	<?php 
				$loai = $row['id_loaitin'];
				settype($loai,"int");
				$tinkhac = LayTinTuc($loai);
 				while ($rowt = mysqli_fetch_array($tinkhac))
				{
			?>
            	<li><a href="tin/<?php echo $rowt['id'] ?>-<?php echo $rowt['tieudetin_khongdau'] ?>"><i class="fa fa-square"></i> <?php echo gioihantieudegon($rowt['tieudetin'],80) ?></a></li>
               	 <?php } ?>
            </ul>
        </div>
    </div>

        
		<!--END CÁC TIN KHÁC-->
        
        
		<!--Start Phân trang-->
        	<div class="clear"></div>
        	<div class="phantrang">
            	<div class="nutlui">
                	<i class="fa fa-angle-double-left"></i>
                </div>
            	
            	<div class="nutphantrang">
                	<p>1</p>
                </div>
                
                <div class="nutphantrang">
                	<p>2</p>
                </div>
                
                <div class="nutphantrang">
                	<p>3</p>
                </div>
                
                <div class="nutphantrang">
                	<p>4</p>
                </div>
                
                <div class="nuttoi">
                	<i class="fa fa-angle-double-right"></i>
                </div>
                
            </div>
        <!--End Phân trang-->

    </div>
    
  </div>
  <!-- InstanceEndEditable -->

  <div class="col-md-4 right">
    <a href="taigame/" style="text-decoration:none"><div class="buttondown">
      <div class="hinh" >
        <div class="chudownload">
          <p id="chudownload" >DOWNLOAD</p>
        </div>
        <img src="images/elip-1.png" id="vong_1"/> <img src="images/elip-2.png" id="vong_2" />
        <div class="nentrang"> </div>
      </div>
      </a>
    </div>
    
    <!--bốn nút-->
    <div class="bonnut">
      <a href="dangky/"><div class="dangky"> <img src="images/icon1.png" id="dangky" />
        <p id="textdangky">ĐĂNG KÝ</p>
        <div class="nentrongsuot"></div>
      </div></a>
      <a href="napthe/napthe.php"><div class="napvcoin"> <img src="images/icon2.png" id="napvcoin" />
        <p id="textnapvcoin">NẠP VCOIN</p>
        <div class="nentrongsuot"></div>
      </div></a>
      <a href="dangnhap/"><div class="giaidau"> <img src="images/icon3.png" id="giaidau" />
        <p id="textgiaidau" style="font-size:16px">ĐĂNG NHẬP</p>
        <div class="nentrongsuot"></div>
      </div>
      </a>
      <a href="xephang/">
      <div class="hotro"> <img src="images/icon4.png" id="hotro" />
        <p id="texthotro">XẾP HẠNG</p>
        <div class="nentrongsuot"></div>
      </div>
      </a>
      
      
    </div>
    <!--end bốn nút--> 
  </div>
  
 
  
  <div class="col-md-4 right">
    <div class="tieude">
      <div class="tieudetin">
        <div class="cotdo"></div>
        <p>NHÂN VẬT</p>
      </div>
    </div>
    <div id="HinhCF" class="carousel slide hinhcf" data-ride="carousel"> 
      
      <!-- Wrapper for slides -->
      <div class="carousel-inner hinhsanpham" role="listbox">
        <div class="item active"> <img src="images/hinh danh muc/hinhnhanvat1.png" alt="...">
          <div class="carousel-caption tensp">
            <h3>Dân Xã Hội</h3>
          </div>
        </div>
        <div class="item"> <img src="images/hinh danh muc/hinhnhanvat2.png" alt="...">
          <div class="carousel-caption tensp">
            <h3>FBI</h3>
          </div>
        </div>
        <div class="item"> <img src="images/hinh danh muc/hinhnhanvat3.png" alt="...">
          <div class="carousel-caption tensp">
            <h3>Người Dân</h3>
          </div>
        </div>
        <div class="item"> <img src="images/hinh danh muc/hinhnhanvat4.png" alt="...">
          <div class="carousel-caption tensp">
            <h3>Cảnh Sát</h3>
          </div>
        </div>
        <div class="item"> <img src="images/hinh danh muc/hinhnhanvat5.png" alt="...">
          <div class="carousel-caption tensp">
            <h3>Người chở hàng</h3>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#HinhCF" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#HinhCF" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
      <div class="nenden"></div>
    </div>
  </div>
 
  <!--end col 8 left-->
  <div class="col-md-4 right fanpage">
  	<div style="margin-top:25px"></div>
  	<!--<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcfvietnamvtc%2F&tabs=timeline&width=360&height=475&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="360" height="475" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>-->
  	
  </div>
  
  
  
  <div class="col-md-4 right danhsachphim">
    <div class="margin"></div>
    <div class="video">
      <div class="col-md-12 khungvideo video_1">
        <div class="col-md-6 video_thunho"> <img src="images/hinhvideo.png" /> </div>
        <div class="col-md-6 textvideo">
          <p>[VGTA SAMP]  Chưa có...</p>
          <p id="luotxem"><i class="fa fa-eye"></i> 0</p>
        </div>
      </div>
      <!--video 2-->
      <div class="col-md-12 khungvideo video_2">
        <div class="col-md-6 video_thunho"> <img src="images/hinhvideo2.png" /> </div>
        <div class="col-md-6 textvideo">
          <p>[VGTA SAMP]  Chưa có...</p>
          <p id="luotxem"><i class="fa fa-eye"></i> 0</p>
        </div>
      </div>
      <!--end video 2--> 
      
      <!--video 3-->
      <div class="col-md-12 khungvideo video_3">
        <div class="col-md-6 video_thunho"> <img src="images/hinhvideo.png" /> </div>
        <div class="col-md-6 textvideo">
          <p>[VGTA SAMP]  Chưa có...</p>
          <p id="luotxem"><i class="fa fa-eye"></i> 0</p>
        </div>
      </div>
      <!--end video 3--> 
      
      <!--video 4-->
      <div class="col-md-12 khungvideo video_4">
        <div class="col-md-6 video_thunho"> <img src="images/hinhvideo2.png" /> </div>
        <div class="col-md-6 textvideo">
          <p>[VGTA SAMP]  Chưa có...</p>
          <p id="luotxem"><i class="fa fa-eye"></i> 0</p>
        </div>
      </div>
      <!--end video 4--> 
      
      <!--video 5-->
      <div class="col-md-12 khungvideo video_5">
        <div class="col-md-6 video_thunho"> <img src="images/hinhvideo.png" /> </div>
        <div class="col-md-6 textvideo">
          <p>[VGTA SAMP]  Chưa có...</p>
          <p id="luotxem"><i class="fa fa-eye"></i> 0</p>
        </div>
      </div>
      <!--end video 5--> 
      
    </div>
  </div>
  <!--end col right--> 
  
</div>

<!-- End Content--> 

<!--start footer-->
<div class="clear"></div>
<div class="container footer">
  <div class="col-md-5 col-sm-12 footer_left"> <img id="logofooter" src="images/logo.png" />
    <p>GAME GTA ONLINE | VGTA SAMP<br />
      <b>CÔNG TY TNHH MTV CÔNG NGHỆ VÀ NỘI DUNG <br />
SA-MP 0.3.8 <br /> </b></p>
  </div>
  <div class="col-md-2 col-sm-12 footer_mid">
    <p><b>THÔNG TIN LIÊN HỆ</b><br />
      <i class="fa fa-phone"></i> &nbsp;&nbsp;01222 655 181<br />
      <i class="fa fa-facebook-official"></i> &nbsp;&nbsp;<span style="font-size:11px">facebook.com/vgtasamp</span><br />
      <i class="fa fa-globe"></i> &nbsp;&nbsp;hotro.vgtasamp.com </p>
  </div>
  <div class="col-md-5 col-sm-12 footer_right">
    <p><b>TRỤ SỞ HÀ NỘI</b><br />
      <span style="font-size:12px">Đang xây dựng</span><br />
      <b>CHI NHÁNH TP. HỒ CHÍ MINH</b><br />
      <span style="font-size:12px">125 Nguyễn Chí Thanh, phường 16, Quận 11, Hồ Chí Minh</span> </p>
  </div>
</div>


<!--end footer--> 

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
<!-- InstanceEnd --></html>
