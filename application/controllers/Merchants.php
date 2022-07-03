<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merchants extends CI_Controller {

    

  function __construct()
  {
		parent::__construct();
		$this->load->model('Merchants_model');
  }
    
	public function index(){
		$this->load->view('welcome_message');
	}
    
    
    public function get_merchants(){
        
    }
    
    public function insert_merchant(){
        
    }
    
    public function edit_merchant(){
        
    }
    
    public function update_merchant(){
        
    }
    
    public function delete_merchant(){
        
    }
    
    public function merchant_search(){
        
    }
    
    public function merchant_search_result(){
        
    }
    
    
}?>