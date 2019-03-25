<?php
namespace app\admin\controller;
use app\admin\model\Cate as CateModel;
use app\admin\controller\Base;

class Cate extends Base
{
    public function lit()
    {
        $list = CateModel::paginate(8);
        $this->assign('list',$list);
        return $this->fetch();
    }

    public function add()
    {
        if (request()->isPost()){
            $data=[
                'catename'=>input('catename'),
            ];
            $validate = \think\Loader::validate('Cate');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
                die;
            }
            if(db('cate')->insert($data)){
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
        $cates=db('cate')->find($id);
        if(request()->isPost()){
            $data=[
                'id'        => input('id'),
                'catename'  => input('catename'),
            ];
            $validate = \think\Loader::validate('Cate');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
                die;
            }
            if(db('cate')->update($data)){
                $this->success('修改成功','lit');
            }else{
                $this->error('修改失败','lit');
            }
            return;
        }
        $this->assign('cates',$cates);
        return $this->fetch();
    }

    public function del(){
        $id=input('id');
        if(db('cate')->delete(input('id'))){
            $this->success("删除成功！",'lit');
        }else{
            $this->error('删除失败！','lit');
        }

    }

}
