$(document).on('click','.btn_filter_search',function() {
	$('.filter_search').show();
	var d = new Date();
	var fullDateCurrent = ( d.getDate()< 10 ? 0+''+d.getDate() : d.getDate()) +"/"+ ((d.getMonth() + 1)< 10 ? 0+''+(d.getMonth() + 1) : (d.getMonth() + 1)) + "/" + d.getFullYear();
	var fullLastMonth = ( d.getDate()< 10 ? 0+''+d.getDate() : d.getDate()) +"/"+ ((d.getMonth())< 10 ? 0+''+(d.getMonth()) : (d.getMonth())) + "/" + d.getFullYear();
	$('#date_last_month').val(fullDateCurrent);
	$('#date_from_search').val(fullLastMonth);
});
$(document).on('click','.btn_close_search',function(){
	$('.filter_search').hide();
});
