<?php
/**
 * Created by zhanglu
 * Date: 2018/1/5
 * Time: 下午4:30
 */
$app['router']->get('/', function () {
    return '<h1>路由成功！！！</h1>';
});

$app['router']->get('welcome', 'App\Http\Controllers\WelcomeController@index');