<?php
namespace Home\Controller; //命名空间
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo 'hello,world!';
    }
}