<?php
if (isset ($_SERVER['WINDIR'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetbancaire";
}else{	
$servername = "172.17.0.2";
$username = "root";
$password = "";
$dbname = "projetbancaire";}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	
}

$sql = "SELECT id, nom, datedenaissance FROM client";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " - id: " . $row["id"]. " - Nom: " . $row["nom"]. " - Date de naissance: " . $row["datedenaissance"]. "<br>";
		
    }
} else {
    echo "0 resultats";
}
$conn->close();
?>
