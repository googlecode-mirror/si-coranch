<?php
session_start();
include "konek.php";
//include "page.php";		
if(isset($_POST['submit'])){
$judul_artikel = $_POST['judul_artikel'];
$deskripsi_artikel= $_POST['deskripsi_artikel'];

	if(!empty($judul_artikel ) && !empty($deskripsi_artikel ) ) {
		$sql = mysql_query("INSERT INTO artikel VALUES('','$judul_artikel','$deskripsi_artikel','',now(),'')");
		if($sql){
			?>
			 <script language = "JavaScript">
			  alert('task successfully saved^^');
			  document.location='form.php';
			  </script>
			<?
		}
	else mysql_error();
	}
}
?>