<?php
/**
 * Created by zhanglu
 * Date: 2018/1/5
 * Time: 下午5:05
 */
namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Container\Container;

class WelcomeController
{
    public function index()
    {
        $student = Student::first();
        $data = $student->getAttributes();
        $app = Container::getInstance();
        $factory = $app->make('view');
        return $factory->make('welcome')->with('data', $data);
//        return "学生：id={$data['id']}</br>姓名：{$data['name']}</br>年龄：{$data['age']}";
    }
}