<?php
if (!defined('BLARG')) die();
MakeCrumbs(array(actionLink("uploader") => __("Uploader")), $links);
$title = __("Uploaded");
$links = array();

$fake_error_01 = "This database does not exist.";
$fake_error_02 = "Unable to connect to the database.";

if($loguser)
{
	$connecting = @mysql_connect("SERVER","DB_USER","PASSWORD")
		or die ("$fake_error_02");
	mysql_select_db("u454956825_sl")
		or die ("$fake_error_01");
	$select = "SELECT id, filename, description, user FROM `uploadedfiles`";
	$result = mysql_query($select);
	echo "<table style=\"text-align:center;\"><tr class=\"cell0\">
		<td><b>Filename</b></td>
		<td><b>Description</b></td>
		<td><b>Profile/User</b></td>
	</tr>
	<tr>
	<td><br></td>
	</tr></table><table style=\"text-align:center;\"><tr class=\"cell0\">";
	while($row = mysql_fetch_object($result))
    {
		echo "
			<tr class=\"cell0\">
			<td>$row->filename</td>
			<td>$row->description</td>
			<td><a href='?page=profile&id=$row->user'>Show profile</a></td>
			</tr>
		";
	}
	echo "</tr></table>";
}
?>
