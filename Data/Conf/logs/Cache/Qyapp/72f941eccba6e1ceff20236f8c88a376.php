<?php if (!defined('THINK_PATH')) exit();?><div class="form-horizontal form-validate form-modal">
    <div class="modal-dialog">
        <div class="modal-content">
		<form action="<?php echo U('Showadmin/Group');?>" target="_self" method="post">	
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">新建管理组</h4>
            </div>
            <div class="modal-body">
		
				<div class="form-group">
					<label class="col-sm-2 control-label must">管理组名</label>
					<div class="col-sm-6 ">
						<input class="form-control" data-rule-required="true"  type="text" placeholder="请输入管理员名称" name="group" id="group" />                                </div>
				</div>
			   <div class="form-group">
					<label class="col-sm-2 control-label must">职责</label>
					<div class="col-sm-6">
						<input class="form-control" data-rule-required="true"  type="text" placeholder="请输入职责" name="position" id="position" />                                </div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label must">账号</label>
					<div class="col-sm-6 ">
						<input class="form-control" data-rule-required="true"  type="text" placeholder="请输入帐号" name="name" id="name" />                      </div>
					<div class="col-sm-3">@<?php echo (session('user_id')); ?> （该管理员的的登陆的登录名称）</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label must">user_id</label>
					<div class="col-sm-6">
						<input class="form-control" data-rule-required="true"  type="text" placeholder="对应通讯录中的userid" name="user_id" id="user_id" />  </div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label must">密码</label>
					<div class="col-sm-6 ">
						<input type="password" class="form-control" id="password" name="password" data-rule-required="true" data-rule-rangelength="[6,16]" placeholder="请输入6至16位字母或数字"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label must">确认密码</label>
					<div class="col-sm-6 ">
						<input type="password" class="form-control" name="cf_password" id="cf_password" data-rule-equalTo="#password" placeholder="请再次输入您的密码" />
					</div>
				</div>			
					

            </div>
            <div class="modal-footer">
                <button type="submit" id="submit" class="btn btn-primary" data-loading-text="保存中..." >保存</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
            </div>
			</form>	
        </div>
    </div>
</div>
<!-- <script>
$(function(){
  $("#submit").click(function() {
	var name = $("#groupname").val();
	
	$.ajax({
			type: "post",  
			url:"<?php echo U('Showadmin/addGroup');?>",
			dataType:'json',
			data:'name='+name,
			success:function(json){
				var status = json.status;
				if(status==1){
					alert('添加成功');
					window.location.reload();
				}else{
					alert('添加失败');
				}

			}
		});
  });
  
})
</script>  -->
<!-- <script>
$(function(){
  $("#submit").click(function() {
	var btn = $(this);
    var group = $("#group").val();
    var position = $("#position").val();
	var name = $("#name").val();
	var password = $("#password").val();
	var cf_password = $("#cf_password").val();
	
	if(password!=cf_password){
	alert('密码输入有误请重新输入');return
	}
	$.ajax({
			type: "post",  
			url:"<?php echo U('Showadmin/Group');?>",
			dataType:'json',
			data:'group='+group+'&password='+password+'&position='+position+'&name='+name,
			
			success:function(json){
				var status = json.status;
				if(status==0){
					alert('信息不完善');
				}else if(status==1){
					alert('添加成功');
					 top.location='<?php echo U('Showadmin/nlist');?>';
				}else if(status==2){
					alert('添加失败');
				}else if(status==3){
					alert('该用户名已存在');
				}
			}
		});
	
  });
  
})
</script> -->