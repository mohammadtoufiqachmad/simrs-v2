       <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
       <form role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </form>
            <ul class="nav menu">
                <li class="active"><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg></i> Dashboard</a></li>
                <li id="active"><a href="?menu=pasien"><i class="icon-paper-clip"> </i> Pasien</a></li>
                <li><a href="?menu=laborat"><i class="icon-paper-clip"></i> Laboratorium</a></li>
                <li><a href="?menu=tindakan"><i class="icon-paper-clip"></i> Tindakan</a></li>
                <li><a href="?menu=obat"><i class="icon-paper-clip"></i> Obat-obatan</a></li>
                <li><a href="?menu=kunjungan"><i class="icon-paper-clip"></i> Kunjungan</a></li>
                <li><a href="?menu=dokter"><i class="icon-paper-clip"></i> Dokter</a></li>
                <li><a href="?menu=poliklinik"><i class="icon-paper-clip"></i> Poliklinik</a></li>
                <li><a href="?menu=rekam"><i class="icon-paper-clip"></i> Rekam Medis</a></li>
                <li><a href="?menu=user"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Daftar User</a></li>
            </ul>           
            <div class="form-group">
            <hr>
                <center>
               <a href="">SIMRS</a><br>
               <p style="font-size: 10px;">SISTEM INFORMASI RUMAH SAKIT</p>
               </center>
            </div>
        </div>
		
		
		<div id="content">
            <div class="inner">
                <!-- <div class="row">
                    <div class="col-lg-12">
						<h1 style="font-family: calibri; font-weight: bold;">SIRS Admin</h1>
                    </div>
                </div> -->
                <!-- <hr/> -->
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
						<?php
						if($_GET["menu"]){
							include_once("load.php");
						}else{
							include_once("dashboard.php");
						}
						?>
					</div>
                </div>
                  <!--END BLOCK SECTION -->
                <hr />
            </div>
        </div>
