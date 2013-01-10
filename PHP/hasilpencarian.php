<?php
include "konek.php";
@$cari=$_POST['cari'];
$ada= mysql_query("SELECT*FROM produk where nama_produk like '%$cari%' ");

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
						<h2><i class="icon-picture"></i>Hasil Pencarian</h2>
                    </div>
					<div class="container-fluid">
						<div class="row-fluid">
							<div class="span12">
								<table class="table table-striped" align="center" >
									<thead>
									<tr>
									
										<th>Foto</th>
										<th>Nama</th>
										<th>Harga</th>
										<th>Kategori</th>
										
										
												
									</tr>
									<?while($data= mysql_fetch_array($ada)){
									if ($data["produk"] != "") {
						echo '<td class="dl-horizontal"><img src="'.$data["produk"].'" class="img-rounded" style="max-height:70px;max-width:70px;"></td>'; 
					}else{
						echo '<td><img src="img/produk.png" class="img-rounded" style="max-height:70px;max-width:70px;"></td>';
					}
					
					echo "<td class='pull-left'> <a href='detil_produk.php?=id=".$data['id_produk']."'><h2>".$data['nama_produk']."
					</td>";
					echo "<td>".$data['harga_produk']."</td>";
					echo "<td>".$data['kategori_produk']."</td>";
					//echo "<td>".$data['status_produk']."</td>";
					//echo "<td>".$data['status']."</td>";
					//echo "<td>".$data['deskripsi_artikel']."</td>";

					
					
					//echo "<td><form method='post'></form></td>";
				echo "</tr>";
					
					if(isset($_POST['del'])){
						$id=$_POST['hid'];				
						$query = mysql_query("DELETE FROM produk where id_produk= ".$id);
						header('Location:viewproduk.php');
					}
					$counter = "++";
}?>
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