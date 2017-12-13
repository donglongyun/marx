<?php
namespace Admin\Controller;
use Admin\Common\Controller\CommonController;

class RbacController extends CommonController {


    //用户列表
    public function index(){ 
    	$data['username'] = array('NEQ','admin');//将超级管理员过滤
    	$this->user = D('UserRelation')->where($data)->relation(true)->select();
    	$this->display();
    }
    //添加用户及修改密码视图
    public function addUser(){ 
    	$id = I('id',0,'intval');
    	$this->user = D('userRelation')->relation(true)->find($id);
    	//p($this->user);die;
    	$this->id = $id;
    	$this->role = M('role')->select();
    	$this->display();
    }
    //添加用户表单处理，和修改角色处理
    public function addUserHandle(){ 
 		//p($_POST);die;
 		//无id,表示添加
    	if(!$_POST['id']){ 
			if($_POST['password'] != $_POST['password2']){ 
	    		$this->error('确认密码错误');
	    	}
	    	
	    	$where = array('username' => I('username'));
	    	$res = M('user')->where($where)->select();
	    	if($res){ 
	    		$this->error('用户名已存在');
	    	}
	    	//用户信息
	    	$user = array(
	    		'username' => I('username'),
	    		'password' => I('password',0,'md5'),
	    		'logintime' => time(),
	    		'loginip' => get_client_ip()
	    		);
	    	//关联模型插入时有bug
	    	//所属角色
	    	$role = array();
	    	if($uid = M('user')->add($user)){ //将用户添加到用户表中,并返回id
	    		foreach($_POST['role_id'] as $v){ 
	    			$role[] = array(
	    				'role_id'=>$v,
	    				'user_id'=>$uid
	    				);
	    		}
	    		if(M('role_user')->addAll($role)){ //将用户和角色关系填入关联表中
	    			$this->success('添加成功','index');
	    		}else{ 
	    			$this->error('添加失败');
	    		}
	    	}else{ 
	    		$this->error('添加失败');
	    	}
    	}else{ 
    		//先将原来的角色删除
    		$id = $_POST['id'];
    		$res = M('role_user')->where(array('user_id'=> $id))->delete();
    		//p($res);die;
    		$role = array();
	    	foreach($_POST['role_id'] as $v){ 
	    		$role[] = array(
	    			'role_id'=>$v,
	    			'user_id'=>$id
	   				);
	   		}
	   		if(M('role_user')->addAll($role)){ //将用户和角色关系填入关联表中
	   			$this->success('修改成功','index');
    		}else{ 
    			$this->error('修改失败');
	    	}
    	}
    	
    }
    //修改密码视图
    public function savePass(){ 
    	$this->id = I('id',0,'intval');
    	$this->user = M('user')->field('username')->find($this->id);
    	//p($this->user);die;
    	$this->display();
    }
    //修改密码操作
    public function savePassHandle(){ 
    	if($_POST['password'] != $_POST['password2']){ 
    		$this->error('确认密码错误');
    	}
    	$data['id'] = I('id',0,'intval');
    	$data['password'] = I('password',0,'md5');
    	$res = M('user')->save($data);
    	if($res){ 
    		$this->success('修改成功','index');
    	}else{ 
    		$this->error('修改失败');
    	}
    }
    //删除用户
    public function delUser(){ 
    	$id = I('id',0,'intval');
    	$res = D('userRelation')->relation(true)->delete($id);
    	if($res){ 
    		//$this->display('index');
    		$this->success('删除成功','index');
    	}else{ 
    		$this->error('删除失败');
    	}
    }
    //ajax处理状态
    public function status(){ 
    	if(!IS_AJAX)  //判断是否是ajax传输
  			$this->error('不存在');
  		//P($_POST);die;
  		$table = I('table');
  		$arr['id'] = I('uid');
  		$arr['status'] = I('status'); //ajax中传过来的json数据以post方式获取
		//echo $data['status'];die;
		if($table == 'user'){ 
			$res = M('user')->save($arr);
		}elseif($table == 'role'){ 
			$res = M('role')->save($arr);
		}
		
  		if($res){ 
  			$data['status'] = 1;  //status=1 表示ajax处理成功
  			$data['msg'] = I('status');
  		 	$this->ajaxReturn($data,'json'); //返回ajax，默认是json格式
  		 }else{ 
  		 	$this->ajaxReturn(array('status'=>0),'json');
  		 }
    }

    

    //节点列表
    public function node(){ 
    	$field = array('id','name','title','pid');
    	$node = M('node')->field($field)->order('sort')->select();
    	$this->node = unlimitedForLayer($node); //组合成有层级关系的多位数组
    	$this->display();
    }
    //添加节点视图
    public function addNode(){ 

    	$this->pid = I('pid',0,'intval'); //第二个参数为默认值
    	$this->level = I('level',1,'intval');

    	switch($this->level){ 
    		case 1:
    			$this->type = '应用';
    			break;
    		case 2:
    			$this->type = '控制器';
    			break;
    		case 3:
    			$this->type = '动作方法';
    			break;
    	}

    	$this->display();
    }
    //添加节点表单处理
    public function addNodeHandle(){ 
    	//P($_POST);die;
    	if(M('node')->add($_POST)){ 
    		$this->success('添加成功','node');
    	}else{ 
    		$this->error('添加失败');
    	}
    }
    //修改节点视图
    public function saveNode(){ 
    	//p($_GET);
    	$this->id = I('id',0,'intval');
    	$this->level = I('level',1,'intval');
    	switch($this->level){ 
    		case 1:
    			$this->type = '应用';
    			break;
    		case 2:
    			$this->type = '控制器';
    			break;
    		case 3:
    			$this->type = '动作方法';
    			break;
    	}

    	$field = array('id','name','title','status','sort');
    	$this->node =  M('node')->field($field)->find($this->id);
    	//p($this->node);die;
    	$this->display();
    }
    //修改节点操作
   	public function saveNodeHandle(){ 
   		//p($_POST);
   
   		$data['id'] = $_POST['id'];
   		$data['name'] = $_POST['name'];
   		$data['title'] = $_POST['title'];
   		$data['status'] = $_POST['status'];
   		$data['sort'] = $_POST['sort'];
   		//p($data);die;
   		$res = M('node')->save($data);

   		if($res){ 
   			$this->success('修改成功','node');
   		}else{ 
   			$this->error('修改失败');
   		}
   	}
   	//删除节点
   	public function delNode(){ 

   		$id = (int)$_GET['id'];
   		$res = M('node')->delete($id);
   		
    	if($res){ 
    		$this->success('删除成功','node');
   		}else{ 
   			$this->error('删除失败');
   		}
   	}

   	//角色列表
    public function role(){ 
    	$this->role = M('role')->select();
    	
    	$this->display();
    }
   	//添加角色并配置权限，修改权限视图
    public function addRole(){ 
    	$rid = I('rid',0,'intval');//角色id,修改时用到此数据
    	$field = array('id','name','status');
    	$this->role = M('role')->field($field)->find($rid);//读取角色信息,分配到前台模板
    	
    	//从节点表中读取有用的数据
    	$field = array('id','name','title','pid','level');
    	$node = M('node')->field($field)->order('sort')->select();
    	
    	//原有权限
    	$access = M('access')->where(array('role_id'=>$rid))->getField('node_id',true);
    	//p($access);die;
    	//$node数组中加入一条是否选中的字段
    	$arr = array();
    	foreach($node as $v){ 
    		$v['access'] = in_array($v['id'],$access) ? 1 : 0;
    		$arr[]=$v;
    	}
    	
		$this->rid = $rid; //$rid表示角色的ID号
		//将数组转换为有层级关系的多维数组
    	$this->node = unlimitedForLayer($arr);
    	$this->display();
    }
    //添加角色及分配权限表单处理
    public function addRoleHandle(){ 
    	
		$rid = I('rid',0,'intval');//角色id,修改时用到此数据
		$msg = '配置';
		if($rid == 0){  //说明是添加角色
			$msg = '添加';
			$data['name'] = $_POST['name'];
			$data['status'] = $_POST['status'];
			$rid = M('role')->add($data);//添加成功返回id号
			if(!$rid){ 
				$this->error('添加失败');
			}
			$msg = '添加角色成功，权限配置';
		}

		//p($rid);die;
    	
   		$db = M('access');
    	//插入权限之前先将原来的权限删除
    	$db->where(array('role_id'=> $rid))->delete();

    	//组合新权限
		$data = array();
    	foreach($_POST['access'] as $v){ 
    		$tmp = explode('_',$v);
    		$data[] = array(
    			'role_id' => $rid,
    			'node_id' => $tmp[0],
    			'level' => $tmp[1],
    			);
    	}
    	//插入操作
    	$result = $db->addAll($data); //插入多条语句时要用 addALL()
    	if($result){ 
    		$this->success($msg.'成功','role');
    	}else{ 
    		$this->error($msg.'失败','role');
    	}
    }
    //删除角色
    public function delRole(){ 

    	$id = $_GET['rid'];
    	//关联模型中将角色与用户，角色与节点都分别关联了
    	$res = D('roleRelation')->relation(true)->delete($id);

    	if($res){ 
    		$this->success('删除成功','role');	
    	}else{ 
    		$this->error('删除失败');
    	}
    }

}