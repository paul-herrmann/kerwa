<?php
	
	class database {
	
		public $cfg=array('host'=>'localhost',
										'dbname'=>'qwejq',
										'username'=>'root',
										'password'=>'' );
											
		
		private $db;
										
		public function __construct() {
										
			$this->db = new PDO( 
						'mysql:host=' . $this->cfg['host'] . ';dbname=' . $this->cfg['dbname'] , 
						$this->cfg['username'] , 
						$this->cfg['password']   ); 
						
		}
		
		public function query($str) {
		
			return $this->db->query($str)->fetchAll(PDO::FETCH_ASSOC);
		
		}
		
		public function exec($str) {
			
			return $this->db->exec($str);
		
		}
		
		public function __destruct() {
		
			$this->db = null;
			
		}
		
	
	}
	
	
	
?>


