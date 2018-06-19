<?php 

class Model_User extends CI_Model
{
	
	function addAdmin()
	{
		$data = array(
			'username' => $this->input->post('username',TRUE),
			'email' => $this->input->post('email',TRUE),
			'password' => sha1($this->input->post('password',TRUE)),
			'type' => $this->input->post('type',TRUE)
		);

		return $this->db->insert('login',$data);
	}


	function insertReception()
	{
		$data = array(
			'fname' => $this->input->post('fname',TRUE),
			'lname' => $this->input->post('lname',TRUE),
			'idnumber' => $this->input->post('id',TRUE),
			'gender' => $this->input->post('gender',TRUE),
			'address1' => $this->input->post('address1',TRUE),
			'address2' => $this->input->post('address2',TRUE),
			'address3' => $this->input->post('address3',TRUE),
			'pnumber' => $this->input->post('pnumber',TRUE),
			'email' => $this->input->post('email',TRUE),
			'uname' => $this->input->post('uname',TRUE),
			'password' => sha1($this->input->post('password',TRUE)),
			'type' => $this->input->post('type',TRUE)
		);

		$this->db->insert('users',$data);
	}

	public function getReception(){
		$query = $this->db->get('users');
		if ($query->num_rows()>0) {
			return $query->result();
		}
	}


	public function getSinglePostsReception($id){
		$query = $this->db->get_where('users',array('id' =>$id));
		if ($query->num_rows()>0) {
			return $query->row();
		}
	}

	public function getSinglePostsCustomer($id){
		$query = $this->db->get_where('addcustomer',array('id' =>$id));
		if ($query->num_rows()>0) {
			return $query->row();
		}
	}


	public function updateReception($id){
			$data = array(
			'fname' => $this->input->post('fname',TRUE),
			'lname' => $this->input->post('lname',TRUE),
			'idnumber' => $this->input->post('id',TRUE),
			'gender' => $this->input->post('status',TRUE),
			'address1' => $this->input->post('address1',TRUE),
			'address2' => $this->input->post('address2',TRUE),
			'address3' => $this->input->post('address3',TRUE),
			'pnumber' => $this->input->post('pnumber',TRUE),
			'email' => $this->input->post('email',TRUE),
			'uname' => $this->input->post('uname',TRUE),
			'password' => sha1($this->input->post('password',TRUE)),
			'type' => $this->input->post('type',TRUE)
		);

		return $this->db->where('id',$id)->update('users',$data);
	}

	public function deleteReception($id){
		return $this->db->delete('users',['id'=>$id]);
	}




	function insertCustomer()
	{
		$data = array(
			'fname' => $this->input->post('fname',TRUE),
			'lname' => $this->input->post('lname',TRUE),
			'idnumber' => $this->input->post('id',TRUE),
			'gender' => $this->input->post('gender',TRUE),
			'birthday' => $this->input->post('birthday',TRUE),
			'age' => $this->input->post('age',TRUE),
			'address1' => $this->input->post('address1',TRUE),
			'address2' => $this->input->post('address2',TRUE),
			'address3' => $this->input->post('address3',TRUE),
			'pnumber' => $this->input->post('pnumber',TRUE),
			'email' => $this->input->post('email',TRUE),
			'uname' => $this->input->post('uname',TRUE),
			'password' => sha1($this->input->post('password',TRUE))
		);

		$this->db->insert('addcustomer',$data);
	}

	public function getCustomer(){
		$query = $this->db->get('addcustomer');
		if ($query->num_rows()>0) {
			return $query->result();
		}
	}



	//add Details
	function insertPost()
	{ 
			$data = array(
			'pro_type' => $this->input->post('status',TRUE),
		//	'image' => $this->input->post('image',TRUE),
			'pro_name' => $this->input->post('pro_name',TRUE),
			'description' => $this->input->post('description',TRUE),
			'ingredients' => $this->input->post('ingredients',TRUE),
			'manufactured' => $this->input->post('manufactured',TRUE),
			'file_name' =>$this->upload->data('file_name')
		);

		return $this->db->insert('product',$data);
	}

	public function getPosts(){
		$query = $this->db->get('product');
		if ($query->num_rows()>0) {
			return $query->result();
		}
	}

	public function getSinglePosts($id){
		$query = $this->db->get_where('product',array('id' =>$id));
		if ($query->num_rows()>0) {
			return $query->row();
		}
	}

	public function updatePost($id){
			$data = array(
			'title' => $this->input->post('title',TRUE),
			'image' => $this->input->post('image',TRUE),
			'product_type' => $this->input->post('ptype',TRUE),
			'user_type' => $this->input->post('utype',TRUE),
			'benifits' => $this->input->post('benifits',TRUE),
			'how_use' => $this->input->post('how_use',TRUE),
			'ingredients' => $this->input->post('ingredients',TRUE),
			'manufactured' => $this->input->post('manufactured',TRUE),
			'consumer_care' => $this->input->post('consumer_care',TRUE)
		);

		return $this->db->where('id',$id)->update('product',$data);
	}

	public function delete($id){
		return $this->db->delete('product',['id'=>$id]);
	}

//login

/*	function LoginUser(){
		$username=$_POST['username'];
        $password=sha1($_POST['password']);
		
		$this->db->select('*');
		$this->db->from('admin');		

		$this->db->where('username',$uname);		
		$this->db->where('password',$password);

		$respond = $this->db->get('admin');

		if ($respond->num_rows()!=1) {
			print_r($respond);
			die();
		}
		else{

			echo "err";
			die();
		}


	}*/

	public function LoginUser(){
			$username = $this->input->post('username');
			

			$this->db->where('uname',$username);

			$respond = $this->db->get('users');

			if ($respond->num_rows()==1) {
				return $respond->row(0);
				/*$password = sha1($this->input->post('password'));
				$username = $this->input->post('username');

			    $this->db->where('username',$username);
				$this->db->where('password',$password);

				$res = $this->db->get('login');

				if ($res->num_rows()==1) {
					return $res->row(0);
					}
				else{
					echo "unsuccess";
				}*/

			}
			else{  
				return FALSE;
			}
	}

	public function LoginUserPass(){
				$password = sha1($this->input->post('password'));
				$username = $this->input->post('username');

			    $this->db->where('uname',$username);
				$this->db->where('password',$password);

				$res = $this->db->get('users');

				if ($res->num_rows()==1) {
					return $res->row(0);
					}
				else{
					return FALSE;
				}
	}

	public function File_upload($data){
		$qry = $this->db->insert('product',$data);
		if ($qry) {
			echo("File upload Success");
		}else{
			echo("upload error");
		}
	}
}



 ?>