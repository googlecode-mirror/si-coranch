<?php
//session_start();
include "konek.php";
include "page.php";		
function ubah_tgl($coba){
	$exp = explode('-',$coba);
	if(count($exp) == 3) {
		$coba = $exp[2].'-'.$exp[1].'-'.$exp[0];
		}
	return $coba;
}	
?>
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
				
				$ada= mysql_query("SELECT*FROM artikel WHERE STATUS='2' ORDER BY id_artikel ASC LIMIT $posisi, $batas");
				while($data= mysql_fetch_array($ada)){
				$coba = $data['tanggal_artikel'];
				echo "<tr>";
					//echo "<td>".$data['id']."</td>";
					echo "<td>".$tampil_tgl = ubah_tgl($coba)."</td>";
					echo "<td>".$data['judul_artikel']."</td>";
					//echo "<td>".$data['deskripsi_artikel']."</td>";
					
					echo "<td><form method='post'><input class= 'btn btn-medium' type='submit' name='del' value='hapus' /><input type='hidden' name='hid' value=".$data['id_artikel'].">
					
					<a class='btn btn-medium' href='formedit.php?id=".$data['id_artikel']."'>
						<span class='hidden-phone'> Edit</span>
					</a>
					</form></td>";
					
					//echo "<td><form method='post'></form></td>";
					echo "</tr>";
					
					if(isset($_POST['edit'])){
					header('Location:act_edit.php');
					}
					
					if(isset($_POST['del'])){
						$id=$_POST['hid'];				
						$query = mysql_query("DELETE FROM artikel where id_artikel = ".$id);
						header('Location:daftarartikel.php');
					}
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