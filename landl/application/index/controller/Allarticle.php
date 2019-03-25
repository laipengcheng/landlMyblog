<?php
namespace app\Index\controller;
use app\index\model\Article as AllarticleModel;
use app\index\controller\Base;

class Allarticle extends Base
{
    public function index(){
        $articles=AllArticleModel::order('time desc')->paginate(10);
        $this->assign('articles',$articles);
        return $this->fetch();
    }
}
