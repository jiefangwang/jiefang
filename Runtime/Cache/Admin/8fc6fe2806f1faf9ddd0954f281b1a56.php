<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>G.net综合信息服务管理平台</title>
<link rel="stylesheet" href="/jiefang/Public/Admin/Css/global.css" type="text/css"/>
<link rel="stylesheet" href="/jiefang/Public/Admin/Css/index.css" type="text/css"/>
<link rel="stylesheet" href="/jiefang/Public/Admin/Css/menu.css" type="text/css"/>
<script type="text/javascript" src="/jiefang/Public/Admin/Js/jquery-1.8.0.min.js"></script>
<script src="/jiefang/Public/Admin/Js/cfcoda.js" language="javascript"></script>
<script src="/jiefang/Public/Admin/Js/time.js" language="javascript"></script>
<!--[if lt IE 7]>       
 <script src="/jiefang/Public/Admin/Js/fixPNG.js"></script>         
 <script>
 DD_belatedPNG.fix('img,.nav ul li a,.nav ul li a:hover');
 </script>     
<![endif]-->
<link href="/jiefang/Public/Admin/Css/lanrenzhijia.css" rel="stylesheet" type="text/css" />
</head>
<body >
<!-- content -->
<div  style="position:relative;">
  
  
     
   <div id="frame">
   <div id="scroller">
    <div id="content">
       <div class="section" id="pane-0">
        <div class="page1">
           <div class="content">
            <div class="first_screen">
               <div class="weather">
                <div class="today"> <img src="/jiefang/Public/Admin/Image/icon_tianqi.png" width="70" height="60" /> <span>31~20°C</span> </div>
                <div class="city"><a href="#">郑州</a></div>
                <div class="clear"></div>
                <div class="refresh"><span class="fleft">更新时间15:30</span><a href="#" class="fright">刷新</a></div>
              </div>
               <div class="time"> <span id="h1"></span> <span id="h2"></span><strong>:</strong> <span id="m1"></span> <span id="m2"></span><strong>:</strong> <span id="s1"></span> <span id="s2"></span> </div>
               <div class="date" id="currentime"></div>
               <div class="welcome_wz"><img src="/jiefang/Public/Admin/Image/welcome_wz.png" width="400" height="112" /></div>
             </div>
          </div>
         </div>
      </div>
        <div class="section" id="pane-1" style="display:none">
        <div class="page1">
           <div class="content">
            <div class="second_screen">
               <ul>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="组织机构"><span><img src="/jiefang/Public/Admin/Image/icon_1.png" width="56" height="61" /></span>
                  <p>组织机构1</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="机构人员"><span><img src="/jiefang/Public/Admin/Image/icon_2.png" width="56" height="58" /></span>
                  <p>机构人员1</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="工作日志"><span><img src="/jiefang/Public/Admin/Image/icon_3.png" width="64" height="57" /></span>
                  <p>工作日志</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="考勤管理"><span><img src="/jiefang/Public/Admin/Image/icon_4.png" width="64" height="62" /></span>
                  <p>考勤管理</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="指标设置"><span><img src="/jiefang/Public/Admin/Image/icon_5.png" width="60" height="58" /></span>
                  <p>指标设置</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="考核审批"><span><img src="/jiefang/Public/Admin/Image/icon_6.png" width="61" height="63" /></span>
                  <p>考核审批</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="考核审批"><span><img src="/jiefang/Public/Admin/Image/icon_7.png" width="64" height="48" /></span>
                  <p>考核审批</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="考核审批"><span><img src="/jiefang/Public/Admin/Image/icon_8.png" width="45" height="60" /></span>
                  <p>考核审批</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="考核审批"><span><img src="/jiefang/Public/Admin/Image/icon_9.png" width="59" height="60" /></span>
                  <p>考核审批</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="考核审批"><span><img src="/jiefang/Public/Admin/Image/icon_10.png" width="63" height="63" /></span>
                  <p>考核审批</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="考核审批"><span><img src="/jiefang/Public/Admin/Image/icon_11.png" width="52" height="60" /></span>
                  <p>考核审批</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="考核审批"><span><img src="/jiefang/Public/Admin/Image/icon_12.png" width="60" height="60" /></span>
                  <p>考核审批</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="考核审批"><span><img src="/jiefang/Public/Admin/Image/icon_13.png" width="64" height="63" /></span>
                  <p>考核审批</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="考核审批"><span><img src="/jiefang/Public/Admin/Image/icon_14.png" width="60" height="63" /></span>
                  <p>考核审批</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="考核审批"><span><img src="/jiefang/Public/Admin/Image/icon_15.png" width="59" height="61" /></span>
                  <p>考核审批</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="考核审批"><span><img src="/jiefang/Public/Admin/Image/icon_16.png" width="54" height="52" /></span>
                  <p>考核审批</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="考核审批"><span><img src="/jiefang/Public/Admin/Image/icon_17.png" width="51" height="57" /></span>
                  <p>考核审批</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="考核审批"><span><img src="/jiefang/Public/Admin/Image/icon_18.png" width="61" height="61" /></span>
                  <p>考核审批</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="考核审批"><span><img src="/jiefang/Public/Admin/Image/icon_19.png" width="52" height="63" /></span>
                  <p>考核审批</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="考核审批"><span><img src="/jiefang/Public/Admin/Image/icon_20.png" width="61" height="60" /></span>
                  <p>考核审批</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="考核审批"><span><img src="/jiefang/Public/Admin/Image/icon_21.png" width="64" height="64" /></span>
                  <p>考核审批</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="考核审批"><span><img src="/jiefang/Public/Admin/Image/icon_22.png" width="60" height="62" /></span>
                  <p>考核审批</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="考核审批"><span><img src="/jiefang/Public/Admin/Image/icon_23.png" width="50" height="60" /></span>
                  <p>考核审批</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="考核审批"><span><img src="/jiefang/Public/Admin/Image/icon_24.png" width="50" height="63" /></span>
                  <p>考核审批</p>
                  </a></li>
              </ul>
             </div>
          </div>
         </div>
      </div>
       <div class="section" id="pane-2" style="display:none">
        <div class="page1">
           <div class="content">
            <div class="second_screen">
               <ul>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="组织机构"><span><img src="/jiefang/Public/Admin/Image/icon_1.png" width="56" height="61" /></span>
                  <p>组织机构2</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="机构人员"><span><img src="/jiefang/Public/Admin/Image/icon_2.png" width="56" height="58" /></span>
                  <p>机构人员2</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="工作日志"><span><img src="/jiefang/Public/Admin/Image/icon_3.png" width="64" height="57" /></span>
                  <p>工作日志</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="考勤管理"><span><img src="/jiefang/Public/Admin/Image/icon_4.png" width="64" height="62" /></span>
                  <p>考勤管理</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="指标设置"><span><img src="/jiefang/Public/Admin/Image/icon_5.png" width="60" height="58" /></span>
                  <p>指标设置</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="考核审批"><span><img src="/jiefang/Public/Admin/Image/icon_6.png" width="61" height="63" /></span>
                  <p>考核审批</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="考核审批"><span><img src="/jiefang/Public/Admin/Image/icon_7.png" width="64" height="48" /></span>
                  <p>考核审批</p>
                  </a></li>
                <li><a href="#" onclick="parent.addTab('list.html','组织机构')" title="考核审批"><span><img src="/jiefang/Public/Admin/Image/icon_8.png" width="45" height="60" /></span>
                  <p>考核审批</p>
                  </a></li>
               
              </ul>
             </div>
          </div>
         </div>
      </div>
     </div>
  </div>
   <div id="switch">
    <div id="switch-content">
       <ul id="toolbar" class="navigation">
        <li id="tab-0" class="active"><a href="#" id="aaa" onclick="javascript:ScrollSection(0, 'scroller', 'home-pane'); return false"></a></li>
        <li id="tab-1" class="inactive"><a href="#" onclick="javascript:ScrollSection(1, 'scroller', 'home-pane'); return false"></a></li>
        <li id="tab-2" class="inactive"><a href="#" onclick="javascript:ScrollSection(2, 'scroller', 'home-pane'); return false"></a></li>
      </ul>
     </div>
  </div>
   <div class="clear"></div>
   <!-- -->
   <div class="main_desktop">
    <ul class="desktop_wrap">
       <li>
        <p>通讯录</p>
        <a href="#" onclick="window.top.addTab('list.html','通讯录');return false;"><img src="/jiefang/Public/Admin/Image/icon_2.png" width="56" height="58" /></a></li>
       <li>
        <p>工作任务</p>
        <a href="#" onclick="parent.addTab('list.html','工作任务')"><img src="/jiefang/Public/Admin/Image/icon_3.png" width="64" height="57" /></a></li>
       <li>
        <p>项目管理</p>
        <a href="#" onclick="parent.addTab('list.html','项目管理')"><img src="/jiefang/Public/Admin/Image/icon_4.png" width="64" height="62" /></a></li>
       <li>
        <p>控制面板</p>
        <a href="#" onclick="parent.addTab('list.html','控制面板')"><img src="/jiefang/Public/Admin/Image/icon_5.png" width="60" height="58" /></a></li>
       <li>
        <p>即时提醒</p>
        <a href="#" onclick="parent.addTab('list.html','及时提醒')"><img src="/jiefang/Public/Admin/Image/icon_6.png" width="61" height="63" /></a></li>
     </ul>
  </div>
 </div>
 </div>
</body>
</html>