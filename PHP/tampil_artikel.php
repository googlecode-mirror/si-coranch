<?php
include "konek.php";
@$cari=$_POST['cari'];
@$id_artikel=$_GET['id_artikel'];
$ada= mysql_query("SELECT*FROM artikel where judul_artikel like '%$cari%'");
$sql="SELECT * FROM artikel WHERE id_artikel=".$_GET['id'];
$edit = mysql_query($sql);
$a = mysql_fetch_array($edit);
function ubah_tgl($coba){
	$exp = explode('-',$coba);
	if(count($exp) == 3) {
		$coba = $exp[2].'-'.$exp[1].'-'.$exp[0];
		}
	return $coba;
}
$coba = $a['tanggal_artikel'];

$batas = 5;
				if(isset($_GET['halaman'])) {
				$halaman = $_GET['halaman'];
				$posisi = ($halaman - 1) * $batas;
				}
				else {
				$posisi = 0;
				$halaman = 1;
				}
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

			<!-- Kategori -->                
             	<div id="content" class="box span8">
					<div class="breadcrumb">
						<h2><i class="icon-picture"></i><?php echo $a['judul_artikel'];?></h2>
                    </div>
					
					<div class="box-content">
						<div class="container-fluid">
							<div class="row-fluid">
								<div class="span12">
								
								<thead>
									<tr>
										<th>
										<?php
										if($a){
										echo '<td class="dl-horizontal" align="center">';
										if ($a["picture"]!="") echo '<center><dt><img src="'.$a["picture"].'"class="img-rounded" style="max-height:300px;max-width:400px;"></dt></center>'; 
										else echo '<center><td><img src="img/produk.png" class="img-rounded" style="max-height:300px;max-width:400px;"></td></center>';
										
										?>
										</th>
									</tr>
								
								
								</div>

								<tr>

									<td>
										<?echo "<td>".$tampil_tgl = ubah_tgl($coba)."</td>";?>
									</td>
								</tr>
								
								<tr>
									<td>
										<div>
												<?php echo $a['deskripsi_artikel']; ?>
										</div>
									</td>
								</tr>
									
								

								
								<?php } ?>
								</thead>
								</table>
								<table class="table table-striped" align="center" action="view.php">
								<thead>
								<?
								$lala= mysql_query("SELECT*FROM artikel ORDER BY tanggal_artikel desc LIMIT $posisi, $batas");
								echo"<h3> <strong>Artikel Lainnya:
								</strong></h3>";
								while($lihat1= mysql_fetch_array($lala)){
								echo "<tr>";
								echo "<td class='pull-left'> 	
								<a href='tampil_artikel.php?id=".$lihat1['id_artikel']."'>
									<h6>".$lihat1['judul_artikel']."</h6>
								</a>
						
					</td>";
				echo "</tr>";
					$counter = "++";
				}
								?>
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