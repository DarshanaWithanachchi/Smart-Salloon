<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function LoginUser(){
		$this->form_validation->set_rules('username', 'User Name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');


		if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('login');
                }
                else
                {
                        $this->load->model('Model_User');
                        $result = $this->Model_User->LoginUser();

                        if ( $result != FALSE) {
                                $this->load->model('Model_User');
                                $res = $this->Model_User->LoginUserPass();

                                if ($res != FALSE) {
                                        $user_data = array(
                                                'user_id'=>$res->id,
                                                'uname'=>$res->username,
                                                'email'=>$res->email,
                                                'type'=>$res->type,
                                                'username'=>$res->uname,
                                                'loggedin'=>TRUE
                                        ); 

                                        $this->session->set_userdata($user_data);

                                        $type = $this->session->userdata('type');

                                        if ($type != 'Admin') {
                                               $this->session->set_userdata('$user_data');   
                                               $this->session->set_flashdata('welcome','Welcome Back');
                                               redirect('Home/HomeReception');   
                                        }
                                        else{
                                               $this->session->set_userdata('$user_data');   
                                               $this->session->set_flashdata('welcome','Welcome Back');
                                               redirect('Home/index');  
                                        }

                                }
                                else{
                                        $this->session->set_flashdata('msg',"Wrong  Password");
                                        redirect('Home/Login');    
                                }
                        }

                        else{
                                 $this->session->set_flashdata('msg',"Wrong User Name");
                                 redirect('Home/Login');
                        }
                }
	}

    public function LogoutUser(){
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('type');
        $this->session->unset_userdata('loggedin');
        redirect('Home/Login');
    }

}

 ?>