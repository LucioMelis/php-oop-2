<?php


    class ProductFood extends Product {

        // wet or dry?
        public $foodType;
        public $expiryDate;
        
        function __construct($_nameItem, $_brand, $_price, $_foodType, $_expiryDate) {
            parent::__construct($_nameItem, $_brand, $_price);
            // riscrivo il type del product generico
            $this->type = 'Food';
            $this->foodType = $_foodType;
            $this->expiryDate = $_expiryDate;           

        }
    }


?>