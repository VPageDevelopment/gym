<?php
            define('DB_NAME', 'gym');
            define('DB_USER', 'root');
            define('DB_PASSWORD', '');
            define('DB_HOST', 'localhost');

            $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            if (!$con)
            {
                die("Database connection failed: " . mysqli_error());
            }

?>