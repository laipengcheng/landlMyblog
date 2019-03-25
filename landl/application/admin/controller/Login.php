<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Admin;

class Login extends Controller
{
    public function index()
    {
        if(request()->isPost()){
            $admin = new Admin();
            $data = input('post.');
            $num=$admin->login($data);
            if($num == 4){
                $this->error('验证码错误！');
            }
            elseif($num == 3){
                $this->success('正在跳转，请稍后...','	Index/index');
            }else{
                $this->error('用户名或密码不正确！');
            }
        }
        return $this->fetch('Login/login');
    }

}
