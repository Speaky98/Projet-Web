<?php
    class billet
    {
        private $_id;
        private $_contenu;
        private $_pseudo;
        private $_titre;
        private $_date_creation;

        public function hydrate(array $donnees)
        {
             if (isset($donnees['id']))
            {
                $this->setId($donnees['id']);
            }

            if (isset($donnees['Nom']))
            {
                $this->setPseudo($donnees['Nom']);
            }

            if (isset($donnees['contenu']))
            {
                $this->setContenu($donnees['contenu']);
            }

            if (isset($donnees['titre']))
            {
                $this->setTitre($donnees['titre']);
            }

            if (isset($donnees['date_creation']))
            {
                $this->setDate($donnees['date_creation']);
            }
        }

        public function id() { return $this->_id; }
        public function contenu() { return $this->_contenu; }
        public function pseudo() { return $this->_pseudo; }
        public function titre() { return $this->_titre; }
        public function date_creation() { return $this->_date_creation; }


        public function setId($id)
        {
            // L'identifiant du personnage sera, quoi qu'il arrive, un nombre entier.
            $this->_id = (int) $id;
        }

        public function setContenu($contenu)
        {
            if (is_string($contenu))
            {
                $this->_contenu = $contenu;
            }
        }

        public function setPseudo($pseudo)
        {
            if (is_string($pseudo) && strlen($pseudo) <= 50)
            {
                $this->_pseudo = $pseudo;
            }
        }

        public function setTitre($titre)
        {
            if (is_string($titre) && strlen($titre) <= 50)
            {
                $this->_titre = $titre;
            }
        }

        public function setDate($date_creation)
        {
            $this->_date_creation = $date_creation;
        }

    }
?>