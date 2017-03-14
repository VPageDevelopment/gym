<?php
    session_start();
    session_destroy();

    require_once('php_includes/auth_user.php');




    echo '  <script>
                alert("Logout Successfullly");
                window.location.assign("../login.php");
            </script>';

?>