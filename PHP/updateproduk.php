<?php 
session_start();
include "konek.php";
include"page_koperasi.php";

$id_produk=$_POST['id'];
$nama_produk = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];
$kategori_produk = $_POST['kategori_produk'];
$status_produk = $_POST['status_produk'];
$deskripsi_produk = $_POST['deskripsi_produk'];
$produk = null;
$set = true;

if(isset($_POST['nama_produk']) && isset($_POST['harga_produk'])){
	if ((($_FILES["produk"]["type"] == "image/jpeg")|| ($_FILES["produk"]["type"] == "image/png")|| ($_FILES["produk"]["type"] == "image/jpeg"))&& ($_FILES["produk"]["size"] < 20000000)) {
		if($_FILES["produk"]["error"] > 0) {
			echo '<div class="alert alert-danger">Error<button class="close" data-dismiss="alert">&times;</button></div>';
			$set = false;
			}
		else {
			if (file_exists("produk/" . $_FILES["produk"]["name"])) {
				echo '<div class="alert alert-warning">File sudah ada<button class="close" data-dismiss="alert">&times;</button></div>';
				move_uploaded_file($_FILES["produk"]["tmp_name"], "produk2/" . $_FILES["produk"]["name"]);
				$produk = "produk/" . $_FILES["produk"]["name"];
			}
			else {
				move_uploaded_file($_FILES["produk"]["tmp_name"], "produk/" . $_FILES["produk"]["name"]);
				$produk = "produk/" . $_FILES["produk"]["name"];
			}
		}
	}
}

if( $_FILES["produk"]["name"] == ''){
	$sql = "UPDATE produk SET nama_produk='$nama_produk',harga_produk='$harga_produk',kategori_produk='$kategori_produk',status_produk='$status_produk',deskripsi_produk='$deskripsi_produk' WHERE id_produk=$id_produk";
	
	$b = mysql_query($sql) or die(mysql_error());
}else{
$sql = "UPDATE produk SET nama_produk='$nama_produk',harga_produk='$harga_produk',kategori_produk='$kategori_produk',status_produk='$status_produk',deskripsi_produk='$deskripsi_produk',produk='$produk' WHERE id_produk=$id_produk";

$b = mysql_query($sql) or die(mysql_error());
}


if($b){
header('location:viewproduk.php');
}
else{
echo"Daftar Gagal Diupdate<br> <a href='formproduk.php'>lihat daftar</a>";
}
?>