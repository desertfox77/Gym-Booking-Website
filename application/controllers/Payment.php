<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment extends CI_Controller
{

 
     
  public function __construct()
  {
      parent::__construct();
      if(!$this->session->userdata('email')) {
        redirect('auth/login');
      }else {
        
        $eva = $this->db->get_where('user', ['email' => 
    $this->session->userdata('email')])->row_array();
    if($eva['pay_id']==0) {redirect('Menu');
    }elseif( $eva['pay_id']==3){
      redirect('Menu');
    }elseif( $eva['pay_id']==4){
      redirect('Menu');
    }

         }

  }


    public function index(){
        //echo 'leo';
        $data['user'] = $this->db->get_where('user', ['email' => 
    $this->session->userdata('email')])->row_array();
  
        $hasil= $this->db->get_where('reservasi',array('user_id'=>$this->session->userdata('userid')));
        foreach ($hasil->result_array() as $row){
          
        }

        //print_r($hasil);
        $data['hasil'] = $row;
        
        $anton = [
          'biaya' => $row[' '],
          
      ];
      $this->session->set_userdata($anton);
        
        
       $this->load->view('auth/payment',$data,$anton);
        
    }
        
    public function save($length = 5){
      
      $characters = '0123456789abcdefghijklmnopqrs092u3tuvwxyzaskdhfhf9882323ABCDEFGHIJKLMNksadf9044OPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
      $randomString = '';
  for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
    
  }
      $data = array(
        
        
        'code_transaction' => $randomString,
       
      'total_payment' => $this->session->userdata('biaya'),
      'user_id' => $this->session->userdata('userid')
      
        );
        $this->db->insert('pembayaran',$data);
    
        redirect('Confirmation');
      }
  

    public function back(){
        $user =$this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
      $t=$user['id'];
        $hasil=$this->db->query("DELETE FROM reservasi WHERE user_id=$t ORDER BY date DESC LIMIT 1");
        $ola = $this->db->query("UPDATE user SET pay_id=0 WHERE id=$t");
        redirect('Menu');
        
    }
   

  
    }