<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paypriva extends CI_Controller
{ 

       
  public function __construct()
  {
      parent::__construct();
      $this->load->library('form_validation'); 
      if(!$this->session->userdata('email')) {
        redirect('auth/login'); 
      }
        
      
      
  }

    public function index(){
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
        $this->load->view('auth/paypriva');
      }
      public function back(){
        $user =$this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
      $t=$user['id'];
        
        $ola = $this->db->query("UPDATE user SET pay_id=0 WHERE id=$t");
        redirect('Menu');
        
    }
   
}