<?php

/**
 * PDO::FETCH_ASSOC = 2
 * PDO::FETCH_NUM = 3
 */
    function getProduits(){
        global $db;
        $sql = "SELECT * 
                FROM produit p, categorie c
                WHERE p.idCategorie = c.idCat 
                ORDER BY libelle ASC";
        return $db->query($sql)->fetchAll(2);
    }

    function addProduit($libelle, $prix, $qteStock, $idCategorie){
        global $db;
        $sql = "INSERT INTO produit VALUES(null, '$libelle', $prix, $qteStock, $idCategorie)";
        return $db->exec($sql); //1 ou 0
    }

    function getProduitById($id){
        global $db;
        $sql = "SELECT * 
                FROM produit p, categorie c
                WHERE idP = $id";
        return $db->query($sql)->fetch(2);
    }

    function updateProduit($id, $libelle, $prix, $qteStock, $idCategorie){
        global $db;
        $sql = "UPDATE produit 
                SET libelle = '$libelle', 
                    prix = $prix, 
                    qteStock = $qteStock,
                    idCategorie = $idCategorie
                WHERE idP = $id";
        return $db->exec($sql); //1 ou 0
    }

    function deleteProduit($id){
        global $db;
        $sql = "DELETE FROM produit WHERE idP = $id";
        return $db->exec($sql); //1 ou 0
    }

    function getCategories(){
        global $db;
        $sql = "SELECT * 
                FROM categorie c
                ORDER BY nomCat ASC";
        return $db->query($sql)->fetchAll(2);
    }