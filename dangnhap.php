<?php
	session_start();
	require("libra/dbconnect.php");
	if(isset($_SESSION["IsLogin"]))
	{
		header('location:https://vanhiepjp.com/vgta/thongtintaikhoan/');
		
	}
	$thongbao = "";
	if(isset($_POST['Submit']))
	{
		$taikhoan = trim($_POST['taikhoan']);
		$matkhau = trim($_POST['matkhau']);
		$matkhaumh = strtoupper(hash('whirlpool',$matkhau));
		
		$qr = "select * from `accounts` where `Username` = '$taikhoan' and `Key` = '$matkhaumh' ";
		$ketqua = mysqli_query($connect, $qr);
		$sodong = mysqli_num_rows($ketqua);
		if($sodong == 1)
		{
			$dong = mysqli_fetch_array($ketqua);
			$_SESSION['taikhoan'] = $dong['Username'];
			$_SESSION['matkhau'] = $dong['Key'];
			$_SESSION['id'] = $dong['id'];
			$_SESSION['songay'] = $dong['songay'];
			$_SESSION['ngaynhan'] = $dong['ngaynhan'];
			$_SESSION['cash'] = $dong['cash'];
			$_SESSION['online'] = $dong['Online'];
			$_SESSION["IsLogin"] = 1;
			header('location:https://vanhiepjp.com/vgta/thongtintaikhoan/');
		}
		else{
			$thongbao = "Tài Khoản hoặc Mật khẩu không đúng";
		}
			
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<base href="https://vanhiepjp.com/vgta/" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/styledangnhap.css"/>
<link rel="icon" type="image/gif" href="images/logo.png" />
<title>Đăng Nhập VGTA SAMP</title>
</head>

<body>
	<canvas id="canvas"></canvas>
    <audio autoplay="true" loop="loop">
    	<source src="audio/tiengphao.mp3" type="audio/mpeg">
    </audio>
	<div class="container">
    	<div class="khungdangnhap">
        	<form method="post" action="">
            
            <table border="0" cellpadding="5">
              <tr>
                <td><h1>VGTA SAMP ĐĂNG NHẬP</h1></td>
              </tr>
              <tr>
                <td><input type="text" name="taikhoan" placeholder="  Tài Khoản" required="required"/></td>
              </tr>
              <tr>
                <td><input type="password" name="matkhau" placeholder="  Mật Khẩu" required="required"/></td>
              </tr>
              <tr>
                <td><a href="quenmatkhau.php">Quên mật khẩu</a></td>
              </tr>
              <tr>
                <td><button type="submit" name="Submit" class="btn btn-default">Đăng Nhập</button>&nbsp;<a href="trangchu"><button type="button" name="quaylai" class="btn btn-warning">Quay lại</button></a><br />
<br />
</td>
              </tr>
              <tr>
              	<td><h5 style="color:#ff0000; font-weight:bold"><?php echo $thongbao ?></h5></td>
              </tr>
            </table>
			
            </form>
        </div>
    
    </div>
    

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>

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