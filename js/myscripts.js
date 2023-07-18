$(document).ready(function() {
	
	$(".hopqua").click(function() {
		$(".thanhvien").toggleClass('active');
		$(this).toggleClass('active');
	});	

	$(".nut-tat").click(function(){
		$(".hopqua").toggleClass('active');
		$(".thanhvien").toggleClass('active');
	});
	
	$(".tai-game").click(function(){
		$(".nendownload").toggleClass('active');
		$(".download").toggleClass('active');
		$(".nuttatnen-download").toggleClass('active');
	});
	
	$(".nendownload").click(function(){
		$(this).toggleClass('active');
		$(".download").toggleClass('active');
		$(".nuttatnen-download").toggleClass('active');
	});
	
	$(".nuttatnen-download").click(function(){
		$(this).toggleClass('active');
		$(".download").toggleClass('active');
		$(".nendownload").toggleClass('active');
	});
	
	$(".nuttatqc").click(function(){
		$(this).toggleClass('active');
		$(".hinhquangcao").toggleClass('active');
		$(".hinhquangcao2").toggleClass('active');
	});
	
	mainImg = document.getElementById("my_image");
	nenden1 = document.getElementById("nenden1");
	hinh1Src = document.getElementById("hinh1").src;

	nenden2 = document.getElementById("nenden2");
	hinh2Src = document.getElementById("hinh2").src;

	nenden3 = document.getElementById("nenden3");
	hinh3Src = document.getElementById("hinh3").src;

	$("#nenden1").click(function(){
		mainImg.src = hinh1Src;
		$(".phongtohinh").toggleClass('active');
	});

	$("#nenden2").click(function(){
		mainImg.src = hinh2Src;
		$(".phongtohinh").toggleClass('active');
	});

	$("#nenden3").click(function(){
		mainImg.src = hinh3Src;
		$(".phongtohinh").toggleClass('active');
	});

	$(".tpt-1").click(function(){
		$(".pt-1").toggleClass('active');

	});
	
	
});