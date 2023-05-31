<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }

    public function index()
    {
        $this->load->view('home/qrcode');
    }

    public function step_1()
    {
        $this->data['serial'] = $this->input->cookie('JTC_serial');
        if(!empty($this->data['serial'])){
            redirect('home/step_2');
        }
        $this->load->view('home/step_1');
    }

    public function step_2()
    {
        $this->data['serial'] = $this->input->cookie('JTC_serial');
        if(empty($this->data['serial'])){
            redirect('home/step_1');
        }
        $this->load->view('home/step_2', $this->data);
    }

    public function step_3()
    {
        $this->data['serial'] = $this->input->cookie('JTC_serial');
        if(empty($this->data['serial'])){
            redirect('home/step_1');
        }
        $this->load->view('home/step_3');
    }

    public function step_4()
    {
        $this->data['serial'] = $this->input->cookie('JTC_serial');
        if(empty($this->data['serial'])){
            redirect('home/step_1');
        }
        $this->load->view('home/step_4');
    }

    public function step_5()
    {
        $this->data['serial'] = $this->input->cookie('JTC_serial');
        if(empty($this->data['serial'])){
            redirect('home/step_1');
        }
        $this->load->view('home/step_5');
    }

    public function userPhone($did = 0)
    {
        $this->load->view('home/index');     
    }

    public function generate_random_string($length) {
            $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $string = '';
        
            do {
                $string = '';
                for ($i = 0; $i < $length; $i++) {
                    $randomIndex = mt_rand(0, strlen($characters) - 1);
                    $randomChar = $characters[$randomIndex];
                    $string .= $randomChar;
                }
            } while (!preg_match('/[A-Z]/', $string) || !preg_match('/[0-9]/', $string));
        
            return $string;
    }

    public function registerUser()
    {
        $forminput = $this->input->post();
        $serial = $this->generate_random_string(6);

        $this->form_validation->set_rules('phone_no', 'Phone Number', 'required|is_unique[users.phone_no]'); 
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error-msg', validation_errors());
            redirect(base_url('home/step_1'));
        } else {
            $data = array(
                'phone_no' => $this->input->post('phone_no'),
                'serial_no ' => $serial,
            );
            $this->home_model->create_user($data); 
            $cookie = array(
                'name'   => 'serial',
                'value'  => $serial,
                'expire' => 360000, // Set cookie for 1 hour
                'secure' => TRUE
            );
            
            // Set the cookie
            $this->input->set_cookie($cookie);
            
            // Set a flash message using session library
            $this->session->set_flashdata('success', 'User Added Successfully');
            
            // Redirect to the next page with the cookie value
            redirect('home/step_2');
            
        }
    }
    
}
