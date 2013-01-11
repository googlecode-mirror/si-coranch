<?php 
session_start();
include "konek.php";
		
		@$pass =$_POST['pass'];
		@$username =$_POST['username'];
		@$passworda =$_POST['passworda'];
		@$passwordb =$_POST['passwordb'];

if(isset($_POST['simpan'])){		
	$ada= mysql_query("SELECT*FROM admin where pass='$pass'");
	while($data= mysql_fetch_array($ada)){
		
		if (@$data >= 1){

				if($passworda == $passwordb){
					$query=mysql_query("UPDATE admin SET pass='$passworda' where username='".$data['username']."'");
					if($query){
						header('location:profil.php?message=success');
					}else{
						header('location:profil.php?message=warning');
					}
				}
		}
	}
			
}
?>