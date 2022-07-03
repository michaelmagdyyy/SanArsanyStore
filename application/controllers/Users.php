<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
    }
    
    
    public function register(){
        $this->load->view('users/register_view');
    }
    
    public function login(){
        $this->load->view('users/login_view');
    }
    
    public function log_user_in(){
        
    }
    
    public function get_users(){
        
    }
    
    public function insert_user(){
        
        /////// save member data in database + check if saved
        if(!$this->Users_model->insert_user()){
            
            //// if saving failed
            echo '<h1>Error in saving member data</h1>';
        }else{
            //// if saving successed
            redirect('Users/login/');
        }
        
        
        
    }
    
    public function edit_user(){
        
    }
    
    public function update_user(){
        
    }
    
    public function delete_user(){
        
    }
    
    public function users_search(){
        
    }
    
    public function users_search_result(){
        
    }
    
    
    public function logout(){
        
    }
    
    public function verify_permission(){
        
    }
    
    public function get_pending_users(){
        
    }
    
    public function get_hold_users(){
        
    }

    public function get_active_users(){
        
    }
    
    public function activate_user(){
        
    }
    
    public function put_user_on_hold(){
        
    }
    
    
}?>