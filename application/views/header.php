<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Aplikasi Pendaftaran Seleksi Terbuka Jabatan Pimpinan Tinggi BKKBN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Seleksi Terbuka Jabatan Pimpinan Tinggi BKKBN" />
	<!-- css -->
	<link href="<?php echo base_url() ?>resources/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url() ?>resources/css/cubeportfolio.min.css" rel="stylesheet" />
	<link href="<?php echo base_url() ?>resources/css/style.css" rel="stylesheet" />


	<!-- Theme skin -->
	<link id="t-colors" href="<?php echo base_url() ?>resources/css/blue.css" rel="stylesheet" />
	
	<link id="bodybg" href="<?php echo base_url() ?>resources/css/on-off-switch.css" rel="stylesheet" type="text/css" />

	<!-- boxed bg -->
	<link id="bodybg" href="<?php echo base_url() ?>resources/css/bootstrap-datepicker.css" rel="stylesheet" type="text/css" />
	<link id="bodybg" href="<?php echo base_url() ?>resources/css/datatables.min.css" rel="stylesheet" type="text/css" />
	<link id="bodybg" href="<?php echo base_url() ?>resources/css/bg1.css" rel="stylesheet" type="text/css" />

</head>
<body>



<div id="wrapper">
	<!-- start header -->
	<header>
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<ul class="topleft-info">
								<li><i class="fa fa-phone"></i> +62 8112811274</li>
							</ul>
						</div>
						<div class="col-md-6">
						<div id="sb-search" class="sb-search">
							<form>
								<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search" title="Click to start searching"></span>
							</form>
						</div>


						</div>
					</div>
				</div>
			</div>	
			
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="<?php echo base_url() ?>resources/img/logo.png" alt="" width="200" height="56" /></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                    	<?php if ( empty( $_SESSION['logged'] )  == '1' ) {
                    		echo '<li class="active"><a href="index.html">Home</a></li>
									<li><a href="pengumuman.html">Pengumuman</a></li>
									<li><a href="index.html#madya">JPT Madya</a></li>
									<li><a href="index.html#pratama">JPT Pratama</a></li>
									<li class="dropdown">
			                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Pendaftaran <i class="fa fa-angle-down"></i></a>
			                            <ul class="dropdown-menu">
			                                <li><a href="daftar.html">JPT Madya</a></li>
			                                <li><a href="daftar.html">JPT Pratama</a></li>
			                            </ul>
			                        </li>
			                        <li><a href="kontak.html">Kontak</a></li>
			                        <li><a href="'.site_url('welcome').'">Sign In</a></li>';
                    	} elseif( $_SESSION['logged'] == 1 && $_SESSION['level'] == 1 ) {
                    		echo '<li><a href="'.site_url('dashboard/index').'">Dashboard</a></li>
			                        <li class="dropdown">
			                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Master <i class="fa fa-angle-down"></i></a>
			                            <ul class="dropdown-menu">
			                                <li><a href="'.site_url('master/periode').'">Periode</a></li>
			                                <li><a href="'.site_url('master/tahapan').'">Tahapan</a></li>
											<li><a href="'.site_url('master/formasi').'">Formasi</a></li>
											<li><a href="admin_persyaratan.html">Persyaratan</a></li>
											<li><a href="admin_dokumen.html">Dokumen</a></li>
			                            </ul>
			                        </li>
			                        <li class="dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Daftar <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu">
			                                <li><a href="'.site_url('daftar/pelamar').'">Pelamar</a></li>
			                                <li><a href="'.site_url('daftar/pengguna').'">Pengguna/Akun</a></li>
											<li><a href="'.site_url('daftar/pengaturan').'">Pengaturan</a></li>
			                            </ul>
									</li>
			                        <li><a href="'.site_url('welcome/logout').'">Sign out</a></li>';
                    	} else {

                    	} ?>
                    	
                        
                    </ul>
                </div>
            </div>
        </div>
	</header>