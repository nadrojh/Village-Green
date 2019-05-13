<title>Page Admin</title>
<?php if(!isset($_SESSION['role'])): ?>
    <div id="divtitleadmin">
        <h1 class="colorblue">Accès Refusé</h1>
    </div>
<?php elseif($_SESSION['role'] == "admin"): ?>
    <div>
        <div id="divtitleadmin">
            <h1 class="colorblue">Partie Administrateur</h1>
        </div>
        <div>
            <h3 class="colorblue">Rubrique :</h3>
            <a id="btnaddproduit" class="btn btn-info" href="<?= site_url('village/addproduit') ?>">Ajouter un produit</a>
        </div>
        <div>
            <?php foreach ($rubrique as $rowrub): ?>

                <h5><?= $rowrub->Nom_Rubrique ?></h5>
                <div class="divsousRuAdmin">
                    <?php foreach ($sousRub as $rowsous): 

                        if ($rowrub->ID_Rubrique == $rowsous->ID_Rubrique):?>

                            <a class="liensousPadmin" href="<?= site_url('village/produits/'.$rowsous->ID_SousRubrique) ?>"><?= $rowsous->Nom_SousRubrique ?></a><br>
                        <?php endif; 
                    endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div><br>
        <div>
            <h3 class="colorblue">Commande :</h3>
        </div>
        <div>
            Numéro de commande : <br>
            <?php foreach ($commande as $row): ?>
                    <a class="liensousPadmin" href="<?= site_url('village/commande/'.$row->Numero_Commande) ?>">N° <?= $row->Numero_Commande ?></a><br>
            <?php endforeach; ?>
        </div>
    </div>
<?php else: ?>
    <div id="divtitleadmin">
        <h1 class="colorblue">Accès Refusé</h1>
    </div>
<?php endif; ?>