$('.tab-link').click(function() {
    $('#menu li a').each(function() {
        $(this).removeClass('active');
    });

    $('.tab').each(function() {
        $(this).hide();
    });

    $(this).addClass('active');
    var tab = $(this).attr('title');

    if (tab === 'portfolio') {
        $('#portfolio-link').addClass('active');
        $('#page-title').text('Developer')
        $('#portfolio').show();
    } else if (tab === 'music') {
        $('#music-link').addClass('active');
        $('#page-title').text('Artist');
        $('#music').show();
    } else if (tab === 'contact') {
        $('#contact-link').addClass('active');
        $('#page-title').text('Contact');
        $('#contact').show();
    } else {
        $('#about-link').addClass('active');
        $('#page-title').text('Me');
        $('#about').show();
    }

})


console.log($('#page-title').text());