<title>Modification du compte</title>
<div id="divmodifcompte">
    <div class="textcenter">
        <h1 class="colorblue">Modification du compte</h1>
    </div>
    <div>
        <?= form_open(''); ?>

            <label for="Nom_Client">Nom :</label><br>
            <input class="inputcompte" @input="inputNomCli" type="text" name="Nom_Client" id="Nom_Client" value="<?= $datauser->Nom_Client ?>">
            <span class="text-danger spanmess" v-show="spanverifNomCli">{{messNomCli}}</span><br>
            <?= form_error('Nom_Client', '<div class="alert alert-danger">', '</div>'); ?>

            <label for="Prenom_Client">Prénom :</label><br>
            <input class="inputcompte" @input="inputPrenomCli" type="text" name="Prenom_Client" id="Prenom_Client" value="<?= $datauser->Prenom_Client ?>">
            <span class="text-danger spanmess" v-show="spanverifPrenomCli">{{messPrenomCli}}</span><br>
            <?= form_error('Prenom_Client', '<div class="alert alert-danger">', '</div>'); ?>

            <label for="Adresse_Client">Adresse :</label><br>
            <input class="inputcompte" @input="inputAdresseCli" type="text" name="Adresse_Client" id="Adresse_Client" value="<?= $datauser->Adresse_Client ?>">
            <span class="text-danger spanmess" v-show="spanverifAdresseCli">{{messAdresseCli}}</span><br>
            <?= form_error('Adresse_Client', '<div class="alert alert-danger">', '</div>'); ?>

            <label for="Ville_Client">Ville :</label><br>
            <input class="inputcompte" @input="inputVilleCli" type="text" name="Ville_Client" id="Ville_Client" value="<?= $datauser->Ville_Client ?>">
            <span class="text-danger spanmess" v-show="spanverifVilleCli">{{messVilleCli}}</span><br>
            <?= form_error('Ville_Client', '<div class="alert alert-danger">', '</div>'); ?>

            <label for="CP_Client">Code Postal :</label><br>
            <input class="inputcompte" @input="inputCpCli" type="text" name="CP_Client" id="CP_Client" value="<?= $datauser->CP_Client ?>">
            <span class="text-danger spanmess" v-show="spanverifCpCli">{{messCpCli}}</span><br>
            <?= form_error('CP_Client', '<div class="alert alert-danger">', '</div>'); ?>

            <label for="Pays_Client">Pays :</label><br>
            <input class="inputcompte" @input="inputPaysCli" type="text" name="Pays_Client" id="Pays_Client" value="<?= $datauser->Pays_Client ?>">
            <span class="text-danger spanmess" v-show="spanverifPaysCli">{{messPaysCli}}</span><br>
            <?= form_error('Pays_Client', '<div class="alert alert-danger">', '</div>'); ?>

            <label for="NumTelFixe_Client">Téléphone fixe :</label><br>
            <input class="inputcompte" @blur="inputTelfixCli" type="text" name="NumTelFixe_Client" id="NumTelFixe_Client" value="<?= $datauser->NumTelFixe_Client ?>">
            <span class="text-danger spanmess" v-show="spanverifTelfixCli">{{messTelfixCli}}</span><br>
            <?= form_error('NumTelFixe_Client', '<div class="alert alert-danger">', '</div>'); ?>

            <label for="NumTelPort_Client">Téléphone portable :</label><br>
            <input class="inputcompte" @blur="inputTelportCli" type="text" name="NumTelPort_Client" id="NumTelPort_Client" value="<?= $datauser->NumTelPort_Client ?>">
            <span class="text-danger spanmess" v-show="spanverifTelportCli">{{messTelportCli}}</span><br>
            <?= form_error('NumTelPort_Client', '<div class="alert alert-danger">', '</div>'); ?>

            <div>
                <input class="btn btn-secondary" @click="clickbtnmodifcli" type="submit" value="Modifier">
            </div>
        </form>
    </div>
</div>