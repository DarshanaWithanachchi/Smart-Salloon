<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home.php');
	}

	public function Register()
	{
		$this->load->view('register.php');
	}

	public function AddReception()
	{
		$this->load->model('Model_User');
		$posts=$this->Model_User->getReception();
		$this->load->view('addReception.php',['posts' => $posts]);
	}

	public function AddCustomer()
	{
		$this->load->model('Model_User');
		$posts=$this->Model_User->getCustomer();
		$this->load->view('addCustomer.php',['posts' => $posts]);
	}

	public function ModelReception()
	{
		$this->load->view('Model_User.php');
	}


	public function updateReception($id)
	{
		$this->load->model('Model_User');
		$post=$this->Model_User->getSinglePostsReception($id);
		$this->load->view('updateReception',['post'=>$post]);
	}

	public function deleteReception($id)
	{
		$this->load->model('Model_User');
		if($this->Model_User->deleteReception($id)){
			$this->session->set_flashdata('msg','Post Delete Successfully...'); 
		}
		else{
			$this->session->set_flashdata('msg','Failed to Delete Post...');
		}
		return redirect('Home/AddReception','refresh');
	}



	//Add Details

	public function AddDetails()
	{
		$this->load->model('Model_User');
		$posts=$this->Model_User->getPosts();
		$this->load->view('addDetails',['posts' => $posts]);
	}

	public function updateDetails($id)
	{
		$this->load->model('Model_User');
		$post=$this->Model_User->getSinglePosts($id);
		$this->load->view('updateDetails',['post'=>$post]);
	}

	public function delete($id)
	{
		$this->load->model('Model_User');
		if($this->Model_User->delete($id)){
			$this->session->set_flashdata('msg','Post Delete Successfully...'); 
		}
		else{
			$this->session->set_flashdata('msg','Failed to Delete Post...');
		}
		return redirect('Home/AddDetails','refresh');
	}



    //View

	public function ViewReception($id)
	{	
		$this->load->model('Model_User');
		$post=$this->Model_User->getSinglePostsReception($id);
		$this->load->view('viewReception.php',['post'=>$post]);
	}


	public function ViewCustomer($id)
	{	
		$this->load->model('Model_User');
		$post=$this->Model_User->getSinglePostsCustomer($id);
		$this->load->view('viewCustomer.php',['post'=>$post]);
	}



	//Login part
	public function Login()
	{
		$this->load->view('login.php');
	}


	public function HomeReception()
	{
		$this->load->view('homeReception.php');
	}

	


}
