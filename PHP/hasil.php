<?
session_start();
include "konek.php";
include"page_koperasi.php";
$akun= mysql_query("SELECT*FROM koperasi where id_koperasi=".$_SESSION['id_koperasi']);
$cari=$_POST['cari'];
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
						<li class="nav-header hidden-tablet">Hasil Pencarian, <?php echo $cari ?> !</li>
						
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
						<a href="viewproduk.php">Produk </a> <span class="divider">/</span>
					</li>
					<li>
						<a>Pencarian Produk</a>
					</li>
				</ul>
			</div>
			
			<div id="content" class="span10">			
			<div class="row-fluid sortable">
				<div class="box span12">
				<div class="breadcrumb">
						<h2><i class="icon-eye-open"></i>Hasil Pencarian > <?php echo $cari; ?>
						
						<form class="navbar-form pull-right" action="hasil.php" method="post" name="cari">
                    	<input id="cari" name="cari" class="input" type="cari" placeholder="cari nama produk" >
						
						<button class="btn btn-primary" type="submit" name="submit" id="submit" value="cari">Cari</button>
                        </form>
						
						</h2>
					</div>
					<div class="container-fluid">
						<div class="row-fluid">
							<div class="span12">
								<table class="table table-striped" align="center">
									<thead>
									<tr>
									
										<th>Foto</th>
										<th>Nama</th>
										<th>Harga</th>
										<th>Kategori</th>
										<th>Status</th>
										
										<th>Setting</th>		
									</tr>
									<?
									$batas = 5;
									if(isset($_GET['halaman'])) {
									$halaman = $_GET['halaman'];
									$posisi = ($halaman - 1) * $batas;
									}
									else {
									$posisi = 0;
									$halaman = 1;
									}
									$ada= mysql_query("SELECT*FROM produk where nama_produk like '%$cari%' and id_koperasi=".$_SESSION['id_koperasi']." LIMIT $posisi, $batas");
									
									while($data= mysql_fetch_array($ada)){
									echo "<tr>";
									
										if ($data["produk"] != "") {
											echo '<td class="dl-horizontal"><img src="'.$data["produk"].'" class="img-rounded" style="max-height:70px;max-width:70px;"></td>'; 
										}else{
											echo '<td><img src="img/produk.png" class="img-rounded" style="max-height:70px;max-width:70px;"></td>';
										}
										
										echo "<td>".$data['nama_produk']."</td>";
										echo "<td>".$data['harga_produk']."</td>";
										echo "<td>".$data['kategori_produk']."</td>";
										echo "<td>".$data['status_produk']."</td>";
										//echo "<td>".$data['status']."</td>";
										//echo "<td>".$data['deskripsi_artikel']."</td>";
										
										echo "<td><form method='post'><input class= 'btn btn-medium' type='submit' name='del' value='hapus' /><input type='hidden' name='hid' value=".$data['id_produk'].">
										
										<a class='btn btn-medium' href='formproduk.php?id=".$data['id_produk']."'>
											<span class='hidden-phone'> Edit</span>
										</a>
										</form></td>";
										
										//echo "<td><form method='post'></form></td>";
									echo "</tr>";
										
										if(isset($_POST['del'])){
											$id=$_POST['hid'];				
											$query = mysql_query("DELETE FROM produk where id_produk= ".$id);
											header('Location:viewproduk.php');
										}
										$counter = "++";				
									}
									
									$tampil2 = mysql_query("SELECT * FROM produk where nama_produk like '%$cari%' and id_koperasi=".$_SESSION['id_koperasi']);
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
<?}?>