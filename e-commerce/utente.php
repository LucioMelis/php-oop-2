<?php
class User {
    public $name;
    public $surname;
    public $email;
    public $address;

    private $creditCard;

    protected $discount = 0;

    // function __construct($_name, $_surname, $_email) {
    //     $this->name = $_name;
    //     $this->surname = $_surname;
    //     $this->email = $_email;
    // }

    public function setCard($_code, $_cvv, $_expiryDate) {
        $this->creditCard = new CreditCard($_code, $_cvv, $_expiryDate);
        $this->creditCard->owner = $this->name . ' ' . $this->surname;
    }

    public function getDiscount() {
        return $this->discount;
    }
    
}
?>