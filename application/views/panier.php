<title>Panier</title>
<div>
    <?php if (!empty($_SESSION['panierVillage']['idProduit'])): ?>
        <div class="colorblue" id="divtitlepanier">
            <h1>Votre panier :</h1>
        </div><br>
        <table id="tablepanier">
            <thead>
                <tr>
                    <th id='ThPhoto'>Photo</th>
                    <th id='ThNomProduit'>Nom Produit</th>
                    <th id='ThDescription'>Description</th>
                    <th id='ThReference'>Référence</th>
                    <th id='ThPrix'>Prix unitaire</th>
                    <th id='ThStock'>Quantité</th>
                    <th id='ThPrix'>Prix total</th>
                    <th id='ThSupp'>Supprimer produit</th>
                </tr>
            </thead>
            <?php
            $prixTT = 0;
            foreach ($produits as $row):
                        $positionProduit = array_search($row->ID_Produit,  $_SESSION['panierVillage']['idProduit']);
                        $qtepro = $_SESSION['panierVillage']['qteProduit'][$positionProduit];
                        $prixTT +=  $row->PrixAchat_Produit * $qtepro; ?>
                        <tr>
                            <td class="tdimg"><img class="imgpanier" src="http://localhost/codei/assets/images/Produits/<?= $row->ID_Produit ?>.<?= $row->Photo_Produit ?>" alt="photo produit"></td>
                            <td class="tdNom"><?= $row->Nom_Produit; ?></td>
                            <td class="tddesc"><?= $row->Description_Produit; ?></td>
                            <td><?= $row->Reference_Produit; ?></td>
                            <td class="tdprix"><?= $row->PrixAchat_Produit . '€' ?></td>
                            <td><?= $qtepro; ?></td>
                            <td class="tdprix"><?= $row->PrixAchat_Produit*$qtepro . '€' ?></td>
                            <td><a href="<?= site_url('village/suppProduit/' . $row->ID_Produit) ?>"><img id="imgcorbeille" src="http://localhost/codei/assets/images/corbeille.png" alt="corbeille"></a></td>
                        </tr>
                    <?php
            endforeach; 
            $_SESSION['panier']['prixTTC'] = $prixTT; ?>
            <tr>
                <td class="derlignepanier"></td>
                <td class="derlignepanier"></td>
                <td class="derlignepanier"></td>
                <td class="derlignepanier"></td>
                <td class="derlignepanier"></td>
                <td class="derlignepanier"></td>
                <td class="derlignepanier"></td>
                <td class="paddingtotal" id="tdtotal">Total :</td>
                <td class="paddingtotal"><?= $prixTT . '€' ?></td>
            </tr>
        </table>
    <?php else: ?>
        <div class="colorblue" id="divtitlepanier">
            <h1>Votre panier est vide</h1>
        </div>
    <?php endif; ?>
</div>