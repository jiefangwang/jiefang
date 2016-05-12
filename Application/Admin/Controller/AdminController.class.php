<?php
namespace Admin\Controller;

use Think\Controller;

/** 后台初始化控制器，所有控制器继承此控制器
 *  @author 任广正
 */
class AdminController extends Controller 
{
    protected function _initialize()
    {
        //添加权限
        $module_name = MODULE_NAME;
        $controller_name =CONTROLLER_NAME;
        $action_name = ACTION_NAME;
        $node_name = $module_name.'/'.$controller_name.'/'.$action_name;
        $node = M('node')->where(array('name'=>$node_name))->field('id')->find();
        if(!$node){
            $data['name'] = $node_name;
            $data['title'] = '权限';
            $re = R('Api/Common/add',array('node',$data));
        }
    }
}