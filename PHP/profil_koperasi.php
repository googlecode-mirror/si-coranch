<?php
session_start();
include "konek.php";
include"page_koperasi.php";
$ada= mysql_query("SELECT*FROM koperasi where id_koperasi=".$_SESSION['id_koperasi']);
while($data= mysql_fetch_array($ada)){
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
	<link href="css/home.css" rel="stylesheet">
	<link href="css/home1.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon.ico">		
</head>

<body>
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="brand" href="index1.php"> <img alt="SI-Coranch Logo" src="img/Favicon.png" /> <span>SI-Coranch</span></a>				
				<div class="btn-group pull-right" >
					<a class="btn btn-medium" href="logout_koperasi.php">
						<i class="icon-user"></i><span class="hidden-phone"> Logout</span>
					</a>
				</div>
			</div>
		</div>
	</div>
		<div class="container-fluid">
		<div class="row-fluid">
				
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Selamat Datang, <?php echo $data['nama_koperasi']; ?> !</li>
						
						<li><a href="viewproduk.php"><i class="icon-tasks"></i><span class="hidden-tablet"> Produk </span></a></li>
						
						<li><a href="profil_koperasi.php"><i class="icon-user"></i><span class="hidden-tablet"> Profil 
						<ul><a class="" href="edit_koperasi.php".$data['id_koperasi'].><i class="icon-Pencil"></i><span class="hidden-tablet" role = "treeitem"> Ubah Profil </span></a></ul>
						<ul><a class="" href="ubah_password_koperasi.php"><i class="icon-Pencil"></i><span class="hidden-tablet" role = "treeitem"> Ubah Password </span></a></ul>
						</span></a>
						</li>
						
					</ul>
				</div>
			</div>
			
			<div id="content" class="span10">			
                <ul class="breadcrumb"> 
					<li>
						<a href="index1.php">Home </a> <span class="divider">/</span>
					</li>
					<li>
						<a>Profil</a>
					</li>
				</ul>
			</div>
			
			<div id="content" class="span10">
			<?php
				if (!empty($_GET['message']) && $_GET['message'] == 'success') {
					echo '<div class="alert alert-success">Password Berhasil Diubah
					<button class="close" data-dismiss="alert">&times;
					</button>
					</div>';
				}
				
				if (!empty($_GET['message']) && $_GET['message'] == 'warning') {
					echo '<div class="alert alert-error">Perubahan Password Dibatalkan!!
					<button class="close" data-dismiss="alert">&times;
					</button>
					</div>';
				}
			?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="breadcrumb">
						<h2><i class="icon-eye-open"></i>Profil</h2>
					</div>
					
					<div class="box-content">
						<div class="container-fluid">
							<div class="row-fluid">
							<div class="span2">
							<?
							echo '<td class="dl-horizontal">';
							if ($data["logo"] != "") echo '<dt><img src="'.$data["logo"].'" class="img-rounded" style="max-height:200px;max-width:200px;"></dt>'; 
							else echo '<td><img src="img/koperasi.png" class="img-rounded" style="max-height:200px;max-width:200px;"></td>';
							?>
							</div>
								<div class="span10">
								<form name="input" method="post" enctype="multipart/form-data" align="center">
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
										<div>
												<?php echo $data['nama_koperasi']; ?>
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
										<div>
												<?php echo $data['username']; ?>
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
										<div>
												<?php echo $data['email_koperasi']; ?>
										</div>
									</td>
								</tr>

								<tr>
									<td>
										<div align="left">Alamat </div>
									</td>
									<td>
										<span align="left">:</span>
									</td>
									<td>
										<div>
												<?php echo $data['alamat_koperasi']; ?>
										</div>
									</td>
								</tr>

								<tr>
									<td>
										<div align="left">Kecamatan</div>
									</td>
									<td>
										<span align="left">:</span>
									</td>
									<td>
									<div><?php echo $data['kecamatan_koperasi']; ?>
									</div>
									</td>
								</tr>

								<tr>
									<td>
										<div align="left">Deskripsi </div>
									</td>
									<td>
										<span align="left">:</span>
									</td>
									<td>
										<div>
												<?php echo $data['deskripsi_koperasi']; ?>
										</div>
									</td>
								</tr>				
								
								<tr>
									<td>
										<div align="left">No. Telphone </div>
									</td>
									<td>
										<span align="left">:</span>
									</td>
									<td>
										<div>
												<?php echo $data['kontak_koperasi']; ?>
										</div>
									</td>
								</tr>								
								
								</thead>
								</table>
									<form>			
										<a class='btn btn-primary' href="edit_koperasi.php".$data['id_koperasi'].>
										<span class='hidden-phone'> Ubah Profil </span>
										</a>
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

<?php } ?>