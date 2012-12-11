<?php
include "konek.php";


@$judul_artikel = $_POST['judul_artikel'];
@$deskripsi_artikel= $_POST['deskripsi_artikel'];
$picture = null;
$set = true;

if(isset($_POST['terbit'])){
	if ((($_FILES["picture"]["type"] == "image/jpeg")|| ($_FILES["picture"]["type"] == "image/png")|| ($_FILES["picture"]["type"] == "image/jpeg"))&& ($_FILES["picture"]["size"] < 20000000)) {
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
	
		if(!empty($judul_artikel)) {
		$sql = mysql_query("INSERT INTO artikel VALUES('','$judul_artikel','$deskripsi_artikel', 1 ,now(),'$picture')");
		if($sql){
			?>
			<script language = "JavaScript">
			document.location='daftarartikel.php';
			alert('task successfully saved^^');
			</script>
			<?
		}
	}
	}
?>
<?

@$judul_artikel = $_POST['judul_artikel'];
@$deskripsi_artikel= $_POST['deskripsi_artikel'];
$picture = null;
$set = true;

if(isset($_POST['draft'])){
	if ((($_FILES["picture"]["type"] == "image/jpeg")|| ($_FILES["picture"]["type"] == "image/png")|| ($_FILES["picture"]["type"] == "image/jpeg"))&& ($_FILES["picture"]["size"] < 20000000)) {
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
	
		if(!empty($judul_artikel)) {
		$sql = mysql_query("INSERT INTO artikel VALUES('','$judul_artikel','$deskripsi_artikel', 2 ,now(),'$picture')");
		if($sql){
			?>
			<script language = "JavaScript">
			document.location='daftarartikel.php';
			alert('task successfully saved^^');
			</script>
			<?
		}
	}
	}

?>