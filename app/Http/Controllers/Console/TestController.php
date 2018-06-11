<?php

namespace app\Http\Controllers\Console;

use App\Http\Controllers\Controller;

class TestController extends Controller{

    public function test1(){
        echo date('Y-m-d H:i:s').'每分钟执行一次';
    }
}