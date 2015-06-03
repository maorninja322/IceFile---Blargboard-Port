<?php
mkdir("./uploads", 0700);
if (!defined('BLARG')) die();
MakeCrumbs(array(actionLink("uploader") => __("Uploader")), $links);
$title = __("Uploader");
$links = array();
?>
	<table class="outline margin">
		<tbody><tr class="header1">
			<th>
				Uploader
			</th>
		</tr>
		<tr class="cell0">
		<td>
			<div align="center"><a href="?page=uploaderpublic">Upload Files (Public)</a></div>
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
			<div align="center"><a href="?page=uploadedpublic">Show Uploaded Files</a></div>
		</td>
		</tr>
</tbody></table>
