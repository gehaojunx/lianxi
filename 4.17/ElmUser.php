<?php
class ElmUser{
		private $_pdo;
		public function __construct(){
			$single = Single::getInstance();
			$this->_pdo = $single->getPdo();
		}
		public function getList(){
			$sql = "select * from elm_user";
			return $this->_pdo->query($sql)->fetchAll();
		} 
	}
?> 