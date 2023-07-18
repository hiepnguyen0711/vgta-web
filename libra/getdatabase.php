<?php
	

	function LayTinTuc()
	{
		require "dbconnect.php";
		$qr = "select tieudetin, DAY(ngaydang) 'ngay', MONTH(ngaydang) 'thang', id, tieudetin_khongdau from tin
				order by id desc 
					limit 1,5
		";
		
		return mysqli_query($connect, $qr);
	}
	
	function LayTinMoiNhat()
	{
		require "dbconnect.php";
		$qr = "select tieudetin, tomtat, anhhien, DAY(ngaydang) 'ngay', MONTH(ngaydang) 'thang', id, tieudetin_khongdau from tin
					order by id desc 
					limit 0,1
					";
		return mysqli_query($connect, $qr);
	}
	
	function LayLoaiTinMoiNhat($id_loaitin)
	{
		require "dbconnect.php";
		$qr = "select tieudetin, tomtat, anhhien, DAY(ngaydang) 'ngay', MONTH(ngaydang) 'thang', id, tieudetin_khongdau from tin 
		where id_loaitin = '$id_loaitin' 
		order by id desc 
		limit 0,1
		";
		return mysqli_query($connect, $qr);
	}
	
	function LayLoaiTin($id_loaitin)
	{
		require "dbconnect.php";
		$qr = "select tieudetin, tomtat, DAY(ngaydang) 'ngay', MONTH(ngaydang) 'thang', YEAR(ngaydang) 'nam', id, id_loaitin, tieudetin_khongdau from tin
				where id_loaitin = '$id_loaitin' 
				order by id desc 
					limit 1,5
		";
		
		return mysqli_query($connect, $qr);
	}
	
	
	function LayLoaiTinDanhMuc($id_loaitin, $start, $limit)
	{
		require "dbconnect.php";
		$qr = "select tieudetin, anhhien, tomtat, DAY(ngaydang) 'ngay', MONTH(ngaydang) 'thang', YEAR(ngaydang) 'nam', id, id_loaitin, tieudetin_khongdau from tin
				where id_loaitin = '$id_loaitin' 
				order by id desc 
					limit $start,$limit
		";
		
		return mysqli_query($connect, $qr);
	}
	
	function LayLoaiTinTatCa($id_loaitin)
	{
		require "dbconnect.php";
		$qr = "select tieudetin, DAY(ngaydang) 'ngay', MONTH(ngaydang) 'thang', YEAR(ngaydang) 'nam', id, id_loaitin, tomtat, anhhien, tieudetin_khongdau from tin
				where id_loaitin = '$id_loaitin' 
				order by id desc 
					
		";
		
		return mysqli_query($connect, $qr);
	}
	
	function LayChiTietTin($id_tin){
		require "dbconnect.php";
		$qr = "select tieudetin, ten_khongdau, DAY(ngaydang) 'ngay', MONTH(ngaydang) 'thang', YEAR(ngaydang) 'nam', id, noidung, tomtat, nguoidang, l.ten_loaitin, l.id_loaitin, tieudetin_khongdau from tin t join loaitin l on (t.id_loaitin = l.id_loaitin )
				where id = '$id_tin' ";
		return mysqli_query($connect, $qr );
	}
	
	function BreadCumb($id_loaitin)
	{
		require "dbconnect.php";
		$qr = "select id_loaitin, ten_loaitin, tieudetin from tin t join loaitin l on (t.id_loaitin = l.id_loaitin )
				where t.id_loaitin = '$id_loaitin'
		";
		return mysqli_query($connect, $qr );
	}
	
	function DanhMucLoaiTin($id_loaitin){
		require "dbconnect.php";
		$qr = "select * from loaitin where id_loaitin = '$id_loaitin'";
		return mysqli_query($connect, $qr);
	}
	
	
	
	function gioihantieude($string, $max = 20, $rep = '[...]') {
	   $strlen = strlen($string);
		
		if ($strlen <= $max)
		return $string;
		 
	   $lengthtokeep=$max - strlen($rep);
	   $start = 0;
	   $end = 0;
		 
		if (($lengthtokeep % 2) == 0) {
		   $start = $lengthtokeep / 2;
		   $end = $start;
	   } else {
		   $start = intval($lengthtokeep / 2)+2;
		   $end = $start - 5;
	   }
	   $i = $start;
	   $tmp_string = $string;
	   while ($i < $strlen) {
		   if (isset($tmp_string[$i]) and $tmp_string[$i] == ' ') {
			   $tmp_string = mb_substr($tmp_string, 0, $i,'UTF-8') . $rep;
			   $return = $tmp_string;
		   }
		   $i++;
	   }
		
	   $i = $end;
	   $tmp_string = strrev ($string);
	   while ($i < $strlen) {
		   if (isset($tmp_string[$i]) and $tmp_string[$i] == ' ') {
			   $tmp_string = mb_substr($tmp_string, 0, $i,'UTF-8');
			   $return .= strrev ($tmp_string);
		   }
		   $i++;
	   }
	   if(isset($return)) return $return;
   		return mb_substr($string, 0, $start,'UTF-8') . $rep . mb_substr($string, - $end,'UTF-8');
		}
		
		
		function gioihantieudegon($str,$limit=100)
		{
			if(strlen($str)<=$limit) return $str;
			return mb_substr($str,0,$limit-3,'UTF-8').'...';
		}
	
		/*function kiemTraDangNhap()
		{
			$kt = false;
			if(isset($_SESSION["taikhoan"]))
			{
				$kt = true;
			}
			return $kt;
			
		}*/
		
		
		function adddotstring($strNum) {
 
        $len = strlen($strNum);
        $counter = 3;
        $result = "";
        while ($len - $counter >= 0)
        {
            $con = substr($strNum, $len - $counter , 3);
            $result = '.'.$con.$result;
            $counter+= 3;
        }
        $con = substr($strNum, 0 , 3 - ($counter - $len) );
        $result = $con.$result;
        if(substr($result,0,1)=='.'){
            $result=substr($result,1,$len+1);   
        }
        return $result;
}
?>