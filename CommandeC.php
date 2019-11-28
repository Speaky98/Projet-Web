<?PHP
include "../config.php";
class CommandeC 
{
function afficherCommande ($commande)
    {
    echo "L'identifiant du commande: ".$commande->getidc() ;
    echo " ";
    echo "L'identifiant du client: ".$commande->getidcl();
    echo " ";
    echo "L'identifiant du produit: ".$commande->getidp();
    echo " ";
    echo "Quantité acheté :".$commande->getqtt();
    echo " ";
    echo "Date d'achat: ".$commande->getda();
    echo " ";
    echo "Adresse du client ".$commande->geta();
    echo " ";
    echo "Valide: ".$commande->getvalide();
    }
    

    function affichercommandes(){
		//$sql="SElECT * From commande e inner join formationphp.commande a on e.cin= a.cin";
		$sql="SElECT * From table_paniers";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	
	function supprimercommande($id_commande){
		$sql="DELETE FROM table_paniers where id_commande=:id_commande";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_commande',$id_commande);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercommande($id_commande)
	{
		$valide=1;
		$sql="UPDATE table_paniers SET valide= :valide WHERE id_commande= :id_commande";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try{		
        $req=$db->prepare($sql);
        $req->bindvalue(':id_commande',$id_commande);
		$req->bindValue(':valide',$valide);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
    }
}


?>