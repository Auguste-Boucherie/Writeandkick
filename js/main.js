$(document).ready(function () {

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 400) {
        $(".bannersticky").removeClass("sticky2");
        $(".bannersticky").addClass("sticky");
    } else {
        $(".bannersticky").addClass("sticky2");
        $(".bannersticky").removeClass("sticky");
    }
});

    $("#loadMore").click(function(){
        $(".more").slideToggle("fast");
        setTimeout(function(){
            $("html, body").animate({scrollTop: $(document).height()}, 700);
        return false;
        }, 100);
    });

    $(".icoscrool").click(function() {
        $('html, body').animate({
            scrollTop: $(".icoscrool").offset().top
        }, 700);
    });

    $(".read").click(function() {
        $(".popup").addClass("popupactiv");
    });

    $(".popup").click(function() {
        $(".popup").removeClass("popupactiv");
    });
});