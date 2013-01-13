<?php
session_start();
$host = 'localhost';
$user = 'root';
$pass = '';
$dbnm = 'sicoranch';

include"produk.php";
include"page_koperasi.php";
$db = new Produk($host,$user,$pass,$dbnm);

$nama_produk = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];
$kategori_produk = $_POST['kategori_produk'];
$status_produk = $_POST['status_produk'];
$deskripsi_produk = $_POST['deskripsi_produk'];
$produk = null;
$id_koperasi = $_SESSION['id_koperasi'];
$set = true;

if(isset($_POST['simpan'])){
	if ((($_FILES["produk"]["type"] == "image/jpeg")|| ($_FILES["produk"]["type"] == "image/png")|| ($_FILES["produk"]["type"] == "image/jpg"))&& ($_FILES["produk"]["size"] < 20000000)) {
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
	
	$data = array(
			'id_koperasi' => $id_koperasi,
			'nama_produk' => $nama_produk,
			'harga_produk' => $harga_produk,
			'kategori_produk' => $kategori_produk,
			'status_produk' => $status_produk,
			'deskripsi_produk' => $deskripsi_produk,
			'produk' => $produk
		);
	$db -> simpan_produk($data);
	}
	if($db){
			header('location:viewproduk.php?message=success');
		}
	if(isset ($_POST['batal'])) {
			header('location:viewproduk.php?message=warning');
	}

?>