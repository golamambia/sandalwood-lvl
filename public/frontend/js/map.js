
$(document).ready(function ($) {


    $('.name_country').hover(function(){
        $('.block-default').addClass('d-none-block');
        var country = $(this).data( 'country' );
        $('.describe-group-countries').each(function(){
            if ($(this).data('desc') == country){
                $(this).addClass('show');
            }else{
                $(this).removeClass('show');
            }
        });
    });

    $('.name_country').mouseout(function(){
        $('.describe-group-countries').removeClass('show');
        $('.block-default').removeClass('d-none-block');
    });




    tippy('.countries-holder-na', {
        animateFill: false,
        arrow: true,
        size: 'large',
        interactive: true,
        theme: 'map',
        animation: 'perspective',
        content: document.querySelector('#north-america'),
    });
    tippy('.countries-holder-ca', {
        animateFill: false,
        arrow: true,
        size: 'large',
        interactive: true,
        theme: 'map',
        animation: 'perspective',
        content: document.querySelector('#central-america'),
    });
    tippy('.countries-holder-sa', {
        animateFill: false,
        arrow: true,
        size: 'large',
        interactive: true,
        theme: 'map',
        animation: 'perspective',
        content: document.querySelector('#south-america'),
    });
    tippy('.countries-holder-af', {
        animateFill: false,
        arrow: true,
        size: 'large',
        interactive: true,
        theme: 'map-eu',
        //showOnInit: true,
        animation: 'perspective',
        content: document.querySelector('#africa'),
    });
    tippy('.countries-holder-mid-ea', {
        animateFill: false,
        arrow: true,
        size: 'large',
        interactive: true,
        theme: 'map-eu',
        //showOnInit: true,
        animation: 'perspective',
        content: document.querySelector('#middle-east'),
    });
    tippy('.countries-holder-aus', {
        animateFill: false,
        arrow: true,
        size: 'large',
        interactive: true,
        theme: 'map',
        //showOnInit: true,
        animation: 'perspective',
        content: document.querySelector('#australia'),
    });

    //-------map eu
    tippy('.countries-holder-eu', {
            animateFill: false,
            arrow: true,
            size: 'large',
            interactive: true,
            theme: 'map-eu',
        //showOnInit: true,
            animation: 'perspective',
            content: document.querySelector('#europe'),
    });
    tippy('.countries-holder-asi', {
            animateFill: false,
            arrow: true,
            size: 'large',
            interactive: true,
            theme: 'map-eu',
        //showOnInit: true,
            animation: 'perspective',
            content: document.querySelector('#asia'),
    });



    $('.countries-holder-na').mouseenter(function(){
        $('.north-america').css('opacity','1');
    }).mouseleave(function(){
        $('.north-america').css('opacity','0');
    });
    $('.countries-holder-ca').mouseenter(function(){
        $('.central-america').css('opacity','1');
    }).mouseleave(function(){
        $('.central-america').css('opacity','0');
    });
    $('.countries-holder-sa').mouseenter(function(){
        $('.south-america').css('opacity','1');
    }).mouseleave(function(){
        $('.south-america').css('opacity','0');
    });


    $('.countries-holder-eu').mouseenter(function(){
        $('.europe').css('opacity','1');
    }).mouseleave(function(){
        $('.europe').css('opacity','0');
    });

    $('.countries-holder-af').mouseenter(function(){
        $('.africa').css('opacity','1');
    }).mouseleave(function(){
        $('.africa').css('opacity','0');
    });

    $('.countries-holder-asi').mouseenter(function(){
        $('.asia').css('opacity','1');
    }).mouseleave(function(){
        $('.asia').css('opacity','0');
    });

    $('.countries-holder-aus').mouseenter(function(){
        $('.australia').css('opacity','1');
    }).mouseleave(function(){
        $('.australia').css('opacity','0');
    });

    $('.countries-holder-mid-ea').mouseenter(function(){
        $('.mid-east').css('opacity','1');
    }).mouseleave(function(){
        $('.mid-east').css('opacity','0');
    });



    if ($(window).width() > 1200 ){
        (function() {
            var lights = $(".pin-effect");
            var previousRandomLight = null;
            /*
            lights.mouseenter(function(){
                console.log('stop');
                $(this).removeClass('style');
            }).mouseleave(function(){
                repeatOften();
            });*/
            function repeatOften() {
                if (previousRandomLight) previousRandomLight.classList.toggle('pulse-animation');
                var random = Math.floor(Math.random() * lights.length) + 0;
                var randomLight = lights[random];
                randomLight.classList.toggle('pulse-animation');
                previousRandomLight = randomLight;
                setTimeout(repeatOften, 1800);
            }
            repeatOften();
        })();
    }


});