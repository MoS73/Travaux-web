<?php
if(!isset($_POST)){
    header("Location: formulaire.php?result=ko");
    exit;
}
function validateDate($date, $format = 'Y-m-d'){
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) === $date;
}
$errors = [];
if(empty($_POST['nom'])){
    $errors["nom1"] = "Le nom est obligatoire.</br>";
}
else if(!preg_match('/^([a-zA-Z\'\-]{2,21})$/', $_POST['nom'])){
    $errors["nom2"] = "Le nom est mal composé!</br>";
}
if(empty($_POST['prenom'])){
    $errors["prenom1"] = "Le prénom est obligatoire.</br>";
}
else if(!preg_match('/^([a-zA-Z\'\-]{2,21})$/', $_POST['prenom'])){
    $errors["prenom2"] = "Le prenom est mal composé!</br>";
}
if(empty($_POST['email'])){
    $errors["email1"] = "L'email est obligatoire.</br>";
}
else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors["email2"] = "L'email n'est pas valide.</br>";
}
else if(!preg_match('/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/', $_POST['email'])) {
    $errors["email3"] = "L'email est mal composé!</br>";
    }
if(empty($_POST['date'])){
    $errors["date1"] = "La date de naissance est obligatoire.</br>";
}
else if(!validateDate($_POST['date'])){
    $errors["date2"] = "La date de naissance est mal formé.</br>";
}
if(empty($_POST['pwd'])){
    $errors["pwd1"] = "Le mot de passe est obligatoire.</br>";
}
else if(!preg_match('/^(?=.{8,12})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%]).*$/', $_POST['pwd'])) {
        $errors["pwd2"] = "Le mot de passe est mal composé!</br>";
    }
if(empty($_POST['genre'])){
    $errors["genre"] = "Le genre est obligatoire.</br>";
}
if(empty($_POST['nat']) || $_POST['nat'] == "Nationalité*"){
    $errors["nat"] = "La nationalité est obligatoire.</br>";
}
if(empty($_POST['com'])){
    $errors["com"] = "Merci de critiquer en lachant un commentaire.</br>";
}
if(!empty($errors)){
    //echo implode("<br>", $errors);
    //$log = "[".date("Y-m-d H:i:s")."] - Validation de formulaire échoué : [ ".implode(" - ", $errors)."]\n";
    //var_dump($errors);
    //error_log($log, 3, "log.txt");
    //exit;
    $_SESSION["tab_errors"]= $errors;
    header("Location: formulaire.php?result=ko");
    exit;
} else {
    $log = "[".date("Y-m-d H:i:s")."] - Validation de formulaire réussi\n";
    error_log($log, 3, "log.txt");
}