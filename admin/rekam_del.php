<?php
include_once("../library/koneksi.php");
if($_GET){
	if($_GET["aksi"] && $_GET["nmr"]){
		$del = "DELETE FROM rekam_medis WHERE no_rm='".$_GET["nmr"]."'";
		$delDb = mysqli_query($server,$del) or die("Error hapus data ".mysqli_error());
		if($delDb){
			echo "<meta http-equiv='refresh' content='0; url=?menu=rekam'>";
		}
	}else{
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Data yang dihapus tidak ada!!</b>
			</div><center>";
	}
}
?>