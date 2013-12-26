<?php

class Surveys extends CI_Controller {
    
    public function __construct()
    {
        
        parent::__construct();
        $this->load->library('session');
        $this->load->model('surveys_model');
        $this->load->helper('url');
        //session_start();
        
        // Uncomment the below 4 lines to remove cache
        
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');       
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
        
        //$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        //$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        //$this->output->set_header('Cache-Control: no-cache');
        
    }

    public function login() {
        
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
        $data['title'] = ucfirst('login'); // Capitalize the first letter
        
        $this->load->view('templates/header', $data);
        $this->load->view('surveys/login', $data);
        
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
            redirect("surveys/home");
            
        } else {
            
            redirect("surveys/login");
            
        }
        
    }
    
    function home()
    {
        if($this->session->userdata('username'))
        {
            $this->load->helper('form');
            $base_url = $this->config->base_url();
            $username = $this->session->userdata('username');
            //echo $username;exit;
            $data['username'] = $username;
            $data['base_url'] = $base_url;
            $data['title'] = ucfirst('home'); // Capitalize the first letter
            $this->load->view('templates/header', $data);
            $this->load->view('surveys/home', $data);
        }
        else
        {
            
            // This destroys the session created when user clicks back button after logout
            $this->session->sess_destroy();
            // If no session, redirect to login page
            redirect('surveys/login');
            
        }
    }
    
    function logout()
    {
        $this->session->unset_userdata('username');
        redirect('surveys/home');
        
    }
    
    public function details() {
        
        $base_url = $this->config->base_url();
        $data['base_url'] = $base_url;
        $data['title'] = ucfirst('details'); // Capitalize the first letter
        $this->load->view('templates/header', $data);
        $this->load->view('surveys/details', $data);
        
    }
    
}