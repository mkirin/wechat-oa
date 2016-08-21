<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="cn" class="app frameset js no-touch no-android chrome no-firefox no-iemobile no-ie no-ie10 no-ie11 no-ios"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title><?php echo $_SESSION['site_title'];?></title>
    <base href="." target="mainFrame">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content=" " name="Keywords">
    <meta content="" name="Description">
	<link href="./Tpl/Qyapp/Static/Js/bootstrap/3.1.1/dist/css/bootstrap.min.css?v=<?php echo time();?>" rel="stylesheet" />
    <link href="./Tpl/Qyapp/Static/Css/animate.min.css?v=<?php echo time();?>" rel="stylesheet">
    <link href="./Tpl/Qyapp/Static/Css/font-awesome.min.css?v=<?php echo time();?>" rel="stylesheet">
    <link href="./Tpl/Qyapp/Static/Css/style.min.css?v=<?php echo time();?>" rel="stylesheet">
    <link href="./Tpl/Qyapp/Static/Css/iconfont.css?v=<?php echo time();?>" rel="stylesheet">
	<script src="./Tpl/Qyapp/Static/Js/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="./Tpl/Qyapp/Static/Js/jquery-migrate.min.js" type="text/javascript"></script>
	<script src="./Tpl/Qyapp/Static/Js/bootstrap/3.1.1/dist/js/bootstrap.min.js"></script>	    
    <style type="text/css">
        .hidden-bsection {
            display: none;  
        }
        .pageload-overlay {  
            position: fixed;  
            width: 100%;  
            height: 100%;
            top: 0;
            left: 0;
            background: #fff;
            z-index: 1000;
        }
        #loading_done {
            background: url('./Tpl/Qyapp/Static/Images/loading2.gif') no-repeat left top;
            position: fixed;
            width: 52px;
            height: 72px;
            top: 50%;
            left: 50%;
            margin-left: -52px;
            margin-top: -72px;
            z-index: 1001;
        }
    </style>
	
</head>
<script>
$(function(){
  $(".weiyi").click(function() {
	$('.weiyi').removeClass('active');
	$(this).addClass('active');
  });
  $('#bars').on('click',function(){
	  $('.nav-user').addClass('hidden-xs');
	  if($('#nav').hasClass('hidden-xs')){
	      $('#nav').removeClass('hidden-xs');
		  $('.nav-primary').removeClass('hidden-xs');
	  }else{
	      $('#nav').addClass('hidden-xs');
		  $('.nav-primary').addClass('hidden-xs');			  
	  }
  });
    $('#users').on('click',function(){
	  $('.nav-primary').addClass('hidden-xs');
	  if($('.nav-users').hasClass('hidden-xs')){
	      $('#nav').removeClass('hidden-xs');
		  $('.nav-users').removeClass('hidden-xs');
	  }else{
	      $('#nav').addClass('hidden-xs');
		  $('.nav-users').addClass('hidden-xs');			  
	  }
    });
})
</script>

<body>
    <section class="vbox hidden-bsection" style="display: block;">
        <header class="bg-dark header navbar navbar-fixed-top-xs">
            <div class="navbar-header">
                <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav" id="bars">
                    <i class="fa fa-bars"></i>
                </a>
                <a href="javascript:;" class="navbar-brand" data-toggle="fullscreen">
                    <img src="<?php echo $_SESSION['headimg'];?>" class="m-r-sm" style="max-height: 40px;">
                </a>
                <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user" id="users">
                    <i class="fa fa-cog"></i>
                </a>
            </div>
            <div class="msgbox"></div>
            <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
                <li class="hidden-xs">
                    <a href="/index.php?g=Qyapp&m=Appslist&a=appCenter" target="_self" class="nav-new-style nav-border-right" title="应用中心">
                        应用中心
                    </a>
                </li>
                <li class="hidden-xs">
                    <a href="" target="_blank" class="nav-new-style nav-border-right nav-border-left" title="帮助">
                        帮助
                    </a>
                </li>

                <!-- 通知中心 @begin -->
                <li class="hidden-xs hidden">
                    <a href="#" class="dropdown-toggle nav-border-right nav-border-left nav-new-style" data-toggle="dropdown">
                        <i class="iconfont icon-newsnotice icon-size30"></i>
                        <span class="badge badge-sm up bg-danger m-l-n-sm js_msg_count"></span>
                    </a>
                    <section class="dropdown-menu aside-xl ">
                        <section class="panel bg-white js_msg_content">
                        </section>
                        <script type="text/html" id="js_msg_content_footer">
                            <footer class="panel-footer text-sm no-border">
                                <a href="/System/SetAccountNumber?t=" class="pull-right" title="消息通知设置"><i class="iconfont icon-noticeset"></i></a>
                                <a href="/System/NoticeMessageList?t=">查看所有消息</a>
                                <a href="javascript:;" data-path="/System/EmptyNoticeMessage?t=" class="m-l-sm js_msg_empty">清空全部未读</a>
                            </footer>
                        </script>
                    </section>  
                </li>
                <!-- 通知中心 @end -->
                <li class="dropdown" id="down">
                    <a href="javascript:void(0);" class="dropdown-toggle h54 nav-border-left" data-toggle="dropdown" id="show">
                        <span class="thumb-sm avatar pull-left">
                            <img src="./Tpl/Qyapp/Static/Images/avatar1.jpg" alt="">
                        </span>
                        <?php echo $_SESSION['contact'];?>              <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight" id="b">
                        <span class="arrow top"></span>
                        <li>
                            <a href="<?php echo U('Userinfo/info', array('token' => $token));?>" target="_self"><i class="iconfont icon-account m-r-xs icon-size20"></i>帐号信息</a>
                        </li>
						<li>
                            <a href="<?php echo U('Userinfo/upfile', array('token' => $token));?>"><i class="iconfont icon-binding m-r-xs icon-size20"></i>存储设置</a>
                        </li>
                        <li>
                            <a href="<?php echo U('Userinfo/edit', array('token' => $token));?>" target="_self"><i class="iconfont icon-pwd m-r-xs icon-size20"></i>修改密码</a>
                        </li>
                        <li>
                            <a href="<?php echo U('Userinfo/bind', array('token' => $token));?>" target="_self"><i class="iconfont icon-binding m-r-xs icon-size20"></i>帐号绑定</a>
                        </li>
						<li>
                            <a href="<?php echo U('Userinfo/version', array('token' => $token));?>" target="_self"><i class="iconfont icon-binding m-r-xs icon-size20"></i>版本升级</a>
                        </li>
						<li>
                            <a href="<?php echo U('Userinfo/appList', array('token' => $token));?>" target="_self"><i class="iconfont icon-binding m-r-xs icon-size20"></i>应用商店</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo U('Userinfo/logout', array('token' => $token));?>" data-toggle="ajaxModal" target="_self"><i class="iconfont icon-logout m-r-xs icon-size20"></i>退出</a>
                        </li>
                    </ul>
					
					<script>
						$b = $("#b");
						$("#show").on({
							"click": function(){
								$b.toggle();
								return false;
							}
						});
						$(document).on({
							"click": function(e){
								var src = e.target;

								if(src.id && src.id ==="b"){
									return false;
								}else{
									$b.hide();
								}
							}
						});
	
					</script>					
                </li>
            </ul>
        </header>
        <section>
            <section class="hbox stretch">
                <aside class="bg-dark lter aside-md hidden-print hidden-xs nav-xs" id="nav">
                    <section class="vbox">
                        <section class="w-f scrollable">
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 564px;"><div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333" style="overflow: hidden; width: auto; height: 564px;">
                                <nav class="nav-primary hidden-xs">
                                    <ul class="nav">
                                        <li class="active weiyi">
										<?php if(MODULE_NAME == 'Appslist'): ?><li class="active weiyi"><?php else: ?> <li class=" weiyi"><?php endif; ?>
                                            <a href="<?php echo U('Appslist/appList');?>" target="_self" class="active">
                                                <i class="iconfont icon-myapp fa-lg"></i><span>我的应用</span>
                                            </a>
                                        </li>
                                        <?php if(MODULE_NAME == 'Index'): ?><li class="active weiyi"><?php else: ?> <li class=" weiyi"><?php endif; ?>
                                            <a href="<?php echo U('Index/userList');?>" target="_self" class="">
                                                <i class="iconfont icon-contacts fa-lg"></i><span>通讯录</span>
                                            </a>
                                        </li>
                                        <?php if(MODULE_NAME == 'Organic'): ?><li class="active weiyi"><?php else: ?> <li class=" weiyi"><?php endif; ?>
                                            <a href="<?php echo U('Organic/index');?>" target="_self" class="">
                                                <i class="iconfont icon-org fa-lg"></i><span>组织架构</span>
                                            </a>
                                        </li>
                                       <?php if(MODULE_NAME == 'Msg'): ?><li class="active weiyi"><?php else: ?> <li class=" weiyi"><?php endif; ?>
                                            <a href="<?php echo U('Msg/appMsg');?>" target="_self" class="">
                                                <i class="iconfont icon-groupsend fa-lg"></i><span>群发消息</span>
                                            </a>
                                        </li>
										<?php if($_SESSION['node_id'] == ''): if(MODULE_NAME == 'Showadmin'): ?><li class="active weiyi"><?php else: ?> <li class=" weiyi"><?php endif; ?>
                                            <a href="<?php echo U('Showadmin/Group');?>" target="_self" class="">
                                                <i class="iconfont icon-permission fa-lg"></i><span>权限管理</span>
                                            </a>
                                        </li><?php endif; ?>									
                                    </ul>
                                </nav>
                            </div><div class="slimScrollBar" style="width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; z-index: 99; right: 0px; height: 564px; background: rgb(51, 51, 51);"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; opacity: 0.2; z-index: 90; right: 0px; background: rgb(51, 51, 51);"></div></div>
                        </section>
                    </section>
                </aside>
                <section id="content">
                    <section class="vbox">
<style>
.nav_jieshu{ margin-left:50px; float:left;}
.js_anniu{ margin-right:none; float:left; height:30px; border-radius:0px; line-height:15px;}
.right_bd{ border-right:none;}
</style>
﻿<section class="hbox stretch" style="position:absolute; top:0;">
	<aside class="aside-md bg-white b-r" id="subNav">
	
	<div class="wrapper b-b header"><b>借书</b></div>
	<ul class="nav">
		<li class="b-b b-light open">
			<a href="<?php echo U('Borrow_books/index',array('mid'=>$_GET['mid']));?>" target="_self"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>用户管理</a>
		</li>				
		<li class="b-b b-light"><a href="<?php echo U('Borrow_books/msgs',array('mid'=>$_GET['mid']));?>"  target="_self"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>借书管理</a></li>
		<li class="b-b b-light">
			<a href="<?php echo U('Borrow_books/cat',array('mid'=>$_GET['mid']));?>" target="_self"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>分类管理</a>
		</li>
		<li class="b-b b-light">
			<a href="<?php echo U('Borrow_books/room',array('mid'=>$_GET['mid']));?>" target="_self"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>书库</a>
		</li>
		
		<li class="b-b b-light">
			<a href="<?php echo U('Borrow_books/message',array('mid'=>$_GET['mid']));?>" target="_self"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>读者留言</a>
		</li>			
		
		<li class="b-b b-light"><a href="<?php echo U('Menu/menu',array('mid'=>$_GET['mid']));?>" target="_self"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>自定义菜单</a></li>
		<li class="b-b b-light">
			<a href="<?php echo U('Appmsg/conf',array('mid'=>$_GET['mid']));?>" target="_self"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>应用管理</a>
		</li>			
	</ul>
  
	</aside>
    <aside>
        <section class="vbox">
            <header class="header bg-white b-b clearfix">		
                 <form class="talbe-search" method="post" action="" target="_self">
                    <div class="row m-t-sm">
					<div class="btn-group" style="float:right;margin-right:30px;">
									<a class="btn btn-default btn-sm" href="<?php echo U('Borrow_books/export',array('mid'=>$_GET['mid']));?>" target="_self">导出数据</a>
								</div>
                        <div class="col-sm-4 m-b-xs">

								
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                            <span class="dropdown-label" id="searchTypeTxt1">按书籍分类查询</span>
                                            <span class="caret"></span>
                                        </button>
                                       <ul class="dropdown-menu dropdown-select js_select_search" id="searchMenu">
                                             <li >
                                                <a href="javascript:void();">
                                                    <input type="radio" value="0" name="searchBy"/>按书籍名称查询
                                                </a>
                                            </li> 
                                            
											<li >
                                                <a href="javascript:void();">
                                                    <input type="radio" value="1" name="searchBy" />按用户名查询
                                                </a>
                                            </li>
											<li >
                                                <a href="#">
                                                    <input type="radio" value="1" name="searchBy" />按书籍分类查询
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="input-group js_show_date js_show_date_0 " id="select_4" >
										<input type="text" class="form-control input-sm" style=" min-width:230px; max-width:300px; name="class_name" id="searchDepartnames" value="<?php echo ($departname); ?>" placeholder="请输入书籍分类名称"/>
										<input type="text" class="form-control input-sm" style="display:none; width:230px;" name="username" id="searchUsername" value="<?php echo ($username); ?>" placeholder="请输入用户名"/>
										<input type="text" class="form-control input-sm" style="display:none; width:230px;" name="book_name" id="searchDepartname" value="<?php echo ($departname); ?>" placeholder="请输入书籍名称"/>										
										<span class="input-group-addon btn-sm" style="cursor:pointer;" onclick="searchInfo();" id="clickSearch"><i class="fa fa-search"></i></span>									
									</div>
                                </div>
								<script>  
									function searchInfo(){
									   $('form').submit();						   
									}									
									$('#searchMenu li').each(function(){
										$(this).click(function(){
											if($(this).index() == 0){
												$('#searchTypeTxt1').text('按书籍名称查询');
												$('#searchDepartname').css('display','block');
												$('#searchUsername').css('display','none');
												$('#searchDepartnames').css('display','none');
											}else if($(this).index() == 1){
												$('#searchTypeTxt1').text('按用户名查询');
												$('#searchUsername').css('display','block');
												$('#searchDepartname').css('display','none');
												$('#searchDepartnames').css('display','none');
											}else{
												$('#searchTypeTxt1').text('按书籍分类查询');
												$('#searchUsername').css('display','none');
												$('#searchDepartname').css('display','none');																		
												$('#searchDepartnames').css('display','block');											
											}
											
										});

									});
								</script>
                            </div>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<div class="nav_jieshu">
								<a href="<?php echo U('Borrow_books/msgs',array('status'=>'all'));?>" target="_self"><span class="right_bd js_anniu btn btn-default">全部</span></a>
								<a href="<?php echo U('Borrow_books/msgs',array('status'=>'1'));?>" target="_self"><span class="right_bd js_anniu btn btn-default">已通过(<?php echo ($count1); ?>)</span></a>
								<a href="<?php echo U('Borrow_books/msgs',array('status'=>'2'));?>" target="_self"><span class="right_bd js_anniu btn btn-default">已拒绝(<?php echo ($count2); ?>)</span></a>
								<a href="<?php echo U('Borrow_books/msgs',array('status'=>'0'));?>" target="_self"><span class="js_anniu btn btn-default">未审核(<?php echo ($count3); ?>)</span></a>
							</div>
					</div>
                </form>
            </header>
            <section class="scrollable wrapper w-f">
                <section class="panel panel-default ">
                    <div class="table-responsive">
                        <table class="table table-hover m-b-none entity-view">
                                <col style="width:8%"/>  
                                <col style="width:15%"/>						
                                <col style="width:15%"/>  
                                <col style="width:15%"/>
                                <col style="width:15%"/> 
                                <col style="width:10%"/>
								<!-- <col style="width:10%"/> -->
								<col style="width:10%"/>								
                            <thead>
                            <tr>
                                <th class="th-sortable">编号</th>							
                                <th class="th-sortable">书籍名称</th>
								<th class="th-sortable">书籍分类</th>
                                <th class="th-sortable">借阅日</th>								
                                <th class="th-sortable">归还日</th>
								<th class="th-sortable">借阅人</th>
                                <!-- <th class="th-sortable">记录</th> -->
                                <th class="th-sortable">审核状态</th>
                            </tr>
                            </thead>
                            <tbody id="mytable">
							
							<?php if($info): if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr id="<?php echo ($data["id"]); ?>">
									<td><?php echo ($data["id"]); ?></td>
									<td><?php echo ($data["book_name"]); ?></td>
									<td><?php echo ($data["className"]); ?></td>	
									<td><?php echo ($data["start_time"]); ?></td>
									<td><?php echo ($data["return_time"]); ?></td>
									<td><?php echo ($data["user_name"]); ?></td>									
									<!-- <td><?php if($data['is_return'] == '1'): ?>已归还<?php elseif($data['is_return'] == 2): ?>未归还<?php else: ?>借书中<?php endif; ?></td> -->
									<td><?php if($data['status'] == '1'): ?>已通过<?php elseif($data['status'] == '2'): ?>已拒绝<?php else: ?>未审核<?php endif; ?></td>
									<!-- <td>
										<a class="btn default btn-xs purple" href="<?php echo U('Borrow_books/contEdit',array('id'=>$data['id']));?>">
										    审核通过
										</a>								

										<a class="btn default btn-xs black" href="javascript:;" onclick="catDel('<?php echo ($data["id"]); ?>')">
										    残忍拒绝
										</a>
                                    </td> -->	 			    					
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>					
							<?php else: ?>
                            <tr><td colspan='9' style='text-align: center'>暂无信息</td></tr><?php endif; ?>
							</tbody>
                        </table>
                    </div>
                </section>
            </section>
            <footer class="footer bg-white b-t">
                <div class="row text-center-xs">
                    <div class="col-md-6 hidden-sm">
                        <p class="text-muted m-t"><?php echo ($page); ?></p>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right text-center-xs">
                        <ul class="pagination pagination-sm m-t-sm m-b-none" data-pages-total="0" data-page-current="0"></ul>
                    </div>
                </div>
            </footer>

        </section>
    </aside>
</section>
 <section class="entity-panel hd" id="info">
</section>	
<script src="./Tpl/Qyapp/Static/Js/weiyi.js" type="text/javascript"></script>	
<script type="text/javascript">
$('#mytable tr').click(function(){
	$(this).each(function(){
        var userId = $(this).attr('id');
		if($('#user'+userId).length>0){
			var curId = $('#info').children().attr('id');			
		    if(curId == 'user'+userId){
				if($('.entity-panel').hasClass('hd')){
					$('.entity-panel').removeClass('hd');
				}else{
					$('.entity-panel').addClass('hd');
				}			    
			}else{
				$('#info').empty();   
				$('#info').load("index.php?g=Qyapp&m=Borrow_books&a=msgsInfo&mid=<?php echo $_GET['mid'];?>&id="+userId);
				$('.entity-panel').removeClass('hd');
				$('.entity-panel').css('right','0px');				    
			}
		}else{
		    $('#info').empty();   
			$('#info').load("index.php?g=Qyapp&m=Borrow_books&a=msgsInfo&mid=<?php echo $_GET['mid'];?>&id="+userId); 
			$('.entity-panel').removeClass('hd');
			$('.entity-panel').css('right','0px');			    
		}
	});
	
});	
</script>
 

<script type="text/javascript">
//删除操作
function catDel(id){
	$.ajax({
		type:"POST",
		url:"index.php?g=Qyapp&m=Home&a=catDel&mid=<?php echo $_GET['mid'];?>&id="+id,
		data:"id="+id,
		dataType:'json',
		success:function(json){
			var status = json.status;
			if(status==1)
			{
				alert('删除成功');location.reload();
				$('#cont').html('删除成功');
				$('#delMember').model();
			}else
			{
				alert('删除失败');location.reload();
				$('#cont').html('删除失败');
				$('#delMember').model();
			}
		}
	});
}
</script>
</body>

</html>
</html>