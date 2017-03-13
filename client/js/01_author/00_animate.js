
    
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



        /***************************
         *  SCROLL MAGIC ANIMATION *
         ***************************/
       
                // create a new scroll magic controller instances ...

            var controller = new ScrollMagic.Controller();

                // create a new scroll scene magic instances ...

                // about left side...
            var ourScene = new ScrollMagic
                                .Scene({
                                        triggerElement:'#about',

                                })
                                .setClassToggle('#aboutLeft' , 'zoomInRight')
                                .addTo(controller);


                // about right side ...
             var ourScene = new ScrollMagic
                                .Scene({
                                        triggerElement:'#about',
                                        duration: 2000,

                                })
                                .setClassToggle('#aboutRight' , 'zoomInLeft')
                                .addTo(controller);
                                
                // footer social ....


    });