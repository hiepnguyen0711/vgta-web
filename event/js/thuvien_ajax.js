// JavaScript Document
function xldangnhap()
{
	// Thu thập thông tin 
	var taikhoan=document.getElementById("taikhoan");
	var matkhau = document.getElementById("matkhau");
	if(taikhoan.value=="")
	{
		alert('Nhập tên tài khoản')
		taikhoan.focus()
		return false	
	}
	if(matkhau.value=="")
	{
		alert('Nhập mật khẩu')
		matkhau.focus()
		return false	
	}
	if(taikhoan.value.length < 2 || matkhau.value.length < 2)
	{
		alert('Tài khoản và mật khẩu phải lớn hơn 2 kí tự')
		taikhoan.focus()
		return false;	
	}
	// Ajax
	var xmlhttp=new XMLHttpRequest()
	// Gửi Yêu cầu về Server POST
	xmlhttp.open("POST","library/xldangnhap.php")
	xmlhttp.onreadystatechange=function()
	{
		if(xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			// Giá trị trả về từ Server
			var Du_lieu=xmlhttp.responseText;
			console.log(Du_lieu);
			document.getElementById("hienloi").innerHTML=Du_lieu;
			
		}
			
	}
	
	var data=new FormData();
	data.append("taikhoan",taikhoan.value);
	data.append("matkhau", matkhau.value);
	xmlhttp.send(data);
}