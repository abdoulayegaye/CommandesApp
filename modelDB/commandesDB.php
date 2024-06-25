<?php

    function getCommandes($motCle){
        global $db;
        $sql = "SELECT * 
                FROM produit p, commander c, client cl
                WHERE p.idP = c.idProduit
                AND c.idClient = cl.idCl 
                AND libelle LIKE '%$motCle%'
                ORDER BY date_commande DESC";
        return $db->query($sql)->fetchAll(2);
    }

    function addCommande($idClient, $idProduit, $qteCommandee){
        global $db;
        $sql = "INSERT INTO commander(idClient, idProduit, qteCommandee) VALUES($idClient, $idProduit, $qteCommandee)";
        return $db->exec($sql); //1 ou 0
    }