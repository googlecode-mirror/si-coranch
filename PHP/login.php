<?
session_start();
include "konek.php";
//include"page.php";
?>
<html>
<head>
	<link id="bs-css" href="css/login.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="css/login1.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<body>


		<div class="container-fluid">
		<div class="row-fluid">

			<div class="row-fluid" align="center" style="margin-top:150px">
					<h2>Si-Coranch</h2>
			</div>

			<center><div class="row-fluid">
				<div class="well span5 center login-box">
					<div class="alert alert-info">
						silahkan masukan Username dan Pasword.
					</div>
					<form class="form-horizontal" action="act_login.php" method="post">
					
						<fieldset>
							<div class="input-prepend" title="Username" data-rel="tooltip">
							
								<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="username" id="username" type="text" autofocus="autofocus" placeholder="Username" required="silahkan masukan username"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="pass" id="pass" type="password" placeholder="password" required="gcfhgcfhgchg"/>
							</div>

							<p class="center span12">
							<button type="submit" class="btn btn-primary">Login</button>
							</p>
						</fieldset>
					</form>
				</div>
			</div></center>
		</div>
	</div>		
</body>
</html>
