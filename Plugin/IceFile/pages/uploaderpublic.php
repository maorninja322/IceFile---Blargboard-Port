<?php
if (!defined('BLARG')) die();
MakeCrumbs(array(actionLink("uploader") => __("Uploader / Public")), $links);
$title = __("Uploader / Public");
$links = array();
CheckPermission('forum.postreplies');
if($loguserid)
{
	echo '
	<table class="outline margin">
		<tbody><tr class="header1">
			<th colspan="2">
				Uploader
			</th>
		</tr>
		<tr class="cell0 center">
		<td colspan="2">
			<form action="#upload" method="post" enctype="multipart/form-data">
			<input accept="file" type="file" multiple="file" name="file" style="width:40%;"></input> <input type="submit" name="submit" value="Upload"/></input><br>
		</form></td></tr>
</table>';
}
$submit = $_POST['submit']; //Port variable from HTML
$file = $_POST['file']; //Port variable from HTML
$desc = $_POST['desc']; //Short description - Port variable from HTML
$ldesc = $_POST['ldesc']; //Long description - Port variable from HTML
if($submit) //If you clicked on upload
{
	date_default_timezone_set('UTC');
	$target_dir = "uploads/"; //Target folder ./root/uploads
	$target_dir = $target_dir . basename( $_FILES["file"]["name"]); //Pack file for target folder
	$uploadOk=1; //If ok
	if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir)) { //If uploading was successfully
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
			<br><br>
			</div>
		</td>
		</tr>
		</table>";
	}	
	else //If uploading was NOT successfully
	{
		echo "
		<table class=\"outline margin\">
		<tbody><tr class=\"header1\">
			<th>
				Error
			</th>
		</tr>
		<tr class=\"cell0\">
		<td>
			<div align=\"center\">
			Unable to upload file
			</div>
		</td>
		</tr>
		";		
	}
}
?>
