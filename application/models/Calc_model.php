<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Calc_model extends CI_Model {
	
	
  function __construct()
  {
    parent::__construct(); // construct the Model class
  }	
    
    
    public function add_numbers($result){
        
        $data = array(
            'first_number' => $this->input->post('first_number'),
            'operation_type' => $this->input->post('operation_type'),
            'second_number' => $this->input->post('second_number'),
            'result' => $result,
        );
        $this->db->insert('calculator', $data);
        
        
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
	
//	public function get_children()
//	{
//    	$this->db->where('account_type','child');
//    	$query=$this->db->get('members');
//		return $query->result();
//	}
//	
//	public function get_one_child($child_id)
//	{
//    	$this->db->where('id',$child_id);
//    	$query=$this->db->get('members');
//		return $query->row();
//	}
//	
//    
//	public function get_children_in_class($class_id)
//	{
//    	$this->db->where('class_id',$class_id);
//    	$query=$this->db->get('members');
//		return $query->result();
//	}
//	
//	public function view_search_result()
//	{
//		$full_name   	    = $this->input->post('full_name');
//		$father_mobile 		= $this->input->post('father_mobile');
//		$mother_mobile      = $this->input->post('mother_mobile');
//		$gender  	        = $this->input->post('gender');
//		$birthdate          = $this->input->post('birthdate');
//		$class_id           = $this->input->post('class_id');
//		$user_name          = $this->input->post('user_name');
//		$status             = $this->input->post('status');
//		$account_type       = $this->input->post('account_type');
//		
//		if (!empty($full_name))
//		{
//		$this->db->where('full_name', $full_name);
//		}		
//		if (!empty($father_mobile))
//		{
//		$this->db->where('father_mobile', $father_mobile);
//		}		
//		if (!empty($mother_mobile))
//		{
//		$this->db->where('mother_mobile', $mother_mobile);
//		}
//		if (!empty($gender))
//		{
//		$this->db->where('gender', $gender);
//		}
//		if (!empty($birthdate))
//		{
//		$this->db->where('birthdate', $birthdate);
//		}
//		if (!empty($class_id))
//		{
//		$this->db->where('class_id', $class_id);
//		}
//		if (!empty($user_name))
//		{
//		$this->db->where('user_name', $user_name);
//		}
//		if (!empty($status))
//		{
//		$this->db->where('status', $status);
//		}
//		if (!empty($account_type))
//		{
//		$this->db->where('account_type', $account_type);
//		}
//
//		$query=$this->db->get('members');
//		$rows_num = $query->num_rows();
//		
//		return $query->result();
//		
//	}
//    
}?>