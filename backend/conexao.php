<?php

$servername = "sql102.epizy.com";
$username = "epiz_26883339";
$password = "@DGSjuh12";
$database = "epiz_26883339_jump";

$link = mysqli_connect($servername, $username, $password, $database);

if(!$link){
    die("A conexão mySQL falhou!".mysqli_connect_error());
} 
/*
sql102.epizy.com
epiz_26883339
@DGSjuh12
epiz_26883339_jump
*/



