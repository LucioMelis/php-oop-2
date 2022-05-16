<?php
class Utente{
    
    public $nome;
    public $cognome;
    public $codiceFiscale;
    public $dataDiNascita;
    public $indirizzo;
    public $città;
    public $email;
    public $utenteRegistrato; //valore booleano 

    function __construct($_nome,$_cognome,$_codiceFiscale,$_dataDiNascita,$_indirizzo, $_città, $_email){
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->codiceFiscale = $_codiceFiscale;
        $this->dataDiNascita = $_dataDiNascita;
        $this->indirizzo = $_indirizzo;
        $this->città = $_città;
        $this->email = $_email;
    }
}
?>