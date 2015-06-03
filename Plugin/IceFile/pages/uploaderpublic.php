<?php
if (!defined('BLARG')) die();
MakeCrumbs(array(actionLink("uploader") => __("Uploader / Public")), $links);
$title = __("Uploader / Public");
$links = array();
CheckPermission('forum.postreplies');
if(!$loguserid)
{
	Kill(__(Log on to access the uploader))
}
else
{
?>
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
			<input type="checkbox" name="redirect">Redirect to file after uploading <sup><span style="color:#B33;">beta</span></sup></input><br>
		</form></td></tr>
</table><?php
}
$submit = $_POST['submit']; //Port variable from HTML
$file = $_POST['file']; //Port variable from HTML
if($submit) //If you clicked on upload
{
	date_default_timezone_set('UTC');
	$target_dir = "uploads/"; //Target folder ./root/uploads
	$target_dir = $target_dir . basename( $_FILES["file"]["name"]); //Pack file for target folder
	$uploadOk = 1; //If ok
	$acceptedFormats = array('bmp','gif','png','jpg','rar','7z','zip','gz','tar','txt','rtf','svg');
	if(!in_array(pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION), $acceptedFormats))
	{
		?><table class="outline margin">
		<tr class="header1">
			<th>
				Error
			</th>
		</tr>
		<tr class="cell0 center">
		<td>
			File extension isn't allowed.
		</td>
		</tr>
		</table>
		<?php
	}
	else{
		if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir)) { //If uploading was successfully
			?>
			<table class="outline margin">
			<tbody><tr class="header1">
				<th>
					Successfully
				</th>
			</tr>
			<tr class="cell0 center">
			<td>
				Your file was successfully uploaded - <?php echo '<a href=\"uploads/". basename( $_FILES["file"]["name"])."\">Please follow this link</a>';?>
			</td>
			</tr>
			</table><?php
			if($redirect == true) {
				header("Location: uploads/". basename( $_FILES["file"]["name"])."");
			}
		}	
		else //If uploading was NOT successfully
		{
			?>
			<table class="outline margin"><tr class="header1">
				<th>
					Error
				</th>
			</tr>
			<tr class="cell0 center">
			<td>
				Unable to upload file
			</td>
			</tr>
			</table>
			<?php		
		}
	}
}
?>
