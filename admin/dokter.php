<?php
include_once("../library/koneksi.php");

?>
<h3>Data Dokter</h3><hr>
<a href="#myModal" class="btn btn-primary btn-rect" data-toggle="modal"><i class='icon icon-white icon-plus'></i> Tambah Dokter</a><p>
<?php
session_start();
	if($_POST["dkt"]){
			include_once("../library/koneksi.php");
			mysqli_query($server,"INSERT INTO dokter SET kd_poli='".$_POST["pol"]."', tgl_kunjungan='".time()."', kd_user='".$_POST["user"]."', nm_dokter='".$_POST["nama"]."', sip='".$_POST["sip"]."', no_tlp='".$_POST["no"]."', alamat='".$_POST["alt"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=dokter'>";
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil menambah ke database!!</b>
			</div><center>";
	}else if(isset($_POST["dkt"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal menambah ke database!!</b>
			</div><center>";
	}
	dokter();
?>
<div class="panel panel-default">
	<div class="panel-body">
		<div class="table-responsive">
			<table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
				<thead>
					<tr>
						<th>Kode Dokter</th>
						<th>Tanggal Kunjungan</th>
						<th>Nama Dokter</th>
						<th width="90">Aksi</th>
					</tr>
				</thead>
				<tbody>
			<?php
			
				$kjgQry = mysqli_query($server,"SELECT * FROM dokter ORDER BY kd_dokter DESC")  or die ("Query Dokter salah : ".mysqli_error());
				$nomor  = 0; 
				while ($kjg = mysqli_fetch_array($kjgQry)) {
			?>
					<tr>
						<td><?php echo $kjg['kd_dokter'];?></td>
						<td><?php echo tanggal($kjg['tgl_kunjungan']);?></td>
						<td><?php echo $kjg['nm_dokter'];?></td>
						<td>
						  <div class='btn-group'>
						  <a href="?menu=dokter_del&aksi=hapus&nmr=<?php echo $kjg['kd_dokter']; ?>" class="btn btn-xs btn-danger tipsy-kiri-atas" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA INI ?')"><i class="icon-trash icon-white"></i></a> 
						  <a href="?menu=dokter_edit&aksi=edit&nmr=<?php echo $kjg['kd_dokter']; ?>" class="btn btn-xs btn-info tipsy-kiri-atas" title='Edit Data ini'> <i class="icon-edit icon-white"></i></a>
						  </div>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>