<?php 
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <!-- 00 normalize css -->
    <link rel="stylesheet" href="client/css/00_lib/00_normalize/normalize.css">
    <!-- 01 semantic css -->
    <link rel="stylesheet" href="client/css/00_lib/01_semantic/semantic.css">
    <!-- 02 swiper css -->
    <link rel="stylesheet" href="client/css/00_lib/02_swiper/swiper.min.css">
    <!-- 02 reset some defult swiper css -->
    <link rel="stylesheet" href="client/css/00_lib/02_swiper/reset.swiper.css">

    <!--03 animate css -->
    <link rel="stylesheet" href="client/css/00_lib/03_animate/animate.css">




    <!-- nth author css -->
      <link rel="stylesheet" href="client/css/style.css">
  
</head>
<body>
    <!-- include the header content ... -->
    <?php include('php_includes/header.php') ; ?>


    <!-- carousel section -->
    <section id="carousel">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
             
                <div class="swiper-slide" >

                    <img  src="client/images/13.jpg">
                </div>
                <div class="swiper-slide" >

                    <img  src="client/images/14.jpg">
                </div>
               
                
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
   
        </div>
    </section>
        <!-- #/ carousel -->


    <!-- intro -->
    <section id="about" >

        <div class="ui container">
            <div class="ui stackable two column grid  padded">

                         <div class="column animated" id="aboutLeft">
                           <h2 class="ui center aligned teal icon header">
                                <i class=" teal  pied piper alternate icon"></i>
                                    Quick Intro to Gymnastics
                           </h2>

                           <p>
                               	Gymnastics is a sport, in which athletes (called gymnasts), perform acrobatic feats -- leaps, flips, turns, handstands, and more -- on a piece of apparatus, such as a balance beam, or with a piece of apparatus, like a rope or ribbon.
                           </p>

                          
                               
                           
                        </div>
                            <!--./column intro 1 content -->
                        <div class="column animated" id="aboutRight">
                                <div class="ui image">
                                    <img src="client/images/intro0.png" alt="">
                                </div>
                        </div>
                             <!--./column intro 1 content -->


                        

                       
          
            </div> 
        </div>
        <!-- ./ ui container-->

    </section>
        <!-- #/ intro -->

    <section id="intro2-heading">
        <div class="ui container">
            <div class="ui row centered grid">
                <h2 class="ui header yellow">Type of Gymnastics</h2>
            </div>
        </div>
    </section>
        <!-- #/ intro2-heading -->

    <section id="intro2">
        <div class="ui container">
                <div class="ui stackable two column grid  padded">

              
                        <div class="column animated">
                                <div class="ui image">
                                    <img src="client/images/intro2.png"  class="image" alt="">
                                </div>
                        </div>
                             <!--./column intro 1 content -->
                        
                        <div class="column animated">
                          

                           <p>
                               	Artistic gymnastics is the most commonly known type. Men and women both compete, on equipment like the uneven bars, parallel bars, and rings.
                           </p>
                           <p>
                               Rhythmic gymnastics is probably the second best-known. In rhythmic, gymnasts all compete on the same floor mat, but use ribbons, ropes, hoops, and other equipment as part of their routines. 
                           </p>
                           <p>
                               Trampoline was named an Olympic discipline of gymnastics for the 2000 Olympics. Gymnasts perform routines on a trampoline, completing flips on every single bounce.  
                               Other types of gymnastics tumbling, acrobatic gymnastics, and group gymnastics.
                           </p>
                        </div>
                            <!--./column intro 1 content -->
            </div>
        </div>
    </section>
        <!-- #/intro2 -->


    <section id="intro3-heading">
        <div class="ui container">
            <div class="ui row centered grid">
                <h2 class="ui header teal">Biggest Gymnastic Compitition</h2>
            </div>
        </div>
    </section>
        <!-- #/ intro2-heading -->

      <section id="intro3">
        <div class="ui container">
                <div class="ui stackable two column grid  padded">
                        <div class="column animated">
                           <h2 class="ui center aligned icon header">
                                <i class="circular    trophy icon"></i>
                           </h2>

                           <p>
                                The Olympics is the ultimate gymnastics meet, and many young gymnasts set their sights on making the Olympic gymnastics team.
                                World Championships are the second biggest competition in gymnastics, and in recent years have been held every non-Olympic year
                                Other major competitions include the European Championships, the Asian Games, the Pan American Games, and World Cup meets.

                           </p>
                        </div>
                        <!--./column intro 1 content -->
                        <div class="column animated">
                                <div class="ui image">
                                    <img src="client/images/intro3.png" alt="">
                                </div>
                        </div>
                        <!--./column intro 1 content -->
            </div>
        </div>
    </section>
        <!-- #/intro2 -->

    




    <!-- importing the contact section -->
    <?php include('php_includes/contact_section.php') ?>


    <!-- importing the contact section -->
    <?php include('php_includes/news.php') ?>
    
       
    <!-- include footer component  here .. -->
    <?php include('php_includes/footer.php');?>



    <!-- 00_lib script  -->

    <!-- 00 jquery -->
    <script src="client/js/00_lib/00_jquery/jquery-3.1.1.min.js"></script>
    <!-- 01 semantic -->
    <script src="client/js/00_lib/01_semantic/semantic.js"></script>
    <!-- 02 swiper  -->
    <script src="client/js/00_lib/02_swiper/swiper.min.js"></script>

    <!--03  01 scroll magic -->
    <script src="client/js/00_lib/03_scrollMagic/ScrollMagic.js"></script>


    

    <!-- author config and custom script file -->

    <!-- author 00_header -->
    <script src="client/js/01_author/00_animate.js"></script>

    <!-- author 00_header -->
    <script src="client/js/01_author/00_animate_scroll.js"></script>

    <!-- author 01_swiper -->
    <script src="client/js/01_author/01_swiper.js"></script>


    <!-- author 03 sideNav -->
    <script src="client/js/01_author/03_sideNav.js"></script>


    <!-- author 02_about -->
    <script>

        $(function(){
            $('.ui.embed').embed();

            $('.openSidebar').sidebar('toggle');
                 });
    </script>


   


</body>
</html>