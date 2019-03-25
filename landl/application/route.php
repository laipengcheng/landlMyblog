<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------/*
use think\Route;
Route::rule('index','Index/index');
Route::rule('download','Download/index');
Route::rule('all','Allarticle/index');
Route::rule('article/:articleid','Article/index');
Route::rule('search/:keywords','Search/index');
Route::rule('login','Login/index');

/*Route::rule('edit/:id','Admin/edit');
Route::rule('cate/:id','Cate/edit');
Route::rule('articles/:id','Articles/edit');
Route::rule('links/:id','Links/edit');
Route::rule('downloads/:id','Downloads/edit');*/
return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [

        ':id'   => ['index/Article', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/Article', ['method' => 'post']],

    ],

];
