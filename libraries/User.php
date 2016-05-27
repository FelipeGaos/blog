<?php

class User{
  //Init DB Variable
	private $db;

	/*
	 *	Constructor
	 */
	 public function __construct(){
		$this->db = new Database;
	 }

	/*
	 * Register User
	 */
	public function register($data){
			//Insert Query
			$name = $data['name'];
			$email =  $data['email'];
			$username = $data['username'];
			$password = $data['password'];
			$query = "insert into users (name, email, username, password) values ('$name', '$email', '$username', '$password')";
			$result = $this->db->insert($query);
			//Execute
			if($result){
				return true;
			} else {
				return false;
			}
			//echo $this->db->lastInsertId();
	}
	public function nameAvailable($data){
		$name = $data['name'];
		$query = "select * from users where name = $name";
		$result = $this->db->select($query);
		if($result){
			return false;
		}
		else{
			return true;
		}
	}

  /*
	 * User Login
	 */
	public function login($username, $password){

		$result = $this->db->select("select username, id, name from users where username = '$username' and password = '$password'");
		$row = $result->fetch_assoc();
		//Check Rows
		if($result->num_rows > 0){
			$this->setUserData($row);
			return true;
		} else {
			return false;
		}
	}
	/*
	 * Upload User Avatar
	 */
	public function uploadImage(){
			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["image"]["name"]);
			$extension = end($temp);
			if ((($_FILES["image"]["type"] == "image/gif")
					|| ($_FILES["image"]["type"] == "image/jpeg")
					|| ($_FILES["image"]["type"] == "image/jpg")
					|| ($_FILES["image"]["type"] == "image/pjpeg")
					|| ($_FILES["image"]["type"] == "image/x-png")
					|| ($_FILES["image"]["type"] == "image/png"))
					&& ($_FILES["image"]["size"] < 2000000)
					&& in_array($extension, $allowedExts)) {
				if ($_FILES["image"]["error"] > 0) {
					redirect('register.php', $_FILES["image"]["error"], 'error');
				} else {
					if (file_exists("images" . $_FILES["image"]["name"])) {
						redirect('register.php', 'File already exists', 'error');
					} else {
						move_uploaded_file($_FILES["image"]["tmp_name"],
						"images" . $_FILES["image"]["name"]);

						return true;
					}
				}
			} else {
				redirect('register.php', 'Invalid File Type!', 'error');
			}
		}
	/*
	 * Set User Data
	 */
	private function setUserData($row){

		$_SESSION['is_logged_in'] = true;
		$_SESSION['user_id'] = $row['id'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['name'] = $row['name'];
	}

	/*
	 * User Logout
	*/
	public function logout(){
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user_id']);
		unset($_SESSION['username']);
		unset($_SESSION['name']);
		return true;
	}


}
