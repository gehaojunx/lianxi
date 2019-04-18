<?php
	include 'Single.php';
	include 'Model.php';
	$obj = Single::getInstance();
	$obj1 = Single::getInstance();

	$objModel = new Model();
	//$objModel->table('elm_user');
	$list = $objModel->table('elm_user')->field('mobile')->where(['id'=>1,'mobile'=>'135222'])->select();
	var_dump($list);
// 	$student = $objModel->getStudentList();
// 	var_dump($student);

	$student = $objModel->table('student')->field('name,age')->where([])->select();
	var_dump($student);

	// $objModel->_table = 'student';
	// $list = $objModel->getList();
	// var_dump($list);
?>