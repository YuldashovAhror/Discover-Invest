"use strict";
var preloader    = $('.preloader'),
    imagesCount  = $('img').length,
    dBody        = $('body'),
    percent      = 100 / imagesCount,
    progress     = 0,
    imgSum       = $('img').length,
    loadedImg    = 0;


for (var i = 0; i < imagesCount; i++) {
    var img_copy        = new Image();
    img_copy.src        = document.images[i].src;
    img_copy.onload     = img_load;
    img_copy.onerror    = img_load;
}

function img_load () {
    progress += percent;
    loadedImg++;
    if (progress >= 100 || loadedImg == imagesCount) {

        setTimeout(function () {
            preloader.delay(500).fadeOut('slow');
        }, 800)
        dBody.css('overflow', '');

    }
}



$(window).on('load', function () {

    $('button.mnu').click((event)=>{
        event.preventDefault();
        $('.menu').slideToggle();
        $('.header').addClass('header__dark')
    })

    $('.callback, .popup__btn').click( (event)=> {
        event.preventDefault();
        $('.popup__back').slideDown('200')
        setTimeout(()=> {
            $('.popup').fadeIn('200');
        }, 250)
    })
    $('.popup__close').click(()=> {
        $('.popup').fadeOut('200');
        setTimeout(()=> {
            $('.popup__back').slideUp('200');
        }, 250)
    })


    //______ADVANTAGES_________

    if(!('ontouchstart' in window)) {

        $(document).on('mousemove touch', function(e){
            $('.pic__anima').each(function() {
                magnetize(this, e);
            });
        });

        function magnetize(el, e){
            let mX = e.pageX,
                mY = e.pageY;
            const item = $(el);

            const customDist = item.data('dist') * 20 || 400;
            const centerX = item.offset().left + (item.width()/2);
            const centerY = item.offset().top + (item.height()/2);

            let deltaX = Math.floor((centerX - mX)) * -0.25;
            let deltaY = Math.floor((centerY - mY)) * -0.25;

            let distance = calculateDistance(item, mX, mY);

            if(distance < customDist){
                TweenMax.to(item, 0.5, {y: deltaY, x: deltaX});
                item.addClass('magnet');
            }
            else {
                TweenMax.to(item, 0.6, {y: 0, x: 0});
                item.removeClass('magnet');
            }
        }

        function calculateDistance(elem, mouseX, mouseY) {
            return Math.floor(Math.sqrt(Math.pow(mouseX - (elem.offset().left+(elem.width()/2)), 2) + Math.pow(mouseY - (elem.offset().top+(elem.height()/2)), 2)));
        }
    }

    AOS.init({
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 120, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 400, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: false, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });

});
