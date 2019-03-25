<?php
namespace app\Index\controller;
use app\index\controller\Base;

class Download extends Base
{
    public function index(){
        $downloads = db('download')->select();
        $this->assign('downloads',$downloads);
        return $this->fetch();
    }
}
