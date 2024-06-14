<?php
    $categories = getCategories();
    if(isset($_POST['valider'])){
        extract($_POST);
        $ok = addProduit($libelle, $prix, $qteStock, $idCategorie);
        if($ok == 1)
            echo "<div  id='message' class='alert alert-success'>Produit enregistré avec succés !</div>";
        else
            echo "<div  id='message' class='alert alert-danger'>Echec d'enregistrement !</div>";

    }
?>
<div class="col-md-6 container spacer">
    <div class="card">
        <div class="card-header center">
            Ajout d'un produit
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Libellé</label>
                    <input type="text" class="form-control" name="libelle">
                </div>
                <div class="form-group">
                    <label for="">Prix</label>
                    <input type="number" class="form-control" name="prix">
                </div>
                <div class="form-group">
                    <label for="">Quantité en stock</label>
                    <input type="number" min="10" class="form-control" name="qteStock">
                </div>
                <div class="form-group">
                    <label for="">Catégorie</label>
                    <select class="form-control" name="idCategorie">
                        <option value="0">-- Sélectionner une catégorie --</option>
                        <?php foreach($categories as $cat){ ?>
                            <option value="<?= $cat['idCat'] ?>"><?= strtoupper($cat['nomCat']) ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group center">
                    <input class="btn btn-info" type="submit" name="valider" value="Enregistrer">
                    <input class="btn btn-danger" type="reset" name="annuler" value="Annuler">
                </div>
            </form>
        </div>
    </div>
</div>
