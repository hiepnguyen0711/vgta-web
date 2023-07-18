<?php
	session_start();
	require "libra/getdatabase.php";
	if(isset($_GET['p']))
	{
		$pdangxuat = $_GET['p'];
		settype($pdangxuat,'int');
		if($pdangxuat == 20)
		{
			session_destroy();
		}
	}
	

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<base href="https://vanhiepjp.com/vgta/" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="css/style1.css"/>
<link rel="stylesheet" type="text/css" href="css/animate.css"/>
<link rel="icon" type="image/gif" href="images/logo.png" />
<title>Trang chủ</title>
</head>

<body>
<!--Start Menu-->
<div class="container-fluid navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <div class="collapse navbar-collapse" id="menu">
      <div class="col-md-2"></div>
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
  <div class="col-md-8 left">
    <div id="banner" class="carousel slide" data-ride="carousel"> 
      <!-- Indicators -->
      <ol class="carousel-indicators sliderindex">
        <li data-target="#banner" data-slide-to="0" class="active"></li>
        <li data-target="#banner" data-slide-to="1"></li>
        <li data-target="#banner" data-slide-to="2"></li>
        <!--<li data-target="#banner" data-slide-to="3"></li>
        <li data-target="#banner" data-slide-to="4"></li>-->
      </ol>
      
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active"><img src="images/banner1.png" alt="...">
          <p id="chutren"><b>TRIỆU TẬP GAME THỦ, RINH NGAY QUÀ XỊN</b><br />
          </p>
          <p id="chuduoi"><span style="font-size:14px">Tháng 2 này các game thủ đến với VGTA sẽ nhận được rất nhiều ưu đãi</span></p>
          <div class="nenbanner"> </div>
        </div>
        <div class="item"> <img src="images/banner2.png" alt="...">
          <p id="chutren"><b>GIẢI ĐẤU MỪNG XUÂN 2018</b><br />
          </p>
          <p id="chuduoi"><span style="font-size:14px">Chỉ còn vài ngày nữa thôi, vòng thi đấu của giải Mừng Xuân 2018 sẽ chính thức được khai mở</span></p>
          <div class="nenbanner"> </div>
        </div>
        <div class="item"> <img src="images/banner3.png" alt="...">
          <p id="chutren"><b>RỦ BẠN CÙNG CHƠI, NHẬN QUÀ HẤP DẪN</b><br />
          </p>
          <p id="chuduoi"><span style="font-size:14px">Hãy rủ bạn bè cùng chơi, rinh ngay quà tặng nhé.</span></p>
          <div class="nenbanner"> </div>
        </div>
        <!--<div class="item"> <img src="images/banner_3.jpg" alt="...">
          <p id="chutren"><b>ĐĂNG NHẬP HẰNG NGÀY, NHẬN QUÀ LIỀN TAY</b><br />
          </p>
          <p id="chuduoi"><span style="font-size:14px">Tháng 12 này các tân binh đến với đột kích sẽ nhận được rất nhiều ưu đãi</span></p>
          <div class="nenbanner"> </div>
        </div>
        <div class="item"> <img src="images/banner_4.jpg" alt="...">
          <p id="chutren"><b>NGÀY VÀNG SẴN SÀNG</b><br />
          </p>
          <p id="chuduoi"><span style="font-size:14px">Tháng 12 này các tân binh đến với đột kích sẽ nhận được rất nhiều ưu đãi</span></p>
          <div class="nenbanner"> </div>
        </div>-->
      </div>
    </div>
  </div>
  <div class="col-md-4 right">
     <a href="taigame/" style="text-decoration:none"><div class="buttondown">
      <div class="hinh" >
        <div class="chudownload">
          <p id="chudownload">DOWNLOAD</p>
        </div>
        <img src="images/elip-1.png" id="vong_1"/> <img src="images/elip-2.png" id="vong_2" />
        <div class="nentrang"> </div>
      </div></a>
    </div>
    
    <!--bốn nút-->
    <div class="bonnut">
      <a href="dangky/">
      <div class="dangky"> <img src="images/icon1.png" id="dangky" />
        <p id="textdangky">ĐĂNG KÝ</p>
        <div class="nentrongsuot"></div>
      </div></a>
     <a href="napthet/index.php"><div class="napvcoin"> <img src="images/icon2.png" id="napvcoin" />
        <p id="textnapvcoin"><span class="style1">NẠP VCOIN</span></p>
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
  <div class="col-md-8 left noidungtintuc">
    <div class="tieude">
      <div class="tieudetin">
        <div class="cotdo"></div>
        <p>TIN TỨC</p>
      </div>
    </div>
    <div class="loaitin">
      <ul class="nav nav-tabs">
        <li class="active" ><a href="#tab_1" data-toggle="tab">TIN HOT</a></li>
        <li><a href="#tab_2" data-toggle="tab">SỰ KIỆN</a></li>
        <li id="tabgiaidau"><a href="#tab_3" data-toggle="tab">VGTA 24H</a></li>
      </ul>
    </div>
    <div class="noidungtin">
      <div class="tab-content"> 
        <!--Tab 1-->
        <div class="tab-pane active" id="tab_1">
        	<?php 
				$tintucmoinhat = LayLoaiTinMoiNhat(1);
				$row = mysqli_fetch_array($tintucmoinhat);
				$ngay = $row['ngay'];
				$thang = $row['thang'];
				if($row['ngay'] < 10)
				{
					$ngay = "0".$ngay;
				}
				if($row['thang'] < 10)
				{
					$thang = "0".$thang;
				}
			?>
          <div class="col-md-4 hinhnho"> <img src="admincp/uploads/<?php echo $row['anhhien'] ?>" id="hinhtinhot1" /> </div>
          <div class="col-md-8 tintuc"> 
            
            <!--Tin 1-->
            
            <div class="tinhot"> <i class="fa fa-circle nuttron"></i>
              <p id="tieude"><a href="tin/<?php echo $row['id']?>-<?php echo $row['tieudetin_khongdau'] ?>"><?php echo gioihantieudegon($row['tieudetin'],50) ?></a></p>
              <p id="ngaydang"><?php echo $ngay." - ".$thang ?></p>
            </div>
            <!--Tin 2-->
            <?php 
				
				$tintuc = LayLoaiTin(1);
				
				while($row = mysqli_fetch_array($tintuc))
					{
						
						$ngay = $row['ngay'];
						$thang = $row['thang'];
						if($row['ngay'] < 10)
						{
							$ngay = "0".$ngay;
						}
						if($row['thang'] < 10)
						{
							$thang = "0".$thang;
						}
			?>
            <div class="tinhot2"> <i class="fa fa-circle nuttron"></i>
              <p id="tieude"><a href="tin/<?php echo $row['id'] ?>-<?php echo $row['tieudetin_khongdau'] ?>"><?php echo gioihantieudegon($row['tieudetin'],50) ?></a></p>
              <p id="ngaydang"><?php echo $ngay." - ".$thang ?></p>
            </div>
            
            <?php 	} ?>
            <!--Nut Xem Them-->
            <div class="xemthem">
              <div class="row">
                <p><a href="danhmuc/1-tin-tuc">Xem thêm &nbsp; <i class="fa fa-long-arrow-right"></i> </a></p>
              </div>
            </div>
            <!--End Nut Xem Them--> 
            
          </div>
          <!-- div tintuc--> 
        </div>
        <!--div tab pane 1-->
        
        <div class="tab-pane" id="tab_2">
        	
           <?php 
		   		$sukienmoinhat = LayLoaiTinMoiNhat(2);
				$rowsk = mysqli_fetch_array($sukienmoinhat);
				$ngay = $rowsk['ngay'];
				$thang = $rowsk['thang'];
				if($rowsk['ngay'] < 10)
				{
					$ngay = "0".$ngay;
				}
				if($rowsk['thang'] < 10)
				{
					$thang = "0".$thang;
				}
		   ?>
          <div class="col-md-4 hinhnho"> <img src="admincp/uploads/<?php echo $rowsk['anhhien'] ?>" id="hinhtinhot1" /> </div>
          <div class="col-md-8 tintuc"> 
            
            <!--Tin 1-->
            <div class="tinhot"> <i class="fa fa-circle nuttron"></i>
              <p id="tieude"><a href="tin/<?php echo $rowsk['id'] ?>-<?php echo $rowsk['tieudetin_khongdau'] ?>"><?php echo gioihantieudegon($rowsk['tieudetin'],50) ?> </a></p>
              <p id="ngaydang"><?php echo $ngay." - ".$thang ?></p>
            </div>
            <!--Tin 2-->
            <?php 
				$sukien = LayLoaiTin(2);
			 	while( $rowsk = mysqli_fetch_array($sukien))
				{
					//$rowsk = mysqli_fetch_array($sukienmoinhat);
					$ngay = $rowsk['ngay'];
					$thang = $rowsk['thang'];
					if($rowsk['ngay'] < 10)
					{
						$ngay = "0".$ngay;
					}
					if($rowsk['thang'] < 10)
					{
						$thang = "0".$thang;
					}
			 ?>
            <div class="tinhot2"> <i class="fa fa-circle nuttron"></i>
              <p id="tieude"><a href="tin/<?php echo $rowsk['id'] ?>-<?php echo $rowsk['tieudetin_khongdau'] ?>"><?php echo gioihantieudegon($rowsk['tieudetin'],50) ?></a></p>
              <p id="ngaydang"><?php echo $ngay." - ".$thang ?></p>
            </div>
            
            <?php } ?>
            
            
            
            <!--Nut Xem Them-->
            <div class="xemthem">
              <div class="row">
                <p><a href="danhmuc/2-su-kien">Xem thêm &nbsp; <i class="fa fa-long-arrow-right"></i> </a></p>
              </div>
            </div>
            <!--End Nut Xem Them--> 
            
          </div>
          <!-- div tintuc--> 
          
        </div>
        <div class="tab-pane" id="tab_3">
        	<?php 
		   		$baochimoinhat = LayLoaiTinMoiNhat(3);
				$rowbc = mysqli_fetch_array($baochimoinhat);
				
				
				$ngay = $rowbc['ngay'];
				$thang = $rowbc['thang'];
				if($rowbc['ngay'] < 10)
				{
					$ngay = "0".$ngay;
				}
				if($rowbc['thang'] < 10)
				{
					$thang = "0".$thang;
				}
		   ?>
          <div class="col-md-4 hinhnho"> <img src="admincp/uploads/<?php echo $rowbc['anhhien'] ?>" id="hinhtinhot1" /> </div>
          <div class="col-md-8 tintuc"> 
            
            <!--Tin 1-->
            
            <div class="tinhot"> <i class="fa fa-circle nuttron"></i>
              <p id="tieude"><a href="tin/<?php echo $rowbc['id'] ?>-<?php echo $rowbc['tieudetin_khongdau'] ?>"><?php echo gioihantieudegon($rowbc['tieudetin'],50) ?></a></p>
              <p id="ngaydang"><?php echo $ngay." - ".$thang ?></p>
            </div>
            <!--Tin 2-->
            <?php 
				$baochi = LayLoaiTin(3);
			 	while( $rowbc = mysqli_fetch_array($baochi))
				{
					$ngay = $rowbc['ngay'];
					$thang = $rowbc['thang'];
					if($rowbc['ngay'] < 10)
					{
						$ngay = "0".$ngay;
					}
					if($rowbc['thang'] < 10)
					{
						$thang = "0".$thang;
					}
					
			 ?>
            <div class="tinhot2"> <i class="fa fa-circle nuttron"></i>
              <p id="tieude"><a href="tin/<?php echo $rowbc['id'] ?>-<?php echo $rowbc['tieudetin_khongdau'] ?>"><?php echo gioihantieudegon($rowbc['tieudetin'],50) ?></a></p>
              <p id="ngaydang"><?php echo $ngay." - ".$thang ?></p>
            </div>
            <?php } ?>
            
            
            <!--Nut Xem Them-->
            <div class="xemthem">
              <div class="row">
                <p><a href="danhmuc/3-bao-chi">Xem thêm &nbsp; <i class="fa fa-long-arrow-right"></i> </a></p>
              </div>
            </div>
            <!--End Nut Xem Them--> 
            
          </div>
          <!-- div tintuc--> 
          
        </div>
        <!--div tab pane 3--> 
        
      </div>
      <!--div class tabcontent--> 
    </div>
    <!--div noi dung tin--> 
    
  </div>
  <!--div left-->
  
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
  <div class="col-md-8 left wow fadeIn" data-wow-duration="1s">
    <div class="tieude camnang" >
      <div class="tieudetin">
        <div class="cotdo"></div>
        <p>QUÀ TẶNG</p>
      </div>
    </div>
    <a href="nhanquarank.php"><div class="col-md-6 linhmoi">
      <p id="textcamnang">RESET HẰNG THÁNG</p>
      <p id="textlinhmoi" class="style1">NHẬN QUÀ TẶNG RANK</p>
      <div class="chitiet">
        <div class="nendo"></div>
        <div class="textchitiet">
          <p id="textchitiet">Chi tiết</p>
        </div>
      </div>
    </div>
    </a>
    <div class="col-md-6 cuubinh">
      <p id="textcamnang">NHẬN QUÀ</p>
      <p id="textlinhmoi" class="style2">GIFTCODE</p>
      <div class="chitiet">
        <div class="nendo"></div>
        <div class="textchitiet">
          <p id="textchitiet">Chi tiết</p>
        </div>
      </div>
    </div>
    <!--col  6-->
    
    <div class="col-md-12 faq">
      <p id="textcauhoi">CÂU HỎI THƯỜNG GẶP</p>
      <div class="chitiet">
        <div class="nendo"></div>
        <div class="textchitiet">
          <p id="textchitiet">Chi tiết</p>
        </div>
      </div>
    </div>
  </div>
  <!--end col 8 left-->
  <div class="col-md-4 right fanpage">
  	<!--<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcfvietnamvtc%2F&tabs=timeline&width=360&height=475&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="360" height="475" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>-->
  	
  </div>
  
  <div class="col-md-8 left tieudiem">
    <div class="tieude">
      <div class="tieudetin">
        <div class="cotdo"></div>
        <p>GIẢI TRÍ VGTA SAMP</p>
      </div>
    </div>
    <div class="col-md-12 tieudiemdotkich">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/TwWX4GndZsY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
  </div>
  <!-- end div col 8 left-->
  
  <div class="col-md-4 right danhsachphim" style="margin-top: -40px;">
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

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript">
    new WOW().init();
</script>

<script language="JavaScript" Type="text/javascript">
document.addEventListener("contextmenu", function(e){
    e.preventDefault();
}, false);
</script>
<script language="JavaScript">

//////////F12 disable code////////////////////////
    document.onkeypress = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
           //alert('No F-12');
            return false;
        }
    }
    document.onmousedown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            //alert('No F-keys');
            return false;
        }
    }
document.onkeydown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            //alert('No F-keys');
            return false;
        }
    }
/////////////////////end///////////////////////
</script>
<script type='text/javascript'>
//<![CDATA[
shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){top.location.href="http://vgta-samp.96.lt/forum"});
//]]>
</script>
 <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a38c0b0bbdfe97b137fc46b/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


</body>
</html>
