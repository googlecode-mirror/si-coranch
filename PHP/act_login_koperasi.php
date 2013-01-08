<?php
session_start();
include "konek.php";
include "page_koperasi.php";
	
if($_POST){
$username=$_POST['username'];
$pass=$_POST['pass'];
//$id=$_POST['id'];
$query=mysql_query("SELECT * FROM koperasi where username='$username' and pass='$pass'")or die (mysql_error());
//$result=mysql_fetch_array($query);
$row = mysql_num_rows($query);

if($row > 0) {
	while($aa = mysql_fetch_array($query)){
		$_SESSION['id_koperasi']= $aa['id_koperasi'];
		//$_SESSION['nama_koperasi']= $aa['nama_koperasi'];
		$_SESSION['username']=$aa['username'];
		$_SESSION['pass']=$pass;
		//$_SESSION['id_koperasi']= $idkoperasi;
	//}
		header('Location:viewproduk.php');
	}
}
else {
	
    header('Location:index.php?warning');
}
}
?>