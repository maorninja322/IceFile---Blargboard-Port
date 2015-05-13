<!DOCTYPE html>
<html>
<html lang="en">
<head>
<title>Uploader Installer</title>
<!--Fork me on GitHub banner--><style>#forkongithub a{background:#a;color:#fff;text-decoration:none;font-family:arial,sans-serif;text-align:center;font-weight:bold;padding:5px 40px;font-size:1rem;line-height:2rem;position:relative;transition:0.5s;}#forkongithub a:hover{background:#c11;color:#fff;}#forkongithub a::before,#forkongithub a::after{content:"";width:100%;display:block;position:absolute;top:1px;left:0;height:1px;background:#fff;}#forkongithub a::after{bottom:1px;top:auto;}@media screen and (min-width:800px){#forkongithub{position:fixed;display:block;top:0;right:0;width:200px;overflow:hidden;height:200px;z-index:9999;}#forkongithub a{width:200px;position:absolute;top:60px;right:-60px;transform:rotate(45deg);-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);-moz-transform:rotate(45deg);-o-transform:rotate(45deg);box-shadow:4px 4px 10px rgba(0,0,0,0.8);}}</style><span id="forkongithub"><a href="https://github.com/StarLand64/IceFile---Blargboard-Port">Fork me on GitHub</a></span>
<style type="text/css">
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
<div id="animation">Need Support? Join <a href="http://starland-lair.ml" target="_blank">StarLand's Lair</a>.</div>
<form action="install.php" method="post">
<div class="main" align="center">
<h1>Uploader Installer - V0.1A</h1>
<hr>
<table>
<tr>
<td><b>MySQL Database Server:</b></td>
<td><input type="text" name="dbs"></input></td>
</tr>
<tr>
<td><b>MySQL Database Username:</b></td>
<td><input type="text" name="dbu"></input></td>
</tr>
<tr>
<td><b>MySQL Database Password:</b></td>
<td><input type="password" name="dbp"></input></td>
</tr>
<tr>
<td><b>MySQL Database Table:</b></td>
<td><input type="text" name="dbt"></input></td>
</tr>
</table>
<hr>
<input type="checkbox" disabled="disabled">Add link on topbar</input>
<hr>
<input type="submit" name="submit" value="Install"></input><hr>
<b>Important:</b> This Version of Icefile is Only Useable on boards running Blargboard Plus and XD
<hr>
Copyright &copy;2014-<?php echo date("Y"); ?> StarLand<br />
<a href="https://github.com/StarLand64/IceFile---Blargboard-Port">View This Project on GitHub</a>
</div>
</form>
</body>
</html>
