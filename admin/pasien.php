<?php
include_once("../library/koneksi.php");
?>

<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Pasien</li>
			</ol>
<h3>Data Pasien</h3><hr>
<a href="?menu=tambah_pasien" class="btn btn-primary btn-rect"><i class='icon icon-white icon-plus'></i> Tambah Pasien</a><p>
<div class="panel panel-default">
	<div class="panel-body">
		<div class="table-responsive">
			<table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
				<thead>
					<tr>
						<th>Nomor Pasien</th>
						<th>Nama Pasien</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th>Nomor Telepone</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php
				$pasienSql = "SELECT * FROM pasien ORDER BY no_pasien DESC";
				$pasienQry = mysqli_query($server,$pasienSql)  or die ("Query pasien salah : ".mysqli_error());
				$nomor  = 0; 
				while ($pasien = mysqli_fetch_array($pasienQry)) {
				$nomor++;
				?>
					<tr>
						<td><?php echo $nomor;?></td>
						<td><?php echo $pasien['nm_pasien'];?></td>
						<td><?php echo $pasien['j_kel'];?></td>
						<td><?php echo $pasien['alamat'];?></td>
						<td><?php echo $pasien['no_tlp'];?></td>
						<td>
						  <div class='btn-group'>
						  <a href="?menu=hapus_pasien&aksi=hapus&nmr=<?php echo $pasien['no_pasien']; ?>" class="btn btn-xs btn-danger tipsy-kiri-atas" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA INI ?')"><i class="icon-trash icon-white"></i></a> 
						  <a href="?menu=edit_pasien&aksi=edit&nmr=<?php echo $pasien['no_pasien']; ?>" class="btn btn-xs btn-info tipsy-kiri-atas" title='Edit Data ini'> <i class="icon-edit icon-white"></i> </a>
						  </div>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>