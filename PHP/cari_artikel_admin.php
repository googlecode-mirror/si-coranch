<?
session_start();
include "konek.php";
include"page.php";
@$cari=$_POST['cari'];
function ubah_tgl($coba){
	$exp = explode('-',$coba);
	if(count($exp) == 3) {
		$coba = $exp[2].'-'.$exp[1].'-'.$exp[0];
		}
	return $coba;
}
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
				
				<a class="brand" href="index.php"> <img alt="SI-Coranch Logo" src="img/Favicon.png" /> <span>SI-Coranch</span></a>				
				<div class="btn-group pull-right" >
					<a class="btn btn-medium" href="logout.php">
						<i class="icon-user"></i><span class="hidden-phone"> Logout</span>
					</a>
				</div>
				
				<div class="top-nav nav-collapse">
					<ul class="nav">
						<li><a href="index.php">Visit Site</a></li>
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
						<ul><a class="" href="draftartikel.php"><i class="icon-Pencil"></i><span class="hidden-tablet" role = "treeitem"> Draf </span></a></ul>
						<ul><a class="" href="postartikel.php"><i class="icon-Pencil"></i><span class="hidden-tablet" role = "treeitem"> Diterbitkan </span></a></ul>
						</span></a>
						</li>
					
						<li><a class="" href="koperasi.php"><i class="icon-eye-open"></i><span class="hidden-tablet"> Koperasi </span></a></li>
						
						<li><a class="" href="profil.php"><i class="icon-edit"></i><span class="hidden-tablet"> Profil </span></a></li>
					</ul>
				</div>
			</div>

			
			<div id="content" class="span10">			
                <ul class="breadcrumb"> 
					<li>
						<a href="dashboard.php">Dashboard </a> <span class="divider">/</span>
					</li>
					<li>
						<a href="daftarartikel.php">Artikel </a> <span class="divider">/</span>
					</li>
					<li>
						<a>Pencarian Artikel</a>
					</li>
                     <form class="navbar-form pull-right" action="cari_artikel_admin.php" method="post" name="cari">
                    	<input id="cari" name="cari" class="input" type="text" placeholder="cari judul artikel" >
						
						<button class="btn btn-primary" type="submit" name="submit" id="submit" value="cari">Cari</button>
                        </form>
				</ul>
			</div>
				<div class="box span10">
					<div class="breadcrumb">
						<h2><i class="icon-picture"></i>Hasil Pencarian > <?php echo $cari; ?>
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
								<table class="table table-striped" align="center">
									<thead>
									<tr>
										<th>Tanggal</th>
										<th>Judul</th>
										
										<th>Setting</th>		
									</tr>
										<?
											$batas = 9;
											if(isset($_GET['halaman'])) {
											$halaman = $_GET['halaman'];
											$posisi = ($halaman - 1) * $batas;
											}
											else {
											$posisi = 0;
											$halaman = 1;
											}
											
											$ada= mysql_query("SELECT*FROM artikel where judul_artikel like '%$cari%' LIMIT $posisi, $batas");
											while($data= mysql_fetch_array($ada)){
											$coba = $data['tanggal_artikel'];
											echo "<tr>";
												//echo "<td>".$data['id']."</td>";
												echo "<td>".$tampil_tgl = ubah_tgl($coba)."</td>";
												echo "<td>".$data['judul_artikel']."</td>";
												//echo "<td>".$data['status']."</td>";
												//echo "<td>".$data['deskripsi_artikel']."</td>";
												
												echo "<td><form method='post'><input class= 'btn btn-medium' type='submit' name='del' value='hapus' /><input type='hidden' name='hid' value=".$data['id_artikel'].">
												
												<a class='btn btn-medium' href='formedit.php?id=".$data['id_artikel']."'>
													<span class='hidden-phone'> Edit</span>
												</a>
												</form></td>";
												
												//echo "<td><form method='post'></form></td>";
												echo "</tr>";

												
												if(isset($_POST['del'])){
													$id=$_POST['hid'];				
													$query = mysql_query("DELETE FROM artikel where id_artikel = ".$id);
													header('Location:daftarartikel.php');
												}
												$counter = "++";				
											}
											
											$tampil2 = mysql_query("SELECT * FROM artikel where judul_artikel like '%$cari%' ");
											$jmlData = mysql_num_rows($tampil2);
											$jmlHal = ceil($jmlData/$batas);
											
											echo "
											<div align=\"center\" class=\"pagination\" style=\"margin-bottom:30px\">
											<ul>";
											
											
											if ($halaman > 1){
												$prev = $halaman - 1;
												echo "<li><a href=$_SERVER[PHP_SELF]?halaman=$prev> Prev </a></li>";
											}  else {
												echo "<li><a href='#'> Prev </a></li>";
											}
											
											
											for($i=1;$i<=$jmlHal;$i++){
												if ($i != $halaman){
													echo "<li><a href=$_SERVER[PHP_SELF]?halaman=$i> $i </a></li>";
												}  else {
													echo "<li class=\"disabled\"><a href='#'> $i </a></li> ";
												}
											}
											
											if ($halaman < $jmlHal){
												$next = $halaman + 1;
												echo "<li><a href=$_SERVER[PHP_SELF]?halaman=$next> Next </a></li>";
											}else{
												echo "<li><a href='#'> Next </a></li>";
											}
											
											echo " </ul> </div> ";
											
											?>
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