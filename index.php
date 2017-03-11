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
    <section id="about">
        <div class="ui container">
            <div class="ui stackable two column grid  padded">

                         <div class="column">
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
                        <div class="column">
                                <div class="ui embed" data-url="https://www.youtube.com/embed/O6Xo21L0ybE" data-placeholder="http://bit.ly/2ncWFyp"></div>
                        </div>
                             <!--./column about youtube video content -->

                       
          
            </div> 
        </div>
        <!-- ./ ui container-->

    </section>
        <!-- #/ About -->

    <!--Events -->
    <section id="event">
     <div class="ui container">
          <div class="ui grid">
            <h1 class="ui row centered grid ">Our Events</h1>
            <p class="ui row  centered grid ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias exercitationem laboriosam dolore nisi repudiandae neque, consectetur. Ipsum, corrupti possimus a praesentium minus suscipit.</p>
         </div> 

        <div class="ui centered grid ">
                <!-- mobile offset -->
                <div class="four wide mobile only column"></div>
                <div class="twelve wide mobile eight wide tablet four wide computer column">
                    <div class="ui card">
                        <a class="image" href="#">
                            <img src="http://semantic-ui.com/images/avatar/large/steve.jpg">
                        </a>
                        <div class="content">
                            <a class="header" href="#">Steve Jobes</a>
                            <div class="meta">
                            <a>Last Seen 2 days ago</a>
                            </div>
                        </div>
                        <div class="ui bottom  yellow attached button teal-bg border-none">
                            <i class="file icon"></i>
                            View More
                        </div>
                    </div>
                </div>

                 <!-- mobile offset -->
                <div class="four wide mobile only column"></div>
                    <!--./eight wide tablet four wide computer column 1-->
                <div class=" twelve wide mobile eight wide tablet four wide computer column">
                    <div class="ui card">
                        <a class="image" href="#">
                            <img src="http://semantic-ui.com/images/avatar/large/steve.jpg">
                        </a>
                        <div class="content">
                            <a class="header" href="#">Steve Jobes</a>
                            <div class="meta">
                            <a>Last Seen 2 days ago</a>
                            </div>
                        </div>
                        <div class="ui bottom  yellow attached button teal-bg border-none">
                            <i class="file icon"></i>
                            View More
                        </div>
                    </div>
                </div>
                 <!-- mobile offset -->
                <div class="four wide mobile only column"></div>
                    <!--./eight wide tablet four wide computer column 2 -->
                <div class=" twelve wide mobile eight wide tablet four wide computer column">
                    <div class="ui card">
                        <a class="image" href="#">
                            <img src="http://semantic-ui.com/images/avatar/large/steve.jpg">
                        </a>
                        <div class="content">
                            <a class="header" href="#">Steve Jobes</a>
                            <div class="meta">
                                <a>Last Seen 2 days ago</a>
                            </div>
                        </div>
                        <div class="ui bottom  yellow attached button teal-bg border-none">
                            <i class="file icon"></i>
                            View More
                        </div>
                    </div>

                    
                </div>
                 <!-- mobile offset -->
                <div class="four wide mobile only column"></div>
                    <!--./eight wide tablet four wide computer column 3-->
                <div class=" twelve wide mobile eight wide tablet four wide computer column">
                    <div class="ui card">
                        <a class="image" href="#">
                            <img src="http://semantic-ui.com/images/avatar/large/steve.jpg">
                        </a>
                        <div class="content">
                            <a class="header" href="#">Steve Jobes</a>
                            <div class="meta">
                            <a>Last Seen 2 days ago</a>
                            </div>
                        </div>
                        <div class="ui bottom  yellow attached button teal-bg border-none">
                            <i class="file icon"></i>
                            View More
                        </div>
                    </div>
                </div>
                    <!--./eight wide tablet four wide computer column 1-->
                
       </div>
            <!--./ui centered grid -->


        <div class="ui grid">
                <div class="ui row centered grid ">
                    <a class="huge ui animated yellow  button button-rounder teal-bg" href="#" tabindex="0">
                        <div class="visible content">View More Events</div>
                        <div class="hidden  content">
                            <i class="right arrow icon"></i>
                        </div>
                    </a>
                </div>
        </div>
        
     </div>
          <!-- ./ ui container -->
    
            
    </section>
        <!-- #/ events-->


    <!-- importing the contact section -->
    <?php include('php_includes/contact_section.php') ?>
       
    <!-- include footer component  here .. -->
    <?php include('php_includes/footer.php');?>


    <!-- 00_lib script  -->

    <!-- 00 jquery -->
    <script src="client/js/00_lib/00_jquery/jquery-3.1.1.min.js"></script>
    <!-- 01 semantic -->
    <script src="client/js/00_lib/01_semantic/semantic.js"></script>
    <!-- 02 swiper js -->
    <script src="client/js/00_lib/02_swiper/swiper.min.js"></script>
  
    




    <!-- author config and custom script file -->

    <!-- author 00_header -->
    <script src="client/js/01_author/00_animate.js"></script>

    <!-- author 01_swiper -->
    <script src="client/js/01_author/01_swiper.js"></script>


    <!-- author 02_about -->
    <script>

        $(function(){
            $('.ui.embed').embed();
        });
    </script>


</body>
</html>