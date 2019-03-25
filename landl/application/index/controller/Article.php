<?php
namespace app\Index\controller;
use app\index\model\Article as ArticleModel;
use app\index\controller\Base;

class Article extends Base
{
    public function index()
    {
        $articleid = input('articleid');
        if($articleid){
            db('article')->where('id',$articleid)->setInc('click');
        }
        $articles = ArticleModel::where(array('id'=>$articleid))->find();
        $this->assign('articles',$articles);
        return $this->fetch();
    }
}
