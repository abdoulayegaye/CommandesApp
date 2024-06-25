<?php
    $clients = getClients();
?>
<div class="container spacer">
    <div class="card">
        <div class="card-header center">
            Liste des clients
        </div>
        <div class="card-body">
            <table class="center table table-bordered table-striped">
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse</th>
                    <th>Téléphone</th>
                    <th colspan="2">Action</th>
                </tr>
                <?php foreach($clients as $c){ ?>
                    <tr>
                        <td><?= $c['idCl'] ?></td>
                        <td><?= strtoupper($c['nom']) ?></td>
                        <td><?= ucwords($c['prenom']) ?></td>
                        <td><?= $c['adresse'] ?></td>
                        <td><?= $c['telephone'] ?></td>
                        <td>
                            <a href="?page=editClient&id=<?= $c['idCl'] ?>" class="btn btn-outline-warning btn-sm">Modifier</a>
                            <a onclick="return confirm('Voulez-vous supprimer ce client ?')" href="?page=deleteClient&id=<?= $c['idCl'] ?>" class="btn btn-outline-danger btn-sm">Supprimer</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <a href="?page=addClient" class="btn btn-success">Ajouter</a>
        </div>
    </div>
</div>
