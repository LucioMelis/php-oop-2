<?php
    class RegisteredUser extends User {

        public $password;

        protected $id = -1;

        private $isLogged = false;

        function __construct($_email, $_password) {
            $this->discount = 20;
            $this->email = $_email;
            $this->password = $_password;

            $this->validateUser();

        }

        public function isValidUser() {
            return $this->isLogged;
        }

        private function validateUser() {
            // cnnessione a db per verifica pass e email
            // se ok valorizzo id con utente restituito dal db
            $this->id = 456538;
            $this->isLogged = true;
        }


    }


?>