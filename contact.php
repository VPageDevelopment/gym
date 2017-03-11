<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact </title>

    <!-- 00 normalize css -->
    <link rel="stylesheet" href="client/css/00_lib/00_normalize/normalize.css">
    <!-- 01 semantic css -->
    <link rel="stylesheet" href="client/css/00_lib/01_semantic/semantic.css">





    <!-- nth author css -->
      <link rel="stylesheet" href="client/css/style.css">
  
</head>
<body>
    <!-- include the header content ... -->
    <?php include('php_includes/header.php') ; ?>

    <!-- include the header content ... -->
    <?php include('php_includes/contact_section_contact.php') ;?>
      

       
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


    <!-- author 02_about -->
    <script>

        $(function(){
            $('.ui.embed').embed();
        });
    </script>


</body>
</html>