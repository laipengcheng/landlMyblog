<?php
namespace app\admin\validate;
use think\Validate;

class Admin extends Validate
{

    protected $rule = [
        'username'  =>  'require|max:25|unique:admin',
        'password' =>  'require',
    ];
    protected $message  =   [
        'username.require' => '管理员名称必须',
        'username.unique'  => '管理员名称不能重复',
        'username.max'     => '管理员名称长度不能超过25位',
        'username.min'     => '管理员名称长度不得小于10位',
        'password.require' => '管理员密码必须填写',
    ];
    protected $scene = [
        'add'  =>  ['username','password'],
        'edit' =>  ['username'],
    ];

}
