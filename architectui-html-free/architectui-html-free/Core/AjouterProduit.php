<?php

include 'produitC.PHP';
include '../Entities/produit.php';



if ( !empty($_POST['Identifiant']) &&  !empty($_POST['Nom'] )&& !empty($_POST['Prix']) && !empty($_POST['Categorie'] )&& !empty($_POST['Marque'])    )
{
 


    $Produit=new Produit($_POST['Identifiant'],$_POST['Nom'],$_POST['Prix'],$_POST['Categorie'],$_POST['Marque']);
    
    $ProduitC=new ProduitC();
    $ProduitC->Ajouter_Produit($Produit);
    //echo "<script type='text/javascript'> document.location = '../tables-regular.PHP'; </script>";
     header('Status: 301 Moved Permanently', false, 301);      
  header('Location: ../tables-regular.PHP');      
  exit();
   
}
else {
    echo 'Verifier les champs';
}  

?>