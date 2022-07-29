$(document).ready(function () {
    $('.burger-button').click(function () {
        $('.nav').toggleClass('wide');
    });

    function goToByScroll(id) {
        $('html,body').animate({scrollTop: $("#"+id).offset().top},'fast');
    }
    $('.go-top-button').click(function() {
        goToByScroll("header");
        return false;
    });// go to top button

    // animate.css

    jQuery('.fadeL').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInLeft',
        offset: 100
    });

    jQuery('.fadeR').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInRight',
        offset: 100
    });

    jQuery('.fadeU').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInUp',
        offset: 100
    });


    // Add class is-dark

    $('.colonna-gioco').hover(
        function(){ $(this).addClass('is-dark') },
        function(){ $(this).removeClass('is-dark') }
    );


    // Game Boy Animation

    var once = false;
    $(document).on(
        "keydown keyup",
        function( e )
        {
            $('.tooltip').fadeOut();
            //Ooo lets make the screen work too :P
            if(!once){
                $('.display .light').addClass('on');
                $('.screen').one().addClass('flash').delay(300).queue(function(next){
                    $(this).removeClass('flash').delay(300).find('svg').fadeIn();
                    once = true;
                    next();
                });
            }
            var classAction = e.type === "keydown"  ? $.fn.addClass : $.fn.removeClass;
            switch(e.which) {
                case 37: // left
                    classAction.call( $('.left'), 'button-press');
                    break;

                case 38: // up
                    classAction.call( $('.up'), 'button-press');
                    break;

                case 39: // right
                    classAction.call( $('.right'), 'button-press');
                    break;

                case 40: // down
                    classAction.call( $('.down'), 'button-press');
                    break;

                case 65: //a
                    classAction.call( $('.a-button'), 'button-press');
                    break;

                case 66: //b
                    classAction.call( $('.b-button'), 'button-press');
                    break;

                case 16: //select (shift)
                    classAction.call( $('.select'), 'button-press');
                    break;

                case 13: //start (enter)
                    classAction.call( $('.start'), 'button-press');
                    break;

                default: return; // exit this handler for other keys
            }
            e.preventDefault(); // prevent the default action (scroll / move caret)
        }
    );


});

