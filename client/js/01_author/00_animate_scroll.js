/***************************
         *  SCROLL MAGIC ANIMATION *
         ***************************/
       
                // create a new scroll magic controller instances ...

            var controller = new ScrollMagic.Controller();

                // create a new scroll scene magic instances ...

                // about left side...
            var ourSceneleft = new ScrollMagic
                                .Scene({
                                        triggerElement:'#about',

                                })
                                .setClassToggle('#aboutLeft' , 'zoomInRight')
                                .addTo(controller);


                // about right side ...
             var ourSceneRight = new ScrollMagic
                                .Scene({
                                        triggerElement:'#about',

                                })
                                .setClassToggle('#aboutRight' , 'zoomInLeft')
                                .addTo(controller);
                                
                // footer social ....
