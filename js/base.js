$(document).ready(function() {
    // Gets anchor from URL -> #versions or #manage or #statistics
    // used to set the correct div as visible when the page is reloaded
    // So when a user refreshes the page, it will keep them at the same place within the manage page
    var anchor = window.location.href.substring(window.location.href.indexOf("#") + 1);
    if (anchor === "music") {
        $('.music-link').click();
    } else if (anchor === "portfolio") {
        $('.portfolio-link').click();
    } else if (anchor === "contact") {
        $('.contact-link').click();
    } else {
        $('.link-about').click();
    }
});


$('.tab-link').click(function() {
    var active = $(this);
    $('#menu li a').each(function() {
        $(this).removeClass('active');
    });

    $('.tab').each(function() {
        $(this).hide();
    });

    active.addClass('active');
    var tab = active.attr('title');

    if (tab === 'portfolio') {
        $('#portfolio-link').addClass('active');
        $('#page-title').text('Developer')
        $('#tab-portfolio').show();
    } else if (tab === 'music') {
        $('#music-link').addClass('active');
        $('#page-title').text('Artist');
        $('#tab-music').show();
    } else if (tab === 'contact') {
        $('#contact-link').addClass('active');
        $('#page-title').text('Contact');
        $('#tab-contact').show();
    } else {
        $('#about-link').addClass('active');
        $('#page-title').text('Me');
        $('#tab-about').show();
    }

});