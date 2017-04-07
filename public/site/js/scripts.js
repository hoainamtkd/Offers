$(function() {
	$('pre').on('click', function(event) {
		event.preventDefault();
		$(this).selText().addClass("selected");
	});

});
jQuery.fn.selText = function() {
    var obj = this[0];
    if ((/msie|trident/i).test(navigator.userAgent)) {
        var range = obj.offsetParent.createTextRange();
        range.moveToElementText(obj);
        range.select();
    } else if ((/opera|firefox/i).test(navigator.userAgent)) {
        var selection = obj.ownerDocument.defaultView.getSelection();
        var range = obj.ownerDocument.createRange();
        range.selectNodeContents(obj);
        selection.removeAllRanges();
        selection.addRange(range);
    } else if ((/chrome|safari/i).test(navigator.userAgent)) {
        var selection = obj.ownerDocument.defaultView.getSelection();
        selection.setBaseAndExtent(obj, 0, obj, 1);
    }
    return this;
}
    // Menu
    $('.main-nav__branding').hover(function(){
        $('.branding_menu').show();
        $('.main-nav__branding a i').removeAttr('class').addClass('fa fa-angle-up pull-right drop-down-cate');
    },function(){
        $('.branding_menu').hide();
        $('.main-nav__branding a i').removeAttr('class').addClass('fa fa-angle-down pull-right drop-down-cate');
    });
    $('.branding_menu li ').hover(function(){
        $(this).addClass('branding_active');
    },function(){
        $(this).removeAttr('class');
    });
    // End menu
    var width = $(window).width();
    if(width < 968 && width > 320){
        $('.my-group').attr('style','margin: 0px 10px 10px 0px;');
        $('.content-center').attr('style','padding-left:0px;');
    }else{
        $('.my-group').attr('style','margin:25px 0;');
        $('.content-center').attr('style','padding-left:15px;');
    }
    $(window).resize(function() {
        var width = $(window).width();
        if(width < 968 && width > 320){
            $('.my-group').attr('style','margin: 0px 10px 10px 0px;');
            $('.content-center').attr('style','padding-left:0px;');
        }else{
            $('.my-group').attr('style','margin:25px 0;');
            $('.content-center').attr('style','padding-left:15px;');
        }
    });

    // Count Timer Index
    $(document).ready(function(){
        $('.item').hover(function(){
            $(this).find($('.timer')).show();
            $(this).find($('.news-icon')).hide();
            $(this).find($('.btn_view')).show();
        },
        function(){
            $(this).find($('.timer')).hide();
            $(this).find($('.news-icon')).show();
            $(this).find($('.btn_view')).hide();
        });
    });
    var seconds = 172800;
    
    function timer() {
        var days        = Math.floor(seconds/24/60/60);
        var hoursLeft   = Math.floor((seconds) - (days*86400));
        var hours       = Math.floor(hoursLeft/3600);
        var minutesLeft = Math.floor((hoursLeft) - (hours*3600));
        var minutes     = Math.floor(minutesLeft/60);
        var remainingSeconds = seconds % 60;
        if (remainingSeconds < 10) {
            remainingSeconds = "0" + remainingSeconds; 
        }
        $('.timer').text("Còn" + " " + (days < 1 ? '' : days) + " " + "ngày" + " " + (hours < 10 ? 0+""+hours : hours) + ":" + minutes + ":" + remainingSeconds);
        if (seconds == 0) {
            clearInterval(countdownTimer);
            $('.timer').text("Finish!");
        } else {
            seconds--;
        }
    }
    var countdownTimer = setInterval('timer()', 1000);
    // End Count Timer Index

    // Fix header to top
    $(function(){
        var stickyHeaderTop = $('.menu-main').offset().top;
        $(window).scroll(function(){
            if($(window).scrollTop() > stickyHeaderTop){
                $('.menu-main').attr('style','position:fixed;top:0px;margin-top:0px;');
            }else{
                $('.menu-main').attr('style','position:static;top:0px;');
            }
        });
    });
    // End fix header to top