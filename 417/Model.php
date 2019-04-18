<?php
	class Model{
		private $_pdo;
		private $_table;
		public function __construct(){
			$single = Single::getInstance();
			$this->_pdo = $single->getPdo();
		}
		//设置表名
		//return $tshi 返回类本身

		public function table($tablename){
			$this->_table = $tablename;
			return $this;
		}

		//设置字段
		//param $fields
		//return $this
		public function field($fields){
			$this->_fields = $fields;
			return $this;
		}

		//设置where字段
		//param $where 数组 【字段=》值】

		public function where($where){
			$w = '';
			if($where){
				foreach ($where as $k => $v){
					$w.$k."='".$v."' and ";
				}
				$w = substr($w,0,-4);
				$w = 'where '.$w;
			}
			$this->_where = $w;
			return $this;
		}


		//执行查询
		public function select(){
			$sql = "select $this->_fields  from $this->_table $this->_where";
			// echo $sql;echo "<br>";
			return $this->_pdo->query($sql)->fetchAll();
		}
	}
?>