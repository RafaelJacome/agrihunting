
$(document).ready( function() {

    $(".addCite").click( function() {
        if(!$('.form_servicios').hasClass('open')) {
            $('.form_servicios').slideDown('slow').addClass('open');
            $(".addCite i").removeClass('fa-plus').addClass('fa-minus');
        } else {
            $('.form_servicios').slideUp('slow').removeClass('open');
            $(".addCite i").removeClass('fa-minus').addClass('fa-plus');
        }
    });

    if($(".slider").length)
        $(".slider").slick({
            autoplay: true,
            speedAutoplay: 3000,
            arrows: false,
            fade: true,
            adaptiveHeight: true
        });

    if($(".marcas").length)
        $(".marcas").slick({
            autoplay: true,
            speedAutoplay: 3000,
            arrows: false,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
                },
                {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
                },
                {
                breakpoint: 650,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
            ]
        });

    $(".circle-icon.next").on("click", function(event){
        event.preventDefault();
        $(".marcas").slick('slickNext');
    });

    $(".circle-icon.prev").on("click", function(event){
        event.preventDefault();
        $(".marcas").slick('slickPrev');
    });

    $(".icon.next").on("click", function(event){
        event.preventDefault();
        $(".slider").slick('slickNext');
    });

    $(".icon.prev").on("click", function(event){
        event.preventDefault();
        $(".slider").slick('slickPrev');
    });


    var keys = { 37: 1, 38: 1, 39: 1, 40: 1 };
var menu = document.getElementById('aside-menu');
var isOpen = false;
var header = document.getElementsByTagName('header');
var main = document.getElementsByTagName('main');
var footer = document.getElementsByTagName('footer');
var body = document.getElementsByTagName('body');
var btnNav = document.getElementById('nav-icon4');
var theContent = document.getElementsByClassName('content');

menu.style.top = header[0].offsetHeight+"px";

var preventDefault = function preventDefault(e) {
    e = e || theContent[0].event;
    if (e.preventDefault) e.preventDefault();
    e.returnValue = false;
};

var preventDefaultForScrollKeys = function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
};

var disableScroll = function disableScroll() {
    if (theContent.addEventListener) // older FF
        theContent.addEventListener('DOMMouseScroll', preventDefault(), false);
    theContent.onwheel = preventDefault; // modern standard
    theContent.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
    theContent.ontouchmove = preventDefault; // mobile
    theContent.onkeydown = preventDefaultForScrollKeys;

    if (menu.removeEventListener) menu.removeEventListener('DOMMouseScroll', event.preventDefault(), false);
    menu.onmousewheel = menu.onmousewheel = null;
    menu.onwheel = null;
    menu.ontouchmove = null;
};

var enableScroll = function enableScroll() {
    if (theContent.removeEventListener) theContent.removeEventListener('DOMMouseScroll', preventDefault, false);
    theContent.onmousewheel = document.onmousewheel = null;
    theContent.onwheel = null;
    theContent.ontouchmove = null;
    document.onkeydown = null;
};



(function() {
    var initEvents = function () {

        if( btnNav )
            btnNav.addEventListener('click', toggleMenu);

        if( main[0] ) 
        main[0].addEventListener('click', function () {
            if (isOpen) {
                toggleMenu();
            }
        });

        if( footer[0] ) 
        footer[0].addEventListener('click', function () {
            if (isOpen) {
                toggleMenu();
            }
        });

        window.addEventListener("resize", function(){
            hideMenu();
            menu.style.top = header[0].offsetHeight+"px";
        });
        
    };

    //hide aside menu
    var hideMenu = function hideMenu() {
        menu.className = 'aside-menu';
        body[0].className = '';
        btnNav.className = '';
        isOpen = false;
        header[0].className = "fixed";
        enableScroll();
    };
    //show aside menu
    var showMenu = function showMenu() {
        menu.className = 'aside-menu open';
        body[0].className = 'menu-open';
        btnNav.className = "open";
        isOpen = true;
        header[0].className = "fixed show";
        disableScroll();
    };

    var toggleMenu = function toggleMenu() {
        event.preventDefault();
        if (isOpen) hideMenu(); else showMenu();
    };

    initEvents();
})();


});