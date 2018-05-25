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


	public function Login()
	{
		$this->load->view('login.php');
	}

	public function AddReception()
	{
		$this->load->view('addReception.php');
	}

	public function AddCustomer()
	{
		$this->load->view('addCustomer.php');
	}

	public function ModelReception()
	{
		$this->load->view('Model_User.php');
	}


	//Add Style
	public function AddHairStyleMale()
	{
		$this->load->view('addHairStyle.php');
	}



}
