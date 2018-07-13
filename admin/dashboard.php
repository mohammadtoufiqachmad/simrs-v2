<?php
include_once("../library/koneksi.php");

?>
<ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Dashboard</li>
            </ol>
                        <div class="col-lg-12">
							<div class="panel panel-default">
                            <div class="panel-body">
									<div class="panel-heading">
										Jumlah Aktivitas
										</div>
										<div class="row">
            
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="panel panel-blue panel-widget ">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked bag"><use xlink:href="#stroked-male-user"></use></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large">
                            <?php
                                $query = mysqli_query($server,"SELECT * FROM pasien")or die(mysqli_error());
                                $pasien = mysqli_num_rows($query);
                                $jumlah = $pasien;
                                
                                echo $jumlah;
                            ?>
                            </div>
                            <div class="text-muted">Pasien</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="panel panel-orange panel-widget">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked empty-message"><use xlink:href="#stroked-male-user"></use></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large">
                            <?php
                                $query = mysqli_query($server,"SELECT * FROM dokter")or die("Query Obat salah : ".mysqli_error());
                                $dokter = mysqli_num_rows($query);
                                $jumlah = $dokter;
                                
                                echo $jumlah;
                            ?>
                            </div>
                            <div class="text-muted">Dokter</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="panel panel-teal panel-widget">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large">
                           <?php
                                $query = mysqli_query($server,"SELECT * FROM login")or die("Query Obat salah : ".mysqli_error());
                                $login = mysqli_num_rows($query);
                                $jumlah = $login;
                                
                                echo $jumlah;
                            ?>
                            </div>
                            <div class="text-muted">User</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="panel panel-red panel-widget">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large">
                           <?php
                                $query = mysqli_query($server,"SELECT * FROM kunjungan")or die("Query Obat salah : ".mysqli_error());
                                $kunjungan = mysqli_num_rows($query);
                                $jumlah = $kunjungan;
                                
                                echo $jumlah;
                            ?>
                            </div>
                            <div class="text-muted">Kunjungan</div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
        </div>
        </div>
        
		</div>
									