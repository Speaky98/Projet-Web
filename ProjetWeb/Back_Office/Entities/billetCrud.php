<?php

class billetCrud
{
    private $_db; // Instance de PDO

    public function __construct($db)
    {
      $this->setDb($db);
    }

    public function add(billet $billet1)
    {
        $q = $this->_db->prepare('INSERT INTO table_billet(pseudo, contenu, titre) VALUES(:pseudo, :contenu, :titre)');

        $q->bindValue(':pseudo', $billet1->pseudo());
        $q->bindValue(':contenu', $billet1->contenu());
        $q->bindValue(':titre', $billet1->titre());
        $q->execute(array(
            'pseudo' => $_SESSION['user_name'],
            'contenu' => $_POST['contenu'],
            'titre' => $_POST['titre']));
        
    }

    public function delete(billet $billet1)
    {
        $this->_db->exec('DELETE FROM table_billet WHERE id = '.$billet1->id());
    }

    public function get($id)
    {
        $q = $this->_db->prepare('SELECT id, pseudo, contenu, titre, date_creation FROM table_billet WHERE id = ? ');
        $q->execute(array($id['id']));
        
        while( $requete=$q->fetch())
        {
            $coordonnees = array (
                'id' => $requete['id'],
                'pseudo' => $requete['pseudo'],
                'contenu' => $requete['contenu'],
                'titre' => $requete['titre'],
                'date_creation' => $requete['date_creation']);
        }

        return $coordonnees;
    }

    public function titreExist($titre)
    {
        $bool=FALSE;
        $q = $this->_db->prepare('SELECT titre FROM table_billet WHERE titre = ?');
        $q->execute(array(htmlspecialchars($titre['titre'])));
        while($donnees = $q->fetch())
        {
            if(!strcmp($donnees['titre'],htmlspecialchars($titre['titre'])))
                $bool=TRUE;
        }

        return $bool;
    }

    public function dateConfirm($nouvea_billet)
    {
        $bool=FALSE;
        $q = $this->_db->prepare('SELECT titre,date_creation FROM table_billet WHERE titre = ?');
        $q->execute(array(htmlspecialchars($nouvea_billet['titre'])));
        while($donnees = $q->fetch())
        {
            if(!strcmp($donnees['titre'],htmlspecialchars($nouvea_billet['titre'])))
            {
                if($donnees['date_creation']==$nouvea_billet['date_creation'])
                    $bool=TRUE;

            }
        }

        return $bool;
    }

    public function getList()
    {
        $billets = [];

        $q = $this->_db->query('SELECT id, pseudo, contenu, titre, date_creation FROM table_billet ORDER BY date_creation');

        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $billets[] = new billet($donnees);
        }
        return $billets;
    }

    public function update(billet $billet1)
    {
        $q = $this->_db->prepare('UPDATE table_billet SET pseudo = :pseudo, contenu = :contenu, titre = :titre, date_creation = :date_creation WHERE id = :id');

        $q->bindValue(':pseudo', $billet1->pseudo());
        $q->bindValue(':contenu', $billet1->contenu());
        $q->bindValue(':titre', $billet1->titre());
        $q->bindValue(':date_creation', $billet1->date_creation());
        $q->bindValue(':id', $billet1->id(), PDO::PARAM_INT);

        $q->execute();
    }

    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }
}
?>