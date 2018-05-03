<html>
<head><title>Luokkaretki</title></head>
<body>
<?php
echo "<h1>Moi ";
if( isset($_GET['nimi']) ){
	echo $_GET['nimi'];
	if( $_GET['nimi'] == "Valtteri" ){
		echo "<img src='https://cdn-a.verkkokauppa.com/images/3/2_329423-1344x688.jpeg'>";
	}
}
else {
	echo "muukalainen";
}
echo "</h1>";
?>
<p>TiVi-17k:n unelmien täyttymys</p>
<p>Unelma on käymässä toteen ensi viikon torstaina
lähdemme Eeronkuja 3:n pihalta kello 6:00 kohti 
<a href="https://fi.wikipedia.org/wiki/Laitila">Laitilaa</a></p>
<img src="http://www.suomenpienpanimot.fi/img/brewery/laitilan-wirvoitusjuomatehdas-main.jpg">
</body>
</html>
