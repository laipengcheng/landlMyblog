<?php
namespace app\admin\controller;
use app\admin\model\Article as ArticlesModel;
use app\admin\controller\Base;

class Articles extends Base
{
    public function lit()
    {
        $list = ArticlesModel::paginate(8);
//        $list=db('article')->alias('a')->join('cate c','c.id=cateid')->field('a.id,a.title,a.pic,a.author,a.state,c.catename')->paginate(3);//关联查询

        $this->assign('list',$list);
        return $this->fetch('Articles/lit');
    }

    public function add()
    {
        if (request()->isPost()){
            $data=[
                'title'=>input('title'),
                'author'=>input('author'),
                'desc'=>input('desc'),
                'keywords'=>input('keywords'),
                'content'=>input('content'),
                'cateid'=>input('cateid'),
                'time'=>time(),
            ];
            if(input('state') == 'on'){
                $data['state'] = 1;
            }else{
                $data['state'] = 0;
            }
            //判断上传图片条件
            if ($_FILES['pic']['tmp_name']){
                $file = request()->file("pic");
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                $data['pic'] ='/uploads/'.$info->getSaveName();
            }
            $validate = \think\Loader::validate('Article');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
                die;
            }
            if(db('article')->insert($data)){
                return $this->success('添加成功','lit');
            }else{
                return $this->error('添加失败');
            }
            return;
        }
        $cateres=db('cate')->select();
        $this->assign('cateres',$cateres);

        return $this->fetch('Articles/add');
    }

    public function edit(){
        $id=input('id');
        $articles=db('article')->find($id);
        if(request()->isPost()){
            $data=[
                'id' => input('id'),
                'title'=>input('title'),
                'author'=>input('author'),
                'desc'=>input('desc'),
                'keywords'=>input('keywords'),
                'content'=>input('content'),
                'cateid'=>input('cateid'),
            ];
            if(input('state') == 'on'){
                $data['state'] = 1;
            }else{
                $data['state'] = 0;
            }
            //判断上传图片条件
            if ($_FILES['pic']['tmp_name']){
                @unlink(ROOT_PATH . 'public' . DS . 'static'.$articles['pic']);
                $file = request()->file("pic");
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                $data['pic'] ='/uploads/'.$info->getSaveName();
            }
            $validate = \think\Loader::validate('Article');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
                die;
            }
            if(db('article')->update($data)){
                $this->success('修改成功','lit');
            }else{
                $this->error('修改失败','lit');
            }
            return;
        }
        $this->assign('articles',$articles);
        $cateres=db('cate')->select();
        $this->assign('cateres',$cateres);
        return $this->fetch('Articles/edit');
    }

    public function del(){
        $id=input('id');
        $articles=db('article')->find($id);
        @unlink(ROOT_PATH . 'public' . DS . 'static'.$articles['pic']);
        if(db('article')->delete(input('id'))){
            $this->success("删除成功！",'lit');
        }else{
            $this->error('删除失败！','lit');
        }


    }

}
