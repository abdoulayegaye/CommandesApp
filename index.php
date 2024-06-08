<?php
    include_once 'DB/connection.php';
    include_once 'modelDB/produitsDB.php';
    echo '<br><h1>Bienvenue</h1>';
    $produits = getProduits();
    echo '<pre>';
        var_dump($produits);
    echo '</pre>';
?>