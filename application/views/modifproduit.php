<title>Modification du Produit</title>
<div id="divmodif">
    <div class="textcenter">
        <h1 class="colorblue">Modification du produit</h1>
    </div>
    <?= form_open_multipart(''); ?>

        <div class="divflex">
            <div>
                <label for="ID_Produit">ID du produit :</label><br>
                <input class="inputmodif" @input="inputid" type="text" name="ID_Produit" id="ID_Produit" value="<?= $produit->ID_Produit ?>" readonly>
                <span class="text-danger spanmess" v-show="spanverifid">{{messid}}</span><br>
                <?= form_error('ID_Produit', '<div class="alert alert-danger">', '</div>'); ?>
            </div>
            <div id="divimgproduit">
                <img id="imgproduit" src="http://localhost/codei/assets/images/Produits/<?= $produit->ID_Produit ?>.<?= $produit->Photo_Produit ?>" alt="Photo Produit">
            </div>
        </div>

        <label for="Nom_Produit">Nom du produit :</label><br>
        <input class="inputmodif" @input="inputnom" type="text" name="Nom_Produit" id="Nom_Produit" value="<?= set_value('Nom_Produit',$produit->Nom_Produit); ?>">
        <span class="text-danger spanmess" v-show="spanverifnom">{{messnom}}</span><br>
        <?= form_error('Nom_Produit', '<div class="alert alert-danger">', '</div>'); ?>

        <div class="divflex">
            <div>
                <label for="Description_Produit">Description :</label><br>
                <textarea @input="inputdesc" name="Description_Produit" id="Description_Produit" ><?= set_value('Description_Produit',$produit->Description_Produit); ?></textarea>
            </div>
            <div id="spandesc">
                <span class="text-danger spanmess" v-show="spanverifdesc">{{messdesc}}</span>
            </div>
            <?= form_error('Description_Produit', '<div class="alert alert-danger">', '</div>'); ?>
        </div>
        

        <label for="Reference_Produit">Référence :</label><br>
        <input class="inputmodif" @input="inputref" type="text" name="Reference_Produit" id="Reference_Produit" value="<?= set_value('Reference_Produit',$produit->Reference_Produit); ?>">
        <span class="text-danger spanmess" v-show="spanverifref">{{messref}}</span><br>
        <?= form_error('Reference_Produit', '<div class="alert alert-danger">', '</div>'); ?>

        <label for="PrixAchat_Produit">Prix :</label><br>
        <input class="inputmodif" @input="inputprix" type="text" name="PrixAchat_Produit" id="PrixAchat_Produit" value="<?= set_value('PrixAchat_Produit',$produit->PrixAchat_Produit); ?>">
        <span class="text-danger spanmess" v-show="spanverifprix">{{messprix}}</span><br>
        <?= form_error('PrixAchat_Produit', '<div class="alert alert-danger">', '</div>'); ?>

        <label for="Quantite_Produit">Quantitées :</label><br>
        <input class="inputmodif" @input="inputquant" type="text" name="Quantite_Produit" id="Quantite_Produit" value="<?= set_value('Quantite_Produit',$produit->Quantite_Produit); ?>">
        <span class="text-danger spanmess" v-show="spanverifquant">{{messquant}}</span><br>
        <?= form_error('Quantite_Produit', '<div class="alert alert-danger">', '</div>'); ?>

        <label for="ID_SousRubrique">Choisissez la sous-rubrique du produit :</label><br>
        <select class="inputmodif" @input="inputsousR" id='ID_SousRubrique' name='ID_SousRubrique'>

            <?php
            foreach ($sousRub as $row):
                
                if ($row->ID_SousRubrique == $produit->ID_SousRubrique): ?>
                    
                    <option value=<?=$row->ID_SousRubrique?> selected><?= $row->Nom_SousRubrique ?></option>
                <?php else: ?>
                    
                    <option value=<?=$row->ID_SousRubrique?> ><?= $row->Nom_SousRubrique ?></option>
                <?php endif;
            endforeach;  ?>
        </select>
        <span class="text-danger spanmess" v-show="spanverifsousR">{{messsousR}}</span><br>
        <?= form_error('ID_SousRubrique', '<div class="alert alert-danger">', '</div>'); ?>

        <label for="image">Modifier l'image :</label><br>
        <input id="image" name="image" type="file"><br><br>

        <div class="textcenter">
            <input class="btn btn-secondary" @click="clickbtnmodif" type="submit" value="Modifier">
        </form><br><br>
        <form action="<?= site_url('village/supproduit') ?>" method="post">
            <input @input="inputid" type="text" name="ID_Produit" id="ID_ProduitSupp" value="<?= $produit->ID_Produit ?>" readonly hidden>
            <input class="btn btn-danger" @click="clickbtnsupp" type="submit" value="Supprimer">
        </div>
    </form>
</div>