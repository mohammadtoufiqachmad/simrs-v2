<?php
function tindakan(){ 
?>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Tambah Tindakan</h4>
            </div>
            <div class="modal-body">
                <form action="" method="post">
	 <div class="form-group">
        <label class="control-label col-lg">Nama Tindakan</label>
        <input type="text" autofocus required class="form-control" name="nama"/>
	 </div>
     <div class="form-group">
        <label class="control-label col-lg">Keterangan Tindakan</label>
        <textarea type="text" required class="form-control" name="ket"></textarea>
      </div>
		<input type="submit" class="btn btn-primary" name="tdk" value="Tambah"/>
        <input type="reset" class="btn btn-warning" value="Close" data-dismiss="modal"/>
</form>
            </div>
        </div>
    </div>
</div><!-- Akhir Tindakan -->
  
<?php
}
function obat(){
?>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Tambah Obat</h4>
            </div>
            <div class="modal-body">
				<form action="" method="post">
					<div class="form-group">
						<label class="control-label col-lg">Nama Obat</label>
						<input type="text"  required class="form-control" name="nama"/>
					</div>
					<div class="form-group">
						<label class="control-label col-lg">Jumlah Obat</label>
						<input type="text" required class="form-control" name="jml"/>
					</div>
					<div class="form-group">
						<label class="control-label col-lg">Ukuran</label>
						<input type="text" required class="form-control" name="ukr"/>
					</div>
					<div class="form-group">
						<label class="control-label col-lg">Harga (Rp.)</label>
						<input type="text" required class="form-control" name="hrg"/>
					</div>
						<input type="submit" class="btn btn-primary" name="obt" value="Tambah"/>
						<input type="reset" class="btn btn-warning" value="Close" data-dismiss="modal"/>
				</form>
            </div>
        </div>
    </div>
</div>
<?php
}
function poli(){
?>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Tambah Poliklinik</h4>
            </div>
            <div class="modal-body">
				<form action="" method="post">
					<div class="form-group">
						<label class="control-label col-lg">Nama Poliklinik</label>
						<input type="text"  required class="form-control" name="nama"/>
					</div>
					<div class="form-group">
						<label class="control-label col-lg">Lantai Poliklinik</label>
						<input type="text" required class="form-control" name="lnt"/>
					</div>
						<input type="submit" class="btn btn-primary" name="pol" value="Tambah"/>
						<input type="reset" class="btn btn-warning" value="Close" data-dismiss="modal"/>
				</form>
            </div>
        </div>
    </div>
</div>
<?php }
function tanggal($tgl){
		$hari = date("D",$tgl);
		$bulan = date("m",$tgl);
		$hariEn = array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");
		$hariId = array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu");
		$hariRep = str_replace($hariEn,$hariId,$hari); /*(dari apa,menjadi apa,apa yang akan diganti)*/
		$bulanEn = array("01","02","03","04","05","06","07","08","09","10","11","12");
		$bulanId = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
		$bulanRep = str_replace($bulanEn,$bulanId,$bulan); /*(dari apa,menjadi apa,apa yang akan diganti)*/
		echo date("d",$tgl) . " " . $bulanRep . " " . date("Y",$tgl);
}
function user(){
?>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Tambah User</h4>
            </div>
            <div class="modal-body">
				<form action="" method="post">
					<div class="form-group">
						<label class="control-label col-lg">Username</label>
						<input type="text"  required class="form-control" name="usr"/>
					</div>
					<div class="form-group">
						<label class="control-label col-lg">Password</label>
						<input type="password" required class="form-control" name="pas"/>
					</div>
					<div class="form-group">
						<label class="control-label col-lg">Nama Lengkap</label>
						<input type="text" required class="form-control" name="nma"/>
					</div>
					<div class="form-group">
						<label class="control-label col-lg">Alamat</label>
						<input type="text" required class="form-control" name="alt"/>
					</div>
						<input type="submit" class="btn btn-primary" name="user" value="Tambah"/>
						<input type="reset" class="btn btn-warning" value="Close" data-dismiss="modal"/>
				</form>
            </div>
        </div>
    </div>
</div>
<?php
}
function kunjungan(){
?>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Tambah Kunjungan</h4>
            </div>
            <div class="modal-body">
				<form action="" method="post">
					<div class="form-group">
							<label class="control-label col-lg">Nama Pasien</label>
							<?php
								include ("koneksi.php");
								$pas = "SELECT * FROM pasien";
								$pasDb = mysqli_query($server,$pas) or die(mysqli_error());
								$pasR = mysqli_fetch_assoc($pasDb);
							?>
							<div class="col-lg">
								<select name="nama" class="form-control">
							<?php
							do {
							?>
									<option value="<?php echo $pasR['no_pasien'];?>"><?php echo $pasR['nm_pasien'];?></option>
							<?php
							} while($pasR=mysqli_fetch_assoc($pasDb));
							?>	
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg">Kode Poliklinik</label>
							<?php
								include ("koneksi.php");
								$pol = "SELECT * FROM poliklinik";
								$polDb = mysqli_query($server,$pol) or die(mysqli_error());
								$polR = mysqli_fetch_assoc($polDb);
							?>
							<div class="col-lg">
								<select name="pol" class="form-control">
							<?php
							do {
							?>
									<option value="<?php echo $polR['kd_poli'];?>"><?php echo $polR['nm_poli'];?></option>
							<?php
							} while($polR=mysqli_fetch_assoc($polDb));
							?>	
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg">&nbsp;</label>
							<div class="col-lg">
								<input type="text" style="display:none" value="<?php echo date("Y-m-d") ?>" name="tgl" class="form-control"/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg">&nbsp;</label>
							<div class="col-lg">
								<input type="text" value="<?php echo date("g:i a")?>" style="display:none" name="jam" class="form-control"/>
							</div>
						</div>
						
						<input type="submit" class="btn btn-primary" name="kjg" value="Tambah"/>
						<input type="reset" class="btn btn-warning" value="Close" data-dismiss="modal"/>
				</form>
            </div>
        </div>
    </div>
</div>
<?php }
function laborat(){
?>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Tambah Pasien</h4>
            </div>
            <div class="modal-body">
				<form action="" method="post">
					<div class="form-group">
							<label class="control-label col-lg">Tanggal Rekam Medis</label>
							<?php
								include("koneksi.php");
								$rm = "SELECT * FROM rekam_medis";
								$rmDb = mysqli_query($server,$rm) or die(mysqli_error());
								$rmR = mysqli_fetch_assoc($rmDb);
							?>
							<div class="col-lg">
								<select name="tgl" class="form-control">
							<?php
							do {
							?>
									<option value="<?php echo $rmR['no_rm'];?>"><?php echo $rmR['tgl_pemeriksaan'];?></option>
							<?php
							} while($rmR=mysqli_fetch_assoc($rmDb));
							?>	
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg">Hasil Laborat</label>
							<div class="col-lg">
								<input type="text" required name="hasil" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg">Keterangan</label>
							<div class="col-lg">
								<textarea type="text" required name="ket" class="form-control"></textarea>
							</div>
						</div>
						<input type="submit" class="btn btn-primary" name="lab" value="Tambah"/>
						<input type="reset" class="btn btn-warning" value="Close" data-dismiss="modal"/>
				</form>
            </div>
        </div>
    </div>
</div>
<?php }
function dokter(){
?>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Tambah Dokter</h4>
            </div>
            <div class="modal-body">
				<form action="" method="post">
					<div class="form-group">
							<label class="control-label col-lg">Kode Poliklinik</label>
							<?php
								include ("koneksi.php");
								$pol = "SELECT * FROM poliklinik";
								$polDb = mysqli_query($server,$pol) or die(mysqli_error());
								$polR = mysqli_fetch_assoc($polDb);
							?>
							<div class="col-lg">
								<select name="pol" class="form-control">
							<?php
							do {
							?>
									<option value="<?php echo $polR['kd_poli'];?>"><?php echo $polR['nm_poli'];?></option>
							<?php
							} while($polR=mysqli_fetch_assoc($polDb));
							?>	
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg">Kode User</label>
							<?php
								include ("koneksi.php");
								$pol2 = "SELECT * FROM login";
								$polDb2 = mysqli_query($server,$pol2) or die(mysqli_error());
								$polR2 = mysqli_fetch_assoc($polDb2);
							?>
							<div class="col-lg">
								<select name="user" class="form-control">
							<?php
							do {
							?>
									<option value="<?php echo $polR2['kd_user'];?>"><?php echo $polR2['nama'];?></option>
							<?php
							} while($polR2=mysqli_fetch_assoc($polDb2));
							?>	
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg">Nama Dokter</label>
							<div class="col-lg">
								<input type="text" required class="form-control" name="nama"/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg">SIP</label>
							<div class="col-lg">
								<input type="text" required class="form-control" name="sip"/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg">Tempat Lahir</label>
							<div class="col-lg">
								<input type="text" required class="form-control" name="tmp"/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg">Nomor Telepohne</label>
							<div class="col-lg">
								<input type="text" required class="form-control" name="no"/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg">Alamat</label>
							<div class="col-lg">
								<input type="text" required class="form-control" name="alt"/>
							</div>
						</div>
						<input type="submit" class="btn btn-primary" name="dkt" value="Tambah"/>
						<input type="reset" class="btn btn-warning" value="Close" data-dismiss="modal"/>
				</form>
            </div>
        </div>
    </div>
</div>
<?php }
function rekam(){
?>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Tambah Rekam Medis</h4>
            </div>
            <div class="modal-body">
				<form action="" method="post">
					<div class="form-group">
							<label class="control-label col-lg">Tindakan</label>
							<?php
								include ("koneksi.php");
								$tdk = "SELECT * FROM tindakan";
								$tdkDb = mysqli_query($server,$tdk) or die(mysqli_error());
								$tdkR = mysqli_fetch_assoc($tdkDb);
							?>
							<div class="col-lg">
								<select name="tdk" class="form-control">
							<?php
							do {
							?>
									<option value="<?php echo $tdkR['kd_tindakan'];?>"><?php echo $tdkR['nm_tindakan'];?></option>
							<?php
							} while($tdkR=mysqli_fetch_assoc($tdkDb));
							?>	
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg">Obat</label>
							<?php
								include("koneksi.php");
								$obt = "SELECT * FROM obat";
								$obtDb = mysqli_query($server,$obt) or die(mysqli_error());
								$obtR = mysqli_fetch_assoc($obtDb);
							?>
							<div class="col-lg">
								<select name="obt" class="form-control">
							<?php
							do {
							?>
									<option value="<?php echo $obtR['kd_obat'];?>"><?php echo $obtR['nm_obat'];?></option>
							<?php
							} while($obtR=mysqli_fetch_assoc($obtDb));
							?>	
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg">Pengentri</label>
							<?php
								include("koneksi.php");
								$pn = "SELECT * FROM login";
								$pnDb = mysqli_query($server,$pn) or die(mysqli_error());
								$pnR = mysqli_fetch_assoc($pnDb);
							?>
							<div class="col-lg">
								<select name="pn" class="form-control">
							<?php
							do {
							?>
									<option value="<?php echo $pnR['kd_user'];?>"><?php echo $pnR['nama'];?></option>
							<?php
							} while($pnR=mysqli_fetch_assoc($pnDb));
							?>	
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg">Pasien</label>
							<?php
								include("koneksi.php");
								$pas = "SELECT * FROM pasien order by nm_pasien asc";
								$pasDb = mysqli_query($server,$pas) or die(mysqli_error());
								$pasR = mysqli_fetch_assoc($pasDb);
							?>
							<div class="col-lg">
								<select name="pas" class="form-control">
							<?php
							do {
							?>
									<option value="<?php echo $pasR['no_pasien'];?>"><?php echo $pasR['nm_pasien'];?></option>
							<?php
							} while($pasR=mysqli_fetch_assoc($pasDb));
							?>	
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg">Diagnosa</label>
							<div class="col-lg">
								<select name="diag" class="form-control">
									<option value="gejala">Gejala</option>
									<option value="terjangkit">Terjangkit</option>
									<option value="stadium">Stadium</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg">Resep</label>
							<div class="col-lg">
								<input type="text" required name="res" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg">Keluhan</label>
							<div class="col-lg">
								<textarea type="text" required name="kel" class="form-control"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg">Keterangan</label>
							<div class="col-lg">
								<textarea type="text" required name="ket" class="form-control"></textarea>
							</div>
						</div>
						<input type="submit" class="btn btn-primary" name="rm" value="Tambah"/>
						<input type="reset" class="btn btn-warning" value="Close" data-dismiss="modal"/>
				</form>
            </div>
        </div>
    </div>
</div>
<?php
}
?>
