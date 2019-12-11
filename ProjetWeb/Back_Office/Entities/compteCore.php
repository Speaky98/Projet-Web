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
        $q = $this->_db->prepare('INSERT INTO table_users(user_name, role, user_email, user_pass) VALUES(:user_name, :Preuser_name, :user_email, :user_pass)');

        $q->bindValue(':user_name', $client->user_name());
        $q->bindValue(':role', $client->role());
        $q->bindValue(':user_email', $client->email());
        $q->bindValue(':user_pass', $client->password());
        //var_dump($_POST);
        $q->execute(array(
            'user_name' => $_POST['user_name'],
            'role' => $_POST['role'],
            'user_email' => $_POST['user_email'],
            'user_pass' => $_POST['user_pass']));
        /*$q->execute(array(
            'user_name' => $client['user_name'],
            'Preuser_name' => $client['preuser_name'],
            'user_email' => $client['user_email'],
        'user_pass' => $client['user_pass']));*/
    }

    public function delete(compteClient $client)
    {
        $this->_db->exec('DELETE FROM table_users WHERE user_idd = '.$client->id());
    }

    public function get($email)
    {
        $q = $this->_db->prepare('SELECT user_idd, user_name, role, user_email, user_pass, joining_date FROM table_users WHERE user_email = ? ');
        $q->execute(array(htmlspecialchars($email['user_email'])));
        while( $requete=$q->fetch())
        {
            $coordonnees = array (
                'user_idd' => $requete['user_idd'],
                'user_name' => $requete['user_name'],
                'role' => $requete['role'],
                'user_email' => $requete['user_email'],
                'joining_date' => $requete['joining_date'],
                'user_pass' => $requete['user_pass']);
        }

        return $coordonnees;
    }

    public function get_by_name($user_name)
    {
        $q = $this->_db->prepare('SELECT user_idd, user_name, role, user_email, user_pass, joining_date FROM table_users WHERE user_name = ? ');
        $q->execute(array(htmlspecialchars($user_name['login'])));
        while( $requete=$q->fetch())
        {
            $coordonnees = array (
                'user_idd' => $requete['user_idd'],
                'user_name' => $requete['user_name'],
                'role' => $requete['role'],
                'user_email' => $requete['user_email'],
                'joining_date' => $requete['joining_date'],
                'user_pass' => $requete['user_pass']);
        }

        return $coordonnees;
    }

    public function emailExist($email)
    {
        $bool=FALSE;
        $q = $this->_db->prepare('SELECT user_email FROM table_users WHERE user_email = ?');
        $q->execute(array(htmlspecialchars($email['user_email'])));
        while($donnees = $q->fetch())
        {
            if(!strcmp($donnees['user_email'],htmlspecialchars($email['user_email'])))
                $bool=TRUE;
        }

        return $bool;
    }

    public function passwordConfirm($compte)
    {
        $bool=FALSE;
        $q = $this->_db->prepare('SELECT user_email,user_pass FROM table_users WHERE user_email = ?');
        $q->execute(array(htmlspecialchars($compte['user_email'])));
        while($donnees = $q->fetch())
        {
            if(!strcmp($donnees['user_email'],htmlspecialchars($compte['user_email'])))
            {
                if($donnees['user_pass']==$compte['user_pass'])
                    $bool=TRUE;

            }
        }

        return $bool;
    }

    public function getList()
    {
        $clients = [];

        $q = $this->_db->query('SELECT user_idd, user_name, role, user_email, user_pass, joining_date FROM table_users ORDER BY user_name');

        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $clients[] = new compteClient($donnees);
        }

    return $clients;
    }

    public function update(compteClient $client)
    {
        $q = $this->_db->prepare('UPDATE table_users SET user_name = :user_name, role = :role, user_email = :user_email, user_pass = :user_pass WHERE user_idd = :user_idd');

        $q->bindValue(':user_name', $client->user_name());
        $q->bindValue(':role', $client->role());
        $q->bindValue(':user_email', $client->email());
        $q->bindValue(':user_pass', $client->password());
        $q->bindValue(':joining_date', $client->date());
        $q->bindValue(':user_idd', $client->id(), PDO::PARAM_INT);

        $q->execute();
    }

    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }
}
?>