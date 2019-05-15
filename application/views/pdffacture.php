<style type="text/css">
#pdffooter{
    color: #717375;
    font-size: 10px;
}
#imgpdf{
    width: 300px;
}
#tdimg{
    width: 460px;
}
#tdclientpdf{
    border: 1px black solid;
    padding: 20px;
    border-radius: 20px;
}
#tdadresspdf{
    border: 1px black solid;
    padding: 20px;
    border-radius: 20px;
}
#tableclient{
    margin: auto;
}
.border{
    border: 2px black solid;
    border-collapse: collapse;
    padding: 10px;
}
#tdlefttotal{
    border-right: 2px black solid;
}
#tablecommande{
    text-align: center;
    margin: auto;
}
#thdesignation{
    width: 200px;
}
#pagepdf{
    line-height: 18px;
}
strong{
    font-size: 16px;
}
</style>
<page id="pagepdf" backtop="20mm" backleft="10mm" backright="10mm" backbottom="30mm">
    <table>
        <tr>
            <td id="tdimg">
                <img id="imgpdf" src="http://localhost/codei/assets/images/VillageGreenFact.png" alt="Logo Village">
            </td>
            <td>
                Facture N° <?= $commande->Numero_Facture ?><br>
                (Commande N° <?= $commande->Numero_Commande ?> du <?= date("d-m-Y", strtotime($commande->Date_Commande)) ?>)<br>
                Date : <?= date("d-m-Y", strtotime($facture->Date_Facture)) ?>
            </td>
        </tr>
    </table>
    <br><br>
    <div>
    <table id="tableclient">
        <tr>
            <td id="tdclientpdf">
                Client : Référence N°<?= $client->Reference_Client . " " . $client->Nom_Client . " " . $client->Prenom_Client . " " . $client->Adresse_Client . " " . $client->CP_Client . " " . $client->Ville_Client . " " . $client->Pays_Client . "<br>Mail : " . $client->Mail_Client . "<br>Tel : " . $client->NumTelPort_Client?>
            </td>
        </tr>
        <tr>
            <td id="tdadresspdf">
                Adresse de facturation : <?= $commande->NumeroAdrFac_Commande . " " . $commande->AdresseFac_Commande . " " . $commande->CPFac_Commande . " " . $commande->VilleFac_Commande?>
            </td>
        </tr>
    </table>
    </div>
    <br><br><br>
    <strong>Description de la commande:</strong> <br><br>
    <table class="border" id="tablecommande">
        <tr class="border">
            <th class="border">
                REF.
            </th>
            <th class="border" id="thdesignation">
                DESIGNATION
            </th>
            <th class="border">
                PRIX UNITAIRE
            </th>
            <th class="border">
                QUANTITE
            </th>
            <th class="border">
                TOTAL
            </th>
        </tr>
        <?php $total = 0;
        foreach($detailproduits as $row): ?>
            <tr class="border">
                <td class="border">
                    <?= $row->Reference_Produit ?>
                </td>
                <td class="border">
                    <?= $row->Nom_Produit ?>
                </td>
                <td class="border">
                    <?= $row->PrixVente_Commande ?> €
                </td>
                <td class="border">
                    <?= $row->Quantite_Commande ?>
                </td>
                <td class="border">
                    <?= $row->PrixVente_Commande*$row->Quantite_Commande ?> €
                    <?php $total += $row->PrixVente_Commande*$row->Quantite_Commande; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        <tr class="border">
            <td>
            </td>
            <td>
            </td>
            <td id="tdlefttotal">
            </td>
            <td class="border">
                TOTAL
            </td>
            <td class="border">
                <?= $total ?> €
            </td>
        </tr>
    </table>
    <page_footer id="pdffooter">
        <?php if($client->ModePaiement_Client == "Paiement à la commande"): ?>
            Paiement à la commande
        <?php else: ?>
            Solde payable sous 2 mois à réception de facture. <br>
            Pénalité de retard au taux annuel de 20%. <br>
            En cas de retard de paiement, application d'une indemnité forfaitaire pour frais de recouvrement de 40 euros (article D.441-5 du code du commerce). <br>
        <?php endif; ?>
        Village Green. <br>
        SA au capital de 5 002 090 €.
    </page_footer>
</page>