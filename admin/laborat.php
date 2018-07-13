<?php
include_once("../library/koneksi.php");

?>
<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Laboratorium</li>
			</ol>
<h3>Data Laboratorium</h3><hr>
<a href="#myModal" class="btn btn-primary btn-rect" data-toggle="modal"><i class='icon icon-white icon-plus'></i> Tambah Laboratorium</a><p>
<?php
session_start();
	if($_POST["lab"]){
			include_once("../library/koneksi.php");
			mysqli_query($server,"INSERT into laboratorium set no_rm='".$_POST["tgl"]."', hasil_lab='".$_POST["hasil"]."', ket='".$_POST["ket"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=laborat'>";
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil menambah ke database!!</b>
			</div><center>";
	}else if(isset($_POST["lab"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal menambah ke database!!</b>
			</div><center>";
	}
	laborat();
?>
<div class="panel panel-default">
	<div class="panel-body">
		<div class="table-responsive">
			<table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
				<thead>
					<tr>
						<th width="20">Nomor</th>
						<th width="160">Kode Laboratorium</th>
						<th width="150">No Rekam Medis</th>
						<th>Hasil Lab</th>
						<th>Keterangan</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php
				$labSql = "SELECT * FROM laboratorium ORDER BY kd_lab DESC";
				$labQry = mysqli_query($server,$labSql)  or die ("Query laboratorium salah : ".mysqli_error());
				$nomor  = 0; 
				while ($lab = mysqli_fetch_array($labQry)) {
				$nomor++;
				?>
					<tr>
						<td><?php echo $nomor;?></td>
						<td><?php echo $lab['kd_lab'];?></td>
						<td><?php echo $lab['no_rm'];?></td>
						<td><?php echo $lab['hasil_lab'];?></td>
						<td><?php echo $lab['ket'];?></td>
						<td>
						  <div class='btn-group'>
						  <a href="?menu=laborat_del&aksi=hapus&nmr=<?php echo $lab['kd_lab']; ?>" class="btn btn-xs btn-danger tipsy-kiri-atas" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA INI ?')"><i class="icon-trash icon-white"></i></a> 
						  <a href="?menu=laborat_edit&aksi=edit&nmr=<?php echo $lab['kd_lab']; ?>" class="btn btn-xs btn-info tipsy-kiri-atas" title='Edit Data ini'> <i class="icon-edit icon-white"></i> </a>
						  </div>
						</td>
					</tr>
			<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>