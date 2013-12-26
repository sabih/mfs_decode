<?php
 //we need to call PHP's session object to access it through CI
/*
class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        //session_start();
        if ( ! $this->session->userdata('username') ) redirect('surveys/login');
    }
    
    function index()
    {
        if($this->session->userdata('username'))
        {
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
        //session_destroy();
        //$this->session->sess_destroy();
        redirect('home');
        
    }
*/
}
