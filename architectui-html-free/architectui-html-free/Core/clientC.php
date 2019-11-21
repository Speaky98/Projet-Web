<?PHP

class ClientC
{

    function Afficher_Client()

    {
    $sql ='SELECT * FROM table_clients';
    $db=config::getConnexion();
    try {
        
        $liste=$db->query ($sql);
        return $liste;

    }   catch (Exception $e) {
die ('Erreur' .$e->getMessage());
    }
    }


}






?>