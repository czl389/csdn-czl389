<div class="container">
	<div class="section">
		<h3>&nbsp 最新 | 家教信息</h3>

<?php
include(M.'panel-student.php');
?>
	<form role="form" action="?page=more" method="post" name="myform1">
		<input name="more" type="hidden" value="查看更多">
		<a href="javascript:document.myform1.submit();"><span class="label label-primary" style=" float:right">查看更多</span></a>
	</form>
	</div><!--section-->	
</div><!--container-->