<?PHP

//include "./config.php";
//require_once ('../architectui-html-free/architectui-html-free/config.php');
include( 'C:\wamp64\www\Projet Web\architectui-html-free\architectui-html-free\config.php');

class ProduitC
{

    function Afficher_Produit()

    {
    $sql ='SELECT * FROM table_produits';
    $db=config ::getConnexion();
    try {
        
        $liste=$db->query ($sql);
        return $liste;

    }   catch (Exception $e) {
die ('Erreur' .$e->getMessage());
    }
    }




function Supprimer_Produit($Identifiant)

{
  
    if(isset($_POST["Identifiant"]) && !empty($_POST["Identifiant"])){
        $sql = "DELETE FROM table_produits WHERE Identifiant =:Identifiant";
        $db =config ::getConnexion();
        if($stmt = $db->prepare($sql)){
            $stmt->bindValue(":Identifiant", $Identifiant);
            
           
            $param_id = trim($_POST["Identifiant"]);
            
            if($stmt->execute()){
                echo "<script type='text/javascript'> document.location = '../tables-regular.php'; </script>";
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        $stmt->close();

        $db->close();
    } else{
   
        if(empty(trim($_GET["Identifiant"]))){

            header("location: error.php");
            exit();
        }
    }
}


function Ajouter_Produit($Produit)
    {
$sql="insert into table_produits (Identifiant,Nom,Prix,Categorie,Marque) values(:Identifiant,:Nom,:Prix,:Categorie,:Marque)";
$db =config ::getConnexion();
try {
        $req =$db->prepare($sql);

        $Identifiant=$Produit->getIdentifiant();
        $Nom=$Produit->getNom();
        $Prix=$Produit->getPrix();
        $Categorie=$Produit->getCategorie();
        $Marque=$Produit->getMarque();


        $req->bindValue(':Identifiant',$Identifiant);
        $req->bindValue(':Nom',$Nom);
        $req->bindValue(':Prix',$Prix);
        $req->bindValue(':Categorie',$Categorie);
        $req->bindValue(':Marque',$Marque);

        $req->execute();

}catch (Exception $e)
{
    echo "Erreur ".$e->getMessage();
}


    }


}




?>