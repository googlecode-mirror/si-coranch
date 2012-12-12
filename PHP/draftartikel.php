<?
include "konek.php";
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
						
						<li><a href=""><i class="icon-tasks"></i><span class="hidden-tablet"> Artikel 
						<ul><a class="" href="daftarartikel.php"><i class="icon-Pencil"></i><span class="hidden-tablet" role = "treeitem"> Semua </span></a></ul>
						<ul><a class="" href=""><i class="icon-Pencil"></i><span class="hidden-tablet" role = "treeitem"> Draf </span></a></ul>
						<ul><a class="" href="postartikel.php"><i class="icon-Pencil"></i><span class="hidden-tablet" role = "treeitem"> Diterbitkan </span></a></ul>
						</span></a>
						</li>
					
						<li><a class="" href="koperasi.php"><i class="icon-eye-open"></i><span class="hidden-tablet"> Koperasi </span></a></li>
						
						<li><a class="" href="#"><i class="icon-edit"></i><span class="hidden-tablet"> Profil </span></a></li>
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
						<a href="daftarartikel.php">Artikel </a> <span class="divider">/</span>
					</li>
					<li>
						<a>Draf Artikel</a>
					</li>
				</ul>
			</div>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="breadcrumb">
						<h2><i class="icon-picture"></i>Artikel
						<div class="btn-group pull-right" >
							<a class="btn btn-medium btn-primary" href="tambahartikel.php">
							<i class="icon-pencil"></i><span class="hidden-phone"> Tambah Artikel</span>
							</a>	
						</div>
						</h2>
					</div>
					<div class="container-fluid">
						<div class="row-fluid">
							<div class="span12">
								<table class="table table-striped" align="center" action="viewdraft.php">
									<thead>
									<tr>
										<th>Tanggal</th>
										<th>Judul</th>
										<th>Setting</th>		
										
									</tr>
									<?include "viewdraft.php";?>
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