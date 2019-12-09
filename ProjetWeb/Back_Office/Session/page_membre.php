<?php

session_start ();  
 

if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ 
	if(strcmp($_SESSION['r'], 'Admin') == 0)
{
	 /*echo 'Votre login est <b>'.$_SESSION['l'].'</b> <br>et votre mot de passe est <b>'.$_SESSION['p'].
	'</b><br>Votre role est : '.$_SESSION['r'].' <br/> Identifiant de la session est :'.session_id().'</br>'; */
	header("location:../home.php");
	//echo '<a href="./logout.php">Cliquer pour se déconnecter</a>';

}}

if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ 
	if(strcmp($_SESSION['r'], 'Client') == 0)
{
      /*echo 'Veuillez vous connecter </br>';  
	  echo '<a href="../home1_2.php">Cliquer pour se connecter</a>';*/
	  header("location:../index.php");

}  }
?>