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
			<th colspan="2">
				Uploader
			</th>
		</tr>
		<tr class="cell0">
		<td colspan="2">
			<div align="center">
			<form action="#upload" method="post" enctype="multipart/form-data">
			<input accept="file" type="file" multiple="file" name="file" style="width:40%;"></input> <input type="submit" name="submit" value="Upload"/></input><br>
			<input type="checkbox" name="redirect" checked="true"/>Redirect directly to file after uploading
		</td></tr>
		<tr class="cell0"><td colspan="2"><br></td></tr>
		<tr class="cell0" align="center">
			<td style="width:25%;"><b>Short description:</b></td> 
			<td style="width:75%;"><input type="text" name="desc" style="width:100%;"/></td>
			</tr>
		<tr class="cell0" align="center">
			<td style="width:25%;"><b>Long description:</b><br></td>
			<td style="width:75%;"><textarea name="ldesc" style="width:100%;height:240px;max-width:100%;"></textarea></td>
			</form>
			</div>
		</td>
		</tr></table>';
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
		<table class=\"outline margin\">
		<tbody><tr class=\"header1\">
			<th>
				Infobox
			</th>
		</tr>
		<tr class=\"cell0\">
		<td><ul>
			<b>Uploaded by user:</b> <a href=\"?page=profile&id=$loguserid\">Show profile</a><br>
			<b>Date: </b>". date('l jS \of F Y h:i:s A');"
		</ul></td>
		</tr>
		";

		$eintrag = "INSERT INTO uploadedfiles
			(id, user, description, filename)
		VALUES
			('5', '$loguserid', '$desc','$file')";
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
