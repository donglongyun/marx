<?php
namespace Admin\Controller;
use Admin\Common\Controller\CommonController;

class IndexController extends CommonController {
    public function index(){
    	$this->display();
    }

    public function content(){ 
    	$this->display();
    }

    public function logout(){ 
    	session_unset();
    	session_destroy();
    	$this->redirect('Login/index');
    }
    public function savePass(){ 
    	$this->display();
    }
    public function savepassHandle(){ 
    	$oldpassword = I('oldpassword',0,'md5');
    	$password = $_POST['password'];
    	$password2 = $_POST['password2'];
    	$id = $_POST['id'];

    	$where = array('id'=>$id,'password'=>$oldpassword);
    	$result = M('user')->where($where)->find();
    	if(!$result){ 
    		$this->error('旧密码不正确');
    	}
    	if($password != $password2){ 
    		$this->error('确认密码错误');
    	}
    	$data['id'] = $id;
    	$data['password'] = I('password',0,'md5');
    	$res = M('user')->save($data);
    	if($res){ 
    		$this->success('密码修改成功','content');
    	}else{ 
    		$this->error('密码修改失败');
    	}
    }
}