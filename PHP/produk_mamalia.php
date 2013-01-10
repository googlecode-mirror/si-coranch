<?php
//session_start();
include "konek.php";
//include "page.php";		

				$batas = 5;
				if(isset($_GET['halaman'])) {
				$halaman = $_GET['halaman'];
				$posisi = ($halaman - 1) * $batas;
				}
				else {
				$posisi = 0;
				$halaman = 1;
				}
				
				$ada= mysql_query("SELECT*FROM produk where kategori_produk like '%mamalia%' LIMIT $posisi, $batas");
				while($data= mysql_fetch_array($ada)){
				echo "<tr>";
				
					if ($data["produk"] != "") {
						echo '<td class="pull-left"><img src="'.$data["produk"].'" class="img-rounded" style="max-height:100px;max-width:100px;"></td>'; 
					}else{
						echo '<td><img src="img/produk.png" class="img-rounded" style="max-height:100px;max-width:100px;"></td>';
					}
					
					echo "<td class='pull-left'> <a href='detil_produk.php?=id=".$data['id_produk']."'><h2>".$data['nama_produk']."</h2></a>Rp.
					<ul>".$data['harga_produk']."</ul>
					</td>";
				echo "</tr>";
					
					if(isset($_POST['del'])){
						$id=$_POST['hid'];				
						$query = mysql_query("DELETE FROM produk where id_produk= ".$id);
						header('Location:viewproduk.php');
					}
					$counter = "++";				
				}
				
				$tampil2 = mysql_query("SELECT * FROM produk where kategori_produk like '%mamalia%' ");
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