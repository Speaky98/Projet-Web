<?php   
    try
    {
        $bd = new PDO('mysql:host=localhost;dbname=test2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }

include "functions.php";
include "Core/compteClient.php";
include "Core/compteCore.php";
$bdd = new compteCore($bd);

//$requete=$bdd->emailExist($_POST['Adresse_email']);

if(!$bdd->emailExist($_POST))
{
    $client= new compteClient($_POST['Nom'],$_POST['Prenom'],$_POST['Adresse_email'],$_POST['pw']);
    $bdd->add($client);
    ?>
    <p>Votre compte est validé. Veuillez maintenant <a href="login.php">vous connecter.</a></p>
    <?php
}
else
    echo 'Votre email existe déjà, veuillez choisir un autre <a href="authentification.php">email</a>';

?>



