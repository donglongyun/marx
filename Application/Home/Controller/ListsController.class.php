<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/12/11
 * Time: 23:08
 */
namespace Home\Controller;
use Think\Controller;
//use Home\Controller\ShowController;
class ListsController extends Controller{
    public function index($cid){
        $lists=M(blog)->where(array("cid"=>$cid))->select();
        $this->assign("lists",$lists);
        $this->display();
        $this->sidebar($cid);
        }
    public function sidebar($pid){
        $pid=M(cate)->where(array('id'=>$pid))->select();
        //var_dump($pid);
        $pid=$pid[0]['pid'];
        $side=M(cate)->where(array("pid"=>$pid))->order('id')->select();
        //var_dump($side);
        $this->assign('side',$side);
        $this->display('Show/sidebar');

    }
}