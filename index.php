
<?php
session_start();
ob_start();
include 'koneksi/conn.php';
include 'koneksi/model.php';

?>



<!doctype html>
<html lang="en">

<head>
   <?php include 'kepala.php'?>



</head>

<body>

  <?php include 'header.php' ?>

   <?php include 'content.php' ?>
   

    <?php include 'footer.php' ?>


    <!--javascript-->
    <?php include 'kaki.php' ?>





</body>

</html>

