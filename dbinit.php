<?php

$host="localhost";
$port="3306";
$user="root";
$password="12345678";
$dbname="Test";

$con = new mysqli($host, $port, $user, $password, $dbname);
//or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();

$query = "SELECT  user_id, fname FROM  users";

if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($idusers, $name, $lastname);
    while ($stmt->fetch()) {
        printf("%s, %s\n", $idusers, $name, $lastname);
    }
    $stmt->close();
}

?>
