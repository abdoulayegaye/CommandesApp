<?php

/**
 * PDO::FETCH_ASSOC = 2
 * PDO::FETCH_NUM = 3
 */
    function getProduits(){
        global $db;
        $sql = "SELECT * FROM produit ORDER BY libelle ASC";
        return $db->query($sql)->fetchAll(2);
    }