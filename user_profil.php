<?php
session_start();
require_once('bdd_connexion.php');
require_once('filtres.php');
require_once('get_produits.php');
require_once('add_panier.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>

	<title>CYABA</title>
</head>
<body>
	<?php
		include('check_session.php');
  ?>

</body>
</html>
