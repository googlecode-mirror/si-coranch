<?
session_start();
include "konek.php";
include"page_koperasi.php";
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
						<a>Daftar Produk</a>
					</li>
				</ul>
			</div>
			
			<div id="content" class="span10">			
			<div class="row-fluid sortable">
				<div class="box span12">
				<div class="breadcrumb">
						<h2><i class="icon-eye-open"></i>Produk
						
						<form class="navbar-form pull-right" action="hasil.php" method="post" name="cari">
                    	<input id="cari" name="cari" class="input" type="cari" placeholder="cari nama produk" >
						
						<button class="btn btn-primary" type="submit" name="submit" id="submit" value="cari">Cari</button>
                        </form>
						
						</h2>
					</div>
					
					<div class="container-fluid">
						<div class="row-fluid">
							<div class="span12">
								<table class="table table-striped" align="center" action="daftarproduk.php">
									<thead>
									<tr>
									
										<th>Foto</th>
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
<?}?>