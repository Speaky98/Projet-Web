<?PHP
//include('C:\wamp64\www\ProjetWeb\ProjetWeb\Back_Office\config.php');
include 'C:\wamp64\www\ProjetWeb\ProjetWeb\Back_Office\Session\dbconfig.php';

class UserC
{

    function Afficher_Users()

    {
    $sql ='SELECT * FROM table_users';
    $c=new Database();
$conn=$c->connexion();
    try {
        
        $liste=$conn->query ($sql);
        return $liste;

    }   catch (Exception $e) {
die ('Erreur' .$e->getMessage());
    }
    }



function Ajouter_User($Userfirst)
    {
$sql="insert into table_users (user_name,user_email,user_pass,role) values(:user_name,:user_email,:user_pass,:role)";
$c=new Database();
$conn=$c->connexion();
try {
        $req =$conn->prepare($sql);

        $user_name=$Userfirst->getuser_name();
        $user_email=$Userfirst->getuser_email();
        $user_pass=$Userfirst->getuser_pass();
        $role=$Userfirst->getrole();

        $req->bindValue(':user_name',$user_name);
        $req->bindValue(':user_email',$user_email);
        $req->bindValue(':user_pass',$user_pass);
        $req->bindValue(':role',$role);

        $req->execute();

}catch (Exception $e)
{
    echo "Erreur ".$e->getMessage();
}


    }

function Supprimer_User($user_idd)

    {
      
        if(isset($_POST["user_idd"]) && !empty($_POST["user_idd"])){
            $sql = "DELETE FROM table_users WHERE user_idd =:user_idd";
            $c=new Database();
            $conn=$c->connexion();
            if($stmt = $conn->prepare($sql)){
                $stmt->bindValue(":user_idd", $user_idd);
                
               
                $user_idd = trim($_POST["user_idd"]);
                
                if($stmt->execute()){
                    echo "<script type='text/javascript'> document.location = '../tables-regular.php'; </script>";
                    exit();
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
            }
            
            $stmt->close();
    
            $conn->close();
        } else{
       
            if(empty(trim($_GET["user_idd"]))){
    
                header("location: error.php");
                exit();
            }
        }
    }


}


?>