<?php
    
    require('../php_includes/connection.php');
    require('../php_includes/auth_user.php');


    $upload_dir = 'uploads/';

    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $sql = "select * from event where id=".$id.";";

        $result = mysqli_query($con , $sql);
        if(mysqli_num_rows($result) > 0){

            $row = mysqli_fetch_assoc($result);
            

        }else{

            $errMsg = 'Could not find the record';

        }

    }
  
   


    // logic for save data from the goes here ....

        if(isset($_POST['updateEvent'])){

            $title = mysqlI_real_escape_string($con , $_POST['title']);
            $description = mysqlI_real_escape_string($con , $_POST['description']);

            $imageName = $_FILES['myfile'] ['name'];
            $imageTmp = $_FILES['myfile'] ['tmp_name'];
            $imageSize = $_FILES['myfile'] ['size'];

            $video = mysqlI_real_escape_string($con , $_POST['video']);


            // check the values are not empty ...

           

            if(empty($title)){
                $errMsg = 'Please enter title';
            }elseif(empty($description)){
                $errMsg = 'Please enter description';
            }elseif(empty($video)){
                $errMsg = 'Please enter the video url';
            }
            
            // update the image ... 
            if($imageName){

                // get image extension
                $imageExt = strtolower(pathinfo($imageName , PATHINFO_EXTENSION));

                //check the upload file extension
                $validExt = array('jpeg' , 'jpg' , 'png' , 'gif');

                // random new name for the photo ..
                $userPic  = time().'_'.rand(1000,999).'.'.$imageExt ;


                // check the image is valid .. 
                if(in_array($imageExt , $validExt)){
                        // check the image size must be less then 5MB.. 
                        if($imageSize < 5000000){
                                // delete old image ...
                                unlink($upload_dir.$row['image']);

                                move_uploaded_file($imageTmp , $upload_dir.$userPic);
                        }else{
                            $errMsg = "Image size is too large";
                        }
                        
                }else{
                    $errMsg = "Please upload a valid image";
                } 

               
                
            } else{
                // if user happy with the old image .. 
                $userPic = $row['image'];
            }


            // if no error is ocurrs ... 

            if(!isset($errMsg)){
                $sql = "update event set `title`='$title' , `description`='$description' , `image`='$userPic', `video`='$video' , `createdAt` = NOW() where id='$id'";

                $result = mysqli_query($con , $sql);

                if($result){
                    $successMsg = 'Record updated successfully - Redirecting...';
                    header('refresh:2; view_event.php');
                }else{
                    $errMsg = ' Error'.mysqli_error($con);
                }

            } //if[!$errMsg]

            
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
            <!-- ./ ui divider -->

            <?php include('php_includes/status_message.php') ;?>
            <!-- ./status message component -->


            <!--./ui divider-->
            <form action="" class="ui form" method="post" enctype="multipart/form-data">
                <div class="field">
                    <lable>Title</lable><br>
                    <input type="text" name="title" value="<?php echo $row['title'];?>">
                </div>  <br>
                    <!-- ./ field [title] -->
                <div class="field">
                    <lable>Description</lable><br>
                    <textarea name="description"><?php echo $row['description'];?></textarea>
                </div> <br>
                    <!-- ./ field [description]-->
                <div>
                    <p>Upload image</p>
                    <img src="<?php echo $upload_dir.$row['image']?>" id="uploadImg"  class="ui small image bordered"alt="<?php echo $row['title'] ?>" > <br>
                    <label for="file" class="ui icon teal button">
                        <i class="file icon"></i>
                        Upload images</label>
                        
                    <input type="file" id="file" name="myfile" onchange="readURL(this)" style="display:none">
                </div> 
                    <!-- ./ field [image] --> <br>

                <div class="field">
                    <lable>Video</lable><br>
                    <div class="ui labeled input">
                        <div class="ui teal label">
                            uri
                        </div>
                        <input type="text" name="video" value="<?php echo $row['video'];?>">
                    </div>
                </div>
                    <!-- ./ field [video]-->



                <button class="ui button teal" name="updateEvent" type="submit">
                    <i class="icon send"></i>Update
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

    <!--nth author inline script -->

    <script>
        $(function(){
            $('.message .close')
                .on('click', function() {
                    $(this)
                    .closest('.message')
                    .transition('fade')
                    ;
                })
                ;
        });
    </script>

    
    <!-- author js for preview the uploaded image -->
    <script src="../client/js/01_author/02_preview.js"></script>


</body>
</html>