
  
  
  <!-- header menu  -->
    <header>
        <div class="ui borderless teal inverted  fixed menu">
                
                    <a href="index.php">
                        <div class="item">
                            <img src="../client/images/logo.png" class="ui tiny image" alt="sample logo"> 
                        </div>
                    </a>   
                

                <div class="right menu">
                   
                        <a href="#" class="ui simple dropdown item animate " >
                            
                            <img class="ui avatar image" src="../client/images/user-image.png">
                            
                            <?php 
                            	$sql = "select * from user where id=1";
        						$result = mysqli_query($con , $sql);
        						$row = mysqli_fetch_array($result);
        						
        						
                            ?>
                            <span><?php echo ucfirst($row['username']) ;?></span>
                            
                            <i class="dropdown icon"></i>

   
    
                            <div class="menu">
                            	<div class="item header" onclick="window.location.assign('http://chennaigymnasticsacademy.com/admin/edit_profile.php')" > 
                                	<i class="edit icon" ></i>Edit Profile
                                </div>
                                <div class="item header" onclick="window.location.assign('http://chennaigymnasticsacademy.com/admin/change_password.php')" > 
                                	<i class="setting icon" ></i>Change Password
                                </div>
                                <div class="item header" onclick="window.location.assign('http://chennaigymnasticsacademy.com/admin/logout.php')" > 
                                	<i class="lock icon" ></i>Log Out
                                </div>
                            </div>
       
                        </a>
                   
                </div>
                    <!-- ./right menu-->
            
        </div>
            <!-- ./ui borderless labeled icon menu -->
    </header>
        <!-- /header-->