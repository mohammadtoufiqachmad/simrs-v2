<?php
include_once("../library/koneksi.php");

#untuk paging (pembagian halamanan)
// $row = 20;
// $hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
// $pageSql = "SELECT * FROM obat";
// $pageQry = mysql_query($pageSql, $server) or die ("error paging: ".mysql_error());
// $jml	 = mysql_num_rows($pageQry);
// $max	 = ceil($jml/$row);
?>

			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Obat-obatan</li>
			</ol>
		
	<h3>Data Obat</h3><hr>
	<a href="#myModal" class="btn btn-primary btn-rect" data-toggle="modal"><i class='icon icon-white icon-plus'></i> Tambah Obat</a><p>
<?php
	if($_POST["obt"]){
			include_once("../library/koneksi.php");
			mysqli_query($server,"INSERT into obat set nm_obat='".$_POST["nama"]."', jml_obat='".$_POST["jml"]."', ukuran='".$_POST["ukr"]."', harga='".$_POST["hrg"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=obat'>";
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil menambah ke database!!</b>
			</div><center>";
	}else if(isset($_POST["obt"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal menambah ke database!!</b>
			</div><center>";
	}

obat(); //memanggil function obat
?>
<div class="panel panel-default">
	<div class="panel-body">
		<div class="table-responsive">
		<!-- class="table table-striped table-bordered table-hover" -->
			<table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
				<thead>
					<tr>
						<th>Kode Obat</th>
						<th>Nama Obat</th>
						<th>Jumlah Obat</th>
						<th>Ukuran</th>
						<th>Harga (Rp.)</th>
						<th>Aksi</th>
					</tr>
				</thead>
			
				<tbody>
				<?php
				$query = mysqli_query($server,"SELECT * FROM obat ORDER BY kd_obat DESC")or die("Query Obat salah : ".mysqli_error());
				while ($obat = mysqli_fetch_array($query)) {
				?>
					<tr>
						<td><?php echo $obat['kd_obat'];?></td>
						<td><?php echo $obat['nm_obat'];?></td>
						<td><?php echo $obat['jml_obat'];?></td>
						<td><?php echo $obat['ukuran'];?></td>
						<td><?php echo $obat['harga'];?></td>
						<td>
						  <div class='btn-group'>
						  <a href="?menu=obat_del&aksi=hapus&nmr=<?php echo $obat['kd_obat']; ?>" class="btn btn-xs btn-danger tipsy-kiri-atas" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA INI ?')"><i class="icon-trash icon-white"></i></a> 
						  <a href="?menu=obat_edit&aksi=edit&nmr=<?php echo $obat['kd_obat']; ?>" class="btn btn-xs btn-info tipsy-kiri-atas" title='Edit Data ini'> <i class="icon-edit icon-white"></i> </a>
						  </div>
						</td>
					</tr>
					<?php } ?>
				</tbody>	
			</table>
		</div>
	</div>
</div>
