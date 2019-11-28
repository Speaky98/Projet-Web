<?php
    class compteClient
    {
        private $_id;
        private $_nom;
        private $_prenom;
        private $_email;
        private $_pw;

        public function hydrate(array $donnees)
        {
             if (isset($donnees['ID']))
            {
                $this->setId($donnees['ID']);
            }

            if (isset($donnees['Nom']))
            {
                $this->setNom($donnees['Nom']);
            }

            if (isset($donnees['Prenom']))
            {
                $this->setPrenom($donnees['Prenom']);
            }

            if (isset($donnees['Adresse_email']))
            {
                $this->setEmail($donnees['Adresse_email']);
            }

            if (isset($donnees['pw']))
            {
                $this->setPassword($donnees['pw']);
            }
        }

        public function id() { return $this->_id; }
        public function nom() { return $this->_nom; }
        public function prenom() { return $this->_prenom; }
        public function password() { return $this->_pw; }
        public function email() { return $this->_email; }


        public function setId($id)
        {
            // L'identifiant du personnage sera, quoi qu'il arrive, un nombre entier.
            $this->_id = (int) $id;
        }

        public function setNom($nom)
        {
            if (is_string($nom) && strlen($nom) <= 50)
            {
                $this->_nom = $nom;
            }
        }

        public function setPrenom($prenom)
        {
            if (is_string($prenom) && strlen($prenom) <= 50)
            {
                $this->_prenom = $prenom;
            }
        }

        public function setEmail($email)
        {
            if (is_string($email) && strlen($email) <= 50)
            {
                $this->_email = $email;
            }
        }

        public function setPassword($pw)
        {
            if (is_string($pw) && strlen($pw) <= 16)
            {
                $this->_pw = $pw;
            }
        }

    }
?>