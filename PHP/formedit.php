<?php
session_start();
include "konek.php";
include"page.php";
$sql="SELECT * FROM artikel WHERE id_artikel=".$_GET['id'];
$edit = mysql_query($sql);
$a = mysql_fetch_array($edit);
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Selamat Datang di SI-Coranch</title>
	<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/lala.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon.ico">	


<!-- TinyMCE -->
<script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,forecolor,backcolor",

		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Si-Coranch",
			staffid : "5210"
		}
	});
</script>
<!-- /TinyMCE -->
<script rel="stylesheet" src="tiny_mce/plugins/inlinepopups/skins/clearlooks2/window.css" type="text/javascript"></script>
<script rel="stylesheet" src="tiny_mce/themes/advanced/skins/default/ui.css" type="text/javascript"></script>	
</head>

<body>
		
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"> <img alt="SI-Coranch Logo" src="img/Favicon.png" /> <span>SI-Coranch</span></a>				
				<div class="btn-group pull-right" >
					<a class="btn btn-medium" href="logout.php">
						<i class="icon-user"></i><span class="hidden-phone"> Logout</span>
					</a>
				</div>
				<div class="top-nav nav-collapse">
					<ul class="nav">
						<li><a href="#">Visit Site</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
		<div class="container-fluid">
		<div class="row-fluid">
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Main</li>
						<li><a href="dashboard.php"><i class="icon-tasks"></i><span class="hidden-tablet"> Dashboard </span></a></li>
						
						<li><a href=""><i class="icon-tasks"></i><span class="hidden-tablet"> Artikel 
						<ul><a class="" href="daftarartikel.php"><i class="icon-Pencil"></i><span class="hidden-tablet" role = "treeitem"> Semua </span></a></ul>
						<ul><a class="" href="draftartikel.php"><i class="icon-Pencil"></i><span class="hidden-tablet" role = "treeitem"> Draf </span></a></ul>
						<ul><a class="" href="postartikel.php"><i class="icon-Pencil"></i><span class="hidden-tablet" role = "treeitem"> Diterbitkan </span></a></ul>
						</span></a>
						</li>
						<li><a href="koperasi.php"><i class="icon-eye-open"></i><span class="hidden-tablet"> Koperasi </span></a></li>
						
						<li><a href="profil.php"><i class="icon-edit"></i><span class="hidden-tablet"> Profil </span></a></li>
					</ul>
				</div>
			</div>
			
			<div id="content" class="span10">

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="dashboard.php">Dashboard</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="daftarartikel.php">Artikel</a> <span class="divider">/</span>
					</li>
					<li>
						<a>Edit Artikel</a>
					</li>
					
				</ul>
			</div>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="breadcrumb">
						<h2><i class="icon-picture"></i>Edit Artikel</h2>
					</div>
					<div class="box-content">
						<div class="container-fluid">
							<div class="row-fluid">
								<div class="span12">
								<form name="input" action="update.php" method="post" enctype="multipart/form-data">
									<div class="control-group">
										<label class="control-label" for="inputIcon">Judul</label>
										<div class="controls">
											<div class="input-prepend">
												<span class="add-on"><i class="icon-tasks"></i></span>
												<input class="input-large" type="judul_artikel" name="judul" value="<?php echo $a['judul_artikel']; ?>" autofocus="autofocus" required="required">
											</div>
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label" for="inputIcon">upload</label>
										<div class="controls">
											<div class="input-prepend">
												<input name="picture" type="file">
											</div>
										</div>
									</div>
									<div>
										<label class="control-label" for="inputIcon">Description</label>
										<div class="controls">
											<div class="input-prepend">
												<textarea  id="elm1" class="span10" rows="11" name="deskripsi"> <?php echo $a['deskripsi_artikel']; ?></textarea>
											</div>
										</div>
									</div>
									<input type="hidden" name ="id" value="<?php echo $a['id_artikel']; ?>">
									<form align="center" >			
									<input class="btn btn-large btn-primary" name="update" type="submit" id="update" value="Perbaharui">
									<input class="btn btn-large" type="reset" value="Reset">
									
									</form>
								  </form>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>