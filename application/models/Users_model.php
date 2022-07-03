<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Users_model extends CI_Model {
	
	
  function __construct()
  {
    parent::__construct(); // construct the Model class
  }	
    
    
    public function getـ_all_users(){
        
    }
    
    public function get_one_user(){
        
    }
    
    public function insert_user(){
        
        $data = array(
            'full_name' => $this->input->post('full_name'),
            'e_mail' => $this->input->post('e_mail'),
            'user_name' => $this->input->post('user_name'),
            'password' => SHA1(trim($this->input->post('password'))),
            'account_type' => 'user',
            'status' => 'pending'
        );
        $this->db->insert('users', $data);
        
        return true;
        
    }
    
    public function update_user(){
        
    }
    
    public function delete_user(){
        
    }
    
    public function hold_user(){
        
    }
    
    public function get_pending_users(){
        
    }
    
    public function get_hold_users(){
        
    }
    
    public function get_active_users(){
        
    }
    
    public function activate_user(){
        
    }
    

}?>