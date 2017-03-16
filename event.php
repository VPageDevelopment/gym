<?php 
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event</title>

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


    <!--importing jumbotron component -->
    <?php include('php_includes/jumbotron.php'); ?>

  
    <!-- importing events component-->
    <?php include('php_includes/event_component.php') ?>

    <section id="video-heading">
        <div class="ui container">
            <div class="ui row centered grid">
                <h2 class="ui header teal"> Video </h2>
            </div>
        </div>
    </section>
        <!-- #/video-header -->

         

    <section id="video-content">
        <div class="ui container">
            <div class="ui stackable two column grid  padded">

                <?php 


                    $sql = "select * from event";
                    $result = mysqli_query($con , $sql);

                    while($row = mysqli_fetch_assoc($result)){
                          $cardImage = $row['image'];
                          $cardVideo = $row['video'];
                ?>

                     <div class="column" >
                        <div class="ui embed" data-url="<?php echo $cardVideo ;?>" data-placeholder="admin/uploads/<?php echo $cardImage ;?>"></div>
                    </div>
                             <!--./column about youtube video content -->

                <?php
                    }
                ?>

                       

                       
          
            </div> 
        </div>
        <!-- ./ ui container-->
    </section>
        <!--#/video-content section -->


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