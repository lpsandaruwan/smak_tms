<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class AddAssistant extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('addempa');
 }

 function index()
 {
    $this->load->library('form_validation');
    if($this->session->userdata('logged_in'))
    {
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
     
        //$this->load->helper('form');
        //$this->load->library('form_validation');
        //$this->form_validation->set_error_delimeters('<div class="error"', '</div>');
        $this->form_validation->set_rules('id', 'Employee ID', 'required|min_length[5]|max_legth[10]');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('nic', 'NIC', 'required');
        $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
        $this->form_validation->set_rules('phone', 'Telephone', 'required');
     
        if($this->form_validation->run() == FALSE){
            $this->load->view('addassistant_view');
    }
     
    else{
        if(isset($_POST)){
            $data=array(
                    'id' => $this->input->post('id'),
                    'fullname' => $this->input->post('name'),
                    'nic' => $this->input->post('nic'),
                    'dob' => $this->input->post('dob'),
                    'address' => $this->input->post('address'),
                    'tellno' => $this->input->post('phone'),
                    'type' => 'assistant'
        );
     
        $this->addempa->addassistant($data);
        $this->load->view('addassistant_view');
        unset($_POST);
    }
     
   }}
   
   else
   {
    redirect('login', 'refresh');
   }
}

function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home', 'refresh');
 }

}

?>