<?php
session_start(); //attiva la sessione per questa pagina

include("verifydata.php");

$data = json_decode(file_get_contents("data.json"));
$data[] = [
    "nom" => strip_tags($_POST["nom"]),
    "prenom" => strip_tags($_POST["prenom"]),
    "email" => strip_tags($_POST["email"]),
    "date" => strip_tags($_POST["date"]),
    "pwd" => strip_tags (password_hash($_POST["pwd"], PASSWORD_DEFAULT)),
    "genre" => strip_tags($_POST["genre"]),
    "nat" => strip_tags($_POST["nat"]),
    "com" => strip_tags($_POST["com"])
];
file_put_contents("data.json", json_encode($data));
// var_dump(json_encode($data));
header("Location: formulaire.php?result=ok");
exit;