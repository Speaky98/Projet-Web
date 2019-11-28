<?php
include "../Core/CommandeC.php";
$commandeC=new CommandeC();
$commandeC->modifiercommande($_POST['id_commande']);

header('Location: commande.php');
?>