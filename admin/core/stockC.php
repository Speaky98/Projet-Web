<?php
include 'C:\wamp64\www\projet\config.php';
class StockC {

function afficherstock ($stock){
		echo "id_produit: ".$stock->getid_produit()."<br>";
		echo "qte: ".$stock->getqte()."<br>";
		echo "marque_prd: ".$stock->getmarque_prd()."<br>";
		echo "id_fourni: ".$stock->getid_fourni()."<br>";
		echo "qte_maj: ".$stock->getqte_maj()."<br>";
	}

function ajouterstock($stock){
		$sql="insert into stock (id_produit,qte,marque_prd,id_fourni,qte_maj) values (:id_produit, :qte,:marque_prd,:id_fourni,:qte_maj)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_produit=$stock->getid_produit();
        $qte=$stock->getqte();
        $marque_prd=$stock->getmarque_prd();
        $id_fourni=$stock->getid_fourni();
        $qte_maj=$stock->getqte_maj();
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':qte',$qte);
		$req->bindValue(':marque_prd',$marque_prd);
		$req->bindValue(':id_fourni',$id_fourni);
		$req->bindValue(':qte_maj',$qte_maj);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	function afficherstocks(){

		$sql=" SELECT * from stock ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerstock($id_produit){
		$sql="DELETE FROM stock where id_produit= :id_produit";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_produit',$id_produit);
		try{
            $req->execute();
           
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	

	
	}
	
}

?>
