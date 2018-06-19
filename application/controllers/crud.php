<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller{


public function insertData()
{

		$this->form_validation->set_rules('status', 'Product Type', 'required');
       // $this->form_validation->set_rules('image', 'Image', 'required');
        $this->form_validation->set_rules('pro_name', 'Product Name', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('ingredients', 'Ingredients', 'required');
        $this->form_validation->set_rules('manufactured', 'Consumer Care', 'required');
		$this->form_validation->set_error_delimiters('<span class = "text-danger">','</span>');

        $config['upload_path'] = './assets/uploads';
        $config['allowed_types'] = '*';
        $this->load->library('upload',$config);
        $this->upload->do_upload('file_name');
        $file_name=$this->upload->date();
        $data=array('file_name'=>$file_name['file_name']);

		 if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('addDetails');
                }
                else
                {
                        $this->load->model('Model_User');
                        $response = $this->Model_User->insertPost();

                        if ($response) {
                        	$this->session->set_flashdata('msg','Add Post Success...');
                        	redirect('Home/AddDetails','refresh');
                        }
                }
}

public function updateData($id)
{
        $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('description', 'Description', 'required');
                $this->form_validation->set_rules('image', 'Image', 'required');
                $this->form_validation->set_rules('title', 'Title', 'required');


                 if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('updateDetails');
                }
                else
                {
                        $this->load->model('Model_User');
                        $response = $this->Model_User->updatePost($id);

                        if ($response) {
                                $this->session->set_flashdata('msg','Add Post Success...');
                                redirect('Home/AddDetails','refresh');
                        }
                }
}

}

 ?>