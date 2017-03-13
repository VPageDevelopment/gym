<?php
    require('../php_includes/connection.php');
    require('../php_includes/auth_user.php');


    $query = mysqli_query($con , "select * from event ");


    while($row = mysqli_fetch_array($query)){

        $title = $row['title']; 
        $description = $row['description'];    
        $image = $row['image'];

        
        ?>

            <h1><?php echo $title ?></h1>
            <h3><?php echo $description ?></h3>
            <img src="<?php echo $image ; ?>" />


        <?php

    } 

?>