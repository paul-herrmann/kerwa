<?php
	
	include_once('Db.class.php');
	
	class posts {
		
		private $db;
		
		public function __construct() {
			
			$this->db = new database;
			
		}
		
		public function __destruct() {
		
			$this->db = null;
			
		}
		
		public function posts_number() {
			return $this->db->query("SELECT COUNT(*) FROM posts WHERE deleted=0");
		}
		
		public function img_number() {
			return $this->db->query("SELECT COUNT(*) FROM img WHERE deleted=0");
		}
		
		public function get_all() {
			return $this->db->query("SELECT * FROM posts WHERE deleted=0 ORDER BY date DESC");
		}
		
		public function get_all_imgs() {
			return $this->db->query("SELECT * FROM img WHERE deleted=0 ORDER BY date DESC");
		}
		
		public function post_delete($id) {
			$this->db->exec("UPDATE posts SET deleted=1 WHERE id='$id'");
			$this->db->exec("UPDATE posts SET delete_date=NOW() WHERE id='$id'"); 
		}
		
		public function img_delete($id) {
			$this->db->exec("UPDATE img SET deleted=1 WHERE id='$id'");
			$this->db->exec("UPDATE img SET delete_date=NOW() WHERE id='$id'"); 
		}
		
		
		public function get_post($id) {
			return $this->db->query("SELECT * FROM posts WHERE id='$id'");
		}
		
		public function get_img($id) {
			return $this->db->query("SELECT * FROM img WHERE id='$id'");
		}
		
		public function get_posts($base, $page) {
			
			if ($page == null) {
			$page = 1;
			}
			$pagenum = $base*($page-1);
			$result = $this->db->query("SELECT * FROM posts WHERE deleted=0 ORDER BY date DESC LIMIT " . $pagenum . "," . $base);
			
			return $result;
			
		}
		
		public function get_imgs($base, $page) {
			
			if ($page == null) {
			$page = 1;
			}
			$pagenum = $base*($page-1);
			$result = $this->db->query("SELECT * FROM img WHERE deleted=0 ORDER BY date DESC LIMIT " . $pagenum . "," . $base);
			
			return $result;
			
		}
		
		public function upload_img($filename,$type,$error,$tmp_name) {
		
			if ($filename != "") {
			if (($type == "image/gif") || ($type == "image/jpeg") || ($type == "image/pjpeg") || ($type == "image/png")) {
				if ($error > 0)	{
					$_SESSION['msg'] = "Error: " . $error . "<br />";
				} else {
			
						if (file_exists("imgz/" . $filename)) {
						$_SESSION['msg'] = "Istnieje juz plik o podanej nazwie";header("location:admin.php");exit;
					} else {
					
						$name = $_POST['name'];
						$user_id = $_SESSION['user_id'];
						$this->db->exec("INSERT INTO img (name,user_id) VALUES ('$name','$user_id')");
						$result = $this->db->query("SELECT * FROM img ORDER BY date DESC LIMIT 1");
						$id = $result[0]['id'];
						$link = md5($id) . $filename;
						$this->db->exec("UPDATE img SET link='$link' WHERE id='$id'");
						move_uploaded_file($tmp_name, "imgz/" . md5($id) . $filename);
						$msg = "dodano zdjecie.";
						
				}
			}
			} else {
				$_SESSION['msg'] = "Niepoprawny format pliku (dozwolone sa : .jpeg, .gif, .jpg)";header("location:admin.php");exit;
			}
			}

		}

		
	
	}
		
?>
		
			
			