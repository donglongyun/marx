<?php
namespace Admin\Controller;
use Admin\Common\Controller\CommonController;

class FirstController extends CommonController {
    public function index(){
    	$this->display();
    }

    public function mail(){
        $m = M('Link');
        $this->yuanzhang = $m->where('type=3')->getField('href');
        $this->shuji = $m->where('type=4')->getField('href');
        $this->display();
    }
    public function updateMail(){
        $type = I('type','','intval');
        if($type == 3){  //院长
            $this->title = '院长';
            $type = 3;
        }else{  //书记
            $this->title = '书记';
            $type = 4;
        }
        $mail = M('Link')->where('type='.$type)->find();
        $this->mail = $mail['href'];
        $this->id = $mail['id'];
        $this->type = $type;
        $this->display();
    }
    public function updateMailHandle(){
        //bug($_POST);die();
        $id = I('id','','intval');
        $type = I('type','','intval');
        $type = I('type','','intval');
        if(!$id){ // 之前没有数据，需要添加
            if($type == 3){
                $name = '院长';
                $type = 3;
            }else{
                $name = '书记';
                $type = 4;
            }
            $data = array(
                'name' => $name,
                'href' => $_POST['mail'],
                'type' => $type,
                'sort' => 0
                );
            $res = M('Link')->add($data);
        }else{ //修改
            $mail = I('mail');
            if($type == 3){ //院长
                $res = M('Link')->where('type=3')->setField('href', $mail);
            }else{  //书记
                $res = M('Link')->where('type=4')->setField('href', $mail);
            }
        }

        if(!$res){
            $this->error('邮箱修改失败!');
        }else{
            $this->success('邮箱修改成功','mail');
        }
    }

    //链接列表视图
    public function link(){ 
    	$this->count1 = M('link')->where(array('type'=>1))->count();
    	$this->count2 = M('link')->where(array('type'=>0))->count();
    	$this->links1 = M('link')->where(array('type'=>1))->order('sort')->select();
    	$this->links2 = M('link')->where(array('type'=>0))->order('sort')->select();
    	
      	$this->display();
    }
    //添加,修改链接视图
    public function addLink(){ 
    	$id = I('id',0,'intval');
    	if($id){ 
			$this->link = M('link')->find($id);
    	}
    	$this->display();
    }
    //处理提交数据
    public function linkHandle(){ 
    	
    	$data['name'] = $_POST['name'];
    	$data['href'] = $_POST['href'];
    	$data['type'] = $_POST['type'];
    	if(!$_POST['id']){ //不存在id表示添加
            $data['sort'] = 10;
			if(M('link')->add($data)){ 
    			$this->success('添加成功','link');
    		}else{ 
    			$this->error('添加失败');
    		}
    	}else{	//修改
    		$data['id'] = $_POST['id'];
    		if(M('link')->save($data)){ 
    			$this->success('修改成功','link');
    		}else{
    			$this->error('修改失败');
    		}
    	}
    
    }
    public function linkSort(){
        $m = M('Link');
        foreach ($_POST as $id => $sort) {
            $m->where(array('id'=>$id))->setField('sort',$sort);
        }
        $this->redirect('link');
    }
    //删除链接
    public function delLink(){ 
    	$id = I('id',0,'intval');
    	if(M('link')->delete($id)){ 
    		$this->success('删除成功','link');
    	}else{ 
    		$this->error('删除失败');
    	}
    }

    //导航图片列表
    public function banner(){ 
    	$this->banner = M('Banner')->order('sort')->select();
    	//p($this->pics);
    	$this->display();
    }
    //添加图片视图
    public function addBanner(){ 
    	$this->display();
    }
    public function addBannerHandle(){ 
        $info = $this->upload($_FILES['photo'], 'banner');
       
        $data['src'] = 'banner/'.$info['savename']; //文件保存路径  
        $data['title'] = $_POST['title'];
        $data['content'] = I('content','','trim');
        $data['href'] = $_POST['href'];
        $data['sort'] = $_POST['sort'];
        $res = M('Banner')->add($data);
        if($res){ 
            $this->success('添加成功','banner');
        }else{ 
            $this->error('添加失败');
        }
         

    }

    private function upload($file, $list){
        //上传图片
        $upload = new \Think\Upload();// 实例化上传类    
        $upload->maxSize   =     3145728 ;// 设置附件上传大小    
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
    public function updateBanner(){
        $id = I('id','','intval');
        if(isset($id) && !empty($id)){  
            $this->banner = M('Banner')->find($id);
        }else{
            $this->error('页面出错！');
        }
        $this->display();
    }
    public function updateBannerHandle(){
        if(!IS_POST){ 
            $this->error('页面不存在');
        }
        $id = I('id','','intval');
        $data=array();
        if(!empty($_FILES['photo']['name'])){//有新图片
            //上传图片
            $info = $this->upload($_FILES['photo'], 'banner');      
            $data['src'] = 'banner/'.$info['savename']; 
            //删除旧的图片
            $src = M('Banner')->where('id='.$id)->getField('src');
            $this->delPic($src);
        }   

        $data['id'] = $id;
        $data['title'] = $_POST['title'];
        $data['content'] = I('content','','trim');
        $data['href'] = $_POST['href'];
        $data['sort'] = $_POST['sort'];
        $res = M('Banner')->save($data);
        if($res){ 
            $this->success('修改成功','banner');
        }else{ 
            $this->error('修改失败');
        }
        
    }
    private function delPic($url){
        $root = rtrim($_SERVER['DOCUMENT_ROOT'],'/');
        $src=$root.__ROOT__."/Public/Uploads/".$url;
        $res = unlink($src);
    }
	public function delBanner(){ 
		$id = I('id',0,'intval');
        $href = M('Banner')->where('id='.$id)->getField('src');
		$res = M('Banner')->delete($id);
		if($res){ 
            //删除旧的图片
            $this->delPic($href);
			$this->success('删除成功','banner');
		}else{ 
			$this->error('删除失败');
		}
	}
	public function sortBanner(){ 
		//p($_POST);die;
    	$m = M('Banner');
    	foreach ($_POST as $id => $sort) {
    		$m->where(array('id'=>$id))->setField('sort',$sort);
    	}
    	$this->redirect('banner');
    }


    //滚动图片
    public function roll(){
        $this->roll = M('Roll')->order('sort')->select();
        $this->display();
    }
    public function addRoll(){
        $this->display();
    }
    public function addRollHandle(){
        $info = $this->upload($_FILES['photo'], 'roll');
       
        $data['src'] = 'roll/'.$info['savename']; //文件保存路径  
        $data['title'] = $_POST['title'];
        $data['href'] = $_POST['href'];
        $data['sort'] = $_POST['sort'];
        $res = M('Roll')->add($data);
        if($res){ 
            $this->success('添加成功','roll');
        }else{ 
            $this->error('添加失败');
        }
    }
    public function updateRoll(){
        $id = I('id','','intval');
        if(isset($id) && !empty($id)){  
            $this->roll = M('Roll')->find($id);
        }else{
            $this->error('页面出错！');
        }
        $this->display();
    }
    public function updateRollHandle(){
        if(!IS_POST){ 
            $this->error('页面不存在');
        }
        $id = I('id','','intval');
       
        $data=array();
        if(!empty($_FILES['photo']['name'])){//有新图片
            //上传图片
            $info = $this->upload($_FILES['photo'], 'roll');      
            $data['src'] = 'roll/'.$info['savename']; 
            //删除旧的图片
            $src = M('Roll')->where('id='.$id)->getField('src');
            $this->delPic($src);
        }   

        $data['id'] = $id;
        $data['title'] = $_POST['title'];
        $data['href'] = $_POST['href'];
        $data['sort'] = $_POST['sort'];
        $res = M('Roll')->save($data);
        if($res){ 
            $this->success('修改成功','roll');
        }else{ 
            $this->error('修改失败');
        }
    }
    public function delRoll(){
        $id = I('id',0,'intval');
        $href = M('Roll')->where('id='.$id)->getField('src');
        $res = M('Roll')->delete($id);
        if($res){ 
            //删除旧的图片
            $this->delPic($href);
            $this->success('删除成功','roll');
        }else{ 
            $this->error('删除失败');
        }
    }
    public function sortRoll(){
        $m = M('Roll');
        foreach ($_POST as $id => $sort) {
            $m->where(array('id'=>$id))->setField('sort',$sort);
        }
        $this->redirect('roll');
    }

    public function search(){
        $pic = M('Link')->where(array('type'=>5))->find();
        if(!$pic){
            $this->pic = false;
        }else{
            $this->pic = $pic;
        }
        $this->display();
    }
    public function searchHandle(){
            
        if(!$_FILES['photo']['name']){ //
            $this->error('没有文件上传！');
        }else{
            $info = $this->upload($_FILES['photo'], 'cate');
            $src = 'cate/'.$info['savename']; 

            $id = I('id','','intval');
            if(!$id){  //新增
                $data = array(
                    'name' => 'search',
                    'href' => $src,
                    'type' => 5,
                    'sort' => 0
                    );
                $res = M('Link')->add($data);
            }else{  //修改
                $m = M('Link');
                $oldSrc = $m->where(array('type'=>5))->getField('href');
                $res = $m->where(array('type'=>5))->setField('href',$src);
                
                //删除旧的图片
                $this->delPic($oldSrc);
            }

            if(!$res){
                $this->error('操作失败！');
            }else{
                $this->error('操作成功');
            }
            
        }
        
    }



}