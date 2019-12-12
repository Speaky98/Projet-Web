<?php
include 'panierC.PHP';
include '../Entities/panier.php';




if ( !empty($_POST['id_prodpanier']) &&  !empty($_POST['nom'] )&& !empty($_POST['prix']))
{
 
    $Panier=new Panier($_POST['id_prodpanier'],$_POST['nom'],$_POST['prix']);
    
    $PanierC=new PanierC();
    $PanierC->Ajouter_Panier($Panier);
    //echo "<script type='text/javascript'> document.location = '../tables-regular.PHP'; </script>";
     header('Status: 301 Moved Permanently', false, 301);      
  header('Location: ../cart.PHP');      
  exit();
   
}

