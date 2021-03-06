<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});
//Route::get('annotation/:str','index/annotation');

//快捷路由
Route::controller('blog','index/Blog');
Route::controller('user','index/User');

Route::get('hello/:name', 'index/hello');

Route::get('userinfo/:id','index/User/info')->cache(3600);//路由缓存

return [

];
