<?php
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
                    	<input id="cari" name="cari" class="input-xxlarge" type="text" placeholder="Cari Produk" style="height:30px; width:1078px">
						
						<button class="btn" type="submit" name="submit" id="submit" value="cari">Cari</button>
                        </form></center>
					</div>
				</div>

			<!-- Kategori -->                
             	<div id="content" class="span11">
					<div class="breadcrumb">
						<h2><i class="icon-picture"></i>KATEGORI</h2>
                    </div>
                
                <!--Kumpulan Kategori Thumbnails--> 
				
                <ul class="thumbnails">
					<div class="span4">
						<a href="mamalia.php" class="thumbnail" type='submit' name='mamalia'>
						<img src="img/cow.png" style="width:300px; height:170px" alt="">
						<center><h3 style="color:#000">Mamalia</h3></center>
						</a>
					</div>
                
        			<div class="span4">
						<a href="unggas.php" class="thumbnail" type="submit" name="unggas">
						<img src="img/ayam.png" style="width:300px; height:170px" alt="">
						<center><h3 style="color:#000">Unggas</h3></center>
						</a>
					</div>
                
                	<div class="span4">
						<a href="hasilternak.php" class="thumbnail" type="submit" name="hasil">
						<img src="img/milk.png" style="width:200px; height:170px" alt="">
						<center><h3 style="color:#000">Hasil Ternak</h3></center>
						</a>
					</div>
				</ul>
                </div>
                
                <!--cari Artikel-->
				
				<div id="content" class="span11">
               	  <div class="breadcrumb" style="height:33px">
					<center><form class="form-search" action="hasilpencarian_artikel.php" method="post" name="cari">
                    	<input id="cari" name="cari" class="input-xxlarge" type="text" placeholder="Cari Artikel" style="height:30px; width:1078px">
						
						<button class="btn" type="submit" name="submit" id="submit" value="cari">Cari</button>
                        </form></center>
					</div>
				</div>
				
                <!--Artikel-->
                <div id="content" class="span11">
					<div class="breadcrumb">
                    	<h2><i class="icon-book"></i>ARTIKEL</h2>
					</div>
                    
                   	<ul class="thumbnails">
					<div class="span3">
						<a href="tampil_artikel.php?id=43" class="carousel">
						<img src="picture/OWRH2oUSPl.jpg" style="width:250px; height:170px" alt="">
                        <div class="carousel-caption">
                        	<h4 style="color:#FFF"><center>Kemilau Nuklir di Bisnis Peternakan Sapi</center></h4>
                        </div>
						</a>
					</div>
                
        			<div class="span3">
						<a href="#" class="carousel">
						<img src="Background/Background1.jpg" style="width:250px; height:170px" alt="">
                        <div class="carousel-caption">
                        	<h4 style="color:#FFF"><center>Artikel 2</center></h4>
                            <p><center style="color:#FFF">iyeeesss</center></p>
                        </div>
						</a>
					</div>
                
                	<div class="span3">
						<a href="#" class="carousel">
						<img src="Background/Background1.jpg" style="width:250px; height:170px" alt="">
                        <div class="carousel-caption">
                        	<h4 style="color:#FFF"><center>Artikel 3</center></h4>
                            <p><center style="color:#FFF">iyeeesss</center></p>
                        </div>
						</a>
					</div>
                    
                    <div class="span3">
						<a href="#" class="carousel">
						<img src="Background/Background1.jpg" style="width:250px; height:170px" alt="">
                        <div class="carousel-caption">
                        	<h4 style="color:#FFF"><center>Artikel 4</center></h4>
                            <p><center style="color:#FFF">iyeeesss</center></p>
                        </div>
						</a>
                    </div>
					</ul>
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