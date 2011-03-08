<?php 

	
	include_once('Db.class.php');
	
	class user {
	
		private $db;
		private $usr = array();
	
		public function __construct () {
			$this->db = new database;
		}
		
		public function __destruct () {
			$this->db = null;
		}
		
		public function check_login() {
			if (isset($_POST['username']) && isset($_POST['password'])) {
			
				$result = $this->db->query("SELECT * FROM users WHERE username = '" . $_POST['username'] . "' AND password = '" . md5($_POST['password']) . "'");
				
				if (count($result) != 0) {
					unset($_POST['username']);
					unset($_POST['password']);
					$_SESSION['username'] = $result[0]['username'];
					$_SESSION['password'] = $result[0]['password'];
					$_SESSION['user_id'] = $result[0]['id'];
					$this->create_log($result[0]['username'], $result[0]['id']);
				} else {
					$this->logout();
				}
			
			}
		}
		
		public function check_if_logged() {
			if(isset($_SESSION['username'])) {
				$result = $this->db->query("SELECT * FROM users WHERE username = '" . $_SESSION['username'] . "' AND password = '" . $_SESSION['password'] . "'");
				if (count($result) == 0) {
					$this->logout();
				}
			} else {
				$this->logout();
			}
	
		}
    
		
		public function logout() {
			session_unset();
			session_destroy();
			$_SESSION = array();
			header('Location: login.php');
		}
		
		public function upload_movie($link,$user,$name) {
			$this->db->exec("INSERT INTO posts (link,user_id, name, deleted) VALUES ('$link','$user','$name',0)");
		}
		
		public function create_log($usr_name, $usr_id) {
			$this->db->exec("INSERT INTO logs_login (username, user_id) VALUES ('$usr_name', '$usr_id')");
		}
	
		
	}
	
?>