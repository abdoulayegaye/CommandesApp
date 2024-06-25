<?php

/**
 * PDO::FETCH_ASSOC = 2
 * PDO::FETCH_NUM = 3
 */
    function getClients(){
        global $db;
        $sql = "SELECT * 
                FROM client
                ORDER BY nom ASC";
        return $db->query($sql)->fetchAll(2);
    }

    function addClient($nom, $prenom, $adresse, $telephone){
        global $db;
        $sql = "INSERT INTO client VALUES(null, '$nom', '$prenom', '$adresse', '$telephone')";
        return $db->exec($sql); //1 ou 0
    }

    function getClientById($id){
        global $db;
        $sql = "SELECT * 
                FROM client
                WHERE idCl = $id";
        return $db->query($sql)->fetch(2);
    }

    function updateClient($id, $nom, $prenom, $adresse, $telephone){
        global $db;
        $sql = "UPDATE client 
                SET nom = '$nom', 
                    prenom = '$prenom', 
                    adresse = '$adresse',
                    telephone = '$telephone'
                WHERE idCl = $id";
        return $db->exec($sql); //1 ou 0
    }

    function deleteClient($id){
        global $db;
        $sql = "DELETE FROM client WHERE idCl = $id";
        return $db->exec($sql); //1 ou 0
    }