<?PHP
include 'produitC.php';
include '../Entities/produit.php';
 

/*$sql = 'UPDATE table_produits SET Nom = :Nom, Prix = :Prix, Categorie = :Categorie, Marque = :Marque
where Identifiant =:Identifiant ';	
$db =config ::getConnexion();

$req =$db->prepare($sql);

$req->bindValue(':Identifiant',$_POST['Identifiant']);

$req->bindValue(':Nom',$_POST['Nom']);

$req->bindValue(':Prix',$_POST['Prix']);

$req->bindValue(':Categorie',$_POST['Categorie']);

$req->bindValue(':Marque',$_POST['Marque']);

$req->execute();*/
  
    $ProduitC=new ProduitC();
    $ProduitC->Modifier_Produit($_POST['Identifiant'],$_POST['Nom'],$_POST['Prix'],$_POST['Categorie'],$_POST['Marque']);

    
     echo "<script type='text/javascript'> document.location = '../tables-regular.php'; </script>";

 
?>