<? 
    /**
     * home.php
     *
     * A simple home page for these login demos.
     *
     * David J. Malan
     * malan@harvard.edu
     */
	 //suppress notices
	error_reporting(E_ALL ^ E_NOTICE);
    // enable sessions
    session_start();
	//查询我的信息
	include(M.'queryme.php');	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>我的简历信息</title>
		<meta name=\"description\" content=\"。这里显示的是你的信息。\">
		<meta name=\"keywords\" content=\"家教简历,南京大学生家教网\">
<?php
include(V.'header-content.php');
?>
	</head>
	<body>
<?php 
//导航条
include(V.'top-bar.php');
?>
		<!--简历页-->
		<div class="container">
			<div class="col-sm-6">
				<h3>我的信息：</h3>
				<div class="panel panel-info">

					<div class="panel-heading">
						<h3 class="panel-title">#<?php echo $id; ?></h3>
					</div>

					<div class="panel-body">
						  <table class="table">
							  <tr>
								<td><label class="sr-only">姓名：</label><?php echo $name;?></td>
								<td><label class="sr-only">年级：</label><?php echo $grade;?></td>
								<td><label class="sr-only">性别：</label><?php echo $gender;?></td>
							  </tr>
							  <tr>
								<td><label class="sr-only">学校：</label><?php echo $school;?></td>
								<td><label>专业：</label><?php echo $major;?></td>
								<td><label>QQ：</label><?php echo $user;?></td>
							  </tr>
							  <tr>
								<td colspan="3"><label>可授课科目：</label><?php echo $subject;?></td>
							  </tr>
							  <tr>
								<td colspan="3"><label>自我描述：</label><?php echo $aboutme;?></td>
							  </tr>
							  <tr>
								<td><label>简历状态：</label><?php if($push==1) echo "已推送";else echo "已撤回";?></td>
							  </tr>
						  </table>
					</div>

				</div>
				<div style="text-align:center">
					<a href="?page=modify"><button type="button" class="btn btn-danger">修改简历</button></a>
					<a href="?page=tutor"><button type="button" class="btn btn-info">返回</button></a>
				</div>
			</div>
		</div>

<?php
//页尾
include(V.'footer-content.php');
?>
	</body>
</html>