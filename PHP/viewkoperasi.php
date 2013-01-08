<?php
//session_start();
include "konek.php";
include "page.php";		

				$batas = 9;
				if(isset($_GET['halaman'])) {
				$halaman = $_GET['halaman'];
				$posisi = ($halaman - 1) * $batas;
				}
				else {
				$posisi = 0;
				$halaman = 1;
				}
				
				$ada= mysql_query("SELECT*FROM koperasi ORDER BY id_koperasi ASC LIMIT $posisi, $batas");
				while($data= mysql_fetch_array($ada)){
				echo "<tr>";
					
					echo "<td>".$data['nama_koperasi']."</td>";
					echo "<td>".$data['kecamatan_koperasi']."</td>";
					
					
					echo "<td><form method='post'><input class= 'btn btn-medium btn-danger' type='submit' name='del' value='hapus' /><input type='hidden' name='hid' value=".$data['id_koperasi'].">
					</form></td>";
					
					//echo "<td><form method='post'></form></td>";
					echo "</tr>";
					
					if(isset($_POST['del'])){
						$id=$_POST['hid'];				
						$query = mysql_query("DELETE FROM koperasi where id_koperasi = ".$id);
						$query = mysql_query("DELETE FROM produk where id_koperasi = ".$id);
						header('Location:koperasi.php');
					}
					$counter = "++";				
				}
				
				$tampil2 = mysql_query("SELECT * FROM koperasi");
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