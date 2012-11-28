<?php
include "konek.php";


$judul_artikel = $_POST['judul_artikel'];
$deskripsi_artikel= $_POST['deskripsi_artikel'];
$picture = null;
$set = true;
if(isset($_POST['submit'])){
/*
$allowed_types=array(
    'image/gif',
    'image/jpeg',
    'image/png',
	);
	
	if (in_array($_FILES["picture"]["type"],$allowed_types)&&($_FILES["picture"]["size"] < 500000)) {				
		if($_FILES["picture"]["error"] > 0) {
			$set = false;
		}
		else {
			if (file_exists("picture/" . $_FILES["picture"]["name"])) {
				move_uploaded_file($_FILES["picture"]["tmp_name"], "picture2/" . $_FILES["picture"]["name"]);
				$foto_profil = "picture2/" . $_FILES["picture"]["name"];
			}
			else {
				move_uploaded_file($_FILES["picture"]["tmp_name"], "picture/" . $_FILES["picture"]["name"]);
				$foto_profil = "picture/" . $_FILES["picture"]["name"];
			}
		}
	}
	*/
if ((($_FILES["picture"]["type"] == "image/jpeg")|| ($_FILES["picture"]["type"] == "image/png")|| ($_FILES["picture"]["type"] == "image/jpeg"))&& ($_FILES["picture"]["size"] < 20000000)) 
	if($_FILES["picture"]["error"] > 0) {
		echo '<div class="alert alert-danger">Error<button class="close" data-dismiss="alert">&times;</button></div>';
		$set = false;
		}
	else {
		if (file_exists("picture/" . $_FILES["picture"]["name"])) {
			echo '<div class="alert alert-warning">File sudah ada<button class="close" data-dismiss="alert">&times;</button></div>';
			move_uploaded_file($_FILES["picture"]["tmp_name"], "picture2/" . $_FILES["picture"]["name"]);
			$picture = "picture/" . $_FILES["picture"]["name"];
		}
		else {
			move_uploaded_file($_FILES["picture"]["tmp_name"], "picture/" . $_FILES["picture"]["name"]);
			$picture = "picture/" . $_FILES["picture"]["name"];
		}
	}
}
	

	if(!empty($judul_artikel) ) {
		$sql = mysql_query("INSERT INTO artikel VALUES('','$judul_artikel','$deskripsi_artikel','',now(),'$picture')");
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

?>