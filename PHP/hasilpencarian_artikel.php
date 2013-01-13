<?php
include "konek.php";
@$cari=$_POST['cari'];
$batas = 5;
if(isset($_GET['halaman'])) {
	$halaman = $_GET['halaman'];
	$posisi = ($halaman - 1) * $batas;
}else {
	$posisi = 0;
	$halaman = 1;
}

$ada= mysql_query("SELECT*FROM artikel where judul_artikel like '%$cari%' LIMIT $posisi, $batas ");

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
				<a class="brand" href="index1.php"> 
					<img alt="SI-Coranch Logo" src="img/favicon1.png" /> <span>SI-Coranch</span>
				</a>
				
				<div class="btn-group pull-right" >
					<a class="btn btn-medium" href="logout_koperasi.php">
						<i class="icon-user"></i><span class="hidden-phone"> Logout</span>
					</a>
				</div>
				
				<div class="top-nav nav-collapse">
					<ul class="nav">
						<li><a href="profil_koperasi.php">Profil</a></li>
					</ul>
				</div>
				
			</div>

		<div class="container-fluid">
		<div class="row-fluid">
		  </div>
			</div>
		</div>
	</div>
	
	<div class="container-fluid">
		<div class="row-fluid">
		
			<!--Search-->			
				<div id="content" class="span12">
               	  <div class="breadcrumb" style="height:33px">
					<center><form class="form-search" action="hasilpencarian_artikel.php" method="post" name="cari">
                    	<input id="cari" name="cari" class="input-xxlarge" type="text" placeholder="Cari Artikel" style="height:30px; width:1078px">
						
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
				
				             	<div id="content" class="box span8">
					<div class="breadcrumb">
						<h2><i class="icon-picture"></i>Daftar Artikel</h2>
                    </div>
                
                <div class="container-fluid">
						<div class="row-fluid">
							<div class="span12">
								<table class="table span12" align="center">
									<thead>
									<tr>
									
										<th></th>
										<th></th>
												
									</tr>
									<?
										while($data= mysql_fetch_array($ada)){
				$coba = substr($data['deskripsi_artikel'],0,200);
				echo "<tr>";
				
					if ($data["picture"] != "") {
						echo '<td class="pull-left"><img src="'.$data["picture"].'" class="img-rounded" style="max-height:100px;max-width:100px;"></td>'; 
					}else{
						echo '<td><img src="img/artikel.png" class="img-rounded" style="max-height:100px;max-width:100px;"></td>';
					}
					
					echo "<td class='pull-left'> 
						<strong>"
						
						.$data['judul_artikel'].
						"</strong>
						<p>"
						.$coba.
						"<a href='tampil_artikel.php?id=".$data['id_artikel']."'>
							<h6>readmore</h6>
						</a>
						</p>
						
						</td>";
					//echo "";
				echo "</tr>";
					
					$counter = "++";				
				}
				$tampil2 = mysql_query("SELECT * FROM artikel where judul_artikel like '%$cari%'");
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