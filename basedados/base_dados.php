<?php

$base_dados = [
    "dbname" => "sebastiaoalves_bd",
    "host" => "localhost",
    "user" => "root",
    "password" => ""
];

$pdo = new PDO("mysql:dbname=".$base_dados["dbname"].";host=".$base_dados["host"], $base_dados["user"], $base_dados["password"]);

function selectSQL($sql){
    global $pdo;
    $query = $pdo->query($sql);
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function selectSQLUnico($sql){
    global $pdo;
    $query = $pdo->query($sql);
    return $query->fetch(PDO::FETCH_ASSOC);
}

function iduSQL($sql){
    global $pdo;
    $pdo->query($sql);
}

?>