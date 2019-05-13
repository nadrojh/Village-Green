<title>Commande</title>
<div id="divcommande">
    <?= form_open(''); ?>

        <label for="Numero_Commande">Numéro de commande :</label><br>
        <input class="inputcommande" @input="inputNumComm" type="text" name="Numero_Commande" id="Numero_Commande" readonly value="<?= set_value('Numero_Commande',$commande->Numero_Commande); ?>">
        <span class="text-danger spanmess" v-show="spanverifNumComm">{{messNumComm}}</span><br>
        <?= form_error('Numero_Commande', '<div class="alert alert-danger">', '</div>'); ?>

        <label for="Date_Commande">Date de la commande :</label><br>
        <input class="inputcommande" @input="inputDateComm" type="date" name="Date_Commande" id="Date_Commande" value="<?= set_value('Date_Commande',$commande->Date_Commande); ?>">
        <span class="text-danger spanmess" v-show="spanverifDateComm">{{messDateComm}}</span><br>
        <?= form_error('Date_Commande', '<div class="alert alert-danger">', '</div>'); ?>

        <label for="PrixTot_Commande">Prix de la commande :</label><br>
        <input class="inputcommande" @input="inputPrix" type="text" name="PrixTot_Commande" id="PrixTot_Commande" value="<?= set_value('PrixTot_Commande',$commande->PrixTot_Commande); ?>">
        <span class="text-danger spanmess" v-show="spanverifPrix">{{messPrix}}</span><br>
        <?= form_error('PrixTot_Commande', '<div class="alert alert-danger">', '</div>'); ?>

        <label for="Etat_Commande">Etat de la commande :</label><br>
        <select class="inputcommande" @input="inputEtat" name="Etat_Commande" id="Etat_Commande">
            <?php if($commande->Etat_Commande == "En préparation"): ?>
                <option value="En préparation" selected>En préparation</option>
                <option value="Expédiée">Expédiée</option>
                <option value="Soldée">Soldée</option>
                <option value="Retard de paiement">Retard de paiement</option>
            <?php endif; ?>
            <?php if($commande->Etat_Commande == "Expédiée"): ?>
                <option value="Expédiée" selected>Expédiée</option>
                <option value="En préparation">En préparation</option>
                <option value="Soldée">Soldée</option>
                <option value="Retard de paiement">Retard de paiement</option>
            <?php endif; ?>
            <?php if($commande->Etat_Commande == "Soldée"): ?>
                <option value="Soldée" selected>Soldée</option>
                <option value="Expédiée">Expédiée</option>
                <option value="En préparation">En préparation</option>
                <option value="Retard de paiement">Retard de paiement</option>
            <?php endif; ?>
            <?php if($commande->Etat_Commande == "Retard de paiement"): ?>
                <option value="Retard de paiement" selected>Retard de paiement</option>
                <option value="Expédiée">Expédiée</option>
                <option value="En préparation">En préparation</option>
                <option value="Soldée">Soldée</option>
            <?php endif; ?>
        </select>
        <span class="text-danger spanmess" v-show="spanverifEtat">{{messEtat}}</span><br>
        <?= form_error('Etat_Commande', '<div class="alert alert-danger">', '</div>'); ?>

        <label for="NumeroAdrLiv_Commande">Adresse de livraison de la commande :</label><br>
        <input class="inputlivcommande" @input="inputNumAdreLiv" type="text" name="NumeroAdrLiv_Commande" id="NumeroAdrLiv_Commande" value="<?= set_value('NumeroAdrLiv_Commande',$commande->NumeroAdrLiv_Commande) ?>">
        <input class="inputlivcommande" @input="inputAdreLiv" type="text" name="AdresseLiv_Commande" id="AdresseLiv_Commande" value="<?= set_value('AdresseLiv_Commande',$commande->AdresseLiv_Commande) ?>">
        <input class="inputlivcommande" @input="inputCpAdreLiv" type="text" name="CPLiv_Commande" id="CPLiv_Commande" value="<?= set_value('CPLiv_Commande',$commande->CPLiv_Commande) ?>">
        <input class="inputlivcommande" @input="inputVilleLiv" type="text" name="VilleLiv_Commande" id="VilleLiv_Commande" value="<?= set_value('VilleLiv_Commande',$commande->VilleLiv_Commande) ?>">
        <span class="text-danger spanmess" v-show="spanverifNumAdreLiv">{{messNumAdreLiv}}</span>
        <span class="text-danger spanmess" v-show="spanverifAdreLiv">{{messAdreLiv}}</span>
        <span class="text-danger spanmess" v-show="spanverifCpAdreLiv">{{messCpAdreLiv}}</span>
        <span class="text-danger spanmess" v-show="spanverifVilleLiv">{{messVilleLiv}}</span><br>
        <?= form_error('NumeroAdrLiv_Commande', '<div class="alert alert-danger">', '</div>'); ?>
        <?= form_error('AdresseLiv_Commande', '<div class="alert alert-danger">', '</div>'); ?>
        <?= form_error('CPLiv_Commande', '<div class="alert alert-danger">', '</div>'); ?>
        <?= form_error('VilleLiv_Commande', '<div class="alert alert-danger">', '</div>'); ?>

        <label for="NumeroAdrFac_Commande">Adresse de facturation de la commande :</label><br>
        <input class="inputlivcommande" @input="inputNumAdreFac" type="text" name="NumeroAdrFac_Commande" id="NumeroAdrFac_Commande" value="<?= set_value('NumeroAdrFac_Commande',$commande->NumeroAdrFac_Commande) ?>">
        <input class="inputlivcommande" @input="inputAdreFac" type="text" name="AdresseFac_Commande" id="AdresseFac_Commande" value="<?= set_value('AdresseFac_Commande',$commande->AdresseFac_Commande) ?>">
        <input class="inputlivcommande" @input="inputCpAdreFac" type="text" name="CPFac_Commande" id="CPFac_Commande" value="<?= set_value('CPFac_Commande',$commande->CPFac_Commande) ?>">
        <input class="inputlivcommande" @input="inputVilleFac" type="text" name="VilleFac_Commande" id="VilleFac_Commande" value="<?= set_value('VilleFac_Commande',$commande->VilleFac_Commande) ?>">
        <span class="text-danger spanmess" v-show="spanverifNumAdreFac">{{messNumAdreFac}}</span>
        <span class="text-danger spanmess" v-show="spanverifAdreFac">{{messAdreFac}}</span>
        <span class="text-danger spanmess" v-show="spanverifCpAdreFac">{{messCpAdreFac}}</span>
        <span class="text-danger spanmess" v-show="spanverifVilleFac">{{messVilleFac}}</span><br>
        <?= form_error('NumeroAdrFac_Commande', '<div class="alert alert-danger">', '</div>'); ?>
        <?= form_error('AdresseFac_Commande', '<div class="alert alert-danger">', '</div>'); ?>
        <?= form_error('CPFac_Commande', '<div class="alert alert-danger">', '</div>'); ?>
        <?= form_error('VilleFac_Commande', '<div class="alert alert-danger">', '</div>'); ?>

        <label for="Reference_Client">Référence Client :</label><br>
        <input class="inputcommande" @input="inputRefCli" type="text" name="Reference_Client" id="Reference_Client" value="<?= set_value('Reference_Client',$commande->Reference_Client); ?>">
        <span class="text-danger spanmess" v-show="spanverifRefCli">{{messRefCli}}</span><br>
        <?= form_error('Reference_Client', '<div class="alert alert-danger">', '</div>'); ?>

        <label for="Numero_Facture">Numéro de facture :</label><br>
        <input class="inputcommande" @input="inputNumFac" type="text" name="Numero_Facture" id="Numero_Facture" value="<?= set_value('Numero_Facture',$commande->Numero_Facture); ?>">
        <span class="text-danger spanmess" v-show="spanverifNumFac">{{messNumFac}</span><br>
        <?= form_error('Numero_Facture', '<div class="alert alert-danger">', '</div>'); ?>

        <input class="btn btn-secondary" @click="clickbtncommande" type="submit" value="Modifier">
    </form>
</div>