<?php
include("verifydata.php");

$data = json_decode(file_get_contents("data.json"));
$data[] = [
    "nom" => htmlentities($_POST["nom"]),
    "prenom" => htmlentities($_POST["prenom"]),
    "email" => htmlentities($_POST["email"]),
    "date" => htmlentities($_POST["date"]),
    "pwd" => htmlentities (password_hash($_POST["pwd"], PASSWORD_DEFAULT)),
    "genre" => htmlentities($_POST["genre"]),
    "nat" => htmlentities($_POST["nat"]),
    "com" => htmlentities($_POST["com"])
];
file_put_contents("data.json", json_encode($data));
// var_dump(json_encode($data));
header("Location: index.php?result=ok");
exit;
?>