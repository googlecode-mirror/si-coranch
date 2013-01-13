<?php 
session_start();
include "konek.php";
include"page_koperasi.php";

@$id_koperasi=$_POST['id_koperasi'];
$nama_koperasi=$_POST['nama_koperasi'];
$email_koperasi=$_POST['email_koperasi'];
$alamat_koperasi=$_POST['alamat_koperasi'];
$kecamatan_koperasi=$_POST['kecamatan_koperasi'];
$username = $_POST['username'];
$deskripsi_koperasi = $_POST['deskripsi_koperasi'];
$kontak_koperasi = $_POST['kontak_koperasi'];
$logo = null;
$set = true;

if(isset($_POST['username']) && isset($_POST['email_koperasi'])){
	if ((($_FILES["logo"]["type"] == "image/jpeg")|| ($_FILES["logo"]["type"] == "image/png")|| ($_FILES["logo"]["type"] == "image/jpeg"))&& ($_FILES["logo"]["size"] < 20000000)) {
		if($_FILES["logo"]["error"] > 0) {
			echo '<div class="alert alert-danger">Error<button class="close" data-dismiss="alert">&times;</button></div>';
			$set = false;
			}
		else {
			if (file_exists("logo/" . $_FILES["logo"]["name"])) {
				echo '<div class="alert alert-warning">File sudah ada<button class="close" data-dismiss="alert">&times;</button></div>';
				move_uploaded_file($_FILES["logo"]["tmp_name"], "logo2/" . $_FILES["logo"]["name"]);
				$logo = "logo/" . $_FILES["logo"]["name"];
			}
			else {
				move_uploaded_file($_FILES["logo"]["tmp_name"], "logo/" . $_FILES["logo"]["name"]);
				$logo = "logo/" . $_FILES["logo"]["name"];
			}
		}
	}
}

if( $_FILES["logo"]["name"] == ''){
	$sql = " UPDATE koperasi SET 
	nama_koperasi='".$nama_koperasi."', 
	email_koperasi='".$email_koperasi."', 
	alamat_koperasi='".$alamat_koperasi."', 
	kecamatan_koperasi='".$kecamatan_koperasi."', 
	
	
	deskripsi_koperasi='".$deskripsi_koperasi."', 
	kontak_koperasi='".$kontak_koperasi."' 
	where id_koperasi=".$_SESSION['id_koperasi'];
	
	$b = mysql_query($sql) or die(mysql_error());
}else{
	$sql = " UPDATE koperasi SET 
	nama_koperasi='".$nama_koperasi."', 
	email_koperasi='".$email_koperasi."', 
	alamat_koperasi='".$alamat_koperasi."', 
	kecamatan_koperasi='".$kecamatan_koperasi."', 

	deskripsi_koperasi='".$deskripsi_koperasi."', 
	kontak_koperasi='".$kontak_koperasi."', 
	logo='".$logo."'
	where id_koperasi=".$_SESSION['id_koperasi'];
	
	$b = mysql_query($sql) or die(mysql_error());
}


if($b){
header('location:profil_koperasi.php');
}
else{
echo"Daftar Gagal Diupdate<br> <a href='profil_koperasi.php?=error'>lihat daftar</a>";
}
?>