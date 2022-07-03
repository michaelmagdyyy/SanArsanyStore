<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome1 extends CI_Controller {

    

  function __construct()
  {
		parent::__construct();
		$this->load->model('Calc_model');
		$this->load->model('Members_model');
  }
    
    
    
	public function index(){
		$this->load->view('header');
		$this->load->view('users_view');
		$this->load->view('footer');
	}
    
    
    
    
    
    
    
    public function pavly($msg = NULL){
        
        $data['msg'] = $msg;

        $data['members'] =  $this->Members_model->get_members_data();
        
        $this->load->view('merchants/register_view', $data);
        
    }
    
    public function register_data(){
        
        
        /////// save member data in database + check if saved
        if(!$this->Members_model->add_member()){
            
            //// if saving failed
            echo '<h1>Error in saving member data</h1>';
        }else{
            //// if saving successed
            $msg = 'Member Data Saved Successfuly';
            
            ///// redirect to pavly for viewing the members after adding the new member
            redirect('Welcome/pavly/' . $msg);
        }
        
        
        
    }
    
    public function get_user_data(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        echo 'User Name => ' . $username . '<br>Password => ' . $password;
        
    }
    
    public function get_result(){
        
        $first_number = $this->input->post('first_number');
        $operation_type = $this->input->post('operation_type');
        $second_number = $this->input->post('second_number');
        
        $data['first_number'] = $first_number;
        $data['second_number'] = $second_number;
        $data['operation_type'] = $operation_type;
        
        switch ($operation_type) {
          case '+':
            $result = $first_number + $second_number;
            break;
          case '-':
            $result = $first_number - $second_number;
            break;
          case '/':
            $result = round($first_number / $second_number, 2);
            break;
          case '*':
            $result = $first_number * $second_number;
            break;
          default: 
        }
        $data['result'] = $result;
		$this->Calc_model->add_numbers($result);
        $this->load->view('test_view', $data);   
        
    }
    
    public function edit_member($member_id){
        
        $data['one_member'] = $this->Members_model->get_one_member($member_id);
        
        $this->load->view('edit_member_view', $data);
    }
    
    public function update_member(){
        
        if($this->Members_model->update_member()){
            $msg = 'Member Updated Successfuly';
            redirect('Welcome/pavly/' . $msg);
        }else{
            echo 'error in update member';
        }
        
    }
    
    public function delete_member($member_id){
        if($this->Members_model->delete_member($member_id)){
            $msg = 'Member Deleted Successfuly';
            redirect('Welcome/pavly/' . $msg);
        }else{
            echo 'error in delete member';
        }
        
    }
    
    
    
    
    
}