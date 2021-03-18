$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('.uk-sticky').addClass('solid');
        } else {
            $('.uk-sticky').removeClass('solid');
        }
    });
});