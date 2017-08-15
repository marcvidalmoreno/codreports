
$(document).ready(function() {
    // onClick Event on Navigation links handled to toggle active class
    $('.navbar-fixed-top li').click(function(){
        var userClicksInNonActivePage = ($(this).hasClass('active') === false);
        if (userClicksInNonActivePage) {
            // We remove active class in current page and add it in clicked page
            $('.navbar-fixed-top li.active').removeClass('active');
            $(this).addClass('active');
        }
    });
});