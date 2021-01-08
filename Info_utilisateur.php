<?php
require_once('bdd_connexion.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/Info.css" />
  <title>Info Utilisateur</title>
</head>

<body>
  <?php
      include('check_session.php');
    ?>
  <h1 class="hr">Mon compte</h1>
  <form action="#" method="post" onsubmit="return Modification_information()">
    <div id='Ensemble'>
      <div id='Nom_Prenom'>
        <input type="text" name="Nom" id="nom" placeholder="Nom">
      </div>
      <p id="erreur_nom">Nom Incorrect</p>
      <input type="text" name="Prenom" id="prenom" placeholder="Prenom">
      <p id="erreur_prenom">Prenom Incorrect</p>
      <input type="text" name="Email" id="mail" placeholder="Email">
      <p id="erreur_mail">Mail Incorrect</p>
      <input type="password" name="Mot_de_passe" id="motdepasse" placeholder="Mot de passe">
      <p id="erreur_mdp">Mot de passe Incorrect</p>
      <br>
      <input type="password" name="Confirmation_Mot_de_passe" id="Conf_motdepasse" placeholder="Confirmer le mot de passe">
      <p id="erreur_confmdp">Les mots de passe ne sont pas identique</p>
      <input type="submit" id="submit" name="Modifier_Information"  value="Modifier mes informations">
    </div>
  </form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/placeholder.js"></script>
  <script src="js/Regex_Ajout_produit.js"></script>
</body>

</html>