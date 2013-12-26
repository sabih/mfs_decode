<?php

class Surveys extends CI_Controller {
    
    public function __construct()
    {
        
        parent::__construct();
        $this->load->model('surveys_model');
        // This creates session on page load
        $this->load->library('session');
        $this->load->helper('url');
        
    }

    public function login($page = 'index') {
        
        $this->load->helper('form');
        if ( $this->input->post( 'btn_register' )) {
            
            // check if this username exist
            $username = $this->surveys_model->get_users();
            
            // if new username then save this user
            if(empty($username)) {
                $this->surveys_model->set_users();
            }
            
        }        
        
        // This destroys the session after logout
        $this->session->sess_destroy();
        
        $data['base_url'] = $this->config->base_url();
        $data['title'] = ucfirst($page); // Capitalize the first letter
        
        $this->load->view('templates/header', $data);
        $this->load->view('surveys/'.$page, $data);
        
    }
    
    public function register() {
        
        $this->load->helper('form');
        
        $data['base_url'] = $this->config->base_url();
        $data['title'] = ucfirst('register'); // Capitalize the first letter
        
        $this->load->view('templates/header', $data);
        $this->load->view('surveys/register');
        
    }
    
    public function verify_login(){
        
        // check if this username exist
        $username = $this->surveys_model->login();
        
        // If user details match in dB then redirect to home page else login page
        if(!empty($username)){
            
            $this->session->set_userdata('username', $username['username']);
            redirect("home");
            
        } else {
            
            redirect("surveys/login");
            
        }
        
    }
    
}