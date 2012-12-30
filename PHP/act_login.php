<?php
session_start();
include "konek.php";
include "page_koperasi.php";
	
if($_POST){
$username=$_POST['username'];
$pass=$_POST['pass'];
$query=mysql_query("SELECT * FROM admin where username='$username' and pass='$pass'")or die (mysql_error());

$row = mysql_num_rows($query);

if($row > 0) {
	while($aa = mysql_fetch_array($query)){
		$_SESSION['id_admin']= $aa['id_admin'];
		$_SESSION['username']=$aa['username'];
		$_SESSION['pass']=$pass;
		header('Location:dashboard.php');
	}
}
else {
	
    header('Location:login.php?warning');
}
}
?>