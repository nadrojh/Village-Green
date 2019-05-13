<div id="divtitleproduit">
    <h2><?= $sousRubrique[0]->Nom_SousRubrique; ?></h2>
</div><br>
<div class="divflexproduit">
    <?php 
    $i = 0;
    foreach ($produits as $row): ?>
        <?php if($i == 2):?> 
            </div><div class="divflexproduit"> 
        <?php $i = 0;
        endif; ?>
        <div class="card sizecard">
            <br>
            <div class="divimgprod">
                <img class="card-img-top imgproduit" src="http://localhost/codei/assets/images/Produits/<?= $row->ID_Produit ?>.<?= $row->Photo_Produit ?>" alt="Card image cap">
            </div>
            <div class="card-body">
                <div class="divflexproduit">
                    <div>
                        <h4 class="card-title"><?= $row->Nom_Produit ?></h4>
                    </div>
                    <div class="divref">
                        &nbsp;
                        <?= $row->Reference_Produit ?>
                    </div>
                </div>
                <p class="card-text sizepcard">
                    <?= $row->Description_Produit ?>
                </p>
                <p class="pPrixproduit">
                    <?= $row->PrixAchat_Produit ?> €
                </p>
                <?php if(isset($_SESSION['email'])): ?>
                    <div class="divflex">
                        <div>
                            <a href="<?= site_url('village/ajoutpanier/'. $row->ID_Produit ) ?>" class="btn btn-primary">Ajouter au Panier</a>
                        </div>
                        <?php if($_SESSION['role'] == 'admin'): ?>
                            <div>
                                &nbsp;
                            </div>
                            <div>
                                <a href="<?= site_url('village/modifproduit/'. $row->ID_Produit ) ?>" class="btn btn-warning">Modifier le Produit</a>
                            </div>
                            <?php endif; ?>
                    </div>
                <?php else: ?>
                    <p class="pconnexproduit">Se connecter pour mettre dans son panier.</p>
                <?php endif; ?>
            </div>
        </div>    
    <?php $i++;
    endforeach; ?>
</div>