<?php
include_once("../library/koneksi.php");
?>
<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Poliklinik</li>
			</ol>
<h3>Data Poliklinik</h3><hr>
<a href="#myModal" class="btn btn-primary btn-rect" data-toggle="modal"><i class='icon icon-white icon-plus'></i> Tambah Poliklinik</a><p>
<?php
	if($_POST["pol"]){
			include_once("../library/koneksi.php");
			mysqli_query($server,"INSERT into poliklinik set nm_poli='".$_POST["nama"]."', lantai='".$_POST["lnt"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=poliklinik'>";
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil menambah ke database!!</b>
			</div><center>";
	}else if(isset($_POST["pol"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal menambah ke database!!</b>
			</div><center>";
	}

poli(); //memanggil function poli
?>
<div class="panel panel-default">
	<div class="panel-body">
		<div class="table-responsive">
			<table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
				<thead>
					<tr>
						<th width="140">Kode Poliklinik</th>
						<th>Nama Poliklinik</th>
						<th>Lantai Poliklinik</th>
						<th width="90">Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$poliSql = "SELECT * FROM poliklinik ORDER BY kd_poli DESC";
					$poliQry = mysqli_query($server,$poliSql)  or die ("Query Poliklinik salah : ".mysqli_error());
					$nomor  = 0; 
					while ($poli = mysqli_fetch_array($poliQry)) {
				?>
					<tr>
						<td><?php echo $poli['kd_poli'];?></td>
						<td><?php echo $poli['nm_poli'];?></td>
						<td><?php echo $poli['lantai'];?></td>
						<td>
						  <div class='btn-group'>
						  <a href="?menu=poliklinik_del&aksi=hapus&nmr=<?php echo $poli['kd_poli']; ?>" class="btn btn-xs btn-danger tipsy-kiri-atas" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA INI ?')"><i class="icon-trash icon-white"></i></a> 
						  <a href="?menu=poliklinik_edit&aksi=edit&nmr=<?php echo $poli['kd_poli']; ?>" class="btn btn-xs btn-info tipsy-kiri-atas" title='Edit Data ini'> <i class="icon-edit icon-white"></i> </a>
						  </div>
						</td>
					</tr>
					<?php } ?>
				</tbody>			
			</table>
		</div>
	</div>
</div>