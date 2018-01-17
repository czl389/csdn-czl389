<?php
	include(M."registrant.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>注册成功</title>
		<meta name=\"description\" content=\"注册成功。这里显示的是你的信息。\">
		<meta name=\"keywords\" content=\"注册成功,南京大学生家教网\">
<?php
include(V.'header-content.php');
?>
	</head>
	<body>
<?php 
//导航条
include(V.'top-bar.php');
?>	

	<!--//在这里$row是表单提交的用户名在数据库中查询的结果-->
	<?php if(!empty($rows)) { ?>	
		<div class="alert alert-warning" role="alert">
			您的QQ已注册过，请返回登录。      
			<a href="?page=tutor"><span class="pull-right glyphicon glyphicon-home"></span><strong class="pull-right">【返回】</strong></a>
		</div>
	<?php } else { ?>
		<div class="alert alert-success" role="alert">
			注册成功~   请返回主页登录。      
			<a href="?page=tutor"><span class="pull-right glyphicon glyphicon-home"></span><strong class="pull-right">【返回】</strong></a>
		</div>
		<div class="container">
			<div class="col-sm-6">
				<h3>你的信息：</h3>
				<div class="panel panel-info">

					<div class="panel-heading">
						<h3 class="panel-title">#<?php echo $id[0];?></h3>
					</div>

					<div class="panel-body">
						  <table class="table">
							  <tr>
								<td><?php echo $name;?></td>
								<td><?php echo $grade;?></td>
								<td><?php echo $gender;?></td>
							  </tr>
							  <tr>
								<td><?php echo $school;?></td>
								<td><strong>专业：</strong><?php echo $major;?></td>
								<td><strong>QQ：</strong><?php echo $user;?></td>
							  </tr>
							  <tr>
								<td colspan="3"><strong>可授课科目：</strong><?php echo $subject;?></td>
							  </tr>
							  <tr>
								<td colspan="3"><strong>自我描述：</strong><?php echo $aboutme;?></td>
							  </tr>
						  </table>
					</div>

				</div>
			</div>
		</div>
	<?php } ?>

<?php
//页尾
include(V.'footer-content.php');
?>
	</body>
</html>