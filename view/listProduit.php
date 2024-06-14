<?php
    $produits = getProduits();
?>
<div class="container spacer">
    <div class="card">
        <div class="card-header center">
            Liste des produits
        </div>
        <div class="card-body">
            <table class="center table table-bordered table-striped">
                <tr>
                    <th>#</th>
                    <th>Libellé</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Catégorie</th>
                    <th colspan="2">Action</th>
                </tr>
                <?php foreach($produits as $p){ ?>
                    <tr>
                        <td><?= $p['idP'] ?></td>
                        <td><?= ucwords($p['libelle']) ?></td>
                        <td><?= $p['prix'] ?></td>
                        <td><?= $p['qteStock'] ?></td>
                        <td><?= ucfirst($p['nomCat']) ?></td>
                        <td>
                            <a href="?page=editProduit&id=<?= $p['idP'] ?>" class="btn btn-outline-warning btn-sm">Modifier</a>
                            <a onclick="return confirm('Voulez-vous supprimer ce produit ?')" href="?page=deleteProduit&id=<?= $p['idP'] ?>" class="btn btn-outline-danger btn-sm">Supprimer</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <a href="?page=addProduit" class="btn btn-success">Ajouter</a>
        </div>
    </div>
</div>
