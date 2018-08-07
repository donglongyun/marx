<?php
namespace Home\Controller;
use Think\Controller;
use Common\Model\BlogModel;
class IndexController extends Controller {
    public function index(){
        $blog=M(Blog);
        $newstit=$blog->where(array("cid"=>1))->field("title,time,id")->order('time desc')->limit(10)->select();
        //$blog=$blog[1]['title'];
        for ($i=0;$newstit[$i]['time'];$i++){
            $newstit[$i]['time']=date('Y-m-d',$newstit[$i]['time']);
        }
        $this->assign('newstit',$newstit);
        //var_dump($tit);
        //cid应该为2
        $noticetit=$blog->where(array("cid"=>2))->field("title,time,id")->order('time desc')->limit(10)->select();
        //$blog=$blog[1]['title'];

        for ($i=0;$noticetit[$i]['time'];$i++){
            $noticetit[$i]['time']=date('Y-m-d',$noticetit[$i]['time']);
        }
        $this->assign('noticetit',$noticetit);
        $this->display();
    }
}