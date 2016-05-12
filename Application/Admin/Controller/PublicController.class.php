<?php
namespace Admin\Controller;

use Think\Controller;

//后台登录控制器
class PublicController extends Controller 
{
    public function index()
    {
        $this->redirect('login');
    }


    /**
     * 登录页面
     * @author 任广正
     */

    public function login()
    {
        if(IS_POST){
            $mo = M('admin');
            $data = I('post.');
            $map['name'] = trim($data['name']);
            $admin = $mo->where($map)->field('id,name,password,salt')->find();
            if(!is_array($admin)){
                $this->error('管理员不存在！');
                exit();
            }else{
                $md5  = encrypt($data['password'],$admin['salt']);
                if($md5 == $admin['password']){

                    //登录成功,存session
                    session('admin.admin_id',$admin['id']);
                    session('admin.is_login','1');
                    session('admin.name',$admin['name']);

                    //更新登录时间
                    $mo->where($map)->save(array('update_time'=>time()));
                    $this->redirect('Admin/Index/index');
                }else{
                    $this->error('密码错误！');
                }
            } 
            
        }else{
            $this->display();
        }
    }
}