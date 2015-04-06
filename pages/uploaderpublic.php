<?php
if (!defined('BLARG')) die();
MakeCrumbs(array(actionLink("uploader") => __("Uploader / Public")), $links);
$title = __("Uploader / Public");
$links = array();
if(HasPermission('admin.editsettings'))
{
	//$links[] = actionLinkTag(__("Set up Uploader"), "...", '', 'field=uploaderText');
}

/*function upload_info()
{
	echo "
		<b>Uploaded by user:</b> <a href=\"?page=profile&id=$loguserid\">Show profile</a><br>
		<b>Date: </b>". date('l jS \of F Y h:i:s A');";
}*/

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

$submit = $_POST['submit']; //Port variable from HTML
$file = $_POST['file']; //Port variable from HTML

if($submit) //If you clicked on upload
{
	date_default_timezone_set('UTC');
	$target_dir = "uploads/"; //Target folder ./root/uploads
	$target_dir = $target_dir . basename( $_FILES["file"]["name"]); //Pack file for target folder
	$uploadOk=1; //If ok

	if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir)) { //If uploading was successfully
		/*$db = $_POST['file']; //Rename variable file into db for mysql
		$db = "INSERT INTO Tabellenname
		(url, urlname, name, beschreibung)
		VALUES
		('$url', '$urlname', '$name', '$beschreibung')";

		$eintragen = mysql_query($eintrag);*/
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
