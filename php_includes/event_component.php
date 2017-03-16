 <?php 

            require_once('php_includes/connection.php');


            $pageName = $first_part;
?>

    <!--Events -->
    <section id="event">
     <div class="ui container">
        <?php
         
            if($pageName == 'index.php' || $pageName ==   ''){
        ?>

            <div class="ui grid">
            <h1 class="ui row centered grid">Our Gallery</h1>
            <p class="ui row  centered grid ">We happy to share our most greatfull and joyfull moments .</p>
           
         </div>
          <br>

        <?php
            } 
        ?>
          
        <div class="ui four cards gallery-grid centered ">
            

         <?php

         

            if($pageName == 'index.php' || $pageName ==   ''){
                
                $sql = "select * from event limit 0 , 8";
            }else{
                $sql = "select * from event ";
            }

            $result = mysqli_query($con , $sql);

            while($row = mysqli_fetch_assoc($result)){

                $cardTitle = $row['title'];
                $cardDes = $row['description'];
                $cardImg  = $row['image'];

                $cardVideo = $row['video']


         ?>

                        <div class="ui left floated image">
                            <a class="ui left red corner label">
                                <i class="heart icon"></i>
                            </a>
                            <img  class="gallery-grid-image" src="admin/uploads/<?php echo $cardImg ;?>"> 
                        </div>
                
                


         <?php       
            }

         ?> 
 
        </div>
            <!--./ui centered grid -->
            <br>


       <?php 
       
        
            if($pageName == 'index.php' || $pageName ==   ''){
          ?>

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


      <?php

            }
       ?>
      
        
     </div>
          <!-- ./ ui container -->
    
            
    </section>
    <!-- #/ events-->