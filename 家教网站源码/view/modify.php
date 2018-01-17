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
				<?php
				$GRADES=array(
				"大一",
				"大二",
				"大三",
				"大四",
				"研一",
				"研二",
				"研三",
				"博士",
				"其它年级"
				);
				$SCHOOLS=array(
				"南京师范大学",
				"南京大学",
				"东南大学",
				"南京农业大学",
				"南京航空航天大学",
				"南京理工大学",
				"河海大学",
				"中国药科大学",
				"南京工业大学",
				"南京林业大学",
				"南京邮电大学",
				"南京财经大学",
				"南京信息工程大学",
				"南京医科大学",
				"南京中医药大学",
				"三江学院",
				"南京艺术学院",
				"南京体育学院",
				"南京晓庄学院",
				"南京审计大学",
				"其它院校"
				);

				$SUBJECTS=array(
				"小学语文",
				"小学数学",
				"小学英语",
				"初中语文",
				"初中数学",
				"初中英语",
				"高中语文",
				"高中数学",
				"高中英语",
				"初中物理",
				"初中化学",
				"高中物理",
				"高中化学",
				"史地政生",
				"竞赛",
				"复读",
				"课外英语",
				"艺术类",									  
				"其它"
				);
				?>
				<form role="form" action="?page=update" method="post">
					<h3>我的信息：</h3>
					<div class="panel panel-info">

						<div class="panel-heading">
							<h3 class="panel-title">#<?php echo $id; ?></h3>
						</div>
						<div class="panel-body">
							  <table class="table">
								  <tr>
									<td><label>姓名：</label><input type="text" name="name" value="<?php echo $name; ?>" class="form-control"></td>
									<td>
										<label>年级：</label>
											<select name="grade" class="form-control">
											<?php 
												foreach ($GRADES as $GRADE)
												{
													if ($GRADE== $grade)
														echo "<option selected='selected' value='$GRADE'>$GRADE</option>";
													else
														echo "<option value='$GRADE'>$GRADE</option>";
												}
											?>
											</select>
									</td>
									<td>
										<label>性别：</label>
										<select name="gender" class="form-control">
												<option <?php if($gender=="男生") echo "selected='selected'"; ?> value="男生">男生</option>
												<option <?php if($gender=="女生") echo "selected='selected'"; ?> value="女生">女生</option>
											</select>
									</td>
								  </tr>
								  <tr>
									<td>
										<label>学校：</label>
											<select name="school" class="form-control">
											<?php 
												foreach ($SCHOOLS as $SCHOOL)
												{
													if ($SCHOOL== $school)
														echo "<option selected='selected' value='$SCHOOL'>$SCHOOL</option>";
													else
														echo "<option value='$SCHOOL'>$SCHOOL</option>";
												}
											?>
											</select>
									</td>
									<td><label>专业：</label><input type="text" name="major" value="<?php echo $major; ?>" class="form-control"></td>
									<td><label>QQ：</label><input type="number" name="user" value="<?php echo $_SESSION["user"]; ?>" class="form-control" disabled></td>
									<input type="hidden" name="user" value="<?php echo $_SESSION["user"]; ?>" class="form-control">
								  </tr>
								  <tr>
									<td colspan="3">
										<label>可授课科目：</label>
										<?php
										$checkeds=explode(',',$subject);
										foreach ($SUBJECTS as $SUBJECT)
											{
												if (in_array($SUBJECT,$checkeds))
													echo "<label class='checkbox-inline'>
														<input type='checkbox' name='subject[]' value='$SUBJECT' checked='checked'> $SUBJECT
														</label>";
													else
													echo "<label class='checkbox-inline'>
														<input type='checkbox' name='subject[]' value='$SUBJECT'> $SUBJECT
														</label>";
											}
										?>
									</td>
								  </tr>
								  <tr>
									<td colspan="3">
									<label>自我描述：</label>
									<textarea name="aboutme" placeholder="例如：个人擅长、证书、技能、家教经验等" 
										class="form-control"><?php echo $aboutme; ?></textarea>
									</td>
								  </tr>
								  <tr>
									<td colspan="3">
									<label>简历状态：</label>
									<label class="checkbox-inline">
											  <input type="radio" name="push"
												 value="1" <?php if ($push==1) echo "checked";?>>推送
									</label>
									<label class="checkbox-inline">
											  <input type="radio" name="push"
												 value="0" <?php if ($push==0) echo "checked";?>>撤回
									</label>
									</td>
								  </tr>
								  <tr>
									<td colspan="2">										
									<div id="demo" class="collapse">
										<label>密码:</label>
				                        	<input type="number" name="pass" <?php echo "value=\"".$pass."\""; ?> placeholder="设置本站密码" class="form-control">
									</div>
									</td>
								  </tr>
							  </table>
						</div>
					</div>
					<div style="text-align:center">
						<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#demo" style="float:left">修改密码</button>
						<button type="submit" class="btn btn-primary">确认提交</button>
						<a href="?page=myinfo"><button type="button" class="btn btn-info">返回</button></a>
					</div>
				</form>



			</div><!--col-sm-6-->
		</div><!--container-->

<?php
//页尾
include(V.'footer-content.php');
?>
	</body>
</html>