<?php
  $logo = "http://semantic-ui.com/images/logo.png" ;

?>
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Login</title>

   <!-- 00 normalize css -->
    <link rel="stylesheet" href="client/css/00_lib/00_normalize/normalize.css">
    <!-- 01 semantic css -->
    <link rel="stylesheet" href="client/css/00_lib/01_semantic/semantic.css">
    <!-- 02 swiper css -->
    <link rel="stylesheet" href="client/css/00_lib/02_swiper/swiper.min.css">
    <!-- 02 reset some defult swiper css -->
    <link rel="stylesheet" href="client/css/00_lib/02_swiper/reset.swiper.css">




    <!-- nth author css -->
    <link rel="stylesheet" href="client/css/style.css">

    <style type="text/css">
        body {
        background-color: #DADADA;
        }
        body > .grid {
        height: 100%;
        }
        .image {
        margin-top: -100px;
        }
        .column {
        max-width: 450px;
        }
    </style>

</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <img src="<?php echo $logo ;?>" class="image">
      <div class="content">
        Log-in to your account
      </div>
    </h2>
    <form class="ui large form" action="auth-login.php" method="POST">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="E-mail address">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
        <input type="submit" value="Login" class="ui fluid large teal submit button"/>
      </div>

      <div class="ui error message"></div>

    </form>

  
  </div>
</div>

    <!-- 00_lib script  -->

    <!-- 00 jquery -->
    <script src="client/js/00_lib/00_jquery/jquery-3.1.1.min.js"></script>
    <!-- 01 semantic -->
    <script src="client/js/00_lib/01_semantic/semantic.js"></script>
    <!-- 02 swiper js -->
    <script src="client/js/00_lib/02_swiper/swiper.min.js"></script>
    <script>
        $(document)
            .ready(function() {
            $('.ui.form')
                .form({
                fields: {
                    email: {
                    identifier  : 'email',
                    rules: [
                        {
                        type   : 'empty',
                        prompt : 'Please enter your e-mail'
                        },
                        {
                        type   : 'email',
                        prompt : 'Please enter a valid e-mail'
                        }
                    ]
                    },
                    password: {
                    identifier  : 'password',
                    rules: [
                        {
                        type   : 'empty',
                        prompt : 'Please enter your password'
                        },
                        {
                        type   : 'length[6]',
                        prompt : 'Your password must be at least 6 characters'
                        }
                    ]
                    }
                }
                })
            ;
            });
    </script>
</body>
</html>
