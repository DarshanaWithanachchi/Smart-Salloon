<?php 

class Validation extends CI_Controller
{
	function addAdmin()
	{
		$this->form_validation->set_rules('username', 'User Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[admin.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('cpassword', 'Confirm password', 'required|matches[password]');


		 if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('register');
                }
                else
                {
                        $this->load->model('Model_User');
                        $response = $this->Model_User->addAdmin();

                        if ($response) {
                        	$this->session->set_flashdata('msg','Register Successful...');
                        	redirect('Home/Login');
                        }
                }

	}




	function validateReception()
	{
		 $this->form_validation->set_rules('fname', 'First Name', 'required');
		 $this->form_validation->set_rules('lname', 'Last Name', 'required');
		 $this->form_validation->set_rules('uname', 'User Name', 'required');
		 $this->form_validation->set_rules('pnumber', 'Phone Numeber', 'required');

		 if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('addReception');
                }
                else
                {
                        $this->load->model('Model_User');
                        $this->Model_User->insertReception();
                }
	}


}

 ?>