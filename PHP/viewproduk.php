<?
session_start();
include "konek.php";
include"page_koperasi.php";
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Selamat Datang di SI-Coranch</title>
	<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/lala.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon.ico">		
</head>

<body>
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
				</a>
				<a class="brand" href="index.html"> <img alt="SI-Coranch Logo" src="img/Favicon.png" /> <span>SI-Coranch</span></a>				
				<div class="btn-group pull-right" >
					<a class="btn btn-medium" href="logout_koperasi.php">
						<i class="icon-user"></i><span class="hidden-phone"> Logout</span>
					</a>
				</div>
				
				<div class="top-nav nav-collapse">
					<ul class="nav">
						<li><a href="profil_koperasi.php">Profil</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
		<div class="container-fluid">
		<div class="row-fluid">
			<div id="content" class="span10">			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="btn-group pull-right" >
							<a class="btn btn-medium btn-primary" href="tmbhproduk.php">
							<i class="icon-pencil"></i><span class="hidden-phone"> Tambah Produk</span>
							</a>	
					</div>
					<div class="container-fluid">
						<div class="row-fluid">
							<div class="span12">
								<table class="table table-striped" align="center" action="daftarproduk.php">
									<thead>
									<tr>
										<th>Nama</th>
										<th>Harga</th>
										<th>Kategori</th>
										<th>Status</th>
										
										<th>Setting</th>		
									</tr>
									<?include "daftarproduk.php";?>
									</thead>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>