<?php
include_once("../library/koneksi.php");

?>
<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Kunjungan</li>
			</ol>
<h3>Data Kunjungan</h3><hr>
<a href="#myModal" class="btn btn-primary btn-rect" data-toggle="modal"><i class='icon icon-white icon-plus'></i> Tambah Kunjungan</a><p>
<?php
session_start();
	if($_POST["kjg"]){
			include_once("../library/koneksi.php");
			mysqli_query($server,"INSERT into kunjungan set no_pasien='".$_POST["nama"]."', kd_poli='".$_POST["pol"]."', tgl_kunjungan='".$_POST["tgl"]."', jam_kunjungan='".$_POST["jam"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=kunjungan'>";
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil menambah ke database!!</b>
			</div><center>";
	}else if(isset($_POST["kjg"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal menambah ke database!!</b>
			</div><center>";
	}
	kunjungan();
?>
<div class="panel panel-default">
	<div class="panel-body">
		<div class="table-responsive">
			<table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
				<thead>
					<tr>
						<th>Kode Kunjungan</th>
						<th>Tanggal Kunjungan</th>
						<th>Nomor Pasien</th>
						<th>Kode Poliklinik</th>
						<th>Jam Kunjungan</th>
						<th width="90">Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php
				$kjgSql = "SELECT * FROM kunjungan ORDER BY kd_kunjungan DESC";
				$kjgQry = mysqli_query($server,$kjgSql)  or die ("Query Kunjungan salah : ".mysqli_error());
				while ($kjg = mysqli_fetch_array($kjgQry)) {
				?>
					<tr>
						<td><?php echo $kjg['kd_kunjungan'];?></td>
						<td><?php echo $kjg['tgl_kunjungan'];?></td>
						<td><?php echo $kjg['no_pasien'];?></td>
						<td><?php echo $kjg['kd_poli'];?></td>
						<td><?php echo $kjg['jam_kunjungan'];?></td>
						<td>
						  <div class='btn-group'>
						  <a href="?menu=kunjungan_del&aksi=hapus&nmr=<?php echo $kjg['kd_kunjungan']; ?>" class="btn btn-xs btn-danger tipsy-kiri-atas" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA INI ?')"><i class="icon-trash icon-white"></i></a> 
						  <a href="?menu=kunjungan_edit&aksi=edit&nmr=<?php echo $kjg['kd_kunjungan']; ?>" class="btn btn-xs btn-info tipsy-kiri-atas" title='Edit Data ini'> <i class="icon-edit icon-white"></i> </a>
						  </div>
						</td>
					</tr>
					<?php } ?>
				</tbody>			
			</table>
		</div>
	</div>
</div>