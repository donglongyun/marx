<?php
namespace Admin\Controller;
use Admin\Common\Controller\CommonController;

class BlogController extends CommonController {
	
    public function index(){
      
      $blog = M('Blog'); // 实例化User对象
      $count = $blog->where('del=0')->count();// 查询满足要求的总记录数

    	$page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
    	$page->lastSuffix = false;	//最后一页是否显示总页数
    	$page->rollPage = 5; 		//设置分页栏显示页数

    	//定制分页样式
    	$page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
    	$page->setConfig('prev','上一页');
    	$page->setConfig('next','下一页');
    	$page->setConfig('first','首页');
    	$page->setConfig('last','尾页');
    	//$page->setConfig('lastSuffix',false);
    	$page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
    	
    	$show = $page->show();// 分页显示输出
    	$list = D('Blog')->getBlogs(0,$page); //模型中的getBlog()方法筛选
    	$this->assign('list',$list);// 赋值数据集
 		  
    	$this->assign('page',$show);// 赋值分页输出
    	$this->display();
    }

    //删除到回收站/还原
    public function toTrach(){ 
    	$type = $_GET['type'];
    	$msg = $type ? '删除' : '还原';
    	$index = $type ? 'index': 'trach';
    	$update = array(
    		'id' => (int)$_GET['id'],
    		'del' => $type
    		);
    	if(M('blog')->save($update)){ 
    		$this->success($msg.'成功',$index);
    	}else{ 
    		$this->error($msg.'失败');
    	}
    
    }

    //回收站
    public function trach(){ 
    	$blog = M('Blog'); // 实例化User对象
    	$count = $blog->where('del=1')->count();// 查询满足要求的总记录数

    	$page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
    	//定制分页样式
    	$page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
    	$page->setConfig('prev','上一页');
    	$page->setConfig('next','下一页');
    	$page->setConfig('first','首页');
    	$page->setConfig('last','末页');
    	$page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
    	
    	$show = $page->show();// 分页显示输出
    	$list = D('Blog')->getBlogs(1,$page); //模型中的getBlog()方法筛选
    	$this->assign('list',$list);// 赋值数据集
 		
    	$this->assign('page',$show);// 赋值分页输出
    	

    	$this->display('index');
    }

    //彻底删除
    public function delete(){ 
    	$id = (int)$_GET['id'];
    	if(M('Blog')->delete($id)){ 
			$this->success('彻底删除成功','trach');
    	}else{ 
    		$this->error('彻底删除失败');
    	}
    	
    }


    //添加,修改博文视图
   	public function addBlog(){ 
   		
   		$this->id = I('id',0,'intval');
   		//有id（表示修改），获取信息
   		if($this->id){
   			$this->blog = D('blog')->relation(true)->find($this->id);
   		}

		  //所属分类
   		$cate = M('cate')->order('sort')->select();
   		$this->cate = unlimitedForLevel($cate,'&nbsp;&nbsp;&nbsp;&nbsp;----');
      //bug($this->cate);
   		$this->time = time();

   		$this->display();
   	}

   	//添加博文表单处理
   	public function runAddBlog(){ 
   		$time = $_POST['time'];
   		//正则检查时间格式
   		$pat = "/\d{4}(\-|\/|)\d{2}\\1\d{2}\s+\d{2}(:|)\d{2}\\2\d{2}/";

  		if(preg_match($pat, $time,$arr)){ 
  			$time = $arr[0];
  		}else{ 
  			$this->error('日期格式错误');
  		}
		
  		//时间转换为时间戳
  		$time = strtotime($time);
		  $author = $_POST['author']='admin'?'管理员':$_POST['author'];
   		$data = array(
   			'title' => $_POST['title'],
   			'content' => $_POST['content'],
   			'author' => $author,
   			'time' => $time,
   			'click' => (int)$_POST['click'],
   			'cid' => (int)$_POST['cid'],
   			);
   		$id = $_POST['id'];
   		if(!$id){ //表示添加

	   		$bid = M('blog')->add($data);
			if($bid){ 
		   		$this->success('添加成功','index');
		   		
	   		}else{ 
	   			$this->error('添加失败');
	   		}
   		}else{ 	//表示修改
   			$where = array('id' => $id);
   			$res = M('blog')->where($where)->save($data);
        if(!$res){
          $this->error('修改失败');
   			}else{ 
	   			$this->success('修改成功','index');
	   		}
   		}
   	}

    public function infoList(){
      $cateM = M('Cate');
      $cate = $cateM->where('attr=2')->select();
      $m = M('Blog');
      $data = array();
      foreach($cate as $v){
        $v['pcate'] = $cateM->where('id='.$v['pid'])->getField('name');
        $where = array('cid'=>$v['id']);
        $blog = $m->where($where)->find();
        if($blog){
          $v['blog'] = true;
          $v['bid'] = $blog['id'];
          $v['time'] = $blog['time'];
        }else{
          $v['blog'] = false;
        }
        $data[] = $v;
      }
      //bug($cate);
      //bug($data);
      $this->cate = $data;
      $this->display();
    }
    public function addInfo(){
      $this->cid = I('cid',0,'intval'); //栏目id
      //查询是否存在文章
      $blog = D('Blog')->relation(true)->where('cid='.$this->cid)->find();
      if($blog){ //修改
        $this->blog = $blog;
      } // else 没有表示添加
        
      //所属分类
      $cate = M('Cate')->where('id='.$this->cid)->find();
      $cate['pname'] = M('Cate')->where('id='.$cate['pid'])->getField('name');
      $this->cate = $cate;
      $this->time = time();

      $this->display();
    }
    public function addInfoHandle(){
      $time = $_POST['time'];
      //正则检查时间格式
      $pat = "/\d{4}(\-|\/|)\d{2}\\1\d{2}\s+\d{2}(:|)\d{2}\\2\d{2}/";

      if(preg_match($pat, $time,$arr)){ 
        $time = $arr[0];
      }else{ 
        $this->error('日期格式错误');
      }
    
      //时间转换为时间戳
      $time = strtotime($time);

      $id = $_POST['id']; // 文章id
      
      if(!$id){ //表示添加
        $cid = I('cid','','intval');
        if(M('Blog')->where(array('cid'=>$cid))->count()>0){
          $this->error('该栏目下已存在文章,不能再添加！');
        }
        $data = array(
          'title' => $_POST['title'],
          'content' => $_POST['content'],
          'author' => $_POST['author'],
          'time' => $time,
          'click' => 1,
          'cid' => $cid,
          'del' => 2, //2表示简介
          );
        $bid = M('Blog')->add($data);
        if($bid){ 
          $this->success('添加成功','infoList');
        }else{ 
          $this->error('添加失败');
        }
      }else{  //表示修改
        $data = array(
          'id' => $id,
          'content' => $_POST['content'],
          'time' => $time
          );
        $res = M('Blog')->where($where)->save($data);
        if(!$res){
          $this->error('修改失败');
        }else{ 
          $this->success('修改成功','infoList');
        }
      }
    }
    public function delInfo(){
      //bug($_GET);die();
      $bid = I('bid','','intval');
      if(!M('Blog')->delete($bid)){
        $this->error('删除失败！');
      }else{
        $this->success('删除成功','infoList');
      }
    }

   	
}