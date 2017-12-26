<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/12/11
 * Time: 22:31
 */
namespace Home\Controller;
use Think\Controller;
use Common\Model\BlogModel;
class ShowController extends Controller{
    public function index($id){
        $blogs=M(blog)->where(array('id'=>$id))->select();
        $this->assign("blogs",$blogs);
        $pid=$blogs[0]['cid'];
        //var_dump($pid);
        $this->display();
        //var_dump($blogs);
        $this->sidebar($pid);
    }
    public function showdet($cid){
        $det=M(blog)->where(array("cid"=>$cid))->select();
        $this->assign('blogs',$det);
        //var_dump($det);
        $pid=$det[0]['cid'];
        //var_dump($pid);
        $this->display('index');
        $this->sidebar($pid);
    }
    public function sidebar($pid){
        $pid=M(cate)->where(array('id'=>$pid))->select();
        //var_dump($pid);
        $pid=$pid[0]['pid'];
        $side=M(cate)->where(array("pid"=>$pid))->order('id desc')->select();
        //var_dump($side);
        $this->assign('side',$side);
        $this->display('sidebar');

    }
public function iframe(){
        $this->display('showdet');
}

}