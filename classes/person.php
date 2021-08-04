<?php 
    require_once __DIR__ . '/credit-card.php';
    require_once __DIR__ . '/user.php';
    require_once __DIR__ . '/user-premium.php';

    class Person {
        public $name;
        public $surname;
        public $address;
        public $postalCode;
        public $city;
        public $creditCard;
        public $userData;
        public $premiumData;

        // constructor
        function __construct($name = "", $surname = "", $address = "", $postalCode = 0, $city = "") {
            $this->name = $name;
            $this->surname = $surname;
            $this->address = $address;
            $this->postalCode = $postalCode;
            $this->city = $city;
            $this->creditCard = null; //init
            $this->userData = null; //init
            $this->premiumData = null; //init
        }

        // methods
        function insertCreditCard($cardNumber, $expDate, $cvc) {
            $this->creditCard = new CreditCard($cardNumber, $expDate, $cvc);
        }

        function insertUserData($username, $email, $password) {
            $this->userData = new User($username, $email, $password);
        }

        function insertPremiumData($premiumLevel) {
            $this->premiumData = new PremiumData($premiumLevel);
        }
    }

    $person1 = new Person("Paperino", "paolino", "Corso papero  24", "10234", "Paperopoli");
    $person1->insertCreditCard("012345678910", "06/23", "627");
    $person1->insertUserData("paolino.paperino", "paolino.paperino@gmail.com", "paolinopaperinoXXX");
    $person1->insertPremiumData(2);
    var_dump($person1);
