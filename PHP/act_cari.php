<?php
//session_start();
include "konek.php";
//include "page.php";		
if(isset($_POST['submit'])){
				$batas = 5;
				if(isset($_GET['halaman'])) {
				$halaman = $_GET['halaman'];
				$posisi = ($halaman - 1) * $batas;
				}
				else {
				$posisi = 0;
				$halaman = 1;
				}
				
				$ada= mysql_query("SELECT*FROM produk where nama_produk like '%".@$search."%' LIMIT $posisi, $batas");
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
				
				$tampil2 = mysql_query("SELECT * FROM produk where nama_produk like '%".@$search."%'");
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
}
				?>