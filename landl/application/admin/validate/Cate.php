<?php
namespace app\admin\validate;
use think\Validate;

class Cate extends Validate
{

    protected $rule = [
        'catename'  =>  'require|max:30|unique:cate',
    ];
    protected $message  =   [
        'catename.require' => '栏目名称必须填写',
        'catename.max'     => '栏目名称长度不能超过30位',
        'catename.unique'  => '栏目名称不能重复',
    ];
    protected $scene = [
        'add'  =>  ['catename'],
        'edit' =>  ['catename'],
    ];

}
