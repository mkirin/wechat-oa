<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class=" js no-touch no-android chrome no-firefox no-iemobile no-ie no-ie10 no-ie11 no-ios"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
   <title><?php echo ($webinfo["site_title"]); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content=" <?php echo ($webinfo["keyword"]); ?> " name="Keywords">
    <meta content="<?php echo ($webinfo["content"]); ?>" name="Description">
	<link href="./Tpl/Weiyi/Weiyi/Css/webSite.css" rel="stylesheet">
    <link rel="shortcut icon" href="./Tpl/Weiyi/Weiyi/Images/favicon.jpg">
</head>

<body>
    <div class="header">
        <div class="hd-box clearfix w1170">
    <div class="logo">
        <a  href="javascript:void(0);">
              <img src="<?php echo ($webinfo["site_logo"]); ?>" >
        </a>
    </div>
 	  <div class="nav-box">
        <ul class="nav-list">
            <li><a class="item" href="<?php echo U('Weiyi/index');?>">首页</a></li>
            <li ><a class="item" href="<?php echo U('service');?>"">套餐</a></li>
             <li class="active"><a class="item" href="/help">帮助</a></li>
            <li><a class="item" href="<?php echo U('agent');?>">渠道代理</a></li>
            <li><a class="item" href="<?php echo U('about');?>">关于我们</a></li>
            <li class="register-item"><a class="btn primary" href="<?php echo U('register');?>">注册</a></li>
            <li class="login-item"><a class="btn login" href="<?php echo U('login');?>">登录</a></li>
        </ul>
    </div>
	

</div>    </div>
    <div class="bodyer">
        <div class="bodyer-p">
            <div class="banner_box" id="video-box">
                <img class="img_bg" src="./Tpl/Weiyi/Weiyi/Images/help-bg.jpg" alt="">
                <div class="player-btn">
                    <a href="javascript:void(0)" class="player-ico"></a>
                    <p>操作视频</p>
                </div>
            </div>
            <div class="help-font">
                使用指南
            </div>
            <div class="help-info w1170">
                <ul class="info-list">
                    <li class="item">
                        <a class="recruit-ico" href="#"></a>
                        <span>招聘</span>
                    </li>
                    <li class="item">
                        <a class="taskMg-ico" href="#"></a>
                        <span>任务管理</span>
                    </li>
                    <li class="item">
                        <a class="agendaMg-ico" href="#"></a>
                        <span>日程管理</span>
                    </li>
                    <li class="item">
                        <a class="research-ico" href="#"></a>
                        <span>调研</span>
                    </li>
                    <li class="item">
                        <a class="address-ico" href="#"></a>
                        <span>通讯录</span>
                    </li>
                    <li class="item">
                        <a class="vote-ico" href="#"></a>
                        <span>投票</span>
                    </li>
                    <li class="item">
                        <a class="leave-ico" href="#"></a>
                        <span>请假</span>
                    </li>
                    <li class="item">
                        <a class="email-ico" href="#"></a>
                        <span>企业邮箱</span>
                    </li>
                    <li class="item">
                        <a class="reserve-ico" href="#"></a>
                        <span>会议室预定</span>
                    </li>
                    <li class="item">
                        <a class="check-ico" href="#"></a>
                        <span>考勤</span>
                    </li>
                    <li class="item">
                        <a class="flow-ico" href="#"></a>
                        <span>流程审批</span>
                    </li>
                    <li class="item">
                        <a class="card-ico" href="#"></a>
                        <span>名片</span>
                    </li>
                    <li class="item">
                        <a class="apply-ico" href="#"></a>
                        <span>报销</span>
                    </li>
                </ul>
            </div>
            <div class="help-common-box">
                <div class="help-font">
                    常见问题
                </div>
                <div class="question-box w1170">
                    <ul class="clearfix">
                        <li class="question-item">1. 企业号是做什么的</li>
                        <li class="question-item">2. 企业号的优势是什么？</li>
                        <li class="question-item">3. 企业号怎么跟微信企业号进行绑定使用？</li>
                        <li class="question-item">4. 企业号有哪几个套餐版本？套餐包含哪些应用？</li>
                        <li class="question-item">5. 应用到期数据还能查看吗？</li>
                        <li class="question-item">6. 企业号如何购买使用？</li>
                    </ul>
                    <p>更多疑问可拨打免费电话4006330112进行咨询。</p>
                </div>
            </div>
            <div class="use-register w1170">
                <p>简单一步，即可使用</p>
                <div class="nav-search">
                    <form id="searchTopForm" class="searchForm-box" action="" method="post">
                        <input id="search_top" name="search_top" onkeypress="if(event.keyCode == 13){return false;}" class="search-inp email-register" type="text" placeholder="输入您的邮箱地址" value="">
                        <button type="button" class="btn btn-register">免费注册</button>
                        <span class="hit-info"></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
	
	<div class="footer">
    <div class="foot-content w1170 clearfix">
        <div class="foot-logo"><img src="<?php echo ($webinfo["site_logo"]); ?>" ></div>
        <div class="foot-info">
            <dl class="about-us">
                <dt>关于</dt>
                <dd><a href="<?php echo U('about');?>">关于我们</a></dd>
                
            </dl>
              <dl class="cooperation">
                <dt>合作</dt>
                <dd>QQ交流群：451493529</dd>
				<dd>版权归属：深度实业集团网络科技有限公司</dd>
				
                <dd>地址：中国-安徽-淮北</dd>
            </dl>
            <!-- <dl class="contact-us">
                <dt>联系我们</dt>
                <dd>热线：<?php echo ($webinfo["site_tel"]); ?></dd>
                <dd>反馈：<a href="mailto:lanrain@wxopen.cn"><?php echo ($webinfo["site_email"]); ?></a></dd>
                <dd>招聘：<a href="mailto:lanrain@wxopen.cn"><?php echo ($webinfo["site_email"]); ?></a></dd>
            </dl> -->
        </div>
    </div>
    <p class="copyright">Copyright © 2014-2014  All Rights Reserved <?php echo ($webinfo["site_ipc"]); ?>2</p>


    <!--feedback dialog start-->
  
    <!--feedback dialog end-->

</div>    <!-- Modal -->

<div id="fixed-icons" class="fixed-icons"><a href="" target="_blank" class="consulting"><span>在线咨询</span></a><ul><li class="icon2">免费电话<p>400-0503-365<i></i></p></li><li class="icon3" id="modal-box1">我要反馈</li><li class="icon4"><img src="./Tpl/Weiyi/help。html_files/two-dim-code.png"></li><li class="icon5" title="回到顶部" style="display:none;"></li></ul></div><div class="introVideo"></div><div id="mask"><a href="javascript:void(0)" class="close-btn"></a></div></body></html>