<?PHP

//include "./config.php";
//require_once ('../architectui-html-free/architectui-html-free/config.php');
include('C:\wamp64\www\ProjetWeb\ProjetWeb\Back_Office\config.php');

class PanierC
{


 function Afficher_Panier()

    {
    $sql ='SELECT panier.* FROM table_produits,panier where table_produits.Identifiant=panier.id_prodpanier';
    $db=config ::getConnexion();
    try {
        
        $liste=$db->query ($sql);
        return $liste;

    }   catch (Exception $e) {
die ('Erreur' .$e->getMessage());
    }
    }


    function Supprimer_Panier($nom)

    {
        require_once("../Config.php");
        if(isset($_POST["nom"]) && !empty($_POST["nom"])){
            $sql = "DELETE FROM panier WHERE nom =:nom";
            $db=config ::getConnexion();
            if($stmt = $db->prepare($sql)){
                $stmt->bindValue(":nom", $nom);
                
               
                $nom = trim($_POST["nom"]);
                
                if($stmt->execute()){
                    echo "<script type='text/javascript'> document.location = '../cart.php'; </script>";
                    exit();
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
            }
            
            $stmt->close();
    
            $db->close();
        } else{
       
            if(empty(trim($_GET["nom"]))){
    
                header("location: error.php");
                exit();
            }
        }
    }


function Ajouter_Panier($Panier)
    {
        
      
$sql="insert into panier (id_prodpanier,nom,Prix) values(:id_prodpanier,:nom,:prix)";
$db =config ::getConnexion();
try {
        $req =$db->prepare($sql);
        $id_prodpanier=$Panier->getid_prodpanier();
        $nom=$Panier->getnom();
        $prix=$Panier->getprix();


        $req->bindValue(':id_prodpanier',$id_prodpanier);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prix',$prix);
       
        $req->execute();

}catch (Exception $e)
{
    echo "Erreur ".$e->getMessage();
}


    }

}
?>