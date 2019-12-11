<?php
    class commentaire
    {
        private $_id;
        private $_msg;
        private $_commentateur;
        private $_id_billet;
        private $_date_publication;

        public function hydrate(array $donnees)
        {
             if (isset($donnees['id']))
            {
                $this->setId($donnees['id']);
            }

            if (isset($donnees['user_name']))
            {
                $this->setCommentateur($donnees['user_name']);
            }

            if (isset($donnees['msg']))
            {
                $this->setMsg($donnees['msg']);
            }

            if (isset($donnees['id_billet']))
            {
                $this->setIdBillet($donnees['id_billet']);
            }

            if (isset($donnees['date_publication']))
            {
                $this->setDate($donnees['date_publication']);
            }
        }

        public function id() { return $this->_id; }
        public function msg() { return $this->_msg; }
        public function commentateur() { return $this->_commentateur; }
        public function id_billet() { return $this->_id_billet; }
        public function date_publication() { return $this->_date_publication; }


        public function setId($id)
        {
            // L'identifiant du personnage sera, quoi qu'il arrive, un nombre entier.
            $this->_id = (int) $id;
        }

        public function setIdBillet($id_billet)
        {
            $this->_id_billet = (int) $id_billet;
        }

        public function setMsg($msg)
        {
            if (is_string($msg))
            {
                $this->_msg = $msg;
            }
        }

        public function setCommentateur($commentateur)
        {
            if (is_string($commentateur) && strlen($commentateur) <= 50)
            {
                $this->_commentateur = $commentateur;
            }
        }

        public function setDate($date_publication)
        {
            $this->_date_publication = $date_publication;
        }

    }
?>