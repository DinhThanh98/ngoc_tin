
$(document).ready(function () {
    var width_slide_single = $('.images-banner-home');
    var ratio_slide_single = 3.07258064516;

    function resize_img(freme, int) {
        var width_iframe = $(freme).width();
        $(window).resize(function () {
            var height_iframe = width_iframe / int;
            $(freme).css({
                'height': height_iframe,
            });
        }).resize();
    }

    // resize_img(width_iframe, ratio);
    resize_img(width_slide_single, ratio_slide_single);
});
$(document).ready(function () {
    var width_slide_single = $('.img-new-small');
    var ratio_slide_single = 1.5641025641;

    function resize_img(freme, int) {
        var width_iframe = $(freme).width();
        $(window).resize(function () {
            var height_iframe = width_iframe / int;
            $(freme).css({
                'height': height_iframe,
            });
        }).resize();
    }

    // resize_img(width_iframe, ratio);
    resize_img(width_slide_single, ratio_slide_single);
});
//banner 570
$(document).ready(function () {
    var width_slide_single = $('.banner570');
    var ratio_slide_single = 3.34210526316;

    function resize_img(freme, int) {
        var width_iframe = $(freme).width();
        $(window).resize(function () {
            var height_iframe = width_iframe / int;
            $(freme).css({
                'height': height_iframe,
            });
        }).resize();
    }

    // resize_img(width_iframe, ratio);
    resize_img(width_slide_single, ratio_slide_single);
});

//banner 450
$(document).ready(function () {
    var width_slide_single = $('.banner450');
    var ratio_slide_single = 4.23333333333;

    function resize_img(freme, int) {
        var width_iframe = $(freme).width();
        $(window).resize(function () {
            var height_iframe = width_iframe / int;
            $(freme).css({
                'height': height_iframe,
            });
        }).resize();
    }

    // resize_img(width_iframe, ratio);
    resize_img(width_slide_single, ratio_slide_single);
});

$(document).ready(function () {
    var width_slide_single = $('.img-big');
    var ratio_slide_single = 1.59756097561;

    function resize_img(freme, int) {
        var width_iframe = $(freme).width();
        $(window).resize(function () {
            var height_iframe = width_iframe / int;
            $(freme).css({
                'height': height_iframe,
            });
        }).resize();
    }

    // resize_img(width_iframe, ratio);
    resize_img(width_slide_single, ratio_slide_single);
});

//img item-new
$(document).ready(function () {
    var width_slide_single = $('.img-new-item');
    var ratio_slide_single = 1.51282051282;

    function resize_img(freme, int) {
        var width_iframe = $(freme).width();
        $(window).resize(function () {
            var height_iframe = width_iframe / int;
            $(freme).css({
                'height': height_iframe,
            });
        }).resize();
    }

    // resize_img(width_iframe, ratio);
    resize_img(width_slide_single, ratio_slide_single);
});


// banner giatricotloi
$(document).ready(function () {
    var width_slide_single = $('.banner-value');
    var ratio_slide_single = 2.29518072289;

    function resize_img(freme, int) {
        var width_iframe = $(freme).width();
        $(window).resize(function () {
            var height_iframe = width_iframe / int;
            $(freme).css({
                'height': height_iframe,
            });
        }).resize();
    }

    // resize_img(width_iframe, ratio);
    resize_img(width_slide_single, ratio_slide_single);
});


$(document).ready(function () {
    $("button.button1").click(function () {
        $(".bg1").css("left", "50%");
        $(".bg1").css("right", "unset");
        $(".textw2").css("display", "none");
        $(".textw1").css("display", "block");
        $(".bg1").css("transition", "0.5s ");
    });

    $("button.button2").click(function () {
        $(".bg1").css("right", "50%");
        $(".bg1").css("left", "unset");
        $(".textw1").css("display", "none");
        $(".textw2").css("display", "block");
        $(".bg1").css("transition", "0.5s ");
    });

});