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

// +----------------------------------------------------------------------
// | 中间件配置
// +----------------------------------------------------------------------
return [
    // 默认中间件命名空间
    'default_namespace' => 'app\\http\\middleware\\',
    'Token' => app\http\Middleware\Token::class,
    'InAppCheck'=> app\http\Middleware\InAppCheck::class,
    'SignCheck'=>app\http\Middleware\SignCheck::class,
    'WebAuth'=>app\http\Middleware\WebAuth::class
];
