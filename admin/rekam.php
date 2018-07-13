<?php
include_once("../library/koneksi.php");

?>
<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Rekam Medis</li>
			</ol>
<h3>Data Rekam Medis</h3><hr>
<!-- <a href="?menu=rekam_add" class="btn btn-primary btn-rect"><i class='icon icon-white icon-plus'></i> Tambah Rekam Medis</a><p> -->
<a href="#myModal" class="btn btn-primary btn-rect" data-toggle="modal"><i class='icon icon-white icon-plus'></i> Tambah Rekam Medis</a><p>
<?php
session_start();
	if($_POST["rm"]){
			include_once("../library/koneksi.php");
			mysqli_query($server,"INSERT into rekam_medis set kd_tindakan='".$_POST["tdk"]."', kd_obat='".$_POST["obt"]."', kd_user='".$_POST["pn"]."', no_pasien='".$_POST["pas"]."', diagnosa='".$_POST["diag"]."', resep='".$_POST["res"]."', keluhan='".$_POST["kel"]."', ket='".$_POST["ket"]."', tgl_pemeriksaan='".date('d-M-Y')."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=rekam'>";
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil menambah ke database!!</b>
			</div><center>";
	}else if(isset($_POST["rm"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal menambah ke database!!</b>
			</div><center>";
	}
	rekam();
?>
<div class="panel panel-default">
	<div class="panel-body">
		<div class="table-responsive">
			<table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
				<thead>
					<tr>
						<th width="150">No Rekam Medis</th>
						<th>No Pasien</th>
						<th>Diagnosa</th>
						<th>Resep</th>
						<th>Tanggal Pemeriksaan</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$rmSql = "SELECT * FROM rekam_medis ORDER BY no_rm DESC";
					$rmQry = mysqli_query($server,$rmSql)  or die ("Query Rekam Medis salah : ".mysqli_error());
					$nomor  = 0; 
					while ($rm = mysqli_fetch_array($rmQry)) {
					$nomor++;
				?>
					<tr>
						<td><?php echo $rm['no_rm'];?></td>
						<td><?php echo $rm['no_pasien'];?></td>
						<td><?php echo ucwords($rm['diagnosa']);?></td>
						<td><?php echo $rm['resep'];?></td>
						<td><?php echo $rm['tgl_pemeriksaan'];?></td>
						<td>
						  <div class='btn-group'>
						  <a href="?menu=rekam_del&aksi=hapus&nmr=<?php echo $rm['no_rm']; ?>" class="btn btn-xs btn-danger tipsy-kiri-atas" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA INI ?')"><i class="icon-trash icon-white"></i></a> 
						  <a href="?menu=rekam_edit&aksi=edit&nmr=<?php echo $rm['no_rm']; ?>" class="btn btn-xs btn-info tipsy-kiri-atas" title='Edit Data ini'> <i class="icon-edit icon-white"></i> </a>
						  </div>
						</td>
					</tr>
					<?php } ?>
				</tbody>			
			</table>
		</div>
	</div>
</div>