<?php
    session_start();
    // include('database/config.php');
    //
    // if($config)
    // {
    //   // echo "Database Connected";
    //   header("location: index.php");
    // }
    // else {
    //   header("location: database/config.php");
    // }


    if(!$_SESSION['username'])
    {
      header('location: index.php');
    }

 ?>
