<?php

if (!defined('BLARG')) die();
MakeCrumbs(array(actionLink("uploader") => __("Uploader / Public")), $links);
$title = __("Uploader / Public");
$links = array();
if(HasPermission('admin.editsettings'))
{
	//$links[] = actionLinkTag(__("Set up Uploader"), "...", '', 'field=uploaderText');
}

if($loguserid)
{
	echo '
	<table class="outline margin">
		<tbody><tr class="header1">
			<th>
				Uploader
			</th>
		</tr>
		<tr class="cell0">
		<td>
			<div align="center">
			<form action="#upload" method="post" enctype="multipart/form-data">
			<input accept="file" type="file" multiple="file" name="file"></input> <input type="submit" name="submit" value="Upload"/></input><br>
			<input type="checkbox" name="redirect" checked="true">Redirect directly to file after uploading
			</form>
			</div>
		</td>
		</tr>';
}

$submit = $_POST['submit'];
$file = $_POST['file'];

if($submit)
{
	$target_dir = "uploads/";
	$target_dir = $target_dir . basename( $_FILES["file"]["name"]);
	$uploadOk=1;

	if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir)) {
		
		echo "
		<table class=\"outline margin\">
		<tbody><tr class=\"header1\">
			<th>
				Successfully
			</th>
		</tr>
		<tr class=\"cell0\">
		<td>
			<div align=\"center\">
			Your file was successfully uploaded - <a href=\"uploads/". basename( $_FILES["file"]["name"])."\">Please follow this link</a>
			</div>
		</td>
		</tr>
		";
	}	
}
?>
