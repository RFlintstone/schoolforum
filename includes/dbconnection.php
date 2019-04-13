<?php

$servername = 'localhost';
$dbname = 'vopro_forum';
$username = 'root';
$password = '';

try
{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",
        $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
    echo "Connectie mislukt: " . $e->getMessage();
}

if($conn){
    echo "<script>";
    echo "console.log('Connectie gelukt (DB1)')";
    echo "</script>";
//    echo "Connectie gelukt (DB1)";
} else {
    echo "<script>";
    echo "console.log('Connectie mislukt (DB1)')";
    echo "</script>";
    echo "Connectie mislukt (DB1)";
}
echo "<br>";
echo "<br>";