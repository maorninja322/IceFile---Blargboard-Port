<?php
@$dbs = $_POST['dbs'];
@$dbu = $_POST['dbu'];
@$dbp = $_POST['dbp'];
@$dbt = $_POST['dbt'];
@$submit = $_POST['submit'];

function move_files()
{
	rename("subpages/uploader.php", "../pages/uploader.php");
	rename("subpages/uploaderpublic.php", "../pages/uploaderpublic.php");
	rename("subpages/uploadedpublic.php", "../pages/uploadedpublic.php");
	echo "<span style=\"color:#2a2;\">Successfully Moved files<br>";
}

function writte_db()
{
	@$dbs = $_POST['dbs'];
	@$dbu = $_POST['dbu'];
	@$dbp = $_POST['dbp'];
	@$dbt = $_POST['dbt'];
	$db = fopen("uploader/db.php", "w") or die("<span style=\"color:#a22;\"><b>Error</b> - Could not create file");
	//START
	fwrite($db, "<?php\n");	
	//Database Server
	fwrite($db, '$dbserv = "');
	fwrite($db, $dbs);
	fwrite($db, '";');
	fwrite($db, "\n");
	//Database User
	fwrite($db, '$dbuser = "');
	fwrite($db, $dbu);
	fwrite($db, '";');
	fwrite($db, "\n");
	//Database Password
	fwrite($db, '$dbpass = "');
	fwrite($db, $dbp);
	fwrite($db, '";');
	fwrite($db, "\n");
	//Database Table
	fwrite($db, '$dbname = "');
	fwrite($db, $dbt);
	fwrite($db, '";');
	fwrite($db, "\n");
	//END
	fwrite($db, "?>");	
	//END of Function
	fclose($db);
	echo "<span style=\"color:#2a2;\">Successfully Created Database File<br><hr><br>";
	echo "Copy folder: uploader with db.php on root on your server (./uploader/db.php)";
}

if(!$submit)
{
	die('<span style="color:#a22;"><b>Error</b> - You have forget something</span>');
	exit;
}
else
{
	if(!$dbs)
	{
		die('<span style="color:#a22;"><b>Error</b> - Database Server not available</span>');		
		exit;
	}
	else
	{
		if(!$dbu)
		{
			die('<span style="color:#a22;"><b>Error</b> - Database User not available</span>');		
			exit;
		}
		else
		{
			if(!$dbp)
			{
				echo '<span style="color:#aa2;"><b>Warning</b> - Really no password</span><br>';		
			}
			if(!$dbt)
			{
				die('<span style="color:#a22;"><b>Error</b> - Database Table not available</span>');		
				exit;
			}
			move_files(); //Move files in folder /subpages to another place
			writte_db(); //Create File
		}
	}
}
?>
