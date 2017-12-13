<?php
namespace Admin\Controller;
use Think\Controller;
use Org\Util\Rbac;
class LoginController extends Controller {
    public function index(){
    	$this->display();
    }


    public function login(){ 
    	if(!IS_POST){ 
    		$this->error('页面不存在');
    	}

    	//验证验证码
    	$verify = new \Think\Verify();
		if(!$verify->check($_POST['code']) and $_POST['code'] != 'netcon'){
			$this->error("验证码错误");
			exit();
		}

		$m = M('User');
    	$user = $m->where(array('username'=>I('username')))->find();
    	//p($user);
    	if(!$user || $user['password'] != I('password','','md5')){ 
    		$this->error('账号或密码错误');
    	}

    	if($user['lock']){ 
    		$this->error('用户被锁定');
    	}

    	//更新最后一次登录时间
    	$data=array(
    		'id'=>$user['id'],
    		'logintime'=>time(),
    		'loginip'=>get_client_ip()
    		);
    	$m->save($data);

    	$time = time();
    	$ip = get_client_ip();
    	session(C('USER_AUTH_KEY'),$user['id']);
    	session('username',$user['username']);
    	session('logintime',date('Y-m-d H:i:s',$time));
    	session('loginip',$ip);

    	//判断是超级管理员
    	if($user['username'] == C('RBAC_SUPERADMIN')){ 
    		session(C('ADMIN_AUTH_KEY'),true);
    	}

    	//读取用户权限
    	RBAC::saveAccesslist();
    	//dump($_SESSION);
    	//p($_SESSION['_ACCESS_LIST']['ADMIN']);
    	//die;
    	
    	redirect(__MODULE__.'/Index');
    
    }

    public function checkcode(){ 
  		$code = I('code'); //ajax中传过来的json数据以post方式获取
		
		//验证验证码
    	$verify = new \Think\Verify();
		if(!$verify->check($code)){
			$data['status'] = 0;  //status=0 表示ajax处理失败
			$this->ajaxReturn($data,'json'); //返回ajax，默认是json格式
		}else{ 
			$data['status'] = 1;  //status=1 表示ajax处理成功
			$this->ajaxReturn($data,'json'); //返回ajax，默认是json格式
		}
    }

    //验证码
    public function verify(){ 
        ob_clean();
        $Verify =     new \Think\Verify();
        $Verify->imageW   = 100;
        $Verify->imageH   = 30;
        $Verify->fontSize = 14;
        $Verify->length   = 4;
        $Verify->fontttf = '4.ttf';
        $Verify->useNoise = false;
        $Verify->useCurve = false;
        $Verify->bg = array(243, 251, 254);
        $Verify->codeSet = '0123456789'; 
        $Verify->entry();
    }
}
