<?php
class Prodotto{
    public $nomeProdotto;
    public $tipologia;
    public $prezzo;
    public $descrizioneProdotto;
    public $numeroPezzi= 0;

    function __construct($_nomeProdotto,$_tipologia,$_prezzo,$_descrizioneProdotto){
        $this->nomeProdotto = $_nomeProdotto;
        $this->tipologia = $_tipologia;
        $this->prezzo = $_prezzo;
        $this->descrizioneProdotto = $_descrizioneProdotto;
    }
}

?>