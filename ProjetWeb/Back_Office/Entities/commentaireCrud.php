<?php

class commentaireCrud
{
    private $_db; // Instance de PDO

    public function __construct($db)
    {
      $this->setDb($db);
    }

    public function add(commentaire $commentaire1)
    {
        $q = $this->_db->prepare('INSERT INTO table_commentaire(commentateur, msg, id_billet) VALUES(:commentateur, :msg, :id_billet)');

        $q->bindValue(':commentateur', $commentaire1->commentateur());
        $q->bindValue(':msg', $commentaire1->msg());
        $q->bindValue(':id_billet', $commentaire1->id_billet());
        $q->execute(array(
            'commentateur' => $_SESSION['user_name'],
            'msg' => $_POST['msg'],
            'id_billet' => $_POST['id_billet']));
        
    }

    public function delete(commentaire $commentaire1)
    {
        $this->_db->exec('DELETE FROM table_commentaire WHERE id = '.$commentaire1->id());
    }

    public function get($id)
    {
        $q = $this->_db->prepare('SELECT id, commentateur, msg, id_billet, date_publication FROM table_commentaire WHERE id = ? ');
        $q->execute(array($id['id']));
        
        while( $requete=$q->fetch())
        {
            $coordonnees = array (
                'id' => $requete['id'],
                'commentateur' => $requete['commentateur'],
                'msg' => $requete['msg'],
                'id_billet' => $requete['id_billet'],
                'date_publication' => $requete['date_publication']);
        }

        return $coordonnees;
    }

    public function billetExist($billet)
    {
        $bool=FALSE;
        $q = $this->_db->prepare('SELECT id_billet FROM table_commentaire WHERE id_billet = ?');
        $q->execute(array(htmlspecialchars($billet['id_billet'])));
        while($donnees = $q->fetch())
        {
            if(!strcmp($donnees['id_billet'],htmlspecialchars($billet['id_billet'])))
                $bool=TRUE;
        }

        return $bool;
    }

    public function dateConfirm($nouveau_commentaire)
    {
        $bool=FALSE;
        $q = $this->_db->prepare('SELECT id_billet,date_publication FROM table_commentaire WHERE id_billet = ?');
        $q->execute(array(htmlspecialchars($nouveau_commentaire['id_billet'])));
        while($donnees = $q->fetch())
        {
            if(!strcmp($donnees['id_billet'],htmlspecialchars($nouveau_commentaire['id_billet'])))
            {
                if($donnees['date_publication']==$nouveau_commentaire['date_publication'])
                    $bool=TRUE;

            }
        }

        return $bool;
    }

    public function getList()
    {
        $commentaires = [];

        $q = $this->_db->query('SELECT id, commentateur, msg, id_billet, date_publication FROM table_commentaire ORDER BY date_publication');

        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $commentaires[] = new commentaire($donnees);
        }
        return $commentaires;
    }

    public function update(commentaire $commentaire1)
    {
        $q = $this->_db->prepare('UPDATE table_commentaire SET commentateur = :commentateur, msg = :msg, id_billet = :id_billet, date_publication = :date_publication WHERE id = :id');
        //$q = $this->_db->prepare('UPDATE table_commentaire SET commentateur =?, msg =?, id_billet =?, date_publication =? WHERE id =?');
        
        /*$coordonnees = array (
            'id' => $commentaire1->id(),
            'commentateur' => $commentaire1->commentateur(),
            'msg' => $commentaire1->msg(),
            'id_billet' => $commentaire1->id_billet(),
            'date_publication' => $commentaire1->date_publication());

        $q->execute($coordonnees);*/
        try
        {
            $q->bindValue(':commentateur', $commentaire1->commentateur());
            $q->bindValue(':msg', $commentaire1->msg());
            $q->bindValue(':id_billet', $commentaire1->id_billet());
            $q->bindValue(':date_publication', $commentaire1->date_publication());
            $q->bindValue(':id', $commentaire1->id(), PDO::PARAM_INT);

            $q->execute();
        }
        catch (Exception $e)
        {
            echo "Erreur ".$e->getMessage();
        }
    }
    /*function Modifier_User($user_idd,$user_name, $user_email, $user_pass,$role) {

        $sql = "update table_users set
                        user_name = :user_name,
						user_email = :user_email,
						user_pass = :user_pass,
                        role=:role
                        where user_idd =:user_idd ";	
        $c=new Database();
        $conn=$c->connexion();
        try {
            $req =$conn->prepare($sql);
    
            $req->bindValue(':user_idd',$user_idd);
            $req->bindValue(':user_name',$user_name);
            $req->bindValue(':user_email',$user_email);
            $req->bindValue(':user_pass',$user_pass);
            $req->bindValue(':role',$role);
    
            $req->execute();
    
    }*/

    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }
}
?>