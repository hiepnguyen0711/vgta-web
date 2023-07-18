<?php 
	require("dbconnect.php");
	session_start();
	$iddon = $_GET['idd'];
	$idsql = $_GET['id'];
	$tenmember = $_GET['tmb'];
	$tengang = $_GET['tg'];
	$hinhgang = $_GET['hg'];
	/*$idmember = $_SESSION['id'];*/
	$qrmember = "select `Online` from `accounts` where `id` = $idsql";
	$resultmember = mysqli_query($connect, $qrmember);
	$rowmember = mysqli_fetch_array($resultmember);	
	if($rowmember['Online'] == 1)
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("Người chơi đó đang Online không thể thực hiện chức năng này");'; 
		echo 'window.location.href = "../thongtintaikhoan-9";';
		echo '</script>';
	}
	else
	{
		$qrktcg = "select `FMember` from `accounts` where `id` = $idsql ";
		$resultktcg = mysqli_query($connect,$qrktcg);
		$rowktcg = mysqli_fetch_array($resultktcg);
		$ktcg = $rowktcg['FMember'];
		if($ktcg != 255)
		{
				echo '<script type="text/javascript">'; 
				echo 'alert("Người chơi này đã có gangs");'; 
				echo 'window.location ="../thongtintaikhoan-9";';
				echo '</script>';
		}
		else
		{
			$qr = "INSERT INTO `families` (`ID`, `Taken`, `Name`, `MOTD`, `Leader`, `Bank`, `Cash`, `FamilyUSafe`, `FamilySafeX`, `FamilySafeY`, `FamilySafeZ`, `FamilySafeVW`, `FamilySafeInt`, `Pot`, `Crack`, `Mats`, `Rank0`, `Rank1`, `Rank2`, `Rank3`, `Rank4`, `Rank5`, `Rank6`, `Members`, `MaxSkins`, `Skin1`, `Skin2`, `Skin3`, `Skin4`, `Skin5`, `Skin6`, `Skin7`, `Skin8`, `Color`, `TurfTokens`, `Gun1`, `Gun2`, `Gun3`, `Gun4`, `Gun5`, `Gun6`, `Gun7`, `Gun8`, `Gun9`, `Gun10`, `ExteriorX`, `ExteriorY`, `ExteriorZ`, `ExteriorA`, `InteriorX`, `InteriorY`, `InteriorZ`, `InteriorA`, `VW`, `INT`, `CustomInterior`, `Division0`, `Division1`, `Division2`, `Division3`, `Division4`, `Heroin`, `GtObject`, `MOTD1`, `MOTD2`, `MOTD3`, `fontface`, `fontsize`, `bold`, `fontcolor`, `backcolor`, `text`, `gtUsed`, `hinhgang`) VALUES (NULL, '1', '$tengang', 'None', '$tenmember', '0', '0', '0', '0.00000', '0.00000', '0.00000', '-1', '-1', '0', '0', '0', 'Newb', 'Outsider', 'Associate', 'Soldier', 'Capo', 'Underboss', 'Godfather', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0', '0', '0', 'none', 'none', 'none', 'none', 'none', '0', '1490', 'None', 'None', 'None', 'Arial', '24', '0', '-1', '0', 'Preview', '0', '$hinhgang')";

		mysqli_query($connect,$qr);
		$qrxd = "UPDATE `donxingang` SET `trangthai` = 1 WHERE `donxingang`.`id` = $iddon";
		mysqli_query($connect,$qrxd);
		$qrxd2 = "select id from `families` where `Leader` = '$tenmember'";
		$result2 = mysqli_query($connect,$qrxd2);
		$row2 = mysqli_fetch_array($result2);
		$idgang = $row2['id'];
		
		$qrxd3 = "UPDATE `families` SET `Taken` = '1' WHERE `families`.`ID` = $idgang";
		mysqli_query($connect,$qrxd3);
		
		$qrxd1 = "UPDATE `accounts` SET `FMember` = $idgang, `Rank` = 6, `Leader` = -1, `Member` = -1 WHERE `id` = $idsql";
		mysqli_query($connect,$qrxd1);
		echo '<script type="text/javascript">'; 
		echo 'alert("Duyệt Đơn Thành Công");'; 
		echo 'window.location.href = "../thongtintaikhoan-9";';
		echo '</script>';
			
		}
		
	}
	
	
	
	
?>