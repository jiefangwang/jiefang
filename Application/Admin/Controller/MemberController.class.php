<?php
namespace Admin\Controller;

use Think\Controller;

//管理员控制器
class MemberController extends AdminController 
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
     * 管理员列表
     * @author 任广正
     */

    public function memberList()
    {
        $mo = M('admin');
        $ao = M('access');
        $map['id'] = array('neq','1');

        // // 实例化分页类
        // $count = $mo
        //       ->where($map)
        //       ->alias('a')
        //       ->join('__ACCESS__ AS c ON a.id=c.admin_id')
        //       ->join('__ROLE__ AS r ON r.id=c.role_id')
        //       ->field('a.id')
        //       ->count();
        // $Page = new \Think\Page($count,20);

        // //查询除root以外的管理员
        // $info = $mo
        //       ->where($map)
        //       ->alias('a')
        //       ->join('__ACCESS__ AS c ON a.id=c.admin_id')
        //       ->join('__ROLE__ AS r ON r.id=c.role_id')
        //       ->limit($Page->firstRow.','.$Page->listRows)
        //       ->field('a.id,name')
        //       ->select();

        

        //查询除root以外的所有管理员
        $count = $mo->where($map)->field('id')->count();
        $Page = new \Think\Page($count,20);     // 实例化分页类
        $info = $mo->where($map)->field('id,name,create_time,update_time')->limit($Page->firstRow.','.$Page->listRows)->select();

        //代入查询条件
        $request = I('param.');
        foreach($request as $key=>$val) {
            $Page->parameter[$key]   =   urldecode($val);
        }

        //查询管理员角色
        foreach ($info as $key=>$val){
            $role = $ao
                  ->where(array('admin_id'=>$val['id']))
                  ->alias('a')
                  ->join('__ROLE__ AS r ON r.id=a.role_id')
                  ->field('r.title')
                  ->find();
            if(is_array($role)){
                $info[$key]['role'] = $role['title'];
            }
        }   
//dump($info);exit;            
        $this->assign('count',$count);
        $this->assign('page',$Page->show());
        $this->assign('info',$info);
        $this->display();
    }
}