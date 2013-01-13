<?php 
session_start();
include "konek.php";
		
		@$pass =$_POST['pass'];
		@$passworda =$_POST['passworda'];
		@$passwordb =$_POST['passwordb'];

if(isset($_POST['simpan'])){		
	$ada= mysql_query("SELECT*FROM koperasi where pass='$pass'");
	while($data= mysql_fetch_array($ada)){
		
		if (@$data >= 1){

				if($passworda == $passwordb){
					$query="UPDATE koperasi SET pass='$passworda' where pass='$pass' ";
					if($query){
						header('location:profil_koperasi.php?message=success');
					}else{
						header('location:profil_koperasi.php?message=warning');
					}
				}
		}
	}
			
}
?>