<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Base de données</title>
    <link rel="stylesheet" href="css/bdd.css">
  </head>
  <body>
    <?php
    include('check_admin.php');
    include('header_admin.php');
    include('bdd_connexion.php');
    ?>
    <main>
    <?php
    $req = $bdd->query('SELECT * FROM produits');

    while ($data = $req->fetch()) {
      echo '
      <form class="produit" action="admin_submit_bdd.php" onsubmit="return confirmation()" method="post">
        <label>ID : <input type="text" name="id" value="' . $data['id'] . '"></label>
        <label>Nom : <input type="text" name="nom" value="' . $data['nom'] . '"></label>
        <label>Prix : <input type="text" name="prix" value="' . $data['prix'] . '"></label>
        <label>Rayon :
          <select name="rayon">
            <option value="Audiovisuel">Audiovisuel</option>
            <option value="Informatique">Informatique</option>
            <option value="Objets connectes">Objets connectés</option>
          </select>
        </label>
        <label>Catégorie :
          <select name="categorie">
            <option value="Photo">Appareil Photo</option>
            <option value="Camera">Camera</option>
            <option value="Enceinte">Enceinte</option>
            <option value="Ordinateur">Ordinateur</option>
            <option value="Périphérique">Périphérique</option>
            <option value="Pièce">Pièce</option>
            <option value="Maison">Maison</option>
            <option value="Sport">Sport</option>
          </select>
        </label>
        <label>Attribut : <input type="text" name="attribut" value="' . $data['attribut'] . '"></label>
        <label>Marque : <input type="text" name="marque" value="' . $data['marque'] . '"></label>
        <label>Miniature 1 : <input type="text" name="image_1" value="' . $data['images'] . '"></label>
        <label>Miniature 2 : <input type="text" name="image_2" value="' . $data['images_2'] . '"></label>
        <label>Miniature 3 : <input type="text" name="image_3" value="' . $data['images_3'] . '"></label>
        <div class="submit">
          <input type="submit" class="modifier" onclick="buttonName =\'modifier\'" name="submit" value="Modifier">
          <input type="submit" class="supprimer" onclick="buttonName =\'supprimer\'" name="submit" value="Supprimer">
        </div>
        <input type="text" class="hiddenFields rayonValue" value="' . $data['rayon'] . '">
        <input type="text" class="hiddenFields categorieValue" value="' . $data['categorie'] . '">
      </form>
      ';
    }
    ?>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
      let buttonName;
      const confirmation = () => {
        return confirm('Êtes-vous sûr de vouloir ' + buttonName + ' ce produit ?');
        return choice;
      }

      $('select').css('width', parseInt($('input').eq(6).css('width')) + 8.8 + 'px');

      for (let i = 0; i < $('form').length; i++) {
        const rayon = $('form').eq(i).find('.rayonValue').val();
        const categorie = $('form').eq(i).find('.categorieValue').val();

        for (let j = 0; j < 3; j++) {
          if ($('form').eq(i).find('select[name="rayon"] option:eq(' + j + ')').val() === rayon)
            $('form').eq(i).find('select[name="rayon"] option:eq(' + j + ')').attr('selected', 'selected');
        }
        for (let j = 0; j < 8; j++) {
          if ($('form').eq(i).find('select[name="categorie"] option:eq(' + j + ')').val() === categorie)
            $('form').eq(i).find('select[name="categorie"] option:eq(' + j + ')').prop('selected', 'selected');
        }
      }
    </script>
  </body>
</html>
