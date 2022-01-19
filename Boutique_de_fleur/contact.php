<!DOCTYPE HTML>
<html lang="fr">
<head>
<title>Au jardin d'Eden - Contact</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Comment nous contacter">
<meta name="Robots" content="index, follow">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--<meta property="og:image" content="http://www.lazioverticale.joomlafree.it/logoOG.jpg">-->
<!--<link rel="icon" href="http://www.lazioverticale.joomlafree.it/favicon.ico">-->
<!--<link rel="shortcut icon" href="http://www.lazioverticale.joomlafree.it/favicon.ico">-->
<link rel="stylesheet" type="text/css" href="css/reset.css">
<!--<link rel="stylesheet" type="text/css" href="css/font-awesome.css">-->
<link rel="stylesheet" type="text/css" href="css/style5.css">
</head>
<body>
<div id="r1">
  <header>
  <h1>Au jardin d'Eden<label for="a"><i class="fa fa-bars"></i></label></h1>
    <!--<input type="checkbox" id="a" role="button" onClick>-->
    <nav>
     <ul>
       <li><a href="index.php"><i class="fa fa-home"></i> Accueil</a></li>
       <li><a href="boutique.php"><i class="fa fa-tree"></i> Boutique</a></li>
       <li><a href="equipe.php"><i class="fa fa-tree"></i> L'equipe</a></li>
       <li><a href="blog.php"><i class="fa fa-tree"></i> Blog</a></li>
       <li><a href="contact.php"><i class="fa fa-tree"></i> Contact</a></li>
     </ul>
    </nav>
  </header>
</div>
<div id="r2">
 <h2>Contact</h2>
 <p><a href="#"><img src="image/apple-touch-icon.jpg" width="60" height="60" alt="Au jardin d'Eden"></a></p>
</div>
<div id="r3">
 <section>
   <article>
  <p>Au jardin d'Eden<br>73 Boulevard des roses bleues<br>06000 - Nice<br>France<br>Tel. 0493.12.34.56</p>
  <img src="image/maps.png">
  </article>
  <article class="social">
  <img src="image/social.jpg" >
  </article>
 </section>
</div>
 <div id="r4">
 <section>
  <div id="container1">
   <h3>Envoi-nous un message</h3>
     <div id="result1"></div>
    <form action="" method="post" enctype="multipart/form-data" name="form" id="form">

      <input name="nome" id="nome" placeholder="Prénom" required pattern="[a-z]{1}[a-z]{2,20}" title="Max 21 lettres minuscules" placeholder="Prenom"><label><span class="required" >*</span></label>
      
      <input name="cognome" id="cognome" placeholder="Nom" required pattern="[a-z]{1}[a-z]{2,20}" title="Max 21 lettres minuscules"><label><span class="required">*</span></label>
      
      <input type="email" name="email" id="email" placeholder="E-mail" size="30" required><label><span class="required">*</span></label>
      
      <input name="oggetto" id="oggetto" placeholder="Objet" size="35" required pattern="[a-z]{1}[a-z_]{2,34}" title="Max 35 lettres minuscules"><label><span class="required">*</span></label>
      
      <textarea name="messaggio" id="messaggio" placeholder="Message" rows="20" cols="50"></textarea>
      
      <input type="reset" name="reset" id="reset" value="Effacer">
      
      <input type="submit" name="send" id="send" value="Envoyer">
      
      <img src="css/spinner.gif" id="loading" style="display:none" />
    </form>
  </div>
 </section>
 <hr>
  <section>
   <div id="container2">
   <h3>Connectez vous</h3>
     <div id="result2"></div>
    <form action="welcome.php" method="post" name="form" id="form">
     <input name="name" type="text" placeholder="Username" />
     <input name="pwd" type="password" placeholder="Password" />
     <input name="submit" type="submit" id="submit" value="Login" />
    </form>
   </div>
 </section>
</div>
<div id="r5">
  <footer>
  <ul>
       <li><a href="index.php"><i class="fa fa-home"></i> Accueil</a></li>
       <li><a href="boutique.php"><i class="fa fa-tree"></i> Boutique</a></li>
       <li><a href="equipe.php"><i class="fa fa-tree"></i> L'equipe</a></li>
       <li><a href="blog.php"><i class="fa fa-tree"></i> Blog</a></li>
       <li><a href="contact.php"><i class="fa fa-tree"></i> Contact</a></li>
    </ul>
    <p>PHP4 - Copyright &copy; 2021</p>
  </footer>
</div>
</body>
</html>