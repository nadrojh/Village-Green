/* ---------- Vue Header ---------- */
var menu = new Vue({
    el: '#divmenu',
    data: {
        divespcli: false,
        divguit: false,
        divbatte: false,
        divclav: false,
        divstud: false,
        divsono: false,
        diveclair: false,
        divdj: false,
        divcase: false,
        divacces: false,
        divverifmailconnex: false,
        messmailconnex: ""
    },
    methods: {
        switchdiv: function(div){
            switch(div){
                case 'clickespcli':{
                    if (this.divespcli == true){
                        this.divespcli = false;
                    }
                    else{
                        this.divespcli = true;
                        this.divguit = false;
                        this.divbatte = false;
                        this.divclav = false;
                        this.divstud = false;
                        this.divsono = false;
                        this.diveclair = false;
                        this.divdj = false;
                        this.divcase = false;
                        this.divacces = false;
                    }
                }
                break;
                case 'clickguit':{
                    if (this.divguit == true){
                        this.divguit = false;
                    }
                    else{
                        this.divguit = true;
                        this.divespcli = false;
                        this.divbatte = false;
                        this.divclav = false;
                        this.divstud = false;
                        this.divsono = false;
                        this.diveclair = false;
                        this.divdj = false;
                        this.divcase = false;
                        this.divacces = false;
                    }
                }
                break;
                case 'clickbatte':{
                    if (this.divbatte == true){
                        this.divbatte = false;
                    }
                    else{
                        this.divbatte = true;
                        this.divespcli = false;
                        this.divguit = false;
                        this.divclav = false;
                        this.divstud = false;
                        this.divsono = false;
                        this.diveclair = false;
                        this.divdj = false;
                        this.divcase = false;
                        this.divacces = false;
                    }
                }
                break;
                case 'clickclav':{
                    if (this.divclav == true){
                        this.divclav = false;
                    }
                    else{
                        this.divclav = true;
                        this.divespcli = false;
                        this.divguit = false;
                        this.divbatte = false;
                        this.divstud = false;
                        this.divsono = false;
                        this.diveclair = false;
                        this.divdj = false;
                        this.divcase = false;
                        this.divacces = false;
                    }
                }
                break;
                case 'clickstud':{
                    if (this.divstud == true){
                        this.divstud = false;
                    }
                    else{
                        this.divstud = true;
                        this.divespcli = false;
                        this.divguit = false;
                        this.divbatte = false;
                        this.divclav = false;
                        this.divsono = false;
                        this.diveclair = false;
                        this.divdj = false;
                        this.divcase = false;
                        this.divacces = false;
                    }
                }
                break;
                case 'clicksono':{
                    if (this.divsono == true){
                        this.divsono = false;
                    }
                    else{
                        this.divsono = true;
                        this.divespcli = false;
                        this.divguit = false;
                        this.divbatte = false;
                        this.divclav = false;
                        this.divstud = false;
                        this.diveclair = false;
                        this.divdj = false;
                        this.divcase = false;
                        this.divacces = false;
                    }
                }
                break;
                case 'clickeclair':{
                    if (this.diveclair == true){
                        this.diveclair = false;
                    }
                    else{
                        this.diveclair = true;
                        this.divespcli = false;
                        this.divguit = false;
                        this.divbatte = false;
                        this.divclav = false;
                        this.divstud = false;
                        this.divsono = false;
                        this.divdj = false;
                        this.divcase = false;
                        this.divacces = false;
                    }
                }
                break;
                case 'clickdj':{
                    if (this.divdj == true){
                        this.divdj = false;
                    }
                    else{
                        this.divdj = true;
                        this.divespcli = false;
                        this.divguit = false;
                        this.divbatte = false;
                        this.divclav = false;
                        this.divstud = false;
                        this.divsono = false;
                        this.diveclair = false;
                        this.divcase = false;
                        this.divacces = false;
                    }
                }
                break;
                case 'clickcase':{
                    if (this.divcase == true){
                        this.divcase = false;
                    }
                    else{
                        this.divcase = true;
                        this.divespcli = false;
                        this.divguit = false;
                        this.divbatte = false;
                        this.divclav = false;
                        this.divstud = false;
                        this.divsono = false;
                        this.diveclair = false;
                        this.divdj = false;
                        this.divacces = false;
                    }
                }
                break;
                case 'clickacces':{
                    if (this.divacces == true){
                        this.divacces = false;
                    }
                    else{
                        this.divacces = true;
                        this.divespcli = false;
                        this.divguit = false;
                        this.divbatte = false;
                        this.divclav = false;
                        this.divstud = false;
                        this.divsono = false;
                        this.diveclair = false;
                        this.divdj = false;
                        this.divcase = false;
                    }
                }
                break;
            }
        },
    }
});

/* ---------- Vue Inscription ---------- */
var errormail = true;
var errormdp = true;
var errorconfirmdp = true;
var errorprenom = true;
var errornom = true;
var erroradresse = true;
var errorcompadresse = true;
var errorcp = true;
var errorville = true;
var errorpays = true;
var errornumport = true;
var errornumfixe = true;

// Regexp pour une adresse mail
var regexMail = new RegExp(/^[^\W][a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)*\@[a-zA-Z0-9]+(\.[a-zA-Z0-9]+)*\.[a-zA-Z]{2,4}$/);
// Regexp pour mdp avec 8 caracteres dont 1 special, 1 chiffre, 1 majuscule et 1 minuscule
var regexPass = new RegExp(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/);
// accepte majuscule, minuscule, espace, _ , - , à et chiffre
var regexAlphanum = new RegExp(/^['àéèçë\sA-Za-z0-9_-]+$/);
// accepte majuscule, minuscule, espace
var regexAlpha = new RegExp(/^[àéèçë\sA-Za-z-]*$/);
// accepte majuscule, minuscule, espace
var regexNumtel = new RegExp(/^0\d(\s|-)?(\d{2}(\s|-)?){4}$/);

var verifinsc = new Vue({
    el: '#divinscript',
    data:{
        divverifmail: false,
        messmail: "",
        divverifmdp: false,
        messmdp: "",
        divverifconfirmdp: false,
        messconfirmdp: "",
        divverifprenom: false,
        messprenom: "",
        divverifnom: false,
        messnom: "",
        divverifadresse: false,
        messadresse: "",
        divverifcompadresse: false,
        messcompadresse: "",
        divverifcp: false,
        messcp: "",
        divverifville: false,
        messville: "",
        divverifpays: false,
        messpays: "",
        divverifnumport: false,
        messnumport: "",
        divverifnumfixe: false,
        messnumfixe: ""
    },
    methods:{
        inputmail: function(){
            if($('#mail').val() == ""){
                this.divverifmail = true;
                this.messmail = "Merci de renseigner ce champ.";
                errormail = true;
                $('#mail').css('border', 'solid 2px red');
            }else if(!regexMail.test($('#mail').val())){
                this.divverifmail = true;
                this.messmail = "Saisir une adresse mail valide.";
                errormail = true;
                $('#mail').css('border', 'solid 2px red');
            }else{
                this.divverifmail = false;
                errormail = false;
                $('#mail').css('border', 'none');
            }
        },
        inputmdp: function(){
            if($('#mdp').val() == ""){
                this.divverifmdp = true;
                this.messmdp = "Merci de renseigner ce champ.";
                errormdp = true;
                $('#mdp').css('border', 'solid 2px red');
            }else if(!regexPass.test($('#mdp').val())){
                this.divverifmdp = true;
                this.messmdp = "Doit contenir au minimun 8 caractères dont une majuscule, une minuscule, un chiffre et un caractère special.";
                errormdp = true;
                $('#mdp').css('border', 'solid 2px red');
            }else{
                this.divverifmdp = false;
                errormdp = false;
                $('#mdp').css('border', 'none');
            }
        },
        inputconfirmdp: function(){
            if($('#confirmdp').val() == ""){
                this.divverifconfirmdp = true;
                this.messconfirmdp = "Merci de renseigner ce champ.";
                errorconfirmdp = true;
                $('#confirmdp').css('border', 'solid 2px red');
            }else if($('#confirmdp').val() != $('#mdp').val()){
                this.divverifconfirmdp = true;
                this.messconfirmdp = "Mot de passe différent.";
                errorconfirmdp = true;
                $('#confirmdp').css('border', 'solid 2px red');
            }else{
                this.divverifconfirmdp = false;
                errorconfirmdp = false;
                $('#confirmdp').css('border', 'none');
            }
        },
        inputprenom: function(){
            if($('#prenom').val() == ""){
                this.divverifprenom = true;
                this.messprenom = "Merci de renseigner ce champ.";
                errorprenom = true;
                $('#prenom').css('border', 'solid 2px red');
            }else if(!regexAlphanum.test($('#prenom').val())){
                this.divverifprenom = true;
                this.messprenom = "Les caractères speciaux ne sont pas autorisés.";
                errorprenom = true;
                $('#prenom').css('border', 'solid 2px red');
            }else{
                this.divverifprenom = false;
                errorprenom = false;
                $('#prenom').css('border', 'none');
            }
        },
        inputnom: function(){
            if($('#nom').val() == ""){
                this.divverifnom = true;
                this.messnom = "Merci de renseigner ce champ.";
                errornom = true;
                $('#nom').css('border', 'solid 2px red');
            }else if(!regexAlphanum.test($('#nom').val())){
                this.divverifnom = true;
                this.messnom = "Les caractères speciaux ne sont pas autorisés.";
                errornom = true;
                $('#nom').css('border', 'solid 2px red');
            }else{
                this.divverifnom = false;
                errornom = false;
                $('#nom').css('border', 'none');
            }
        },
        inputadresse: function(){
            if($('#adresse').val() == ""){
                this.divverifadresse = true;
                this.messadresse = "Merci de renseigner ce champ.";
                erroradresse = true;
                $('#adresse').css('border', 'solid 2px red');
            }else if(!regexAlphanum.test($('#adresse').val())){
                this.divverifadresse = true;
                this.messadresse = "Les caractères speciaux ne sont pas autorisés.";
                erroradresse = true;
                $('#adresse').css('border', 'solid 2px red');
            }else{
                this.divverifadresse = false;
                erroradresse = false;
                $('#adresse').css('border', 'none');
            }
        },
        inputcompadresse: function(){
            if($('#comadresse').val() == ""){
                this.divverifcompadresse = false;
                errorcompadresse = false;
                $('#comadresse').css('border', 'none');
            }else if(!regexAlphanum.test($('#comadresse').val())){
                this.divverifcompadresse = true;
                this.messcompadresse = "Les caractères speciaux ne sont pas autorisés.";
                errorcompadresse = true;
                $('#comadresse').css('border', 'solid 2px red');
            }else{
                this.divverifcompadresse = false;
                errorcompadresse = false;
                $('#comadresse').css('border', 'none');
            }
        },
        inputcp: function(){
            if($('#codepos').val() == ""){
                this.divverifcp = true;
                this.messcp = "Merci de renseigner ce champ.";
                errorcp = true;
                $('#codepos').css('border', 'solid 2px red');
            }else if(!regexAlphanum.test($('#codepos').val())){
                this.divverifcp = true;
                this.messcp = "Les caractères speciaux ne sont pas autorisés.";
                errorcp = true;
                $('#codepos').css('border', 'solid 2px red');
            }else{
                this.divverifcp = false;
                errorcp = false;
                $('#codepos').css('border', 'none');
            }
        },
        inputville: function(){
            if($('#ville').val() == ""){
                this.divverifville = true;
                this.messville = "Merci de renseigner ce champ.";
                errorville = true;
                $('#ville').css('border', 'solid 2px red');
            }else if(!regexAlpha.test($('#ville').val())){
                this.divverifville = true;
                this.messville = "Les caractères speciaux ne sont pas autorisés.";
                errorville = true;
                $('#ville').css('border', 'solid 2px red');
            }else{
                this.divverifville = false;
                errorville = false;
                $('#ville').css('border', 'none');
            }
        },
        inputpays: function(){
            if($('#pays').val() == ""){
                this.divverifpays = true;
                this.messpays = "Merci de renseigner ce champ.";
                errorpays = true;
                $('#pays').css('border', 'solid 2px red');
            }else if(!regexAlpha.test($('#pays').val())){
                this.divverifpays = true;
                this.messpays = "Les caractères speciaux ne sont pas autorisés.";
                errorpays = true;
                $('#pays').css('border', 'solid 2px red');
            }else{
                this.divverifpays = false;
                errorpays = false;
                $('#pays').css('border', 'none');
            }
        },
        inputnumport: function(){
            if($('#numport').val() == ""){
                this.divverifnumport = true;
                this.messnumport = "Merci de renseigner ce champ.";
                errornumport = true;
                $('#numport').css('border', 'solid 2px red');
            }else if(!regexNumtel.test($('#numport').val())){
                this.divverifnumport = true;
                this.messnumport = "Saisir un numéro valide.";
                errornumport = true;
                $('#numport').css('border', 'solid 2px red');
            }else{
                this.divverifnumport = false;
                errornumport = false;
                $('#numport').css('border', 'none');
            }
        },
        inputnumfixe: function(){
            if($('#numfixe').val() == ""){
                this.divverifnumfixe = false;
                errornumfixe = false;
                $('#numfixe').css('border', 'none');
            }else if(!regexNumtel.test($('#numfixe').val())){
                this.divverifnumfixe = true;
                this.messnumfixe = "Saisir un numéro valide.";
                errornumfixe = true;
                $('#numfixe').css('border', 'solid 2px red');
            }else{
                this.divverifnumfixe = false;
                errornumfixe = false;
                $('#numfixe').css('border', 'none');
            }
        },
        clickbtninc: function(e){
            if($('#mail').val() == ""){
                this.divverifmail = true;
                this.messmail = "Merci de renseigner ce champ.";
                errormail = true;
                $('#mail').css('border', 'solid 2px red');
            }
            if($('#mdp').val() == ""){
                this.divverifmdp = true;
                this.messmdp = "Merci de renseigner ce champ.";
                errormdp = true;
                $('#mdp').css('border', 'solid 2px red');
            }
            if($('#confirmdp').val() == ""){
                this.divverifconfirmdp = true;
                this.messconfirmdp = "Merci de renseigner ce champ.";
                errorconfirmdp = true;
                $('#confirmdp').css('border', 'solid 2px red');
            }
            if($('#prenom').val() == ""){
                this.divverifprenom = true;
                this.messprenom = "Merci de renseigner ce champ.";
                errorprenom = true;
                $('#prenom').css('border', 'solid 2px red');
            }
            if($('#nom').val() == ""){
                this.divverifnom = true;
                this.messnom = "Merci de renseigner ce champ.";
                errornom = true;
                $('#nom').css('border', 'solid 2px red');
            }
            if($('#adresse').val() == ""){
                this.divverifadresse = true;
                this.messadresse = "Merci de renseigner ce champ.";
                erroradresse = true;
                $('#adresse').css('border', 'solid 2px red');
            }
            if($('#codepos').val() == ""){
                this.divverifcp = true;
                this.messcp = "Merci de renseigner ce champ.";
                errorcp = true;
                $('#codepos').css('border', 'solid 2px red');
            }
            if($('#ville').val() == ""){
                this.divverifville = true;
                this.messville = "Merci de renseigner ce champ.";
                errorville = true;
                $('#ville').css('border', 'solid 2px red');
            }
            if($('#pays').val() == ""){
                this.divverifpays = true;
                this.messpays = "Merci de renseigner ce champ.";
                errorpays = true;
                $('#pays').css('border', 'solid 2px red');
            }
            if($('#numport').val() == ""){
                this.divverifnumport = true;
                this.messnumport = "Merci de renseigner ce champ.";
                errornumport = true;
                $('#numport').css('border', 'solid 2px red');
            }
            if(errormail == true || errormdp == true || errorconfirmdp == true || errorprenom == true || errornom == true || erroradresse == true || errorcp == true || errorville == true || errorpays == true || errornumport == true){
                e.preventDefault();
            }
        }
    }
});

/* ---------- Vue Compte ---------- */
var verifcompte = new Vue({
    el: '#divcompte',
    data:{

    },
    methods:{
        clickbtnsuppcli: function(e){
            if(confirm("Confirmer la suppression!")){
                window.location.href = "http://localhost/codei/index.php/village/suppcompte";
            }else{
                e.preventDefault();
            }
        }
    }
});

/* ---------- Vue Modif Compte ---------- */
var errorprenom = false;
var errornom = false;
var erroradresse = false;
var errorcp = false;
var errorville = false;
var errorpays = false;
var errornumport = false;
var errornumfixe = false;

// accepte majuscule, minuscule, espace, _ , - , à et chiffre
var regexAlphanum = new RegExp(/^['àéèçë\sA-Za-z0-9_-]+$/);
// accepte majuscule, minuscule, espace
var regexAlpha = new RegExp(/^[àéèçë\sA-Za-z-]*$/);
// accepte majuscule, minuscule, espace
var regexNumtel = new RegExp(/^0\d(\s|-)?(\d{2}(\s|-)?){4}$/);

var verifmodifcompte = new Vue({
    el: '#divmodifcompte',
    data:{
        spanverifNomCli: false,
        messNomCli: "",
        spanverifPrenomCli: false,
        messPrenomCli: "",
        spanverifAdresseCli: false,
        messAdresseCli: "",
        spanverifVilleCli: false,
        messVilleCli: "",
        spanverifCpCli: false,
        messCpCli: "",
        spanverifPaysCli: false,
        messPaysCli: "",
        spanverifTelfixCli: false,
        messTelfixCli: "",
        spanverifTelportCli: false,
        messTelportCli: ""
    },
    methods:{
        inputNomCli: function(){
            if($('#Nom_Client').val() == ""){
                this.spanverifNomCli = true;
                this.messNomCli = "Merci de renseigner ce champ.";
                errornom = true;
                $('#Nom_Client').css('border', 'solid 2px red');
            }else if(!regexAlphanum.test($('#Nom_Client').val())){
                this.spanverifNomCli = true;
                this.messNomCli = "Saisir un nom valide.";
                errornom = true;
                $('#Nom_Client').css('border', 'solid 2px red');
            }else{
                this.spanverifNomCli = false;
                errornom = false;
                $('#Nom_Client').css('border', 'none');
            }
        },
        inputPrenomCli: function(){
            if($('#Prenom_Client').val() == ""){
                this.spanverifPrenomCli = true;
                this.messPrenomCli = "Merci de renseigner ce champ.";
                errorprenom = true;
                $('#Prenom_Client').css('border', 'solid 2px red');
            }else if(!regexAlphanum.test($('#Prenom_Client').val())){
                this.spanverifPrenomCli = true;
                this.messPrenomCli = "Saisir un prenom valide.";
                errorprenom = true;
                $('#Prenom_Client').css('border', 'solid 2px red');
            }else{
                this.spanverifPrenomCli = false;
                errorprenom = false;
                $('#Prenom_Client').css('border', 'none');
            }
        },
        inputAdresseCli: function(){
            if($('#Adresse_Client').val() == ""){
                this.spanverifAdresseCli = true;
                this.messAdresseCli = "Merci de renseigner ce champ.";
                erroradresse = true;
                $('#Adresse_Client').css('border', 'solid 2px red');
            }else if(!regexAlphanum.test($('#Adresse_Client').val())){
                this.spanverifAdresseCli = true;
                this.messAdresseCli = "Saisir une adresse valide.";
                erroradresse = true;
                $('#Adresse_Client').css('border', 'solid 2px red');
            }else{
                this.spanverifAdresseCli = false;
                erroradresse = false;
                $('#Adresse_Client').css('border', 'none');
            }
        },
        inputVilleCli: function(){
            if($('#Ville_Client').val() == ""){
                this.spanverifVilleCli = true;
                this.messVilleCli = "Merci de renseigner ce champ.";
                errorville = true;
                $('#Ville_Client').css('border', 'solid 2px red');
            }else if(!regexAlpha.test($('#Ville_Client').val())){
                this.spanverifVilleCli = true;
                this.messVilleCli = "Saisir une ville valide.";
                errorville = true;
                $('#Ville_Client').css('border', 'solid 2px red');
            }else{
                this.spanverifVilleCli = false;
                errorville = false;
                $('#Ville_Client').css('border', 'none');
            }
        },
        inputCpCli: function(){
            if($('#CP_Client').val() == ""){
                this.spanverifCpCli = true;
                this.messCpCli = "Merci de renseigner ce champ.";
                errorcp = true;
                $('#CP_Client').css('border', 'solid 2px red');
            }else if(!regexAlphanum.test($('#CP_Client').val())){
                this.spanverifCpCli = true;
                this.messCpCli = "Saisir un code postal valide.";
                errorcp = true;
                $('#CP_Client').css('border', 'solid 2px red');
            }else{
                this.spanverifCpCli = false;
                errorcp = false;
                $('#CP_Client').css('border', 'none');
            }
        },
        inputPaysCli: function(){
            if($('#Pays_Client').val() == ""){
                this.spanverifPaysCli = true;
                this.messPaysCli = "Merci de renseigner ce champ.";
                errorpays = true;
                $('#Pays_Client').css('border', 'solid 2px red');
            }else if(!regexAlpha.test($('#Pays_Client').val())){
                this.spanverifPaysCli = true;
                this.messPaysCli = "Saisir un pays valide.";
                errorpays = true;
                $('#Pays_Client').css('border', 'solid 2px red');
            }else{
                this.spanverifPaysCli = false;
                errorpays = false;
                $('#Pays_Client').css('border', 'none');
            }
        },
        inputTelfixCli: function(){
            if($('#NumTelFixe_Client').val() == ""){
                this.spanverifTelfixCli = false;
                errornumfixe = false;
                $('#NumTelFixe_Client').css('border', 'none');
            }else if(!regexNumtel.test($('#NumTelFixe_Client').val())){
                this.spanverifTelfixCli = true;
                this.messTelfixCli = "Saisir un numéro de téléphone valide.";
                errornumfixe = true;
                $('#NumTelFixe_Client').css('border', 'solid 2px red');
            }else{
                this.spanverifTelfixCli = false;
                errornumfixe = false;
                $('#NumTelFixe_Client').css('border', 'none');
            }
        },
        inputTelportCli: function(){
            if($('#NumTelPort_Client').val() == ""){
                this.spanverifTelportCli = true;
                this.messTelportCli = "Merci de renseigner ce champ.";
                errornumport = true;
                $('#NumTelPort_Client').css('border', 'solid 2px red');
            }else if(!regexNumtel.test($('#NumTelPort_Client').val())){
                this.spanverifTelportCli = true;
                this.messTelportCli = "Saisir un numéro de téléphone valide.";
                errornumport = true;
                $('#NumTelPort_Client').css('border', 'solid 2px red');
            }else{
                this.spanverifTelportCli = false;
                errornumport = false;
                $('#NumTelPort_Client').css('border', 'none');
            }
        },
        clickbtnmodifcli: function(e){
            if($('#Nom_Client').val() == ""){
                this.spanverifNomCli = true;
                this.messNomCli = "Merci de renseigner ce champ.";
                errornom = true;
                $('#Nom_Client').css('border', 'solid 2px red');
            }
            if($('#Prenom_Client').val() == ""){
                this.spanverifPrenomCli = true;
                this.messPrenomCli = "Merci de renseigner ce champ.";
                errorprenom = true;
                $('#Prenom_Client').css('border', 'solid 2px red');
            }
            if($('#Adresse_Client').val() == ""){
                this.spanverifAdresseCli = true;
                this.messAdresseCli = "Merci de renseigner ce champ.";
                erroradresse = true;
                $('#Adresse_Client').css('border', 'solid 2px red');
            }
            if($('#Ville_Client').val() == ""){
                this.spanverifVilleCli = true;
                this.messVilleCli = "Merci de renseigner ce champ.";
                errorville = true;
                $('#Ville_Client').css('border', 'solid 2px red');
            }
            if($('#CP_Client').val() == ""){
                this.spanverifCpCli = true;
                this.messCpCli = "Merci de renseigner ce champ.";
                errorcp = true;
                $('#CP_Client').css('border', 'solid 2px red');
            }
            if($('#Pays_Client').val() == ""){
                this.spanverifPaysCli = true;
                this.messPaysCli = "Merci de renseigner ce champ.";
                errorpays = true;
                $('#Pays_Client').css('border', 'solid 2px red');
            }
            if($('#NumTelPort_Client').val() == ""){
                this.spanverifTelportCli = true;
                this.messTelportCli = "Merci de renseigner ce champ.";
                errornumport = true;
                $('#NumTelPort_Client').css('border', 'solid 2px red');
            }
            if(errornom == true || errorprenom == true || erroradresse == true || errorville == true || errorcp == true || errorpays == true || errornumfixe == true || errornumport == true){
                e.preventDefault();
            }
        }
    }
});

/* ---------- Vue Modif Produit ---------- */
var errorid = false;
var errornom = false;
var errordesc = false;
var errorref = false;
var errorprix = false;
var errorquant = false;
var errorsousR = false;

// Regexp pour un nom produit
var regexnom = new RegExp(/^[\sA-Za-z0-9]+$/);
// Regexp pour une description produit
var regexdesc = new RegExp(/^[A-Za-z0-9\s\.,\'\’_\-+&"@%!:;?*\/\\àéèâëêç€ùô]+$/);
// Regexp pour une reference produit
var regexref = new RegExp(/^[A-Za-z0-9]+$/);
// Regexp pour une prix produit
var regexprix = new RegExp(/^[0-9]+[\.\,]+[0-9]{1,2}$/);
// Regexp pour une quantite produit
var regexnum = new RegExp(/^[0-9]+$/);
// refuse < > { } 
var regexCarac = new RegExp(/[<>{}]+/);

var verifmodif = new Vue({
    el: '#divmodif',
    data:{
        spanverifid: false,
        messid: "",
        spanverifnom: false,
        messnom: "",
        spanverifdesc: false,
        messdesc: "",
        spanverifref: false,
        messref: "",
        spanverifprix: false,
        messprix: "",
        spanverifquant: false,
        messquant: "",
        spanverifsousR: false,
        messsousR: ""
    },
    methods:{
        inputid: function(){
            if($('#ID_Produit').val() == ""){
                this.spanverifid = true;
                this.messid = "Merci de renseigner ce champ.";
                errorid = true;
                $('#ID_Produit').css('border', 'solid 2px red');
            }else if(!regexnum.test($('#ID_Produit').val())){
                this.spanverifid = true;
                this.messid = "Saisir un nom valide.";
                errorid = true;
                $('#ID_Produit').css('border', 'solid 2px red');
            }else{
                this.spanverifid = false;
                errorid = false;
                $('#ID_Produit').css('border', 'none');
            }
        },
        inputnom: function(){
            if($('#Nom_Produit').val() == ""){
                this.spanverifnom = true;
                this.messnom = "Merci de renseigner ce champ.";
                errornom = true;
                $('#Nom_Produit').css('border', 'solid 2px red');
            }else if(!regexnom.test($('#Nom_Produit').val())){
                this.spanverifnom = true;
                this.messnom = "Saisir un nom valide.";
                errornom = true;
                $('#Nom_Produit').css('border', 'solid 2px red');
            }else{
                this.spanverifnom = false;
                errornom = false;
                $('#Nom_Produit').css('border', 'none');
            }
        },
        inputdesc: function(){
            if($('#Description_Produit').val() == ""){
                this.spanverifdesc = true;
                this.messdesc = "Merci de renseigner ce champ.";
                errordesc = true;
                $('#Description_Produit').css('border', 'solid 2px red');
            }else if(regexCarac.test($('#Description_Produit').val())){
                this.spanverifdesc = true;
                this.messdesc = "Saisir une description valide.";
                errordesc = true;
                $('#Description_Produit').css('border', 'solid 2px red');
            }else{
                this.spanverifdesc = false;
                errordesc = false;
                $('#Description_Produit').css('border', 'none');
            }
        },
        inputref: function(){
            if($('#Reference_Produit').val() == ""){
                this.spanverifref = true;
                this.messref = "Merci de renseigner ce champ.";
                errorref = true;
                $('#Reference_Produit').css('border', 'solid 2px red');
            }else if(!regexref.test($('#Reference_Produit').val())){
                this.spanverifref = true;
                this.messref = "Saisir une référence valide.";
                errorref = true;
                $('#Reference_Produit').css('border', 'solid 2px red');
            }else{
                this.spanverifref = false;
                errorref = false;
                $('#Reference_Produit').css('border', 'none');
            }
        },
        inputprix: function(){
            if($('#PrixAchat_Produit').val() == ""){
                this.spanverifprix = true;
                this.messprix = "Merci de renseigner ce champ.";
                errorprix = true;
                $('#PrixAchat_Produit').css('border', 'solid 2px red');
            }else if(!regexprix.test($('#PrixAchat_Produit').val())){
                this.spanverifprix = true;
                this.messprix = "Saisir un prix valide.";
                errorprix = true;
                $('#PrixAchat_Produit').css('border', 'solid 2px red');
            }else{
                this.spanverifprix = false;
                errorprix = false;
                $('#PrixAchat_Produit').css('border', 'none');
            }
        },
        inputquant: function(){
            if($('#Quantite_Produit').val() == ""){
                this.spanverifquant = true;
                this.messquant = "Merci de renseigner ce champ.";
                errorquant = true;
                $('#Quantite_Produit').css('border', 'solid 2px red');
            }else if(!regexnum.test($('#Quantite_Produit').val())){
                this.spanverifquant = true;
                this.messquant = "Saisir une quantitée valide.";
                errorquant = true;
                $('#Quantite_Produit').css('border', 'solid 2px red');
            }else{
                this.spanverifquant = false;
                errorquant = false;
                $('#Quantite_Produit').css('border', 'none');
            }
        },
        inputsousR: function(){
            if($('#ID_SousRubrique').val() == ""){
                this.spanverifsousR = true;
                this.messsousR = "Merci de renseigner ce champ.";
                errorsousR = true;
                $('#ID_SousRubrique').css('border', 'solid 2px red');
            }else if(!regexnum.test($('#ID_SousRubrique').val())){
                this.spanverifsousR = true;
                this.messsousR = "Saisir une sous-rubrique valide.";
                errorsousR = true;
                $('#ID_SousRubrique').css('border', 'solid 2px red');
            }else{
                this.spanverifsousR = false;
                errorsousR = false;
                $('#ID_SousRubrique').css('border', 'none');
            }
        },
        clickbtnmodif: function(e){
            if($('#Nom_Produit').val() == ""){
                this.spanverifnom = true;
                this.messnom = "Merci de renseigner ce champ.";
                errornom = true;
            }
            if($('#Description_Produit').val() == ""){
                this.spanverifdesc = true;
                this.messdesc = "Merci de renseigner ce champ.";
                errordesc = true;
            }
            if($('#Reference_Produit').val() == ""){
                this.spanverifref = true;
                this.messref = "Merci de renseigner ce champ.";
                errorref = true;
            }
            if($('#PrixAchat_Produit').val() == ""){
                this.spanverifprix = true;
                this.messprix = "Merci de renseigner ce champ.";
                errorprix = true;
            }
            if($('#Quantite_Produit').val() == ""){
                this.spanverifquant = true;
                this.messquant = "Merci de renseigner ce champ.";
                errorquant = true;
            }
            if($('#ID_SousRubrique').val() == ""){
                this.spanverifsousR = true;
                this.messsousR = "Merci de renseigner ce champ.";
                errorsousR = true;
            }
            if(errornom == true || errordesc == true || errorref == true || errorprix == true || errorquant == true || errorsousR == true){
                e.preventDefault();
            }
        },
        clickbtnsupp: function(e){
            if(confirm("Confirmer la suppression!")){
                window.location.href = "http://localhost/codei/index.php/village/supproduit";
            }else{
                e.preventDefault();
            }
        }
    }
});

/* ---------- Vue Add Produit ---------- */
var errornom = false;
var errordesc = false;
var errorref = false;
var errorprix = false;
var errorquant = false;
var errorRub = false;
var errorSousRub = false;

// Regexp pour un nom produit
var regexnom = new RegExp(/^[\sA-Za-z0-9]+$/);
// Regexp pour une description produit
var regexdesc = new RegExp(/^[A-Za-z0-9\s\.,\'\’_\-+&"@%!:;?*\/\\àéèâëêç€ùô]+$/);
// Regexp pour une reference produit
var regexref = new RegExp(/^[A-Za-z0-9]+$/);
// Regexp pour une prix produit
var regexprix = new RegExp(/^[0-9]+[\.\,]+[0-9]{1,2}$/);
// Regexp pour une quantite produit
var regexnum = new RegExp(/^[0-9]+$/);
// refuse < > { } 
var regexCarac = new RegExp(/[<>{}]+/);

var verifaddproduit = new Vue({
    el: '#divaddproduit',
    data:{
        spanverifnom: false,
        messnom: "",
        spanverifdesc: false,
        messdesc: "",
        spanverifref: false,
        messref: "",
        spanverifprix: false,
        messprix: "",
        spanverifquant: false,
        messquant: "",
        spanverifRub: false,
        messRub: "",
        spanverifsousR: false,
        messsousR: "",
        selectSousRub: false
    },
    methods:{
        inputnom: function(){
            if($('#Nom_Produit').val() == ""){
                this.spanverifnom = true;
                this.messnom = "Merci de renseigner ce champ.";
                errornom = true;
                $('#Nom_Produit').css('border', 'solid 2px red');
            }else if(!regexnom.test($('#Nom_Produit').val())){
                this.spanverifnom = true;
                this.messnom = "Saisir un nom valide.";
                errornom = true;
                $('#Nom_Produit').css('border', 'solid 2px red');
            }else{
                this.spanverifnom = false;
                errornom = false;
                $('#Nom_Produit').css('border', 'none');
            }
        },
        inputdesc: function(){
            if($('#Description_Produit').val() == ""){
                this.spanverifdesc = true;
                this.messdesc = "Merci de renseigner ce champ.";
                errordesc = true;
                $('#Description_Produit').css('border', 'solid 2px red');
            }else if(regexCarac.test($('#Description_Produit').val())){
                this.spanverifdesc = true;
                this.messdesc = "Saisir une description valide.";
                errordesc = true;
                $('#Description_Produit').css('border', 'solid 2px red');
            }else{
                this.spanverifdesc = false;
                errordesc = false;
                $('#Description_Produit').css('border', 'none');
            }
        },
        inputref: function(){
            if($('#Reference_Produit').val() == ""){
                this.spanverifref = true;
                this.messref = "Merci de renseigner ce champ.";
                errorref = true;
                $('#Reference_Produit').css('border', 'solid 2px red');
            }else if(!regexref.test($('#Reference_Produit').val())){
                this.spanverifref = true;
                this.messref = "Saisir une référence valide.";
                errorref = true;
                $('#Reference_Produit').css('border', 'solid 2px red');
            }else{
                this.spanverifref = false;
                errorref = false;
                $('#Reference_Produit').css('border', 'none');
            }
        },
        inputprix: function(){
            if($('#PrixAchat_Produit').val() == ""){
                this.spanverifprix = true;
                this.messprix = "Merci de renseigner ce champ.";
                errorprix = true;
                $('#PrixAchat_Produit').css('border', 'solid 2px red');
            }else if(!regexprix.test($('#PrixAchat_Produit').val())){
                this.spanverifprix = true;
                this.messprix = "Saisir un prix valide.";
                errorprix = true;
                $('#PrixAchat_Produit').css('border', 'solid 2px red');
            }else{
                this.spanverifprix = false;
                errorprix = false;
                $('#PrixAchat_Produit').css('border', 'none');
            }
        },
        inputquant: function(){
            if($('#Quantite_Produit').val() == ""){
                this.spanverifquant = true;
                this.messquant = "Merci de renseigner ce champ.";
                errorquant = true;
                $('#Quantite_Produit').css('border', 'solid 2px red');
            }else if(!regexnum.test($('#Quantite_Produit').val())){
                this.spanverifquant = true;
                this.messquant = "Saisir une quantitée valide.";
                errorquant = true;
                $('#Quantite_Produit').css('border', 'solid 2px red');
            }else{
                this.spanverifquant = false;
                errorquant = false;
                $('#Quantite_Produit').css('border', 'none');
            }
        },
        inputRub: function(){
            if($('#ID_Rubrique').val() == ""){
                this.spanverifRub = true;
                this.selectSousRub = false;
                this.messRub = "Merci de renseigner ce champ.";
                errorRub = true;
                $('#ID_Rubrique').css('border', 'solid 2px red');
            }else if(!regexnum.test($('#ID_Rubrique').val())){
                this.spanverifRub = true;
                this.messRub = "Saisir une rubrique valide.";
                errorRub = true;
                $('#ID_Rubrique').css('border', 'solid 2px red');
            }else{
                this.spanverifRub = false;
                errorRub = false;
                $('#ID_Rubrique').css('border', 'none');
            }
        },
        inputSousRub: function(){
            if($('#ID_SousRubrique').val() == ""){
                this.spanverifsousR = true;
                this.messsousR = "Merci de renseigner ce champ.";
                errorSousRub = true;
                $('#ID_SousRubrique').css('border', 'solid 2px red');
            }else if(!regexnum.test($('#ID_SousRubrique').val())){
                this.spanverifsousR = true;
                this.messsousR = "Saisir une sous-rubrique valide.";
                errorSousRub = true;
                $('#ID_SousRubrique').css('border', 'solid 2px red');
            }else{
                this.spanverifsousR = false;
                errorSousRub = false;
                $('#ID_SousRubrique').css('border', 'none');
            }
        },
        clickbtnaddproduit: function(e){
            if($('#Nom_Produit').val() == ""){
                this.spanverifnom = true;
                this.messnom = "Merci de renseigner ce champ.";
                errornom = true;
            }
            if($('#Description_Produit').val() == ""){
                this.spanverifdesc = true;
                this.messdesc = "Merci de renseigner ce champ.";
                errordesc = true;
            }
            if($('#Reference_Produit').val() == ""){
                this.spanverifref = true;
                this.messref = "Merci de renseigner ce champ.";
                errorref = true;
            }
            if($('#PrixAchat_Produit').val() == ""){
                this.spanverifprix = true;
                this.messprix = "Merci de renseigner ce champ.";
                errorprix = true;
            }
            if($('#Quantite_Produit').val() == ""){
                this.spanverifquant = true;
                this.messquant = "Merci de renseigner ce champ.";
                errorquant = true;
            }
            if($('#ID_Rubrique').val() == ""){
                this.spanverifsousR = true;
                this.messsousR = "Merci de renseigner ce champ.";
                errorsousR = true;
            }
            if(errornom == true || errordesc == true || errorref == true || errorprix == true || errorquant == true || errorsousR == true){
                e.preventDefault();
            }
        },
        changeRub: function(){

            this.selectSousRub = true;
            if($('#ID_Rubrique').val() == ""){
                this.selectSousRub = false;
            }
            var idrub = $('#ID_Rubrique').val();
            console.log(idrub);

            var element = document.getElementById("ID_SousRubrique");

            // supprime les elements existant dans le select
            while (element.firstChild){
                element.removeChild(element.firstChild);
            }

            // requete AJAX
            axios.get("http://localhost/codei/index.php/village/affisousR", {params: {id: idrub}}).then(function(data){

                $("#ID_SousRubrique").append("<option value="+""+">Selectionnez une sous-rubrique</option>");
                
                // parcour les donnees recu en ajax et l'insere dans le select
                data.data.forEach(element => {
                    
                    $("#ID_SousRubrique").append("<option value="+element.ID_SousRubrique+">"+element.Nom_SousRubrique+"</option>");
                });
            });
        }
    }
});

/* ---------- Vue Commande ---------- */
var errorNumComm = false;
var errorDateComm = false;
var errorPrix = false;
var errorEtat = false;
var errorNumAdreLiv = false;
var errorAdreLiv = false;
var errorCpAdreLiv = false;
var errorVilleLiv = false;
var errorNumAdreFac = false;
var errorAdreFac = false;
var errorCpAdreFac = false;
var errorVilleFac = false;
var errorRefCli = false;
var errorNumFac = false;

// Regexp pour un nombre
var regexnum = new RegExp(/^[0-9]+$/);
// Regexp pour un prix
var regexprix = new RegExp(/^[0-9]+[\.\,]+[0-9]{1,2}$/);
// Regexp pour du texte
var regextext = new RegExp(/^[A-Za-z0-9\s\.,\'\’_\-+&"@%!:;?*\/\\àéèâëêç€ùô]+$/);
// accepte majuscule, minuscule, espace, _ , - , à et chiffre
var regexAlphanum = new RegExp(/^['àéèçë\sA-Za-z0-9_-]+$/);

var verifcommande = new Vue({
    el: '#divcommande',
    data:{
        spanverifNumComm: false,
        messNumComm: "",
        spanverifDateComm: false,
        messDateComm: "",
        spanverifPrix: false,
        messPrix: "",
        spanverifEtat: false,
        messEtat: "",
        spanverifNumAdreLiv: false,
        messNumAdreLiv: "",
        spanverifAdreLiv: false,
        messAdreLiv: "",
        spanverifCpAdreLiv: false,
        messCpAdreLiv: "",
        spanverifVilleLiv: false,
        messVilleLiv: "",
        spanverifNumAdreFac: false,
        messNumAdreFac: "",
        spanverifAdreFac: false,
        messAdreFac: "",
        spanverifCpAdreFac: false,
        messCpAdreFac: "",
        spanverifVilleFac: false,
        messVilleFac: "",
        spanverifRefCli: false,
        messRefCli: "",
        spanverifNumFac: false,
        messNumFac: ""
    },
    methods:{
        inputNumComm: function(){
            if($('#Numero_Commande').val() == ""){
                this.spanverifNumComm = true;
                this.messNumComm = "Merci de renseigner ce champ.";
                errorNumComm = true;
                $('#Numero_Commande').css('border', 'solid 2px red');
            }else if(!regexnum.test($('#Numero_Commande').val())){
                this.spanverifNumComm = true;
                this.messNumComm = "Saisir un numéro de commande valide.";
                errorNumComm = true;
                $('#Numero_Commande').css('border', 'solid 2px red');
            }else{
                this.spanverifNumComm = false;
                errorNumComm = false;
                $('#Numero_Commande').css('border', 'none');
            }
        },
        inputDateComm: function(){
            if($('#Date_Commande').val() == ""){
                this.spanverifDateComm = true;
                this.messDateComm = "Merci de renseigner ce champ.";
                errorDateComm = true;
                $('#Date_Commande').css('border', 'solid 2px red');
            }else{
                this.spanverifDateComm = false;
                errorDateComm = false;
                $('#Date_Commande').css('border', 'none');
            }
        },
        inputPrix: function(){
            if($('#PrixTot_Commande').val() == ""){
                this.spanverifPrix = true;
                this.messPrix = "Merci de renseigner ce champ.";
                errorPrix = true;
                $('#PrixTot_Commande').css('border', 'solid 2px red');
            }else if(!regexprix.test($('#PrixTot_Commande').val())){
                this.spanverifPrix = true;
                this.messPrix = "Saisir un prix valide.";
                errorPrix = true;
                $('#PrixTot_Commande').css('border', 'solid 2px red');
            }else{
                this.spanverifPrix = false;
                errorPrix = false;
                $('#PrixTot_Commande').css('border', 'none');
            }
        },
        inputEtat: function(){
            if($('#Etat_Commande').val() == ""){
                this.spanverifEtat = true;
                this.messEtat = "Merci de renseigner ce champ.";
                errorEtat = true;
                $('#Etat_Commande').css('border', 'solid 2px red');
            }else{
                this.spanverifEtat = false;
                errorEtat = false;
                $('#Etat_Commande').css('border', 'none');
            }
        },
        inputNumAdreLiv: function(){
            if($('#NumeroAdrLiv_Commande').val() == ""){
                this.spanverifNumAdreLiv = true;
                this.messNumAdreLiv = "Merci de renseigner ce champ.";
                errorNumAdreLiv = true;
                $('#NumeroAdrLiv_Commande').css('border', 'solid 2px red');
            }else if(!regexAlphanum.test($('#NumeroAdrLiv_Commande').val())){
                this.spanverifNumAdreLiv = true;
                this.messNumAdreLiv = "Saisir un numéro valide.";
                errorNumAdreLiv = true;
                $('#NumeroAdrLiv_Commande').css('border', 'solid 2px red');
            }else{
                this.spanverifNumAdreLiv = false;
                errorNumAdreLiv = false;
                $('#NumeroAdrLiv_Commande').css('border', 'none');
            }
        },
        inputAdreLiv: function(){
            if($('#AdresseLiv_Commande').val() == ""){
                this.spanverifAdreLiv = true;
                this.messAdreLiv = "Merci de renseigner ce champ.";
                errorAdreLiv = true;
                $('#AdresseLiv_Commande').css('border', 'solid 2px red');
            }else if(!regextext.test($('#AdresseLiv_Commande').val())){
                this.spanverifAdreLiv = true;
                this.messAdreLiv = "Saisir une adresse valide.";
                errorAdreLiv = true;
                $('#AdresseLiv_Commande').css('border', 'solid 2px red');
            }else{
                this.spanverifAdreLiv = false;
                errorAdreLiv = false;
                $('#AdresseLiv_Commande').css('border', 'none');
            }
        },
        inputCpAdreLiv: function(){
            if($('#CPLiv_Commande').val() == ""){
                this.spanverifCpAdreLiv = true;
                this.messCpAdreLiv = "Merci de renseigner ce champ.";
                errorCpAdreLiv = true;
                $('#CPLiv_Commande').css('border', 'solid 2px red');
            }else if(!regexAlphanum.test($('#CPLiv_Commande').val())){
                this.spanverifCpAdreLiv = true;
                this.messCpAdreLiv = "Saisir un code postal valide.";
                errorCpAdreLiv = true;
                $('#CPLiv_Commande').css('border', 'solid 2px red');
            }else{
                this.spanverifCpAdreLiv = false;
                errorCpAdreLiv = false;
                $('#CPLiv_Commande').css('border', 'none');
            }
        },
        inputVilleLiv: function(){
            if($('#VilleLiv_Commande').val() == ""){
                this.spanverifVilleLiv = true;
                this.messVilleLiv = "Merci de renseigner ce champ.";
                errorVilleLiv = true;
                $('#VilleLiv_Commande').css('border', 'solid 2px red');
            }else if(!regextext.test($('#VilleLiv_Commande').val())){
                this.spanverifVilleLiv = true;
                this.messVilleLiv = "Saisir une ville valide.";
                errorVilleLiv = true;
                $('#VilleLiv_Commande').css('border', 'solid 2px red');
            }else{
                this.spanverifVilleLiv = false;
                errorVilleLiv = false;
                $('#VilleLiv_Commande').css('border', 'none');
            }
        },
        inputNumAdreFac: function(){
            if($('#NumeroAdrFac_Commande').val() == ""){
                this.spanverifNumAdreFac = true;
                this.messNumAdreFac = "Merci de renseigner ce champ.";
                errorNumAdreFac = true;
                $('#NumeroAdrFac_Commande').css('border', 'solid 2px red');
            }else if(!regexAlphanum.test($('#NumeroAdrFac_Commande').val())){
                this.spanverifNumAdreFac = true;
                this.messNumAdreFac = "Saisir un numéro valide.";
                errorNumAdreFac = true;
                $('#NumeroAdrFac_Commande').css('border', 'solid 2px red');
            }else{
                this.spanverifNumAdreFac = false;
                errorNumAdreFac = false;
                $('#NumeroAdrFac_Commande').css('border', 'none');
            }
        },
        inputAdreFac: function(){
            if($('#AdresseFac_Commande').val() == ""){
                this.spanverifAdreFac = true;
                this.messAdreFac = "Merci de renseigner ce champ.";
                errorAdreFac = true;
                $('#AdresseFac_Commande').css('border', 'solid 2px red');
            }else if(!regextext.test($('#AdresseFac_Commande').val())){
                this.spanverifAdreFac = true;
                this.messAdreFac = "Saisir une adresse valide.";
                errorAdreFac = true;
                $('#AdresseFac_Commande').css('border', 'solid 2px red');
            }else{
                this.spanverifAdreFac = false;
                errorAdreFac = false;
                $('#AdresseFac_Commande').css('border', 'none');
            }
        },
        inputCpAdreFac: function(){
            if($('#CPFac_Commande').val() == ""){
                this.spanverifCpAdreFac = true;
                this.messCpAdreFac = "Merci de renseigner ce champ.";
                errorCpAdreFac = true;
                $('#CPFac_Commande').css('border', 'solid 2px red');
            }else if(!regexAlphanum.test($('#CPFac_Commande').val())){
                this.spanverifCpAdreFac = true;
                this.messCpAdreFac = "Saisir un code postal valide.";
                errorCpAdreFac = true;
                $('#CPFac_Commande').css('border', 'solid 2px red');
            }else{
                this.spanverifCpAdreFac = false;
                errorCpAdreFac = false;
                $('#CPFac_Commande').css('border', 'none');
            }
        },
        inputVilleFac: function(){
            if($('#VilleFac_Commande').val() == ""){
                this.spanverifVilleFac = true;
                this.messVilleFac = "Merci de renseigner ce champ.";
                errorVilleFac = true;
                $('#VilleFac_Commande').css('border', 'solid 2px red');
            }else if(!regextext.test($('#VilleFac_Commande').val())){
                this.spanverifVilleFac = true;
                this.messVilleFac = "Saisir une ville valide.";
                errorVilleFac = true;
                $('#VilleFac_Commande').css('border', 'solid 2px red');
            }else{
                this.spanverifVilleFac = false;
                errorVilleFac = false;
                $('#VilleFac_Commande').css('border', 'none');
            }
        },
        inputRefCli: function(){
            if($('#Reference_Client').val() == ""){
                this.spanverifRefCli = true;
                this.messRefCli = "Merci de renseigner ce champ.";
                errorRefCli = true;
                $('#Reference_Client').css('border', 'solid 2px red');
            }else if(!regexnum.test($('#Reference_Client').val())){
                this.spanverifRefCli = true;
                this.messRefCli = "Saisir une réference client valide.";
                errorRefCli = true;
                $('#Reference_Client').css('border', 'solid 2px red');
            }else{
                this.spanverifRefCli = false;
                errorRefCli = false;
                $('#Reference_Client').css('border', 'none');
            }
        },
        inputNumFac: function(){
            if($('#Numero_Facture').val() == ""){
                this.spanverifNumFac = true;
                this.messNumFac = "Merci de renseigner ce champ.";
                errorNumFac = true;
                $('#Numero_Facture').css('border', 'solid 2px red');
            }else if(!regexnum.test($('#Numero_Facture').val())){
                this.spanverifNumFac = true;
                this.messNumFac = "Saisir un numéro de facture valide.";
                errorNumFac = true;
                $('#Numero_Facture').css('border', 'solid 2px red');
            }else{
                this.spanverifNumFac = false;
                errorNumFac = false;
                $('#Numero_Facture').css('border', 'none');
            }
        },
        clickbtncommande: function(e){
            if($('#Numero_Commande').val() == ""){
                this.spanverifNumComm = true;
                this.messNumComm = "Merci de renseigner ce champ.";
                errorNumComm = true;
            }
            if($('#Date_Commande').val() == ""){
                this.spanverifDateComm = true;
                this.messDateComm = "Merci de renseigner ce champ.";
                errorDateComm = true;
            }
            if($('#PrixTot_Commande').val() == ""){
                this.spanverifPrix = true;
                this.messPrix = "Merci de renseigner ce champ.";
                errorPrix = true;
            }
            if($('#Etat_Commande').val() == ""){
                this.spanverifEtat = true;
                this.messEtat = "Merci de renseigner ce champ.";
                errorEtat = true;
            }
            if($('#NumeroAdrLiv_Commande').val() == ""){
                this.spanverifNumAdreLiv = true;
                this.messNumAdreLiv = "Merci de renseigner ce champ.";
                errorNumAdreLiv = true;
            }
            if($('#AdresseLiv_Commande').val() == ""){
                this.spanverifAdreLiv = true;
                this.messAdreLiv = "Merci de renseigner ce champ.";
                errorAdreLiv = true;
            }
            if($('#CPLiv_Commande').val() == ""){
                this.spanverifCpAdreLiv = true;
                this.messCpAdreLiv = "Merci de renseigner ce champ.";
                errorCpAdreLiv = true;
            }
            if($('#VilleLiv_Commande').val() == ""){
                this.spanverifVilleLiv = true;
                this.messVilleLiv = "Merci de renseigner ce champ.";
                errorVilleLiv = true;
            }
            if($('#NumeroAdrFac_Commande').val() == ""){
                this.spanverifNumAdreFac = true;
                this.messNumAdreFac = "Merci de renseigner ce champ.";
                errorNumAdreFac = true;
            }
            if($('#AdresseFac_Commande').val() == ""){
                this.spanverifAdreFac = true;
                this.messAdreFac = "Merci de renseigner ce champ.";
                errorAdreFac = true;
            }
            if($('#CPFac_Commande').val() == ""){
                this.spanverifCpAdreFac = true;
                this.messCpAdreFac = "Merci de renseigner ce champ.";
                errorCpAdreFac = true;
            }
            if($('#VilleFac_Commande').val() == ""){
                this.spanverifVilleFac = true;
                this.messVilleFac = "Merci de renseigner ce champ.";
                errorVilleFac = true;
            }
            if($('#Reference_Client').val() == ""){
                this.spanverifRefCli = true;
                this.messRefCli = "Merci de renseigner ce champ.";
                errorRefCli = true;
            }
            if($('#Numero_Facture').val() == ""){
                this.spanverifNumFac = true;
                this.messNumFac = "Merci de renseigner ce champ.";
                errorNumFac = true;
            }
            if(errorNumComm == true || errorDateComm == true || errorPrix == true || errorEtat == true || errorNumAdreLiv == true || errorAdreLiv == true || errorCpAdreLiv == true || errorVilleLiv == true || errorNumAdreFac == true || errorAdreFac == true || errorCpAdreFac == true || errorVilleFac == true || errorRefCli == true || errorNumFac == true){
                e.preventDefault();
            }
        }
    }
});