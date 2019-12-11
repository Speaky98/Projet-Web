<?php
    class compteClient
    {
        private $_id;
        private $_user_name;
        private $_role;
        private $_email;
        private $_user_pass;
        private $_date;

        public function hydrate(array $donnees)
        {
             if (isset($donnees['user_idd']))
            {
                $this->setId($donnees['user_idd']);
            }

            if (isset($donnees['user_name']))
            {
                $this->setNom($donnees['user_name']);
            }

            if (isset($donnees['role']))
            {
                $this->setRole($donnees['role']);
            }

            if (isset($donnees['user_email']))
            {
                $this->setEmail($donnees['user_email']);
            }

            if (isset($donnees['user_pass']))
            {
                $this->setPassword($donnees['user_pass']);
            }

            if (isset($donnees['joining_date']))
            {
                $this->setDate($donnees['joining_date']);
            }
        }

        public function id() { return $this->_id; }
        public function user_name() { return $this->_user_name; }
        public function role() { return $this->_role; }
        public function password() { return $this->_user_pass; }
        public function email() { return $this->_email; }
        public function date() { return $this->_date; }


        public function setId($id)
        {
            // L'identifiant du personnage sera, quoi qu'il arrive, un nombre entier.
            $this->_id = (int) $id;
        }

        public function setNom($user_name)
        {
            if (is_string($user_name) && strlen($user_name) <= 50)
            {
                $this->_user_name = $user_name;
            }
        }

        public function setRole($role)
        {
            if (is_string($role) && strlen($role) <= 50)
            {
                $this->_role = $role;
            }
        }

        public function setDate($date)
        {
            $this->_date = $date;
        }

        public function setEmail($email)
        {
            if (is_string($email) && strlen($email) <= 50)
            {
                $this->_email = $email;
            }
        }

        public function setPassword($user_pass)
        {
            if (is_string($user_pass) && strlen($user_pass) <= 16)
            {
                $this->_user_pass = $user_pass;
            }
        }

    }
?>