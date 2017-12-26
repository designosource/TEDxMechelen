$(document).ready(function(){
    
    // scroll naar de div die in de link staat, indien deze naar dezelfde verwijst
    $(function() { 
        $('body a').click(function() {
            
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']'); 
                    if (target.length) {
                        $('html,body').animate({
                                scrollTop: (target.offset().top - 0) // 0 is het aantal pixels van de navigatiegrootte
                    }, 1000); return false;} 
            } 
        });
        
    });        
    
    
    $(window).on('resize', function(){
        // functies die moeten uitgevoerd worden op resize van de viewport
    });
    
    // Get current year and push it to the span with id year
    $("#year").html((new Date).getFullYear());
    
    
    /*$('.carousel').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: true,
    autoplaySpeed: 5000,
    infinite: true,
    dots: false});/*,
    responsive: [
    {
      breakpoint: 200,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 1000,
        infinite: true,
        dots: false
        }
    },
    {
      breakpoint: 300,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        autoplaySpeed: 1000,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 400,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplaySpeed: 2000,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplaySpeed: 2000,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
      ]
    });*/
    
    $(".hamburger-menu").on('click', function(){
        $(".hamburger-menu").toggleClass("open");
        checkhamburgermenu();
    });
    
    $(".dropdown").on('click', function(){
        $(this).toggleClass("dropped");
        checkdropdownmenu(this);
    });
    
    function checkhamburgermenu() {
        if($(".hamburger-menu").hasClass("open")) {
            $(".navigation").slideDown();
        } else {
            $(".navigation").slideUp();
        };
    }
    
    function checkdropdownmenu(e) {
        if($(e).hasClass("dropped")) {
            $(".drop").slideDown();
        } else {
            $(".drop").slideUp();
        };
    }

    
    function homebackground() {

        $offset = $('body').scrollTop();

        if( $(window).width() > 330 ) { // vanaf wanneer moet parallax actief zijn
            // Parallax background
            $("#home").css('background-position', 'center ' + 'calc(20% - ' + '35px - ' + Math.round($offset * 0.1 ) + 'px)');
        } else {
            // No parallax background
            $("#home").css('background-position', 'center top');
        }

    }

    $("body").scroll(function(){

        homebackground();

    });

    
    
});