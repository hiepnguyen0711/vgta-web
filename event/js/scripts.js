// JavaScript Document
$(document).ready(function(e) {
    $("#button").click(function(){
		
		$(".header").css({
				'visibility': 'visible', 'margin-left': '0px', 'transition': 'all .5s ease'
				});
	});
	$(".nut_tat").click(function(){
		$(".header").css({
				'visibility': 'hidden', 'margin-left': '-700px', 'transition': 'all .5s ease'
				});
	});
	$(window).resize(function(event) {
		if($(window).width() > 1029)
		{ // fix from 768px > PC
			$(".header").removeAttr("style");
		}
	});
	
});

function tatdangnhap(){
	$(".form_dangnhap").css({'visibility':'hidden', 'top': '0px', 'transition':'all .5s ease' });
	$(".form_dangnhap .dangnhap").css({'top':'0%', 'transition':'all .5s ease'});

}
function tatdangnhap2(){
	$(".form_dangnhap").css({'visibility':'hidden', 'top': '0px', 'transition':'all .5s ease' });
	$(".form_dangnhap .dangnhap").css({'top':'0%', 'transition':'all .5s ease'});
	window.location = 'https://vanhiepjp.com/vgta/event/event.php';
}

function hienbangdangnhap()
{
	$(".form_dangnhap").css({'visibility':'visible'});
	$(".form_dangnhap .dangnhap").css({'top':'50%', 'transition':'all .5s ease'});
	
}

function xlnhanqua()
{
	var x = confirm('Nhận quà Golden Week VGTA SAMP, quà sẽ được chuyển vào game ngay');
	if(x)
	{
		window.location = "library/xlnhanquahangngay.php";
	}
	else{
		return false;
	}
}