<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=blog','root','root');
}
catch(Exception $e) {
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
}
?>
