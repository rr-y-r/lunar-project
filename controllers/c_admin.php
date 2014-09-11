<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Admin extends CI_Controller {
    public function __construct(){
        parent::__construct();
        
        if (!$this->is_logged_in()) {
            redirect('c_adminlogin'); //if not login, redirect to login controller
        }
    }
    
    public function index(){
        $this->load->view('v_admin'); //set view for index controller
    }

    private function is_logged_in(){
        return $this->session->userdata('is_admin'); //json response to get login data "if admin"
    }

    private function json_response($successful, $message){ //output response
        echo json_encode(array(
            'isSuccessful' => $successful,
            'message' => $message
        )); 
    }
}
