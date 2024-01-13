<?php 
    if(!isset($_SESSION['logged-in'])){
        header('location: ../index.php');
    }
?>