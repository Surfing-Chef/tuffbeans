$(document).ready(function() {

    var $window = $(window);
    var navCont = $('.main-navigation.home');
    var navObj = $('.menu-main-nav-container');
    var sectionHeaderLinks = $('.front-page-menu-link');

    $window.scroll(function() {
        var yPos = $window.scrollTop();
        var check = 455;

        if (navObj.height() < 100) {
            check = check;
        } else {
            check = check - navObj.height() / 5;
        }

        var htHeader = check - navCont.height();

        if (yPos >= htHeader) {
            navObj.addClass('top-nav-shade');
            navCont.addClass('top-nav-docked');
            sectionHeaderLinks.css("margin-top", "56px");
        } else {
            navObj.removeClass('top-nav-shade');
            navCont.removeClass('top-nav-docked');
            sectionHeaderLinks.css("margin-top", "0px");
        }

    });
});