<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>SIMRS | Login Page</title>
    <link rel="shortchut icon" type="image/x-icon" href="img/plus.png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	  <meta content="" name="description" />
	  <meta content="" name="author" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/login.css" />
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body >
<?php
error_reporting(0);
session_start();
include_once("library/koneksi.php");

if(@$_POST["login"]){ 
	$user = $_POST["user"];
	$pass = md5($_POST["pass"]);
	
	if($user!="" && $pass!=""){
		include_once("library/koneksi.php");
		$em = mysqli_query($server,"SELECT * from login where password = '$pass' AND username = '$user'");
		$data = mysqli_fetch_assoc($em);
		
		if($data["username"] == $user && $data["password"] == $pass){
			echo "<div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					Anda Berhasil Login.
                  </div>";
			$_SESSION["user"] = $data["username"];
			$_SESSION["pass"] = $data["password"];

      /**
       * Ketika melakukan login namun tidak redirect ke halaman admin, silahkan pilih salah satu dari option dibawah
       */

			// header("Location:admin/index.php");
      // echo '<meta http-equiv="refresh" content="0;url=admin/index.php" />';
      echo '<script type="text/javascript">window.location.href="admin/index.php";</script>';

		}else{
			echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Username atau password salah</b>
                  </div><center>";
		}
	}

}
?>
    <style type="text/css">
      h1{
        font-size: 2.9vw;
      }
      p.p{
        font-size: 1.1vmin;
      }
      .btn-responsive {
      white-space: normal !important;
      word-wrap: break-word;
       }
    </style>
   <!-- PAGE CONTENT --> <hr>
    <div class="container">
    <div class="text-center">
    <H1 style=" font-weight: bold; font-family: Arial, Andalus;" class="font font-responsive"><span style="color: #30a5ff;">LOGIN</span>SIMRS</H1>
        <!-- <img src="img/logo.png" id="logoimg" alt=" Logo" /> -->
    </div>
    <div class="tab-content">
        <div id="login" class="active">
            <form action="" method="post" class="form-signin">
                <p class=" text-center btn-block alert alert-success p" style="color: #30a5ff">
                    Masukan Username dan Password
                </p>
                <input type="text" autofocus required name="user" placeholder="Username" class="form-control" />
                <input type="password" required name="pass" placeholder="Password" class="form-control" />
				<input type="submit" name="login" value="Login" class="btn btn-info btn-responsive"/>
				<input type="reset" name="reset" value="Reset" class="btn btn-danger btn-responsive"/>
            </form>
        </div>
    </div>
</div><hr>
<center style="margin-top: 15%; background-color: #f3f2f2; height: 20px;"><?php include_once "admin/footer.php"; ?></center>
	  <!--END PAGE CONTENT -->     
	      
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="js/jquery-2.0.3.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>