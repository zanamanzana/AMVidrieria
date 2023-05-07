<?php
function conectar(){
    $servername = "localhost";
    $database = "medidas";
    $username = "root";
    $password = "";

    $mysqli = new mysqli($servername, $username, $password, $database);
    $mysqli->set_charset("utf8");

    return $mysqli;
}
?>

