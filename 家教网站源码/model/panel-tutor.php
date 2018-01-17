<?php
	// connect to database
	$conn=new mysqli("localhost", "root", "","test");
	$conn->query("set names utf8");
	if($conn->connect_errno)
	{
		die('Failed to connect to the database:'.mysqli_connect_error());
	}
	
    // prepare query
    $query = "SELECT * FROM registrants WHERE push='1' order by rand() limit 3";
	$result=$conn->query($query);

    // iterate over results
    while ($row = mysqli_fetch_array($result))
    {
		$id=$row["ID"];
		$user=$row["user"];
		$name=$row["name"];
		$gender=$row["gender"];
		$school=$row["school"];
		$grade=$row["grade"];
		$major=$row["major"];
		$subjects=$row["subject"];
		$aboutme=$row["aboutme"];

		echo "
					<div class=\"col-sm-4\">
					  <div class=\"panel panel-info\">
						<div class=\"panel-heading\">
						  <h3 class=\"panel-title\">#$id</h3>
						</div>
						<div class=\"panel-body\">

							<table class=\"table\" style=\"table-layout:fixed\">
							  <tr>
								<td>$name</td>
								<td>$grade</td>
								<td>$gender</td>
							  </tr>
							  <tr>
								<td>$school</td>
								<td><strong>专业：</strong>$major</td>
								<td colspa=\"3\"><strong>QQ：</strong><a href=\"http://wpa.qq.com/msgrd?v=3&uin=2240140092&site=qq&menu=yes\"><span class=\"label label-success\" style=\" float:right\">联系我</span></a></td>
							  </tr>
							  <tr>
								<td colspan=\"3\"><strong>可授课科目：</strong>$subjects</td>
							  </tr>
							  <tr>
							  <td colspan=\"3\"><strong>自我描述：</strong>$aboutme</td>
							  </tr>
						  </table>

						</div>
					  </div>
					 </div>
		";

    }


	$result->free();
	$conn->close();
?>