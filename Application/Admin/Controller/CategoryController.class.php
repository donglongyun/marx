<?php
namespace Admin\Controller;
use Admin\Common\Controller\CommonController;

class CategoryController extends CommonController {
    public function index(){

    	$cate = M('cate')->order('sort ASC')->select();
    	$cate = unlimitedForLevel($cate,'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;----&nbsp;');
    	$this->cate = $cate;
    	$this->display();
    }

    //添加栏目页面
    public function addCate(){ 
    	$this->pid = I('pid',0,'intval');//添加子栏目接收父id
    	if($this->pid){ //添加子栏目
    		$res = M('cate')->find($this->pid);
    		$this->pcate = $res;
    	}  //else 添加一级栏目

    	$this->display();
    }	
    //处理提交
    public function addCateHandle(){ 
        
    	$pid = I('pid',0,'intval');//添加子分类接收父id
        $data = array();
    	if($pid){  //子分类
            $data['pid'] = $pid;
            if($_POST['attr'] == 4){ //链接  
                $data['src'] = $_POST['href'];
            }else{
                $data['src'] = '0';
            }
        }else{ //一级分类
            if($_POST['attr'] == 4){ //链接  
                $data['src'] = $_POST['href'];
                $data['pid'] = 0;
            }else{  //非链接需要图片
                $info = $this->upload($_FILES['photo'], 'cate');
                $data['src'] = 'cate/'.$info['savename']; //文件保存路径 
                $data['pid'] = 0;
            }
            
        }
        
    	$data['name'] = $_POST['name'];
        $data['attr'] = $_POST['attr'];
    	$data['sort'] = $_POST['sort'];
    	if(M('cate')->add($data)){ 
    		$this->success('添加成功','index');
    	}else{ 
    		$this->error('添加失败');
    	}
    	
    }
    private function upload($file, $list){
        //上传图片
        $upload = new \Think\Upload();// 实例化上传类    
        $upload->maxSize   =     10145728;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
        $upload->rootPath = './';
        $upload->savePath  = './Public/Uploads/'.$list.'/'; // 设置附件上传目录 
        $upload->autoSub = false; //不使用子目录
        // 上传单个文件     
        $info   =   $upload->uploadOne($file); 
        if(!$info) {// 上传错误提示错误信息        
            $this->error($upload->getError());    
        }else{
            return $info;
        }
    }
    private function delPic($url){
        $root = rtrim($_SERVER['DOCUMENT_ROOT'],'/');
        $src=$root.__ROOT__."/Public/Uploads/".$url;
        $res = unlink($src);
    }
    public function updateCate(){
        
        $this->id = I('id','','intval');
        $m = M('Cate');
        $cate = $m->find($this->id);

        // $cate['pid'] = $m->where('id='.$cate['pid'])->getField('name');
        //当前cate
        $this->cate = $cate;
        $this->pcate = $m->where('id='.$this->cate['pid'])->find();
       
        //父级栏目组
        $this->pcates = $m->where(array('pid'=>$this->pcate['pid']))->field('id,name,attr')->select();
        //bug($this->cate);
        //bug($this->pcate);
        //bug($this->pcates);
        $this->display();
    }
    public function updateCateHandle(){
        //bug($_POST);die();
        if(!IS_POST){ 
            $this->error('页面不存在');
        }
        //bug($_POST);die();
        $id = I('id','','intval');
        $pid = I('pid','','intval');
        $data=array();
        if($_POST['attr'] == 4){  //链接
            $data['src'] = $_POST['href'];
        }else{
            if(!$pid){     //一级栏目
                if(!empty($_FILES['photo']['name'])){//有新图片
                    //上传图片
                    $info = $this->upload($_FILES['photo'], 'cate');      
                    $data['src'] = 'cate/'.$info['savename']; 
                    //删除旧的图片
                    $src = M('Cate')->where('id='.$id)->getField('src');
                    $this->delPic($src);
                }  
            }
        }
       

        $data['id'] = $id;
        $data['name'] = $_POST['name'];
        $data['pid'] = $_POST['pid'];
        $data['attr'] = $_POST['attr'];
        $data['sort'] = $_POST['sort'];

        //bug($data);die();
        $res = M('Cate')->save($data);
        if($res){ 
            $this->success('修改成功','index');
        }else{ 
            $this->error('修改失败');
        }
    }

    //排序
    public function sortCate(){ 
    	$m = M('cate');
    	foreach ($_POST as $id => $sort) {
    		$m->where(array('id'=>$id))->setField('sort',$sort);
    	}
    	$this->redirect('index');
    }

    //删除
    public function delete(){ 
        $id = I('id',0,'intval');
        $src = M('Cate')->where('id='.$id)->getField('src');
        $res = M('Cate')->delete($id);
        if($res){ 
            //删除旧的图片
            $this->delPic($src);
            $this->success('删除成功','index');
        }else{ 
            $this->error('删除失败');
        }
    }

    public function blogList(){
        $cid = (int)$_GET['cid'];
        $this->cid = $cid;
        $blog = M('Blog'); // 实例化User对象
        $count = $blog->where(array('cid'=>$cid))->count();// 查询满足要求的总记录数
       
        $page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $page->lastSuffix = false;  //最后一页是否显示总页数
        $page->rollPage = 5;        //设置分页栏显示页数

        //定制分页样式
        $page->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('first','首页');
        $page->setConfig('last','尾页');
        //$page->setConfig('lastSuffix',false);
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        
        $show = $page->show();// 分页显示输出
        $list = D('Blog')->field('content',true)->where(array('cid'=>$cid))->order('time DESC')->relation(true)->limit($page->firstRow.','.$page->listRows)->select();; //模型中的getBlog()方法筛选
        $this->assign('list',$list);// 赋值数据集
       
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    public function updateBlog(){
        $this->cid = I('cid',0,'intval');
        $this->id = I('id',0,'intval');

        
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
    public function updateBlogHandle(){
        //bug($_POST);die();
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
        $oldCid = $_POST['oldCid'];
        //bug($oldCid);
        $where = array('id' => $id);
        $res = M('blog')->where($where)->save($data);
        if(!$res){
            $this->error('修改失败');
        }else{ 
            $this->success('修改成功',"blogList?cid=".$oldCid);
        }
    }
    public function delBlog(){
        $id = I('id','','intval');
        $cid = I('cid','','intval');
        $res = M('Blog')->delete($id);
        if(!$res){
            $this->error('删除失败！');
        }else{
            $this->success('删除成功', "blogList?cid={$cid}");
        }
    }
   
}