<?php
include "konek.php";
@$cari=$_POST['cari'];
@$id_produk=$_GET['id_produk'];
$ada= mysql_query("SELECT*FROM produk where nama_produk like '%$cari%'");
$sql="SELECT * FROM produk , koperasi WHERE id_produk=".$_GET['id'];
$edit = mysql_query($sql);
$a = mysql_fetch_array($edit);

//$coba= mysql_query("SELECT*FROM produk where id_koperasi=['id_koperasi']");
//while($coba1= mysql_fetch_array($coba)){
//$foto= mysql_query("SELECT*FROM produk WHERE ");
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
	<link href="css/user.css" rel="stylesheet">
	<link href="css/user1.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon.ico">		
</head>

<body>
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="brand" href="index.php"> 
					<img alt="SI-Coranch Logo" src="img/favicon1.png" /> <span>SI-Coranch</span>
				</a>
				
				<div class="nav pull-right">
					
					<form class="form-inline" action="act_login_koperasi.php" method="post">
						
						<input type="text" class="input-small" name="username" placeholder="Username">
						
						<input type="password" class="input-small" name="pass" placeholder="Password">
						
						<button type="submit" class="btn btn-primary">Masuk</button>
				</form>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container-fluid">
		<div class="row-fluid">
		
			<!--Search-->			
				<div id="content" class="span12">
               	  <div class="breadcrumb" style="height:33px">
					<center><form class="form-search" action="hasilpencarian.php" method="post" name="cari">
                    	<input id="cari" name="cari" class="input-xxlarge" type="text" placeholder="cari nama produk" style="height:30px; width:1078px">
						
						<button class="btn" type="submit" name="submit" id="submit" value="cari">Cari</button>
                        </form></center>
					</div>
				</div>
				<div class="span3 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">		
						
						<li><a href=""><i class="icon-user"></i><span class="hidden-tablet"> Kategori Produk 
						<ul><a class="" href="mamalia.php".$data['id_koperasi'].><i class="icon-task"></i><span class="hidden-tablet" role = "treeitem"> Mamalia </span></a></ul>
						<ul><a class="" href="unggas.php"><i class="icon-task"></i><span class="hidden-tablet" role = "treeitem"> Unggas</span></a></ul>
						<ul><a class="" href="hasilternak.php"><i class="icon-task"></i><span class="hidden-tablet" role = "treeitem"> Hasil Ternak</span></a></ul>
						</span></a>
						</li>
						
						<li><a href="artikel.php"><i class="icon-tasks"></i><span class="hidden-tablet"> Artikel </span></a></li>
						
					</ul>
				</div>
			</div>

			<!-- Kategori -->                
             	<div id="content" class="box span8">
					<div class="breadcrumb">
						<h2><i class="icon-picture"></i>Detil Produk</h2>
                    </div>
					
					<div class="box-content">
						<div class="container-fluid">
							<div class="row-fluid">
								<div class="span3">
								
								<thead>
									<tr>
										<th>
										<?php
										if($a){
										echo '<td class="dl-horizontal">';
										if ($a["produk"]!="") echo '<dt><img src="'.$a["produk"].'"class="img-rounded" style="max-height:150px;max-width:150px;"></dt>'; 
										else echo '<td><img src="img/produk.png" class="img-rounded" style="max-height:150px;max-width:150px;"></td>';
										
										?>
										</th>
									</tr>
								</thead>
								
								
								</div>

								<div class="span8">
								<form name="input" action="" method="post" enctype="multipart/form-data" align="center">
								<table>
								<thead>

								<tr>
									<td>
										<div align="left">Nama</div>
									</td>
									<td>
										<span align="left">:   </span>
									</td>
									<td>
										<div>
												<?php echo $a['nama_produk']; ?>
										</div>
									</td>
								</tr>
								
								<tr>
									<td>
										<div align="left">Harga</div>
									</td>
									<td>
										<span align="left">:</span>
									</td>
									<td>
										<div>
												<?php echo $a['harga_produk']; ?>
										</div>
									</td>
								</tr>
									
								<tr>
									<td>
										<div align="left">Kategori</div>
									</td>
									<td>
										<span align="left">:</span>
									</td>
									<td>
										<div>
												<?php echo $a['kategori_produk']; ?>
										</div>
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
										<div>
												<?php echo $a['status_produk']; ?>
										</div>
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
										<div>
												<?php echo $a['deskripsi_produk']; ?>
										</div>
									</td>
								</tr>

								
								<?php } ?>
								</thead>
								</table>
								</form>
								
								</div>
								
							</div>
						</div>
						
									<div class="row-fluid sortable">
				<div class="box span12">
					<div class="breadcrumb">
						<h2><i class="icon-eye-open"></i>Profil Koperasi</h2>
					</div>
					
					<div class="box-content">
						<div class="container-fluid">
							<div class="row-fluid">
							<div class="span2">
							<?
							echo '<td class="dl-horizontal">';
							if ($a["logo"] != "") echo '<dt><img src="'.$a["logo"].'" class="img-rounded" style="max-height:200px;max-width:200px;"></dt>'; 
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
												<?php echo $a['nama_koperasi']; ?>
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
												<?php echo $a['email_koperasi']; ?>
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
												<?php echo $a['alamat_koperasi']; ?>
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
									<div><?php echo $a['kecamatan_koperasi']; ?>
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
												<?php echo $a['deskripsi_koperasi']; ?>
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
												<?php echo $a['kontak_koperasi']; ?>
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
				</div>
			</div>
						
					</div>
					
                </div>
                
                
                <div class="footend">
                 	<center><hr width=800 size=4>
					<font color=blue size=2>
                    <b>SI-Coranch || 5210100069_5210100083_5210100115 - Sistem Informasi, ITS</b>
                    </font>
                    </center><br /><br />
                </div>
                </div>
                </div>
</body>
</html>
<?//}?>