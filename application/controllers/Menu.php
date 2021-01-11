<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

  public function __construct()
        {
            parent::__construct();
           if(!$this->session->userdata('email')) {
              redirect('auth/login');
            }else {
              $eva = $this->db->get_where('user', ['email' => 
              $this->session->userdata('email')])->row_array();
              if($eva['role_id']==3) {
                  redirect('Partner');
            }elseif ($eva['role_id']==1) {
              redirect('Admin');
            }elseif ($eva['pay_id']==1) {
              redirect('Payment');
            }elseif ($eva['pay_id']==3) {
              redirect('paypriva');
            }elseif ($eva['pay_id']==4) {
              redirect('paytrainer');
            }
          }
        }
public function index(){
    //$data['title'] ='My Profile';
    $data['user'] = $this->db->get_where('user', ['email' => 
    $this->session->userdata('email')])->row_array();

    $data['userid'] = $this->session->userdata('userid');
   // echo'selamat datang ' . $data['user']['name'];
   $a=1;
   $data ['a'] = $a;
$hasil = $this->db->query("SELECT * FROM addlocation"); 
$data['hasil'] = $hasil;
//print_r($hasil);

$leo = $this->db->query("SELECT id,name, start_hours, end_hours, price, day, location FROM private WHERE day='sunday'"); 
$data['leo'] = $leo;

$user =$this->db->get_where('user', ['email' => 
$this->session->userdata('email')])->row_array();
$t=$user['id']; 
$drogba = $this->db->query("SELECT * FROM trainer"); 
$data['drogba'] = $drogba;
$ola = $this->db->query("UPDATE user SET pay_id=0 WHERE id=$t");
$this->load->view('auth/menu',$data);


  

}

public function logout()
{
    
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('role_id');

    

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Logout success!
      </div>');
        redirect('auth/login');
}



public function profile(){
  $data['title'] ='My Profile';
  $data['user'] = $this->db->get_where('user', ['email' => 
  $this->session->userdata('email')])->row_array();
 // echo'selamat datang ' . $data['user']['name'];
// this->db->query("select*from where kode= ")
  $this->load->view('auth/myprof',$data);
}

public function eb(){
  $data['title'] ='My Profile';
  $data['user'] = $this->db->get_where('user', ['email' => 
  $this->session->userdata('email')])->row_array();
 // echo'selamat datang ' . $data['user']['name'];

  $this->load->view('auth/eastbekasi',$data);
}

public function ej(){
  // $data['title'] ='My Profile';
   $data['user'] = $this->db->get_where('user', ['email' => 
   $this->session->userdata('email')])->row_array();
  // echo'selamat datang ' . $data['user']['name'];

   $this->load->view('auth/eastjakarta',$data);
}

public function nj(){
  //$data['title'] ='My Profile';
  $data['user'] = $this->db->get_where('user', ['email' => 
  $this->session->userdata('email')])->row_array();
 // echo'selamat datang ' . $data['user']['name'];

  $this->load->view('auth/northjakarta',$data);
}

public function sj(){
  //$data['title'] ='My Profile';
  $data['user'] = $this->db->get_where('user', ['email' => 
  $this->session->userdata('email')])->row_array();
 // echo'selamat datang ' . $data['user']['name'];

  $this->load->view('auth/southjakarta',$data);
}

public function wb(){
  //$data['title'] ='My Profile';
  $data['user'] = $this->db->get_where('user', ['email' => 
  $this->session->userdata('email')])->row_array();
 // echo'selamat datang ' . $data['user']['name'];

  $this->load->view('auth/westbekasi',$data);
}

public function wj(){
  //$data['title'] ='My Profile';
  $data['user'] = $this->db->get_where('user', ['email' => 
  $this->session->userdata('email')])->row_array();
 // echo'selamat datang ' . $data['user']['name'];

  $this->load->view('auth/westjakarta',$data);
}

public function save($length = 8){

	$user =$this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
      $t=$user['id'];
	$id = $this->input->post('userid');
    $location = $this->input->post('location');
	$date = $this->input->post('date');
	$min = $this->input->post('min');
	$max = $this->input->post('max');
	// $time = $this->input->post('schedule');
 $new_date = date('Y-m-d H:i:s', strtotime($date));


// $awal = strtotime($min);
// $akhir = strtotime($max);
$diff = intval(substr($max,0,2))-intval(substr($min,0,2));





$jam = floor($diff/60*60);
$biaya = 100000;
$total = $jam * $biaya;

$characters = '0123456789abcdefghijklmnopqrs092u3tuvwxyzaskdhfhf9882323ABCDEFGHIJKLMNksadf9044OPQRSTUVWXYZ';
$charactersLength = strlen($characters);
$randomString = '';
for ($i = 0; $i < $length; $i++) {
	$randomString .= $characters[rand(0, $charactersLength - 1)];
	
}



	$data = array(
		'id' => $this->session->userdata('id'),
		'date' => $new_date,
		'start_hours' => $min,
		'end_hours' => $max,
		'lokasi' => $location,
		'total_waktu' => $jam,
		'jumlah_biaya' => $total,
	'user_id' => $this->session->userdata('userid'),
	'code' => $randomString
		);
		$this->db->insert('reservasi',$data);
		$ola = $this->db->query("UPDATE user SET pay_id=1 WHERE id=$t");
		redirect('Payment');
}
public function newlocation(){
  $data['user'] = $this->db->get_where('user', ['email' => 
  $this->session->userdata('email')])->row_array();
  $a=1;
   $data ['a'] = $a;
$hasil = $this->db->query("SELECT * FROM addlocation"); 
$data['hasil'] = $hasil;
  $this->load->view('auth/newlocation', $data);
}

public function monday() {
  $data['user'] = $this->db->get_where('user', ['email' => 
    $this->session->userdata('email')])->row_array();
    $eva = $this->db->query("SELECT id,name, start_hours, end_hours, price, day, location FROM private WHERE day='monday'"); 
$data['eva'] = $eva;
$this->load->view('day/monday',$data);
}
public function tuesday(){
  $data['user'] = $this->db->get_where('user', ['email' => 
    $this->session->userdata('email')])->row_array();
  $sherrile = $this->db->query("SELECT id,name, start_hours, end_hours, price, day, location FROM private WHERE day='tuesday'");
$data['sherrile'] = $sherrile;
$this->load->view('day/tuesday',$data);
}
public function wednesday(){
  $data['user'] = $this->db->get_where('user', ['email' => 
  $this->session->userdata('email')])->row_array();
  $sheren = $this->db->query("SELECT id, name, start_hours, end_hours, price, day, location FROM private WHERE day='wednesday'"); 
$data['sheren'] = $sheren;
  $this->load->view('day/wednesday',$data);
}
public function thursday(){
  $data['user'] = $this->db->get_where('user', ['email' => 
  $this->session->userdata('email')])->row_array();
  $messi = $this->db->query("SELECT id, name, start_hours, end_hours, price, day, location FROM private WHERE day='thursday'"); 
  $data['messi'] = $messi;
  $this->load->view('day/thursday',$data);
}

public function friday(){
  $data['user'] = $this->db->get_where('user', ['email' => 
  $this->session->userdata('email')])->row_array();
  $ronaldo = $this->db->query("SELECT id, name, start_hours, end_hours, price, day, location FROM private WHERE day='friday'");
  $data['ronaldo'] = $ronaldo;
  $this->load->view('day/friday',$data);
}

public function saturday(){
  $data['user'] = $this->db->get_where('user', ['email' => 
  $this->session->userdata('email')])->row_array();
  $drogba = $this->db->query("SELECT id, name, start_hours, end_hours, price, day, location FROM private WHERE day='saturday'"); 
  $data['drogba'] = $drogba;
  $this->load->view('day/saturday',$data);
}



}