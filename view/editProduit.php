<?php
    $categories = getCategories();
    $id = $_GET['id'];
    $produit = getProduitById($id);
    if(isset($_POST['modifier'])){
        extract($_POST);
        $ok = updateProduit($id, $libelle, $prix, $qteStock, $idCategorie);
        header("Location:?page=listProduit");
    }
?>
<div class="col-md-6 container spacer">
    <div class="card">
        <div class="card-header center">
            Edition d'un produit
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Libellé</label>
                    <input type="text" class="form-control" name="libelle" value="<?= $produit['libelle'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Prix</label>
                    <input type="number" class="form-control" name="prix" value="<?= $produit['prix'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Quantité en stock</label>
                    <input type="number" min="10" class="form-control" name="qteStock" value="<?= $produit['qteStock'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Catégorie</label>
                    <select class="form-control" name="idCategorie">
                        <option value="0">-- Sélectionner une catégorie --</option>
                        <?php foreach($categories as $cat){ ?>
                            <?php $selected = $cat['idCat'] == $produit['idCategorie'] ? 'selected' : ''; ?>
                            <option <?= $selected ?> value="<?= $cat['idCat'] ?>"><?= strtoupper($cat['nomCat']) ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group center">
                    <input class="btn btn-success" type="submit" name="modifier" value="Modifier">
                    <input class="btn btn-danger" type="reset" name="annuler" value="Annuler">
                </div>
            </form>
        </div>
    </div>
</div>
