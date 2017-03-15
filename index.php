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


    <!-- About us -->
    <section id="about" >
        <div class="ui container">
            <div class="ui stackable two column grid  padded">

                         <div class="column animated" id="aboutLeft">
                           <h2 class="ui center aligned teal icon header">
                                <i class="circular teal  users icon"></i>
                                About Us
                           </h2>

                           <p class="">
                               We offer a play-based emergent curriculum complete with low teacher to child ratios. Come see our environment and how it is designed to promote exploration, adventure and imaginative play. We believe that children are active participants in their own learning. That’s why we encourage them to ask questions and explore the world around them.
                           </p>

                          
                                <a class="huge ui animated yellow button button-rounder" href="#" tabindex="0">
                                    <div class="visible content">View More</div>
                                    <div class="hidden content">
                                        <i class="right arrow icon"></i>
                                    </div>
                                </a>
                           
                        </div>
                            <!--./column about content -->
                        <div class="column animated" id="aboutRight">
                                <div class="ui embed" data-url="https://www.youtube.com/embed/O6Xo21L0ybE" data-placeholder="http://bit.ly/2ncWFyp"></div>
                        </div>
                             <!--./column about youtube video content -->

                       
          
            </div> 
        </div>
        <!-- ./ ui container-->

    </section>
        <!-- #/ About -->

    <!-- importing events component-->
    <?php include('php_includes/event_component.php') ?>


    <!-- importing the contact section -->
    <?php include('php_includes/contact_section.php') ?>
       
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

    <!--03  02 scroll magic debuger -->
    <script src="client/js/00_lib/03_scrollMagic/debug.addIndicators.js"></script>
    




    <!-- author config and custom script file -->

    <!-- author 00_header -->
    <script src="client/js/01_author/00_animate.js"></script>

    <!-- author 01_swiper -->
    <script src="client/js/01_author/01_swiper.js"></script>


    <!-- author 02_about -->
    <script>

        $(function(){
            $('.ui.embed').embed();

            $('.openSidebar').sidebar('toggle');
                 });
    </script>


</body>
</html>