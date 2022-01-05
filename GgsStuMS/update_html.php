<?php if(!defined('APP')) die('error'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<style type="text/css">
		body{background:url(img/bg.PNG);margin: 0;padding: 0;border: 0;}
		#box{width: 400px;margin: 15px auto; padding: 20px;border: 5px double red;background-color: #fff;}
		#box h1{font-size: 25px;text-align: center;}
		.tab{margin: auto;border-collapse: separate;border-spacing: 2px 10px;}
		.tab th{font-weight: normal;text-align: right;}
		.tab input[type='text'],.tab input[type='date']{width: 180px;height: 22px;padding-left: 4px;}
		.tab select{width: 190px;height: 25px;padding-left: 4px;}
		.btn{background-color: #0099ff;color: #fff;width: 80px;height: 30px;margin: 10px 5px;cursor: pointer;text-align: center;}
		.b{text-align: center;}
		h1{color: orangered;}
		#return a{
			color: forestgreen;text-decoration:none;
		}
	</style>
	<body>
		<div id="box">
			<h1>修改学生信息</h1>
			<form method="post">
				<table class="tab">
					<tr><th>姓名：</th><td><input type="text" name="e_name" id="e_name" value="<?php echo $emp_info['e_name'];?>" /></td></tr>
					<tr><th>性别：</th><td><input type="radio" name="e_sex" id="e_sex" value="男" <?php if($emp_info['e_sex']=='男') echo 'checked';?> />男<input type="radio" name="e_sex" id="e_sex" value="女" <?php if($emp_info['e_sex']=='女') echo 'checked';?>/>女</td></tr>
					<tr><th>所属部门：</th><td><select name="e_dept" id="e_dept"><option value="">--------请选择------------</option><option value="网络工程" <?php if($emp_info['e_dept']=='网络工程') echo 'selected';?>>网络工程</option><option value="软件工程" <?php if($emp_info['e_dept']=='软件工程') echo 'selected';?>>软件工程</option><option value="数字媒体" <?php if($emp_info['e_dept']=='数字媒体') echo 'selected';?>>数字媒体</option><option value="通信工程" <?php if($emp_info['e_dept']=='通信工程') echo 'selected';?>>通信工程</option><option value="电子信息工程" <?php if($emp_info['e_dept']=='电子信息工程') echo 'selected';?>>电子信息工程</option></select></td></tr>
					<tr><th>注册日期：</th><td><input type="date" name="e_birth" id="e_birth" value="<?php echo $emp_info['e_birth'];?>"/></td></tr>
					<tr><th>入学时间：</th><td><input type="date" name="e_entry" id="e_entry" value="<?php echo $emp_info['e_entry'];?>" /></td></tr>
					<tr><td class="b" colspan="2"><input type="submit"  value="保存资料" class="btn" /><input type="reset" value="重新填写" class="btn" /></td></tr>
				</table>
				<div id="return"><a href="showList.php">返回首页</a></div>
			</form>
		</div>
	</body>
</html>
