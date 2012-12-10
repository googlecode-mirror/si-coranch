<?php
include "konek.php";

@$nama_koperasi = $_POST['nama_koperasi'];
@$email_koperasi = $_POST['email_koperasi'];
@$alamat_koperasi = $_POST['alamat_koperasi'];
@$kecamatan_koperasi = $_POST['kecamatan_koperasi'];
@$username_koperasi = $_POST['username_koperasi'];
@$pass_koperasi = $_POST['pass_koperasi'];
@$deskripsi_koperasi = $_POST['deskripsi_koperasi'];
@$kontak_koperasi = $_POST['kontak_koperasi'];
$logo = null;
$set = true;
if(isset($_POST['simpan'])){
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


	if(isset ($_POST['simpan'])) {
		$sql = mysql_query("INSERT INTO koperasi VALUES('','$nama_koperasi','$email_koperasi', '$alamat_koperasi', '$kecamatan_koperasi', '$username_koperasi', '$pass_koperasi', '$deskripsi_koperasi','$kontak_koperasi', '$logo')");
		if($sql){
			?>
			<script language = "JavaScript">
			document.location='koperasi.php';
			alert('task successfully saved^^');
			</script>
			<?
		}
	}

?>