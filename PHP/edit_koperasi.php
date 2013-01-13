<?
session_start();
include "konek.php";
include"page_koperasi.php";
$ada= mysql_query("SELECT*FROM koperasi where id_koperasi=".$_SESSION['id_koperasi']);
while($a= mysql_fetch_array($ada)){
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Selamat Datang di SI-Coranch</title>
	<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;<meta charset="utf-8">
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
						<li class="nav-header hidden-tablet">Selamat Datang, <?php echo $a['nama_koperasi']; ?> !</li>
						
						<li><a href="viewproduk.php"><i class="icon-tasks"></i><span class="hidden-tablet"> Produk </span></a></li>
						
						<li><a href="profil_koperasi.php"><i class="icon-user"></i><span class="hidden-tablet"> Profil 
						<ul><a class="" href="edit_koperasi.php".$data['id_koperasi'].><i class="icon-Pencil"></i><span class="hidden-tablet" role = "treeitem"> Ubah Profil </span></a></ul>
						<ul><a class="" href="edit_koperasi.php"><i class="icon-Pencil"></i><span class="hidden-tablet" role = "treeitem"> Ubah Password </span></a></ul>
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
						<a href="profil_koperasi.php">Profil</a> <span class="divider">/</span>
					</li>
					<li>
						<a>Ubah Profil</a>
					</li>
				</ul>
			</div>			
			
			<div id="content" class="span10">			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="breadcrumb">
						<h2><i class="icon-eye-open"></i>Ubah Profil</h2>
					</div>
					
					
					<div class="box-content">
						<div class="container-fluid">
							<div class="row-fluid">
								<div class="span8">
								<form name="input" action="update_pkoperasi.php" method="post" enctype="multipart/form-data" align="center">
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
												<input class="input-large" type="nama_koperasi" name="nama_koperasi" id="nama_koperasi" value="<?php echo $a['nama_koperasi']; ?>" autofocus="autofocus" required="required">
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
												<input class="input-large" type="email_koperasi" name="email_koperasi" id="email_koperasi" value="<?php echo $a['email_koperasi']; ?>" required="required">
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
												<input class="input-large" type="alamat_koperasi" name="alamat_koperasi" id="alamat_koperasi"  value="<?php echo $a['alamat_koperasi']; ?>" required="required">
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
										<select name="kecamatan_koperasi" value="<?php echo $a['kecamatan_koperasi']; ?>">
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
												<textarea class="span12" rows="11" name="deskripsi_koperasi"> <?php echo $a['deskripsi_koperasi']; ?></textarea>
										</div>
									</td>
								</tr>

								<tr>
									<td>
										<div></div>
									</td>
									<td>
										<span></span>
									</td>
									
										<div>
										<?
										//echo '<td class="dl-horizontal">';
										if ($a["logo"] != "") 
											echo '<td class="dl-horizontal">
												<img src="'.$a["logo"].'" class="img-rounded" style="max-height:150px;max-width:150px;">
											</td>'; 
										else
											echo '<td class="dl-horizontal">
												<img src="img/koperasi.png" class="img-rounded" style="max-height:150px;max-width:150px;">
											</td>';
										//echo'</td>';
										?>
										</div>
									
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
												<input class="input-large" type="kontak_koperasi" name="kontak_koperasi" id="kontak_koperasi"  value="<?php echo $a['kontak_koperasi']; ?>"required="required">
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
<?php } ?>