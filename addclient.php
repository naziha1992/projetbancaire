<?php
$nom=$_POST['nom'];
$dn=$_POST['dn'];
$link=mysqli_connect("localhost","root","","projetbancaire");
mysqli_query($link, "INSERT INTO client value(0,\"".$nom."\",\"".$dn."\")");
$SQL="insert into client values (0,\"".$nom."\",\"".$dn."\")";
echo $SQL;
?>