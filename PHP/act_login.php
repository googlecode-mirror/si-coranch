<?php
session_start();
include "konek.php";
//include "page.php";		
//
if($_POST){
$username_admin=$_POST['username'];
$pass_admin=$_POST['pass'];
$query=mysql_query(" SELECT * FROM admin where username_admin='$username_admin' and pass_admin='$pass_admin' ")or die (mysql_error());
$result=mysql_fetch_array($query);
$row = mysql_num_rows($query);
//echo $row;				
	if($row == 0){
	?>
		<script language = "JavaScript">
		alert("username / Password anda salah");
		document.location='login.php?warning';
		</script>
	<?						
	}
	else{
		$_SESSION['username_admin']=$username_admin;
		$_SESSION['pass_admin']=$pass_admin;
			header('Location:register.php');
	}
}
?>