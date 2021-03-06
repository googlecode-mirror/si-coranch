<?
session_start();
include "konek.php";
include"page_koperasi.php";
/*$akun= mysql_query("SELECT*FROM koperasi where id_koperasi=".$_SESSION['id_koperasi']);
while($akun1= mysql_fetch_array($akun)){*/
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
						
						<li><a class="" href="profil_koperasi.php"><i class="icon-edit"></i><span class="hidden-tablet"> Profil </span></a></li>
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
						<a>Tambah Produk</a>
					</li>
				</ul>
			</div>	
				
			<div id="content" class="span10">
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="breadcrumb">
						<h2><i class="icon-pencil"></i>Tambah Produk
						</h2>
					</div>

					<div class="box-content">
						<div class="container-fluid">
							<div class="row-fluid">
								<div class="span12">
								<form name="input" action="editakunkoperasi.php" method="post" enctype="multipart/form-data" align="center">
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
                                        <input class="input-large" type="text" name="nama_koperasi" id="nama_koperasi" autofocus="autofocus" required="required">
                                        </div>
									</td>
								</tr>
								
								<tr>
									<td>
										<div align="left">Email Koperasi</div>
									</td>
									<td>
										<span align="left">:   </span>
									</td>
									<td>
										<div class="input-prepend">
												<input class="input-large" type="email" name="email_koperasi" id="email_koperasi"  required="required">
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
										  <input class="input-large" type="text" name="alamat_koperasi" id="alamat_koperasi"  required="required">
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
										<div class="input-prepend">
										  <input class="input-large" type="text" name="kecamatan_koperasi" id="kecamatan_koperasi"  required="required">
										</div>
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
												<textarea id="elm1" class="span12" rows="11" name="deskripsi_produk"></textarea>
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
											<input name="produk" id="produk" type="file">
										</div>
									</td>
								</tr>								
								
								</thead>
								</table>
									
								</form>
								
								</div>	
							</div>
						</div>
					</div>					

<div class="row-fluid sortable">
				<div class="box span12">
					<div class="breadcrumb">
						<h2><i class="icon-pencil"></i>Ubah Password
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
										<div align="left">Username</div>
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
										<div align="left">New Password</div>
									</td>
									<td>
										<span align="left">:   </span>
									</td>
									<td>
										<div class="input-prepend">
												<input class="input-large" type="password" name="passworda" id="passworda"  required="required">
										</div>
									</td>
								</tr>
								
								<tr>
									<td>
										<div align="left">Confirm Password</div>
									</td>
									<td>
										<span align="left">:</span>
									</td>
										<td>
										<div class="input-prepend">
												<input class="input-large" type="password" name="passwordb" id="passwordb"  required="required">
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
		</div>
	</div>
</body>
</html>