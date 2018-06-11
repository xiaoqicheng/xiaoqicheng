<?php

namespace app\Http\Controllers\Console;

use App\Http\Controllers\Controller;

class TestController extends Controller{

    public function test1(){
        echo date('Y-m-d H:i:s').'  每分钟执行一次';
    }

    public function test2(){
        echo date('Y-m-d H:i:s') . '  每小时执行一次';
    }

    public function test3(){
        echo date('Y-m-d H:i:s') . '  凌晨执行一次';
    }
}