<?php
include_once("../library/koneksi.php");

?>
<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Tindakan</li>
			</ol>
<h3>Data Tindakan</h3><hr>
<a href="#myModal" class="btn btn-primary btn-rect" data-toggle="modal"><i class='icon icon-white icon-plus'></i> Tambah Tindakan</a><p>
<?php
	if($_POST["tdk"]){
			include_once("../library/koneksi.php");
			mysqli_query($server,"INSERT into tindakan set nm_tindakan='".$_POST["nama"]."', ket='".$_POST["ket"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=tindakan'>";
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil menambah ke database!!</b>
			</div><center>";
	}else if(isset($_POST["tdk"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal menambah ke database!!</b>
			</div><center>";
	}

tindakan(); //memanggil function tindakan
?>
<div class="panel panel-default">
	<div class="panel-body">
		<div class="table-responsive">
			<table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
				<thead>
					<tr>
						<th width="140">Kode Tindakan</th>
						<th>Nama Tindakan</th>
						<th>Keterangan Tindakan</th>
						<th width="90">Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$tndSql = "SELECT * FROM tindakan ORDER BY kd_tindakan DESC";
					$tndQry = mysqli_query($server,$tndSql)  or die ("Query tindakan salah : ".mysqli_error());
					$nomor  = 0; 
					while ($tindakan = mysqli_fetch_array($tndQry)) {
				?>
					<tr>
						<td><?php echo $tindakan['kd_tindakan'];?></td>
						<td><?php echo $tindakan['nm_tindakan'];?></td>
						<td><?php echo $tindakan['ket'];?></td>
						<td>
						  <div class='btn-group'>
						  <a href="?menu=tindakan_del&aksi=hapus&nmr=<?php echo $tindakan['kd_tindakan']; ?>" class="btn btn-xs btn-danger tipsy-kiri-atas" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA INI ?')"><i class="icon-trash icon-white"></i></a> 
						  <a href="?menu=tindakan_edit&aksi=edit&nmr=<?php echo $tindakan['kd_tindakan']; ?>" class="btn btn-xs btn-info tipsy-kiri-atas" title='Edit Data ini'> <i class="icon-edit icon-white"></i> </a>
						  </div>
						</td>
					</tr>
					<?php } ?>
				</tbody>			
			</table>
		</div>
	</div>
</div>