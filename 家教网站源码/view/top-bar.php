		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class='container'>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle"
					data-toggle="collapse" data-target="#mainmenu">
						<span class="sr-only">导航条</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="?page=about">一诚家教</a>
				</div><!--navbar-header-->

				<div class="collapse navbar-collapse" id="mainmenu">
					<ul class="nav navbar-nav navbar-left">
						<li <?php if($page=="home") echo "class=\"active\"";?>><a href="?page=home">首页</a></li>
						<li <?php if($page=="student") echo "class=\"active\"";?>><a href="?page=student">我是家长</a></li>
						<li <?php if($page=="tutor") echo "class=\"active\"";?>><a href="?page=tutor">我是大学生</a></li>
						<li <?php if($page=="contact") echo "class=\"active\"";?>><a href="?page=contact">联系我们</a></li>
					</ul>
				</div><!--collapse-->

			</div><!--container-->
		</nav><!--navbar-->
