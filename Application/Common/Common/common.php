<?php

/** 加密函数
 * @param string $psw 未加密的密码字符串
 * @param string $salt 数据库中salt字段随机生成的字符串
 * @return string md5后的加密字符串
 * @author 任广正
 */

function encrypt($psw, $salt)
{
    if($salt){
        return md5($salt.md5($psw.'ThinkPHP').$salt);
    }else{
        return md5($psw);
    }
}
?>