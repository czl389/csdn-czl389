<?
	// connect to database
	$conn=new mysqli("localhost", "root", "","test");
	$conn->query("set names utf8");
	if($conn->connect_errno)
	{
		die('Failed to connect to the database:'.mysqli_connect_error());
	}
	if (isset($_SESSION["user"]))
		$user=$_SESSION["user"];
	else
		$user=0;
	
    // prepare query
    $query = "SELECT * FROM registrants WHERE user='$user'";
	$result=$conn->query($query);
    // iterate over results
    while ($row = mysqli_fetch_array($result))
    {
		$id=$row["ID"];
		$user=$row["user"];
		$pass=$row["pass"];
		$name=$row["name"];
		$gender=$row["gender"];
		$school=$row["school"];
		$grade=$row["grade"];
		$major=$row["major"];
		$subject=$row["subject"];
		$aboutme=$row["aboutme"];
		$push=$row["push"];
    }
	$result->free();
	$conn->close();
?>