<?php

namespace app\index\controller;

use think\admin\Controller;

class Index extends Controller
{
    /**
     * @return void
     */
    public function index()
    {
        $this->error('请通过API方式访问相关接口');
    }
}
