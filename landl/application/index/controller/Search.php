<?php
namespace app\Index\controller;
use app\index\model\Article as SearchModel;
use app\index\controller\Base;

class Search extends Base
{
    public function index(){
        $inkeys = input('inkeys');
        $keywords = input('keywords');
        if ($inkeys){
            $map['title'] = ['like','%'.$inkeys.'%'];
            $searchres = SearchModel::where($map)->order('id desc')->paginate(10);
            $this->assign(array(
                'searchres' => $searchres,
                'inkeys'  => $inkeys,
            ));
        }elseif($keywords) {
            $map['cateid'] =$keywords;
            $searchres = SearchModel::where($map)->order('id desc')->paginate(10);
            $this->assign(array(
                'searchres' => $searchres,
                'inkeys'  => $inkeys,
            ));
        }else{
            $this->assign(array(
                'searchres' => null,
                'inkeys'  => "没有找到搜索的内容",
            ));
        }
        return $this->fetch();
    }
}
