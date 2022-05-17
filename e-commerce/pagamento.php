<?php
    
    class Cart {

        public $products = [];
        public $user;

        private $isRegisteredUser = false;

        function __construct(){
            $this->user = new User();
        }

        public function setRegisteredUser($_user) {
            $this->user = $_user;
            $this->isRegisteredUser = true;
        }

        public function addProduct($_product) {
            $this->products[] = $_product;     
        }

        public function emptyCart() {
            $this->products = [];
        }

        public function checkOut(){
            // somma tutti i prezzi dei prodotti nel carrello
            // se un user ha uno sconto lo applico 
            // da qui poi potrò prendere il pagamento
            foreach($this->products as $product) {
                $sum += $product->getPrice();
            }

            $discount = $this->user->getDiscount();

            return $sum - ($sum * $discount / 100);
        }

    }

?>

