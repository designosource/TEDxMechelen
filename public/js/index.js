$(document).ready(function(){
    
    // scroll naar de div die in de link staat, indien deze naar dezelfde verwijst
    /*$(function() {
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
        
    });*/
    
    $('.carousel').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: true,
    autoplaySpeed: 5000,
    infinite: true,
    dots: true,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 800,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }

        // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
      ]
    });
    
    $(".hamburger-menu").on('click', function(){
        $(".hamburger-menu").toggleClass("open");
        checkhamburgermenu();
        navigation();
    });


    $('.dropdown').on('hover', function(e){
        $('.dropdown').toggleClass("dropped");

        if($('.dropdown').hasClass("dropped")) {
            $('.drop').slideDown();
        } else {
            $('.drop').slideUp();
        }

    });

    
    function checkhamburgermenu() {
        // breakpoint bereikt?

        // JA
        if (window.matchMedia('(min-width: 850px)').matches){


            // remove class 'open' from hamburger-menu
            if( $(".hamburger-menu").hasClass('open') ){
                
                // sluit hamburger menu
                $(".hamburger-menu").removeClass('open');
                
                // laat hamburger menu verdwijnen
                $(".hamburger-menu").css('display', 'none');
                
            }
            
            // maak van navigatie een flex element
            $('.navigation').css('display', 'flex');
            
        // NEE
        } else {

           /* alert('hi');
            $('#about').on('click', function(){

                $(this).toggleClass("dropped");

                if($(this).hasClass("dropped")) {
                    $('#aboutul.drop').slideDown();
                } else {
                    $('#aboutul.drop').slideUp();
                }
            });

            $('#event').on('click', function(){
                $(this).toggleClass("dropped");

                if($(this).hasClass("dropped")) {
                    $('#eventul.drop').slideDown();
                } else {
                    $('#eventul.drop').slideUp();
                }
            });*/


            // hamburger menu moet er staan!
            $(".hamburger-menu").css('display', 'block');
            
            // hamburger menu is geklikt
            if( $(".hamburger-menu").hasClass('open') ){
                
                // open navigatie
                $(".navigation").slideDown();
                
            } else {
                
                // sluit navigatie
                $(".navigation").slideUp();
                
            }
            
        }
    }
    
    function navigation() {
        // breakpoint bereikt?
        
        // JA
        if( $(window).width() > 850 ) {
            
            // verwijder open class van hamburger
            if($(".hamburger-menu").hasClass("open")) {
                $(".hamburger-menu").removeClass("open");
            }
        }
    }
    
});