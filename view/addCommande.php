<?php
    $produits = getProduits();
    $clients = getClients();
    if(isset($_POST['valider'])){
        extract($_POST);
        $ok = addCommande($idClient, $idProduit, $qteCommandee);
        if($ok == 1)
            echo "<div  id='message' class='alert alert-success'>Commande enregistrée avec succés !</div>";
        else
            echo "<div  id='message' class='alert alert-danger'>Echec d'enregistrement !</div>";

    }
?>
<div class="col-md-6 container spacer">
    <div class="card">
        <div class="card-header center">
            Ajout d'une commande
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Client</label>
                    <select class="form-control" name="idClient">
                        <option value="0">-- Sélectionner un client --</option>
                        <?php foreach($clients as $c){ ?>
                            <option value="<?= $c['idCl'] ?>"><?= ucwords($c['prenom']) ?> <?= strtoupper($c['nom']) ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Produit</label>
                    <select id="mySelect" class="form-control" name="idProduit">
                        <option value="0">-- Sélectionner un produit --</option>
                        <?php foreach($produits as $p){ ?>
                            <option qteStock="<?=$p['qteStock']?>" value="<?= $p['idP'] ?>"><?= ucwords($p['libelle']) ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Quantité commandée</label>
                    <input type="number" class="form-control" name="qteCommandee" id="qteCommandee">
                    <p id="output"></p>
                </div>
                <div class="form-group center">
                    <input class="btn btn-info" type="submit" name="valider" value="Enregistrer" id="valider">
                    <input class="btn btn-danger" type="reset" name="annuler" value="Annuler">
                </div>
            </form>
        </div>
    </div>
</div>
