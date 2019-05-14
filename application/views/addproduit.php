<title>Ajout de produit</title>
<div id="divaddproduit">
    <?= form_open_multipart(''); ?>

        <label for="Nom_Produit">Nom du produit :</label><br>
        <input class="inputmodif" @input="inputnom" type="text" name="Nom_Produit" id="Nom_Produit" value="<?= set_value('Nom_Produit'); ?>">
        <span class="text-danger spanmess" v-show="spanverifnom">{{messnom}}</span><br>
        <?= form_error('Nom_Produit', '<div class="alert alert-danger">', '</div>'); ?>

        <div class="divflex">
            <div>
                <label for="Description_Produit">Description :</label><br>
                <textarea @input="inputdesc" name="Description_Produit" id="Description_Produit" ><?= set_value('Description_Produit'); ?></textarea>
            </div>
            <div id="spandesc">
                <span class="text-danger spanmess" v-show="spanverifdesc">{{messdesc}}</span>
            </div>
            <?= form_error('Description_Produit', '<div class="alert alert-danger">', '</div>'); ?>
        </div>

        <label for="Reference_Produit">Référence :</label><br>
        <input class="inputmodif" @input="inputref" type="text" name="Reference_Produit" id="Reference_Produit" value="<?= set_value('Reference_Produit'); ?>">
        <span class="text-danger spanmess" v-show="spanverifref">{{messref}}</span><br>
        <?= form_error('Reference_Produit', '<div class="alert alert-danger">', '</div>'); ?>

        <label for="PrixAchat_Produit">Prix :</label><br>
        <input class="inputmodif" @input="inputprix" type="text" name="PrixAchat_Produit" id="PrixAchat_Produit" value="<?= set_value('PrixAchat_Produit'); ?>">
        <span class="text-danger spanmess" v-show="spanverifprix">{{messprix}}</span><br>
        <?= form_error('PrixAchat_Produit', '<div class="alert alert-danger">', '</div>'); ?>

        <label for="Quantite_Produit">Quantitées :</label><br>
        <input class="inputmodif" @input="inputquant" type="text" name="Quantite_Produit" id="Quantite_Produit" value="<?= set_value('Quantite_Produit'); ?>">
        <span class="text-danger spanmess" v-show="spanverifquant">{{messquant}}</span><br>
        <?= form_error('Quantite_Produit', '<div class="alert alert-danger">', '</div>'); ?>

        <label for="ID_Rubrique">Choisissez la sous-rubrique du produit :</label><br>
        <select class="selectmodif" @input="inputRub" @change="changeRub" id='ID_Rubrique'>
            <option value="">Selectionnez une rubrique</option>
            <?php
            foreach ($Rubrique as $row): ?>
                    
                    <option value="<?=$row->ID_Rubrique?>"><?= $row->Nom_Rubrique ?></option>
            <?php 
            endforeach;  ?>
        </select>
        <span class="text-danger spanmess" v-show="spanverifRub">{{messRub}}</span><br>

        <div id="divsousR">
            <select class="inputmodif" @input="inputSousRub" v-show="selectSousRub" name="ID_SousRubrique" id="ID_SousRubrique"></select>
            <span class="text-danger spanmess" v-show="spanverifsousR">{{messsousR}}</span><br>
            <?= form_error('ID_SousRubrique', '<div class="alert alert-danger">', '</div>'); ?>
        </div>

        <label for="image">Selectionnez l'image :</label><br>
        <input id="image" @input="inputfile" name="image" type="file">
        <span class="text-danger spanmess" v-show="spanveriffile">{{messfile}}</span><br><br>

        <div>
            <input class="btn btn-secondary" @click="clickbtnaddproduit" type="submit" value="Ajouter">
        </div>
    </form>
</div>