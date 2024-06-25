<?php
    $id = $_GET['id'];
    $client = getClientById($id);
    if(isset($_POST['modifier'])){
        extract($_POST);
        $ok = updateClient($id, $nom, $prenom, $adresse, $telephone);
        header("Location:?page=listClient");
    }
?>
<div class="col-md-6 container spacer">
    <div class="card">
        <div class="card-header center">
            Edition d'un client
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" class="form-control" name="nom" value="<?= $client['nom'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Prénom</label>
                    <input type="text" class="form-control" name="prenom" value="<?= $client['prenom'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Adresse</label>
                    <input type="text" class="form-control" name="adresse" value="<?= $client['adresse'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Téléphone</label>
                    <input type="text" class="form-control" name="telephone" value="<?= $client['telephone'] ?>">
                </div>
                <div class="form-group center">
                    <input class="btn btn-success" type="submit" name="modifier" value="Modifier">
                    <input class="btn btn-danger" type="reset" name="annuler" value="Annuler">
                </div>
            </form>
        </div>
    </div>
</div>
