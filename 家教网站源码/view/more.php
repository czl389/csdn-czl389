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
	
?>
<!--没有登录则不能查看更多-->
<?php if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] === false) 
		{
			$host = $_SERVER["HTTP_HOST"];
			$path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
			header("Location: http://$host$path/?page=tutor");
		 }
?>

<!DOCTYPE html>
<html>
	<head>
	<title>更多家教信息</title>
	<meta name="description" content="更多家教">
	<meta name="keywords" content="更多家教">
<?php 
include(V.'header-content.php');
?>
	</head>
	<body>
<?php 
//导航条
include(V.'top-bar.php');
?>
	<!--返回主页-->
	<div class="alert alert-success" role="alert"> 含绿色标签的消息皆可预约~      
		<a href="?page=tutor"><span class="pull-right glyphicon glyphicon-home"></span><strong class="pull-right">【返回】</strong></a>
	</div>

<div class="container">
	<div class="section">
		<h3>&nbsp 更多 | 家教信息</h3>
<?php
include(M.'more.php');
?>

	</div><!--section-->	
</div><!--container-->


<?php 
//页尾
include(V.'footer-content.php');
?>
	</body>
</html>