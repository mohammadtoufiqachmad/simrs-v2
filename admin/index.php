<?php
error_reporting(0);
session_start();
include("../library/variabel.php");
if($_SESSION["user"]!="" && $_SESSION["pass"]!=""){
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD-->
<head>
    <meta charset="UTF-8" />
    <title>SIMRS | Sistem Informasi Rumah Sakit</title>
    <link rel="shortchut icon" type="image/x-icon" href="../img/plus.png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="../css/bootstrap-table.css" >
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/theme.css" />
    <link rel="stylesheet" href="../css/MoneAdmin.css" />
    <link rel="stylesheet" href="../css/font-awesome.css" />
    <link href="../css/styles.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="../css/bootstrap-datepicker.css"/> -->
    <!-- <link rel="stylesheet" href="../css/bootstrap-datepicker.min.css"/> -->

    <!--END GLOBAL STYLES -->
    <!--JS-->    
    <script src="../js/lumino.glyphs.js"></script>  <!-- 
    <script src="../js/bootstrap-datepicker.js"></script>
    <script src="../js/bootstrap-datepicker.min.js"></script> 
 -->
    <!--END JS-->
</head>
<body class="padTop53">
	<div id="wrap">
		<!-- HEADER SECTION -->
		 <?php include_once("menu_atas.php");?>
        <!-- END HEADER SECTION -->
		
		 <!-- MENU SECTION -->
		 <?php include_once("menu_admin.php");?>
        <!--END MENU SECTION -->
		<!--PAGE CONTENT -->
       <!--END PAGE CONTENT -->
	</div>
	<!-- FOOTER -->
		 <?php include_once("footer.php");?>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    
    <script src="../js/jquery-2.0.3.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="../js/bootstrap-table.js"></script>
    <!-- END GLOBAL SCRIPTS -->
</body>

<?php
}else{
	header("Location:../index.php");
}
?>