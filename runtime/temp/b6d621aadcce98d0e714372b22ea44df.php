<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:41:"./template/glt168\admin_v1\admin\add.html";i:1525684169;s:43:"./template/glt168/admin_v1/public/meta.html";i:1525429984;s:45:"./template/glt168/admin_v1/public/footer.html";i:1525418397;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/static/admv1/lib/html5shiv.js"></script>
<script type="text/javascript" src="/static/admv1/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/static/admv1/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admv1/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/static/admv1/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/static/admv1/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/static/admv1/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/static/admv1/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>添加管理员 - 管理员管理 - H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>管理员：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="" placeholder="" id="adminName" name="adminName">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>输入密码：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="password" class="input-text" autocomplete="off" value="" placeholder="密码" id="password" name="password">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>性别：</label>
		<div class="formControls col-xs-8 col-sm-9 skin-minimal">
			<div class="radio-box">
				<input type="radio" name="sex" id="sex-1" value="1"  checked="checked">
				<label for="sex-1">男</label>
			</div>
			<div class="radio-box">
				<input type="radio"  name="sex" id="sex-2" value="0">
				<label for="sex-2">女</label>
			</div>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>手机：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="" placeholder="" id="phone" name="phone">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>邮箱：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" placeholder="@" name="email" id="email">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">角色：</label>
		<div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:150px;">
			<select class="select" name="adminRole" size="1">
				<option value="1">超级管理员</option>
				<option value="2">总编</option>
				<option value="3">栏目主辑</option>
				<option value="4">栏目编辑</option>
			</select>
			</span> </div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">备注：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<textarea name="" cols="" rows="" class="textarea"  placeholder="说点什么...100个字符以内" dragonfly="true"></textarea>
			<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
		</div>
	</div>
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
			<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
		</div>
	</div>
	
</article>

<script type="text/javascript" src="/static/admv1/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/static/admv1/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admv1/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/static/admv1/static/h-ui.admin/js/H-ui.admin.js"></script> 

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/admv1/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/static/admv1/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/static/admv1/lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript">
$(function(){
	$(".textarea").keyup(function(){
		if($(this).val().length > 100){
			$(this).val($(this).val().substring(0,100));
			// return false;
		}
		$(".textarea-length").html($(this).val().length);
	})
	


	$(".radius[type='submit']").click(function(){
		var name    = $("#adminName").val();
		var password= $("#password").val();
		var sex     = $("[name=sex]:checked").val();
		var phone   = $("#phone").val();
		var email   = $("#email").val();
		var role_id = $(".select").val();
		var comment = $(".textarea").val();
		if(!name.match(/^[a-z]\w{4,14}/)){
			layer.msg('管理员账号以字母开头，有效位数5-15位!',{icon:5,time:3000});
			$("#adminName").focus();
			return false;
		}
		if(!password.match(/\w{5,15}/)){
			layer.msg('密码有效位数5-15位!',{icon:5,time:3000});
			$("#password").focus();
			return false;
		}
		if(password=="123456"){
			layer.msg('请输入【123456】以外的密码！',{icon:5,time:3000});
			$("#password").focus();
			return false;
		}
		if(!phone.match(/^1[3-9]\d{9}/)){
			layer.msg('请检查输入的手机号！！！',{icon:5,time:3000});
			$("#phone").focus();
			return false;
		}
		if(!email.match(/^[\w]{1,20}@[\w-]{1,8}[.][a-z]{1,5}/)){
			layer.msg('请输入正确的邮箱！',{icon:5,time:3000});
			$("#email").focus();
			return false;
		}
		if($(".textarea").val().length > 100){
			$(".textarea").val($(".textarea").val().substring(0,100));
			// return false;
		}
		$.ajax({
			type:"post",
			data:{name:name,password:password,sex:sex,phone:phone,email:email,role_id:role_id,comment:comment},
			dataType:"json",
			url:"<?php echo url('admin/add_do'); ?>",
			success:function(data){
				if(data.s == 1){
					layer.msg('添加成功!',{icon:1,time:1000});
					$("body").remove();
				}else{
					layer.msg(data.s,{icon:5,time:1000});
				}
				

			},
			error:function(){
				layer.msg('添加失败!',{icon:5,time:1000});
			}
		})
	})
	
	
});
</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>