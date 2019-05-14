<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Village extends CI_Controller {
    
    public function accueil(){

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('model_village');

        if($this->input->post()){

            $mail = $this->input->post('Mail_Client_co');
            $passW = $this->input->post('Password_Client_co');

            $data = $this->model_village->get_info($mail);

            if($data){

                // $data = $this->model_village->get_mail();
                
                if(password_verify($passW, $data->Password_Client)){

                    if($data->Status_Client == 'Admin'){

                        $name = $data->Nom_Client;
                        $fname = $data->Prenom_Client;
                        $email = $data->Mail_Client;

                        $user = array(
                            'username' => $name,
                            'userfname' => $fname,
                            'email' => $email,
                            'role' => 'admin'
                        );
                    }else{

                        $name = $data->Nom_Client;
                        $fname = $data->Prenom_Client;
                        $email = $data->Mail_Client;

                        $user = array(
                            'username' => $name,
                            'userfname' => $fname,
                            'email' => $email,
                            'role' => 'user'
                        );
                        
                    }
                    if (!isset($_SESSION['panierVillage'])){

                        $_SESSION['panierVillage']=array();
                        $_SESSION['panierVillage']['idProduit'] = array();
                        $_SESSION['panierVillage']['qteProduit'] = array();
                        $_SESSION['panierVillage']['prixTTC'] = array();
                    }
                    
                    $this->session->set_userdata($user);

                    if($_SESSION['role'] == 'admin'){

                        redirect(site_url('village/portailadmin'), 'location');
                    }else{

                        redirect(site_url('village/accueil'), 'location');
                    }  
                }else{

                    die("Mot de passe incorrect.");
                }
            }else{

                die("Email incorrect.");
            }
        }elseif(isset($_SESSION['role'])){

            if($_SESSION['role'] == 'admin'){

                redirect(site_url('village/portailadmin'), 'location');
            }else{

                $this->load->view("header");
                $this->load->view("accueil");
                $this->load->view("footer");
            }
            
        }else{

            $this->load->view("header");
            $this->load->view("accueil");
            $this->load->view("footer");
        }
    }

    // public function verifmail(){

    //         $mail = $this->input->post('mail');
    //         $data = $this->model_village->get_mail($mail);
    //         $this->output->set_content_type('application/json');
    //         $this->output->set_header('Access-Control-Allow-Origin: *');
    //         $this->output->set_output(json_encode($data));
        
        
    // }

    public function inscription(){

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('Mail_Client','Mail','trim|required|regex_match[/^[^\W][a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)*\@[a-zA-Z0-9]+(\.[a-zA-Z0-9]+)*\.[a-zA-Z]{2,4}$/]|is_unique[client.Mail_Client]');
        $this->form_validation->set_rules('Password_Client','mot de passe','trim|required|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/]');
        $this->form_validation->set_rules('confirmdp','Mot de passe confirmation','trim|required|matches[Password_Client]');
        $this->form_validation->set_rules('Prenom_Client','prenom','trim|required|regex_match[/^[\'àéèçë\sA-Za-z0-9_-]+$/]');
        $this->form_validation->set_rules('Nom_Client','nom','trim|required|regex_match[/^[\'àéèçë\sA-Za-z0-9_-]+$/]');
        $this->form_validation->set_rules('adresse','nom','trim|required|regex_match[/^[\'àéèçë\sA-Za-z0-9_-]+$/]');
        $this->form_validation->set_rules('comadresse','nom','trim|regex_match[/^[\'àéèçë\sA-Za-z0-9_-]+$/]');
        $this->form_validation->set_rules('CP_Client','nom','trim|required|regex_match[/^[\'àéèçë\sA-Za-z0-9_-]+$/]');
        $this->form_validation->set_rules('Ville_Client','nom','trim|required|regex_match[/^[àéèçë\sA-Za-z-]*$/]');
        $this->form_validation->set_rules('Pays_Client','nom','trim|required|regex_match[/^[àéèçë\sA-Za-z-]*$/]');
        $this->form_validation->set_rules('NumTelPort_Client','nom','trim|required|regex_match[/^0\d(\s|-)?(\d{2}(\s|-)?){4}$/]');
        $this->form_validation->set_rules('NumTelFixe_Client','nom','trim|regex_match[/^0\d(\s|-)?(\d{2}(\s|-)?){4}$/]');

        if($this->form_validation->run() == FALSE){

            $this->load->view("header");
            $this->load->view("inscription");
            $this->load->view("footer");
        }else{

            if($this->input->post('Password_Client') == $this->input->post('confirmdp')){
                        
                $pass = password_hash($this->input->post('Password_Client'), PASSWORD_DEFAULT);
                $date = date('Y/m/d');
                $adresse = $this->input->post('adresse') . $this->input->post('comadresse');
                
                $data = $this->input->post(array('Mail_Client', 'Password_Client', 'Prenom_Client', 'Nom_Client', 'CP_Client', 'Ville_Client', 'Pays_Client', 'NumTelPort_Client', 'NumTelFixe_Client'));

                $data['Adresse_Client'] = $adresse;
                $data['Password_Client'] = $pass;
                $data['DateInscript_Client'] = $date;
                $data['Status_Client'] = "Particulier";
                $data['Taxe_Client'] = 1.20;
                $data['ModePaiement_Client'] = 'Paiement à la commande';

                $this->db->insert('client', $data);

                redirect(site_url('village/accueil'), 'location');
            }else{
                
                $this->load->view('header');
                $this->load->view('inscription');
                $this->load->view('footer');
            }
        }
        
    }

    public function moncompte(){

        $this->load->helper('form');
        $this->load->model('model_village');

        $mail = $_SESSION['email'];

        $data["datauser"] = $this->model_village->get_info($mail);

        $this->load->view('header');
        $this->load->view('moncompte', $data);
        $this->load->view('footer');
    }

    public function deconnexion(){

        $this->session->sess_destroy();
        redirect(site_url('village/accueil'), 'location');
    }

    public function suppcompte(){

        $this->load->model('model_village');

        $mail = $_SESSION['email'];
        $this->model_village->supp($mail);
        
        $this->session->sess_destroy();

        redirect(site_url('village/accueil'), 'location');
    }

    public function modifcompte(){

        $this->load->helper('form');
        $this->load->model('model_village');
        $this->load->library('form_validation');

        $mail = $_SESSION['email'];
        $data["datauser"] = $this->model_village->get_info($mail);

        $this->form_validation->set_rules('Prenom_Client','prenom','trim|required|regex_match[/^[\'àéèçë\sA-Za-z0-9_-]+$/]');
        $this->form_validation->set_rules('Nom_Client','nom','trim|required|regex_match[/^[\'àéèçë\sA-Za-z0-9_-]+$/]');
        $this->form_validation->set_rules('Adresse_Client','nom','trim|required|regex_match[/^[\'àéèçë\sA-Za-z0-9_-]+$/]');
        $this->form_validation->set_rules('CP_Client','nom','trim|required|regex_match[/^[\'àéèçë\sA-Za-z0-9_-]+$/]');
        $this->form_validation->set_rules('Ville_Client','nom','trim|required|regex_match[/^[àéèçë\sA-Za-z-]*$/]');
        $this->form_validation->set_rules('Pays_Client','nom','trim|required|regex_match[/^[àéèçë\sA-Za-z-]*$/]');
        $this->form_validation->set_rules('NumTelPort_Client','nom','trim|required|regex_match[/^0\d(\s|-)?(\d{2}(\s|-)?){4}$/]');
        $this->form_validation->set_rules('NumTelFixe_Client','nom','trim|regex_match[/^0\d(\s|-)?(\d{2}(\s|-)?){4}$/]');

        if($this->form_validation->run() == FALSE){

            $this->load->view('header');
            $this->load->view('modifcompte', $data);
            $this->load->view('footer');
        }else{

            $datainput = $this->input->post();

            $this->db->where('Mail_Client', $mail);
            $this->db->update('client', $datainput);

            $this->load->view('header');
            $this->load->view('moncompte', $data);
            $this->load->view('footer');
        }

        
    }

    public function produits($id){

        $this->load->helper('form');
        $this->load->model('model_village');

        $data["produits"] = $this->model_village->get_produitsSousR($id);
        $data["sousRubrique"] = $this->model_village->get_sousRubrique($id);

        $this->load->view('header');
        $this->load->view('produits', $data);
        $this->load->view('footer');
    }

    public function addproduit(){

        $this->load->helper('form');
        $this->load->model('model_village');
        $this->load->library('form_validation');

        $data["Rubrique"] = $this->model_village->get_AllRubrique();

        $this->form_validation->set_rules('Nom_Produit','Nom du produit','trim|required|regex_match[/^[\sA-Za-z0-9]+$/]');
        $this->form_validation->set_rules('Description_Produit','Description du produit','trim|required|regex_match[/^[A-Za-z0-9\s\(\)\.\,\'\’\_\-\+\&\"\@\%\!\:\;\?\*\/\\\àéèâëêç€ùô]+$/]');
        $this->form_validation->set_rules('Reference_Produit','Reference du produit','trim|required|regex_match[/^[A-Za-z0-9]+$/]|is_unique[produits.Reference_Produit]');
        $this->form_validation->set_rules('PrixAchat_Produit','Prix du produit','trim|required|regex_match[/^[0-9]+[\.\,]+[0-9]{1,2}$/]');
        $this->form_validation->set_rules('Quantite_Produit','Quantite du produit','trim|required|regex_match[/^[0-9]+$/]');
        $this->form_validation->set_rules('ID_SousRubrique','Sous Rubrique du produit','trim|required|regex_match[/^[0-9]+$/]');

        if ($this->form_validation->run() == FALSE){

            $this->load->view('header');
            $this->load->view('addproduit', $data);
            $this->load->view('footer');
        }else{

            $dataadd = $this->input->post();

            $this->db->insert('produits', $dataadd);

            $lastId = $this->model_village->getMaxId();

            $config['upload_path'] = './assets/images/Produits/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2048;
            $config['max_width'] = 1024;
            $config['max_height'] = 768;
            $config['file_name'] = $lastId->id;

            $this->load->library('upload',$config);

            $type = $_FILES['image']['name'];

            $fichier = explode('.',$type);

            $this->db->set('Photo_Produit', $fichier[1]);
            $this->db->where('ID_Produit', $lastId->id);
            $this->db->update('produits');

            $this->upload->do_upload('image');

            redirect(site_url('village/portailadmin'), 'location');
        }
    }

    public function affisousR(){

        $this->load->helper('form');
        $this->load->model('model_village');

        $id = $this->input->get();

        $data = $this->model_village->get_sousRubriqueAjout($id);

        $this->output->set_content_type('application/json');
        $this->output->set_header('Access-Control-Allow-Origin:*');
        $this->output->set_output(json_encode($data));
    }

    public function ajoutpanier($id){

        $this->load->helper('form');
        $this->load->model('model_village');

        $positionProduit = array_search($id, $_SESSION['panierVillage']['idProduit']);

        if ($positionProduit !== FALSE)
        {
        
            $_SESSION['panierVillage']['qteProduit'][$positionProduit] += 1;
        }
        else
        {
            //Sinon on ajoute le produit
            array_push( $_SESSION['panierVillage']['idProduit'], $id);
            array_push( $_SESSION['panierVillage']['qteProduit'], 1);
        }

        redirect(site_url('village/panier'), 'location');
    }

    public function panier(){

        $this->load->helper('form');
        $this->load->model('model_village');

        if(!empty($_SESSION['panierVillage']['idProduit'])){

            $id = $_SESSION['panierVillage']['idProduit'];
            $data['produits'] = $this->model_village->get_prodPanier($id);

            $this->load->view('header');
            $this->load->view('panier', $data);
            $this->load->view('footer');
        }else{

            $this->load->view('header');
            $this->load->view('panier');
            $this->load->view('footer');
        }
    }

    public function suppProduit($id){

        //Nous allons passer par un panier temporaire
        $tmp=array();
        $tmp['idProduit'] = array();
        $tmp['qteProduit'] = array();

        for($i = 0; $i < count($_SESSION['panierVillage']['idProduit']); $i++)
        {
            if ($_SESSION['panierVillage']['idProduit'][$i] !== $id)
            {
                array_push( $tmp['idProduit'],$_SESSION['panierVillage']['idProduit'][$i]);
                array_push( $tmp['qteProduit'],$_SESSION['panierVillage']['qteProduit'][$i]);
            }

        }
        //On remplace le panier en session par notre panier temporaire à jour
        $_SESSION['panierVillage'] =  $tmp;
        //On efface notre panier temporaire
        unset($tmp);

        redirect(site_url('village/panier'), 'location');
    }
    
    public function modifproduit($id){

        $this->load->helper('form');
        $this->load->helper('file');
        $this->load->library('form_validation');
        $this->load->model('model_village');

        $this->form_validation->set_rules('ID_Produit','ID du produit','trim|required|regex_match[/^[0-9]+$/]');
        $this->form_validation->set_rules('Nom_Produit','Nom du produit','trim|required|regex_match[/^[\sA-Za-z0-9]+$/]');
        $this->form_validation->set_rules('Description_Produit','Description du produit','trim|required|regex_match[/^[A-Za-z0-9\s\(\)\.\,\'\’\_\-\+\&\"\@\%\!\:\;\?\*\/\\\àéèâëêç€ùô]+$/]');
        $this->form_validation->set_rules('Reference_Produit','Reference du produit','trim|required|regex_match[/^[A-Za-z0-9]+$/]');
        $this->form_validation->set_rules('PrixAchat_Produit','Prix du produit','trim|required|regex_match[/^[0-9]+[\.\,]+[0-9]{1,2}$/]');
        $this->form_validation->set_rules('Quantite_Produit','Quantite du produit','trim|required|regex_match[/^[0-9]+$/]');
        $this->form_validation->set_rules('ID_SousRubrique','Sous Rubrique du produit','trim|required|regex_match[/^[0-9]+$/]');

        if ($this->form_validation->run() == FALSE){

            $data["produit"] = $this->model_village->get_produit($id);
            $data["sousRub"] = $this->model_village->get_AllsousRubrique();

            $this->load->view('header');
            $this->load->view('modifproduit', $data);
            $this->load->view('footer');
        }else{

            $id = $this->input->post('ID_Produit');
            $data = $this->input->post();

            $this->db->where('ID_Produit', $id);
            $this->db->update('produits', $data);

            $config['upload_path'] = './assets/images/Produits/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2048;
            $config['max_width'] = 1024;
            $config['max_height'] = 768;
            $config['file_name'] = $id;

            $this->load->library('upload',$config);

            if($_FILES['image']['name'] != ""){

                $type = $_FILES['image']['name'];

                $fichier = explode('.',$type);

                $this->db->set('Photo_Produit', $fichier[1]);
                $this->db->where('ID_Produit', $id);
                $this->db->update('produits');

                if(unlink('./assets/images/Produits/'.$id.".jpg")){

                    unlink('./assets/images/Produits/'.$id.".jpg");
                }elseif(unlink('./assets/images/Produits/'.$id.".gif")){

                    unlink('./assets/images/Produits/'.$id.".gif");
                }elseif(unlink('./assets/images/Produits/'.$id.".png")){

                    unlink('./assets/images/Produits/'.$id.".png");
                }

                $this->upload->do_upload('image');
            }

            redirect(site_url('village/accueil'), 'location');
        }
    }

    public function supproduit(){

        $id = $this->input->post('ID_Produit');
        
        $this->db->where('ID_Produit', $id);
        $this->db->delete('produits');

        redirect(site_url('village/portailadmin'), 'location');
    }

    public function portailadmin(){

        $this->load->helper('form');
        $this->load->model('model_village');

        $data["sousRub"] = $this->model_village->get_AllsousRubrique();
        $data["rubrique"] = $this->model_village->get_AllRubrique();
        $data["commande"] = $this->model_village->get_AllCommande();

        $this->load->view('header');
        $this->load->view('portailadmin', $data);
        $this->load->view('footer');
    }

    public function commande($id){

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('model_village');

        $this->form_validation->set_rules('Numero_Commande','Numéro de commande','trim|required|regex_match[/^[0-9]+$/]');
        $this->form_validation->set_rules('PrixTot_Commande','Prix de la commande','trim|required|regex_match[/^[0-9]+[\.\,]+[0-9]{1,2}$/]');
        $this->form_validation->set_rules('Etat_Commande','Etat de la commande','trim|required|regex_match[/^[A-Za-z0-9\s\àéèâëêçùô]+$/]');
        $this->form_validation->set_rules('NumeroAdrLiv_Commande','Numéro Livraison de la commande','trim|required|regex_match[/^[A-Za-z0-9\s]+$/]');
        $this->form_validation->set_rules('NumeroAdrFac_Commande','Numéro facturation de la commande','trim|required|regex_match[/^[A-Za-z0-9\s]+$/]');
        $this->form_validation->set_rules('AdresseLiv_Commande','Adresse Livraison de la commande','trim|required|regex_match[/^[A-Za-z0-9\s\.\,\'\’\_\-\+\&\"\@\%\!\:\;\?\*\/\\\àéèâëêç€ùô]+$/]');
        $this->form_validation->set_rules('AdresseFac_Commande','Adresse facturation de la commande','trim|required|regex_match[/^[A-Za-z0-9\s\.\,\'\’\_\-\+\&\"\@\%\!\:\;\?\*\/\\\àéèâëêç€ùô]+$/]');
        $this->form_validation->set_rules('CPLiv_Commande','Code postal Livraison de la commande','trim|required|regex_match[/^[\sA-Za-z0-9]+$/]');
        $this->form_validation->set_rules('CPFac_Commande','Code postal facturation de la commande','trim|required|regex_match[/^[\sA-Za-z0-9]+$/]');
        $this->form_validation->set_rules('VilleLiv_Commande','Ville Livraison de la commande','trim|required|regex_match[/^[A-Za-z0-9\s\àéèâëêçùô]+$/]');
        $this->form_validation->set_rules('VilleFac_Commande','Ville facturation de la commande','trim|required|regex_match[/^[A-Za-z0-9\s\àéèâëêçùô]+$/]');
        $this->form_validation->set_rules('Reference_Client','Reference Client','trim|required|regex_match[/^[0-9]+$/]');
        $this->form_validation->set_rules('Numero_Facture','Numéro de facture','trim|required|regex_match[/^[0-9]+$/]');

        if ($this->form_validation->run() == FALSE){

            $data["commande"] = $this->model_village->get_Commande($id);

            $this->load->view('header');
            $this->load->view('commande', $data);
            $this->load->view('footer');
        }else{
            
            $id = $this->input->post('Numero_Commande');
            $data = $this->input->post();
            

            $this->db->where('Numero_Commande', $id);
            $this->db->update('commande', $data);

            redirect(site_url('village/portailadmin'), 'location');
        }
        
    }
}