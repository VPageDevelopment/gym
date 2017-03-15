    <!--Events -->
    <section id="event">
     <div class="ui container">
          <div class="ui grid">
            <h1 class="ui row centered grid ">Our Gallery</h1>
            <p class="ui row  centered grid ">We happy to share our most greatfull and joyfull moments .</p>
         </div>

        <div class="ui stackable four column grid ">
                <!-- mobile offset -->

         <?php

            require_once('php_includes/connection.php');

            $sql = "select * from event";
            $result = mysqli_query($con , $sql);

            while($row = mysqli_fetch_assoc($result)){

                $cardTitle = $row['title'];
                $cardDes = $row['description'];
                $cardImg = $row['image'];


         ?>

                <div class="column">
                    <div class="ui card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
                        <div class="image">
                            <img  style="max-height:261px !important" src="admin/uploads/<?php echo $cardImg ; ?>">
                        </div>
                        <div class="content">
                            <div class="header"><?php echo $cardTitle ; ?></div>
                            <div class="description">
                                <?php echo $cardDes ; ?>    
                            </div>
                        </div>
                        <div class="ui two bottom attached buttons">
                            <div class="ui button">
                            <i class="add icon"></i>
                            Queue
                            </div>
                            <div class="ui primary button">
                            <i class="play icon"></i>
                            Watch
                            </div>
                        </div>
                        </div>
                
                </div>
             


         <?php       
            }

         ?> 

            
        </div>
            <!--./ui centered grid -->


        <div class="ui grid">
                <div class="ui row centered grid ">
                    <a class="huge ui animated yellow  button button-rounder teal-bg" href="#" tabindex="0">
                        <div class="visible content">View More</div>
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