<?php
class Product {

    public $description = '';

    protected $type = 'Generic';

    private $brand;
    private $nameItem;
    private $price;

    function __construct($_nameItem, $_brand, $_price) {
        $this->nameItem = $_nameItem;
        $this->brand = $_brand;
        $this->price = $_price;
    }

    public function getBrand() {
        return $this->brand;
    }
    public function getName() {
        return $this->name;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getType() {
        return $this->type;
    }
}


?>