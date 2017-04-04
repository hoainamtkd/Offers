$("div.alert").delay(3000).slideUp();
var d = new Date();
$('.date_current').val(((d.getMonth() + 1) < 10 ? 0 +""+ (d.getMonth() + 1) :(d.getMonth() + 1) )+"/"+(d.getDate() < 10 ? 0+""+d.getDate() : d.getDate()) +"/"+(d.getFullYear()));