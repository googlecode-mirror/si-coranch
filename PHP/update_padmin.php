<?php 
session_start();
include "konek.php";
include"page.php";

@$id_admin=$_POST['id_admin'];
$nama_admin=$_POST['nama_admin'];
$username = $_POST['username'];
$email_admin=$_POST['email_admin'];
$foto_admin = null;
$set = true;

if(isset($_POST['username']) && isset($_POST['email_admin'])){
	if ((($_FILES["foto_admin"]["type"] == "image/jpeg")|| ($_FILES["foto_admin"]["type"] == "image/png")|| ($_FILES["foto_admin"]["type"] == "image/jpeg"))&& ($_FILES["foto_admin"]["size"] < 20000000)) {
		if($_FILES["foto_admin"]["error"] > 0) {
			echo '<div class="alert alert-danger">Error<button class="close" data-dismiss="alert">&times;</button></div>';
			$set = false;
			}
		else {
			if (file_exists("foto_admin/" . $_FILES["foto_admin"]["name"])) {
				echo '<div class="alert alert-warning">File sudah ada<button class="close" data-dismiss="alert">&times;</button></div>';
				move_uploaded_file($_FILES["foto_admin"]["tmp_name"], "foto_admin2/" . $_FILES["foto_admin"]["name"]);
				$foto_admin = "foto_admin/" . $_FILES["foto_admin"]["name"];
			}
			else {
				move_uploaded_file($_FILES["foto_admin"]["tmp_name"], "foto_admin/" . $_FILES["foto_admin"]["name"]);
				$foto_admin = "foto_admin/" . $_FILES["foto_admin"]["name"];
			}
		}
	}
}

if( $_FILES["foto_admin"]["name"] == ''){
	$sql = " UPDATE admin SET nama_admin='".$nama_admin."', username='".$username."',email_admin='".$email_admin."'where id_admin=".$_SESSION['id_admin'];
	
	$b = mysql_query($sql) or die(mysql_error());
}else{
	$sql = " UPDATE admin SET nama_admin='".$nama_admin."', username='".$username."',email_admin='".$email_admin."',foto_admin='".$foto_admin."'where id_admin=".$_SESSION['id_admin'];
	
	$b = mysql_query($sql) or die(mysql_error());
}


if($b){
header('location:profil.php');
}
else{
echo"Daftar Gagal Diupdate<br> <a href='profil.php?=error'>lihat daftar</a>";
}
?>