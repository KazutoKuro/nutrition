<?php 
    require('header.php');
    session_destroy();
    echo "<script>location.assign('home.php');</script>" ;
    ?>