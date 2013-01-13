<?php
//session_start();
if (isset($_SESSION['pass']) && isset($_SESSION['username'])){

//echo'';
}
else{
	?><script language="javascript">
	//alert("Maaf, Anda tidak berhak mengakses halaman ini!!");
	document.location="index.php";
	</script>
	<?
}	
	?>