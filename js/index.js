$(document).ready(function(){
<<<<<<< HEAD
    
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
    
    
    // Owl carousel
    //$('.carousel').slick({
        // Hier komt de opmaak per viewport van de slick carousel
    //});
    
    /*$('.project-images-carousel').slick({
        
    });*/
    
    $(".hamburger-menu").on('click', function(){
        $(".hamburger-menu").toggleClass("open");
        checkhamburgermenu();
    });
    
    function checkhamburgermenu() {
        if($(".hamburger-menu").hasClass("open")) {
            $(".navigation").slideDown();
        } else {
            $(".navigation").slideUp();
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

    
    
=======

    alert('TEDx Mechelen');

>>>>>>> bd7179336cc21deae2faff6609b9dbd39ea12dae
});