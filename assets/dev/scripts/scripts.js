jQuery(document).ready(function ($) {

    /***
     * Mobile menu Behaviour
     * ***/
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

    /****
     * Send a comment functionality
     */
    var commentField = $("#comment");
    var commentAuthorField = $("p.comment-form-author");
    var commentEmailField = $("p.comment-form-email");
    var commentSubmitField = $("p.form-submit");
    commentField.click(function () {
        if (commentAuthorField.length !== 0) {
            $(".comment-notes").fadeIn();
            commentAuthorField[0].classList.add("comment-active-field");
            commentEmailField[0].classList.add("comment-active-field");
            commentAuthorField.fadeIn();
            commentEmailField.fadeIn();
        }
        commentSubmitField[0].classList.add("comment-active-field");
        commentSubmitField.fadeIn();


    });
    commentField.blur(function () {
        if (commentField.val() === "") {
            if (commentAuthorField.length !== 0) {
                commentAuthorField[0].classList.remove("comment-active-field");
                commentEmailField[0].classList.remove("comment-active-field");
                $(".comment-notes").fadeOut();
            }
            commentSubmitField[0].classList.remove("comment-active-field");
        }
    });
});
