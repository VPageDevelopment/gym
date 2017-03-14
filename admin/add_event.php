<?php
    
    require_once('../php_includes/connection.php');
    require('../php_includes/auth_user.php');


  
   


    // logic for save data from the goes here ....

        if(isset($_POST['saveEvent'])){

            $title = $_POST['title'];
            $description = $_POST['descripttion'];
            $imageName = $_FILES['image'] ['name'];
            $imageTmp = $_FILES['image'] ['tmp_name'];
            $imageSize = $FILES['image'] ['size'];

            $video = $_POST['video'];


            // check the values are not empty ...

            if(empty($name)){
                $errMsg = 'Please enter title';
            }elseif(empty($description)){
                $errMsg = 'Please enter description';
            }elseif(empty($imageName)){
                $errMsg = 'Please select images';
            }elseif(empty($video)){
                $errMsg = 'Please enter the video url';
            }

            
        } // if [saveEvent]

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View events page - Chennai Gymnastic Academy</title>

    <!-- 00 normalize css -->
    <link rel="stylesheet" href="../client/css/00_lib/00_normalize/normalize.css">
    <!-- 01 semantic css -->
    <link rel="stylesheet" href="../client/css/00_lib/01_semantic/semantic.css">

    <!--03 animate css -->
    <link rel="stylesheet" href="../client/css/00_lib/03_animate/animate.css">




    <!-- nth author css -->
      <link rel="stylesheet" href="../client/css/style.css"> 
  
</head>
<body>
    <!-- include the header content ... -->
    <?php include('php_includes/header.php') ; ?>



    <!-- event -->
    <section id="viewEvents">
        <div class="ui container"> 
            <strong>View Events</strong> 
            <a  href="view_event.php" class="ui animated teal button" tabindex="0">
                <div class="visible content"> <i class="left arrow icon"></i> View Events</div>
                <div class="hidden content">
                    <i class="left arrow icon new-event"></i>
                </div>
            </a>
            <!-- ./ui animated teal button -->

            <div class="ui divider"></div>
            




            <!--./ui divider-->
            <form action="" class="ui form" method="post" enctype="multipart/form-data">
                <div class="field">
                    <lable>Title</lable>
                    <input type="text" name="title" placeholder="Event Title">
                </div>
                    <!-- ./ field [title] -->
                <div class="field">
                    <lable>Description</lable>
                    <textarea name="description" placeholder="Event description"></textarea>
                </div>
                    <!-- ./ field [description]-->
                <div>
                    <label for="file" class="ui icon teal button">
                        <i class="file icon"></i>
                        Upload images</label>
                    <input type="file" id="file" name="image" style="display:none">
                </div>
                    <!-- ./ field [image] -->
                <div class="field">
                    <lable>Video</lable>
                    <input type="text" name="video" placeholder="Event Video">
                </div>
                    <!-- ./ field [video]-->



                <button class="ui button teal" name="saveEvent" type="submit">
                    <i class="icon send"></i> Submit
                </button>
            </form>
            <!-- ./ form -->
        </div>
        <!-- ./ ui container-->
    </section>
    <!-- #/event-->




    <!-- include footer component  here .. -->
    <?php include('php_includes/footer.php');?>


    <!-- 00_lib script  -->

    <!-- 00 jquery -->
    <script src="../client/js/00_lib/00_jquery/jquery-3.1.1.min.js"></script>
    <!-- 01 semantic -->
    <script src="../client/js/00_lib/01_semantic/semantic.js"></script>


</body>
</html>