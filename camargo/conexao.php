<?php 
    session_start();

    $servidor = "localhost";
    $banco="Camargo";
    $usuario="root";
    $senha="";

    $pdo = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

    

?>