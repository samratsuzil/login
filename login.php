<?php
	$servername ="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="records";
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	//$conn=mysqli_connect($servername,$dbusername,$dbpassword,$dbname);
	$conn=new mysqli($servername,$dbusername,$dbpassword,$dbname);
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM login";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{
		// output data of each row
		$match=0;
		while($row = $result->fetch_assoc())
		{	
			$u= $row["username"];
			$p=($row["password"]);
			if($u==$username && $p==md5($password))
			{
				$match++;
				break;
			}	
		}
		if($match==1)
		{
			echo "username and password are matched<br>";	
		}
		else
		{
			echo "username and password are incorect<br>";
		}
	}	 
	
	else 
	{
		echo "no records";
	}
$conn->close();
?>
