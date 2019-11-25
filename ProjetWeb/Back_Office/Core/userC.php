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


}


?>