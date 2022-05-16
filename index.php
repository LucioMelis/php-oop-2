<!-- Utilizzo Index.php per creare nuove istanze nelle classi, come ad esempio un nuovo utente..  -->
<?php

include_once 'utente.php';
$utente = new Utente('Erik','Schievenin','MLSLCU92H12B354P','12-06-1992'); //passo i dati dell'utente

?>