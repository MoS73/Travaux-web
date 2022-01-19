<?php
session_start(); //attiva la sessione per questa pagina
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link href="exercice_mardi.css" rel="stylesheet">
    <title>Listing</title>
</head>
<body>
        <?php
          if(!empty($_SESSION["tab_errors"])){
              foreach($_SESSION["tab_errors"] as $error){
                  echo $error;
              }
              unset($_SESSION["tab_errors"]);
          }
        ?> 
    <div class="conteneur">
        <div class="box1">
            <fieldset class="fieldset">
                <legend>Listing</legend>
                <?php
                $file = file_get_contents("data.json");
                $data = json_decode($file);
                if (JSON_ERROR_NONE !== json_last_error()) {
                    printf("%s", json_last_error_msg());
                    exit;
                }
                ?>
                <table>
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Date de naissance</th>
                        <th>Genre</td>
                        <th>Nationnalitée</th>
                        <th>Commentaire</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    if (!empty($data))
                        foreach ($data as $personne):
                    ?>  
                    <tr>
                        <td><?php echo $personne->nom;?></td>
                        <td><?php echo $personne->prenom;?></td>
                        <td><?php echo $personne->email;?></td>
                        <td><?php echo $personne->date;?></td>
                        <td><?php echo $personne->genre;?></td>
                        <td><?php echo $personne->nat;?></td>
                        <td><?php echo $personne->com;?></td>
                    </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </fieldset>
        </div>
        <div class="box2">
        <fieldset>
            <legend>Formulaire d'enregistrement</legend>
            <form action="savedata.php" method="post">
            <p>Nom*</p>
            <input type="text" name="nom"  pattern="^([a-zA-Z\'\-]{2,21})$">
            <p>Prénom*</p>
            <input type="text" name="prenom"  pattern="^([a-zA-Z\'\-]{2,21})$">
            <p>Email*</p>
            <input type="email" name="email"  pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$">
            <p>Mot de passe*</p>
            <input type="password" name="pwd"  pattern="^(?=.{8,12})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%]).*$" title="Must contain at least one number, one uppercase letter, one lowercase letter, one of this special character ! @ # $ % and at least 8 to 12 characters">
            <!-- (?=.*\d) é equivalente a (?=.*[0-9]) -->
            <p>Date de naissance*</p>
            <input type="date" name="date" >
            <div>
            <input type="radio" id="homme" name="genre" value="pylone" >
            <label for="pylone">Homme</label>
            </div>
            <div>
            <input type="radio" id="femme" name="genre" value="puits" >
            <label for="femme">Femme</label>
            </div>
            <div>
            <select name="nat" id="nationnalitée" >
            <option value="">Nationnalité*</option>
            <option value="français">Français</option>
            <option value="italien">Italien</option>
            <option value="danois">Danois</option>
            <option value="suédois">Suédois</option>
            <option value="finlandais">Finlandais</option>
            <option value="grec">Grec</option>
            </div>
    </select>
    <p>Commentaires*</p>
    <textarea id="content" name="com" cols="60" rows="5" ></textarea>
    <div>
    <br></br>
    <input type="submit" value="S'enregistrer">
    <input type="reset" value="Reset">
    </div>
    </form>
    </fieldset>
    </div>
    </div>
</body>
</html>