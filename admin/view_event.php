<?php
    
    require('../php_includes/connection.php');
    require('../php_includes/auth_user.php');

    $upload_dir = 'uploads/';


    if(isset($_GET['delete'])){

        $id = $_GET['delete'];

        // select the item to be deleted ..
        $sql = "select image from event where id='$id'";
        $result = mysqli_query($con , $sql);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);

            // to delete the image from the floder 
            $image = $row['image'];
            unlink($upload_dir.$image);

            // to delete the record in db..

            $sql = "delete from event where id='$id'";
            if(mysqli_query($con , $sql)){

                $successMsg = 'Item deleted successfully - redirecting ...' ;
                header('refresh:1;view_event.php');
            }else{
                $errMsg='cant delete this item ';
            }

        }

    }

    

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

            
            <?php include('php_includes/status_message.php') ;?>
            <!-- ./status message component -->

        
            <?php
            
                $i = 1; 
                $sql = "select * from event";
                $result = mysqli_query($con , $sql);
                
             ?>
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
                    <?php 
                        while($row=mysqli_fetch_array($result)){
                            $id = $row['id'];
                            $eventTitle = $row['title'];
                            $eventDis = $row['description'];                                         
                            $eventImage = $row['image'];                                    
                            $eventVideo = $row['video'];                                                                                    

                    ?>
                        <tr>
                            <td> <?php echo $i ; ?> </td>
                            <td>  <?php echo $eventTitle; ?> </td>
                            <td>  <?php echo $eventDis; ?></td>
                            <td>
                                <img src="<?php echo $upload_dir.'/'.$eventImage; ?>" style="width:70px ; height:70px;" alt="chennai gymnastic academy - <?php echo $eventTitle; ?>">
                            </td>
                            <td> <?php echo $eventVideo; ?></td>

                            <td>
                                
                                <div class="ui buttons">
                                    <a href="edit_event.php?id=<?php echo $id ;?>" class="ui teal button">Edit</a>
                                    <div class="or"></div>
                                    <a href="view_event.php?delete=<?php echo $id ;?>" class="ui red button">Delete</a>
                                </div>
                                    <!-- ./ ui labeled icon button [delete]-->
                            </td>
                        </tr>

                    <?php
                            $i++;
                        }
                    ?>

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