<?php if(!defined('APP')) die('error'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>学生信息列表</title>
		<style type="text/css">
			#box{
				width: 98%;
				margin: auto;
				padding: 10px;
				text-align: center;
				background: #fff;
			}
			table{
				width: 100%;
				border: 1px solid #999;
				border-collapse: collapse;
			}
			table th,table td{
				height: 20px;
				border: 1px solid #999;
				text-align: center;
				
			}
			table th{
				background:lightseagreen;
				height: 30px;
			}
			table th a{
				color: white;
				text-decoration:none
			}
			.search{
				float: right;
				font-size: 16px;
				margin: 15px 0px;
			}
			.search input{
				margin-left:5px;
				line-height: 20px;
			}
			#page{
				margin: 8px 0px;
				text-align: center;
			}
			#page a{
				margin-left: 8px;
				color: forestgreen;
				text-decoration:none
			}
			#add{
				text-align: right;
			}
			#add a{
				color: forestgreen;
				text-decoration:none
			}
			h1{color: #0099FF;}
			.btn{
				background-color: #0099ff;color: #fff;width: 80px;height: 30px;margin: 10px 5px;cursor: pointer;text-align: center;border-radius: 3px;
			}
		</style>
	</head>
	<body>
		<div id="box">
			<h1>学生信息列表</h1>
			<form action="./showList.php" method="get">
				<div class="search">
					<label>快速查询：</label><input type="text" name="keyword" id="keyword" /><input type="submit" name="sb" id="sb" value="提交"  class="btn"/>
				</div>
			</form>
			<table>
				<tr>
					<th><a href="./showList.php?order=e_id&sort=<?php echo ($order=='e_id')? $sort : 'desc';?>">ID</a></th><th><a href="./showList.php?order=e_name&sort=<?php echo ($order=='e_name')? $sort : 'desc';?>">姓名</a></th><th><a href="./showList.php?order=e_sex&sort=<?php echo ($order=='e_sex')? $sort : 'desc';?>">性别</a></th><th><a href="./showList.php?order=e_dept&sort=<?php echo ($order=='e_dept')? $sort : 'desc';?>">就读专业</a></th><th><a href="./showList.php?order=e_birth&sort=<?php echo ($order=='e_birth')? $sort : 'desc';?>">注册日期</a></th><th><a href="./showList.php?order=e_entry&sort=<?php echo ($order=='e_entry')? $sort : 'desc';?>">入学时间</a></th><th style="color: white;">相关操作</th>
				</tr>
				<?php if(!empty($emp_info)){ ?>
					<?php foreach($emp_info as $row){ ?>
				<tr>
					<td><?php echo $row['e_id'];?></td>
					<td><?php echo $row['e_name'];?></td>
					<td><?php echo $row['e_sex'];?></td>
					<td><?php echo $row['e_dept'];?></td>
					<td><?php echo $row['e_birth'];?></td>
					<td><?php echo $row['e_entry'];?></td>
					<td><img src="images/edit.png"style="width: 16px;height: 16px;"><a style="color: forestgreen;
				text-decoration:none" href="empUpdate.php?e_id=<?php echo $row['e_id']; ?>">编辑</a>&nbsp;&nbsp;<img src="images/delete.png" style="width: 16px;height: 16px;"><a style="color: forestgreen;
				text-decoration:none" href="empDelete.php?e_id=<?php echo $row['e_id']; ?>">删除</a></td>
				</tr>
				<?php } ?>
				<?php }else{ ?>
					<tr><td colspan="7">暂无学生数据！</td></tr>
				<?php }?>
			</table>
			<div id="page" ><?php echo $page_html; ?></div>
			<div id="add"><a href="empAdd.php">添加学生→</a></div>
		</div>
	</body>
</html>
