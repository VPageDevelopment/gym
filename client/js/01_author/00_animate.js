
    
    $(function(){

        //  header icon
        $('.animate').mouseover(function(){

            $(this).children().transition('tada');

        });

        // about us icon
        $('.circular.yellow.users.icon').mouseover(function(){

             $(this).transition('bounce');
        });

    });