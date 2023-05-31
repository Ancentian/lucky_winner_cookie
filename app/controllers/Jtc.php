<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jtc extends CI_Controller {

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
        $this->load->view('home/step_1');
    }

    public function userPhone($did = 0)
    {
        if($did == 0){
            redirect('home/index');
        }
        if(!empty($this->input->post())){
            $input = $this->input->post();
            
            
            // Remove any non-numeric characters from the phone number
            $phone_number = preg_replace("/[^0-9]/", "", $input['phone']);
            
            // Check if the phone number is a valid Singapore phone number
            // if(!preg_match("/^65[689]\\d{7}$/", $phone_number)) {
            //   $this->session->set_flashdata('error','Please enter a valid Singapore number!');
            //     redirect("home/userphone/$did");
            // } 
            
            $user = $this->home_model->create_user($input);
            // $user = 0;
            if($user > 0){
                $this->session->set_userdata('user_id',$user);
                
                redirect("home/notification/$did");
            }else{
                $this->session->set_flashdata('error','Something went wrong, please try a different number!');
                redirect("home/userphone/$did");
            }
        }
        $this->data['did'] = $did;
        $this->load->view('home/userPhone',$this->data);
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
        $randomString = $this->generate_random_string(6);
        //var_dump($randomString);die;
    }
    
}
