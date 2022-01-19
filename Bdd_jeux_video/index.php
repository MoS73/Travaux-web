<?php
    /*
    1- Je commence par déclarer des variables:(checked V)
    On récupère les variables de connexion mais dans un autre fichier php por les cacher (checked V) Ici je l'ai appelé config.php.
    */
    require 'config.php';

    //Data Source Name (DSN) voir:(Cheched V)https://www.php.net/manual/fr/ref.pdo-mysql.connection.php
    $dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";

    //variable qui stocke la query qui selectionne toutes les colonnes de la table jeux (Checked V)
    $sql = "SELECT * FROM jeux";

    /*
    2- Gérer la connexion à la BDD :
    bloc try catch, et si une erreur se produit lors de l'execution du code présent dans le bloc try
    PHP va exécuter le code qui se trouve dans le catch.
    */
    try{
    /* pdo veut dire PHP Data Objects
    on accède à la base de données en instanciant un objet de la classe PDO
    $pdo = new PDO('mysql:localhost;dbname=ma_base', 'utilisateur','mot_de_passe');
    pour rappel: les variables ont été définies plus haut dans le fichier config.php.*/
    $pdo = new PDO($dsn, $username, $password);

    /*stmt dans $stmt sigifie statement, c'est un Nom choisit arbitrairement.https://www.php.net/manual/fr/pdo.query.php
    //La méthode PDO::query() permet de passer et exécuter une requête SQL de type SELECT.Les requêtes qui commencent par SELECT sont en fait des questions que l'on pose. Quand le SGBDR nous répond, on dit qu'il renvoie (ou retourne) une table. Lorsque nous écrivons puis exécutons cette requête, le SGBDR renvoie tout simplement la table entity, avec toutes ses lignes et toutes ses colonnes.Elle retourne le jeu de résultats sous forme d'objet PDOStatement
    //pour rappel: $sql = "SELECT * FROM jeux";*/
    $stmt = $pdo->query($sql);

    //on gère les erreurs
        if($stmt=== false){
            die("ERREUR"); //"die" alias de la fonction "exit"
        }
    }
    catch(PDOException $e){
    /*PDOException, représente une erreur émise par le PDO. Une exception peut être lancée ("throw") et attrapée ("catch") dans PHP. Le code devra être entouré d'un bloc try pour faciliter la saisie d'une exception potentielle. Chaque try doit avoir au moins un bloc catch ou finally correspondant.*/
    echo $e->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tuto 1 - BDD jeuxvideo</title>
    </head>
    <body>
        <h1>Listing de jeux</h1>
        <table>
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Titre</th>
                  <th>Description</th>
                  <th>Prix</th>
                  <th>Date Sortie</th>
                  <th>Pays Origine</th>
                  <th>Connexion</th>
                  <th>Mode</th>
                  <th>Genre</th>
              </tr>
          </thead>
          <tbody>
              <!--PDO::FETCH_assoc:retourne un tableau indexé par le Nom de la colonne.
              Comme retourné dans le jeu de résultats.
              fetch() Récupère une ligne depuis un jeu de résultats associé à l'objet PDOStatement
              while = tant qu'on a pas finit de parcourir la dernière ligne du tableau associatif.
              Cela retourne TRUE àprès la dernière ligne ce sera FALSE donc on sort de la boucle.-->
            <?php 
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : 
            ?>
            <tr nth-child(odd)>
                <td><?php echo htmlspecialchars($row['Jeux_Id']);?></td>
                <td><?php echo htmlspecialchars($row['Jeux_Titre']);?></td>
                <td><?php echo htmlspecialchars($row['Jeux_Description']);?></td>
                <td><?php echo htmlspecialchars($row['Jeux_Prix']);?></td>
                <td><?php echo htmlspecialchars($row['Jeux_DateSortie']);?></td>
                <td><?php echo htmlspecialchars($row['Jeux_PaysOrigine']);?></td>
                <td><?php echo htmlspecialchars($row['Jeux_Connexion']);?></td>
                <td><?php echo htmlspecialchars($row['Jeux_Mode']);?></td>
                <td><?php echo htmlspecialchars($row['Jeux_Genre']);?></td>
                <!--Cette fonction htmlspecialchars est utilisé pour coder l'entrée d'utilisateur sur un site Web afin que les utilisateurs ne peuvent pas insérer des codes HTML nuisibles dans une page web.-->
              </tr>
            <?php endwhile; //Comme avec le if, on peut regrouper plusieurs instructions dans la même boucle while en les regroupant à l'intérieur d'accolades.?>
          </tbody>
        </table>
    </body>
</html>