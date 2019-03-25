<?php
namespace app\admin\controller;
use app\admin\model\Links as LinksModel;
use app\admin\controller\Base;

class Links extends Base
{
    public function lit()
    {
        $list = LinksModel::paginate(8);
        $this->assign('list',$list);
        return $this->fetch('Links/lit');
    }

    public function add()
    {
        if (request()->isPost()){
            $data=[
                'title'=>input('title'),
                'url'=>input('url'),
                'desc' => input('desc'),
            ];
            $validate = \think\Loader::validate('Links');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
                die;
            }
            if(db('links')->insert($data)){
                return $this->success('添加成功','lit');
            }else{
                return $this->error('添加失败');
            }
            return;
        }

        return $this->fetch('Links/add');
    }

    public function edit(){
        $id=input('id');
        $Links=db('links')->find($id);
        if(request()->isPost()){
            $data=[
                'id' => input('id'),
                'title'=>input('title'),
                'url'=>input('url'),
                'desc' => input('desc'),
            ];
            $validate = \think\Loader::validate('Links');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
                die;
            }
            if(db('links')->update($data)){
                $this->success('修改成功','lit');
            }else{
                $this->error('修改失败','lit');
            }
            return;
        }
        $this->assign('links',$Links);
        return $this->fetch('Links/edit');
    }

    public function del(){
        $id=input('id');
        if(db('links')->delete(input('id'))){
            $this->success("删除成功！",'lit');
        }else{
            $this->error('删除失败！','lit');
        }


    }

}
