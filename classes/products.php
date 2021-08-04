<?php 
    require_once __DIR__ . '/seller.php';

    class Product {
        public $productName;
        public $category;
        public $price;

        // constructor
        function __construct($sellerUsername = "", $productName = "", $category = "", $price = 0) {
            $this->sellerUsername = $sellerUsername;
            $this->productName = $productName;
            $this->category = $category;
            $this->price = $price;
        }
    }