<?php
    $motCle = (isset($_GET['rechercher']) && isset($_GET['motCle'])) ? $_GET['motCle'] : '';
    $commandes = getCommandes($motCle);
?>
<div class="container spacer">
    <div class="card">
        <div class="card-header center">
            Liste des commandes
        </div>
        <div class="card-body">
            <form method="get">
                <div class="form-group">
                    <input type="text" name="motCle">
                    <input type="hidden" name="page" value="listCommande">
                    <input type="submit" class="btn btn-outline-primary" name="rechercher" value="Rechercher">
                </div>
            </form>
            <table class="center table table-bordered table-striped">
                <tr>
                    <th>Client</th>
                    <th>Produit</th>
                    <th>Date de commande</th>
                    <th>Quantité commandée</th>
                </tr>
                <?php foreach($commandes as $c){ ?>
                    <tr>
                        <td><?= ucwords($c['prenom']) ?> <?= strtoupper($c['nom']) ?></td>
                        <td><?= ucwords($c['libelle']) ?></td>
                        <td><?= $c['date_commande'] ?></td>
                        <td><?= $c['qteCommandee'] ?></td>
                    </tr>
                <?php } ?>
            </table>
            <a href="?page=addCommande" class="btn btn-success">Ajouter</a>
        </div>
    </div>
</div>
