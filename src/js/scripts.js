$(document).ready(function(){

    $('#menu-icon').on('click', function(){
        $('#navbar-menu').removeClass('closed').addClass('open');
    });

    $('#close-navbar-menu-button').on('click', function(){
        $('#navbar-menu').removeClass('open').addClass('closed');
    });

    $('#language-icon').on('click', function(){
        $(this).css({
            'opacity' : '0'
        });
        $('#navbar-language').removeClass('language-closed').addClass('language-open');
    });

    $('#close-navbar-language-button').on('click', function(){
        $('#navbar-language').removeClass('language-open').addClass('language-closed');
        $('#language-icon').css({
            'opacity' : '1'
        })
    });



    if ($('#menu-icon')) {

        $(window).scroll(function() {
            var wScroll = $(this).scrollTop();

            if (wScroll > 200){
                $('#menu-background').css({
                    'background-color' : 'rgba(255,255,255,.8)'
                });
                $('#language-icon').css({
                    'right' : '-100px'
                });


            } else {
                $('#menu-background').css({
                    'background-color' : 'transparent'
                });
                $('#language-icon').css({
                    'right' : '0'
                });
            }
        });

    }

    $("#portfolio-header .header-button").click(function() {
        $('html, body').animate({
            scrollTop: $("#arqal-case-study").offset().top
        }, 1000);
    });

    $("#contacts-header .header-button").click(function() {
        $('html, body').animate({
            scrollTop: $(".contact-form-section").offset().top
        }, 1000);
    });




});

