<?php
include "konek.php";
$sql="SELECT * FROM artikel WHERE id_artikel=".$_GET['id'];
$edit = mysql_query($sql);
$a = mysql_fetch_array($edit);
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
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Main</li>
						<li><a href="dashboard.php"><i class="icon-tasks"></i><span class="hidden-tablet"> Dashboard </span></a></li>
						
						<li><a href=""><i class="icon-tasks"></i><span class="hidden-tablet"> Artikel 
						<ul><a class="" href="daftarartikel.php"><i class="icon-Pencil"></i><span class="hidden-tablet" role = "treeitem"> Semua </span></a></ul>
						<ul><a class="" href="draftartikel.php"><i class="icon-Pencil"></i><span class="hidden-tablet" role = "treeitem"> Draf </span></a></ul>
						<ul><a class="" href="postartikel.php"><i class="icon-Pencil"></i><span class="hidden-tablet" role = "treeitem"> Diterbitkan </span></a></ul>
						</span></a>
						</li>
						<li><a href="koperasi.php"><i class="icon-eye-open"></i><span class="hidden-tablet"> Koperasi </span></a></li>
						
						<li><a href="profil.php"><i class="icon-edit"></i><span class="hidden-tablet"> Profil </span></a></li>
					</ul>
				</div>
			</div>
			
			<div id="content" class="span10">

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="dashboard.php">Dashboard</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="daftarartikel.php">Artikel</a> <span class="divider">/</span>
					</li>
					<li>
						<a>Tambah Artikel</a>
					</li>
					
				</ul>
			</div>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="breadcrumb">
						<h2><i class="icon-picture"></i>Tambah Artikel</h2>
					</div>
					<div class="box-content">
						<div class="container-fluid">
							<div class="row-fluid">
								<div class="span12">
								<form name="input" action="update.php" method="post" enctype="multipart/form-data">
									<div class="control-group">
										<label class="control-label" for="inputIcon">Judul</label>
										<div class="controls">
											<div class="input-prepend">
												<span class="add-on"><i class="icon-tasks"></i></span>
												<input class="input-large" type="judul_artikel" name="judul" value="<?php echo $a['judul_artikel']; ?>" autofocus="autofocus" required="required">
											</div>
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label" for="inputIcon">upload</label>
										<div class="controls">
											<div class="input-prepend">
												<input name="picture" type="file">
											</div>
										</div>
									</div>
									<div>
										<label class="control-label" for="inputIcon">Description</label>
										<div class="controls">
											<div class="input-prepend">
												<textarea class="span10" rows="11" name="deskripsi"> <?php echo $a['deskripsi_artikel']; ?></textarea>
											</div>
										</div>
									</div>
									<input type="hidden" name ="id" value="<?php echo $a['id_artikel']; ?>">
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