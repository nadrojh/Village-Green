<title>Mon Compte</title>
<div id="divcompte" class="container">
    <div id="divdeco">
        <a class="btn btn-warning" href="<?= site_url('village/deconnexion') ?>">Déconnexion</a>
    </div>
    <div class="colorblue"><h1>Mon Compte</h1></div>
    <div>
        <?= $_SESSION['username']. " " . $_SESSION['userfname'];?><br>
        E-mail : <?= $datauser->Mail_Client ?><br>
        Adresse : <?= $datauser->Adresse_Client. " " .$datauser->CP_Client. " " .$datauser->Ville_Client?><br>
        Vous êtes inscrit depuis le : <?= date("d-m-Y", strtotime($datauser->DateInscript_Client)) ?><br><br>
        <a id="btnsupp" @click="clickbtnsuppcli" class="btn btn-danger">Supprimer le compte</a>
        <a id="btnmodifcli" class="btn btn-info" href="<?= site_url('village/modifcompte') ?>">Modifier</a>
    </div>
</div>