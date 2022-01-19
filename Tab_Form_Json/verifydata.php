<?php
if(!isset($_POST)){
    header("Location: index.php?result=ko");
    exit;
}
function validateDate($date, $format = 'Y-m-d'){
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) === $date;
}
$errors = [];
if(empty($_POST['nom'])){
    $errors["nom"] = "Le nom est obligatoire.<br/>";
}
if(!preg_match('/^([a-zA-Z\'\-]{2,21})$/', $_POST['nom'])){
    echo 'nom incorrect';
}
if(empty($_POST['prenom'])){
    $errors["prenom"] = "Le prénom est obligatoire.<br/>";
}
if(!preg_match('/^([a-zA-Z\'\-]{2,21})$/', $_POST['prenom'])){
    echo 'prenom incorrect';
}
if(empty($_POST['email'])){
    $errors["email1"] = "L'email est obligatoire.<br/>";
}
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors["email2"] = "L'email est mal formé.<br/>";
}
    if(!preg_match('/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/', $_POST['email'])) {
        echo 'the password does not meet the requirements!.<br/>';
    }
if(empty($_POST['date'])){
    $errors["date1"] = "La date de naissance est obligatoire.<br/>";
}
if(!validateDate($_POST['date'])){
    $errors["date2"] = "La date de naissance est mal formée.<br/>";
}
if(empty($_POST['pwd'])){
    $errors["pwd"] = "Le mot de passe ne peut pas être vide.<br/>";
}
    if(!preg_match('/^(?=.{8,12})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])([^\s])(?=.*[!@#$%]).*$/', $_POST['pwd'])) {
        $errors["pwd2"] = 'the password does not meet the requirements!.<br/>';
    }//(?=.*\d) é equivalente a (?=.*[0-9])
if(empty($_POST['genre'])){
    $errors["genre"] = "Le genre est obligatoire.<br/>";
}
if(empty($_POST['nat']) || $_POST['nat'] == "Nationalité*"){
    $errors["nat"] = "La nationalité est obligatoire.<br/>";
}
if(empty($_POST['com'])){
    $errors["com"] = "Merci de critiquer en lachant un commentaire.<br/>";
}
if(!empty($errors)){
    //echo implode("<br>", $errors);
    $log = "[".date("Y-m-d H:i:s")."] - Validation de formulaire échoué : [ ".implode(" - ", $errors)."]\n";
    var_dump($errors);
    error_log($log, 3, "log.txt");
    exit;
    
} else {
    $log = "[".date("Y-m-d H:i:s")."] - Validation de formulaire réussi\n";
    error_log($log, 3, "log.txt");
    header("Location: index.php?result=ok");
}
?>
