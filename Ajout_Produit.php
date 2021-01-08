<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/Ajout_Produit.css" />
  <title>Ajouter un Produit</title>
</head>

<body>
  <!-- Vérification session + ajout du header -->
  <?php
       include('check_session.php');
  ?>
  <br>
  <h1 id='titre'>Ajouter un produit</h1>
  <form action=""method="post" onsubmit="return Verification()">
<input type='text' name='Titre_Produit' id='Product_title' placeholder='Entrer un nom de produit'>
    <!-- Message d'erreur si champ invalide ou non remplit -->
    <p id ='erreur'>Nom de produit invalide</p>
      <br>
      <br>
      <!-- Champ pour ajouter les photos -->
      <input type='file' name='Photo_produit' id='image_1' accept='image/*'>
      <label id='Image1' for='image_1'>
      <img class="icon" id='icon' src="css/images/appareil.ico" alt="icon_appareil_photo"> &nbsp&nbsp Ajouter une photo
      </label>

      <input type='file' name='Photo_produit_2' id='image_2' accept='image/*'>
      <label id='Image2' for='image_2'>
      <img class="icon" id='icon' src="css/images/appareil.ico" alt="icon_appareil_photo"> &nbsp&nbsp Ajouter une photo
      </label>

      <input type='file' name='Photo_produit_3' id='image_3' accept='image/*'>
      <label id='Image3' for='image_3'>
      <img class="icon" id='icon' src="css/images/appareil.ico" alt="icon_appareil_photo"> &nbsp&nbsp Ajouter une photo
      </label>
      <br>
      <!-- Message d'erreur si champ invalide ou non remplit -->
      <p id='erreurImage'>Image incorrecte ou inexistante</p>
      <br>
      <!--Prix du produit-->
      <input type='text' name="Prix" id='PrixProduit' placeholder='Prix du produit'>
      <!--Boutton liste-->
        <select name="rayon" id="RayonProduit">
          <option value="Audiovisuel">Audiovisuel</option>
          <option value="Informatique">Informatique</option>
          <option value="Objets connectes">Objets connectés</option>
        </select>
      <select name="categorie" id="CategorieProduit">
        <option value="Photo">Photo</option>
        <option value="Camera">Camera</option>
        <option value="Enceinte">Enceinte</option>
        <option value="Ordinateur">Ordinateur</option>
        <option value="Périphérique">Périphérique</option>
        <option value="Pièce">Pièce</option>
        <option value="Maison">Maison</option>
        <option value="Sport">Sport</option>
      </select>
      <br>
      <input type="text" name="attribut" id="AttributProduit" placeholder="Attribut du produit">
      <input type="text" name="marque" id="MarqueProduit" placeholder="Marque du produit">
      <br>
      <p id='erreurPrix'>Prix invalide</p>
      
      <div id='Ligne'>
      <p id='erreurAttribut'>Aucun attribut spécifié</p>
      <p id='erreurMarque'>Aucune marque spécifié</p>
      </div>
      <br>
      <!--Boutton pour envoier-->
      <input type="submit" id="BouttonEnvoie" placeholder="Envoier">


  </form>



  <script src="js/Regex_Ajout_produit.js"></script>
  <script src="js/placeholder.js"></script>
</body>

</html>