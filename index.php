<!-- Utilizzo Index.php per creare nuove istanze nelle classi, come ad esempio un nuovo utente..  -->
<?php

include_once 'utente.php';
$utente_uno = new Utente('Erik','Schievenin','MLSLCU92H12B354P','12-06-1992','Via Delle Rose 54','Roma','eriksioxx@gmail.com'); //passo i dati dell'utente
var_dump($utente_uno);

include_once 'prodotto.php';
$prodotto_uno = new Prodotto ('Ultima Urinary','cibo', 15,'efficiente per i cani di taglia media');

?>