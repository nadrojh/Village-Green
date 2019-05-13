<title>Inscription</title>
<div class="divtitleinsc">
    <h2>Créez vos identifiants</h2>
</div><br>
<div id="divinscript">
    <?= form_open(''); ?>
        <div class="divflex">
            <div class="divlabel paddinglabel">
                <label for="mail">E-mail :</label>
            </div>
            <div>
                <input @blur="inputmail" class="inputinsc" id="mail" name="Mail_Client" value="<?= set_value('Mail_Client') ?>" type="email">
                <span class="text-danger spanmess" v-show="divverifmail">{{messmail}}</span>
            </div>
        </div>
        <div class="divflex">
            <div class="divflex">
                <div class="divlabel">
                    <label for="mdp">Créez votre mot de passe :</label>
                </div>
                <div>
                    <input @blur="inputmdp" class="inputinsc" id="mdp" name="Password_Client" type="password"><br>
                    <span id="spanmdp" class="text-danger spanmess" v-show="divverifmdp">{{messmdp}}</span>
                </div>
            </div>
            <div class="divflex">
                <div class="divdroit">
                    <label for="confirmdp">Confirmation mot de passe :</label>
                </div>
                <div>
                    <input @blur="inputconfirmdp" class="inputinsc" id="confirmdp" name="confirmdp" type="password"><br>
                    <span class="text-danger spanmess" v-show="divverifconfirmdp">{{messconfirmdp}}</span>
                </div>
            </div>
        </div><br>
        <div class="divtitleinsc"><h2>Créez vos identifiants</h2></div><br>
        <div class="divflex">
            <div>
                <div class="divflex">
                    <div class="divlabel paddinglabel">
                        <label for="prenom">Prénom :</label>
                    </div>
                    <div>
                        <input @input="inputprenom" class="inputinsc" id="prenom" name="Prenom_Client" value="<?= set_value('Prenom_Client') ?>" type="text"><span class="text-danger spanmess absotail" v-show="divverifprenom">{{messprenom}}</span>
                    </div>
                </div>
                <div class="divflex">
                    <div class="divlabel paddinglabel">
                        <label for="nom">Nom :</label>
                    </div>
                    <div>
                        <input @input="inputnom" class="inputinsc" id="nom" name="Nom_Client" value="<?= set_value('Nom_Client') ?>" type="text"><span class="text-danger spanmess absotail" v-show="divverifnom">{{messnom}}</span>
                    </div>
                </div>
                <div class="divflex">
                    <div class="divlabel paddinglabel">
                        <label for="adresse">Adresse :</label>
                    </div>
                    <div>
                        <input @input="inputadresse" class="inputinsc" id="adresse" name="adresse" value="<?= set_value('adresse') ?>" type="text"><span class="text-danger spanmess absotail" v-show="divverifadresse">{{messadresse}}</span>
                    </div>
                </div>
                <div class="divflex">
                    <div class="divlabel">
                        <label for="comadresse">Complément d'adresse :</label>
                    </div>
                    <div>
                        <input @input="inputcompadresse" class="inputinsc" id="comadresse" name="comadresse" value="<?= set_value('comadresse') ?>" type="text"><span class="text-danger spanmess absotail" v-show="divverifcompadresse">{{messcompadresse}}</span>
                    </div>
                </div>
                <div class="divflex">
                    <div class="divlabel paddinglabel">
                        <label for="codepos">Code postal :</label>
                    </div>
                    <div>
                        <input @input="inputcp" class="inputinsc" id="codepos" name="CP_Client" value="<?= set_value('CP_Client') ?>" type="text"><span class="text-danger spanmess absotail" v-show="divverifcp">{{messcp}}</span>
                    </div>
                </div>
                <div class="divflex">
                    <div class="divlabel paddinglabel">
                        <label for="ville">Ville :</label>
                    </div>
                    <div>
                        <input @input="inputville" class="inputinsc" id="ville" name="Ville_Client" value="<?= set_value('Ville_Client') ?>" type="text"><span class="text-danger spanmess absotail" v-show="divverifville">{{messville}}</span>
                    </div>
                </div>
                <div class="divflex">
                    <div class="divlabel paddinglabel">
                        <label for="pays">Pays :</label>
                    </div>
                    <div>
                        <input @input="inputpays" class="inputinsc" id="pays" name="Pays_Client" value="<?= set_value('Pays_Client') ?>" type="text"><span class="text-danger spanmess absotail" v-show="divverifpays">{{messpays}}</span>
                    </div>
                </div>
            </div>
            <div class="divimgdroite">
                <input @blur="inputnumport" class="inputtel" id="numport" name="NumTelPort_Client" value="<?= set_value('NumTelPort_Client') ?>" type="text"><span id="spannumport" class="text-danger spanmess absotail" v-show="divverifnumport">{{messnumport}}</span>
                <input @blur="inputnumfixe" class="inputtel" id="numfixe" name="NumTelFixe_Client" value="<?= set_value('NumTelFixe_Client') ?>" type="text"><span id="spannumfixe" class="text-danger spanmess absotail" v-show="divverifnumfixe">{{messnumfixe}}</span>
                <img id="imgcadre" src="http://localhost/codei/assets/images/CADRE numero.png" alt="cadre numero">
            </div>
        </div><br>
        <div id="divsubmitform">
            <input id="submitform" @click="clickbtninc" type="submit" value="">
        </div>
    </form>
</div>
<br><br><br>
<div id="divimgbot">
    <img id="imgpictos" src="http://localhost/codei/assets/images/bas de page pictos.png" alt="pictos">
</div>
<br><br>
