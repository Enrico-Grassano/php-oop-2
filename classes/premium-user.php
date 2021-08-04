<?php 
    require_once __DIR__ . '/person.php';

    class PremiumData {
        public $premiumLevel;
        public $discount;

        function __construct($premiumLevel = 0) {
            $this->premiumLevel = $premiumLevel;
            $this->discount = $premiumLevel * 10;
        }
    }