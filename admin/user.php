<?php
include_once("../library/koneksi.php");

?>
<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Daftar User</li>
			</ol>
<h3>Data User</h3><hr>
<a href="#myModal" class="btn btn-primary btn-rect" data-toggle="modal"><i class='icon icon-white icon-plus'></i> Tambah User</a><p>
<?php
	if($_POST["user"]){
			include_once("../library/koneksi.php");
			mysqli_query($server,"INSERT into login set username='".$_POST["usr"]."', password='".md5($_POST["pas"])."', nama='".$_POST["nma"]."', alamat='".$_POST["alt"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=user'>";
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil menambah ke database!!</b>
			</div><center>";
	}else if(isset($_POST["user"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal menambah ke database!!</b>
			</div><center>";
	}

user(); //memanggil function user
?>
<div class="panel panel-default">
	<div class="panel-body">
		<div class="table-responsive">
			<table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
				<thead>
					<tr>
						<th>Kode User</th>
						<th>Username</th>
						<th>Nama Lengkap</th>
						<th>Alamat</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$usSql = "SELECT * FROM login ORDER BY kd_user DESC";
					$usQry = mysqli_query($server,$usSql)  or die ("Query user salah : ".mysqli_error());
					$nomor  = 1; 
					while ($us = mysqli_fetch_array($usQry)) {
					$nomor++;
				?>
					<tr>
						<td><?php echo $nomor;?></td>
						<td><?php echo $us['username'];?></td>
						<td><?php echo $us['nama'];?></td>
						<td><?php echo $us['alamat'];?></td>
						<td>
						  <div class='btn-group'>
						  <a href="?menu=user_del&amp;aksi=hapus&amp;nmr=<?php echo $us['kd_user']; ?>" class="btn btn-xs btn-danger tipsy-kiri-atas" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA INI ?')"><i class="icon-trash icon-white"></i></a>
						  </div>
						</td>
					</tr>
					<?php } ?>
				</tbody>			
			</table>
		</div>
	</div>
</div>