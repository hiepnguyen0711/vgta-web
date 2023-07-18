
<?php

/*	echo '<script type="text/javascript">'; 
	echo 'alert("Đến ngày 31/01 VGTA SAMP sẽ mở đăng ký bạn nhé ;)");'; 
	echo 'window.location.href = "trangchu";';
	echo '</script>';*/
	
	/*echo "<script>alert('Bây giờ bạn có thể đăng kí trực tuyến trong game');
		window.location = 'https://vanhiepjp.com/vgta/';
		</script>";*/
	require("libra/dbconnect.php");
	$thongbao ="";
	
	$hople = true;
	if(isset($_POST['Submit']))
	{
		$taikhoan = trim($_POST['taikhoan']);
		$matkhau = trim($_POST['matkhau']);
		$xnmatkhau = trim($_POST['xnmatkhau']);
		$qrkt = "select `Username` from `accounts` where `Username` = '$taikhoan' ";
		$ketquakt = mysqli_query($connect, $qrkt);
		$sodong = mysqli_num_rows($ketquakt);
		settype($sodong, 'int');
		if($sodong > 0)
		{
			$thongbao .= "<span style='color:#FF0000'>Tài khoản này đã tồn tại</span><br/>";
			$hople = false;
		}
		if(strlen(strstr($taikhoan, "_")) <= 0)
		{
			$thongbao .= "<span style='color:#FF0000'>Tài khoản: Họ_Tên</span><br/>";
			$hople = false;
		}
		if(strcmp($matkhau,$xnmatkhau)!=0)
		{
			
			$thongbao .= "<span style='color:#FF0000'>Mật khẩu không giống nhau</span><br/>";
			$hople = false;
		}
		/*if(!isset($_POST['checkboxdieukhoan']))
		{
			$thongbao .= "Bạn chưa đồng ý điều khoản<br/>";
			$hople = false;	
		}*/
		if($hople == true)
		{
			$matkhaumh = strtoupper(hash('whirlpool',$matkhau));
			$email = trim($_POST['email']);
			
			$qr = "insert into `accounts` (`Username`,`Key`,`Email`) values ('$taikhoan', '$matkhaumh', '$email') ";
			mysqli_query($connect, $qr);
			
			$qrtaikhoan = "select `id` from `accounts` where `Username` = '$taikhoan' ";
			$ketquasqlid = mysqli_query($connect, $qrtaikhoan);
			$rowsqlid = mysqli_fetch_array($ketquasqlid);
			$sqlid = $rowsqlid['id'];
			$idxetang = $_POST['chonxe'];

			$qrtangxe = "INSERT INTO `vehicles` (`id`, `sqlID`, `pvModelId`, `pvPosX`, `pvPosY`, `pvPosZ`, `pvPosAngle`, `pvLock`, `pvLocked`, `pvPaintJob`, `pvColor1`, `pvColor2`, `pvPrice`, `pvTicket`, `pvRestricted`, `pvWeapon0`, `pvWeapon1`, `pvWeapon2`, `pvWepUpgrade`, `pvFuel`, `pvImpound`, `pvDisabled`, `pvPlate`, `pvMod0`, `pvMod1`, `pvMod2`, `pvMod3`, `pvMod4`, `pvMod5`, `pvMod6`, `pvMod7`, `pvMod8`, `pvMod9`, `pvMod10`, `pvMod11`, `pvMod12`, `pvMod13`, `pvMod14`, `pvVW`, `pvInt`, `pvDamaged`, `pvCrashFlag`, `pvCrashX`, `pvCrashY`, `pvCrashZ`, `pvCrashAngle`, `pvCrashVW`) VALUES (NULL, '$sqlid', '$idxetang', '1900.7560', '2101.0603', '10.8203', '177.4597', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '100', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0')";
			mysqli_query($connect,$qrtangxe);
			
			/*$qrxe = "insert into `vehicles` (`sqlID`) values ($sqlid)";
			$i = 1;
			while($i <= 3)
			{
				mysqli_query($connect,$qrxe);
				$i++;
			}
			
			$qrtoy = "INSERT INTO `toys` (`id`, `player`, `modelid`, `bone`, `posx`, `posy`, `posz`, `rotx`, `roty`, `rotz`, `scalex`, `scaley`, `scalez`, `tradable`, `special`) VALUES (NULL, '$sqlid', '', '', '', '', '', '', '', '', '', '', '', '0', '0')";
			$j = 0;
			while($j < 5)
			{
				mysqli_query($connect,$qrtoy);
				$j++;
			}*/
			
			echo '<script type="text/javascript">'; 
			echo 'alert("Đăng ký thành công");'; 
			echo 'window.location.href = "trangchu";';
			echo '</script>';
		}
		
		
		
	}
	else{
		
	}
	

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<base href="https://vanhiepjp.com/vgta/" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/styledangky.css"/>
<link rel="icon" type="image/gif" href="images/logo.png" />
<title>Đăng ký tài khoản VGTA SAMP</title>
</head>

<body>
	<div class="container">
    	<div class="col-md-12 ">
        	<form method="post" action="" class="khungdangky">
            	<span style="text-shadow:3px 2px 9px #000; color:#ffff00; font-size:20px"><strong>Chào mừng bạn đến với VGTA SAMP. <br />
			Vui lòng điền đầy đủ thông tin chính xác khi đăng ký tài khoản.</strong></span>
            	<table width="60%" border="0" cellpadding="5">
                  <tr>
                    <td colspan="3">
                    <input type="text" name="taikhoan" placeholder="  Tên tài khoản Ho_Ten" maxlength="20" required="required"/>
                    </td>
                    
                  </tr>
                  <tr>
                    <td colspan="3"><input type="email" name="email" placeholder="  Email" required="required"/></td>
                  </tr>
                  <tr>
                    <td colspan="3"><input type="password" name="matkhau" placeholder="  Mật khẩu" maxlength="16" required="required"/></td>
                  </tr>
                  <tr>
                    <td colspan="3"><input type="password" name="xnmatkhau" placeholder="  Xác nhận mật khẩu" maxlength="16" required="required"/></td>
                  </tr>
                 <!-- <tr>
                    <td><input type="number" name="dienthoai" placeholder="  Điện thoại" maxlength="12"/></td>
                  </tr>
                  <tr>
                    <td><input type="number" name="cmnd" placeholder="  CMND" maxlength="9"/></td>
                  </tr>-->
                  <tr>
                  	<td class="nenxe"><div class="nendep">Xe Bobcat</div><img src="images/xe/422.png" width="80%" alt="Bobcat" title="Xe Bobcat" /><br />
<input type="radio" id="xe" value="422" name="chonxe" checked="checked" /></td>
                    <td class="nenxe"><div class="nendep">Xe Bravura</div><img src="images/xe/401.png" width="80%" alt="Bravura" title="Xe Bravura" /><br />
<input type="radio" id="xe" value="401" name="chonxe" /></td>
                    <td class="nenxe"><div class="nendep">Xe Manana</div><img src="images/xe/410.png" width="80%" alt="Manana" title="Xe Manana" /><br />
<input type="radio" id="xe" value="410" name="chonxe" /></td>
                  </tr>
                  <tr>
                  	<td class="nenxe"><div class="nendep">Xe Esperanto</div><img src="images/xe/419.png" width="80%" alt="Esperanto" title="Xe Esperanto" /><br />
<input type="radio" id="xe" value="419" name="chonxe" /></td>
                    <td class="nenxe"><div class="nendep">Xe Romero</div><img src="images/xe/442.png" width="80%" alt="Romero" title="Xe Romero" /><br />
<input type="radio" id="xe" value="442" name="chonxe" /></td>
                    <td class="nenxe"><div class="nendep">Xe Pony</div><img src="images/xe/413.png" width="80%" alt="Pony" title="Xe Pony" /><br />
<input type="radio" id="xe" value="413" name="chonxe" /></td>
                  </tr>
                  <tr>
                  	<td class="nenxe"><div class="nendep">Xe Đạp</div><img src="images/xe/510.png" width="80%" alt="Mountain bike" title="Xe Đạp" /><br />
<input type="radio" id="xe" value="510" name="chonxe" /></td>
                    <td class="nenxe"><div class="nendep">Xe Faggio</div><img src="images/xe/462.png" width="80%" alt="Faggio" title="Xe Faggio" /><br />
<input type="radio" id="xe" value="462" name="chonxe" /></td>
                    <td class="nenxe"><div class="nendep">Xe Moonbeam</div><img src="images/xe/418.png" width="80%" alt="Moonbeam" title="Xe Moonbeam" /><br />
<input type="radio" id="xe" value="418" name="chonxe" /></td>
                  </tr>
                  <tr>
                  	<td colspan="3"><input type="checkbox" name="checkboxdieukhoan" value="1"/><p>Bằng cách nhấn vào nút này, tôi xác nhận rằng tôi đang ở độ tuổi<br />
 
mười ba tuổi trở lên và tôi đồng ý với Điều khoản sử dụng dịch vụ.</p></td>
                  </tr>
                  <tr>
                    <td colspan="3"><button type="submit" name="Submit" class="btn btn-default">Đăng Ký</button>
                    &nbsp;<a href="trangchu"><button type="button" name="Comeback" class="btn btn-warning">Quay lại</button></a></td>
                    
                  </tr>
                  <tr >
                  	<td colspan="3"><div style="margin-top:10px"><p><span style="color:#ffffff; text-shadow:0px 0px 12px #fff ;font-size:16px"><?php echo $thongbao?></span></p></div></td>
                  </tr>
                </table>

            	
                
            </form>
        	
        </div>
        
    </div>
	

<audio id="rechuot" >
  <source src="maps/audio/BELL.mp3" type="audio/mp3" />
</audio>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script>
	var audio = document.getElementById("rechuot");
	$(".nenxe").mouseenter(function() {
        audio.play();
    });
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