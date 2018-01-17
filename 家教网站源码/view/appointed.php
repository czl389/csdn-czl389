<?php
	include(M."order.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>登记成功</title>
		<meta name=\"description\" content=\"登记成功。这里显示的是你的信息。\">
		<meta name=\"keywords\" content=\"登记成功,南京大学生家教网\">
<?php
include(V.'header-content.php');
?>
	</head>
	<body>
<?php 
//导航条
include(V.'top-bar.php');
?>		
		<div class="alert alert-success" role="alert">
			登记成功~  马上为您安排，请耐心等待。      
			<a href="?page=student"><span class="pull-right glyphicon glyphicon-home"></span><strong class="pull-right">【返回】</strong></a>
		</div>
		<div class="container">
			<div class="col-sm-6 col-sm-offset-3">
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
								<td><?php echo $address;?></td>
								<td><strong>详细住址：</strong><?php echo $detailed;?></td>
								<td><strong>联系电话：</strong><?php echo $tel;?></td>
							  </tr>
							  <tr>
								<td colspan="3"><strong>补习科目：</strong><?php echo $subjects;?></td>
							  </tr>
							  <tr>
								<td colspan="3"><strong>时间及报酬：</strong><?php echo $timepay;?></td>
							  </tr>
							  <tr>
								<td colspan="3"><strong>要求：</strong><?php echo $want;?></td>
							  </tr>
						  </table>
					</div>

				</div>
			</div>
		</div>

<?php
//页尾
include(V.'footer-content.php');
?>
	</body>
</html>