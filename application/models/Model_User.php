<?php 

class Model_User extends CI_Model
{
	
	function addAdmin()
	{
		$data = array(
			'username' => $this->input->post('username',TRUE),
			'email' => $this->input->post('email',TRUE),
			'password' => sha1($this->input->post('password',TRUE))
		);

		return $this->db->insert('admin',$data);
	}


	function insertReception()
	{
		$data = array(
			'fname' => $this->input->post('fname',TRUE),
			'lname' => $this->input->post('lname',TRUE),
			'uname' => $this->input->post('uname',TRUE),
			'address1' => $this->input->post('address1',TRUE),
			'address2' => $this->input->post('address2',TRUE),
			'address3' => $this->input->post('address3',TRUE),
			'pnumber' => $this->input->post('pnumber',TRUE)
		);

		$this->db->insert('addreception',$data);
	}
}



 ?>