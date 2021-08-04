<?php 
    require_once __DIR__ . '/person.php';

    class User {
        public $username;
        public $email;
        public $password;

        // constructor
        function __construct($username = "", $email = "", $password = "") {
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
        }
    }