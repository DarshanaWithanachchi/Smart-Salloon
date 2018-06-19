<?php 

class Validation extends CI_Controller
{
	function addAdmin()
	{
		$this->form_validation->set_rules('username', 'User Name', 'required|is_unique[login.uname]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[login.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('cpassword', 'Confirm password', 'required|matches[password]');
		$this->form_validation->set_rules('type', 'Type', 'required');


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
        $this->form_validation->set_rules('id', 'Id Number', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('address1', 'Address 01', 'required');
        $this->form_validation->set_rules('pnumber', 'Phone Number', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('uname', 'User Name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');

		 if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('addReception');
                }
                else
                {
                        $this->load->model('Model_User');
                        $response = $this->Model_User->insertReception();

                         if ($response) {
                                $this->session->set_flashdata('msg','Update Post Success...');
                                redirect('Home/AddReception','refresh');
                        }
                }
	}

    public function updateReception($id)
    {
        $this->form_validation->set_rules('fname', 'First Name');
        $this->form_validation->set_rules('lname', 'Last Name');
        $this->form_validation->set_rules('id', 'Id Number');
        $this->form_validation->set_rules('gender', 'Gender');
        $this->form_validation->set_rules('address1', 'Address 01', 'required');
        $this->form_validation->set_rules('pnumber', 'Phone Number');
        $this->form_validation->set_rules('email', 'Email', 'valid_email');
        $this->form_validation->set_rules('uname', 'User Name');
        $this->form_validation->set_rules('password', 'Password');
        $this->form_validation->set_rules('type', 'Type', 'required');

                 if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('updateReception');
                }
                else
                {
                        $this->load->model('Model_User');
                        $response = $this->Model_User->updateReception($id);

                        if ($response) {
                                $this->session->set_flashdata('msg','Update Post Success...');
                                redirect('Home/AddReception','refresh');
                        }
                }
    }




    function validateCustomer()
    {
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('id', 'Id Number', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('birthday', 'Birth Day', 'required');
        $this->form_validation->set_rules('age', 'Age', 'required');
        $this->form_validation->set_rules('address1', 'Address', 'required');
        $this->form_validation->set_rules('pnumber', 'Phone Number', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[addcustomer.email]');
        $this->form_validation->set_rules('uname', 'User Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

         if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('addCustomer');
                }
                else
                {
                        $this->load->model('Model_User');
                        $this->Model_User->insertCustomer();
                }
    }


}

 ?>