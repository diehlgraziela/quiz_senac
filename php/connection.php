<?php
$hostname = "localhost";
$db = "quiz";
$user = "root";
$password = "";

$mysqli = new mysqli($hostname, $user, $password, $db);

if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
    echo "Conectado";
}
