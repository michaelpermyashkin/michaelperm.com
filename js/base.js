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
    } else if (anchor === "blog") {
        $('.blog-link').click();
    } else {
        $('.link-about').click();
    }
});


$('.tab-link').click(function() {
    var active = $(this);
    $('#menu li a').each(function() {
        $(this).removeClass('active');
        if ($(this).attr('title') === active.attr('title')) {
            $(this).addClass('active');
        }
    });

    $('.tab').each(function() {
        $(this).hide();
    });

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
    } else if (tab === 'blog') {
        $('#blog-link').addClass('active');
        $('#page-title').text('Blogger');
        $('#tab-blog').show();
    } else {
        $('#about-link').addClass('active');
        $('#page-title').text('Me');
        $('#tab-about').show();
    }
});

$('.blog-search').keyup(function() {
    var query = $(this).val().toLowerCase();
    $('.blog-entry').each(function() {
        var title = $(this).find('.title a').text().toLowerCase();
        console.log(`${query} : ${title} `)
        if (!title.includes(query)) {
            console.log('HIDE')
            $(this).hide();
        } else {
            $(this).show();
        }
    })
})

$('#tab-contact .card-footer a')
    .mouseover(function() {
        var title = $(this).attr('title');
        $('#hover-card-name').text(title);
    })
    .mouseleave(function() {
        $('#hover-card-name').text('');
    })

$(function() {
    $('[data-toggle="tooltip"]').tooltip()
})