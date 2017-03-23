<?php
    
    require('../php_includes/connection.php');
    require('../php_includes/auth_user.php');
    
			$sql = "select * from user where id=1";
        	$result = mysqli_query($con , $sql);
        	$row = mysqli_fetch_array($result);
        	

        if(isset($_POST['editProfile'])){
		
      		$changeUsername = mysqli_real_escape_string($con , $_POST['change_username']);
            
			if(empty($changeUsername))
			{
				$errMsg = "Please Enter the new username";
			}
				
			
			if(!isset($errMsg))
			{
				$sql = "update user set  `username`='$changeUsername' where id=1";
						
				if(mysqli_query($con, $sql))
					{
							 $successMsg = 'Username is change successfully - Redirecting...';
	                   		 header('refresh:2; view_event.php');
						}else
						{
							$errMsg = "Something went wrong. Try againe later ..";
						}
					  
			}
				
			
			
			
        } // if [saveEvent]

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Password - Chennai Gymnastic Academy</title>

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
            <strong>Change Username</strong> 
            <a  href="view_event.php" class="ui animated teal button" tabindex="0">
                <div class="visible content"> <i class="left arrow icon"></i> View Events</div>
                <div class="hidden content">
                    <i class="left arrow icon new-event"></i>
                </div>
            </a>
            <!-- ./ui animated teal button -->

            <div class="ui divider"></div>
            <!-- ./ui divider -->
            
            <?php include('php_includes/status_message.php') ;?>
            <!-- ./status message component -->

        


            <!--./ui divider-->
            <form action="" class="ui form" method="post">
            
            	
               	<!-- ./ field [user name] -->
               	
                <div class=" required field">
                    <lable>New Username</lable>
                    <input type="text" name="change_username" placeholder="New Username" value="<?php echo $holdCurrentPass;?>">
                </div>
                <br>
               	
                



                <button class="ui button teal" name="editProfile" type="submit">
                    <i class="icon send"></i> Edit Profile
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

    <!--nth author inline script  for close icon-->

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