<?PHP
include 'panierC.php';
include '../Entities/panier.php';
 

 

    
    $PanierC=new PanierC();
    $PanierC->Supprimer_Panier($_POST['nom']);

    
     //echo "<script type='text/javascript'> document.location = '../cart.php'; </script>";
    //header ('Location : ../cart.php');

 
 

?>