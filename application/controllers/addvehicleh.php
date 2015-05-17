<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class AddVehicleH extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('addvehh');
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
        $this->form_validation->set_rules('vid', 'Vehicle number', 'required|min_length[5]|max_legth[10]');
        $this->form_validation->set_rules('rid', 'Registration number', 'required');
        $this->form_validation->set_rules('eid', 'Engine number', 'required');
        $this->form_validation->set_rules('make', 'Make', 'required');
        $this->form_validation->set_rules('vlexp', 'License expiry date', 'required');
        $this->form_validation->set_rules('ftype', 'Fuel type', 'required');
        //$this->form_validation->set_rules('model', 'Model type', 'required');
        $this->form_validation->set_rules('ownid', 'Owner ID', 'required');
        //$this->form_validation->set_rules('oname', 'Owner name', 'required');
        $this->form_validation->set_rules('oaddress', 'Owner address', 'required');
        $this->form_validation->set_rules('ophone', 'Telephone number', 'required');
        $this->form_validation->set_rules('onic', 'Owner NIC', 'required');
     
        if($this->form_validation->run() == FALSE){
            $this->load->view('addvehicleh_view');
        }
     
        else{
        if(isset($_POST)){
            $vdata = array(
                    'vid' => $this->input->post('vid')
                    );
            $hdata = array(
                    'id' => $this->input->post('rid'),
                    'vid' => $this->input->post('vid'),
                    'ownid' => $this->input->post('ownid')
                    );
            $odata = array(
                    'oid' => $this->input->post('ownid'),
                    'name' => $this->input->post('oname'),
                    'address' => $this->input->post('oaddress'),
                    'phone' => $this->input->post('ophone'),
                    'nic' => $this->input->post('onic')
                    );
     
        $this->addvehh->addvehicleh($vdata, $hdata, $odata);
        unset($_POST);
        $this->load->view('home_view');
        }
    
     
   }
   }
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