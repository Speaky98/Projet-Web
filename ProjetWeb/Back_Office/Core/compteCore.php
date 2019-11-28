<?php

class compteCore
{
    private $_db; // Instance de PDO

    public function __construct($db)
    {
      $this->setDb($db);
    }

    public function add(compteClient $client)
    {
        $q = $this->_db->prepare('INSERT INTO table_clients(Nom, Prenom, Adresse_email, pw) VALUES(:Nom, :Prenom, :Adresse_email, :pw)');

        /*$q->bindValue(':Nom', $client->nom());
        $q->bindValue(':Prenom', $client->prenom());
        $q->bindValue(':Adresse_email', $client->email());
        $q->bindValue(':pw', $client->password());
        */
        $q->execute(array(
            'Nom' => $client['nom'],
            'Prenom' => $client['prenom'],
            'Adresse_email' => $client['Adresse_email'],
            'pw' => $client['pw']));
    }

    public function delete(compteClient $client)
    {
        $this->_db->exec('DELETE FROM table_clients WHERE ID = '.$client->id());
    }

    public function get($email)
    {
        $q = $this->_db->query('SELECT ID, Nom, Prenom, Adresse_email, pw FROM table_clients WHERE Adresse_email = '.$email);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        return new compteClient($donnees);
    }

    public function emailExist($email)
    {
        $bool=FALSE;
        $q = $this->_db->prepare('SELECT ID, Nom, Prenom, Adresse_email, pw FROM table_clients WHERE Adresse_email = ?');
        $q->execute(array($email['Adresse_email']));
        while($donnees = $q->fetch())
        {
            if(!strcmp($donnees['Adresse_email'],$email))
                $bool=TRUE;
        }

        return $bool;
    }

    public function passwordConfirm($pw)
    {
        $bool=FALSE;
        $q = $this->_db->query('SELECT ID, Nom, Prenom, Adresse_email, pw FROM table_clients WHERE pw = '.$pw);
        while($donnees = $q->fetch())
        {
            if($donnees['pw']==$pw)
                $bool=TRUE;
        }

        return $bool;
    }

    public function getList()
    {
        $clients = [];

        $q = $this->_db->query('SELECT ID, Nom, Prenom, Adresse_email, pw FROM table_clients ORDER BY Nom');

        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $clients[] = new compteClient($donnees);
        }

    return $clients;
    }

    public function update(compteClient $client)
    {
        $q = $this->_db->prepare('UPDATE table_clients SET Nom = :Nom, Prenom = :Prenom, Adresse_email = :Adresse_email, pw = :pw WHERE ID = :ID');

        $q->bindValue(':Nom', $client->nom());
        $q->bindValue(':Prenom', $client->prenom());
        $q->bindValue(':Adresse_email', $client->email());
        $q->bindValue(':pw', $client->password());
        $q->bindValue(':ID', $client->id(), PDO::PARAM_INT);

        $q->execute();
    }

    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }
}
?>