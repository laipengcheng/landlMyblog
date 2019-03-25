<?php
namespace app\Index\controller;
use app\index\model\Article as IndexModel;
use app\index\controller\Base;

class Index extends Base
{
    public function index(){
        $articles=IndexModel::Where('state',1)->order('click desc')->paginate(10);
        $this->assign('articles',$articles);
        return $this->fetch();
    }
}
