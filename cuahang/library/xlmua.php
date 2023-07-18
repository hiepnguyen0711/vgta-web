<?php
	session_start();
	require("dbconnect.php");
	if(!isset($_SESSION["IsLogin"]))
	{
		header('location:dangnhap.php');
		
	}
		$username = $_SESSION["taikhoan"];
		$sql = "select `id`, `cash`, `Online` from `accounts` where `Username` = '$username'";
		$result = mysqli_query($connect,$sql);
		$row = mysqli_fetch_array($result);
		$cash = $row["cash"];
		$sqlid = $row["id"];
		$sp = $_GET['id'];
 
 	$rd = rand(1,20);
 if($sp == 1)
 {
	 if($cash < 700)
	 {
		header('location:../../thongtintaikhoan-1'); 
	 }
	 else
	 {
		 if($rd >= 1 && $rd <= 4)
		 {
			 echo "<script>alert('Chúc Mừng bạn đã nhận được 1.000.000$ SAD, phần thưởng đã được chuyển vào game');</script>";
			 $qr = "update `accounts` set `Money` = `Money` + 1000000, `cash` = `cash` - 700 where `Username` = '$username'";
			 mysqli_query($connect,$qr);
			 $qr = "update `cuahang` set `so_luong` = `so_luong` - 1 where `id` = 1";
			 mysqli_query($connect,$qr);
		 }
		 else if($rd >= 5 && $rd <= 7)
		 {
			 echo "<script>alert('Chúc Mừng bạn đã nhận được VIP GOLD 7 NGÀY, phần thưởng đã được chuyển vào game /phieucuatoi');</script>";
			 $qr = "update `accounts` set `GVIPExVoucher` = `GVIPExVoucher` + 1, `cash` = `cash` - 700 where `Username` = '$username'";
			 mysqli_query($connect,$qr);
			 $qr = "update `cuahang` set `so_luong` = `so_luong` - 1 where `id` = 1";
			 mysqli_query($connect,$qr);
		 }
		 else if($rd >= 8 && $rd <= 10)
		 {
			 echo "<script>alert('Chúc Mừng bạn đã nhận được 10.000 Vật Liệu, phần thưởng đã được chuyển vào game ');</script>";
			 $qr = "update `accounts` set `Materials` = `Materials` + 10000, `cash` = `cash` - 700 where `Username` = '$username'";
			 mysqli_query($connect,$qr);
			 $qr = "update `cuahang` set `so_luong` = `so_luong` - 1 where `id` = 1";
			 mysqli_query($connect,$qr);
		 }
		 else if($rd >= 11 && $rd <= 13)
		 {
			 echo "<script>alert('Chúc Mừng bạn đã nhận được Chiếc xe đua Kart, phần thưởng đã được chuyển vào game /chinhxe');</script>";
			 $qr = "update `accounts` set `VehicleSlot` = `VehicleSlot` + 1, `cash` = `cash` - 700 where `Username` = '$username'";
			 mysqli_query($connect,$qr);
			 $qrtangxe = "INSERT INTO `vehicles` (`id`, `sqlID`, `pvModelId`, `pvPosX`, `pvPosY`, `pvPosZ`, `pvPosAngle`, `pvLock`, `pvLocked`, `pvPaintJob`, `pvColor1`, `pvColor2`, `pvPrice`, `pvTicket`, `pvRestricted`, `pvWeapon0`, `pvWeapon1`, `pvWeapon2`, `pvWepUpgrade`, `pvFuel`, `pvImpound`, `pvDisabled`, `pvPlate`, `pvMod0`, `pvMod1`, `pvMod2`, `pvMod3`, `pvMod4`, `pvMod5`, `pvMod6`, `pvMod7`, `pvMod8`, `pvMod9`, `pvMod10`, `pvMod11`, `pvMod12`, `pvMod13`, `pvMod14`, `pvVW`, `pvInt`, `pvDamaged`, `pvCrashFlag`, `pvCrashX`, `pvCrashY`, `pvCrashZ`, `pvCrashAngle`, `pvCrashVW`) VALUES (NULL, '$sqlid', '571', '1900.7560', '2101.0603', '10.8203', '177.4597', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '100', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0')";
			 mysqli_query($connect,$qrtangxe);
			 $qr = "update `cuahang` set `so_luong` = `so_luong` - 1 where `id` = 1";
			 mysqli_query($connect,$qr);
		 }
		 else if($rd >= 14 && $rd <= 17)
		 {
			 echo "<script>alert('Chúc Mừng bạn đã nhận được Chiếc xe Đánh Golf Caddy, phần thưởng đã được chuyển vào game /chinhxe');</script>";
			 $qr = "update `accounts` set `VehicleSlot` = `VehicleSlot` + 1, `cash` = `cash` - 700 where `Username` = '$username'";
			 mysqli_query($connect,$qr);
			 $qrtangxe = "INSERT INTO `vehicles` (`id`, `sqlID`, `pvModelId`, `pvPosX`, `pvPosY`, `pvPosZ`, `pvPosAngle`, `pvLock`, `pvLocked`, `pvPaintJob`, `pvColor1`, `pvColor2`, `pvPrice`, `pvTicket`, `pvRestricted`, `pvWeapon0`, `pvWeapon1`, `pvWeapon2`, `pvWepUpgrade`, `pvFuel`, `pvImpound`, `pvDisabled`, `pvPlate`, `pvMod0`, `pvMod1`, `pvMod2`, `pvMod3`, `pvMod4`, `pvMod5`, `pvMod6`, `pvMod7`, `pvMod8`, `pvMod9`, `pvMod10`, `pvMod11`, `pvMod12`, `pvMod13`, `pvMod14`, `pvVW`, `pvInt`, `pvDamaged`, `pvCrashFlag`, `pvCrashX`, `pvCrashY`, `pvCrashZ`, `pvCrashAngle`, `pvCrashVW`) VALUES (NULL, '$sqlid', '457', '1900.7560', '2101.0603', '10.8203', '177.4597', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '100', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0')";
			 mysqli_query($connect,$qrtangxe);
			 $qr = "update `cuahang` set `so_luong` = `so_luong` - 1 where `id` = 1";
			 mysqli_query($connect,$qr);
		 }
		 else if($rd == 18)
		 {
			 echo "<script>alert('Chúc Mừng bạn đã nhận được Chiếc xe đua QUAD, phần thưởng đã được chuyển vào game /chinhxe');</script>";
			 $qr = "update `accounts` set `VehicleSlot` = `VehicleSlot` + 1, `cash` = `cash` - 700 where `Username` = '$username'";
			 mysqli_query($connect,$qr);
			 $qrtangxe = "INSERT INTO `vehicles` (`id`, `sqlID`, `pvModelId`, `pvPosX`, `pvPosY`, `pvPosZ`, `pvPosAngle`, `pvLock`, `pvLocked`, `pvPaintJob`, `pvColor1`, `pvColor2`, `pvPrice`, `pvTicket`, `pvRestricted`, `pvWeapon0`, `pvWeapon1`, `pvWeapon2`, `pvWepUpgrade`, `pvFuel`, `pvImpound`, `pvDisabled`, `pvPlate`, `pvMod0`, `pvMod1`, `pvMod2`, `pvMod3`, `pvMod4`, `pvMod5`, `pvMod6`, `pvMod7`, `pvMod8`, `pvMod9`, `pvMod10`, `pvMod11`, `pvMod12`, `pvMod13`, `pvMod14`, `pvVW`, `pvInt`, `pvDamaged`, `pvCrashFlag`, `pvCrashX`, `pvCrashY`, `pvCrashZ`, `pvCrashAngle`, `pvCrashVW`) VALUES (NULL, '$sqlid', '471', '1900.7560', '2101.0603', '10.8203', '177.4597', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '100', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0')";
			 mysqli_query($connect,$qrtangxe);
			 $qr = "update `cuahang` set `so_luong` = `so_luong` - 1 where `id` = 1";
			 mysqli_query($connect,$qr);
		 }
		 else if($rd == 19)
		 {
			 echo "<script>alert('Chúc Mừng bạn đã nhận được SIÊU XE DUMPER, phần thưởng đã được chuyển vào game /chinhxe');</script>";
			 $qr = "update `accounts` set `VehicleSlot` = `VehicleSlot` + 1, `cash` = `cash` - 700 where `Username` = '$username'";
			 mysqli_query($connect,$qr);
			 $qrtangxe = "INSERT INTO `vehicles` (`id`, `sqlID`, `pvModelId`, `pvPosX`, `pvPosY`, `pvPosZ`, `pvPosAngle`, `pvLock`, `pvLocked`, `pvPaintJob`, `pvColor1`, `pvColor2`, `pvPrice`, `pvTicket`, `pvRestricted`, `pvWeapon0`, `pvWeapon1`, `pvWeapon2`, `pvWepUpgrade`, `pvFuel`, `pvImpound`, `pvDisabled`, `pvPlate`, `pvMod0`, `pvMod1`, `pvMod2`, `pvMod3`, `pvMod4`, `pvMod5`, `pvMod6`, `pvMod7`, `pvMod8`, `pvMod9`, `pvMod10`, `pvMod11`, `pvMod12`, `pvMod13`, `pvMod14`, `pvVW`, `pvInt`, `pvDamaged`, `pvCrashFlag`, `pvCrashX`, `pvCrashY`, `pvCrashZ`, `pvCrashAngle`, `pvCrashVW`) VALUES (NULL, '$sqlid', '406', '1900.7560', '2101.0603', '10.8203', '177.4597', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '100', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0')";
			 mysqli_query($connect,$qrtangxe);
			 $qr = "update `cuahang` set `so_luong` = `so_luong` - 1 where `id` = 1";
			 mysqli_query($connect,$qr);
		 }
		 else if($rd == 20)
		 {
			 echo "<script>alert('Chúc Mừng bạn đã nhận được XE FACTION SFPD, phần thưởng đã được chuyển vào game /chinhxe');</script>";
			 $qr = "update `accounts` set `VehicleSlot` = `VehicleSlot` + 1, `cash` = `cash` - 700 where `Username` = '$username'";
			 mysqli_query($connect,$qr);
			 $qrtangxe = "INSERT INTO `vehicles` (`id`, `sqlID`, `pvModelId`, `pvPosX`, `pvPosY`, `pvPosZ`, `pvPosAngle`, `pvLock`, `pvLocked`, `pvPaintJob`, `pvColor1`, `pvColor2`, `pvPrice`, `pvTicket`, `pvRestricted`, `pvWeapon0`, `pvWeapon1`, `pvWeapon2`, `pvWepUpgrade`, `pvFuel`, `pvImpound`, `pvDisabled`, `pvPlate`, `pvMod0`, `pvMod1`, `pvMod2`, `pvMod3`, `pvMod4`, `pvMod5`, `pvMod6`, `pvMod7`, `pvMod8`, `pvMod9`, `pvMod10`, `pvMod11`, `pvMod12`, `pvMod13`, `pvMod14`, `pvVW`, `pvInt`, `pvDamaged`, `pvCrashFlag`, `pvCrashX`, `pvCrashY`, `pvCrashZ`, `pvCrashAngle`, `pvCrashVW`) VALUES (NULL, '$sqlid', '597', '1900.7560', '2101.0603', '10.8203', '177.4597', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '100', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0')";
			 mysqli_query($connect,$qrtangxe);
			 $qr = "update `cuahang` set `so_luong` = `so_luong` - 1 where `id` = 1";
			 mysqli_query($connect,$qr);
		 }
		 echo "<script>window.location = '../cuahang.php';</script>";
	 }
 }
 else if($sp == 2)
 {
	 if($cash < 300)
	 {
		header('location:../../thongtintaikhoan-1'); 
	 }
	 else
	 {
		 if($rd >= 1 && $rd <= 4)
		 {
			 echo "<script>alert('Chúc Mừng bạn đã nhận được 500.000$ SAD, phần thưởng đã được chuyển vào game');</script>";
			 $qr = "update `accounts` set `Money` = `Money` + 500000, `cash` = `cash` - 300 where `Username` = '$username'";
			 mysqli_query($connect,$qr);
			 $qr = "update `cuahang` set `so_luong` = `so_luong` - 1 where `id` = 2";
			 mysqli_query($connect,$qr);
		 }
		 else if($rd >= 5 && $rd <= 7)
		 {
			 echo "<script>alert('Chúc Mừng bạn đã nhận được VIP GOLD 7 NGÀY, phần thưởng đã được chuyển vào game /phieucuatoi');</script>";
			 $qr = "update `accounts` set `GVIPExVoucher` = `GVIPExVoucher` + 1, `cash` = `cash` - 300 where `Username` = '$username'";
			 mysqli_query($connect,$qr);
			 $qr = "update `cuahang` set `so_luong` = `so_luong` - 1 where `id` = 2";
			 mysqli_query($connect,$qr);
		 }
		 else if($rd >= 8 && $rd <= 10)
		 {
			 echo "<script>alert('Chúc Mừng bạn đã nhận được 10 Mè Đen, phần thưởng đã được chuyển vào game ');</script>";
			 $qr = "update `accounts` set `MeDen` = `MeDen` + 10, `cash` = `cash` - 300 where `Username` = '$username'";
			 mysqli_query($connect,$qr);
			 $qr = "update `cuahang` set `so_luong` = `so_luong` - 1 where `id` = 2";
			 mysqli_query($connect,$qr);
		 }
		 else if($rd >= 11 && $rd <= 13)
		 {
			 echo "<script>alert('Chúc Mừng bạn đã nhận được TOY HÚT BỒN CẦU, phần thưởng đã được chuyển vào game /toys');</script>";
			 $qr = "update `accounts` set `ToySlot` = `ToySlot` + 1, `cash` = `cash` - 300 where `Username` = '$username'";
			 mysqli_query($connect,$qr);
			 $qrtangxe = "INSERT INTO `toys` (`id`, `player`, `modelid`, `bone`, `posx`, `posy`, `posz`, `rotx`, `roty`, `rotz`, `scalex`, `scaley`, `scalez`, `tradable`, `special`) VALUES (NULL, '$sqlid', '-2005', '5', '0', '0.028', '-0.048999', '0', '0', '0', '1', '1', '1', '1', '0')";
			 mysqli_query($connect,$qrtangxe);
			 $qr = "update `cuahang` set `so_luong` = `so_luong` - 1 where `id` = 2";
			 mysqli_query($connect,$qr);
		 }
		 else if($rd >= 14 && $rd <= 17)
		 {
			 echo "<script>alert('Chúc Mừng bạn đã nhận được TOYS DAO PUBG, phần thưởng đã được chuyển vào game /toys');</script>";
			 $qr = "update `accounts` set `ToySlot` = `ToySlot` + 1, `cash` = `cash` - 300 where `Username` = '$username'";
			 mysqli_query($connect,$qr);
			 $qrtangxe = "INSERT INTO `toys` (`id`, `player`, `modelid`, `bone`, `posx`, `posy`, `posz`, `rotx`, `roty`, `rotz`, `scalex`, `scaley`, `scalez`, `tradable`, `special`) VALUES (NULL, '$sqlid', '-2003', '5', '0', '-0.005998', '0.040999', '0', '0', '0', '1', '1', '1', '1', '0')";
			 mysqli_query($connect,$qrtangxe);
			 $qr = "update `cuahang` set `so_luong` = `so_luong` - 1 where `id` = 2";
			 mysqli_query($connect,$qr);
		 }
		 else if($rd == 18)
		 {
			 echo "<script>alert('Chúc Mừng bạn đã nhận được TOYS QUẢ BOM KHÓI, phần thưởng đã được chuyển vào game /toys');</script>";
			 $qr = "update `accounts` set `ToySlot` = `ToySlot` + 1, `cash` = `cash` - 300 where `Username` = '$username'";
			 mysqli_query($connect,$qr);
			 $qrtangxe = "INSERT INTO `toys` (`id`, `player`, `modelid`, `bone`, `posx`, `posy`, `posz`, `rotx`, `roty`, `rotz`, `scalex`, `scaley`, `scalez`, `tradable`, `special`) VALUES (NULL, '$sqlid', '-2013', '6', '0', '0', '0', '0', '0', '0', '1', '1', '1', '1', '0')";
			 mysqli_query($connect,$qrtangxe);
			 $qr = "update `cuahang` set `so_luong` = `so_luong` - 1 where `id` = 2";
			 mysqli_query($connect,$qr);
		 }
		 else if($rd == 19)
		 {
			 echo "<script>alert('Chúc Mừng bạn đã nhận được TOYS AK47 VIP DRAGON, phần thưởng đã được chuyển vào game /toys');</script>";
			 $qr = "update `accounts` set `ToySlot` = `ToySlot` + 1, `cash` = `cash` - 300 where `Username` = '$username'";
			 mysqli_query($connect,$qr);
			 $qrtangxe = "INSERT INTO `toys` (`id`, `player`, `modelid`, `bone`, `posx`, `posy`, `posz`, `rotx`, `roty`, `rotz`, `scalex`, `scaley`, `scalez`, `tradable`, `special`) VALUES (NULL, '$sqlid', '-2004', '1', '-0.195', '-0.191', '-0.308999', '-8.8', '-38.2', '3.8', '1', '1', '1', '1', '0')";
			 mysqli_query($connect,$qrtangxe);
			 $qr = "update `cuahang` set `so_luong` = `so_luong` - 1 where `id` = 2";
			 mysqli_query($connect,$qr);
		 }
		 else if($rd == 20)
		 {
			 echo "<script>alert('Chúc Mừng bạn đã nhận được TOYS CÁNH RỒNG, phần thưởng đã được chuyển vào game /toys');</script>";
			 $qr = "update `accounts` set `ToySlot` = `ToySlot` + 1, `cash` = `cash` - 300 where `Username` = '$username'";
			 mysqli_query($connect,$qr);
			 $qrtangxe = "INSERT INTO `toys` (`id`, `player`, `modelid`, `bone`, `posx`, `posy`, `posz`, `rotx`, `roty`, `rotz`, `scalex`, `scaley`, `scalez`, `tradable`, `special`) VALUES (NULL, '$sqlid', '-2016', '1', '0.043', '-0.158999', '-0.04', '4.3', '85.7', '1.7', '1', '1', '1', '1', '0')";
			 mysqli_query($connect,$qrtangxe);
			 $qr = "update `cuahang` set `so_luong` = `so_luong` - 1 where `id` = 2";
			 mysqli_query($connect,$qr);
		 }
		 echo "<script>window.location = '../cuahang.php';</script>";
	 }
 }
 else if($sp == 3)
 {
	 if($cash < 500)
	 {
		header('location:../../thongtintaikhoan-1'); 
	 }
	 else
	 {
		 echo "<script>alert('Cảm Ơn bạn đã mua TOYS SNIPER DRAGON, VẬT PHẨM đã được chuyển vào game /toys');</script>";
			 $qr = "update `accounts` set `ToySlot` = `ToySlot` + 1, `cash` = `cash` - 500 where `Username` = '$username'";
			 mysqli_query($connect,$qr);
			 $qrtangxe = "INSERT INTO `toys` (`id`, `player`, `modelid`, `bone`, `posx`, `posy`, `posz`, `rotx`, `roty`, `rotz`, `scalex`, `scaley`, `scalez`, `tradable`, `special`) VALUES (NULL, '$sqlid', '-2015', '6', '0', '0', '0', '0', '0', '0', '1', '1', '1', '1', '0')";
			 mysqli_query($connect,$qrtangxe);
			 $qr = "update `cuahang` set `so_luong` = `so_luong` - 1 where `id` = 3";
			 mysqli_query($connect,$qr);
			 echo "<script>window.location = '../cuahang.php';</script>";
	 }
 }
 else if($sp == 4)
 {
	 if($cash < 2000)
	 {
		header('location:../../thongtintaikhoan-1'); 
	 }
	 else
	 {
		 echo "<script>alert('Cảm Ơn bạn đã mua TOYS CÁNH RỒNG, VẬT PHẨM đã được chuyển vào game /toys');</script>";
			 $qr = "update `accounts` set `ToySlot` = `ToySlot` + 1, `cash` = `cash` - 2000 where `Username` = '$username'";
			 mysqli_query($connect,$qr);
			$qrtangxe = "INSERT INTO `toys` (`id`, `player`, `modelid`, `bone`, `posx`, `posy`, `posz`, `rotx`, `roty`, `rotz`, `scalex`, `scaley`, `scalez`, `tradable`, `special`) VALUES (NULL, '$sqlid', '-2016', '1', '0.043', '-0.158999', '-0.04', '4.3', '85.7', '1.7', '1', '1', '1', '1', '0')";
			 mysqli_query($connect,$qrtangxe);
			 $qr = "update `cuahang` set `so_luong` = `so_luong` - 1 where `id` = 4";
			 mysqli_query($connect,$qr);
			 echo "<script>window.location = '../cuahang.php';</script>";
	 }
 }
  else if($sp == 5)
 {
	 if($cash < 700)
	 {
		header('location:../../thongtintaikhoan-1'); 
	 }
	 else
	 {
		 echo "<script>alert('Cảm Ơn bạn đã mua TOYS KHIÊN CAPTION AMERICA, VẬT PHẨM đã được chuyển vào game /toys');</script>";
			 $qr = "update `accounts` set `ToySlot` = `ToySlot` + 1, `cash` = `cash` - 700 where `Username` = '$username'";
			 mysqli_query($connect,$qr);
			$qrtangxe = "INSERT INTO `toys` (`id`, `player`, `modelid`, `bone`, `posx`, `posy`, `posz`, `rotx`, `roty`, `rotz`, `scalex`, `scaley`, `scalez`, `tradable`, `special`) VALUES (NULL, '$sqlid', '-2017', '6', '0', '-0.044999', '0', '0', '0', '0', '1', '1', '1', '1', '0')";
			 mysqli_query($connect,$qrtangxe);
			 $qr = "update `cuahang` set `so_luong` = `so_luong` - 1 where `id` = 5";
			 mysqli_query($connect,$qr);
			 echo "<script>window.location = '../cuahang.php';</script>";
	 }
 }
   else if($sp == 6)
 {
	 if($cash < 400)
	 {
		header('location:../../thongtintaikhoan-1'); 
	 }
	 else
	 {
		 echo "<script>alert('Cảm Ơn bạn đã mua TOYS SNIPER GOLD, VẬT PHẨM đã được chuyển vào game /toys');</script>";
			 $qr = "update `accounts` set `ToySlot` = `ToySlot` + 1, `cash` = `cash` - 400 where `Username` = '$username'";
			 mysqli_query($connect,$qr);
			$qrtangxe = "INSERT INTO `toys` (`id`, `player`, `modelid`, `bone`, `posx`, `posy`, `posz`, `rotx`, `roty`, `rotz`, `scalex`, `scaley`, `scalez`, `tradable`, `special`) VALUES (NULL, '$sqlid', '-2012', '6', '0', '0', '0', '0', '0', '0', '1', '1', '1', '1', '0')";
			 mysqli_query($connect,$qrtangxe);
			 $qr = "update `cuahang` set `so_luong` = `so_luong` - 1 where `id` = 6";
			 mysqli_query($connect,$qr);
			 echo "<script>window.location = '../cuahang.php';</script>";
	 }
 }
 else if($sp == 7)
 {
	 if($cash < 1000)
	 {
		header('location:../../thongtintaikhoan-1'); 
	 }
	 else
	 {
		 echo "<script>alert('Cảm Ơn bạn đã mua TOYS ĐẦU RỒNG, VẬT PHẨM đã được chuyển vào game /toys');</script>";
			 $qr = "update `accounts` set `ToySlot` = `ToySlot` + 1, `cash` = `cash` - 1000 where `Username` = '$username'";
			 mysqli_query($connect,$qr);
			$qrtangxe = "INSERT INTO `toys` (`id`, `player`, `modelid`, `bone`, `posx`, `posy`, `posz`, `rotx`, `roty`, `rotz`, `scalex`, `scaley`, `scalez`, `tradable`, `special`) VALUES (NULL, '$sqlid', '3528', '2', '0.161', '0', '-0.048999', '92.5', '59.6999', '6.2', '0.125999', '0.138', '0.147999', '1', '0')";
			 mysqli_query($connect,$qrtangxe);
			 $qr = "update `cuahang` set `so_luong` = `so_luong` - 1 where `id` = 7";
			 mysqli_query($connect,$qr);
			 echo "<script>window.location = '../cuahang.php';</script>";
	 }
 }
 else if($sp == 9)
 {
	 if($cash < 200)
	 {
		header('location:../../thongtintaikhoan-1'); 
	 }
	 else
	 {
		 echo "<script>alert('Cảm Ơn bạn đã mua TOYS BALO TÍM, VẬT PHẨM đã được chuyển vào game /toys');</script>";
			 $qr = "update `accounts` set `ToySlot` = `ToySlot` + 1, `cash` = `cash` - 200 where `Username` = '$username'";
			 mysqli_query($connect,$qr);
			$qrtangxe = "INSERT INTO `toys` (`id`, `player`, `modelid`, `bone`, `posx`, `posy`, `posz`, `rotx`, `roty`, `rotz`, `scalex`, `scaley`, `scalez`, `tradable`, `special`) VALUES (NULL, '$sqlid', '3026', '1', '-0.074999', '-0.072999', '0.001', '0', '0', '0', '1', '1', '1', '1', '0')";
			 mysqli_query($connect,$qrtangxe);
			 $qr = "update `cuahang` set `so_luong` = `so_luong` - 1 where `id` = 9";
			 mysqli_query($connect,$qr);
			 echo "<script>window.location = '../cuahang.php';</script>";
	 }
 }
 else if($sp == 10)
 {
	 if($cash < 5000)
	 {
		header('location:../../thongtintaikhoan-1'); 
	 }
	 else
	 {
		 echo "<script>alert('Cảm Ơn bạn đã mua SIÊU XE DUMPER, VẬT PHẨM đã được chuyển vào game /chinhxe');</script>";
			$qr = "update `accounts` set `VehicleSlot` = `VehicleSlot` + 1, `cash` = `cash` - 5000 where `Username` = '$username'";
			 mysqli_query($connect,$qr);
			 $qrtangxe = "INSERT INTO `vehicles` (`id`, `sqlID`, `pvModelId`, `pvPosX`, `pvPosY`, `pvPosZ`, `pvPosAngle`, `pvLock`, `pvLocked`, `pvPaintJob`, `pvColor1`, `pvColor2`, `pvPrice`, `pvTicket`, `pvRestricted`, `pvWeapon0`, `pvWeapon1`, `pvWeapon2`, `pvWepUpgrade`, `pvFuel`, `pvImpound`, `pvDisabled`, `pvPlate`, `pvMod0`, `pvMod1`, `pvMod2`, `pvMod3`, `pvMod4`, `pvMod5`, `pvMod6`, `pvMod7`, `pvMod8`, `pvMod9`, `pvMod10`, `pvMod11`, `pvMod12`, `pvMod13`, `pvMod14`, `pvVW`, `pvInt`, `pvDamaged`, `pvCrashFlag`, `pvCrashX`, `pvCrashY`, `pvCrashZ`, `pvCrashAngle`, `pvCrashVW`) VALUES (NULL, '$sqlid', '406', '1900.7560', '2101.0603', '10.8203', '177.4597', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '100', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0')";
			 mysqli_query($connect,$qrtangxe);
			 $qr = "update `cuahang` set `so_luong` = `so_luong` - 1 where `id` = 10";
			 mysqli_query($connect,$qr);
			 echo "<script>window.location = '../cuahang.php';</script>";
	 }
 }
 else if($sp == 8)
		 {
			  if($cash < 200)
			 {
				header('location:../../thongtintaikhoan-1'); 
			 }
			 else
			 {
				echo "<script>alert('Cảm Ơn bạn đã mua BÁNH XE VÀNG, phần thưởng đã được chuyển vào game /userimkit  > Switch');</script>";
				 $qr = "update `accounts` set `RimMod` = `RimMod` + 1, `cash` = `cash` - 200 where `Username` = '$username'";
				 mysqli_query($connect,$qr);
				 $qr = "update `cuahang` set `so_luong` = `so_luong` - 1 where `id` = 8";
				 mysqli_query($connect,$qr); 
				 echo "<script>window.location = '../cuahang.php';</script>";
			 }
			 
		 }
?>