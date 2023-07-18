 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<base href="https://vanhiepjp.com/vgta/admincp/" />
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../css/styleadmincp.css"/>
<link rel="stylesheet" type="text/css" href="../css/bootstrap-select.css"/>
<link rel="stylesheet" type="text/css" href="css/giaodien.css"/>
<link rel="icon" type="image/gif" href="../images/logo.png" />
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="ckfinder/ckfinder.js"></script>
<script src="//cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
<title>Trang Quản Trị VGTASAMP</title>


</head>
 <!-- sua bai -->
<?php 
session_start();
	if(isset($_GET['id']))
	{
		require("../libra/getdatabase.php");
		$id = $_GET['id'];
		settype($id,"int");
	}
?>
 <?php 
			
			function stripUnicode($str){ 
    if(!$str) return false;
    $unicode = array('a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
                     'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
                     'd'=>'đ','D'=>'Đ',
                     'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
                     'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
                     'i'=>'í|ì|ỉ|ĩ|ị',
                     'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
                     'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
                     'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
                     'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
                     'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
                     'y'=>'ý|ỳ|ỷ|ỹ|ỵ','Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ');
    foreach($unicode as $khongdau=>$codau) {
        $arr=explode("|",$codau);$str = str_replace($arr,$khongdau,$str);
    }
return $str;
}

function changeTitle($str)
{
    $str = trim($str);
    if ($str == "") {
        return "";
    }
    $str = str_replace('"', '', $str);
    $str = str_replace("'", '', $str);
    $str = str_replace(":", '', $str);
    $str = str_replace("%", '', $str);
    $str = str_replace("?", '', $str);
    $str = str_replace("–", '', $str);
    $str = str_replace("-", '', $str);
    $str = str_replace("_", '', $str);
    $str = str_replace(".", '', $str);
    $str = str_replace(",", '', $str);
    $str = str_replace("“", '', $str);
    $str = str_replace("”", '', $str);
    $str = str_replace("(", '', $str);
    $str = str_replace(")", '', $str);
    $str = str_replace("&", '', $str);
    $str = str_replace("*", '', $str);
    $str = str_replace("+", '', $str);
    $str = str_replace("  ", ' ', $str);
	$str = str_replace("/", '-', $str);
    $str = stripUnicode($str);
    $str = strtolower($str);
    //$str = mb_convert_case($str,MB_CASE_TITLE,'utf-8');
    // MB_CASE_UPPER / MB_CASE_TITLE / MB_CASE_LOWER
    $str = str_replace(' ', '-', $str);
    return $str;
}


		
		?>



<?php
	
	require '../libra/dbconnect.php';
	

	if(isset($_POST['btnDang']))
	{
		$TieuDe = $_POST['TieuDe'];
		$TieuDe_KhongDau = changeTitle($TieuDe);
		$NoiDung = $_POST['content-2'];
		$NgayDang = date('y-m-d');
		$NguoiDang = $_SESSION['idUser'];
		$TomTat = $_POST['TomTat'];
		$LoaiTin = $_POST['loaiTinTuc'];
		
		if($_FILES['AnhHien']['name'] == "" || $_FILES['AnhHien']['tmp_name'] == "")
		{
			$qr = "UPDATE `tin` SET `tieudetin` = '$TieuDe', `tieudetin_khongdau` = '$TieuDe_KhongDau', `noidung` = '$NoiDung', `ngaydang` = '$NgayDang', `nguoidang` = '$NguoiDang', `tomtat` = '$TomTat', `id_loaitin` = $LoaiTin WHERE `tin`.`id` = $id";
			
			mysqli_query($connect,$qr);
			
			header('location:../index.php');
		}
		else
		{
			$AnhHien = $_FILES['AnhHien']['name'];	
			$AnhHien_tmp = $_FILES['AnhHien']['tmp_name'];
			if($_FILES['AnhHien']['type'] == "image/jpeg" || $_FILES['AnhHien']['type'] == "image/png" || $_FILES['AnhHien']['type'] == "image/gif")
			{
				move_uploaded_file($AnhHien_tmp, 'uploads/'.$AnhHien);
				
				$qr = "UPDATE `tin` SET `tieudetin` = '$TieuDe', `tieudetin_khongdau` = '$TieuDe_KhongDau', `anhhien` = '$AnhHien', `noidung` = '$NoiDung', `ngaydang` = '$NgayDang', `nguoidang` = '$NguoiDang', `tomtat` = '$TomTat', `id_loaitin` = $LoaiTin WHERE `tin`.`id` = $id";
				
				mysqli_query($connect,$qr);
				
				header('location:../index.php');
			}
			else{
				$message = "Ảnh không hợp lệ";
				echo "<script type='text/javascript'>alert('$message');</script>";
				
			}
		}
		
		
	}

?>


<form method="post" enctype="multipart/form-data">
  <div class="container">
    <div class="col-md-12"> <br>
      <div class="danhmuc">
        <select name="loaiTinTuc" class="selectpicker">
        <?php 
			$result = LayChiTietTin($id);
			$row = mysqli_fetch_array($result);
			if($row['id_loaitin']==1)
			{
				echo'<option value="1" selected="selected">Tin tức</option>
				<option value="2">Sự kiện</option>
				<option value="3">Báo chí</option>
				<option value="4" >Hướng dẫn người chơi mới</option>';
			}
			else if($row['id_loaitin']==2)
			{
				echo'<option value="1" >Tin tức</option>
				<option value="2" selected="selected">Sự kiện</option>
				<option value="3">Báo chí</option>
				<option value="4" >Hướng dẫn người chơi mới</option>';
			}
			else if($row['id_loaitin']==3)
			{
				echo'<option value="1" >Tin tức</option>
				<option value="2" >Sự kiện</option>
				<option value="3" selected="selected">Báo chí</option>
				<option value="4" >Hướng dẫn người chơi mới</option>';
			}
			else if($row['id_loaitin']==4)
			{
				echo'<option value="1" >Tin tức</option>
				<option value="2" >Sự kiện</option>
				<option value="3" >Báo chí</option>
				<option value="4" selected="selected">Hướng dẫn người chơi mới</option>';
			}
		?>
          
        </select>
      </div><br />

      <label> Tiêu đề bài viết</label>
      <input name="TieuDe" type="text" class="form-control" placeholder="Nhập tiêu đề bài viết tốt nhất từ 65 đến 70 kí tự và có chữ gta ( để đạt chuẩn SEO giúp web lên top google )." value="<?php echo $row['tieudetin'] ?>"/>
      <br />
      <label> Tóm tắt bài viết</label>
      <textarea name="TomTat" class="form-control" placeholder="Những gì được viết ở đây là những dòng chữ dưới tiêu đề hiện trên trang chủ." rows="3"><?php echo $row['tomtat'] ?></textarea>
      <br />
      <label> Nội Dung bài viết</label>
      <textarea name="content-2" class="form-control" placeholder="Những gì được viết ở đây là những dòng chữ dưới tiêu đề hiện trên trang chủ." rows="20" id="content-2">
      <?php echo $row['noidung']?>
      </textarea>
		
        
        <br />

       	<label>Ảnh hiện trên trang chủ</label>
        <input name="AnhHien" type="file" name="btnChonFile" id="btnChonFile" onselect="uploads/dollar-sign-gold-big.jpg" /><br />
  
        <div class="form-inline">
        <button type="submit" name="btnDang" id="btnDang" class="btn btn-success">Đăng bài</button>
        <a href="../index.php"><button class="btn btn-danger">Hủy Bỏ</button></a>
        </div>     
    </div>
  </div>
</form>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-select.js"></script>
<script type="text/javascript" src="../js/vgta.js"></script>
<script type="text/javascript">
			config = {};
        	CKEDITOR.replace('content-2', config.js);
        </script> 
</html>