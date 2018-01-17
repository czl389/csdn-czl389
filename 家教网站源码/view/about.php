<!DOCTYPE html>
<html>
	<head>
	<title>一诚家教-关于</title>
	<meta name="description" content="一诚家教网是由南京在校大学生创办的家教信息服务平台。
	家教老师来自南京各大高校，包括南大、东大、南航、南理工、南京师范等高校在校大学生。">
	<meta name="keywords" content="大学生家教,南京家教,1对1上门,家教中介服务,一诚家教,
	南京理工家教,南京师范家教">
<?php
	include(V.'header-content.php');
?>

	</head>
	<body>
<?php
//导航条
include(V.'top-bar.php');
?>

<?php
//超大屏幕
include(V.'jumbotron.php');

//include(V.'carousel.php');
?>
<div class="container">
<div class="panel-group" id="accordion">
   <div class="panel panel-info">
      <div class="panel-heading">
         <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" 
               href="#collapseOne">
               请家教费用？
            </a>
         </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in">
         <div class="panel-body" style="font-family:Microsoft YaHei">
            我们会提供大学生家教的行情价供参考，具体价格可与教员协商。<br>
			具体如下：
			<table class="table table-hover">
			   <caption>大学生家教时薪参考</caption>
			   <thead>
				  <tr>
					 <th>年级</th>
					 <th>时薪</th>
				  </tr>
			   </thead>
			   <tbody>
				  <tr>
					 <td>小一至小六</td>
					 <td>每小时35-45元</td>
				  </tr>
				  <tr>
					 <td>初一至初三</td>
					 <td>每小时40-50元</td>
				  </tr>
				  <tr>
					 <td>高一至高三</td>
					 <td>每小时50-70元</td>
				  </tr>
			   </tbody>
			</table>
			注：家长无需支付任何费用给一诚家教信息服务平台。
         </div>
      </div>
   </div>
   <div class="panel panel-success">
      <div class="panel-heading">
         <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" 
               href="#collapseTwo">
               致大学生：大学期间为什么要做家教？
            </a>
         </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse">
         <div class="panel-body" style="font-family:Microsoft YaHei">
            为了感恩父母，为了解决生活费，这些都是合理的理由。<br>除此之外，做家教还可以锻炼我们的时间管理的能力、沟通和表达的能力。<br>培养我们的责任感，学以致用，学会换位思考等。<br>家教相比较其它兼职，薪酬合适、可靠稳定，更能发挥我们的擅长，当然是大学生心中的优选。
         </div>
      </div>
   </div>
   <div class="panel panel-default">
      <div class="panel-heading">
         <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" 
               href="#collapseThree">
               为什么要对大学生收取一定信息费？
            </a>
         </h4>
      </div>
      <div id="collapseThree" class="panel-collapse collapse">
         <div class="panel-body"  style="font-family:Microsoft YaHei">
            首先向大家道歉，我们没有提供免费的午餐，当然，我们也无法容忍对大学生的欺骗行为。<br>一诚家教认真做正规的大学生家教中介服务，不断完善服务来收获广大家长和大学生的信任。<br>除了完成常规运营推广、甄别虚假学员教员、全程不中断服务之外，我们同样也是在校大学生，不可避免在课业之外需要花费自己的时间和精力。<br>所以，我们收取一定信息费，平均为2次家教工资，具体根据信息价值调整。感谢理解和支持~
         </div>
      </div>
   </div>
   <div class="panel panel-warning">
      <div class="panel-heading">
         <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" 
               href="#collapseFour">
               问题反馈
            </a>
         </h4>
      </div>
      <div id="collapseFour" class="panel-collapse collapse">
         <div class="panel-body"  style="font-family:Microsoft YaHei">
            有关一诚家教安排的家教行为，出现的问题，或者约定未完全符合的情况，请及时反馈给我们。
         </div>
      </div>
   </div>
</div>
<script type="text/javascript">
   $(function () { $('#collapseFour').collapse('hide')});
   $(function () { $('#collapseTwo').collapse('hide')});
   $(function () { $('#collapseThree').collapse('hide')});
   $(function () { $('#collapseOne').collapse('hide')});
</script>  

</div><!--container-->

<?php
//页尾
include(V.'footer-content.php');
?>
<script src="http://v3.bootcss.com/assets/js/docs.min.js"></script>
<script src="http://v3.bootcss.com/assets/js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>