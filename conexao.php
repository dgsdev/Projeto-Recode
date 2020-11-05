<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "projetorecode";

$link = mysqli_connect($servername, $username, $password, $database);

if(!$link){
    die("A conexão mySQL falhou!".mysqli_connect_error());
} 

?>

