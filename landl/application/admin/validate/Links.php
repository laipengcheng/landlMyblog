<?php
namespace app\admin\validate;
use think\Validate;

class Links extends Validate
{

    protected $rule = [
        'title'  =>  'require|max:30|unique:links',
        'url' =>  'require|max:60|unique:links',
    ];
    protected $message  =   [
        'title.require' => '链接名称必须',
        'title.max'     => '链接名称长度不能超过30位',
        'title.min'     => '链接名称长度不得小于10位',
        'url.require' => '链接地址必须填写',
        'url.max' => '链接地址长度不能超过60位',
        'title.unique'  => '链接名重复',
        'url.unique'  => '地址重复',
    ];
    protected $scene = [
        'add'  =>  ['title','url'],
        'edit' =>  ['title','url'],
    ];

}
