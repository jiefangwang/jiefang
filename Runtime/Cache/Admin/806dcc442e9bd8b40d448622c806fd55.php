<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>街坊网管理平台</title>
<link rel="stylesheet" href="/jiefang/Public/Admin/Css/global.css" type="text/css"/>
<link rel="stylesheet" href="/jiefang/Public/Admin/Css/list.css" type="text/css"/>
<link rel="stylesheet" href="/jiefang/Public/Admin/Css/menu.css" type="text/css"/>
<script src="/jiefang/Public/Admin/Js/fixPNG.js" type="text/javascript"></script>
<!--[if lt IE 7]>       
 <script src="/jiefang/Public/Admin/Js/fixPNG.js"></script>         
 <script>
 DD_belatedPNG.fix('img,.nav ul li a,.nav ul li a:hover');
 </script>     
<![endif]-->
<!--[if lte IE 6]>
<style type="text/css">
table{border-collapse:collapse; margin:0; padding:0;}
.menu ul li a.hide, .menu ul li a:visited.hide{display:none;}
.menu ul li a:hover ul li a.hide{display:none;}
.menu ul li a:hover{display:block; width:151px; clear:both; }
.menu ul li a:hover ul{display:block; position:absolute; bottom:26px; left:0;}
.menu ul li a:hover ul li{display:block; width:151px;}
.menu ul li a:hover ul li a:hover{}
.menu ul li a:hover ul li a{display:block; width:100%; padding-left:10px;}
.menu ul li a:hover ul li a ul{visibility:hidden;}
.menu ul li a:hover ul li a:hover{}
.menu ul li a:hover ul li a:hover ul{visibility:visible; position:absolute; left:210px; bottom:0;}
.menu ul li a:hover ul li a:hover ul li a{background:url(/jiefang/Public/Admin/Image/icon_sanjiao.png) no-repeat left center;color:#000;}
.menu ul li a:hover ul li a:hover ul li a:hover{background:#c9c9a7;}
.menu ul li a:hover ul.left{left:-105px;}
.menu ul li a:hover ul li a:hover ul.left{left:-210px;}
.category li{width:151px; display:block; float:left; margin-left:2px;}
.category li a:hover{background:url(/jiefang/Public/Admin/Image/category_tab.jpg) no-repeat}
</style>
<![endif]-->
</head>

<body>

<!-- content -->
<div class="content">
<div class="content_box">
<div class="current">
    <a href="/jiefang/index.php/Admin">个人桌面</a><span> > </span> 
    <a href="javascript:;">管理员</a>
    <!-- <span>></span>组织机构 -->
</div>
<div class="infolist">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="6" class="title">
    <ul class="zsgc fleft">
      <li><a href="#">新增</a></li>
      <li><a href="#">删除</a></li>
      <li><a href="#">修改</a></li> 
      <li><a href="#">编辑</a></li>
    </ul>
    <div class="list_date fright">
    <form name="form" id="form">
      <select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)"  class="select">
        <option>全部</option>
        <option>组织机构</option>
      </select>
    </form>
    </div>
    </td>
    </tr>
  <tr class="line_g hover_bg">
    <td width="5%" align="center"><form id="form1" name="form1" method="post" action="">
      <p>
        <label>
          <input type="checkbox" name="CheckboxGroup1" value="单选框" id="CheckboxGroup1_0" /></label>
      </p>
    </form></td>
    <td width="5%" align="center"><strong>ID</strong></td>
    <td width="15%" align="center"><strong>管理员</strong></td>
    <td width="15%" class="jianju10"><strong>角色</strong></td>
    <td width="10%" align="center"><strong>创建时间</strong></td>
    <td width="10%" align="center"><strong>上次登录</strong></td>
  </tr>
    <?php if(is_array($info)): foreach($info as $key=>$val): ?><tr class="line_g hover_bg">
            <td width="5%" align="center">
                <form id="form1" name="form1" method="post" action="">
                  <p>
                    <label>
                      <input type="checkbox" name="CheckboxGroup1" value="单选框" id="CheckboxGroup1_0" /></label>
                  </p>
                </form>
            </td>
            <td align="center"><?php echo ($val["id"]); ?></td>
            <td align="center"><?php echo ($val["name"]); ?></td>
            <td class="jianju10"><?php echo ((isset($val["role"]) && ($val["role"] !== ""))?($val["role"]):'暂无'); ?></td>
            <td align="center"><?php echo (date($val["create_time"],'Y-m-d H:i:s')); ?></td>
            <td align="center"><?php echo (date($val["update_time"],'Y-m-d H:i:s')); ?></td>
        </tr><?php endforeach; endif; ?>
  <tr class="title">
    <td colspan="6" valign="middle">
    <div class="page fright">
    <ul>
     <li>共<strong class="color_red">126</strong>条</li>
     <li>首页</li>
     <li>上一页</li>
     <li>1/3</li>
     <li><a href="#">下一页</a></li>
     <li><a href="#">尾页</a></li>
     <li>转到第<input type="text" class="page_numble" />页</li>
     <li><input type="button" value="" class="go mt7" /></li>
    </ul>
    </div>
    </td>
    </tr>
</table>
</div>
</div>
</div>

  </div>
</body>
</html>