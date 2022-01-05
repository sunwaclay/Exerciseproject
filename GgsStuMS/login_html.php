<?php if(!defined('APP')) die('error!');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>后台登录-学生管理系统</title>
		<style type="text/css">
			*{padding: 0;margin: 0;}
			body{background: url(img/gzgs.jpeg);}
			#box{width: 500px;margin: auto;margin-top: 50px;border:5px double blue;background-color: white;margin-bottom: 50px;}
			h1{text-align: center;font-family: "黑体";color: royalblue;margin-top: 10px;}
			form{margin: 40px auto;}
			fieldset{background: #fff;padding: 10px;margin: 10px auto;width: 470px;color: royalblue;border:2px dashed cadetblue;}
			form li{list-style: none;padding: 5px 0px;}
			form li label{float: left;width: 70px ;text-align: right;margin-left: 10px;}
			form li a{font-size: 14px;color: #999;text-decoration: none;}
			.btn{margin-left: 65px;}
			.btn01{border-radius: 3px;border: none;background: #01a4f1;color: #fff;font-size: 14px; font-weight: bold;width: 80px;height: 30px;line-height: 30px;padding: 0px 10px;cursor: pointer;margin-left: 20px;}
			form input{width:200px;height:25px;}
			form li img{vertical-align: bottom;margin: 0px 8px;}
			.logo{text-align: center;background-color: white;padding: 14px 9px;margin-top: -40px;}
		</style>
	</head>
	<body>
		<div id="box">
			<h1>广州工商-工学院学生管理系统</h1>
			<form method="post">
				<fieldset>
					<legend class="title"><h3>管理员登录</h3></legend>
					<ul>
						<li><label>用户名：</label><input type="text" name="username" id="username" /></li>
						<li><label>密码：</label><input type="password" name="password" id="password" /></li>
						<li><label>验证码：</label><input type="text" name="code" id="code" /><img src="lib/code.php" id="code_img"/><a href="#" id="change">点击刷新</a></li>
						<li class="btn"><input type="submit" value="登录" class="btn01" /><input type="reset" value="重置" class="btn01" /></li>
					</ul>
				</fieldset>
			</form>
			<script>
				var change=document.getElementById("change");
				var img=document.getElementById("code_img");
				change.onclick=function(){
					img.src="lib/code.php?t="+Math.random();
					return false;
				}
			</script>
			<div class="logo">
				<img src="img/logo.png" />
				<br />
				<br />
				<h3 style="color: #0099FF;">&nbsp————今日工商学子,明日管理人才。————</h3>
				 
			</div>
		</div>
	</body>
</html>
