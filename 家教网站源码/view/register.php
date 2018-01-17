<!DOCTYPE html>
<html>
	<head>
		<title>大学生注册页</title>
		<meta name=\"description\" content=\"马上注册，丰富你的简历。\">
		<meta name=\"keywords\" content=\"用户注册,南京大学生家教网\">
<?php
		include(V.'header-content.php');
?>
        <link rel="stylesheet" href="assets/css/style.css">


	</head>
	<body>
<?php
//导航条
include(V.'top-bar.php');
?>
					<!--用户注册-->
                    <div class="container">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<form role="form" action="?page=registered" method="post" class="registration-form">
                        		
                        		<fieldset>
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3><strong>Step 1 / 3</strong></h3>
		                            		<h4>设置登录密码<h4>
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="inputUser">用户</label>
				                        	<input type="number" name="user" placeholder="填写QQ号码" class="form-control" id="inputUser">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="inputPassword">密码</label>
				                        	<input type="password" name="pass" placeholder="设置本站密码" class="form-control" id="inputPassword">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="repeatPassword">重复密码</label>
				                        	<input type="password" name="repeatpass" placeholder="重复输入密码" class="form-control" id="repeatPassword">
				                        </div>
				                        <button type="button" id="onenext" class="btn btn-next btn-primary">下一步</button>
				                    </div>
			                    </fieldset>
			                    
			                    <fieldset>
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3><strong>Step 2 / 3</strong></h3>
		                            		<h4>填写基本资料</h4>
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
				                        <div class="form-group">
				                        	<label class="sr-only" for="inputName">姓名</label>
				                        	<input type="text" name="name" placeholder="姓名" class="form-control" id="inputName">
				                        </div>
										<div class="form-group">
										   <label class="checkbox-inline">
											  <input type="radio" name="gender"
												 value="男生" checked>男生
										   </label>
										   <label class="checkbox-inline">
											  <input type="radio" name="gender"
												 value="女生"> 女生
										   </label>
										</div>
				                        <div class="form-group">
											<label for="inputSchool"> 学校：</label>
											<select name="school" id="inputSchool" class="form-control">
												<option>南京师范大学</option>
												<option>南京大学</option>
												<option>东南大学</option>
												<option>南京农业大学</option>
												<option>南京航空航天大学</option>
												<option>南京理工大学</option>
												<option>河海大学</option>
												<option>中国药科大学</option>
												<option>南京工业大学</option>
												<option>南京林业大学</option>
												<option>南京邮电大学</option>
												<option>南京财经大学</option>
												<option>南京信息工程大学</option>
												<option>南京医科大学</option>
												<option>南京中医药大学</option>
												<option>三江学院</option>
												<option>南京艺术学院</option>
												<option>南京体育学院</option>
												<option>南京晓庄学院</option>
												<option>南京审计大学</option>
												<option>其它院校</option>
											</select>
				                        </div>
										<div class="form-group">
										   <label class="checkbox-inline">
											  <input type="radio" name="grade"
												 value="大一" checked> 大一
										   </label>
										   <label class="checkbox-inline">
											  <input type="radio" name="grade"
												 value="大二"> 大二
										   </label>
										   <label class="checkbox-inline">
											  <input type="radio" name="grade"
												 value="大三"> 大三
										   </label>
										   <label class="checkbox-inline">
											  <input type="radio" name="grade"
												 value="大四"> 大四
										   </label>
										   <label class="checkbox-inline">
											  <input type="radio" name="grade"
												 value="研一"> 研一
										   </label>
										   <label class="checkbox-inline">
											  <input type="radio" name="grade"
												 value="研二"> 研二
										   </label>
										   <label class="checkbox-inline">
											  <input type="radio" name="grade"
												 value="研三"> 研三
										   </label>
										   <label class="checkbox-inline">
											  <input type="radio" name="grade"
												 value="博士"> 博士
										   </label>
										   <label class="checkbox-inline">
											  <input type="radio" name="grade"
												 value="其它年级"> 其它年级
										   </label>								
										</div>
				                        <button type="button" class="btn btn-previous btn-primary">上一步</button>
				                        <button type="button" class="btn btn-next btn-primary">下一步</button>
				                    </div>
			                    </fieldset>
			                    
			                    <fieldset>
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3><strong>Step 3 / 3</strong></h3>
		                            		<h4>完善简历信息</h4>
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="inputMajor">专业</label>
				                        	<input type="text" name="major" placeholder="在读专业" class="form-control" id="inputMajor">
				                        </div>

				                        <div class="form-group">
										<span><strong>可教授科目：</strong></span>
										   <label class="checkbox-inline">
											  <input type="checkbox" name="subject[]" value="小学语文"> 小学语文
										   </label>
										   <label class="checkbox-inline">
											  <input type="checkbox" name="subject[]" value="小学数学"> 小学数学
										   </label>										  
										   <label class="checkbox-inline">
											  <input type="checkbox" name="subject[]" value="小学英语"> 小学英语
										   </label>
										   <label class="checkbox-inline">
											  <input type="checkbox" name="subject[]" value="初中语文"> 初中语文
										   </label>
										   <label class="checkbox-inline">
											  <input type="checkbox" name="subject[]" value="初中数学"> 初中数学
										   </label>										  
										   <label class="checkbox-inline">
											  <input type="checkbox" name="subject[]" value="初中英语"> 初中英语
										   </label>
										   <label class="checkbox-inline">
											  <input type="checkbox" name="subject[]" value="高中语文"> 高中语文
										   </label>
										   <label class="checkbox-inline">
											  <input type="checkbox" name="subject[]" value="高中数学"> 高中数学
										   </label>										  
										   <label class="checkbox-inline">
											  <input type="checkbox" name="subject[]" value="高中英语"> 高中英语
										   </label>
										   <label class="checkbox-inline">
											  <input type="checkbox" name="subject[]" value="初中物理"> 初中物理
										   </label>										  
										   <label class="checkbox-inline">
											  <input type="checkbox" name="subject[]" value="初中化学"> 初中化学
										   </label>
										   <label class="checkbox-inline">
											  <input type="checkbox" name="subject[]" value="初中物理"> 高中物理
										   </label>										  
										   <label class="checkbox-inline">
											  <input type="checkbox" name="subject[]" value="初中化学"> 高中化学
										   </label>
										   <label class="checkbox-inline">
											  <input type="checkbox" name="subject[]" value="史地政生"> 史地政生
										   </label>
										   <label class="checkbox-inline">
											  <input type="checkbox" name="subject[]" value="竞赛"> 竞赛
										   </label>
										   <label class="checkbox-inline">
											  <input type="checkbox" name="subject[]" value="复读"> 复读
										   </label>
										   <label class="checkbox-inline">
											  <input type="checkbox" name="subject[]" value="课外英语"> 课外英语
										   </label>
										   <label class="checkbox-inline">
											  <input type="checkbox" name="subject[]" value="艺术类"> 艺术类
										   </label>										  
										   <label class="checkbox-inline">
											  <input type="checkbox" name="subject[]" value="其它"> 其它
										   </label>
				                        </div>

										<div class="form-group">
				                        	<label for="aboutMe">自我描述：</label>
				                        	<textarea name="aboutme" placeholder="例如：个人擅长、证书、技能、家教经验等" 
				                        				class="form-control" id="aboutMe"></textarea>
				                        </div>

				                        <button type="button" class="btn btn-previous btn-primary">上一步</button>
				                        <button type="submit" class="btn btn-primary">注册！</button>
				                    </div>
			                    </fieldset>
		                    
		                    </form>
		                    
                        </div>
					</div>
					<!--密码一致性验证-->
					<script>
					(function(){
						var onenext=document.getElementById("onenext");
						//初始化移入移出事件
						if(onenext.addEventListener){
							onenext.addEventListener("click",confirmPass);}
						else if(onenext.attachEvent){
							onenext.attachEvent("onClick",confirmPass);
							}
					})(); 
					function confirmPass(){
						var pass=document.getElementById("inputPassword");
						var repeatpass=document.getElementById("repeatPassword");
						if(pass.value != repeatpass.value){
							alert("两次密码输入不一致！");
							location.reload(); 
						}
					}
					</script>



<?php
//页尾
include(V.'footer-content.php');

?>
		<script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
	</body>
</html>