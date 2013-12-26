<?php
class Surveys_model extends CI_Model {

    public function __construct() {
        
        $this->load->database();        
        
    }
    
    // Save user info
    public function set_users() {
        
        $this->load->helper('url');
        
        $data = array(
            'first_name' => $this->input->post('txt_fname'),
            'last_name' => $this->input->post('txt_lname'),
            'username' => $this->input->post('txt_uname'),
            'password' => $this->input->post('txt_password'),
            'email' => $this->input->post('txt_email')
        );
        
        return $this->db->insert('users', $data);
        
    }
    
    // Checks if the user exists with the username
    public function get_users() {
        
        //$this->load->helper('url');
        $username = $this->input->post('txt_uname');
        
        $query = $this->db->get_where('users', array('username' => $username));
        return $query->row_array();
        
    }
    
    public function login() {
        
        $email = $this->input->post('txt_email');
        $password = $this->input->post('txt_password');
        
        $query = $this->db->get_where('users', array('email' => $email,'password' => $password));
        return $query->row_array();
        
    }
    
}