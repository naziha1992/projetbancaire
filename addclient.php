<?php
$nom=$_POST['nom'];
$dn=$_POST['dn'];
$link=mysqli_connect("!72.17.0.2","root","","projetbancaire");
mysqli_query($link, "INSERT INTO client values(0,\"".$nom."\",\"".$dn."\")");

?>
