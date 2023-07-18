<?php

	session_start();
	if(!isset($_SESSION["IsLogin"]))
	{
		header('location:../dangnhap/');
		
	}else{
		$username = trim($_SESSION['taikhoan']);
		if(strnatcasecmp($username,"HAC") != 0)
		{
			header('location:../trangchu');
		}
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<base href="https://vanhiepjp.com/vgta/admincp/" />
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../css/styleadmincp.css"/>
<link rel="stylesheet" type="text/css" href="../css/bootstrap-select.css"/>
<link rel="stylesheet" type="text/css" href="css/giaodien.css"/>
<link rel="icon" type="image/gif" href="../images/logo.png" />

<title>Trang Quản Trị VGTASAMP</title>

<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="ckfinder/ckfinder.js"></script>
<script src="//cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
</head>

<body>
	
		<!--scrollbar-->
	 
    
    	<div class="col-md-2 left menu">
        	
        	<div class="row">	
            	<nav class="navbar navbar-default">
                		<p>Chào HAC</p>
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_thongke"  data-toggle="tab" >Thống kê</a></li>
                        <li><a href="#tab_dangbai"  data-toggle="tab" >Đăng bài viết</a></li>
                        <li><a href="#tab_quanlitaikhoan"  data-toggle="tab" >Quản lí bài viết</a></li>
                        <li><a href="#tab_quanlinguoichoi"  data-toggle="tab" >Quản Lí người chơi</a></li>
                        <li><a href="../index.php"><span class="glyphicon glyphicon-chevron-left"></span> Quay lại  </a></li>
                        
                    </ul>
                 </nav>
            </div>
        </div>
        <div class="col-md-10 right">
        		<div class="tab-content">
                
                	<div class="tab-pane active" id="tab_thongke">
                    	aaaaa
                    </div>
                    
                    <div class="tab-pane" id="tab_dangbai">
                    	<?php require "formdangbai.php" ?>
                    </div>
                    
                    <div class="tab-pane" id="tab_quanlitaikhoan">
                    	<table width="100%">
                            <thead id="tomau">
                                <tr>
                                    <th>STT</th>
                                    <th>Tiêu đề</th>
                                    <th>Ngày đăng</th>
                                    <th>Hình</th>
                                    <th>Loại tin</th>
                                    <th>Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
								require "../libra/dbconnect.php";
								$qr = "select tieudetin, tomtat, anhhien, DAY(ngaydang) 'ngay', MONTH(ngaydang) 'thang', YEAR(ngaydang) 'nam', id, tieudetin_khongdau, id_loaitin from tin order by id desc ";
								$tintuc = mysqli_query($connect, $qr);
								while($row = mysqli_fetch_array($tintuc))
								{
									$loaitin = $row['id_loaitin'];
									
							?>
                            	<tr>
                                	<td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['tieudetin'] ?></td>
                                    <td><?php echo $row['ngay']?> - <?php echo $row['thang']?> - <?php echo $row['nam']?></td>
                                    <td><img width="50" height="50" alt="<?php echo $row['tieudetin'] ?>" src="uploads/<?php echo $row['anhhien'] ?>" /></td>
                                    <td><?php 
									switch($loaitin)
									{
										case 1: echo'Tin Tức';break;
										case 2: echo'Sự kiện';break;
										case 3: echo'Báo Chí';break;
										case 4: echo'Hướng dẫn';break;
										default: echo'không biết';break;
									} 
									?></td>
                                    <td><a href="formsuabai.php?id=<?php echo $row['id'] ?>"><img alt="Sửa" src="image/iconfinder_edit-notes_46798.png" /></a> <a href="#" onclick="xoa(<?php echo $row['id'] ?>)"><img alt="Xóa" src="image/iconfinder_f-cross_256_282471.png" /></a>
                                    <script>
									function xoa(id)
									{
										var idl = id;
										var x = confirm("Bạn có chắc chắn xóa không");
										if(x)
										{
											window.location = "xlxoabai.php?id="+idl;
										}
										else{
											return false;
										}
									}
								</script>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="tab-pane" id="tab_quanlinguoichoi">
                    	ddd
                    </div>
                </div>
        
        </div>
       
    

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-select.js"></script>
<script type="text/javascript" src="../js/vgta.js"></script>


</body>
</html>