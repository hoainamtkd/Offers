$(document).ready(function() {
	var width = $(window).width();
	if(width > 320 && width < 968 ){
		$('.header-relative').attr('style','margin-right:-40px;');
	}else{
		$('.header-relative').attr('style','margin-right:0px;');
	}
	$(window).resize(function(){
		var width = $(window).width();

		if(width > 320 && width < 968 ){
			$('.header-relative').attr('style','margin-right:-40px;');
		}else{
			$('.header-relative').attr('style','margin-right:0px;');
		}
		console.log(width);
	});
});