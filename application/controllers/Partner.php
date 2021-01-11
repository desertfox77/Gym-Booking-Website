<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Partner extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if(!$this->session->userdata('email')) {
            redirect('auth/login');
          }else {
            $eva = $this->db->get_where('user', ['email' => 
            $this->session->userdata('email')])->row_array();
            if($eva['role_id']==2) {
                redirect('Menu');
          }elseif ($eva['role_id']==1) {
            redirect('Admin');
          }
        }
    }
public function index(){
    $data['user'] = $this->db->get_where('user', ['email' => 
    $this->session->userdata('email')])->row_array();
    
    $this->load->view('partner/menupartner', $data);
}

public function add(){
    

    $this->form_validation->set_rules('shop_name', 'Shop Name', 'required|trim' );
    $this->form_validation->set_rules('shop_location', 'Shop Location', 'required|trim' );

    if($this->form_validation->run() == false) {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('partner/menupartner', $data);
    

    } else {
        $location = $this->input->post('location');
        $data = [
            'shop_name' => htmlspecialchars($this->input->post('shop_name', true)),
            'shop_location' => htmlspecialchars($this->input->post('shop_location', true)),
            'user_id' => $this->session->userdata('userid'),
            'location' => $location
        ];

        $this->db->insert('addlocation', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Location has been added!
      </div>');
        redirect('Partner');
    }
}

public function see(){
    $data['user'] = $this->db->get_where('user', ['email' => 
    $this->session->userdata('email')])->row_array();
    $user =$this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
        $t=$user['id'];
        $a=1;
        $data ['a'] = $a;
        
    $hasil = $this->db->query("SELECT * FROM addlocation WHERE user_id='$t'"); 
    //$eva = $this->db->query("SELECT * FROM addlocation WHERE user_id='$t' LIMIT 1"); 
    $leo = $this->db->get_where('addlocation', ['user_id' => 
    $t])->result_array();
    $data['hasil'] = $hasil;
    $data['leo'] = $leo;
   // $data['eva'] = $eva;
   //<input type="idlocation" id="id_location" name="id" value=""> 
    //print_r($hasil);
   $this->load->view('partner/see', $data);
}

public function eloc(){
    $this->form_validation->set_rules('shop_name', 'Shop Name', 'required|trim' );
    $this->form_validation->set_rules('shop_location', 'Shop Location', 'required|trim' );
    
    if($this->form_validation->run() == false) {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $user =$this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
        $t=$user['id'];
        $a=1;
        $data ['a'] = $a;
        
    $hasil = $this->db->query("SELECT * FROM addlocation WHERE user_id='$t'"); 
    $data['hasil'] = $hasil;
        $this->load->view('partner/eloc', $data);
    

    } else {
        
        $location = $this->input->post('location');
        $data = [
            
            'shop_name' => htmlspecialchars($this->input->post('shop_name', true)),
            'shop_location' => htmlspecialchars($this->input->post('shop_location', true)),
            'user_id' => $this->session->userdata('userid'),
            'location' => $location
        ];
        $id=$this->input->post('id');
        //$this->db->where('id', $id);
        $this->db->set('shop_name', $data);
        $this->db->set('shop_location', $data);
		$this->db->set('user_id', $$data);
		$this->db->set('location', $data);
		$this->db->where('id', $id);
        $this->db->update('addlocation', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Location has been edited!
      </div>');
    //   $this->load->view($data);
        redirect('Partner/see');
    
    }
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

public function apriva(){
    
    $this->form_validation->set_rules('class_name', 'Class Name', 'required|trim' );
    $this->form_validation->set_rules('class_price', 'Class Price', 'required|trim' );
    $user =$this->db->get_where('user', ['email' => 
    $this->session->userdata('email')])->row_array();
    $t=$user['id'];
    $a=1;
    $data ['a'] = $a;
    
$hasil = $this->db->query("SELECT * FROM addlocation WHERE user_id='$t'"); 
$data['hasil'] = $hasil;

   // $this->form_validation->set_rules('class_price', 'Class Price', 'required|trim|regex_match[/^[0-9]$/]');
 
 
    if($this->form_validation->run() == false) {
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
        $this->load->view('partner/apriva', $data);
    
    

    } else {
        $min = $this->input->post('min');
        $max = $this->input->post('max');
        $day = $this->input->post('day');
        $location = $this->input->post('location');
        
        $data = [
            'name' => htmlspecialchars($this->input->post('class_name', true)),
            'start_hours' => $min,
		'end_hours' => $max,
            'price' => htmlspecialchars($this->input->post('class_price', true)),
            'day' => $day,
            
            'location' => $location,
            'user_id'=> $this->session->userdata('userid')
        ];

        $this->db->insert('private', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
       Private class has been added!
      </div>');
        redirect('Partner/apriva');
    }
}

public function lpriva(){
    $data['user'] = $this->db->get_where('user', ['email' => 
    $this->session->userdata('email')])->row_array();
    $user =$this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
        $t=$user['id'];
        $a=1;
        $data ['a'] = $a;
        
    $hasil = $this->db->query("SELECT * FROM private WHERE user_id='$t'"); 
    $data['hasil'] = $hasil;
    //print_r($hasil);
   $this->load->view('partner/lpriva', $data);
}
public function deleteeloc(){
 

// menyimpan data id kedalam variabel
$id  = $_GET['id'];
// query SQL untuk insert data
$query= $this->db->query("DELETE from addlocation where id='$id'");
$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
Location has been deleted!
</div>');
redirect('Partner/see');

}

public function epriva(){
    $this->form_validation->set_rules('class_name', 'Class Name', 'required|trim' );
    $this->form_validation->set_rules('class_price', 'Class Price', 'required|trim' );
    $user =$this->db->get_where('user', ['email' => 
    $this->session->userdata('email')])->row_array();
    $t=$user['id'];
    $a=1;
    $data ['a'] = $a;
    
$hasil = $this->db->query("SELECT * FROM addlocation WHERE user_id='$t'"); 
$data['hasil'] = $hasil;

   // $this->form_validation->set_rules('class_price', 'Class Price', 'required|trim|regex_match[/^[0-9]$/]');
 
 
    if($this->form_validation->run() == false) {
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
            
$hasil = $this->db->query("SELECT * FROM addlocation WHERE user_id='$t'"); 
$data['hasil'] = $hasil;
        $this->load->view('partner/epriva', $data);
    
    

    } else {
        $min = $this->input->post('min');
        $max = $this->input->post('max');
        $day = $this->input->post('day');
        $location = $this->input->post('location');
        
        $data = [
            'name' => htmlspecialchars($this->input->post('class_name', true)),
            'start_hours' => $min,
		'end_hours' => $max,
            'price' => htmlspecialchars($this->input->post('class_price', true)),
            'day' => $day,
            
            'location' => $location,
            'user_id'=> $this->session->userdata('userid')
        ];
        $id=$this->input->post('id');
        //$this->db->where('id', $id);
        
        $this->db->set('location', $data);
        $this->db->set('day', $data);
        $this->db->set('price', $data);
        $this->db->set('end_hours', $data);
		$this->db->set('start_hours', $$data);
		$this->db->set('name', $data);
		$this->db->where('id', $id);
        $this->db->update('private', $data);
        
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
       Private class has been edited!
      </div>');
        redirect('Partner/lpriva');
    }
}
public function deleteepriva(){
    $id  = $_GET['id'];
// query SQL untuk insert data
$query= $this->db->query("DELETE from private where id='$id'");
$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
Private Class has been deleted!
</div>');
redirect('Partner/lpriva');
}

public function atrain(){
    $this->form_validation->set_rules('trainer_name', 'Trainer Name', 'required|trim' );
    $this->form_validation->set_rules('trainer_price', 'Trainer Price', 'required|trim' );

    $data['user'] = $this->db->get_where('user', ['email' => 
    $this->session->userdata('email')])->row_array();
    $user =$this->db->get_where('user', ['email' => 
    $this->session->userdata('email')])->row_array();
    $t=$user['id'];
    $hasil = $this->db->query("SELECT * FROM addlocation WHERE user_id='$t'"); 
$data['hasil'] = $hasil;
     
    
    
    if($this->form_validation->run() == false) {
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
        $this->load->view('partner/atrain', $data);
    
    

    } else {
        
        $sessions = $this->input->post('sessions');
        
        $location = $this->input->post('location');
        
        $data = [
            'name' => htmlspecialchars($this->input->post('trainer_name', true)),
            
            'price' => htmlspecialchars($this->input->post('trainer_price', true)),
            'sessions' => $sessions,
            
            'location' => $location,
            'user_id'=> $this->session->userdata('userid'),
            'image' => 'default.jpg'
        ];

        $this->db->insert('trainer', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
       Trainer has been added!
      </div>');
        redirect('Partner/atrain');
    }
}

public function ltrain(){
    $data['user'] = $this->db->get_where('user', ['email' => 
    $this->session->userdata('email')])->row_array();
    $user =$this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
        $t=$user['id'];
        $a=1;
        $data ['a'] = $a;
        
    $hasil = $this->db->query("SELECT * FROM trainer WHERE user_id='$t'"); 
    $data['hasil'] = $hasil;
    $this->load->view('partner/ltrain', $data);
}

public function etrain(){
    $this->form_validation->set_rules('trainer_name', 'Trainer Name', 'required|trim' );
    $this->form_validation->set_rules('trainer_price', 'Trainer Price', 'required|trim' );
    $data['user'] = $this->db->get_where('user', ['email' => 
    $this->session->userdata('email')])->row_array();
    $user =$this->db->get_where('user', ['email' => 
    $this->session->userdata('email')])->row_array();
    $t=$user['id'];
    $a=1;
    $data ['a'] = $a;
    
    $hasil = $this->db->query("SELECT * FROM addlocation WHERE user_id='$t'"); 
$data['hasil'] = $hasil;   
    
    
    if($this->form_validation->run() == false) {
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
            
$hasil = $this->db->query("SELECT * FROM addlocation WHERE user_id='$t'"); 
$data['hasil'] = $hasil;
$this->load->helper('form');
$this->load->view('partner/etrain', $data);
    
    

    } else {
        $sessions = $this->input->post('sessions');
        
        $location = $this->input->post('location');
        
        $data = [
            'name' => htmlspecialchars($this->input->post('trainer_name', true)),
            
            'price' => htmlspecialchars($this->input->post('trainer_price', true)),
            'sessions' => $sessions,
            
            'location' => $location,
            'user_id'=> $this->session->userdata('userid'),
           
        ];
        $upload_image = $_FILES['image']['name'];
if($upload_image) {
    
$config['allowed_types'] = 'gif|jpg|png';
$config['max_size']     = '2048';
$config['upload_path'] = './assets/img/';
//$config['max_width'] = '1024';
//$config['max_height'] = '768';
}

$this->load->library('upload', $config);

if($this->upload->do_upload('image')) {

    $old_image =$data['trainer']['image'];
    if($old_image != 'default.jpg') {
        unlink(FCPATH. 'assets/img/'. $old_image);
    }

    $new_image= $this->upload->data('file_name');
    $this->db->set('image', $new_image);

}else{
    echo $this->upload->display_errors();
}

        $id=$this->input->post('id');
        //$this->db->where('id', $id);
        
        $this->db->set('location', $data);
        $this->db->set('sessions', $data);
        $this->db->set('price', $data);
      
		$this->db->set('name', $data);
		$this->db->where('id', $id);
        $this->db->update('trainer', $data);
        
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
       Trainer has been edited!
      </div>');
        redirect('Partner/ltrain');
    }

}

public function deleteetrain(){
    $id  = $_GET['id'];
// query SQL untuk insert data
$query= $this->db->query("DELETE from trainer where id='$id'");
$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
Trainer has been deleted!
</div>');
redirect('Partner/ltrain');
}


}