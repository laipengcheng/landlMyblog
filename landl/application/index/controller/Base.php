<?php
namespace app\Index\controller;
use think\Controller;

class Base extends Controller
{
    public function _initialize(){
        $links = db('links')->select();
        $this->assign('links',$links);

        $articleTime = db('article')->order('time desc')->limit(20)->select();
        $this->assign('articleTime',$articleTime);

        $keywords = db('cate')->select();
        $this->assign('keywords',$keywords);


    }
}
