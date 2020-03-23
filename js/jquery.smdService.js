$(function () {

    $(window).bind("scroll", function () {
        var s_top = $(window).scrollTop();
        var view_height = document.documentElement.clientHeight || document.body.clientHeight;
        var best_location = view_height-60;
        var h = s_top + best_location + "px";
        //if (s_top < view_height) { $("#hhService").hide(); } else { $("#hhService").show(); }
        $("#hhService").animate({ top: h }, { duration: 1000, queue: false });
    });

    $(".backToHead").click(function () {
	var nowp=$("#p").val();
	nowp++;
	$("#waitbackbg").css("display","block");
	location.href="list.php?task=carrun&p="+nowp+"&status=" + $("input[name=status]:checked").val();
        //$("html, body").animate({ scrollTop: 0 }, 'slow');
    })
});