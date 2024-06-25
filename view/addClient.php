<?php
    if(isset($_POST['valider'])){
        extract($_POST);
        $ok = addClient($nom, $prenom, $adresse, $telephone);
        if($ok == 1)
            echo "<div  id='message' class='alert alert-success'>Client enregistré avec succés !</div>";
        else
            echo "<div  id='message' class='alert alert-danger'>Echec d'enregistrement !</div>";

    }
?>
<div class="col-md-6 container spacer">
    <div class="card">
        <div class="card-header center">
            Ajout d'un client
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" class="form-control" name="nom">
                </div>
                <div class="form-group">
                    <label for="">Prénom</label>
                    <input type="text" class="form-control" name="prenom">
                </div>
                <div class="form-group">
                    <label for="">Adresse</label>
                    <input type="text" class="form-control" name="adresse">
                </div>
                <div class="form-group">
                    <label for="">Téléphone</label>
                    <input type="text" class="form-control" name="telephone">
                </div>
                <div class="form-group center">
                    <input class="btn btn-info" type="submit" name="valider" value="Enregistrer">
                    <input class="btn btn-danger" type="reset" name="annuler" value="Annuler">
                </div>
            </form>
        </div>
    </div>
</div>
