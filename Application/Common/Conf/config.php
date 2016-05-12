<?php
return array(
	//'配置项'              =>  '配置值'

    //'MODULE_ALLOW_LIST'     =>  array('Home', 'Admin', 'Api', 'User'),
    // 数据库类型
    'DB_TYPE'               =>  'mysql',
    // 服务器地址
    'DB_HOST'               =>  '127.0.0.1',
    // 数据库名
    'DB_NAME'               =>  'jfw_2016',
    // 用户名
    'DB_USER'               =>  'root',
    // 密码
    'DB_PWD'                =>  'root',
    // 端口
    'DB_PORT'               =>  '3306',
    // 数据库表前缀
    'DB_PREFIX'             =>  'jfw_',
    // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
    'URL_MODEL'             =>  1,
    // 模板引擎普通标签开始标记
    'TMPL_L_DELIM'          =>  '<{',
    // 模板引擎普通标签结束标记
    'TMPL_R_DELIM'          =>  '}>',
    // 标签左
    'TAGLIB_BEGIN'          =>  '<{',
    // 标签右
    'TAGLIB_END'            =>  '}>',
    //自动加载扩展函数库
    "LOAD_EXT_FILE"         =>   "common",
    //Auth权限设置
    // 'AUTH_CONFIG'           =>   array(
    //     // 认证开关
    //     'AUTH_ON'           =>   true,
    //     // 认证方式，1为实时认证；2为登录认证。
    //     'AUTH_TYPE'         =>   1,
    //     // 用户组数据表名
    //     'AUTH_GROUP'        => 'ysn_role',
    //     // 用户-用户组关系表
    //     'AUTH_GROUP_ACCESS' => 'ysn_access',
    //     // 权限规则表
    //     'AUTH_RULE'         => 'ysn_node',
    //     // 用户信息表
    //     'AUTH_USER'         => 'ysn_member',
    //     ),
);