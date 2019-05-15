<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

    class model_village extends CI_Model{

        public function get_info($mail){

            $data = $this->db->query('select * from client where Mail_Client = ?', $mail)->row();
            if($data){
                return $data;
            }else{
                return false;
            }
        }

        public function supp($mail){

            $data = $this->db->query('delete from client where Mail_Client = ?', $mail);
            if($data){
                return true;
            }else{
                return false;
            }
        }

        public function get_produitsSousR($id){

            $data = $this->db->query('select * from produits where ID_SousRubrique = ?', $id)->result();
            return $data;
        }

        public function get_produit($id){

            $data = $this->db->query('select * from produits where ID_Produit = ?', $id)->row();
            return $data;
        }

        public function get_sousRubrique($id){
            
            $data = $this->db->query('select ID_SousRubrique, Nom_SousRubrique from sous_rubrique where ID_SousRubrique = ?', $id)->result();
            return $data;
        }

        public function get_AllsousRubrique(){
            
            $data = $this->db->query('select * from sous_rubrique')->result();
            return $data;
        }

        public function get_AllRubrique(){
            
            $data = $this->db->query('select * from rubrique')->result();
            return $data;
        }

        public function get_prodPanier($id){
            
            $this->db->select('*');
            $this->db->from('produits');
            $this->db->where_in('ID_Produit', $id);
            $data = $this->db->get()->result();

            return $data;
        }

        public function get_AllCommande(){
            
            $data = $this->db->query('select * from commande')->result();
            return $data;
        }

        public function get_Commande($id){
            
            $data = $this->db->query('select * from commande where Numero_Commande = ?', $id)->row();
            return $data;
        }

        public function get_numFacture($id){
            
            $data = $this->db->query('select Numero_Facture from commande where Numero_Commande = ?', $id)->row();
            return $data->Numero_Facture;
        }

        public function get_idClient($id){
            
            $data = $this->db->query('select Reference_Client from commande where Numero_Commande = ?', $id)->row();
            return $data->Reference_Client;
        }

        public function get_Client($id){
            
            $data = $this->db->query('select * from client where Reference_Client = ?', $id)->row();
            return $data;
        }

        public function get_produitcommande($id){
            
            $data = $this->db->query('select * from integre where Numero_Commande = ?', $id)->result();
            return $data;
        }

        public function get_idproduitcommande($id){
            
            $result = $this->db->query('select ID_Produit from integre where Numero_Commande = ?', $id)->result();
            foreach($result as $row){
                $data[] = $row->ID_Produit;
            }
            return $data;
        }

        public function get_detailproduitcommande($idproduit, $idcommande){
            
            $this->db->select('*');
            $this->db->from('produits');
            $this->db->join('integre', "produits.ID_Produit = integre.ID_Produit");
            $this->db->where_in('produits.ID_Produit', $idproduit);
            $this->db->where('integre.Numero_Commande', $idcommande);
            $data = $this->db->get()->result();
            
            return $data;
        }

        public function getMaxId() 
        {

            $result = $this->db->query('SELECT MAX(ID_Produit) As id FROM produits');

            if($result->num_rows() > 0){

                return $result->row();
            }else{

                return false;
            }            
        }

        public function get_sousRubriqueAjout($id){
            
            $data = $this->db->query('select * from sous_rubrique where ID_Rubrique = ?', $id)->result();
            return $data;
        }

        public function get_facture($id){
            
            $data = $this->db->query('select * from facture where Numero_Facture = ?', $id)->row();
            return $data;
        }
    }
?>