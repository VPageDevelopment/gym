<?php
    
    require('../php_includes/connection.php');
    require('../php_includes/auth_user.php');

    $upload_dir = '/uploads/images';



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


         <strong>Add New</strong> 
        
        <a  href="add_event.php" class="ui animated teal button" tabindex="0">
            <div class="visible content"> <i class="add user icon"></i> Add New</div>
            <div class="hidden content">
                <i class="right arrow icon new-event"></i>
            </div>
        </a>
            <!-- ./ui animated teal button -->

        <div class="ui divider"></div>
            <!-- ./ ui divider -->
        
            <?php $i = 1; ?>
        <!-- view events [ui table] -->
            <table class="ui teal  sortable celled table">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Images</th>
                        <th>Videos</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <?php echo $i ; ?> </td>
                        <td> title </td>
                        <td> description</td>
                        <td>
                             <img src="http://semantic-ui.com/images/logo.png" style="width:30px ; height:30px;" alt="">
                             <img src="http://semantic-ui.com/images/logo.png" style="width:30px ; height:30px;" alt="">
                             <img src="http://semantic-ui.com/images/logo.png" style="width:30px ; height:30px;" alt="">
                             <img src="http://semantic-ui.com/images/logo.png" style="width:30px ; height:30px;" alt="">
                             <img src="http://semantic-ui.com/images/logo.png" style="width:30px ; height:30px;" alt="">
                             <img src="http://semantic-ui.com/images/logo.png" style="width:30px ; height:30px;" alt="">
                             <img src="http://semantic-ui.com/images/logo.png" style="width:30px ; height:30px;" alt="">
                             <img src="http://semantic-ui.com/images/logo.png" style="width:30px ; height:30px;" alt="">
                             <img src="http://semantic-ui.com/images/logo.png" style="width:30px ; height:30px;" alt="">
                             <img src="http://semantic-ui.com/images/logo.png" style="width:30px ; height:30px;" alt="">
                             <img src="http://semantic-ui.com/images/logo.png" style="width:30px ; height:30px;" alt="">
                             <img src="http://semantic-ui.com/images/logo.png" style="width:30px ; height:30px;" alt="">
                        </td>
                        <td> http://semantic-ui.com/images/logo.png <br>
                            http://semantic-ui.com/images/logo.png
                        </td>

                        <td>
                            
                               

                           <div class="ui buttons">
                            <button class="ui teal button">Edit</button>
                            <div class="or"></div>
                            <button class="ui red button">Delete</button>
                            </div>
                                <!-- ./ ui labeled icon button [delete]-->
                        </td>
                    </tr>
                </tbody>
            </table>
                <!-- ./ui table-->
    </div>
           

    </section>
    <!-- #/event-->




    <!-- include footer component  here .. -->
    <?php include('php_includes/footer.php');?>


    <!-- 00_lib script  -->

    <!-- 00 jquery -->
    <script src="../client/js/00_lib/00_jquery/jquery-3.1.1.min.js"></script>
    <!-- 01 semantic -->
    <script src="../client/js/00_lib/01_semantic/semantic.js"></script>


    <!--author tab js -->

    <script>
        $(function(){
            $('.menu .item')
                .tab()
                ;
        });
    </script>



</body>
</html>