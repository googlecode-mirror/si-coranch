<?php 
session_start();
include "konek.php";
include"page.php";

$id_artikel = $_POST['id'];
$judul_artikel = $_POST['judul'];
$deskripsi_artikel = $_POST['deskripsi'];
$picture = null;
$set = true;

if(isset($_POST['judul']) && isset($_POST['deskripsi'])){
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
}

if( $_FILES["picture"]["name"] == ''){
	$sql = "UPDATE artikel SET judul_artikel='$judul_artikel',deskripsi_artikel='$deskripsi_artikel' WHERE id_artikel=$id_artikel";
	
	$b = mysql_query($sql) or die(mysql_error());
}else{
$sql = "UPDATE artikel SET judul_artikel='$judul_artikel', deskripsi_artikel='$deskripsi_artikel', picture='$picture' WHERE id_artikel=$id_artikel";

$b = mysql_query($sql) or die(mysql_error());
}


if($b){
header('location:daftarartikel.php');
}
else{
echo"Daftar Gagal Diupdate<br> <a href='daftarartikel.php'>lihat daftar</a>";
}
?>