jQuery(document).ready(function ($) {
    var hamburger = $(".hamburger");
    var mobileMenuWrap = $(".mobile-menu-wrap");

    hamburger.click(function (e) {
        if (mobileMenuWrap.hasClass('inactive')) {
            mobileMenuWrap.removeClass('inactive');
            mobileMenuWrap.addClass('active');

        } else {
            mobileMenuWrap.removeClass('active');
            mobileMenuWrap.addClass('inactive');
        }
    });
});