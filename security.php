<?php 
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


	//创建一个控制器
	class Security extends IController{
		public function login(){
			//渲染 加载视图
			$this->redirect('login');
		}
		public function login_ok(){
			$adminname=IReq::get('adminname');
			// var_dump($adminname);die;/
			$password=IReq::get('password');
			// var_dump($password);die;
			$admin1=new IModel('admin1');
			$where = "adminname = '".$adminname."' and password='".$password."'";
			$data=$admin1->query($where);
			// var_dump($data);die;
			if ($data) {
				$session=new ISession;
				$session->set('adminname',$adminname);
				$this->redirect('/security/reg',true); 
			}else{
				echo "登录失败";
			}
		}
		public function reg(){
			$this->redirect('reg');
		}
		public function reg_ok(){
			$username=IReq::get('username');
			$password=IReq::get('password');
			$truename=IReq::get('truename');
			$salary=IReq::get('salary');
			//入库
			$user1=new IModel('usel');
			$data=[
			'username'=>$username,
			'password'=>$password,
			'turename'=>$truename,
			'salary'=>$salary,
			];
			$user1->setData($data);
			//调用入库的值
			$user1->add;
			$this->redirect('/security/login',true);
		}
	}
 ?>