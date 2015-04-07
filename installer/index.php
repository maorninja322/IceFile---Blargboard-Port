<html lang="en">
<head>
<title>Uploader Installer</title>
<style>
html, body { background: black; color: white; font-family: calibri; }
div.main {
	background: grey;
	margin: 32px;
	border-bottom: #444 solid 4px;
}
div.main hr {
	border-color: black;
	border-style: solid;
	border-width: 3px;
}
div.main input[type="submit"] {
	width: 50%;
	border: solid 2px #aaa;
	color: white;
	background: rgba(100,100,100,0.2);
	margin-bottom: 16px;
}
div.main input {
	border: solid 2px #aaa;
	color: white;
	background: rgba(100,100,100,0.2);
}
div.message {
	position: absolute;
	top: 2px;
	right: 2px;
}
div#animation {
    -webkit-animation-name: animation;
    -webkit-animation-duration: 4s;
    animation-name: animation;
    animation-duration: 4s;
	position: absolute;
	top: 0px;
}
div#animation a {
	color: grey;;
	font-weight: bold;
}

@-webkit-keyframes animation {
    0%   {letter-spacing: 0px; background: black;}
    50% {letter-spacing: 2px; background: white;}
    100%   {letter-spacing: 0px; background: black;}
}

@keyframes animation {
    0%   {letter-spacing: 0px; background: black;}
    50% {letter-spacing: 2px; background: white;}
    100%   {letter-spacing: 0px; background: black;}
}
</style>
</head>
<body>
<div id="animation">Visit us: <a href="http://newersmb7.byethost8.com/" target="_blank">Skiaak's Project</a> / <a href="http://starland-lair.ml" target="_blank">StarLand's Lair</a></div>
<form action="install.php" method="post">
<div class="main" align="center">
<h1>Uploader Installer - V0.1A</h1>
<hr>
<table>
<tr>
<td><b>DB Server:</b></td>
<td><input type="text" name="dbs"></input></td>
</tr>
<tr>
<td><b>DB User:</b></td>
<td><input type="text" name="dbu"></input></td>
</tr>
<tr>
<td><b>DB Password:</b></td>
<td><input type="password" name="dbp"></input></td>
</tr>
<tr>
<td><b>DB Table:</b></td>
<td><input type="text" name="dbt"></input></td>
</tr>
</table>
<hr>
<input type="checkbox" disabled="disabled">Add link on topbar</input>
<hr>
<input type="submit" name="submit" value="Install"></input><hr>
<b>Important:</b> Only useable for blargboard Plus & XD
<hr>
Copyright &copy; StarLand, 2015
</div>
</form>
</body>
</html>
