<?
session_start();
include "konek.php";
include"page.php";
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
					<a class="btn btn-medium" href="logout.php">
						<i class="icon-user"></i><span class="hidden-phone"> Logout</span>
					</a>
				</div>
				
				<div class="top-nav nav-collapse">
					<ul class="nav">
						<li><a href="#">Visit Site</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
		<div class="container-fluid">
		<div class="row-fluid">
				
			<!-- Daftar Menu -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Main</li>
						<li><a href="dashboard.php"><i class="icon-tasks"></i><span class="hidden-tablet"> Dashboard </span></a></li>
						<li><a href="daftarartikel.php"><i class="icon-tasks"></i><span class="hidden-tablet"> Artikel </span></a></li>
						
						<li><a class="" href="koperasi.php"><i class="icon-eye-open"></i><span class="hidden-tablet"> Koperasi
						<ul><a class="" href="koperasi.php"><i class="icon-eye-open"></i><span class="hidden-tablet" role = "treeitem"> Daftar Koperasi </span></a></ul>
						<ul><a class="" href="tambahkoperasi.php"><i class="icon-Pencil"></i><span class="hidden-tablet" role = "treeitem"> Tambah Koperasi </span></a></ul>
						</span></a></li>
						
						<li><a class="" href="profil.php"><i class="icon-edit"></i><span class="hidden-tablet"> Profil </span></a></li>
					</ul>
				</div>
			</div>
			<div id="content" class="span10">			
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="dashboard.php">Dashboard </a> <span class="divider">/</span>
					</li>
					<li>
						<a href="koperasi.php">Koperasi </a> <span class="divider">/</span>
					</li>
					<li>
						<a>Tambah Koperasi</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="breadcrumb">
						<h2><i class="icon-eye-open"></i>Tambah Koperasi</h2>
					</div>
					
					
					<div class="box-content">
						<div class="container-fluid">
							<div class="row-fluid">
								<div class="span12">
								<form name="input" action="savekoperasi.php" method="post" enctype="multipart/form-data" align="center">
								<table>
								<thead>
								<tr>
									<td>
										<div align="left">Nama Koperasi</div>
									</td>
									<td>
										<span align="left">:   </span>
									</td>
									<td>
										<div class="input-prepend">
												<input class="input-large" type="nama_koperasi" name="nama_koperasi" id="nama_koperasi" autofocus="autofocus" required="required">
										</div>
									</td>
								</tr>
								
								<tr>
									<td>
										<div align="left">Username Koperasi</div>
									</td>
									<td>
										<span align="left">:   </span>
									</td>
									<td>
										<div class="input-prepend">
												<input class="input-large" type="username" name="username" id="username" autofocus="autofocus" required="required">
										</div>
									</td>
								</tr>
									
								<tr>
									<td>
										<div align="left">Email Koperasi</div>
									</td>
									<td>
										<span align="left">:</span>
									</td>
									<td>
										<div class="input-prepend">
												<input class="input-large" type="email_koperasi" name="email_koperasi" id="email_koperasi" autofocus="autofocus" required="required">
										</div>
									</td>
								</tr>
								
								<tr>
									<td>
										<div align="left">Password Koperasi</div>
									</td>
									<td>
										<span align="left">:</span>
									</td>
									<td>
										<div class="input-prepend">
												<input class="input-large" type="password" name="pass" id="pass" autofocus="autofocus" required="required">
										</div>
									</td>
								</tr>

								<tr>
									<td>
										<div align="left">Alamat Koperasi</div>
									</td>
									<td>
										<span align="left">:</span>
									</td>
									<td>
										<div class="input-prepend">
												<input class="input-large" type="alamat_koperasi" name="alamat_koperasi" id="alamat_koperasi" autofocus="autofocus" required="required">
										</div>
									</td>
								</tr>

								<tr>
									<td>
										<div align="left">Kecamatan Koperasi</div>
									</td>
									<td>
										<span align="left">:</span>
									</td>
									<td>
										<select name="kecamatan_koperasi">
											<option>Klojen</option>
											<option>Blimbing</option>
											<option>Kedungkandang</option>
											<option>Lowok Waru</option>
											<option>Sukun</option>
										</select>
									</td>
								</tr>

								<tr>
									<td>
										<div align="left">Deskripsi Koperasi</div>
									</td>
									<td>
										<span align="left">:</span>
									</td>
									<td>
										<div class="input-prepend">
												<textarea class="span12" rows="11" name="deskripsi_koperasi"></textarea>
										</div>
									</td>
								</tr>

								<tr>
									<td>
										<div align="left">Logo Koperasi</div>
									</td>
									<td>
										<span align="left">:</span>
									</td>
									<td>
										<div class="input-prepend">
											<input name="logo" id="logo" type="file">
										</div>
									</td>
								</tr>								
								
								<tr>
									<td>
										<div align="left">No. Telphone Koperasi</div>
									</td>
									<td>
										<span align="left">:</span>
									</td>
									<td>
										<div class="input-prepend">
												<input class="input-large" type="kontak_koperasi" name="kontak_koperasi" id="kontak_koperasi" autofocus="autofocus" required="required">
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