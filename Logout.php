<?php
session_start();   // destroy session data in storage
    session_destroy();
    header('location: index.php');
?>