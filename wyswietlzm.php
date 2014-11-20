<html>
<head>
	<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=utf-8">
	<title>Katalog dowcipów</title>
</head>
<body bgcolor="silver">
<center><font color="navy" size="4">KATALOG DOWCIPÓW</font></center> <br>
<font color="blue">
<?php
$wyswietl = simplexml_load_file('dowcipy.xml');
	foreach ($wyswietl->dowcip as $dowcipy)
		{
		echo "<b>Nr $dowcipy->nr </b><br> $dowcipy->tresc <br>$dowcipy->tresc2<br>";
		}



?>
</font>
</body>
</html>
