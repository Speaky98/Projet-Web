<?PHP
include 'produitC.php';
include '../Entities/produit.php';
 

 

    
    $ProduitC=new ProduitC();
    $ProduitC->Supprimer_Produit($_POST['Identifiant']);

    
     //echo "<script type='text/javascript'> document.location = '../tables-regular.php'; </script>";
   // header ('Location : ../tables-regular.php');

 
 

?>