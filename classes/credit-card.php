<?php 
    require_once __DIR__ . '/person.php';

    class CreditCard {
        public $cardNumber;
        public $expDate;
        public $cvc;
        
        function __construct($cardNumber = "", $expDate = "", $cvc = "") {
            $this->cardNumber = $cardNumber;
            $this->expDate = $expDate;
            $this->cvc = $cvc;
        }
    }