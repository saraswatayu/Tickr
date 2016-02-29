//file to handle logout when user clicks the logout button

<?php
    session_start();
    
    if(!isset($_SESSION['user']))
    {
        header("Location: index.php");
    }
    else if(isset($_SESSION['user'])!="")
    {
        header("Location: home.php");
    }
    
    if(isset($_GET['logout']))
    {
        session_destroy();
        unset($_SESSION['user']);
        header("Location: index.php");
    }
    ?>

/*
or just this?
 
 <?php
 session_start();
 unset($_SESSION['sess_user']);
 session_destroy();
 header("location:login.php");
 ?>

*/