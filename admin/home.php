<?php
    
    require('../php_includes/connection.php');
    require('../php_includes/auth_user.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

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
            <h1>Event Name </h1>
            <div class="divider"></div>

            <!-- to view the events ./ ui top attached tabluar menu -->
            <div class="ui pointing  teal secondary menu">
                <a class="item active" data-tab="first">Event Details </a>
                <a class="item" data-tab="second">Images</a>
                <a class="item" data-tab="third">Videos</a>
            </div>
                <!--./ui top attached tabular menu -->

            <div class="ui tab segment active" data-tab="first">

                <div class="ui stackable two column grid">
                    <div class="column">
                        <img class="ui fluid image" src="https://semantic-ui.com/images/wireframe/image.png">
                            <!--./ ui -->
                    </div>
                        <!--./ cloumn 1st -->

                     <div class="column">
                     
                            <h3 class="ui header">A header</h3>
                                <div class="ui vertical segment">
                                    <p>Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque.</p>
                                
                                
                                    <p>Audiam quaerendum eu sea, pro omittam definiebas ex. Te est latine definitiones. Quot wisi nulla ex duo. Vis sint solet expetenda ne, his te phaedrum referrentur consectetuer. Id vix fabulas oporteat, ei quo vide phaedrum, vim vivendum maiestatis in.</p>
                                    <p>Eu quo homero blandit intellegebat. Incorrupte consequuntur mei id. Mei ut facer dolores adolescens, no illum aperiri quo, usu odio brute at. Qui te porro electram, ea dico facete utroque quo. Populo quodsi te eam, wisi everti eos ex, eum elitr altera utamur at. Quodsi convenire mnesarchum eu per, quas minimum postulant per id.</p>
                                </div>
                                    <!-- ./ ui vertical segment -->
                    </div>
                        <!--./ cloumn 2nd -->
                </div> 
                    <!--./ui centered grid-->
                
            </div>
            <div class="ui tab segment" data-tab="second">
                Second
            </div>
            <div class="ui tab segment" data-tab="third">
                Third
            </div>
        </div>
            <!--./ui container-->
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