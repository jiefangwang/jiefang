<?php
namespace Admin\Controller;

use Think\Controller;

//后台首页控制器
class IndexController extends AdminController 
{
    /**
     *  首页
     * @author 任广正
     */

    public function index()
    {
        $this->display();
    }


    /**
     * 内嵌框架
     * @author 任广正
     */

    public function center()
    {
        $this->display();
    }
}