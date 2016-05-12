<?php
namespace Api\Controller;

use Think\Controller;

//公共方法
class CommonController extends Controller 
{
    /**
     * 新增
     * @param string $tableName 表名
     * @param array $data 一维数组
     * @return 添加成功返回主键ID,失败返回false
     * @author 任广正 
     */

    public function add($tableName='', $data=array())
    {
       if($tableName && is_array($data)){
            $mo = M($tableName);
            $data['create_time'] = time();
            $data['update_time'] = time();
            if($mo->create($data)){
                $res = $mo->add();
            }
            return $res;
       }else{
            return false;
       }
    }
}