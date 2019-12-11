<html>

<head>
	<meta charset="utf8">
</head>

<body>
	<?php
	include 'User.php';

	include "../Entities/compteClient.php";
	include "../Entities/compteCore.php";
	include "../Entities/billet.php";
	include "../controle_saisie.php";

	$c = new Database();
	$conn = $c->connexion();
	$user = new User($_POST['login'], $_POST['pwd'], $conn);
	$u = $user->Logedin($conn, $_POST['login'], $_POST['pwd']);

	$bdd = new compteCore($conn);
	$client2= new compteClient();



	$vide = false;
	if (!empty($_POST['login']) && !empty($_POST['pwd'])) {
		foreach ($u as $t) {
			
			if ($t['user_name'] == $_POST['login'] && $t['user_pass'] == $_POST['pwd']) {
				$vide = true;
				session_start();
				$_SESSION['l'] = $_POST['login'];
				$_SESSION['p'] = $_POST['pwd'];
				$_SESSION['r'] = $t['role'];

				// Session Bilel 
				$compteArray=$bdd->get_by_name($_POST);

				$client2->hydrate($compteArray);
				$_SESSION['user_name']= $client2->user_name();
				$_SESSION['role']= $client2->role();
				$_SESSION['user_email']= $client2->email();
				$_SESSION['user_idd']= $client2->id();

				header("location:page_membre.php");
			}
		}
		if ($vide == false) {
			echo '<body onLoad="alert(\'Membre non reconnu...\')">';
			echo '<meta http-equiv="refresh" content="0;URL=../home1_2.php">';
		}
	} else {
		echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire";
		?> <a href="../home1_2.php">Retour au formulaire</a> <?php
														}

														?>
</body>

</html>