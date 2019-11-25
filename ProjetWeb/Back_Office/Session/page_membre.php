<?php

session_start ();  
 

if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ 

	 /*echo 'Votre login est <b>'.$_SESSION['l'].'</b> <br>et votre mot de passe est <b>'.$_SESSION['p'].
	'</b><br>Votre role est : '.$_SESSION['r'].' <br/> Identifiant de la session est :'.session_id().'</br>'; */
	header("location:../tables-regular.php");
	echo '<a href="./logout.php">Cliquer pour se déconnecter</a>';

}

else { 
      echo 'Veuillez vous connecter </br>';  
	  echo '<a href="./index.html">Cliquer pour se connecter</a>';

}  
?>