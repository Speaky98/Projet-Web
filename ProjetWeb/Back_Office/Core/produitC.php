<?PHP

//include "./config.php";
//require_once ('../architectui-html-free/architectui-html-free/config.php');
include('C:\wamp64\www\ProjetWeb\ProjetWeb\Back_Office\config.php');

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
            
           
            $Identifiant = trim($_POST["Identifiant"]);
            
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
        
        $msg = "";


  if (isset($_FILES['Prod_File']['name']) && $_FILES['Prod_File']['name']!="")
  {
  	
  	$Prod_File = $_FILES['Prod_File']['name'];
  	
      $target = "../attachment/".basename($Prod_File);
      
$sql="insert into table_produits (Identifiant,Nom,Prix,Categorie,Marque,Prod_File) values(:Identifiant,:Nom,:Prix,:Categorie,:Marque,'$target')";
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
        if (copy($_FILES['Prod_File']['tmp_name'], $target)) {
            $msg ="Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
        }

}catch (Exception $e)
{
    echo "Erreur ".$e->getMessage();
}

}

    }

/*function Lire_Produit($Identifiant) {
$sql ='SELECT * FROM table_produits WHERE Identifiant=:Identifiant';
$db =config ::getConnexion();

try {
$req =$db->prepare($sql);

$req->bindValue(':Identifiant',$_GET['Identifiant']);

$req->execute();

$row=$req->fetch();

}catch (Exception $e)
{
    echo "Erreur ".$e->getMessage();
}
		
	}*/

	function Modifier_Produit($Identifiant, $Nom, $Prix, $Categorie, $Marque) {
        $msg = "";


        if (isset($_FILES['Prod_File']['name']) && $_FILES['Prod_File']['name']!="")
        {
            
            $Prod_File = $_FILES['Prod_File']['name'];
            
            $target = "../attachment/".basename($Prod_File);

        $sql = "UPDATE table_produits SET 
						Nom = :Nom,
						Prix = :Prix,
						Categorie = :Categorie,
						Marque = :Marque,
                        Prod_File='$target'
                        where Identifiant =:Identifiant ";	
                        $db =config ::getConnexion();
                try {   
                   
                    $req=$db->prepare($sql); 
                    $req->bindValue(':Identifiant',$Identifiant);
                    $req->bindValue(':Nom',$Nom);
                    $req->bindValue(':Prix',$Prix);
                    $req->bindValue(':Categorie',$Categorie);
                     $req->bindValue(':Marque',$Marque);
                    $req->execute();
                    if (move_uploaded_file($_FILES['Prod_File']['tmp_name'], $target)) {
                        $msg ="Image uploaded successfully";
                    }else{
                        $msg = "Failed to upload image";
                    }
            
            }catch (Exception $e)
            {
                echo "Erreur ".$e->getMessage();
            }
	}
    }

}




?>