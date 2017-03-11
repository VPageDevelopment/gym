
    
    $(function(){

        //  header icon
        $('.animate').mouseover(function(){

            $(this).children().transition('tada');

        });

        // about us icon
        $('.circular.teal.users.icon').mouseover(function(){

             $(this).transition('bounce');
        });


        // animate-contact

        $('.animate-contact').mouseover(function(){

             $(this)
                .transition('swing left')
                .transition('swing right');
        });

    });