<?php
session_start();
include "konek.php";
include"page_koperasi.php";
$sql="SELECT * FROM produk WHERE id_produk=".$_GET['id'];
$edit = mysql_query($sql);
$a = mysql_fetch_array($edit);
$akun= mysql_query("SELECT*FROM koperasi where id_koperasi=".$_SESSION['id_koperasi']);
while($akun1= mysql_fetch_array($akun)){
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
						<li class="nav-header hidden-tablet">Selamat Datang, <?php echo $akun1['nama_koperasi']; ?> !</li>
						
						<li><a href="viewproduk.php"><i class="icon-tasks"></i><span class="hidden-tablet"> Produk 
						<ul><a class="" href="tmbhproduk.php"><i class="icon-Pencil"></i><span class="hidden-tablet" role = "treeitem"> Tambah Produk </span></a></ul>
						</span></a>
						</li>
						
						<li><a class="" href="profil_koperasi.php"><i class="icon-user"></i><span class="hidden-tablet"> Profil </span></a></li>
					</ul>
				</div>
			</div>
		
			<div id="content" class="span10">			
                <ul class="breadcrumb"> 
					<li>
						<a href="index1.php">Home </a> <span class="divider">/</span>
					</li>
					<li>
						<a href="viewproduk.php"> Daftar Produk </a> <span class="divider">/</span>
					</li>
					<li>
						<a>Edit Produk</a>
					</li>
				</ul>
			</div>
		
			<div id="content" class="span10">
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="breadcrumb">
						<h2><i class="icon-Pencil"></i>EditProduk</h2>
					</div>

					<div class="box-content">
						<div class="container-fluid">
							<div class="row-fluid">
								<div class="span12">
								<form name="input" action="updateproduk.php" method="post" enctype="multipart/form-data" align="center">
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
												<input class="input-large" type="nama_produk" name="nama_produk" id="nama_produk"value="<?php echo $a['nama_produk']; ?>" autofocus="autofocus" required="required">
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
												<input class="input-large" type="harga_produk" name="harga_produk" id="harga_produk" value="<?php echo $a['harga_produk']; ?>" autofocus="autofocus" required="required">
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
										<select name="kategori_produk" value="<?php echo $a['kategori_produk']; ?>">
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
												<textarea class="span12" rows="11" name="deskripsi_produk" ><?php echo $a['deskripsi_produk']; ?></textarea>
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
								<input type="hidden" name ="id" value="<?php echo $a['id_produk']; ?>">
									<form align="center" >			
									<input class="btn btn-large btn-primary" name="update" type="submit" id="update" value="Perbaharui">
									<input class="btn btn-large" type="reset" value="Reset">
									
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
<?}?>