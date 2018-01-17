<?php
	 //suppress notices
	error_reporting(E_ALL ^ E_NOTICE);
    // enable sessions
	session_start();

	// were this not a demo, these would be in some database
    //define("USER", "123456");
    //define("PASS", "930310");
	include(M.'pass-valid.php');

    // if username and password were saved in cookie, check them
    if (isset($_COOKIE["user"]) && isset($_COOKIE["pass"]))
    {
        // if username and password are valid, log user back in

        if (!empty($check1))
        {
            // remember that user's logged in
            $_SESSION["authenticated"] = true;
			$_SESSION["user"] = $_COOKIE["user"];

            // re-save username and, ack, password in cookies for another week
            setcookie("user", $_COOKIE["user"], time() + 7 * 24 * 60 * 60);
            setcookie("pass", $_COOKIE["pass"], time() + 7 * 24 * 60 * 60);

            // redirect user to home page, using absolute path, per
            // http://us2.php.net/manual/en/function.header.php
            $host = $_SERVER["HTTP_HOST"];
            $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
            header("Location: http://$host$path/?page=tutor");
            exit;
        }
    }

    // else if username and password were submitted, grab them instead
    else if (isset($_POST["user"]) && isset($_POST["pass"]))
    {
        // if username and password are valid, log user in
        if (!empty($check2))
        {
            // remember that user's logged in
            $_SESSION["authenticated"] = true;
			$_SESSION["user"] = $_POST["user"];

            // save username in cookie for a week
            setcookie("user", $_POST["user"], time() + 7 * 24 * 60 * 60);

            // save password in, ack, cookie for a week if requested
            if ($_POST["keep"])
                setcookie("pass", $_POST["pass"], time() + 7 * 24 * 60 * 60);

            // redirect user to home page, using absolute path, per
            // http://us2.php.net/manual/en/function.header.php
            $host = $_SERVER['HTTP_HOST'];
            $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
            header("Location: http://$host$path/?page=tutor");
            exit;
        }
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>大学生登录页</title>
		<meta name=\"description\" content=\"马上登录，查看你的简历状态。\">
		<meta name=\"keywords\" content=\"登录网站,南京大学生家教网\">
<?php
include(V.'header-content.php');
?>
		

		<style type="text/css">
			body {
				padding-top: 40px;
				padding-bottom: 40px;
				background-color: #eee;
			}

			.form-signin {
				max-width: 330px;
				padding: 15px;
				margin: 0 auto;
			}
			.form-signin .form-signin-heading,
			.form-signin .checkbox {
				margin-bottom: 10px;
			}
			.form-signin .checkbox {
				font-weight: normal;
			}
			.form-signin .form-control {
				position: relative;
				height: auto;
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				box-sizing: border-box;
				padding: 10px;
				font-size: 16px;
			}
			.form-signin .form-control:focus {
				z-index: 2;
			}
			.form-signin input[type="text"] {
				margin-bottom: -1px;
				border-bottom-right-radius: 0;
				border-bottom-left-radius: 0;
			}
			.form-signin input[type="password"] {
				margin-bottom: 10px;
				border-top-left-radius: 0;
				border-top-right-radius: 0;
			}
		</style>

	</head>
	<body>
<?php
//导航条
include(V.'top-bar.php');
?>
<!--登录-->
		<div class="container">
			<form class="form-signin" action="" method="post">
				<h2 class="form-signin-heading"><strong>帐号登录<strong></h2>
				<label for="inputUser" class="sr-only">用户</label>
				<?php if (isset($_POST["user"])) { ?>
				<input type="text" name="user" id="inputUser" value="<?php echo htmlspecialchars($_POST["user"]);?>" class="form-control" placeholder="输入QQ号码" required autofocus>
				<?php } elseif(isset($_COOKIE["user"])) { ?>
				<input type="text" name="user" id="inputUser" value="<?php echo htmlspecialchars($_COOKIE["user"]);?>" class="form-control" placeholder="输入QQ号码" required autofocus>
				<?php } else { ?>
				<input type="text" name="user" id="inputUser" value="" class="form-control" placeholder="输入QQ号码" required autofocus>
				<?php } ?>
				<label for="inputPassword" class="sr-only">密码</label>
				<input type="password" name="pass" id="inputPassword" class="form-control" placeholder="输入本站密码" required>
				<div class="checkbox">
					<label class="checkbox">
					<input type="checkbox" name="keep" value="remember-me"> 记住我
					</label>
				</div>
				<button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
			</form>

			<br>
			<div class="alert alert-info" role="alert">
				<p class="text-center">
				<strong><a href="" data-toggle="modal" 
   data-target="#myModal">忘记密码？</a></strong> | <strong><a href="?page=register">注册新账号</a></strong>
				</p>
			</div>
        </div> <!-- /container -->

<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
               提醒：
            </h4>
         </div>
         <div class="modal-body">
            请联系网站管理人员找回密码。联系方式：QQ2240140092。
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" 
               data-dismiss="modal">关闭
         </div>
      </div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>


<?php
//页尾
include(V.'footer-content.php');
?>
	</body>
</html>