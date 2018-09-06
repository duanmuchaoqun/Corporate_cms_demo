<?php
namespace app\admin\controller;

use think\Controller;

class Main extends Controller
{
    public function index()
    {
        return $this->fetch('Main');
    }

    public function left()
    {
        return $this->fetch('Left');
    }

    public function top()
    {
        return $this->fetch('Top');
    }
}
