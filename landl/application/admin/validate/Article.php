<?php
namespace app\admin\validate;
use think\Validate;

class Article extends Validate
{

    protected $rule = [
        'title'  =>  'require|max:30|unique:links',
        'cateid' =>  'require',
    ];
    protected $message  =   [
        'title.require' => '文章名称必须',
        'title.max'     => '文章名称长度不能超过30位',
        'cateid.require' => '文章地址必须填写',
        'title.unique'  => '文章名重复',
    ];
    protected $scene = [
        'add'  =>  ['title','cateid'],
        'edit' =>  ['title','cateid'],
    ];

}
