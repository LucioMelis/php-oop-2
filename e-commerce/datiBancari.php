<?php
class CreditCard {
        
    private $code;
    private $cvv;
    private $expiryDate;

    function __construct($_code, $_cvv, $_expiryDate) {
        $this->code = $_code;
        $this->cvv = $_cvv;
        $this->expiryDate = $_expiryDate;
    }

    public function isValid() {
        // codice per valutare se expire date è antecedente a oggi
        // quindi ritornerò un valore true o false

        return true;
    }
}
?>