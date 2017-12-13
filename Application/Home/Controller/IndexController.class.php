<?php
namespace Home\Controller;
use Think\Controller;
use Common\Model\BlogModel;
class IndexController extends Controller {
    public function index(){
        $blog=M(Blog);
        $newstit=$blog->where(array("cid"=>1))->field("title,id")->order('time desc')->limit(6)->select();
        //$blog=$blog[1]['title'];
        $this->assign('newstit',$newstit);
        //var_dump($tit);
        $noticetit=$blog->where(array("cid"=>2))->field("title,id")->order('time desc')->limit(6)->select();
        //$blog=$blog[1]['title'];
        $this->assign('noticetit',$noticetit);
        $this->display();
    }
}