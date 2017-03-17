  <?php 
    //  HEADER COMPONENT
    $directoryURI = $_SERVER['REQUEST_URI'];
    $path = parse_url($directoryURI , PHP_URL_PATH);
    $components = explode('/', $path);
    $first_part = $components[3];
  
  ?>
  
  
    

  <!-- header menu  -->
    <header>
        <div class="ui vertical inverted teal sidebar menu left mobile-sidebar ">
             <a href="index.php" class="item animate  
                    <?php if($first_part == '' || $first_part == 'index.php' ) {echo 'active'; } else {echo '';} ?>
                                            "
                    >
                        <i class="home icon" ></i>
                        Home 
                    </a>
                    <a href="about.php" class="item animate 
                    <?php if($first_part == 'about.php') {echo 'active'; } else {echo '';} ?>
                    "
                    >
                        <i class="id badge icon"  ></i>
                        About
                    </a>
                    <a href="event.php" class="item animate
                    <?php if($first_part == 'event.php') {echo 'active'; } else {echo '';} ?>
                    "
                    >
                        <i class="image icon"  ></i>
                        Gallery
                    </a>
                    <a href="contact.php" class="item animate
                    <?php if($first_part == 'contact.php') {echo 'active'; } else {echo '';} ?>
                    "
                    >
                        <i class="text telephone icon" ></i>
                        Contact
                    </a>

                
                    <a href="login.php" class="item animate
                        <?php if($first_part == 'login.php') {echo 'active'; } else {echo '';} ?>
                    "
                    >
                        <i class=" privacy icon" ></i>
                        login
                    </a>

        </div>



        <div class="mobile-screen fixed ">
                <div class="mobile-nav">
                    <div class="ui container">
                        <div class="ui  borderless teal fixed inverted menu">
                                
                                <a class="toc item ">
                                       <i class="sidebar icon"></i>

                                        <h4  style="margin-top:-2px ;" >Chennai Gymnastics Academy</h4>
                                </a> 
                                
                               
                                <div class="right menu">
                                    <a href="index.php">
                                        <div class="item">
                                            <img src="client/images/logo.png" class="ui tiny image" alt="sample logo"> 
                                        </div>
                                    </a> 
                                </div>
                        </div>
                             
                    </div> <!-- -->
                </div>
        </div>

        <div class="ui borderless teal inverted labeled icon  fixed menu large-screen">

            <div class="ui container">

                
                    <a href="index.php">
                        <div class="item">
                            <img src="client/images/logo.png" class="ui tiny image" alt="sample logo">
                            
                        </div>
                    </a>   
                    <a href="index.php">
                        <div class="item">
                            <h4 style="margin-top:20px; font-weight:bold">Chennai Gymnastics Academy</h4>
                        </div>
                    </a>
                

                <div class="right menu">
                    <a href="index.php" class="item animate  
                    <?php if($first_part == '' || $first_part == 'index.php' ) {echo 'active'; } else {echo '';} ?>
                                            "
                    >
                        <i class="home icon" ></i>
                        Home 
                    </a>
                    <a href="about.php" class="item animate 
                    <?php if($first_part == 'about.php') {echo 'active'; } else {echo '';} ?>
                    "
                    >
                        <i class="id badge icon"  ></i>
                        About
                    </a>
                    <a href="event.php" class="item animate
                    <?php if($first_part == 'event.php') {echo 'active'; } else {echo '';} ?>
                    "
                    >
                        <i class="image icon"  ></i>
                        Gallery
                    </a>
                    <a href="contact.php" class="item animate
                    <?php if($first_part == 'contact.php') {echo 'active'; } else {echo '';} ?>
                    "
                    >
                        <i class="text telephone icon" ></i>
                        Contact
                    </a>

                
                    <a href="login.php" class="item animate
                        <?php if($first_part == 'login.php') {echo 'active'; } else {echo '';} ?>
                    "
                    >
                        <i class=" privacy icon" ></i>
                        login
                    </a>
                </div>
            </div>
                <!-- ./ui container-->
        </div>
            <!-- ./ui borderless labeled icon menu -->
    </header>
        <!-- /header-->