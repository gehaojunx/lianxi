<?php
	class Single{
		private static $_instance = null; //存储这个类实例
		private $_pdo = null;
		private function __construct()//私有的构造函数
		{
			$this->_pdo = new PDO(dsn:'mysql:host=127.0.0.1;dbname=9a;charset=utf8','root','root');
		}
		private function __clone()//限制了无法克隆这个类
		{
			//TODO：Implement __clone() method.
		}
		public static function getInstance(){
			//获取类实例
			if(!(self::$_instance instanceof Single)){
				echo 1;
			self::$_instance = new Single();
			}
			echo 2;
			return self::$_instance;
		}
		//返回数据库连接对象
		public function getPdo(){
			return $this->_pdo;
		}
		
	}
?>