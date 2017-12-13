<?php
namespace Admin\Common\Controller;
use Think\Controller;
use Org\Util\Rbac;
class CommonController extends Controller {
    
    public function _initialize(){
    	//判断用户是否登陆
    	if(!isset($_SESSION[C('USER_AUTH_KEY')])){ 
    		$this->redirect('Login/index');
    	}
    
    	if(C('USER_AUTH_ON')){ 
    	
    		RBAC::AccessDecision(MODULE_NAME) || $this->error('您还没有权限，请联系超级管理员','Index/index');  
    	}
    }
}









 