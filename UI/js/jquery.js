$(function () {
    // ADDING DATA
    (function () {
        var inc = 0;
        $('.sc-sp-data-dis').each(function () {
            $(this).attr('data-scsp', "data" + inc)
            inc++;
        });
    })();
    (function () {
        var inc = 0;
        $('.sc-sp-list').each(function (ev) {
            $(this).attr('data-scsp', "data" + inc)
            inc++;
        });
    })();

    $(window).on("load scroll", function () {
        var windowScroll = $(this).scrollTop();
        $(".sc-sp-data-dis").each(function () {
            var thisOffsetTop = Math.round($(this).offset().top - 30);

            if (windowScroll >= thisOffsetTop) {
                var thisAttr = $(this).attr('data-scsp');
                $('.sc-sp-list').parent().removeClass("active");
                $('.sc-sp-list[data-scsp="' + thisAttr + '"]').parent().addClass("active");
            }
        });
    });

    $('.sc-sp-list').click(function (ev) {
        ev.preventDefault();
        var thisAttr = $(this).attr("data-scsp");
        var scrollTo = $('.sc-sp-data-dis[data-scsp="' + thisAttr + '"]').offset().top;

        $(this).parent().addClass("active").siblings().removeClass("active");

        $(".sc-sp-data-dis").removeClass("active");
        $('.sc-sp-data-dis[data-scsp="' + thisAttr + '"]').addClass("active");

        $('html, body').animate({
            scrollTop: scrollTo - 5
        }, 150);
    });



});
