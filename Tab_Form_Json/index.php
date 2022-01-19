<!DOCTYPE HTML>
<html lang="fr">
<head>
<title>Tab & Form + PHP & Json</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Tableau et formulaire avec PHP et Json">
<meta name="Robots" content="index, follow">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
          
<div id="wrapper">
<div id="tab">
<h3>Listing</h3>
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
	<th>Prenom</th>
	<th>Email</th>
    <th>Date de naissance</th>
    <th>Genre</th>
    <th>Nationalité</th>
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
</div>
<div id="fde">
   <h3>Formulaire d'enregistrement</h3>
    <form action="savedata.php" method="post" enctype="multipart/form-data" name="form" id="form">

      <label for=nom>Nom*</label>
      <input name="nom" id="nom" type=text placeholder="Nom" required pattern="^([a-zA-Z\'\-]{2,21})$" title="Max 21 caractères" class="camp">
      
      <label for=prenom>Prénom*</label>
      <input name="prenom" id="prenom" type=text placeholder="Prénom" required pattern="^([a-zA-Z\'\-]{2,21})$" title="Max 21 caractères" class="camp">
      
      <label for=email>Email*</label>
      <input type="email" name="email" id="email" type=email placeholder="votre@email.com" required pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" title="email non acceptee" class="camp">
      
      <label for="pwd">Mot de passe*</label><br>
      <input type="password" name="pwd" id="pwd" placeholder="#M0t%d3p@$$!" required pattern="^(?=.{8,12})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])([^\s])(?=.*[!@#$%]).*$" title="Must contain at least one number, one uppercase letter, one lowercase letter, one of this special character ! @ # $ %, no space and at least 8 to 12 characters" class="camp"><!-- (?=.*\d) é equivalente a (?=.*[0-9]) -->
      <br>
      <label for="date">Date de naissance*</label>
      <input type="date" name="date" id="date" required class="camp">

      <input type="radio" name="genre" id="homme" value="pylone" required><label for="homme">Homme</label><br>
      <input type="radio" name="genre" id="famme" value="puits" required><label for="famme">Famme</label><br>
      
      <select name="nat" id="nat" required class="camp">
      <option value="">Nationalité*</option>
        <option value="français">Français</option>
        <option value="italien">Italien</option>
        <option value="danois">Danois</option>
        <option value="suédois">Suédois</option>
        <option value="finlandais">Finlandais</option>
        <option value="grec">Grec</option>
      </select>
      <br>

      <label for="com">Commentaires*</label>
      <textarea name="com" id="com" rows="10" cols="50" required placeholder="Ecris ton commentaire" class="camp"></textarea>

      <input type="submit" name="submit" id="send" value="S'enregistrer">

      <input type="reset" name="reset" id="reset" value="Reset">
      
    </form>
</div>
</div>
</body>
</html>