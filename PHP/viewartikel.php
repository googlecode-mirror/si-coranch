<?php
//session_start();
include "konek.php";
//$deskripsi_artikel = $_POST['deskripsi_artikel'];
//$lala = substr("asavsah",0,5);
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
				
				$ada= mysql_query("SELECT*FROM artikel ORDER BY tanggal_artikel desc LIMIT $posisi, $batas");
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
				
				$tampil2 = mysql_query("SELECT * FROM artikel");
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