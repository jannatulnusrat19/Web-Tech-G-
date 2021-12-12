<?php
 session_start();
 session_destroy();
 header("location: ../controller/WelcomePage.php");
 ?>