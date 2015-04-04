<?php
//  AcmlmBoard XD - Frequently Asked Questions page
//  Access: all
if (!defined('BLARG')) die();
MakeCrumbs(array(actionLink("uploader") => __("Uploader")), $links);
$title = __("Uploader");
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
			<div align="center"><a href="?page=uploaderprivate"><button>Private</button></a> <a href="?page=uploaderpublic"><button>Public</button></a></div>
		</td>
		</tr>
</tbody></table>
	<table class="outline margin">
		<tbody><tr class="header1">
			<th>
				Uploaded
			</th>
		</tr>
		<tr class="cell0">
		<td>
			<div align="center">No files uploaded yet...</div>
		</td>
		</tr>
</tbody></table>';
}
if(!$loguserid)
{
	echo '
	<table class="outline margin">
		<tbody><tr class="header1">
			<th>
				Error
			</th>
		</tr>
		<tr class="cell0">
		<td>
			<div align="center">You\'re not logged in</div>
		</td>
		</tr>
</tbody></table>';
}
?>
