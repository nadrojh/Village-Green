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

        public function getMaxId() 
        {

            $result = $this->db->query('SELECT MAX(ID_Produit) As id FROM produits');

            if($result->num_rows() > 0){

                return $result->row();
            }else{

                return false;
            }            
        }
    }
?>