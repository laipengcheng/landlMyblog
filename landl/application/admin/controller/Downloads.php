<?php
namespace app\admin\controller;
use app\admin\model\Download as DownloadsModel;
use app\admin\controller\Base;

class Downloads extends Base
{
    public function lit()
    {
        $list = DownloadsModel::paginate(8);
        $this->assign('list',$list);
        return $this->fetch();
    }

    public function add()
    {
        if (request()->isPost()){
            $data=[
                'title'=>input('title'),
                'url'=>input('url'),
                'pass' => input('pass'),
            ];
            $validate = \think\Loader::validate('Download');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
                die;
            }
            if(db('download')->insert($data)){
                return $this->success('添加成功','lit');
            }else{
                return $this->error('添加失败');
            }
            return;
        }

        return $this->fetch();
    }

    public function edit(){
        $id=input('id');
        $downloads=db('download')->find($id);
        if(request()->isPost()){
            $data=[
                'id' => input('id'),
                'title'=>input('title'),
                'url'=>input('url'),
                'pass' => input('pass'),
            ];
            $validate = \think\Loader::validate('Download');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
                die;
            }
            if(db('download')->update($data)){
                $this->success('修改成功','lit');
            }else{
                $this->error('修改失败','lit');
            }
            return;
        }
        $this->assign('downloads',$downloads);
        return $this->fetch();
    }

    public function del(){
        $id=input('id');
        if(db('download')->delete(input('id'))){
            $this->success("删除成功！",'lit');
        }else{
            $this->error('删除失败！','lit');
        }


    }

}
