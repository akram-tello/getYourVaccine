<?php 
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['ic']) && isset($_SESSION['id'])) {   ?>

<?php include("layout/header.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href='http://fonts.googleapis.com/css?family=Creepster|Audiowide' rel='stylesheet' type='text/css'>
    <title>Error</title>
</head>
<body>
<div class="container-fluid about-bac-another">
    <div class="container">
        <div class="f-f4">
            <h1><img src="assets/images/home/404.png" /></h1>
            <h2>welcome<span>404!</span></h2>
        </div>
    </div>
</div>
</body>
</html>

<?php }else{
	header("Location: index.php");
} ?>