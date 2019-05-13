<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://localhost/codei/assets/css/styleVillage.css">
</head>
<body>
    <div id="btnmenu">
        <a id="lienmenu" href="http://localhost/ci/index.php/menus/menu" class="btn">Retour au menu</a>
    </div>
    <div class="container" id="divbandeau">
        <header>
            <a href="<?= site_url('village/accueil') ?>"><img id="logoVill" src="http://localhost/codei/assets/images/logo village green.png" alt="Logo Village Green"></a>
            <img id="troisbandes" src="http://localhost/codei/assets/images/3 bandes.png" alt="bandes">
        </header>
        <div id="divmenu">
            <div id="divline1">
                <ul class="nav justify-content-end ulheader">
                    <li class="nav-item"><div class="divcenterV"><a class="lienheader lienheaderune" href="">Infos</a></div></li>
                    <li class="nav-item"><div class="divcenterV"><?php if(!isset($_SESSION['username'])){ ?><a @click="switchdiv('clickespcli')" class="lienheader lienheaderune" href="#">Espace Client</a> <?php }else{ ?> <a class="lienheader lienheaderune" href="<?= site_url('village/moncompte') ?>">Mon Compte</a> <?php } ?></div></li>
                        <transition name="fade">
                            <div id="divespcli" v-show="divespcli" >
                                <div id="divconn">
                                    <?= form_open(site_url('village/accueil')); ?>
                                        <p><b>Etes-vous déjà clients chez nous ?</b></p>
                                        <input class="inputconnex" type="email" name="Mail_Client_co" id="Mail_Client_co" placeholder="Adresse E-mail"><br>
                                        <input class="inputconnex" type="password" name="Password_Client_co" id="Password_Client_co" placeholder="Mot de passe"><br>
                                        <input type="checkbox" name="checkconnex" id="checkconnex"><label for="checkconnex"> Rester connecté</label><br>
                                        <input id="submitconnex" type="submit" value="">
                                    </form>
                                    <a class="lienconnex" href="">Vous avez oublié votre mot de passe ?</a>
                                </div>
                                <div id="divinsc">
                                    <p><b>N'êtes-vous pas encore client ?</b></p>
                                    <p id="paraespcli">En tant que client Village Green vous pouvez suivre vos envoies, lire des tests produits exclusifs, évaluer des produits, déposer des petites annonces, gérer vos chèques-cadeaux, devenir partenaire et bien plus encore.</p>
                                    <a href="<?= site_url('village/inscription') ?>"><input id="btninsc" type="button"  value=""></a><br>
                                    <a class="lienconnex" href="">Plus d'informations</a>
                                </div>
                            </div>
                        </transition>
                    <li class="nav-item"><div class="divcenterV"><a class="lienheader lienheaderune" href="<?= site_url('village/panier') ?>"><img src="http://localhost/codei/assets/images/picto panier.png" alt="Panier"></a></div></li>
                    <li class="nav-item"><div class="divcenterV"><a class="lienheader lienheaderune" href=""><img src="http://localhost/codei/assets/images/picto pays.png" alt="Drapeau"></a></div></li>
                </ul>
            </div>
            <div id="divline2">
                <ul class="nav justify-content-end ulheader">
                    <li class="nav-item"><div class="divcenterV"><a class="lienheader lienheaderdeux" href="">Produits</a></div></li>
                    <li class="nav-item"><div class="divcenterV"><a class="lienheader lienheaderdeux" href="">Service</a></div></li>
                    <li class="nav-item"><div class="divcenterV"><a class="lienheader lienheaderdeux" href="">Aide</a></div></li>
                    <li class="nav-item"><div class="divcenterV"><a class="lienheader lienheaderdeux" href="">A propos</a></div></li>
                </ul>
            </div>
            <div id="divline3">
                <ul class="nav justify-content-end ulheader">
                    <li class="nav-item">
                        <div class="divcenterV">
                            <a class="lienheader lienheadertrois" @click="switchdiv('clickguit')" href="#">Guit/Bass</a>
                            <transition name="fade">
                                <div id="divderoulguit" v-show="divguit" @mouseleave="divguit = false">
                                    <ul class="ulheader">
                                        <li>&nbsp;</li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/1') ?>">Guitares Electriques</a></li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/2') ?>">Guitares Classiques</a></li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/3') ?>">Guitares Acoustiques & Electro-Acoustiques</a></li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/4') ?>">Basses Electriques</a></li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/5') ?>">Basses Acoustiques</a></li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/6') ?>">Basses Semi-Acoustiques</a></li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/7') ?>">Ukulélés</a></li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/8') ?>">Autres instruments à cordes pincées</a></li>
                                    </ul>
                                </div>
                            </transition>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="divcenterV">
                            <a class="lienheader lienheadertrois" @click="switchdiv('clickbatte')" href="#">Batteries</a>
                            <transition name="fade">
                                <div id="divderoulbatte" v-show="divbatte" @mouseleave="divbatte = false">
                                    <ul class="ulheader">
                                        <li>&nbsp;</li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/9') ?>">Batteries Acoustiques</a></li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/10') ?>">Batteries Electroniques</a></li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/11') ?>">Accessoires Batteries</a></li>
                                    </ul>
                                </div>
                            </transition>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="divcenterV">
                            <a class="lienheader lienheadertrois" @click="switchdiv('clickclav')" href="#">Clavier</a>
                            <transition name="fade">
                                <div id="divderoulclav" v-show="divclav" @mouseleave="divclav = false">
                                    <ul class="ulheader">
                                        <li>&nbsp;</li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/12') ?>">Pianos Numériques</a></li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/13') ?>">Synthés Numériques</a></li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/14') ?>">Claviers Maîtres</a></li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/15') ?>">Accordéons</a></li>
                                    </ul>
                                </div>
                            </transition>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="divcenterV">
                            <a class="lienheader lienheadertrois" @click="switchdiv('clickstud')" href="#">Studio</a>
                            <transition name="fade">
                                <div id="divderoulstud" v-show="divstud" @mouseleave="divstud = false">
                                    <ul class="ulheader">
                                        <li>&nbsp;</li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/16') ?>">Interfaces Audio</a></li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/17') ?>">Microphones</a></li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/18') ?>">Casques et Gestions</a></li>
                                    </ul>
                                </div>
                            </transition>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="divcenterV">
                            <a class="lienheader lienheadertrois" @click="switchdiv('clicksono')" href="#">Sono</a>
                            <transition name="fade">
                                <div id="divderoulsono" v-show="divsono" @mouseleave="divsono = false">
                                    <ul class="ulheader">
                                        <li>&nbsp;</li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/19') ?>">Amplis de Puissance</a></li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/20') ?>">Effets Voix</a></li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/21') ?>">Sonorisations Portables</a></li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/22') ?>">Packs Enceintes</a></li>
                                    </ul>
                                </div>
                            </transition>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="divcenterV">
                            <a class="lienheader lienheadertrois" @click="switchdiv('clickeclair')" href="#">Eclairage</a>
                            <transition name="fade">
                                <div id="divderouleclair" v-show="diveclair" @mouseleave="diveclair = false">
                                    <ul class="ulheader">
                                        <li>&nbsp;</li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/23') ?>">Lumière de Soirées</a></li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/24') ?>">Lumière Noire</a></li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/25') ?>">Lasers</a></li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/26') ?>">Stroboscopes</a></li>
                                    </ul>
                                </div>
                            </transition>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="divcenterV">
                            <a class="lienheader lienheadertrois" @click="switchdiv('clickdj')" href="#">DJ</a>
                            <transition name="fade">
                                <div id="divderouldj" v-show="divdj" @mouseleave="divdj = false">
                                    <ul class="ulheader">
                                        <li>&nbsp;</li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/27') ?>">Mixers Numériques</a></li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/28') ?>">Groove Stations et Samplers</a></li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/29') ?>">Platines CD</a></li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/30') ?>">Platines Vinyles</a></li>
                                    </ul>
                                </div>
                            </transition>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="divcenterV">
                            <a class="lienheader lienheadertrois" @click="switchdiv('clickcase')" href="#">Cases</a>
                            <transition name="fade">
                                <div id="divderoulcase" v-show="divcase" @mouseleave="divcase = false">
                                    <ul class="ulheader">
                                        <li>&nbsp;</li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/31') ?>">Sac et Flight Case pour Lumières</a></li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/32') ?>">Elements Rackables</a></li>
                                    </ul>
                                </div>
                            </transition>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="divcenterV">
                            <a class="lienheader lienheadertrois" @click="switchdiv('clickacces')" href="#">Accessoires</a>
                            <transition name="fade">
                                <div id="divderoulacces" v-show="divacces" @mouseleave="divacces = false">
                                    <ul class="ulheader">
                                        <li>&nbsp;</li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/33') ?>">Accessoires Claviers</a></li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/34') ?>">Accessoires Guitares</a></li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/35') ?>">Accessoires DJ et Sono</a></li>
                                        <li class="listederoule"><a class="lienderoule" href="<?= site_url('village/produits/36') ?>">Accessoires Génériques</a></li>
                                    </ul>
                                </div>
                            </transition>
                        </div>
                    </li>
                </ul>
            </div>
        </div><br><br>