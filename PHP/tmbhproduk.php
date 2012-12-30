<?
session_start();
include"konek.php";
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
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
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

			<div id="content" class="span5">
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="breadcrumb">
						<h2><i class="icon-picture"></i>Tambah Produk
						<div class="btn-group pull-right" >
							<a class="btn btn-medium btn-primary" href="viewproduk.php">
							<i class="icon-tasks"></i><span class="hidden-phone"> Daftar Produk</span>
							</a>	
						</div>
						</h2>
					</div>

					<div class="box-content">
						<div class="container-fluid">
							<div class="row-fluid">
								<div class="span12">
								<form name="input" action="saveproduk.php" method="post" enctype="multipart/form-data" align="center">
								<table>
								<thead>
								<tr>
									<td>
										<div align="left">Nama Produk</div>
									</td>
									<td>
										<span align="left">:   </span>
									</td>
									<td>
										<div class="input-prepend">
												<input class="input-large" type="nama_produk" name="nama_produk" id="nama_produk" autofocus="autofocus" required="required">
										</div>
									</td>
								</tr>
								
								<tr>
									<td>
										<div align="left">Harga Produk</div>
									</td>
									<td>
										<span align="left">:   </span>
									</td>
									<td>
										<div class="input-prepend">
												<input class="input-large" type="harga_produk" name="harga_produk" id="harga_produk" autofocus="autofocus" required="required">
										</div>
									</td>
								</tr>
								
								<tr>
									<td>
										<div align="left">Kategori Produk</div>
									</td>
									<td>
										<span align="left">:</span>
									</td>
									<td>
										<select name="kategori_produk">
											<option>Mamalia</option>
											<option>Unggas</option>
											<option>Hasil Ternak</option>
										</select>
									</td>
								</tr>
									
								<tr>
									<td>
										<div align="left">Status Produk</div>
									</td>
									<td>
										<span align="left">:</span>
									</td>
									<td>
										<select name="status_produk">
											<option>Tersedia</option>
											<option>Terjual</option>
										</select>
									</td>
								</tr>
								
								<tr>
									<td>
										<div align="left">Deskripsi Produk</div>
									</td>
									<td>
										<span align="left">:</span>
									</td>
									<td>
										<div class="input-prepend">
												<textarea class="span12" rows="11" name="deskripsi_produk"></textarea>
										</div>
									</td>
								</tr>

								<tr>
									<td>
										<div align="left">Gambar Produk</div>
									</td>
									<td>
										<span align="left">:</span>
									</td>
									<td>
										<div class="input-prepend">
											<input name="produk" id="produk" type="file">
										</div>
									</td>
								</tr>								
								
								</thead>
								</table>
									<form>			
										<input class="btn btn-medium btn-primary" input name="simpan" type="submit" id="simpan" value="Simpan">
									<input class="btn btn-medium" type="reset" value="Reset">
									
									</form>
								</form>
								
								</div>	
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