<?php
namespace app\admin\controller;

use think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return $this->view->fetch('index');
    }

    public function welcome()
    {
        return $this->view->fetch('welcome');
    }
}
